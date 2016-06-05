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
              @if(isset($alert))
                @include('link.alert')
              @endif
              </div>

              <!-- Starting table -->

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Total Users </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered">
                      <thead style="background-color:#3D4456; color:white;">
                        <tr >
                          <th style="text-align:center;">No</th>
                          <th style="text-align:center;">FirstName</th>
                          <th style="text-align:center;">LastName</th>
                          <th style="text-align:center;">Email</th>
                          <th style="text-align:center;">Tin No</th>
                          <th style="text-align:center;">Phone</th>
                          <th style="text-align:center;">Action</th>
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
                          <td>{{$user->tin_no}}</td>
                          <td>{{$user->phone_no}}</td>
                          <td style="text-align:center;"> 
                            <input type="submit" value="Approve" class="btn btn-info"></button>
                            <input type="submit" value="Approve" class="btn btn-info"></button>

                          </td>
                        </tr>    
                      @endforeach
                      
                                            
                      </tbody>
                    </table>
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