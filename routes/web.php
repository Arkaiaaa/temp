<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000',
    ],
    [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$10,000',
    ],
    [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$40,000',
    ]
    ];

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});