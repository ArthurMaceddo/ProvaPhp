<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuniorController extends Controller
{
    public function increaseSalary(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
    
        $junior = new Junior($name, $salary, $descnumber);
        return view('increaseJunior')
            ->with('employee', $junior->show($workedHours))
            ->with('increaseSalary',$junior->increaseSalary($workedHours)); 
    }

    public function showInfo(Request $request,string $name,int $salary,int $descnumber) {
        $workedHours = $request->query('workedHours');

        $junior = new Junior($name, $salary, $descnumber);
        return view('JuniorHomeScreen')
            ->with('employee', $junior->show($workedHours));
    }

    public function Taxcalc(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
    
        $junior = new Junior($name, $salary, $descnumber);
        return view('JuniorTax')
            ->with('employee', $junior->show($workedHours))
            ->with('taxs', $junior->Taxcalc($workedHours));
    } 
}
