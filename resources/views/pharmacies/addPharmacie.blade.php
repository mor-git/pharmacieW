@extends('layouts.layout')

@section('contenu') 

    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Pharmacie </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pharmacie</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->        
        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Enrégistrement Pharmacie</h5>
                    <div class="card-body">
                        <form method="post" action="{{ url('/storePharmacie') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="input-select">Région</label>
                                &nbsp;&nbsp;
                                <div class="col-12 col-md-7">
                                <select name="region" id="region" class="form-control col-12 col-md-8" id="input-select">
                                    <option>Région</option>
                                    
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="input-select">Commune</label>
                                &nbsp;&nbsp;
                                <div class="col-12 col-md-7">
                                <select name="commune" id="commune" class="form-control col-12 col-md-8" id="input-select">
                                    <option>Commune</option>
                                    
                                </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom Pharmacie</label>
                                <div class="col-12 col-md-5">
                                    <input required="" name="name" type="text" min="6" max="100" placeholder="Nom du Pharmacie." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Phone</label>
                                <div class="col-12 col-md-5">
                                    <input type="text" name="phone" required="" data-parsley-minlength="6" placeholder="Téléphone." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Adresse</label>
                                <div class="col-12 col-md-5">
                                    <input type="text" name="address" required="" data-parsley-maxlength="6" placeholder="Adresse du Pharmacie." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Description</label>
                                <div class="col-12 col-md-5">
                                    <textarea name="description" placeholder="Lieu exact du Pharmacie." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Adresse Complète</label>
                                <div class="col-12 col-md-5">
                                    <input  type="text" name="adresse" id="adresse" required="" placeholder="Adresse Complète." class="form-control">
                                </div>
                            </div>
                            <input id="lat" type="hidden" placeholder="Latitude" name="lat" readonly>
                            <input id="lng" type="hidden" placeholder="Longitude" name="lng" readonly>
                            <div class="form-group row text-center">
                                <div class="col col-md-10 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-success">Valider</button>
                                    <button class="btn btn-space btn-secondary">Annuler</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end valifation types -->
            <!-- ============================================================== -->
        </div>
        
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper --> 
    <!-- ============================================================== -->
<!-- ----Modal -------------------------------->
<div id="overlay">
    <div class="modal-dialog" >
        <div class="modal-content" style="width:180%;height: 700px;">
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
@endsection  
@section('script') 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJby-hPhgoq4hIhiwKiHYvYmEUn74qnBw&callback=initMap" async defer></script>
<!-- <script src="/template/lib/gmaps/gmaps.min.js"></script> -->

<script>
  $(document).ready(function(){
    
      $.ajax({
              url : "http://localhost:8000/api/apiRegions",
              dateType : "json",
              success:function(data){
                //console.log(data);
                $.each(JSON.parse(data), function(cle, valeur){
                  $("#region").append("<option value='"+ valeur.id +"'>"+ valeur.name +"</option>");
                  console.log(valeur.id);
                });
              }
          })
        $("#region").change(function(){
        $("#commune").empty();
        $("#commune").append("<option value=''></option>");
        var lis = $("#region").val();
     
        $.ajax({
            url : "http://localhost:8000/api/communesApi/"+lis,
            dateType : "json",
            success:function(data){
              //console.log(data);
              $.each(JSON.parse(data), function(cle, valeur){
                $("#commune").append("<option value='"+valeur.id+"'>"+valeur.name+"</option>");
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
@endsection
