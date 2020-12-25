<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>משתלת אהבה</title>
    <link href="{{URL::asset('assets/css/admin.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/" id="main_title">משתלת אהבה</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>  
    </div>        
    <div class="container">
        <div class="card-deck mb-3 text-center">               
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary"><a class="nav-link" href="{{ url('message') }}" style="color: black;">הודעות <span class="sr-only"></span></a></button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ url('people_buy') }}" style="color: black;">אנשים רוצים לקנות  <span class="sr-only"></span></a></button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-info"><a class="nav-link" href="{{url('edit_account')}}" style="color: black;">עדכון בפרטי המנהל <span class="sr-only"></span></a></button>
                    </div>
                </div>
        </div>       
        </div>             


        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-success"><a class="nav-link" href="{{ url('plant_edit') }}" style="color: black;">עדכון צמחים  <span class="sr-only"></span></a></button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-light"><a class="nav-link" href="{{ url('gift_edit') }}" style="color: black;">עדכון מתנות <span class="sr-only"></span></a></button>
                    </div>
                </div>
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-secondary"><a class="nav-link" href="{{ url('work_equipment_edit') }}" style="color: black;">עדכון כלי גינון ידניים וציוד  <span class="sr-only"></span></a></button>
                    </div>
                </div>
            </div>
            </div>
        </div>       
        
        <div class="container">
            <div class="card-deck mb-3 text-center">   
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ url('edit_box_photo') }}" style="color: black;">עדכון תמונות של עציצים_ואדניות<span class="sr-only"></span></a></button>
                    </div>
                </div> 
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ url('work_video') }}" style="color: black;">עדכון סרטונים של עבודת גינון<span class="sr-only"></span></a></button>
                    </div>
                </div>  
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <button type="button" class="btn btn-warning"><a class="nav-link" href="{{ url('edit_work_photo') }}" style="color: black;">עדכון תמונות של עבודת גינון<span class="sr-only"></span></a></button>
                    </div>
                </div>                
            </div>
        </div>         
  </body>
</html> 