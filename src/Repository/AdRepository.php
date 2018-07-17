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

    public function getSixLastAds()
    {
        return $this->createQueryBuilder('a')
            ->select('a')
            ->orderBy('a.id', 'DESC')
            ->setMaxResults(6)
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $pokemon
     * @return array
     */
    public function getAdsLikePokemonName($pokemon)
    {
        $pokemon = '%' . $pokemon . '%';
        $qb = $this->createQueryBuilder('a')
            ->join('a.pokemon', 'p')
            ->where('p.name LIKE :name')
            ->setParameter('name', $pokemon)
            ->getQuery();
        return $qb->getResult();
    }
}
