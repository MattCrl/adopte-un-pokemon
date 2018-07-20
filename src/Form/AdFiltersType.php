<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 20/07/18
 * Time: 09:25
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdFiltersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('GET')
            ->add('types', ChoiceType::class, [
                'choices' => [
                    'Acier' => 'Acier',
                    'Combat' => 'Combat',
                    'Dragon' => 'Dragon',
                    'Eau' => 'Eau',
                    'Feu' => 'Feu',
                    'Fée' => 'Fée',
                    'Glace' => 'Glace',
                    'Insecte' => 'Insecte',
                    'Normal' => 'Normal',
                    'Plante' => 'Plante',
                    'Poison' => 'Poison',
                    'Psy' => 'Psy',
                    'Roche' => 'Roche',
                    'Sol' => 'Sol',
                    'Spectre' => 'Spectre',
                    'Ténèbre' => 'Ténèbre',
                    'Vol' => 'Vol',
                    'Électrique' => 'Électrique',
                ],
                'label' => 'Filtrer par type de Pokémon'
            ]);


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => null,
            'csrf_protection' => false,
            "allow_extra_fields" => true
        ));
    }

    public function getBlockPrefix()
    {
        return false;
    }

}