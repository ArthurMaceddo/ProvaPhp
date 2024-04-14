<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class PlenoController extends Controller
{

    public function increaseSalary(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
    
        $pleno = new Pleno($name, $salary, $descnumber);
        return view('increaseSalary')
            ->with('employee', $pleno->show($workedHours))
            ->with('increaseSalary', $pleno->increaseSalary($workedHours)); 
    }
    
    public function showInformation(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
      
        $pleno = new Pleno($name, $salary, $descnumber);
        return view('employee')
            ->with('employee', $pleno->show($workedHours));
    }

    public function Taxcalc(Request $request, string $name, int $salary, int $descnumber) {
        $workedHours = $request->query('workedHours');
    
        $pleno = new Pleno($name, $salary, $descnumber);
    
        return view('Taxcalc')
            ->with('employee', $pleno->show($workedHours))
            ->with('taxs', $pleno->Taxcalc($workedHours));
    }
    
    
}
