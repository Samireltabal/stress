<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $campaign = Campaign::inRandomOrder()->first();
        return view('welcome')->with(['data' => $campaign]);
    }
}
