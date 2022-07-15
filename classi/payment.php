<?php
class Payment {
    protected $cardNumber;
    protected $scadenza;

    public function __construct($_cardNumber, $_scadenza){
        $this->setCardNumber($_cardNumber);
        $this->setScadenza($_scadenza);
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getScadenza()
    {
        return $this->scadenza;
    }

    public function setscadenza($scadenza)
    {   
        $cardDate = DateTime::createFromFormat('m-y', $scadenza);
        $dataOdierna = new DateTime('now');
        if($cardDate > $dataOdierna){
            $this->scadenza = $scadenza;
        }

        return $this;
    }
}


?>