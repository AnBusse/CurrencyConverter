<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 2-7-18
 * Time: 22:36
 */

namespace App\Entity\Form;

use App\Controller\CurrencyController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConverterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $currencyListObj = new CurrencyController;
        $currencyList = $currencyListObj->listAction();

        $form1 = $builder
            ->add('currency_value', NumberType::class)
            ->add('currencyName', ChoiceType::class,
                array(
                    'choices'  => $currencyList
                ))
            ->add('Submit', SubmitType::class)
            ->getForm();

        return $form1;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

}