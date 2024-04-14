<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeniorController extends Controller
{  
    public function increaseSalary(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
    
        $senior = new Senior($name, $salary, $descnumber);
        return view('seniorIncrease')
            ->with('employee', $senior->show($workedHours))
            ->with('salaryIncrease', $senior->increaseSalary($workedHours)); 
    }

    public function showInformation(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');

        $senior = new Senior($name, $salary, $descnumber);
        return view('seniorHomeScreen')
            ->with('employee', $senior->show($workedHours));
    }

    public function Taxcalc(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');

        $senior = new Senior($name, $salary, $descnumber);
        return view('seniorTax')
            ->with('employee', $senior->show($workedHours))
            ->with('taxs', $senior->Taxcalc($workedHours));
    }
}
