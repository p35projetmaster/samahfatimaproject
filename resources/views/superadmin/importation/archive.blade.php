@extends('superadmin.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transfert archive</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active">Transfert archive</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- interactive chart -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">
                  Ajouter à l'archive une année
                </h3>
              </div>
              <div class="card-body">
                <form action="{{ route('archive') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
                <div class="form-row">
                  <div class="col-lg-10 col-12">
                    <input input type="text" class="form-control" placeholder="Entrez l'année de l'annonce  que vous voulez archiver" name="year"  required align="centre">
                    
                    
                </div>
            <div class="col-lg-2 col-12">
            <button class="btn btn-primary">Ajouter</button>
            
    </div></div>
            
        </form>
  
  </div>
   @if( Session::has( 'success' ))
    <div class="alert alert-success"  role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'success' ) }}</em></div>
   @elseif( Session::has( 'warning' ))
      <!-- here to 'withWarning()' -->
     <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'warning' ) }}</em></div>
@endif    
  <!-- /.card-body -->
  
  <!-- /.card-footer -->
</div>
<!-- /.card -->
</div>
</div>
</div>
</section>
</div>
           
               
@endsection
 