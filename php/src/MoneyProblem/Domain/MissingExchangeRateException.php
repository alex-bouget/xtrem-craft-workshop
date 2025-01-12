<?php

namespace MoneyProblem\Domain;

class MissingExchangeRateException extends \Exception
{

    /**
     * Exception constructor when no exchange rate is found
     * @param Currency $currency1
     * @param Currency $currency2
     */
    public function __construct(Currency $currency1, Currency $currency2)
    {
        parent::__construct(sprintf('%s->%s', $currency1, $currency2));

    }
}