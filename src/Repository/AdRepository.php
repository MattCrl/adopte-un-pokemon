<?php

namespace App\Repository;

use App\Entity\Ad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ad[]    findAll()
 * @method Ad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ad::class);
    }

    /**
     * It returns the eight lasts ads that have been posted on the website
     * @return mixed
     */
    public function getHeightLastAds()
    {
        return $this->createQueryBuilder('a')
            ->select('a')
            ->where('a.isSold = false')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(8)
            ->getQuery()
            ->getResult();
    }

    /**
     * It returns a query instead of a basic findAll that returns results
     * Used for pagerFanta pagination
     */
    public function findAllQuery()
    {
        return $this->createQueryBuilder('a')
            ->where('a.isSold = false')
            ->orderBy('a.id', 'DESC');
    }

    /**
     * @param $userId
     * @return \Doctrine\ORM\Query
     */
    public function findMemberAds($userId)
    {
        return $this->createQueryBuilder('a')
            ->where('a.user = :user')
            ->andWhere('a.isSold = false')
            ->setParameter('user', $userId)
            ->getQuery();
    }

    /**
     * it returns every sold pokemon
     * @param $userId
     * @return \Doctrine\ORM\Query
     */
    public function findMemberAllSoldPokemon($userId)
    {
        return $this->createQueryBuilder('a')
            ->where('a.user = :user')
            ->andWhere('a.isSold = true')
            ->setParameter('user', $userId)
            ->getQuery();
    }

    /**
     * Query to sum the price of pokemon sold by the user
     * @param $userId
     * @return mixed
     */
    public function sumSoldPrices($userId)
    {
        return $this->createQueryBuilder('a')
            ->where('a.user = :user')
            ->andWhere('a.isSold = true')
            ->setParameter('user', $userId)
            ->select('SUM(a.price) as sumPrice')
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @param $pokemon
     * @return \Doctrine\ORM\Query
     */
    public function getAdsLikePokemonName($pokemon)
    {
        $pokemon = '%' . $pokemon . '%';
        return $this->createQueryBuilder('a')
            ->join('a.pokemon', 'p')
            ->where('p.name LIKE :name')
            ->setParameter('name', $pokemon)
            ->getQuery();
    }

    /**
     * Query to filter ads by Type of pokemon
     * @param $type
     * @return \Doctrine\ORM\Query
     */
    public function getAdsLikeType($type)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->join('a.pokemon', 'p')
            ->where('p.type = :type')
            ->setParameter('type', $type)
            ->getQuery();
    }


    /**
     * @param $type
     * @param $adId
     * @return mixed
     */
    public function getRelatedAds($type, $adId)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.id', 'DESC')
            ->join('a.pokemon', 'p')
            ->where('p.type = :type')
            ->andWhere('a.id != :adId')
            ->setParameter('type', $type)
            ->setParameter('adId', $adId)
            ->getQuery()
            ->getResult();
    }

}
