<?php 

class Functions{

    private $add;
    private $minus;
    private $multiply;
    private $Divide;

    public function __construct($add, $minus,$multiply, $Divide) {
        $this->add = $add;
        $this->minus = $minus;
        $this->multiply = $multiply;
        $this->Divide = $Divide;
    }

    public function getAdd() {
        return $this->add;
    }
    public function getMinus() {
        return $this->minus;
    }
    public function getMutiply() {
        return $this->multiply;
    }
    public function getDivide() {
        return $this->Divide;
    }
}