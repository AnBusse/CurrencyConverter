<?php

namespace App\Controller;

use App\Entity\Currency;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction(){

        $currencyOne = new Currency();
        $currencyTwo = new Currency();

        $currencyOne->setValue(1.5);
        $currencyTwo->setValue(2.5);

        $currencyOne->setCurrencyName('Euro');
        $currencyTwo->setCurrencyName('Dollar');

        //TODO: include listAction from CurrencyController and fetch data

        $form1 = $this->createFormBuilder($currencyOne)
            ->add('currencyName', ChoiceType::class,
                array(
                    'choices'  => array(
                        'Euro' => null,
                        'Dollar' => true,
                        'No' => false,
                    )))
            ->add('Submit', SubmitType::class, array('label' => 'Convert Currency'))
            ->getForm();

        return $this->render('homepage.html.twig', array('form1' => $form1,));
    }
}