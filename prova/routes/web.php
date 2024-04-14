<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/junior/increaseSalary/{name}/{salary}/{descnumber}/{workedHours}', [JuniorController::class, 'increaseSalary']);
Route::get('/junior/showInfo/{name}/{salary}/{descnumber}/{workedHours}', [JuniorController::class, 'showInfo']);
Route::get('/junior/Taxcalc/{name}/{salary}/{descnumber}/{workedHours}', [JuniorController::class, 'Taxcalc']);

Route::get('/pleno/increaseSalary/{name}/{salary}/{descnumber}/{workedHours}', [PlenoController::class, 'increaseSalary']);
Route::get('/pleno/showInfo/{name}/{salary}/{descnumber}/{workedHours}', [PlenoController::class, 'showInfo']);
Route::get('/pleno/Taxcalc/{name}/{salary}/{descnumber}/{workedHours}', [PlenoController::class, 'Taxcalc']);

Route::get('/senior/increaseSalary/{name}/{salary}/{descnumber}/{workedHours}', [SeniorController::class, 'increaseSalary']);
Route::get('/senior/showInfo/{name}/{salary}/{descnumber}/{workedHours}', [SeniorController::class, 'showInfo']);
Route::get('/senior/Taxcalc/{name}/{salary}/{descnumber}/{workedHours}', [SeniorController::class, 'Taxcalc']);
