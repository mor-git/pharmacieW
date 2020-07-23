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
                        <h2 class="pageheader-title">Régions</h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Régions</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
     
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-20p">Number</th>
                  <th class="wd-20p">Nom Région</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?> 
              
                <tr>
                  <td><?php echo $i; ?></td>
                  <td>jgkjkjryjh</td>
                  <td>
                     <a href="{{ url('/editRegion')}}"><i class='far fa-edit' style='font-size:20px;'></i></a>
                     &nbsp;&nbsp;
                     <a href="{{ url('/editRegion')}}"><i class='far fa-trash-alt' style='font-size:20px;color:red'></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
             
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    </div>
</div>
@endsection