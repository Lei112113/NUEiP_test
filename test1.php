<?php
interface Vehicle { //介面只能有方法
    public function run();
    public function stop();
}

abstract class Transport implements Vehicle{
    //implements後面可以加很多介面
    //繼承則可以有元素及方法 ,一旦類別內有沒有內容(functionc後沒有大括號寫出執行方法的要用abstract
    //abstract可以被繼承
    protected string $brand;
    protected string $color;
    protected int $speed;

    public function __construct(string $brand, string $color, int $speed) {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }
    
}
class Car extends Transport{
    //繼承只能繼承一次，且只能有一個父類別
    //但繼承後仍能使用多個介面，但是需要將function的實作方法寫出來
    private int $doors;

    public function __construct(string $brand, string $color, int $speed, int $doors) {
        parent::__construct($brand, $color, $speed);
        $this->doors = $doors;
    }
    public function run() {
        $this->speed++;
        
    }

    public function stop() {
        $this->speed--;
       
    }

}

class Motorcycle extends Transport{
    //繼承只能繼承一次，且只能有一個父類別
    //但繼承後仍能使用多個介面，但是需要將function的實作方法寫出來
    public function __construct(string $brand, string $color, int $speed, int $cylinders) {
        parent::__construct($brand, $color, $speed);
        
    }

    public function run() {
        $this->speed++;
    }

    public function stop() {
        $this->speed--;
    }
}