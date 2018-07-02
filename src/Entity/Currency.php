<?php
/**
 * Created by PhpStorm.
 * User: andrea
 * Date: 1-7-18
 * Time: 22:02
 */

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Currency
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */protected $id;

    /**
     * @ORM\Column(type="float")
     */
    protected $currency_value;

    /**
     * @ORM\Column(type="float")
     */
    protected $exchangeRate;

    /**
     * @ORM\Column(type="text")
     */
    protected $currencyName;

    /**
     * @return mixed
     */
    public function getCurrencyName()
    {
        return $this->currencyName;
    }

    /**
     * @param mixed $currencyName
     */
    public function setCurrencyName($currencyName): void
    {
        $this->currencyName = $currencyName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCurrencyValue()
    {
        return $this->currency_value;
    }

    /**
     * @param mixed $currency_value
     */
    public function setCurrencyValue($currency_value): void
    {
        $this->currency_value = $currency_value;
    }

    /**
     * @return mixed
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * @param mixed $exchangeRate
     */
    public function setExchangeRate($exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

}