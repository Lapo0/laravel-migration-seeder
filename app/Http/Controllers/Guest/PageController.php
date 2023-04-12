<?php

namespace App\Http\Controllers\Guest;

/*
|--------------------------------------------------------------------------
use App\Models\Movie;
|--------------------------------------------------------------------------
|
| da inserire manualmente se non viene inserito in automatico
|
*/
use App\Models\Train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage() {

        $trains = Train::all();

        dd($trains);

        $data = [
            'trains' => $trains,
        ];

        return view('welcome', $data);
    }
}
