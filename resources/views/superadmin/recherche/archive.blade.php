@extends('superadmin.main')

@section('content')


  <script src="{{asset('adminLTE3/plugins/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('adminLTE3/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
   <script src="{{asset('adminLTE3/dist/js/demo.js')}}"></script>

<!-- Content Wrapper. Contains page content -->
  <div >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Annonces</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href={{url('/home')}}>Accueil</a></li>
              <li class="breadcrumb-item active">Archive</li>
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
                <h3 class="card-title ">
                  Rechercher un appel d'offre en archive

             
                </h3>   
              <div class="card-tools">
                <button type="button" class="btn btn-tool border border-info " data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              </div>
         <div class="card-body">
      <form method="get" id="annance" action="{{ route('searchresultarchive')}}">
                        {{ csrf_field() }}

                <div class="form-row">
                    <div class="col-md-8 col-lg-2 form-group">
                           <label>N°Baosem</label>
                          <input type="text" class="form-control border border-info  rounded-pill" id="numB" name="numB" placeholder="N_Baosem">
                    </div>
                   <div class="col-md-8 col-lg-2 form-group">
                    
                       <div class="form-group">
                        <label>Annonceur</label>
                        <select name="ananceur_id" id="ananceur_id" class="form-control border border-info  rounded-pill ">
                            <option value="">Select annonceur </option>

                            @foreach($annanceur as $an)

                            <option value="{{ $an->code_annonceur }}">{{ $an->abreviation }}</option>

                            @endforeach
                        </select>
                     </div>
                  </div>

                   <div class="form-group col-md-2 form-group">
                     <label>Nature</label>
                        <select name="nature_id" id="nature_id" class="form-control border border-info  rounded-pill">

                            <option value="">Select nature</option>
                            @foreach($natures as $nature)

                            <option value="{{ $nature->code_nature }}">{{ $nature->libelle_nature }}</option>

                            @endforeach
                        </select>
                     </div>

                 <div class="col-md-8 col-lg-2 form-group">
                          <label>N°Annonce</label>
                          <input type="number" class="form-control border border-info rounded-pill" id="numA" name="numA" placeholder="N_Annance">
                 </div>
                 <div class="col-md-8 col-lg-2 form-group">
                        <label>Objet</label>
                        <input type="text" class="form-control border border-info  rounded-pill" id="titre" name="titre" placeholder="objet">
                  </div>
                    <div class="col-md-8 col-lg-2 form-group">
                         <label>Mots clés placard</label>
                        <input type="text" class="form-control border border-info  rounded-pill" id="motcles" name="motcles" placeholder="Mot cles placard">
                   </div> 
                  </div>

                <div class="form-row">

                    <div class="form-group  col-md-3 form-group">
                       <label>Rubrique</label>
                        <select name="rubrique_id" id="rubrique_id" class="form-control border border-info  rounded-pill">

                            <option value="">Select rubrique</option>
                            @foreach($rubriques as $rubrique)

                            <option value="{{ $rubrique->code_rubrique }}">{{ $rubrique->libelle_rubrique }}</option>

                            @endforeach
                        </select>
                     </div>

                  <div class="col-md-3 form-group">
                   <div class="form-group">
                     <label>Version</label>
                        <select name="type" id="type" class="form-control border border-info rounded-pill">

                            <option value="">Select version</option>
                            @foreach($versions as $ver)

                            <option value="{{ $ver->id_version }}">{{ $ver->nom }}</option>

                            @endforeach
                        </select>
                     </div>
                </div> 
                  <div class="col-md-8 col-lg-3 form-group">
                       <label>Date debut</label>
                        <input id="dateD" type="date" class="form-control border border-info rounded-pill" name="dateD"  placeholder="date_debut">
                  </div>
                     <div class="col-md-8 col-lg-3 form-group">
                       <label>Date fin</label>
                        <input id="dateF" type="date" class="form-control border border-info rounded-pill" name="dateF" placeholder="Date_fin">
                   </div>

                  </div>

                 <div class="col-md-12 form-group">
                  <div class="form-group" align="center">
                    <button type="reset" class="btn btn-danger col-md-2 " name="annuler" id="annuler">Annuler</button>
                    <button class="btn  btn-primary col-md-2" type="submit" name="search" id="search">
                   </i>Rechercher</button>
                    
                  </div>


                 </div>
           </form>
   
     
            </div>
  <!-- /.card-body -->
  
  <!-- /.card-footer -->
</div>
<!-- /.card -->




</div>


          <div class="col-12">
            <!-- interactive chart -->
            <div class="card ">
              <div class="card-header">
                 
                <ul class="nav nav-pills card-title" id="pills-tab" role="tablist">
               <li class="nav-item">
              <a class="nav-link active" id="pills-centre-tab" data-toggle="pill" href="#pills-centre" role="tab" aria-controls="pills-centre" aria-selected="true">Appel d'offres</a>
             </li>
              <li class="nav-item">
            <a class="nav-link" id="pills-est-tab" data-toggle="pill" href="#pills-est" role="tab"   aria-controls="pills-est" aria-selected="false">Resultats</a>
              </li>

               </ul>
                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
              </div>
         <div class="card-body">
   <div class="tab-content" id="pills-tabContent">
      @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
   @endif
  <div class="tab-pane fade show active" id="pills-centre" role="tabpanel" aria-labelledby="pills-centre-tab">
        
    <div class="table-responsive">
     <table class="table table-striped table-advance table-hover" style="width:100%" id="example1">
                  
                
            
                <thead>
                  <tr class="table-primary">
                    <th style="width:20%">N°Annonce+N°Baosem+<br>date_parution</th>
                    <th style="width:20%">Objet+<br>N°Appel d'offres</th>
                    <th style="width:20%">nature+<br>Type</th>
                    <th style="width:17%"><br>Annonceur<br><br></th>
                    <th style="width:18%"><br>Rubrique<br><br></th>
                    <th style="width:5%"><br>Aperçu<br><br></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($list_offres_finale as $offre)
                @if ($offre->code_rubrique != 1 && $offre->code_rubrique != 2 && $offre->code_rubrique != 7 && $offre->code_rubrique != 13)
                  <tr>
                    <td>
                      <ul>
                            <li>{{ $offre->ref_montage }}</li>
                            <li> {{ $offre->num_baosem }} </li> 
                            <li> {{ $offre->date_parution_reel }} </li> 
                      </ul>  
                      </td>
                    <td>
                    <ul>
                     <li>{{ $offre->titre }}  </li>
                     <li>{{ $offre->num_insertion }} </li>
                    </ul>
                    </td>
                    <td>
                    <ul>
                     <li>{{ $offre->libelle_nature }}  </li>
                     <li>{{ $offre->nom }} </li>
                    </ul>
                    </td>
                    <td>{{ $offre->abreviation }} </td>
                    <td>{{ $offre->libelle_rubrique }}</td>
                    <td>
      
                        <a href="{{route('detailarchive.show', $offre->id)}} " class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>

                     {{--   <form action="{{ route('detailarchive.destroy', $offre->id)}}" method="post">
                         @csrf
                        @method('DELETE')
                        <button   type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Suuprimer</button>
                         </form> --}} 
                  </td>
                  @endif
                  @endforeach
                  </tr>
              
                         
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-est" role="tabpanel" aria-labelledby="pills-est-tab">
           <div class="table-responsive">
             <table class="table table-striped table-advance table-hover" style="width:100%" id="example2">
                  
                
            
                <thead>
                  <tr class="table-primary">
                    <th style="width:20%">N°Annonce+N°Baosem+<br>date_parution</th>
                    <th style="width:20%">Objet+<br>N°Appel d'offres</th>
                    <th style="width:20%">nature+<br>Type</th>
                    <th style="width:17%"><br>Annonceur<br><br></th>
                    <th style="width:18%"><br>Rubrique<br><br></th>
                    <th style="width:5%"><br>Aperçu<br><br></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($list_offres_finale as $offre)
                @if ($offre->code_rubrique == 1 ||  $offre->code_rubrique == 2 ||  $offre->code_rubrique == 7 ||  $offre->code_rubrique == 13)
                  <tr>
                    <td>
                      <ul>
                            <li>{{ $offre->ref_montage }}</li>
                            <li> {{ $offre->num_baosem }} </li> 
                            <li> {{ $offre->date_parution_reel }} </li> 
                      </ul>  
                      </td>
                    <td>
                    <ul>
                     <li>{{ $offre->titre }}  </li>
                     <li>{{ $offre->num_insertion }} </li>
                    </ul>
                    </td>
                    <td>
                    <ul>
                     <li>{{ $offre->libelle_nature }}  </li>
                     <li>{{ $offre->nom }} </li>
                    </ul>
                    </td>
                    <td>{{ $offre->abreviation }} </td>
                    <td>{{ $offre->libelle_rubrique }}</td>
                    <td>
      
                        <a href="{{route('details.show', $offre->id)}} " class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>

                     {{--   <form action="{{ route('details.destroy', $offre->id)}}" method="post">
                         @csrf
                        @method('DELETE')
                        <button   type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>Suuprimer</button>
                         </form> --}} 
                  </td>

                  @endif
                  @endforeach
                  </tr>
              
                         
                </tbody>
              </table>




          </div>

     
   

   
     
            </div>
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
 <script>
  $(function () {
       $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });


     $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

@endpush

