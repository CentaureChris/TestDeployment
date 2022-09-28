<?php
namespace App;

class Calculator 
{
    private $num_a;
    private $num_b;

    public function add($a,$b)  
    {
        $this->num_a = $a;
        $this->num_b = $b;
        return $this->num_a + $this->num_b;
    }

    public function sub($a,$b)  
    {
        $this->num_a = $a;
        $this->num_b = $b;
        return $this->num_a - $this->num_b;
    }

    public function mul($a,$b)  
    {
        $this->num_a = $a;
        $this->num_b = $b;
        return $this->num_a * $this->num_b;
    }

    public function div($a,$b)  
    {
        $this->num_a = $a;
        $this->num_b = $b;
        return $this->num_a / $this->num_b;
    }
}



?>