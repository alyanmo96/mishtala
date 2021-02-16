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
      <div class="row col-sm-12" id="main_page_img">
        <div class="col-sm-3">
            <img src="{{URL::asset('assets/img/main_page_img1.jpg')}}" class="main_page_main_imgs">
        </div>
        <div class="col-sm-3">
            <img src="{{URL::asset('assets/img/main_page_img2.jpg')}}" class="main_page_main_imgs">
        </div>
        <div class="col-sm-3">
            <img src="{{URL::asset('assets/img/main_page_img5.jpg')}}" class="main_page_main_imgs">
        </div>
        <div class="col-sm-3">
            <img src="{{URL::asset('assets/img/main_page_img4.jpg')}}" class="main_page_main_imgs">
        </div>
      </div>
      @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
      @endif
      @if(session()->has('nothing_to_show'))
        <div class="alert alert-success">{{session()->get('nothing_to_show')}}</div>
      @endif
      @if(session()->has('message_success'))
        <div class="alert alert-success">{{session()->get('message_success')}}</div>
      @endif
      @if(session()->has('purchase_success'))
        <div class="alert alert-success">{{session()->get('purchase_success')}}</div>
      @endif
      <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($planet as $i)
                        @if($loop->index==3)        
                            @break      
                        @endif
                        <div class="col-lg-4 product_show_card">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                            <img src="{{asset('uploads/plants/'.$i->image)}}" class="planets_img">
                        </svg>
                        <p>שם:{{$i->name}}</p>
                        <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','1')"class="btn btn-secondary">קצת עליו »</button>
                        <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_p.add', $i->id) }}" role="button">הוספה לסל »</a></button>
                        </div><!-- /.col-lg-4 -->
                    @endforeach

                    @foreach($gift as $i)
                        @if($loop->index==3)         
                            @break      
                        @endif
                        <div class="col-lg-4 product_show_card">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                            <img src="{{asset('uploads/gifts/'.$i->image)}}" class="planets_img">
                        </svg>
                        <p>שם:{{$i->name}}</p>
                        <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','2')"class="btn btn-secondary">קצת עליו »</button>
                        <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_g.add', $i->id) }}" role="button">הוספה לסל »</a></button>
                        </div><!-- /.col-lg-4 -->
                    @endforeach

                    @foreach($work_equipment as $i)
                        @if($loop->index==3)         
                            @break      
                        @endif                    
                        <div class="col-lg-4 product_show_card">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                            <img src="{{asset('uploads/work_equipments/'.$i->image)}}" class="planets_img">
                        </svg>
                        <p>שם:{{$i->name}}</p>
                        <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','3')"class="btn btn-secondary">קצת עליו »</button>
                        <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_w.add', $i->id) }}" role="button">הוספה לסל »</a></button>
                        </div><!-- /.col-lg-4 -->
                    @endforeach


                    @foreach($planet as $i)
                        @if($loop->index==6)         
                            @break      
                        @endif
                        @if($loop->index>2)
                        <div class="col-lg-4 product_show_card">
                        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                            <img src="{{asset('uploads/plants/'.$i->image)}}" class="planets_img">
                        </svg>
                        <p>שם:{{$i->name}}</p>
                        <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','1')"class="btn btn-secondary">קצת עליו »</button>
                        <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_p.add', $i->id) }}" role="button">הוספה לסל »</a></button>
                        </div><!-- /.col-lg-4 -->   
                        @endif
                    @endforeach

                    @foreach($gift as $i)
                        @if($loop->index==6)         
                            @break      
                        @endif
                        @if($loop->index>2)  
                            <div class="col-lg-4 product_show_card">
                            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                                <img src="{{asset('uploads/gifts/'.$i->image)}}" class="planets_img">
                            </svg>
                            <p>שם:{{$i->name}}</p>
                            <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','2')"class="btn btn-secondary">קצת עליו »</button>
                        <button class="btn btn-info"><a class="button btn-info" href="{{ route('main_cart_g.add', $i->id) }}" role="button">הוספה לסל »</a></button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>            
        <div id="myModal" class="modal">
            <div class="modal-content" style="width: 50%;">
                <span class="close">&times;</span>
                <p id="modle_description"></p>
                <img id="modle_img">
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