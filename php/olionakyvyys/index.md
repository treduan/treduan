# Olion muuttujien näkyvyys

Olion sisäisillä muuttujilla on määriteltynä näkyvyys eli ne ovat tyyppiä *public*, *protected* tai *private*. PHP:ssä on tyypillisintä käyttää *protected*ia muuttujien kanssa. *public* tarkoittaa, että muuttuja näkyy kaikille ja on käytettävissä kaikkialla. *protected* tarkoittaa, että sitä voidaan käyttää vain kyseisen luokan sisällä tai sellaisissa luokissa, jotka ovat siitä periytettyjä tai joista se periytyy (lisää periytyvyydestä myöhemmin). *private* tarkoittaa, että muuttujaa voidaan käsitellä ainoastaan kyseisen luokan sisällä. Kaikki luokan funktiot ovat kuitenkin automaattisesti tyyppiä *public*, mutta niistäkin voi tehdä näkyvyydeltään rajoitetumpia.

## Demotehtävä 1

1. Kopioi alla oleva luokka.
2. Luo muuttujasta olio. 
3. Kokeile tulostaa jokainen muuttuja (esim. ``echo $object->public``) ja lopuksi kutsu olion *printHello*-funktiota.

```php
<?php
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; 
echo $obj->protected; 
echo $obj->private; 
$obj->printHello(); 

````