<div>
  @include("resources")
</div>  
<body>
  <div class="navbar navbar-expand-lg navbar-light bg-light">
       @include("navbar")
  </div>
<br><br>
<br><br>
  <div class="col-sm-11">
  <div class="row mb-2">
      <div class="col-md-7">
      @foreach($work_video as $i)
         <div class="col-lg-4">
           <iframe width="260" height="215" src="{{$i->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom:2%;"></style>></iframe>
           </div><!-- /.col-lg-4 -->
       @endforeach
      </div>
      <div class="col-md-5">
          @foreach($work_photo as $i)
            <div class="col-lg-4">
                <img src="{{asset('uploads/work_photo/'.$i->image)}}" class="photo_with_video_mix_page">
              </div><!-- /.col-lg-4 -->
          @endforeach
      </div>
  </div>
  </div>

   <div>
    <br><br><br><br><br><br>
   </div>        
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content" style="width: 50%;">
                <span class="close">&times;</span>
                <p id="modle_description"></p>
            </div>
        </div>
    <div class="footer">
     @include("footer")
    </div>
</body>   