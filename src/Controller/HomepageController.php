<?php

namespace App\Controller;

use App\Entity\Currency;
use App\Entity\Form\ConverterFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction(Request $request){

        $currencyOne = new Currency();

        $currencyOne->setCurrencyName('Euro');

        //TODO: include listAction from CurrencyController and fetch data

        $form = $this->createForm(ConverterFormType::class);

        // only handles data on POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $userInputValue = $formData['currency_value'];
            $userSelectedCurrency = $formData['currencyName'];

            $currencyValuesObj = new CurrencyController();
            $currencyName = $currencyValuesObj->getCurrencyAction($userSelectedCurrency);

            $returnValue = $userInputValue * $userSelectedCurrency;

            return $this->render('homepage.html.twig', array(
                'calcValue' => $returnValue,
                'userInputValue' => $userInputValue,
                'currencyName' => $currencyName
            ));
        }

        return $this->render('homepage.html.twig', array('form' => $form->createView()
        ));
    }
}