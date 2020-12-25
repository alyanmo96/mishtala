<div>
  @include("resources")
</div>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
      @include("navbar")
    </div>
    <div>
      <div class="container marketing">
  <div class="row">
    <div class="col-lg-3">
      <a href="{{ route('plant_type_two.show') }}" >
      צמחי מאכל ותבלין
            <img src="{{URL::asset('assets/img/main_page_img2.jpg')}}" class="main_page_main_imgs">
        </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_two.show') }}" >
      פקעות וזרעים
            <img src="{{URL::asset('assets/img/main_page_img1.jpg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_three.show') }}" >
      קקטוסים וסוקולנטים

      <img src="{{URL::asset('assets/img/main_page_img5.jpg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_four.show') }}" >
      צמחי בית ומשרד
            <img src="{{URL::asset('assets/img/main_page_img4.jpg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"></rect><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
    </div>
  </div>

  <hr class="featurette-divider">
  </div>
    </div>      
    <div class="footer">
     @include("footer")
    </div>
</body>