<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br>
<div>
    <a href="{{ url('/changeStatus', 1) }}"><button>Changer Status</button></a>
</div>
@if($status == 1)
    <div style="background-color: green; width : 109px; text-align : center;">{{ $status }}</div>
@else
    <div style="background-color: red; width : 109px; text-align : center;">{{ $status }}</div>
@endif
<div>
    <form method="post" action="{{ url('/storePharmacie')}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Ajouter un Pharmacie</label><br><br>
        <input type="text" placeholder="Name" name="name"><br><br>
        <input type="text" placeholder="Phone" name="phone"><br><br>
        <input type="text" placeholder="Adresse" name="address"><br><br>
        <label for="story">Description:</label><br>
        <textarea id="story" rows="5" cols="33" name="description"></textarea><br><br>
        <select name="commune">
            <option>Choix Commune</option>
        @foreach($communes as $commune)
            <option value="{{ $commune->id }}">{{ $commune->name }}</option>
        @endforeach
        </select><br><br>
        <input type="text" placeholder="Adresse" name="adresse" id="adresse"><br><br>
        <input id="lat" type="text" placeholder="Latitude" name="lat" readonly><br><br>
        <input id="lng" type="text" placeholder="Longitude" name="lng" readonly><br><br>
        <button >Valider</button>
    </form>
</div>
<div>
    @foreach($pharmacies as $pharmacie)
    <p>{{ $pharmacie->name }}&nbsp;&nbsp;{{ $pharmacie->communes->name }}&nbsp;&nbsp;&nbsp;{{ $pharmacie->adresse }}&nbsp;&nbsp;{{ $pharmacie->phone }}&nbsp;&nbsp;<a href="{{ url('/editPharmacie', $pharmacie->id)}}">Modifier</a><p>
    @endforeach
</div>
<!-- ----Modal -------------------------------->
<div id="overlay" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Adresse</h5>
                <button type="button" class="close" id="fermodal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="mpdal-body p-4">
                <div id="map" style="width:100%;height: 600px;"></div>
                <!-- <div id="map" style="width:100%;height: 300px;"></div>  -->
            </div>
        </div>
    </div>
  </div>
<!-------Fin Modal --------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJby-hPhgoq4hIhiwKiHYvYmEUn74qnBw&callback=initMap" async defer></script>
<!-- <script src="/template/lib/gmaps/gmaps.min.js"></script> -->

<script>
  $(document).ready(function(){
    
      $.ajax({
              url : "http://localhost:8000/listRegion",
              dateType : "json",
              success:function(data){
                //console.log(data);
                $.each(JSON.parse(data), function(cle, valeur){
                  $("#region").append("<option value='"+ valeur.id +"'>"+ valeur.nomRegion +"</option>");
                });
              }
          })
        $("#region").change(function(){
        $("#ville").empty();
        $("#ville").append("<option value=''></option>");
        var lis = $("#region").val();
    
        $.ajax({
            url : "http://localhost:8000/listVille/"+lis,
            dateType : "json",
            success:function(data){
              //console.log(data);
              $.each(JSON.parse(data), function(cle, valeur){
                $("#ville").append("<option value='"+valeur.id+"'>"+valeur.nomVille+"</option>");
              });
            }
        })
        
      });
  });
</script>
<!-------------------Fin Chargement Ville via région------------------------>
<script>
var map;
function initMap() {
    var myLatLng = {lat: 14.727931977548339, lng: -16.048883801171883};
  
     map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 8
    });
  
    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!',
          draggable: true
        });
  
     google.maps.event.addListener(marker, 'dragend', function(marker) {
        var latLng = marker.latLng;
        //console.log(latLng);
        
        document.getElementById('lat').value = latLng.lat();
        document.getElementById('lng').value = latLng.lng();
        info(latLng);
        
     });
   }
    
     function info(location){
         var lat = location.lat();
         var lng = location.lng();
         console.log(lat , lng);
         var latlng = new google.maps.LatLng(lat , lng);
         geocoder = new google.maps.Geocoder();
         geocoder.geocode({'latLng' : latlng} , function(results,status){
             if(status == google.maps.GeocoderStatus.OK){
                 //console.log(results[1]);
                 document.getElementById('adresse').value = results[1].formatted_address;
                 var may = [];
                 var may2 = [];
                 may = results[1].address_components;
                for(var i=0 ; i<= may.length-1 ; i++)
                 {        
                     var buufer = new  Array();
                     buufer =   may[i];
                     //console.log(buufer.long_name);
                     may2[i] = buufer.long_name;
                    
               
                 }
                 console.log(may2);
                 for(var j=0 ; j<= may2.length ; j++)
                 {        
                     un = may2[0];
                     troix = may2[3];
                     tout = un+","+troix;
                     document.getElementById('adrCompl').value = tout;
                 }
                 //document.getElementById('adrCompl').value = may2;
                 $('#overlay').hide();
                 //document.getElementById('adr_c').value = latLng.lng();
             }
             
         })
     }
</script>
<script>
$(document).ready(function() {
  
   $('#overlay').hide();
   $("#adresse").click(function(){
      $('#overlay').show();
  });
  $("#fermodal").click(function(){
      $('#overlay').hide();
  });
 });
 </script>
