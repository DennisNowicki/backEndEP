<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function show(){
        $applications = \DB::table('applications')->first();
        return view('layouts.application',['application'=> $applications]);
    }
}
