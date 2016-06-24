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
                          <th style="text-align:center;">SKU</th>
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
                      @foreach ($items as $item)
                        <tr>
                          <td style="text-align:center;"><h4>{{$index++}}</h4></td>
                          <td><h4>{{$item->sku}}</h4></td>
                          <td><h4>{{$item->product_name}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->total_stock}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->stock}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->sold}}</h4></td>
                          <td><h4>{{$item->unit}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->unit_price}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->mrp}}</h4></td>
                          <td style="text-align:center;"><h4>{{$item->discount}}%</h4></td>
                          <td style="text-align:center;">
                            @if ($item->enabled == 0)
                              <h4><span class="label label-info">Deactive</span></h4>
                            @else
                              <h4><span class="label label-info">Active</span></h4>
                            @endif
                          </td>
                          <td style="text-align:center;">



                            {!! Form::open([
                                'method' => 'POST',
                                'url' => ['admin/inventory/update/'.$item->id]
                            ]) !!}

                              <!-- Small modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="{{'#modal'.$index}}"><span data-toggle="tooltip" title="Edit " class="glyphicon glyphicon-edit"></span></button>

                                <div  class="modal  fade bs-example-modal-sm" id="{{'modal'.$index}}" tabindex="-1" role="dialog" aria-hidden="true">
                                  <div class="modal-dialog modal-sm">
                                    <div class="modal-content">

                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <h4 style="text-align:center;" class="modal-title" id="myModalLabel2">Edit {{$item->product_name}}</h4>
                                      </div>
                                      <div class="modal-body">
                                       <table class="table table-bordered">
                                        <tr>
                                          <td width="50%" align="left">Stock</td>
                                          <td><input style="width:100%;" type="number" name="stock"  value="{{$item->stock}}" min="0" max="100" required ></td>
                                        </tr>

                                         <tr>                                   
                                           <td align="left">Unit</td>
                                           <td><input type="text" name="unit" value="{{$item->unit}}" required></td>
                                         </tr>

                                         <tr>                                   
                                           <td align="left">Unit Price</td>
                                           <td><input type="text" name="unit_price" value="{{$item->unit_price}}" required></td>
                                         </tr>

                                         <tr>                                   
                                           <td align="left">M R P</td>
                                           <td><input type="text" name="mrp" value="{{$item->mrp}}" required></td>
                                         </tr>

                                         <tr>                                   
                                           <td align="left">Discount</td>
                                           <td><input class="" style="width:100%;" type="number" name="discount" value="{{$item->discount}}" min="0" max="10" ></td>
                                         </tr>

                                         <tr>                                   
                                           <td align="left">Status</td>
                                           <td>
                                             <select style="width:100%;" name="enabled" required>
                                               <option value="1">Active</option>
                                               <option value="0">Deactive</option>
                                             </select>
                                           </td>
                                         </tr>
                                         <input type="hidden" name="product_id" value="{{$item->product_id}}">
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