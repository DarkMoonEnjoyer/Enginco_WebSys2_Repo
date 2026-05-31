<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation', function () {
    $studentName = $_GET['name'];
    $prelimGrade = $_GET['prelim'];
    $midtermGrade = $_GET['midterm'];
    $finalGrade = $_GET['final'];

    return view('welcome', compact('studentName', 'prelimGrade', 'midtermGrade', 'finalGrade'));
});
