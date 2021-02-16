<div>
  @include("resources")
</div>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
      @include("navbar")
    </div>

    @if(session()->has('delete_success'))
        <div class="alert alert-success">{{session()->get('delete_success')}}</div>
      @endif
    @if($cart)
      <div class="row">
        <div class="col-sm-10">
          @foreach($cart->items as $i)
            <div class="col-lg-3">
              <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
                @if($i['id']<2500)
                  <img src="{{asset('uploads/plants/'.$i['image'])}}" class="planets_img">
                @elseif($i['id']>2500 && $i['id']<4500)
                  <img src="{{asset('uploads/work_equipments/'.$i['image'])}}" class="planets_img">
                @elseif($i['id']<7000)
                  <img src="{{asset('uploads/gifts/'.$i['image'])}}" class="planets_img">
                @elseif($i['id']<11000)
                  <img src="{{asset('uploads/boxs/'.$i['image'])}}" class="planets_img">
                @else
                  <img src="{{asset('uploads/grass/'.$i['image'])}}" class="planets_img">
                @endif
              </svg>            
              <p>שם:{{$i['name']}}</p>
              <p>מחיר:{{$i['price']}}</p>         
              <button type="button" class="btn btn-danger"><a href="/delete_from_cart/{{$i['id']}}"> מחק</a></button>
           </div>
          @endforeach    
        </div> 
        <div class="col-sm-2" style="margin-top:5%;">
          <div class="card text-center">
            <div class="card-header">
            סה"כ מוצרים:
            <h5 class="card-title">  {{$cart->totalQty}}</h5>
            </div>
            <div class="card-body">
              <h5 class="card-title"> סה"כ לתשלום: {{$cart->total_price}}</h5>
            </div>
            <div class="card-footer text-muted">
              <button><a href="{{ route('purchase.add') }}" class="btn btn-primary" style="text-decoration: none;">אישור וקנייה</a></button>               
            </div>
          </div>
          <br>
        </div> 
      </div>          
    @else
        <p style="margin-bottom:15%;">עוד לא נבחר איזה מוצר לקנייה</p>
    @endif  
    <div class="footer">
     @include("footer")
    </div>  
</body>