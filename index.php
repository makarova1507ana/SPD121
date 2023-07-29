<?php
//игра файтинг в консоле

interface IBeing
{
    public function getName();
    public function downXp($value);
    public function ISLive();
}

class Being implements IBeing
{
    private $name;
    private $hp;

    public function __construct($name, $hp)
    {
        $this->name = $name;
        $this->hp = $hp;
    }

    public function hp(){
        return $this->hp;
    }
    public function ISLive()
    {
        return $this->hp > 0;
    }

    public function getName()
    {
        return $this->name;
    }

    public function downXp($value)
    {
        return $this->hp -= $value;
    }

}

interface IBattle
{
    public function addBeing(IBeing $being);
    public function selected();

}

class Battle implements IBattle
{
    public $beings = [];

    public function addBeing(IBeing $being)
    {
        return $this->beings[] = $being;
    }

    public function selected(){
        $con = count($this->beings);
        if($con == 1){
            echo 'Ура, ' . (array_pop($this->beings)->getName()).' - победил';
            return true;
        }
        $attacher_id = array_rand($this->beings);
        $attaker=$this->beings[$attacher_id]; //random attacker object
        do{
            $loozer_id=array_rand($this->beings);
        }while($loozer_id == $attacher_id);
        $loozer=$this->beings[$loozer_id]; //another random unique object
        $this->fight($attaker,$loozer);

    }

    private function fight($attaker,$loozer)
    {
        $hp=rand(1, 100);
        $loozer->downXp($hp);
        echo $attaker->getName().' бьет '. $loozer->getName().' на '. $hp.'хп, осталось ('.$loozer->hp(). ' хп)'."</br>";
        if (!$loozer->ISLive()){
            unset($this->beings[ array_search($loozer,$this->beings)]);
            sort($this->beings);
            echo $loozer->getName().' - был убит!'."</br>";
        }
        $this->selected();
    }
}
$being = new Being('Vital',300); // 1
//var_dump($being);
$being1= new Being('Vova',300); // 2
$being2= new Being('Pasha',300); // 3
$being3= new Being('Sasha',300); // 3
$battle = new Battle();
$battle->addBeing($being);
$battle->addBeing($being1);
$battle->addBeing($being2);
$battle->addBeing($being3);
$battle->selected();


?> 
