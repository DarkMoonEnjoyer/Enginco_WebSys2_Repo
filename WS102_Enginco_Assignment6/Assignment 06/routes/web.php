<?php

use Illuminate\Support\Facades\Route;

Route::get('/problem1/{studId}/{studName}', function ($studId, $studName) {
    return view('prob1', compact('studId', 'studName'));
});

Route::get('/problem2/{course}/{yearLevel?}', function ($course, $yearLevel = 1) {
    return view('prob2', compact('course', 'yearLevel'));
});

Route::get('/problem3/{companyName}/{city}/{allowance?}', function ($companyName, $city, $allowance = 'no') {
    return view('prob3', compact('companyName', 'city', 'allowance'));
});

Route::get('/problem4/{eventName}/{participantName}/{yearLevel}', function ($eventName, $participantName, $yearLevel) {
    return view('prob4', compact('eventName', 'participantName', 'yearLevel'));
});
