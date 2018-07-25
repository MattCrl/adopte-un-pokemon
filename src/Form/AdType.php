<?php

namespace App\Form;

use App\Entity\Ad;
use App\Entity\Location;
use App\Form\DataTransformer\StringToPokemonTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdType extends AbstractType
{
    private $em;

    private $transformer;

    public function __construct(EntityManagerInterface $em, StringToPokemonTransformer $transformer)
    {
        $this->em = $em;
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',
                TextType::class,
                ['label' => 'Titre de l\'annonce'])
            ->add('description',
                TextareaType::class,
                ['label' => 'Texte de l\'annonce'])
            ->add('location',
                EntityType::class,
                ['class' => Location::class])
            ->add('price',
                            MoneyType::class)
            ->add('pokemon',
                        TextType::class,
                            ['attr' => ['autocomplete' => 'off'],
                                'label' => 'Nom du Pokémon']);

        $builder
            ->get('pokemon')
            ->addModelTransformer($this->transformer);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ad::class,
        ]);
    }



}
