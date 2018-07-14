<?php

namespace App\Repository;

use App\Entity\Pokemon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pokemon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pokemon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pokemon[]    findAll()
 * @method Pokemon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pokemon::class);
    }

    /**
     * @param $pokemon
     * @return array
     */
    public function getPokemonLike($pokemon)
    {
        $pokemon = '%' . $pokemon . '%';
        $qb = $this->createQueryBuilder('p')
            ->select('p.name')
            ->where('p.name LIKE :name')
            ->setParameter('name', $pokemon)
            ->getQuery();
        return $qb->getResult();
    }

}
