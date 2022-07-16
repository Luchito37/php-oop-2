<?php

trait PaymentContainer
{
    private $paymentMethods = [];

    public function addPayment($_paymentMethod)
    {
        $this->paymentMethods[] = $_paymentMethod;
    }

    /**
     * Get the value of paymentMethods
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    public function getMethod($index)
    {
        return $this->getPaymentMethods()[$index];
    }
}
