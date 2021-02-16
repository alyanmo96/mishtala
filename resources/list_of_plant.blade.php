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
      <a href="{{ route('plant_type_one.show') }}" >
      צמחי מאכל ותבלין
            <img src="{{URL::asset('assets/img/main_page_img2.jpg')}}" class="main_page_main_imgs">
        </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_two.show') }}" >
      עצי פרי ועצי נוי
            <img src="{{URL::asset('assets/img/cherry.jpg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_three.show') }}" >
      קקטוסים וסוקולנטים

      <img src="{{URL::asset('assets/img/kaktoos.jpeg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('plant_type_four.show') }}" >
      צמחי בית ומשרד
            <img src="{{URL::asset('assets/img/mesrad.jpeg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
<hr>
<br>
<hr>

    <div class="col-lg-3">
      <a href="{{ route('plant_type_five.show') }}" >
      סחלבים
            <img src="{{URL::asset('assets/img/sahlab.jpeg')}}" class="main_page_main_imgs">
     
      </a>
    </div><!-- /.col-lg-4 -->

<div class="col-lg-3">
  <a href="{{ route('plant_type_six.show') }}" >
  צמחי גינה ומרפסת
        <img src="{{URL::asset('assets/img/marvesset.jpeg')}}" class="main_page_main_imgs">
 
  </a>
</div><!-- /.col-lg-4 -->

<div class="col-lg-3">
      <a href="{{ route('plant_type_seven.show') }}" >
      מטפסים ושיחים
            <img src="{{URL::asset('assets/img/metbseemwsmahhem.jpeg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->

  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-12">
      <h2 class="featurette-heading"> צמחים</h2>
      <p class="lead">
          
          יש לנו את המגוון הגדול ביותר של עציצים עשויים פלסטיק, קרמיקה ופיברגלס, המאופיינים בקשיחות, עמידות בתנאי מזג אוויר וטמפרטורות גבוהות, ושומרים על לחות קרקע, קלים ובלתי שבירים וסוגים רבים ושונים
מעכשיו כל הפריטים במשתלה שלנו מגיעים עד אליכם הביתה!
מגוון הצמחים, אביזרי השתילה וכלי העבודה בהובלה עד לפתח הדלת עד 48 שעות!
      </p>
    </div>
  </div>

  <hr class="featurette-divider">
  </div>
    </div>      
    <div class="footer">
     @include("footer")
    </div>
</body>