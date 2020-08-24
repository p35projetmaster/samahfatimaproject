@extends('superadmin.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div >
    <!-- Content Header (Page header) -->
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- interactive chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">

              <a class=" nav-link" href="{{url('/nouveauadmin')}}">

                 <i class="fas fa-user-plus"></i>
                <span>Nouveau administrateur</span></a>
       
              </div>
              <div class="card-body ">
                <div class="card-body table-responsive p-0">
                  @if(count($data) > 0)
                <table class="table table-hover text-nowrap">
                  <thead>
                     <tr>
                      <th scope="col" >Nom</th>
                      <th scope="col">Prénom</th>
                      <th scope="col">Email</th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  @foreach($data as $row)
                  <tbody>
                    <td>{{$row->name}}</td>
                    <td>{{$row->prenom}}</td>
                    <td>{{$row->email}}</td>
                    <td >
                      <div class="row">
                        <div class="col">
                      <a href="{{ route('admins.show',$row->id)}}" class="btn btn-light"><i class="fas fa-user-edit fa-2x" style="color: orange" ></i></a></div>
                     <!-- <div class="col">
                        
                <a href="{{ route('admins.show',$row->id)}}" class="btn btn-light"><i class="fas fa-book-reader fa-2x" style="color: green"></i></a>
              </div>-->
              <div class="col">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalLong">
            <i class="fas fa-trash-alt fa-2x" style="color: red;" type="submit"></i>
             </button></div>
              </div>


                      <!--<div >
                
                      <a class="" href="#">
                       
                      </a>
                      <a class="" href="#">
                       <i class="fas fa-user-edit fa-2x" style="color: orange" ></i>
                      
                      </a>
                      </div>-->
                    </td>
                    
                  </tbody>
                  @endforeach
                </table>
                <hr>
                {{$data->links()}}
                
                @endif
                </div>
                  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
                </div>    

  
    
  </div>

  <!-- /.card-body -->
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
        Êtes-vous sûr de vouloir supprimer cet administrateur ?
      </div>
      <div class="modal-footer">
        <div class="col">
                <form action="{{ route('admins.destroy', $row->id)}}" method="post"> 
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">oui</button>
                  <!--<i class="fas fa-trash-alt fa-2x" style="color: red;" type="submit"></i>-->
                </form></div>
                
       
      </div>
    </div>
  </div>
</div>

  
  <!-- /.card-footer -->
</div>
<!-- /.card -->
</div>
</div>
</div>
</section>
</div>
           
               
@endsection
 