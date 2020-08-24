@extends('superadmin.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Importation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Importation</li>
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
                  Importation fichier des annonceurs NACHR
                </h3>
              </div>
              <div class="card-body">
                 <div class="position-relative" style="left: 100px">
              <h6 style="color: blue">Télécharger le fichier des annonceurs ici:</h6>
            </div>
  
    <form action="{{ route('fileimport') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-12 col-12">  </div>
            <div class="col-lg-8 col-12">
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile" value="file" required>
                    <label class="custom-file-label" for="customFile">choisissez un fichier annonceurs (annonceurs.csv)</label>
                </div></div>
            </div>
            <div class="col-lg-4 col-12">
           <button class="btn btn-primary">Importe</button>
       </div>
   </div>
   
        </form>
        @if( Session::has( 'success' ))
    <div class="alert alert-success"  role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'success' ) }}</em></div>
   @elseif( Session::has( 'warning' ))
      <!-- here to 'withWarning()' -->
     <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get( 'warning' ) }}</em></div>
@endif 
  </div>
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
@push('scripts')
 <script type="text/javascript">
  var regex = new RegExp("(.*?)\.(csv)$");

$('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
})

</script>

@endpush