@extends('layouts.layout')

@section('contenu')
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
                        <h2 class="pageheader-title">Pharmacies</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Pharmacies</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- recent orders  -->
            <!-- ============================================================== -->
            <div style="text-align : right; margin-right : 12px;"><a href="{{ url('/addPharmacie')}}" class="btn btn-outline-success">Nouveau Pharmacie</a></div><br>
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
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($pharmacies as $pharmacie)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $pharmacie->name }}</td>
                                        <td>{{ $pharmacie->phone }}</td>
                                        <td>{{ $pharmacie->adresse }}</td>
                                        <td>{{ $pharmacie->description }}</td>
                                        <td>{{ $pharmacie->communes->name }}</td>
                                        @if($pharmacie->status == 0)
                                            <td style='font-size:14px;color:red;'>Fermée</td>
                                        @else
                                            <td style='font-size:14px;color:green;'>Ouverte</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('/editPharmacie/'.$pharmacie->id ) }}" >
                                                <i class='far fa-edit' style='font-size:15px;color:green;'></i>
                                            </a>&nbsp;
                                            <a href="" >
                                                <i class='fas fa-info' style='font-size:15px;color:blue'></i>
                                            </a>&nbsp;&nbsp;
                                            <a href="{{ url('/suppPharmacie/'.$pharmacie->id ) }}" >
                                                <i class='far fa-trash-alt' style='font-size:15px;color:red'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $i=$i+1; ?>
                                @endforeach
                                    <tr>
                                        <td colspan="12"></td>
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
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->

@endsection
    