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
                        <h2 class="pageheader-title">Publicitè </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Modif Pub</li>
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
                        <h5 class="card-header">Modifier un Pub</h5>
                        <div class="card-body">
                            <form method="post" action="{{ url('/updatePub',$pub->id) }}" id="validationform" enctype="multipart/form-data">
                                <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                                
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Libelle</label>
                                    <div class="col-12 col-md-5">
                                        <input type="text" name="libele" required="" data-parsley-minlength="6" value="{{ $pub->libele }}" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Statut</label>
                                    <div class="col-12 col-md-5">
                                        <input type="number" name="statut" required="" data-parsley-minlength="6" value="{{ $pub->statut }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Date Pub</label>
                                    <div class="col-12 col-md-5">
                                        <input required="" name="datePub" type="date" value="{{ $pub->datePub }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row text-center">
                                    <div class="col col-md-10 offset-sm-1 offset-lg-0">
                                        <button type="submit" class="btn btn-space btn-success">Valider</button>
                                        <button type="reset"  class="btn btn-space btn-secondary">Annuler</button>
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