<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 1-7-18
 * Time: 22:16
 */

namespace App\Controller;


class CurrencyController
{
    const URLSTUB = 'http://data.fixer.io/api/';
    const API_KEY = '579cf53f387105a2722afcd7df9ed6d9';

    public function listAction(){
        $url = self::URLSTUB . 'latest?access_key=' . self::API_KEY;
        $currencyValues = json_decode(file_get_contents($url), true);
        $arrayKeys = array_keys($currencyValues['rates']);
        $combinedArray = array_combine($arrayKeys,$arrayKeys);
        return $combinedArray;
    }

    public function getCurrencyAction($val){
        $currencyList = self::listAction();
        return array_search($val, $currencyList);
    }

    public function convertAction($from, $to, $amount){
        $url = self::URLSTUB . 'convert?access_key=' . self::API_KEY . '&from=' . $from . '&to=' .$to . '&amount=' . $amount;
        $convertedAmount = json_decode(file_get_contents($url), true);
        return $convertedAmount;
    }
}