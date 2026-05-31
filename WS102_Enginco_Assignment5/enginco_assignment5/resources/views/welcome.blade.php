<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
    $values = false;
    $average = 0.0;
    if(isset($studentName) && isset($prelimGrade) && isset($midtermGrade) && isset($finalGrade)){
        $values = true;
        $average = ($prelimGrade + $midtermGrade + $finalGrade) / 3;
    }
    $letter = "";
    if($values == true && $average >= 90 && $average <= 100){
        $letter = "A";
    }
    elseif ($values == true && $average >= 80) {
        $letter = "B";
    }
    elseif ($values == true && $average >= 70) {
        $letter = "C";
    }
    elseif ($values == true && $average >= 60) {
        $letter = "D";
    }
    elseif ($values == true && $average < 60) {
        $letter = "F";
    }
    $remarks = "";
    if($values == true && $average >= 75){
        $remarks = "Passed";
    }
    elseif ($values == true && $average < 75) {
        $remarks = "Failed";
    }
    $award = "";
    if($values == true && $average >= 98 && $average <= 100){
        $award = "With Highest Honors";
    }
    elseif ($values == true && $average >= 95) {
        $award = "With High Honors";
    }
    elseif ($values == true && $average >= 90) {
        $award = "With Honors";
    }
    elseif ($values == true && $average < 90) {
        $award = "No Award";
    }
    @endphp
    @if ($values == true)
        <p>Name: {{ $studentName }}</p>
        <p>Prelim: {{ $prelimGrade }}</p>
        <p>Midterm: {{ $midtermGrade }}</p>
        <p>Final: {{ $finalGrade }}</p>
        <hr>
        <p>Average: {{ $average }}</p>
        <p>Letter Grade: {{ $letter }}</p>
        <p>Remarks: {{ $remarks }}</p>
        <p>Award: {{ $award }}</p>
    @else
        <h1>Incomplete or No data submitted</h1>
    @endif
    
</body>
</html>