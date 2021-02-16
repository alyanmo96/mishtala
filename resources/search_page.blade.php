<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>משתלת אהבה</title>
    <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body style="background-color:#ecffaa;">          
  <div class="navbar navbar-expand-lg navbar-light bg-light">
        @include("navbar")
      </div>
      <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @if($product)
                        @foreach($product as $i)
                            @if($loop->index==1)        
                                @break      
                            @endif
                            <div class="col-lg-4 product_show_card">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                            @if($product->id<2500)
                            <img src="{{asset('uploads/plants/'.$product->image)}}" class="planets_img">
                            @elseif($product->id>2500 && $product->id<4500)
                            <img src="{{asset('uploads/work_equipments/'.$product->image)}}" class="planets_img">
                            @else
                            <img src="{{asset('uploads/gifts/'.$product->image)}}" class="planets_img">
                            @endif
                            </svg>
                            <p>שם:{{$product->name}}</p>
                            <p>מחיר:{{$product->price}}</p>
                            <button onclick="Function('{{$product->description}}')"class="btn btn-secondary">קצת עליו »</button>
                            <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_p.add', $product->id) }}" role="button">הוספה לסל »</a></button>
                            </div><!-- /.col-lg-4 -->
                        @endforeach
                    @endif
                </div>
            </div>
        <div>
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
        </div>
        </div>            
        <div id="myModal" class="modal">
            <div class="modal-content" style="width: 50%;">
                <span class="close">&times;</span>
                <p id="modle_description"></p>
            </div>
        </div>
    <div class="footer" id="down_footer">
     @include("footer")
    </div>
    <div class="footer">
     @include("pop_up_modle_script")
    </div> 
  </body>
</html> 