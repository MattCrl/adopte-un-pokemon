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

    public function getHeightLastAds()
    {
        return $this->createQueryBuilder('a')
            ->select('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(8)
            ->getQuery()
            ->getResult();
    }

    public function findAllQuery()
    {
        return $this->createQueryBuilder('a');
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

    public function getAdsLikeType($type)
    {
        return $this->createQueryBuilder('a')
            ->join('a.pokemon', 'p')
            ->where('p.type = :type')
            ->setParameter('type', $type)
            ->getQuery();
    }
}
