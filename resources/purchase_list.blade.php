<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{URL::asset('assets/css/admin_message.css')}}" rel="stylesheet" type="text/css">
        <title>משתלת אהבה</title>
        <style>
            img{
                max-width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>  
            <a class="navbar-brand" href="/" id="main_title">משתלת האהבה</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="p-2 text-dark"><a class="nav-link" href="{{ url('admin_page') }}">חזרה לעמוד המנהל <span class="sr-only"></span></a></li>
                    <li class="p-2 text-dark"><a class="nav-link" href="">יציאה <span class="sr-only"></span></a></li>
                </ul>
            </div>
        </div>  
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2>רשימת לקוחות</h2>
                    <div class="list_of_messages">
                        @foreach($purchase as $i)
                            <div class="main" id="section1"> 
                                <button type="button" class="btn btn-warning" onclick="Function('{{$i->id}}','{{$i->name}}','{{$i->phone}}','{{$i->email}}','{{$i->created_at}}','{{$i->location}}','{{$i->cart}}')">{{$i->name}}</button>      
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-9" id="show_message_subject" style="display: none;">
                    <h1 id="sender_name"></h1>
                    <p id="sender_email"></p> 
                    <p id="sender_phone"></p>
                    <p id="sender_location"></p>
                    <p id="sender_sent"></p>
                    <br>         
                    <p id="products" style="background-color: antiquewhite;">
                    <img id="img"/>
                    </p> 
                    <p id="customer_total_qantity"></p> 
                    <p id="customer_total_cost"></p> 
                    <form method="post">
                        <a id="delete_purchase" class="btn btn-sm btn-outline-danger">מחיקה</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    function Function(id_number,name,phone,email,time,location,cartAsJSON){              
        document.getElementById("show_message_subject").style.display ='block';
        document.getElementById("sender_name").innerHTML = name;
        document.getElementById("sender_email").innerHTML = email;
        document.getElementById("sender_phone").innerHTML = phone;
        document.getElementById("sender_location").innerHTML = location;
        document.getElementById("sender_sent").innerHTML = time;       
        var obj = JSON.parse(cartAsJSON);
        var ress = []; 
        for(var i in obj) 
            ress.push(obj[i]); 

        for(var f=0;f<20000;f++){
            if (typeof ress[0][f] !== 'undefined'){
                let name = document.createElement("P");
                let t_name = document.createTextNode("שם: "+ress[0][f].name);
                name.appendChild(t_name);
                document.getElementById("products").appendChild(name);
                let first_src="";
                if(ress[0][f].id<2500){
                    first_src="uploads/plants/";
                }else if(ress[0][f].id>2500 &&ress[0][f].id<4500){
                    first_src="uploads/work_equipments/";
                }else if(ress[0][f].id<7000){
                    first_src="uploads/gifts/";
                }else if(ress[0][f].id>=7000 &&ress[0][f].id<10999){
                    first_src="uploads/boxs/";
                }else if(ress[0][f].id>10999){
                    first_src="uploads/grass/";
                }
                
                let second_src=ress[0][f].image;
                let res = first_src.concat(second_src);
                document.getElementById("img").src = res;
                let price = document.createElement("P");
                let t = document.createTextNode("מחיר: "+ress[0][f].description);
                price.appendChild(t);
                document.getElementById("products").appendChild(price);
                let new_line = document.createElement("P");
                let t_line = document.createTextNode("//////////////////////");
                new_line.appendChild(t_line);
                document.getElementById("products").appendChild(new_line);

            }
        }
        document.getElementById("customer_total_qantity").innerHTML = "כמות מוצרים: "+ress[1];
        document.getElementById("customer_total_cost").innerHTML = "עלות בשקלים:  "+ress[2];
        var str1 = "/delete_people_buy/";
        var str2 = id_number;
        var res = str1.concat(str2);              
        document.getElementById("delete_purchase").href =res;
    }
    window.onscroll = function() {myFunction()};
    function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    }
</script>