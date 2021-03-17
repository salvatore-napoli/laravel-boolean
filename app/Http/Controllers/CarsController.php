<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarsController extends Controller
{
    public function index($id = null) {
			$cars = Car::all();

			if ($id == 0 || $id > count($cars)) {
				abort(404);
			}

			return view('cars', ['cars' => $cars, 'id' => $id]);
		}
}
