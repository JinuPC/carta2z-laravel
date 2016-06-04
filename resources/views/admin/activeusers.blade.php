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
                
              </div>

              <!-- Starting table -->

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Total Users </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>FirstName</th>
                          <th>LastName</th>
                          <th>Email</th>
                          <th>Tin No</th>
                          <th>Phone</th>
                          <th>Operations</th>
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
                          <td>9786240548</td>
                          <td>$320,800</td>
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