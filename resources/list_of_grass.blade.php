<div>
  @include("resources")
</div>
<body>
     <div class="navbar navbar-expand-lg navbar-light bg-light">
       @include("navbar")
     </div>
      @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div>
      @endif
     <div class="row show_random_products col-sm-11">
       @foreach($grass as $i)
         <div class="col-lg-4">
           <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
             <img src="{{asset('uploads/grass/'.$i->image)}}" class="planets_img">
           </svg>
           <p>שם:{{$i->name}}</p>
           <p>מחיר:{{$i->price}}</p>
                        <button onclick="Function('{{$i->description}}','{{$i->image}}','5')"class="btn btn-secondary">קצת עליו »</button>
          <button class="btn btn-info"><a class="button btn-info" href="{{ route('grass_cart.add', $i->id) }}" role="button">הוספה לסל »</a></button>
         </div><!-- /.col-lg-4 -->
       @endforeach
   </div>        
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="width: 50%;">
                <span class="close">&times;</span>
                <p id="modle_description"></p>
                <img id="modle_img">
            </div>
        </div>
    <div class="footer">
     @include("footer")
    </div>
    <div class="footer">
     @include("pop_up_modle_script")
    </div> 
</body> 