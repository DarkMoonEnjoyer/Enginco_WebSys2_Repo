<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enginco</title>
</head>
<body>
    @php
        $name = "Theo Lorenzo Enginco";
        $position = "Information Technology Student";
        $phone = "09267008224";
        $email = "tenginco_21ur0139@psu.edu.ph";
        $linkedInLink = "https://www.linkedin.com/in/theo-lorenzo-enginco-2a48843a7/";
        $address = "Amagbagan, Pozorrubio, Pangasinan";
        $doBirth = "4 August 2003";
        $gender = "Male";
        $nationality = "Filipino";
        $gitlab = "N/A";
        $age = 22;
        $userDesc = "BSIT student of Pangasinan State University since 2021. Skilled in testing application and have ok experience in coding flutter applications. One of the developers of WebPath mainly coding the forum part. Eager to learn coding skills so developing application for hobby will be easier.";
        $juniorYear = "2015-2019";
        $seniorYear = "2019-2021";
        $uniYear = "2021-present";
        $juniorSchool = "Mary Help of Christians Boarding School of Pozorrubio, Pangasinan ";
        $seniorSchool = "Systems Plus College Foundation of Balibago, Angeles City,Pampanga";
        $uniSchool = "Pangasinan State University of Urdaneta, Pangasinan";
        $uniCourse = "Bachelor of Science in Information Technology";
        $specialty = "Mobile and Web Technology";
        $expYear = "2025-2026";
        $expPosition = "Programmer";
        $exp1 = "Modified the code for the forum function in WebPath for comment nesting.";
        $exp2 = "Designed and developed the soft delete feature of the forum allowing one to delete a comment with replies without breaking the application.";
        $exp3 = "Tested the systems for bugs and fixing it with fellow programmers.";
        $skill1 = "Visual Basic";
        $skill2 = "C++";
        $skill3 = "HTML, Basic CSS";
        $skill4 = "Dart";
        $skill5 = "Basic JavaScript";
    @endphp
     
    <div style="background-color: blue">
        <table style="color:white"> 
            <tr>
                <td>
                    <img src="{{ asset('DSC_0037_copy.jpg') }}" height="240px" width="240px" alt="Me" 
                        style="display: block; margin: 0 auto;">
                </td>
                <td>
                    <table style="color: white;">
                        <tr>
                            <td><h1>{{ $name }}</h1></td>
                        </tr>
                        <tr><td><h4>{{ $position }}</h4></td></tr>
                        <tr>
                            <td style="padding: 5px"><strong>Phone:</strong> {{ $phone }}</td>
                            <td style="padding: 5px"><strong>Address:</strong> {{ $address }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px"><strong>Email:</strong> {{ $email }}</td>
                            <td style="padding: 5px"><strong>Date of Birth:</strong> {{ $doBirth }}</td>
                            <td style="padding: 5px"><strong>Age:</strong> @if ($age == 21) Dalawampu't isa @elseif ($age == 22) Duapulo ket dua @elseif ($age == 23) Duapulo ket tallo @elseif ($age > 24) Age older than Duamplo tan apat @endif</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px"><strong>LinkedIn:</strong> {{ $linkedInLink }}</td>
                            <td style="padding: 5px"><strong>Gender:</strong> {{ $gender }}</td>
                        </tr>
                        <tr>
                            <td style="padding: 5px"><strong>GitLab:</strong> {{ $gitlab }}</td>
                            <td style="padding: 5px"><strong>Nationality:</strong> {{ $nationality }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin: 20px; padding: 20px">
        <p>{{ $userDesc }}</p>
    </div>
    <div style="margin: 20px; padding: 20px">
        <h3 style="color:blue">Education</h3>
        <hr>
        <table style="padding: 10px">
            <tr>
                <td style="vertical-align: top;">
                    <strong>{{ $juniorYear }}</strong>
                </td>
                <td style="vertical-align: top;">
                    <div>
                        <strong>Junior High School</strong>
                    </div>
                    <div>
                        {{ $juniorSchool }}
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <strong>{{ $seniorYear }}
                    </strong>
                </td>
                <td style="vertical-align: top;">
                    <div>
                        <strong>Senior High School</strong>
                    </div>
                    <div>
                        {{ $seniorSchool }}
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <strong>{{ $uniYear }}
                    </strong>
                </td>
                <td style="vertical-align: top;">
                    <div>
                        <strong>{{ $uniCourse }}</strong>
                    </div>
                    <div>
                        {{ $uniSchool }}
                    </div>
                    <div>
                        Specialization:
                        <ul>
                            <li>{{ $specialty }}</li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div style="margin: 20px; padding: 20px">
        <h3 style="color:blue">Experience</h3>
        <hr>
        <table>
            <tr>
                <td style="vertical-align: top"><strong>{{ $expYear }}</strong></td>
                <td>
                    <strong>{{ $expPosition }}</strong>
                    <div>
                        <ul>
                            <li>{{ $exp1 }}</li>
                            <li>{{ $exp2 }}</li>
                            <li>{{ $exp3 }}</li>
                        </ul>
                    </div>   
                </td>    
            </tr>
        </table>
    </div>
    <div style="margin: 20px; padding: 20px">
        <h3 style="color:blue">Skills</h3>
        <hr>
            <ul>
                <li>{{ $skill1 }}</li>
                <li>{{ $skill2 }}</li>
                <li>{{ $skill3 }}</li>
                <li>{{ $skill4 }}</li>
                <li>{{ $skill5 }}</li>
            </ul>
    </div>
</body>
</html>