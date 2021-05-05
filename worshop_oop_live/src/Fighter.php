<?php 

class Fighter{
    //proprety
    const MAX_LIFE = 100;
    public $name;
    public $dexterity;
    public $force;
    public $life = self::MAX_LIFE;
    
    public function __construct($name, $dexterity,$force)
    {
        $this->name = $name;
        $this->dexterity = $dexterity;
        $this->force= $force;
    }

    public function fight($player){
        $attack = rand(1, $this->force);
        $defence = rand(1, $attack);
        $degat = $attack - $defence;
        $degat <= 0 ? 0 : $degat;
        $this->life -= $degat;
    }

   

}

?>