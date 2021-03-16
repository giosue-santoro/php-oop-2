<?php

class Merchandise {

    public $marca;

    public $prezzo;

    public $provenienza;

    public function __construct(string $marca, int $prezzo, string $provenienza) {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->provenienza = $provenienza;
    }

    //GETTERS

    public function getBrand() {
        return $this->marca;
    }

    public function getPrice() {
        return $this->prezzo;
    }

    public function getOrigin() {
        return $this->provenienza;
    }
}

class Shoes extends Merchandise {
};

$nike = new Shoes('Nike', 100, 'Made in China');
$adidas = new Shoes('Adidas', 50, 'Made in China');

class Customer {

    public $name;

    public $age;

    public $email;

    public $purchases = [];

    public $sales = [];

    public function __construct($name, $age, $email, $sales){
        $this->name = $name;
        $this->age = $age;
        $this->email= $email;
        $this->sales = $sales;
    }

    //SETTERS

    public function buy(Merchandise $shoes) {
        $this->purchases[] = $shoes;
    }

    // public function sell() {
    //     $this->sales[] = ;
    // }

    //GETTERS
    public function getName() {
        return $this->name;
    }

}

$pinco = new Customer('pincopallino', '33', 'pincop@gmail.com', 1);

$pinco->buy($nike);

echo $pinco->getName() . ' ha acquistato il modello ' . $nike->getBrand() . ' al prezzo di ' . $nike->getPrice() . ' Euro';