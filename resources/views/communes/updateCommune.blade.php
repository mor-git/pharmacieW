<!-- <div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br><br>
<div>
    <form method="post" action="{{ url('/updateCommune', $commune->id)}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Modifier un Commune</label><br><br>
        <input type="text" placeholder="Name" name="name" value="{{ $commune->name }}"><br><br>
        <select name="region">
            <option value="{{ $commune->region_id }}">{{ $commune->regions->name }}</option>
        
        </select><br><br>
        <button >Update</button>
    </form>
</div> -->
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
                        <h2 class="pageheader-title">Commune </h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Commune</li>
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
                    <h5 class="card-header">Modification Commune</h5>
                    <div class="card-body">
                        <form method="post" action="{{ url('/updateCommune', $commune->id)}}" id="validationform" data-parsley-validate="" novalidate="">
                            <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Nom Commune</label>
                                <div class="col-12 col-sm-9 col-lg-6">
                                    <input type="text" name="name" required=""  value="{{ $commune->name }}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="input-select">Région</label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="region" class="form-control col-12 col-sm-8 col-lg-6" id="input-select">
                                    <option value="{{ $commune->region_id }}">{{ $commune->regions->name }}</option>
                                    @foreach($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="submit" class="btn btn-space btn-success">Modifier</button>
                                    <button type="reset" class="btn btn-space btn-secondary">Annuler</button>
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
