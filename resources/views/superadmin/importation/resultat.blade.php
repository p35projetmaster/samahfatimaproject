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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Flot</li>
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
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">Appele d'offre</h3>

              </div>
              <!-- /.card-header -->
              @if(count($insert_data) > 1)
              <div class="card-body table-responsive p-0" style="height: 400px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>num_baosem</th>
                      <th>date_parution_reel</th>
                      <th>code_annonceur</th>
                      <th>ref_montage</th>
                      <th>num_insertion</th>
                      <th>titre</th>
                    </tr>
                  </thead>
                   @foreach($insert_data as $data)
                  <tbody>
                    <td>{{$data['num_baosem']}}</td>
                    <td>{{$data['date_parution_reel']}}</td>
                    <td>{{$data['code_annonceur']}}</td>
                    <td>{{$data['ref_montage']}}</td>
                    <td>{{$data['num_insertion']}}</td>
                    <td>{{$data['titre']}}</td>
                    
                  </tbody>
                   @endforeach
                </table>
                @endif
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
<!-- /.card -->
</div>
</div>
</div>
</section>
</div>
           
               
@endsection

