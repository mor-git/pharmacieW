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
                        <h2 class="pageheader-title">Communes</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Communes</li>
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
            <div style="text-align : right; margin-right : 12px;"><a href="{{ url('/addCommune')}}" class="btn btn-outline-success">Nouvelle Commune</a></div><br>
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
                                        <th class="border-0">Région</th>
                                        <th class="border-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($communes as $commune)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $commune->name }}</td>
                                        <td>{{ $commune->regions->name }}</td>
                                        <td>
                                            <a href="{{ url('/editCommune',$commune->id ) }}" >
                                                <i class='fas fa-edit' style='font-size:15px;color:green'></i>
                                            </a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="{{ url('/suppCommune',$commune->id ) }}" >
                                                <i class='fas fa-trash-alt' style='font-size:15px;color:red'></i>
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
                            <br><br>
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center">
                                {!! $communes->links() !!}
                            </div>
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
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
@endsection
    