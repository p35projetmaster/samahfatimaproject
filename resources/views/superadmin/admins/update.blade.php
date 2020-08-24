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
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active"> </li>
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
          
                <a href="{{url('/adminslist')}}" >
                <span class="right badge badge-light">Retourner</span>
           
            </a>
              </div>
              <div class="card-body">
                 @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div >
                            <div class="card-block">
                                <center class="m-t-30"> <!--<img src="{{asset('admin/img/admin.png')}}" width="150" /> -->
                                    
                                    
                                  <i class="far fa-address-card fa-10x badge-light" ></i>
                                  <hr>
                                
                                <h6 class="m-0 font-weight-bold ">{{$role[0]}}</h6>
                                </center> 
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                         
                                <form class="form-horizontal form-material" method="POST" action="{{ route('admins.update', $admin->id) }}">
                                  @csrf  

@method('PUT')                      <div class="row">
                                      <div class="col">
                                    <div class="form-group">
                                        <label class="col-md-12 ">Nom</label>
                                        <div class="col-md-12">
                                            <input name="nom" type="text" class="form-control form-control-line" value={{$admin->name
                                          }}>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-group">
                                        <label class="col-md-12">Prénom</label>
                                        <div class="col-md-12">
                                            <input name="prenom" type="text" class="form-control form-control-line" value={{$admin->prenom
                                          }}>
                                        </div>
                                    </div></div></div>
                                    <div class="row">
                                      <div class="col">
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12 ">Email</label>
                                        <div class="col-md-12">
                                            <input name="email" type="email" class="form-control form-control-line" name="example-email" id="example-email"  value={{$user->email
                                          }}>
                                        </div>
                                    </div></div><!--
                                    <div class="col">
                                    <div class="form-group">
                                        <label class="col-md-12 ">Password</label>
                                        <div class="col-md-12">

                                            <input name="password" type="password" class="form-control form-control-line" value={{$user->password}}>
                                         
                                        
                                        </div>
                                    </div>
                                  </div>-->
                                    <!--<div class="form-group">
                                        <label class="col-md-12 text-primary">Role</label>
                                        <div  class=" col-md-12">
                                        <h5>{{$role[0]}}</h5></div>
                                       <div class="col-md-12">
                                            <input name="role" type="text" class="form-control form-control-line" name="example-email" id="example-email"  value={{$role[0]}}
                                          }}>
                                        </div>
                                        
                                    </div>-->
                                   
 
<div class="row container">
 
@foreach($permissions as $permission)
<div class="col-lg-4 form-group">
<input name="{{$permission->name}}" type='checkbox' value='{{$permission->id}}' {{$user->can($permission->name) ? 'checked':''}}>   {{$permission->name}}</input>
</div>

@endforeach
</div>



                                    <div class=" col-sm-12 form-group">
                                        <div class="p-3 float-right">
                                            <button class="btn btn-primary">Mettre a jour le profil</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div></div>






  
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
