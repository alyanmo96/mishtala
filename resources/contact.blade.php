<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{URL::asset('assets/css/contact.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            @include("navbar")
        </div>
     <div class="container">  
        <form id="contact" action="/upload_message" method="post" enctype="multipart/form-data">
            @csrf
            <h4>השאר/י לנו את הפרטים שלך על מנת לצור איתך קשר</h4>
            <fieldset>
            <input placeholder="שם" name="name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
            <input placeholder="Email" type="email" name="email" tabindex="2">
            </fieldset>
            <fieldset>
            <input placeholder="מספר טלפון" type="tel" tabindex="3" name="phone" required>
            </fieldset>
            <fieldset>
            <textarea placeholder="כתב/י....." tabindex="5" name="message" required></textarea>
            </fieldset>
            <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">שלח/י</button>
            </fieldset>
        </form>
        </div>
    <div class="footer">
     @include("footer")
    </div>
    </body>
</html>