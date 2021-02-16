<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{URL::asset('assets/css/admin_edit_account.css')}}" rel="stylesheet" type="text/css">
        <title>משתלת אהבה</title>
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>  
                <a class="navbar-brand" href="/" id="main_title">משתלת האהבה</a>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="p-2 text-dark"><a class="nav-link" href="{{ url('admin_page') }}">חזרה לעמוד המנהל <span class="sr-only"></span></a></li>
                        <li class="p-2 text-dark"><a class="nav-link" href="">יציאה <span class="sr-only"></span></a></li>
                    </ul>
                </div>
        </div>  
        <h2>עדכון בפרטי המנהל </h2>
        <!--need to send an email ao Make sure with that-->

            <div class="container">
        <form id="contact" action="/edit_account" method="post" enctype="multipart/form-data">
            @csrf    
            @foreach($user as $i)
                <label for="uname"><b>שם משתמש</b></label>
                <input type="text" placeholder="{{$i->name}}" name="name">
                <br>
                <label for="psw"><b>סיסמה חדשה</b></label>
                <input type="password" placeholder="סיסמה חדשה" name="password">
                <label for="psw"><b> אמת סיסמה חדשה</b></label>
                <input type="password" placeholder="סיסמה חדשה" name="password2">                    
                <button type="submit">שמור את השינוי</button>
            @endforeach
        </form>
            </div>
    </body>
</html>