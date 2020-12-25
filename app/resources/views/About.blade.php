<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>משתלת אהבה</title>
        <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/about.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
            @include("navbar")
        </div>
    <div class="about-section">
    <h1>משתלת אהבה</h1>
        <p>כמה מילים על העבודה שלנו</p>
    </div>
    <h2 style="text-align:center"></h2>
    <div class="row col-sm-12">
    <div class="column">
        <div class="card">
        <img src="{{URL::asset('assets/img/garden_plant.jpg')}}" style="width:100%">
        <div class="container">
            <h2>צמחים</h2>
            <p class="title">קצת תיאור</p>
        </div>
        </div>
    </div>
    <div class="column">
    <div class="card">
        <img src="{{URL::asset('assets/img/garden_equipment.jpg')}}" style="width:100%">
        <div class="container">
        <h2> ציוד גינה</h2>
        <p class="title">כמה מילים </p>
        </div>
    </div>
    </div>
    <div class="column">
    <div class="card">
        <img src="{{URL::asset('assets/img/garden_work.jpg')}}" style="width:100%">
        <div class="container">
        <h2>עבודת גינון</h2>
        <p class="title">קצת תיאור</p>
        </div>
    </div>
    </div>
    </div>
    <div class="footer">
     @include("footer")
    </div>
    </body>
</html>
