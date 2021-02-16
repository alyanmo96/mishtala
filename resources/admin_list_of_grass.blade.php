<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{URL::asset('assets/css/admin_list_of.css')}}" rel="stylesheet" type="text/css">
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
        <div class="container">  
        <form id="contact" action="/upload_grass" method="post" enctype="multipart/form-data">
            @csrf
            <h4>הוספת מתנה חדשה</h4>
            <fieldset>
                <input placeholder="שם" type="text" name="name" required> 
            </fieldset>
            <fieldset>
                <input placeholder="כמה מילים" type="text" name="description" required> 
            </fieldset>
            <fieldset>
                <input placeholder="מחיר" type="number" name="price" required> 
            </fieldset>
            <div class="form-group mt-3">
                <label class="mr-2"></label>
                <input type="file" name="image" required>
            </div>
          <button type="submit" class="btn btn-primary" value="upload">הוספה</button>
          <hr>
        </form>    

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($grass as $i)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="{{asset('uploads/grass/'.$i->image)}}" class="planets_img">
                                <div class="card-body">
                                    <p class="card-text">שם:{{$i->name}}</p>
                                    <p class="card-text">תיאור:{{$i->description}}</p>
                                    <p>מחיר:{{$i->price}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{url('/delete_grass/'.$i->id)}}" class="btn btn-sm btn-outline-danger">מחיקה</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>        