@extends('admin.master')
@section('css')
@include('link.wizardcss')

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


      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <div class="x_panel ">
          <div class="x_title bg-green">
            <h2> {{$subtitle}} </h2>

            <div class="clearfix "></div>
          </div>
          <div class="x_content bg-blue" >
            <div class="container">
              @if (count($errors) > 0)
              <ol class="alert alert-danger animated fadeInUp delay">
                @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
                @endforeach
              </ol>
              @endif

              <div class="stepwizard col-md-offset-3 bg-blue ">
                <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>General Information</p>
                  </div>
                  <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Product Specification</p>
                  </div>
                  <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Inventory Deatails</p>
                  </div>
                </div>                
              </div>
              <form role="form" class="bg-red" action="{{url('/')}}/admin/products/add" method="post">


                <div class="row setup-content" id="step-1">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> General Information</h3>
                      <div class="form-group">
                        <label class="control-label">Category</label>
                        <select class="form-control" name="cat" id="cat" required="required" "> 
                          <option value="" disabled selected hidden  >Choose</option>
                          @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                          @endforeach                          
                        </select>
                      </div>

                      <div class="form-group ">
                        <label class="control-label">Sub Category</label>
                        <select class="form-control" name="category_id" required="required" id="subcat"> 
                          
                            <option value="" disabled selected hidden  >Choose</option>                       
                        </select>
                      </div>



                      <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <input  maxlength="100" type="text" required="required" value="{{ Input::old('product_name') }}" class="form-control" placeholder="Product name will not display in your shop it's just for inventory reference" name="product_name" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Product Title</label>
                        <input maxlength="200" type="text" required="required" class="form-control" value="{{ Input::old('title') }}" placeholder="This title will be display on the shop as product" name="title" />
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="brand">Brand</label>
                        <input maxlength="100" type="text" id="brand" value="{{ Input::old('brand') }}" required="required" class="form-control" placeholder="Enter product Brand" name="brand" />
                      </div>


                      <div class="form-group">
                        <label class="control-label ">Keyword tags</label>
                        <div class="">
                          <input id="tags_1" type="text" value="{{ Input::old('keywords') }}" class="tags form-control" required="required" name="keywords" />
                          
                        </div>
                      </div>


                      <div class="form-group">
                          <h4>Input Groups</h4>
                          <div class="input-group">
                              <label class="input-group-btn">
                                  <span class="btn btn-primary">
                                      Browse&hellip; <input type="file" name="images[]" value="Input::old('imgaes[]')" style="display: none;" multiple>
                                  </span>
                              </label>
                              <input type="text" class="form-control" readonly>
                          </div>
                            <span class="help-block " style="color:white;" >
                              select atleast 3 images
                          </span>
                      </div>


                      
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                  </div>
                </div>

                <!-- End of page one -->

                <div class="row setup-content" id="step-2">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> Product Specification</h3>
                      <div class="form-group">
                        <label class="control-label">Product Sub Title</label>
                        <input maxlength="200" type="text" required="required" class="form-control" value="{{ Input::old('sub_title') }}" placeholder="This title will be display on the shop as product" name="sub_title" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea required="required" class="form-control" value="{{ Input::old('description') }}" name="description" placeholder="Enter Prdouct Description" ></textarea>
                      </div>
                      <div class="form-group">
                        <h3 class="control-label">Enter Product Features</h3>
                      </div>
                      <div class="form-group">
                        
                        <input maxlength="200" type="text" name="feature1" value="{{ Input::old('feature1') }}" required="required" class="form-control" placeholder="Enter Feature that should be listed in the shop" name="unit"/>
                      </div>
                      <div class="form-group">
                        
                        <input maxlength="200" type="text" name="feature2" value="{{ Input::old('feature2') }}" required="required" class="form-control" placeholder="Enter Feature that should be listed in the shop" name="unit"/>
                      </div>
                      <div class="form-group">
                        
                        <input maxlength="200" type="text" name="feature3" value="{{ Input::old('feature3') }}" required="required" class="form-control" placeholder="Enter Feature that should be listed in the shop" name="unit"/>
                      </div>
                      <div class="form-group">
                        
                        <input maxlength="200" type="text" name="feature1" value="{{ Input::old('feature1') }}" required="required" class="form-control" placeholder="Enter Feature that should be listed in the shop" name="unit"/>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" name="brand" />
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                  </div>
                </div>
                <div class="row setup-content" id="step-3">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> Step 3</h3>
                      <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
                      <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <!-- table content -->                   
          </div>
        </div>
      </div>              
      <!-- table end -->       
    </div>
  </div>
</div>

<!-- /page content -->


@stop

@section('script')
@include('link.wizardscript')

@stop