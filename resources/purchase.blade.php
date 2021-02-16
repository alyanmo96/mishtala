<div>
  @include("resources")
</div>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
      @include("navbar")
    </div>
    <form action="{{url('/d_purchase')}}" method="POST">
    @csrf
        <div class="row col-sm-12">
            <div class="col-md-8 order-md-2 mb-4">
                <h4 class="mb-3">יש למלא את הפרטים, על מנת ששירות הלקוחות יצרו איתך קשר</h4>
                <div class="row">
                    <div class="mb-3">
                        <label for="name">שם</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="שם">
                            <div class="invalid-feedback" style="width: 100%;">
                                
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone">מספר טלפון</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="05#######" required="">
                            <div class="invalid-feedback" style="width: 100%;">
                                חייב/ת להכניס מספר טלפון
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address">כתובת</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="text" class="form-control" name="address" placeholder="כתובת">
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"></span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="your_email@address.com">
                            <div class="invalid-feedback" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">סה"כ לתשלום: </h6>
                    <small class="text-muted">תשלום בשקלים </small>
                </div>
                <span class="text-muted">{{$cart->total_price}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">סה"כ מוצרים:</h6>
                    <small class="text-muted"></small>
                </div>
                <span class="text-muted">{{$cart->totalQty}}</span>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div style="display: none;">
                    <input type="text" value="cart" name="cart">
                </div>
                </li>
            </ul>
            <div class="input-group">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">אישור קנייה</button>
                </div>
            </div>
            </div>
    </div>

    </form>
    <div class="footer">
     @include("footer")
    </div>
</body>