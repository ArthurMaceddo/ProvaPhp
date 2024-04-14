<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Funcionario extends Model implements EmployeeInterface
{
    use HasFactory;

    private $name;
    private $salary;
    private $descnumber;

    public function increaseSalary($workedHours) {
        $currentSalary = $this->getSalary() * $workedHours;
        $increase = $currentSalary * 0.10;
        $newSalary = $currentSalary + $increase;
        $this->setSalary($newSalary);
        return $newSalary;
    }

    public function calcTax($workedHours) {
        $salary = $this->getSalary() * $workedHours;
        $ImpostoRenda = $salary * 0.11;
        $inss = $salary * 0.08;
        $Sindico = $salary * 0.05;
        $total_taxes = $ImpostoRenda + $inss + $Sindico;
        $SalarioLiquido = $salary - $total_taxes;

        return "ImpostodeRenda $ImpostoRenda, INSS $inss, Sindico $Sindico, Salario Liquido $SalarioLiquido";
    }

    public function show($workedHours): array {
        return [
            'name' => $this->name,
            'hourly_salary' => $this->salary,
            'description_number' => $this->descnumber,
            'workedHours' => $workedHours,
            'salary' => $this->salary * $workedHours,
        ];
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        return $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getdescnumber() {
        return $this->descnumber;
    }

    public function setdescnumber($descnumber) {
        return $this->descnumber = $descnumber;
    }

    public function __construct($name, $salary, $descnumber) {
        $this->name = $name;
        $this->salary = $salary;
        $this->descnumber = $descnumber;
    }
}
