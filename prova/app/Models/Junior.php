<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Junior extends Employee
{

    public function __construct($name, $salary, $descnumber){
            parent::__construct($name, $salary, $descnumber);
    }

    public function increaseSalary($workedHours){
        if($workedHours < 80){
            return "Não aumenta";
        }
        return parent::increaseSalary($workedHours);
    }
}
