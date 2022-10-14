<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function jobs()
    {
        return view('job.jobList');
    }

    public function createJobs()
    {
        return view('job.createJobs');
    }
}