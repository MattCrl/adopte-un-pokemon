<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 16/07/18
 * Time: 13:46
 */

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;


class AdSearchType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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

}
