<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class CompanyJobsController extends Controller
{
    public function __invoke(Employer $company){
        return view('result', [
            'jobs' => $company->jobs
        ]);
    }
}
