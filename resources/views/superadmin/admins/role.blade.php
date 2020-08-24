@extends('superadmin.main')

@section('content')
 <!-- Main content -->
    <section class="content">
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nouveau admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Flot</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
               @if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif
              @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
              <div class="card-header">
                <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="user" action="{{route('createrole') }}" method="POST" enctype="multipart/form-data">

              @csrf
                <div class="card-body">
                  <div class="form-group">
                        <label>Role name</label>
                        <input name="role" type="text" class="form-control" placeholder="Enter ..." required="true">
                      </div>
                  <hr>
 <div class="row">                                        
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="webmaster" id="customCheck1" type="checkbox" onclick="toggle(this);">
    <label class="m-0 font-weight-bold text-primary custom-control-label" for="customCheck1">Super admin</label>
</div>
</div> 
   <hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Importation" id="customCheck2" type="checkbox">
    <label class="custom-control-label" for="customCheck2">Importation</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Annonnces" id="customCheck3" type="checkbox">
    <label class="custom-control-label" for="customCheck3">Annonnces</label>
</div>
</div>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Archive" id="customCheck4" type="checkbox">
    <label class="custom-control-label" for="customCheck4">Archive</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="supression" id="customCheck5" type="checkbox">
    <label class="custom-control-label" for="customCheck5">Suppression placard</label>
</div>
</div>
<hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Abonnees" id="customCheck6" type="checkbox">
    <label class="custom-control-label" for="customCheck6">Abonnées</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="Demandes" id="customCheck7" type="checkbox">
    <label class="custom-control-label" for="customCheck7">Demandes</label>
</div>

<div class="custom-control custom-checkbox rows col-sm-4">
    <input class="custom-control-input" name="admin" id="customCheck8" type="checkbox">
    <label class="custom-control-label" for="customCheck8">Admin</label>
</div>
</div>
<hr>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
  $('#quickForm').validate({
    rules: {
      role: {
        required: true,
      },
    },
    messages: {
      email: {
        required: "Please enter a role name",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script type="text/javascript">
  $('#customCheck1').change(function(e) {
  if (e.currentTarget.checked) {
  $('.rows').find('input[type="checkbox"]').prop('checked', true);
} else {
    $('.rows').find('input[type="checkbox"]').prop('checked', false);
  }
});

$('input[type=submit]').on('click', validate);
</script>
@endpush