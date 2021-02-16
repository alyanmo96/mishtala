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
      <a href="{{ route('box_type_one.show') }}" >
      כדים בטון וחרס
            <img src="{{URL::asset('assets/img/batoon.jpg')}}" class="main_page_main_imgs">
        </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('box_type_two.show') }}" >
      עציצים ואדניות פלסטיק
            <img src="{{URL::asset('assets/img/plastic.jpeg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-3">
      <a href="{{ route('box_type_three.show') }}" >
      עציצים וכדים מיוחדים

      <img src="{{URL::asset('assets/img/meohaad.jpeg')}}" class="main_page_main_imgs">
      </a>
    </div><!-- /.col-lg-4 -->
   
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->
  <hr class="featurette-divider">
  <div class="row featurette">
    <div class="col-md-12">
      <h2 class="featurette-heading"> צמחים</h2>
      <p class="lead">הם היסודות הירוקים החיוניים לכל האנושות. הם אורגניזמים חיים המכינים את מזונם על ידי פוטוסינתזה. יש לנו יותר מ -1,0000 מינים שונים, הכוללים בעיקר עשבי תיבול, עצים, שיחים וכדומה. מכיוון שכל המשפחה הירוקה מכונה צמחים, ישנן חלוקות שונות של צמחים. קנו צמחים ממשתלת אהבה אתם יכולים להשיג צמחים מכל סוג וסוג. והדבר הטוב ביותר הוא שהאתר לא רק מקשר לאותו דבר, אלא חורג מעבר לכלל דשנים ואביזרי צמחים כמו - דוכני צמחים, סירים, חלוקי נחל ועוד רבים. כל זה זמין במחיר סביר מאוד, כך שכל אחד יכול לקבל את הצמחים המפוארים והשופעים שלו בבית האוהב שלו.</p>
    </div>
  </div>

  <hr class="featurette-divider">
  </div>
    </div>      
    <div class="footer">
     @include("footer")
    </div>
</body>