<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>משתלת אהבה</title>
        <link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/about.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
            @include("navbar")
        </div>
    <div class="about-section">
    <h1>משתלת אהבה</h1>
        <p>מי אנחנו?
  אנו קבוצה של אנשים שמתעניינים מאוד בחקלאות ויש לנו מודעות עמוקה לחשיבות הצמחים בחיים, ומטרתנו היא להפיץ את תרבות גידול הצמחים, להגדיל את שטח האזורים הירוקים ולחנך את הקהילה סביבנו לחשיבות של זה. תוכלו להתחיל בחוויה זו, בין אם יש לכם גינה גדולה או טרסה בינונית, או אפילו להתחיל מחלון חדרכם, שכן הצמחים הקטנים ביותר יכולים להיות התחביב הכי מתוק שלכם בחדרכם. חקלאות היא תחביב משעשע מאוד שיעשיר את חייכם וירחיק אתכם לגמרי מלחץ וחרדה יומיומית ...
משתלת האהבה מציעה לכם אוסף גדול ומגוון של צמחים, יחד עם כל הכלים והציוד שתצטרכו בכדי להתחיל את פעילותכם. והקדשנו תשומת לב מיוחדת שכן הקדשנו צוות מומחים שיספק את כל הייעוץ וההוראות שיעזרו לכם להתחיל.
אנו מבטיחים ללקוחותינו לספק תמיד את האיכות הטובה ביותר, השירות והמגוון הרחב של מוצרים מתמחים! במחירים תחרותיים כדי להבטיח כי אנו נעזור לך להתחיל את ההרפתקה בכל עת.</p>

<p>
שיטת תשלום תתבצע או מזומן או דרך הטלפון</p>
    </div>
    <h2 style="text-align:center"></h2>
    <div class="row col-sm-12">
    <div class="column">
        <div class="card">
        <img src="{{URL::asset('assets/img/garden_plant.jpg')}}" style="width:100%">
        <div class="container">
            <h2>צמחים</h2>
            <p class="title"></p>
        </div>
        </div>
    </div>
    <div class="column">
    <div class="card">
        <img src="{{URL::asset('assets/img/garden_equipment.jpg')}}" style="width:100%">
        <div class="container">
        <h2> ציוד גינה</h2>
        <p class="title"> </p>
        </div>
    </div>
    </div>
    <div class="column">
    <div class="card">
        <img src="{{URL::asset('assets/img/garden_work.jpg')}}" style="width:100%">
        <div class="container">
        <h2>עבודת גינון</h2>
        <p class="title"></p>
        </div>
    </div>
    </div>
    </div>
    <div class="footer">
     @include("footer")
    </div>
    </body>
</html>
