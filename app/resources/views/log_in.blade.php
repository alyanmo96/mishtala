<!DOCTYPE html>
<html>
    <head>
        <link href="{{URL::asset('assets/css/login.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            @include("navbar")
        </div>
        <div class="login-page">
            <div class="form">
                <form class="login-form" action="{{url('/details')}}" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="שם משתמש"/>
                    <input name="password" type="password" placeholder="סיסמה"/>
                    <button type="submit" value="Save">כניסה</button>
                </form>
            </div>
        </div> 
    </body>
</html>