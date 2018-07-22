<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 16/07/18
 * Time: 13:46
 */

namespace App\Form;

use App\Entity\Ad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AdSearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('GET')
            ->add('pokemon',
                    TextType::class, [
                        'label' => false,
                        'attr' => [
                            'placeholder' => 'Saisissez le nom d\'un Pokemon',
                            'class' => 'search-margin'

                        ]
                ])
            ->add('Rechercher',
                    SubmitType::class, [
                        'attr' => [
                            'class' => 'btn btn-primary',
                        ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'      => Ad::class,
            'csrf_protection' => false,
        ));
    }

}
