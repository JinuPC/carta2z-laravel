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
                <div class="x_panel w3-hover-shadow">
                  <div class="x_title">
                    <h2> {{$subtitle}}  </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-hover table-striped table-bordered">
                      <thead style="background-color:#3D4456; color:white;">
                        <tr >
                          <th style="text-align:center;">No</th>
                          <th style="text-align:center;">Id</th>
                          <th style="text-align:center;">Category</th>
                          <th style="text-align:center;">Name</th>
                          <th style="text-align:center;">Title</th>
                          <th style="text-align:center;">Brand</th>
                          <th style="text-align:center;">Unit</th>
                          <th style="text-align:center;">Action</th>                       
                        </tr>
                      </thead>

                      <tbody>
                      <?php $index = 1;?>
                      @foreach ($products as $product)
                        <tr>
                          <td>{{$index++}}</td>
                          <td>{{$product->id}}</td>
                          <td>{{$product->category_name}}</td>
                          <td>{{$product->product_name}}</td>
                          <td>{{$product->title}}</td>
                          <td>{{ucfirst($product->brand)}}</td>
                          <td>{{$product->unit}}</td>                          
                          <td style="text-align:center;">



                            {!! Form::open([
                                'method' => 'GET',
                                'url' => ['admin/products/log'.$product->user_id]
                            ]) !!}

                              <!-- Small modal -->

                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Check Log" class="glyphicon glyphicon-check"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modal'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Are you Sure ?</h4>
                                      </div>
                                      <div class="modal-body">
                                        <h4>Do you want to check the log?</h4>                                      
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Check</button>
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