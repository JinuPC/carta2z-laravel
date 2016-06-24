@extends('admin.master')
@section('css')
    @include('link.tablecss')
    
@stop
@section('content')
  
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @include('link.alert')
              
              </div>

              <!-- Starting table -->              

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title w3-teal w3-card-24 w3-hover-shadow">
                    <h1> {{$subtitle}} </h1>                    
                    
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered">
                      <thead style="background-color:#3D4456; color:white;">
                        <tr >
                          <th class="w3-hover-shadow w3-teal" style="text-align:center;">No</th>
                          <th style="text-align:center;">FirstName</th>
                          <th style="text-align:center;">LastName</th>
                          <th style="text-align:center;">Email</th>
                          <th style="text-align:center;">Role</th>
                          <th style="text-align:center;">Tin No</th>
                          <th style="text-align:center;">Phone</th>
                          <th colspan="2" style="text-align:center;">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $index = 1;?>
                      @foreach ($users as $user)
                        <tr>
                          <td>{{$index++}}</td>
                          <td>{{$user->firstname}}</td>
                          <td>{{$user->lastname}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{ucfirst($user->role)}}</td>
                          <td>{{$user->tin_no}}</td>
                          <td>{{$user->phone_no}}</td>
                          <td style="text-align:center;">

                          <!-- activating button -->
                          {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/users/verify/'.$user->user_id]
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="{{'#act'.$index}}"><span data-toggle="tooltip" title="Verify User" class="glyphicon  glyphicon-user"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'act'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Are you Sure ?</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h4>Verify {{$user->firstname}} ?</h4>                                      
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Verify</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <!-- /modals -->
                              {!! Form::close() !!}  
                              <!-- ending activate Button -->  
                              </td>

                              <td style="text-align:center;">
                          <!-- Delete Button -->
                            {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/users/disapprove/'.$user->user_id]
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Deactive User" class="glyphicon glyphicon-ban-circle"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modal'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Are you Sure ?</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h4>Deactivate user {{$user->firstname}} ?</h4>                                      
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Deactivate</button>
                                      </div>

                                    </div>
                                  </div>
                                </div>
                                <!-- /modals -->
                              {!! Form::close() !!}        

                          </td>
                        </tr>    
                      @endforeach 
                      </tbody>
                    </table>
                    <!-- Ending Table -->                   
                  </div>
                </div>
              </div>       
            </div>
          </div>
        </div>
        
        <!-- /page content -->

  
@stop

@section('script')
    @include('link.tablescript')

@stop