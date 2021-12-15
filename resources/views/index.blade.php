@extends('layouts.layout')

@section('contenu')
@auth
@if(Auth::user()->profil_id === 1) 
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
 
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Gestion de la Garde des Pharmacies </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Liste Pharmacies</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Recent Orders</h5>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">#</th>
                                                    <th class="border-0">Name</th>
                                                    <th class="border-0">Phone</th>
                                                    <th class="border-0">Adresse</th>
                                                    <th class="border-0">Description</th>
                                                    <th class="border-0">Commune</th>
                                                    <th class="border-0">Status</th>
                                                    <th class="border-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pharmacies as $pharmacie)
                                                <tr>
                                                    <td>1</td>
                                                    <td> {{ $pharmacie->name }}</td>                         
                                                    <td>{{ $pharmacie->phone }}</td>
                                                    <td>{{ $pharmacie->adresse }}</td>
                                                    <td>{{ $pharmacie->description }}</td>
                                                    <td>{{ $pharmacie->communes->name }}</td>
                                                    @if($pharmacie->status == 0)
                                                        <td><span class="badge-dot badge-brand mr-1"></span></td>
                                                    @else
                                                        <td><span class="badge-dot badge-success mr-1"></span></td>
                                                    @endif
                                                    <td>Modif </td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->
                        <!-- ============================================================== -->         
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
@else
<!-- ============================================================== -->
<!-- main wrapper -->
<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="">
       <!--  <div class="dashboard-ecommerce"> -->
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Gestion de la Garde du Pharmacie </h2>
                          
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Garde pharmacie</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card influencer-profile-data">
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12"> -->
                                        <div class="text-center" class="col-md-4">
                                            <a href="{{ url('/changeStatus', Auth::user()->pharmacie_id) }}">
                                                <img src="assets/images/ph1.png" alt="User Avatar" style="height: 50px; weight: 50px;margin-top: 10px;" class="rounded-circle user-avatar-xl">
                                            </a>
                                        </div>
                                        <div style="margin-left: 25%;" class="col-md-4 text-center">
                                        <!-- <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12"> -->
                                            <div class="user-avatar-info">
                                                <div class="m-b-20">
                                                    <input id="pharmaci_id" type="hidden" value="{{ Auth::user()->pharmacie_id }}"/>
                                                    <input id="stat" type="hidden" value="{{ Auth::user()->pharmacies->status }}"/>
                                                    <!-- <div class="user-avatar-name" style="margin-left : 19%;"> -->
                                                    <h2>Pharmacie :&nbsp;&nbsp;{{ Auth::user()->pharmacies->name }}</h2>
                                                    <p style="margin-left : 12%;"><span class="fa fa-map-marker"> </span>&nbsp;&nbsp;{{ Auth::user()->pharmacies->adresse }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <span class="fa fa-phone"> </span>&nbsp;&nbsp;{{ Auth::user()->pharmacies->phone }}
                                                    </p>
                                                    <!-- </div> -->
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4;" style="margin-left : 19%;">
                                            <!-- <div style="margin-top: 40px;">
                                                <button id="btn" style="color: white;" class="btn btn">Changer de Statut.</button>
                                            </div> -->
                                            @if(Auth::user()->pharmacies->status === 1)
                                            <div style="margin-top: 40px;">
                                                <button id="btn" style="border-radius: 5px;color: white;" class="btn btn-danger">Changer de Statut.</button>
                                            </div>
                                            @else
                                            <div style="margin-top: 40px;">
                                                <button id="btn" style="border-radius: 5px;color: white;" class="btn btn-success">Changer de Statut.</button>
                                            </div>
                                            @endif
                                        </div>
                                        
                                    <!-- </div> -->
                                </div><br>
                                <div id="status">
                                @if(Auth::user()->pharmacies->status === 1)
                                <div class="border-top user-social-box" style="background-color: green;">
                                    <div class="user-social-media d-xl-inline-block" style="padding-left : 45%;">
                                        <span>
                                            <h3 class="mb-1" style="color: white;">Garde Activée</h3>
                                        </span>
                                    </div>
                                </div>
                                @else
                                <div class="border-top user-social-box" style="background-color : red;">
                                    <div class="user-social-media d-xl-inline-block" style="margin-left : 38%;">
                                        <span>
                                            <h3 class="mb-1" style="color: white;">Garde Terminée</h3>
                                        </span>
                                    </div>
                                </div>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            <!-- </div>-->
        </div>
    </div> 
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
@endif
@endauth
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
$("#btn").click(function(){
    var id =$('#pharmaci_id').val();
    // console.log(id);

    $.ajax({
        type : 'GET',
        url : "{{route('changeStatus')}}",
        data : {'id': id},
        success : function(data){
            // console.log(data['stat']);
                if(data['stat'] == 1){
                    $('#btn').css('background-color','#EF172C');
                }else{
                    $('#btn').css('background-color','green');
                    // $('#btn').css('background-color','#2EC551')
                }
            $('#status').html(data['html']);
        },
        error : function(resultat, statut, erreur){
            console.log("Nooooooooononnnnnnnnnnnnnn");
        }
    });
    
});
});
</script>
<script>
// $(document).ready(function(){
//     console.log("Mor");
    
//     // $("#region").change(function(){
//     //   $("#ville").empty();
//     //   $("#ville").append("<option value=''>Choix</option>");
//     //   var lis = $("#region").val();
  
//       $.ajax({
//           url : "http://localhost:8000/changeStatus/"+ 1,
//           dateType : "json",
//           success:function(data){
//             $.each(function(cle, valeur){
//                 console.log(data);
//                 //   $("#ville").append("<option value='"+valeur.idV+"'>"+valeur.nomV+"</option>");
//             });
//           }
//       });
// });
</script>
@endsection
