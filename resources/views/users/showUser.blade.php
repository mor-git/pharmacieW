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
                        <h2 class="pageheader-title">Utilisateurs</h2>
                        <!-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Liste des Utilisateurs</li>
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
<br>
<div style="text-align : right; margin-right : 12px;"><a href="{{ url('/addUser')}}" class="btn btn-outline-primary">Nouvelle Commune</a></div><br>
<div class="br-mainpanel">
     
      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <!-- <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> -->

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-20p">Number</th>
                  <th class="wd-20p">Utilisateur</th>
                  <th class="wd-20p">Pharmacie</th>
                  <th class="wd-20p">Email</th>
                  <th class="wd-20p">Profil</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 1; ?>   
              @foreach($users as $user)
                <tr>
                  <td><?php echo $i; ?></td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->pharmacie_id }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->profils->libelle }}</td>
                  <td>
                     <a href="{{ url('/editUser')}}"><i class='far fa-edit' style='font-size:20px;'></i></a>
                     &nbsp;&nbsp;
                     <a href="{{ url('/editUser')}}"><i class='far fa-trash-alt' style='font-size:20px;color:red'></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
              @endforeach
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