<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 14/07/18
 * Time: 10:26
 */

namespace App\Form\DataTransformer;

use App\Entity\Pokemon;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;


class StringToPokemonTransformer implements DataTransformerInterface
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Transform object Pokemon to string Pokemon name
     * @param $pokemon
     * @return mixed
     */
    public function transform($pokemon)
    {
        if (null === $pokemon) {
            return;
        }

        return $pokemon->getId();
    }

    /**
     * Transform string to ArrayCollection
     * @param mixed $value
     * @return ArrayCollection
     */
    public function reverseTransform($value)
    {
        $results = new ArrayCollection();
        $object = $this->em->getRepository(Pokemon::class)->findOneByName($value);

        if (null === $object) {
            throw new TransformationFailedException();
        }

        $results->add($object);
        return $object;
    }

}