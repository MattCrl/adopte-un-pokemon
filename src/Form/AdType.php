<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\DataTransformer\StringToPokemonTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
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
            ->add('title')
            ->add('description')
            ->add('isSold')
            ->add('image')
            ->add('user')
            ->add('location')
            ->add('category')
            ->add('pokemon',
                        TextType::class,
                            ['attr' => ['autocomplete' => 'off']]);

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
