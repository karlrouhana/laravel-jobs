<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __invoke(){
        $emp = Employer::all();
        return view('companies', [
            'emp' => $emp
        ]);
    }
}
