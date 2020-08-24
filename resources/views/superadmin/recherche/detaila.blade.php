@extends('superadmin.main')

@section('content')


<!-- Content Wrapper. Contains page content -->
  <div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 style="color: blue"> Baosem: {{ $data->num_baosem }} </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{url('/home')}}>Home</a></li>
              <li class="breadcrumb-item active">Détails</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
              <!-- title row -->
              <div class="row">
                <div class="col-12">

                   <div class="invoice p-3 mb-3">
                     <div class="row">
                      <div class="col-12">

                  <h6 style="color: red">
                    <small class="float-right"> La date parution reel: {{ $data->date_parution_reel }}</small>
                  </h6>
                      </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  <b style="color: blue">Baosem: {{ $data->id}}</b><br>
                  <b>Date de parution:{{ $data->date_parution_reel }} </b><br>
                  <b style="color: orange">Reference baosem:{{ $data->ref_montage }}</b> <br>
              
           
                </div>

                <div class="col-sm-4 invoice-col">
                  
                </div>
                
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
           
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
              <div class="col-12">
                <br>
                <br>
                <br>
                <br>


                <?php
                $contenu= $data->texte ;
                 echo $contenu;
                ?>
              

              </div>
              
              </div>
              <!-- /.row -->

              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">


              <button type="button" class="btn btn-default float-right" style="color: blue"><i class="fas fa-print"></i>Imprimer</button>
            @can('supression_placard')
            <button   type="submit" class="btn btn-default float-right" data-toggle="modal" data-target="#exampleModalLong" style="margin-right: 5px; color: red "><i class="far fa-trash-alt"></i>Supprimer
            </button>
             @endcan

                </div>
              </div>
            </div>
<!-- /.card -->

  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Êtes-vous sûr de vouloir supprimer ce placard?
      </div>
      <div class="modal-footer">
        <div class="col">
                 <form action="{{ route('details.destroy', $data->id)}}" method="post">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Oui</button>
                  <!--<i class="fas fa-trash-alt fa-2x" style="color: red;" type="submit"></i>-->
                </form></div>
                
       
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
</div>
           
               
@endsection