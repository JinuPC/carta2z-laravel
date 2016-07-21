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
                          <th style="text-align:center;">Category</th>
                          <th style="text-align:center;">Title</th>
                          <th style="text-align:center;">Product Name</th>
                          <th style="text-align:center;">Stock Added</th>
                          <th style="text-align:center;">Available Stock</th>
                          <th style="text-align:center;">Sold</th>
                          <th style="text-align:center;">Unit</th>
                          <th style="text-align:center;">Unit price</th>
                          <th style="text-align:center;">MRP</th>
                          <th style="text-align:center;">Discount</th>
                          <th style="text-align:center;">Status</th>
                          <th style="text-align:center;">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $index = 1;?>
                      @foreach ($orders as $order)
                        <tr>
                          <td style="text-align:center;"><h4>{{$index++}}</h4></td>
                          <td><h4>{{$order->category}}</h4></td>
                          <td><h4>{{$order->product_title}}</h4></td>
                          <td><h4>{{$order->retailer}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->quantity}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->price}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->deliverycharge}}</h4></td>
                          <td><h4>{{$order->total_price}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->Payment_details}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->retailer}}</h4></td>
                          <td style="text-align:center;"><h4>{{$order->status}}</h4></td>
                          <td style="text-align:center;">
                            @if ($order->finished == 5)
                              <h4><span class="label label-info">New Return</span></h4>
                            @elseif($order->finished == 6)
                              <h4><span class="label label-info">Return Approved</span></h4>
                            @elseif($order->finished == 7)
                              <h4><span class="label label-info">Return Processing</span></h4>
                            @elseif($order->finished == 8)
                              <h4><span class="label label-info">Return Finished</span></h4>
                            @endif
                          </td>
                          <td style="text-align:center;">



                            {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/order/update/'.$order->id]
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Update " class="glyphicon inline glyphicon-edit"></span></button>

                                <a href="{{url('/')}}/admin/orders/view/{{$order->id}}" type="button" class="btn inline btn-info" ><span data-toggle="tooltip" title="View Details " class="glyphicon glyphicon-thumbs-up"></span></a>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modal'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Update Order Status</h4>
                                      </div>
                                      <div class="modal-body">
                                       <table class="table table-bordered">   
                                         <tr>                                   
                                           <td align="left">Status</td>
                                           <td>
                                             <select style="width:100%;" name="finished" required>
                                               <option value="6">Return Confirmed</option>
                                               <option value="7">Return Processing</option>
                                               <option value="8">Finished Return</option>     
                                             </select>
                                           </td>
                                         </tr>                                         
                                       </table>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update</button>
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