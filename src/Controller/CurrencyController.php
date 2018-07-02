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
    const API_KEY = '579cf53f387105a2722afcd7df9ed6d9';

    public function listAction(){
        $url = 'http://data.fixer.io/api/latest?access_key='.self::API_KEY;
        $currencyValuesObj = json_decode(file_get_contents($url), true);
        return $currencyValuesObj['rates'];
    }

    public function getCurrencyAction($val){
        $currencyList = self::listAction();
        return array_search($val, $currencyList);
    }
}