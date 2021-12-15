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
                        <h2 class="pageheader-title">Utilisateurs </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
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
                    <h5 class="card-header">Enrégistrement Utilisateur</h5> 
                    <div class="card-body">
                        <form method="post" action="{{ url('/storeUser') }}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label for="name" class="col-12 col-sm-3 col-form-label text-sm-right">Name</label>
                                <div class="col-12 col-md-5">
                                    <input id="name" name="name" type="text"  placeholder="Nom du Pharmacien." class="form-control" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                <div class="col-12 col-md-5">
                                    <input id="email" type="email" name="email" data-parsley-minlength="6" placeholder="Email." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                <div class="col-12 col-md-5">
                                    <input id="password" type="password" name="password" data-parsley-maxlength="6" placeholder="Mot de Passe." class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong> 
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-12 col-sm-3 col-form-label text-sm-right">Confirm Password</label>
                                <div class="col-12 col-md-5">
                                <input id="password-confirm" placeholder="Confirmation Mot de Passe" type="password" class="form-control" name="passwordConfirmation" required autocomplete="new-password">
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="profil">Profil</label>
                                &nbsp;&nbsp;
                                <div class="col-12 col-md-7">
                                <select id="profil" name="profil"  class="form-control col-12 col-md-8">
                                    <option>Choix du Profil</option>
                                    @foreach($profils as $profil)
                                    <option value="{{ $profil->id }}">{{ $profil->libelle }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div id="pharm" class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="input-select">Pharmacie</label>
                                &nbsp;&nbsp;
                                <div class="col-12 col-md-7">
                                <select name="pharmacie" id="commune" class="form-control col-12 col-md-8" id="input-select">
                                    <option>Choix du Pharmacie</option>
                                    @foreach($pharmacies as $pharmacie)
                                    <option value="{{ $pharmacie->id }}">{{ $pharmacie->name }}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
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
@endsection  
@section('script') 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJby-hPhgoq4hIhiwKiHYvYmEUn74qnBw&callback=initMap" async defer></script>
<!-- <script src="/template/lib/gmaps/gmaps.min.js"></script> -->
<script>
$(document).ready(function() {
  
   $('#pharm').hide();
   $("#profil").change(function(){
       var id = $("#profil").val();
       if(id == 2){
        $('#pharm').show();
       }else{
        $('#pharm').hide();
       }
  });
 
});
</script>
@endsection

