<script>
  
  function Function(description, image,type){
    document.getElementById("modle_description").innerHTML = description;
    var str1 = "/uploads/plants/";
    var str2 = "/uploads/gifts/";
    var str3 = "/uploads/work_equipments/";
    var str4 = "/uploads/boxs/";
    var str5 = "/uploads/grass/";
    var res;
    if(type==1){
      res = str1.concat(image);
    }else if(type==2){
     res = str2.concat(image);
    }else if(type==3){
     res = str3.concat(image);
    }else if(type==4){
     res = str4.concat(image);
    }
    else{
     res = str5.concat(image);      
    }
    document.getElementById("modle_img").src = res;
    modal.style.display = "block";
  }

  var modal = document.getElementById("myModal");
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>