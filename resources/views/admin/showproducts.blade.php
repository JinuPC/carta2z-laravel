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

                          
                <div class="w3-container w3-teal w3-shadow w3-card-24">
                  <h1>Products With Pictures</h1>
                </div>
                <!-- Starting Frame -->  
                
                <div class="w3-row-padding w3-margin-top">
                <?php $count = 0; ?>
                  @foreach($inventory as $item)
                  <?php $count++ ?>
                  @if($count == 4)
                  <?php $count = 0 ;?>
                  </div>
                  <div class="w3-row-padding w3-margin-top">
                  @endif
                  
                  <div class="w3-third">
                  <div class=" ">
                  <img src="{{asset('img/products/original/'.$item->products->images->image_url)}}" style="width:100%; height:50%; ">
                  <div class="w3-container">                  
                  <h5>{{$item->products->product_name}}</h5>                  
                  </div>
                  </div>
                  </div> 
                 @endforeach
                </div>
                 

              
              <!-- Ending Frame -->                   
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