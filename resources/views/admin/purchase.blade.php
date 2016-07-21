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
                          <th style="text-align:center;">Product</th>
                          <th style="text-align:center;">Seller Number</th>
                          <th style="text-align:center;">Count</th>
                          <th style="text-align:center;">price</th>
                          <th style="text-align:center;">Delivery Charge</th>
                          <th style="text-align:center;">Total Price</th>
                          <th style="text-align:center;">Payment Type</th>
                          <th style="text-align:center;">Order Date</th>
                          <th style="text-align:center;">Status</th>
                          <th style="text-align:center;">Status</th>
                          <th style="text-align:center;">View</th>
                          <th style="text-align:center;">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php $index = 1;?>
                      @foreach ($purchases as $purchase)
                        <tr>
                          <td style="text-align:center;"><h4>{{$index++}}</h4></td>
                          <td><h4>{{$purchase->category}}</h4></td>
                          <td><h4>{{$purchase->product_title}}</h4></td>
                          <td><h4>{{$purchase->phone_no}}</h4></td>
                          <td style="text-align:center;"><h4>{{$purchase->quantity}}</h4></td>
                          <td style="text-align:center;"><h4>{{$purchase->price}}</h4></td>
                          <td style="text-align:center;"><h4>{{$purchase->deliverycharge}}</h4></td>
                          <td><h4>{{$purchase->total_price}}</h4></td>
                          <td style="text-align:center;"><h4>{{$purchase->Payment_details}}</h4></td>
                          <td style="text-align:center;"><h4>{{$purchase->Payment_details}}</h4></td>
                          <td style="text-align:center;"><h4>{{date('F d, Y', strtotime($purchase->created_at))}}</h4></td>
                          <td style="text-align:center;">
                            @if ($purchase->finished == 0)
                              <h4><span class="label label-info">New purchase</span></h4>
                            @elseif($purchase->finished == 1)
                              <h4><span class="label label-info">Confirmed</span></h4>
                            @elseif($purchase->finished == 2)
                              <h4><span class="label label-info">Processing</span></h4>
                            @elseif($purchase->finished == 3)
                              <h4><span class="label label-info">Shipping</span></h4>
                            @elseif($purchase->finished == 4)
                              <h4><span class="label label-info">Delivered</span></h4>
                            @elseif($purchase->finished == 5)
                              <h4><span class="label label-info">Returned</span></h4>
                            @endif

                          </td>
                          <td style="text-align:center;"><a href="{{url('/')}}/admin/purchase/view/{{$purchase->id}}" type="button" class="btn btn-success" ><span data-toggle="tooltip" title="View Details " class="glyphicon glyphicon-hand-up"></span></a>
                          </td>
                          <td style="text-align:center;">



                            {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/purchase/update/'.$purchase->id]
                            ]) !!}
                            @if($purchase->finished == 4)
                              <!-- Small modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Return " class="glyphicon glyphicon-thumbs-down"></span></button>
                              @else
                              <button type="button" class="btn btn-info" ><span data-toggle="tooltip"  class="glyphicon glyphicon-hourglass"></span></button>
                              @endif
                              
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
                                           <td align="left">Reason</td>
                                           <td>

                                             <input type="text" name="reason">
                                           </td>
                                         </tr>                                         
                                       </table>

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Return</button>
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