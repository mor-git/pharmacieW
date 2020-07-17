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
                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="text-center">
                                            <a href="{{ url('/changeStatus', Auth::user()->pharmacie_id) }}">
                                                <img src="assets/images/ph1.png" alt="User Avatar" style="height: 50px; weight: 50px;margin-top: 10px;" class="rounded-circle user-avatar-xl">
                                            </a>
                                        </div>
                                        </div>
                                        <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                            <div class="user-avatar-info">
                                                <div class="m-b-20">
                                                    <div class="user-avatar-name" style="margin-left : 19%;">
                                                    <h2>Pharmacie :&nbsp;&nbsp;{{ Auth::user()->pharmacies->name }}</h2>
                                                    <p style="margin-left : 19%;"><span class="fa fa-map-marker"> </span>&nbsp;&nbsp;{{ Auth::user()->pharmacies->adresse }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <span class="fa fa-phone"> </span>&nbsp;&nbsp;{{ Auth::user()->pharmacies->phone }}
                                                    </p>
                                                    </div>
                                                    @if(Auth::user()->pharmacies->status === 1)
                                                    <div style="margin-left : 79%; margin-top: 40px;border-radius : 2px;">
                                                        <a href="{{ url('/changeStatus', Auth::user()->pharmacie_id) }}">
                                                            <button style="border-radius: 5px;color: white;" class="btn btn-danger">Changer de Statut.</button>
                                                        </a>
                                                    </div>
                                                    @else
                                                    <div style="margin-left : 79%; margin-top: 40px;border-radius : 2px;">
                                                        <a href="{{ url('/changeStatus', Auth::user()->pharmacie_id) }}">
                                                            <button style="border-radius: 5px;color: white;" class="btn btn-success">Changer de Statut.</button>
                                                        </a>
                                                    </div>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @if(Auth::user()->pharmacies->status === 1)
                                <div class="border-top user-social-box" style="background-color : green;">
                                    <!-- <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color"></span><span></span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> </span><span></span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> </span><span></span></div>
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> </span><span></span></div> 
                                    <div class="user-social-media d-xl-inline-block"><span class="mr-2 youtube-color"> </span><span></span></div>-->
                                    <div class="user-social-media d-xl-inline-block" style="margin-left : 38%;">
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
    