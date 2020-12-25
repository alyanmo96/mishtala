<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>משתלת אהבה</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="{{URL::asset('assets/css/navbar.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>  
          <a class="navbar-brand" href="/" id="main_title">
          <img src="{{URL::asset('assets/img/navbar_logo.png')}}" id="navbar_logo">
          משתלת אהבה</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            @if (\Request::is('home') || \Request::is('main')  || \Request::is('/')   || \Request::is('HOME')   || \Request::is('MAIN') ) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('/') }}" style="display: none;"> עמוד הבית <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('/') }}"> עמוד הבית <span class="sr-only"></span></a></li>

            @endif
            @if (\Request::is('plant')) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('plant') }}" style="display: none;"> צמחים <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('plant') }}"> צמחים <span class="sr-only"></span></a></li>

            @endif

            @if (\Request::is('gifts')) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('gifts') }}" style="display: none;"> מתנות <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('gifts') }}"> מתנות <span class="sr-only"></span></a></li>

            @endif

            @if (\Request::is('boxs')) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('boxs') }}" style="display: none;"> עציצים ואדניות<span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('boxs') }}"> עציצים ואדניות<span class="sr-only"></span></a></li>

            @endif

            @if (\Request::is('work_equipment')) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('work_equipment') }}" style="display: none;"> טיפולים ואדמה<span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('work_equipment') }}"> טיפולים ואדמה<span class="sr-only"></span></a></li>

            @endif

            @if (\Request::is('works')) 
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('works') }}" style="display: none;"> עבודת גינון <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="nav-link" href="{{ url('works') }}"> עבודת גינון <span class="sr-only"></span></a></li>

            @endif
            <li>
            <form action="/search" method="post" enctype="multipart/form-data">
              @csrf
              
              <fieldset>
               
            <input type="text" placeholder="חפש.." name="search">
              <button type="submit" id="button_search"><i class="fa fa-search" id="fa_search"></i></button>
              </fieldset>
            </form>
            </li>
              <li><i class='fas fa-cart-arrow-down' style='font-size:26px'><a class="nav-link" href="{{ url('cart') }}">{{session()->has('cart')?session()->get('cart')->totalQty:'0'}}<span class="sr-only"></span></a></i></li>
            @if (\Request::is('contact')) 
              <li class="p-2 text-dark"><a class="btn btn-outline-primary" href="{{ url('contact') }}" style="display: none;"> צור קשר <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="btn btn-outline-primary" href="{{ url('contact') }}"> צור קשר <span class="sr-only"></span></a></li>

            @endif

            @if (\Request::is('about')) 
              <li class="p-2 text-dark"><a class="btn btn-outline-primary" href="{{ url('about') }}" style="display: none;"> קצת עלינו  <span class="sr-only"></span></a></li>
            @else
              <li class="p-2 text-dark"><a class="btn btn-outline-primary" href="{{ url('about') }}"> קצת עלינו  <span class="sr-only"></span></a></li>

            @endif

            </ul>
          </div>
          <div>
            <!-- Facebook -->
            <a href="http://www.facebook.com/sharer.php?u=https://www.mishtalaahava.com/" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook"  class="share_it"/>
            </a>            
            <!-- LinkedIn -->
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.mishtalaahava.com/" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn"  class="share_it"/>
            </a>
            <!-- Twitter -->
            <a href="https://twitter.com/share?url=https://www.mishtalaahava.com/&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter"  class="share_it"/>
            </a>
          </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  </body>
</html>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>