<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Senior extends Employee
{

    public function __construct($name, $salary, $descnumber){
            parent::__construct($name, $salary, $descnumber);
    }

    public function increaseSalary($workedHours) {
        if($workedHours < 120) {
            return "does not increase";
        }
        else {
        $currentSalary = $this->getSalary() * $workedHours;
        $increase = $currentSalary * 0.20; 
        $newSalary = $currentSalary + $increase;
        $this->setSalary($newSalary);
        
        return $newSalary; 
        }
    }
}
