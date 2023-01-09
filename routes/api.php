<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoreDataController;
use App\Http\Controllers\PersonalIdController;
use App\Http\Controllers\Dp42Controller;
use App\Http\Controllers\IsFormCompletedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDataController;


use App\Http\Controllers\Refd01Controller;
use App\Http\Controllers\Refd02Controller;
use App\Http\Controllers\Refd03Controller;
use App\Http\Controllers\Refd04Controller;
use App\Http\Controllers\Refd05Controller;
use App\Http\Controllers\Refd06Controller;
use App\Http\Controllers\Refd07Controller;
use App\Http\Controllers\Refd08Controller;
use App\Http\Controllers\Refd09Controller;
use App\Http\Controllers\Refd10Controller;
use App\Http\Controllers\Refd11Controller;
use App\Http\Controllers\Refd12Controller;
use App\Http\Controllers\Refd13Controller;
use App\Http\Controllers\Refd14Controller;
use App\Http\Controllers\Refd15Controller;
// use App\Http\Controllers\Refd16Controller;
use App\Http\Controllers\Refd17Controller;
// use App\Http|Controllers\Refd01Controller;
// use App\Http|Controllers\Refd01Controller;

use App\Http\Controllers\CountryCountroller;
use App\Http\Controllers\TableNamesController;

Route::apiResource('storedata',StoreDataController::class);
Route::apiResource('personals',PersonalIdController::class);
Route::apiResource('dp42', Dp42Controller::class);





Route::apiResource('refd01',Refd01Controller::class);
Route::apiResource('refd02',Refd02Controller::class);
Route::apiResource('refd03',Refd03Controller::class);
Route::apiResource('refd04',Refd04Controller::class);
Route::apiResource('refd05',Refd05Controller::class);
Route::apiResource('refd06',Refd06Controller::class);
Route::apiResource('refd07',Refd07Controller::class);
Route::apiResource('refd08',Refd08Controller::class);
Route::apiResource('refd09',Refd09Controller::class);
Route::apiResource('refd10',Refd10Controller::class);
Route::apiResource('refd11',Refd11Controller::class);
Route::apiResource('refd12',Refd12Controller::class);
Route::apiResource('refd13',Refd13Controller::class);
Route::apiResource('refd14',Refd14Controller::class);
Route::apiResource('refd15',Refd15Controller::class);
// Route::apiResource('refd16',Refd16Controller::class);
Route::apiResource('refd17',Refd17Controller::class);
// Route::apiResource('refd18',Refd18Controller::class);

Route::apiResource('refd16',CountryCountroller::class);


Route::apiResource('tablenames', TableNamesController::class);
Route::apiResource('formcompleted', IsFormCompletedController::class);
Route::get('dashboard', [DashboardController::class,'dashboard']);
Route::post('dashboarddata', [DashboardDataController::class,'dashboardData']);



Route::post('urefd01', [Refd01Controller::class,'updatedata']);
Route::post('urefd02', [Refd02Controller::class,'updatedata']);
Route::post('urefd03', [Refd03Controller::class,'updatedata']);
Route::post('urefd04', [Refd04Controller::class,'updatedata']);
Route::post('urefd05', [Refd05Controller::class,'updatedata']);
Route::post('urefd06', [Refd06Controller::class,'updatedata']);
Route::post('urefd07', [Refd07Controller::class,'updatedata']);
Route::post('urefd08', [Refd08Controller::class,'updatedata']);
Route::post('urefd09', [Refd09Controller::class,'updatedata']);
Route::post('urefd10', [Refd10Controller::class,'updatedata']);
Route::post('urefd11', [Refd11Controller::class,'updatedata']);
Route::post('urefd12', [Refd12Controller::class,'updatedata']);
Route::post('urefd13', [Refd13Controller::class,'updatedata']);
Route::post('urefd14', [Refd14Controller::class,'updatedata']);
Route::post('urefd15', [Refd15Controller::class,'updatedata']);
Route::post('urefd16', [Refd16Controller::class,'updatedata']);
Route::post('urefd17', [Refd17Controller::class,'updatedata']);
Route::post('urefd18', [Refd18Controller::class,'updatedata']);
Route::post('urefd19', [Refd19Controller::class,'updatedata']);
Route::post('urefd20', [Refd20Controller::class,'updatedata']);

