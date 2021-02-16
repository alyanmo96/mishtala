<div>
  @include("resources")
    <link href="{{URL::asset('assets/css/work.css')}}" rel="stylesheet" type="text/css">
</div>  
<body>
  <div class="navbar navbar-expand-lg navbar-light bg-light">
       @include("navbar")
  </div>
<div class="about-section">
        <p>אנו מתחייבים לספק פתרונות גינון מעשיים, רלוונטיים ואטרקטיביים. אנו מייחסים חשיבות רבה לפיתוח נופים חסכוניים במשאבים וידידותיים לסביבה. במהלך שלבי התכנון והיישום, נלקחת התחשבות ראשונית בערכה הארוך של כל ועדה וביכולתה להסתגל לגורמים סביבתיים ולתנאי האתר. כתוצאה מבדיקת נאותות והגישה המותאמת אישית שלנו לכל פרויקט, המרחבים המעוצבים שלנו עומדים במבחן הזמן.

אנו מקשיבים היטב למחשבותיך ואז הופכים את חזונך למציאות. הצוות שלנו מוכן לחפש נוף ספציפי לבחירתכם. אנו יכולים להתמקד בנושא אחד או לשלב אלמנטים משלימים מנושאים שונים.</p>
    </div>
    <br><br>

   <h2>זה חלק מהעבודה שלנו</h2>

    <div class="container col-sm-10">
    @foreach($work_photo as $i)
      <div class="mySlides">
        <div class="numbertext">{{$loop->index}} </div>
        <img src="{{asset('uploads/work_photo/'.$i->image)}}" class="bigImg">
        <p>{{$i->description}}</p>
      </div>
    @endforeach
 
  <br>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row col-sm-10">
  @foreach($work_photo as $i)
    <div class="column">
      <img class="demo cursor smallImg" src="{{asset('uploads/work_photo/'.$i->image)}}" onclick="currentSlide({{$loop->index+1}})">
    </div>
    @endforeach
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<br><br>
    <br><br>
    <br><br>
    <div class="footer">
     @include("footer")
    </div>
</body>