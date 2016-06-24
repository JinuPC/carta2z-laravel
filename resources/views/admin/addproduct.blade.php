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
        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      </div>      
    </div>
    <!-- W3 Main Container Starts here -->
    <div class="w3-container">
      <!-- W3 Main Card Starts here -->
      <div class="w3-card-24 w3-light-grey w3-hover-shadow" >
        <!-- W3 Header Starts here -->
        <header class="w3-container w3-teal w3-xxxlarge w3-hover-shadow w3-card-24">
          <h1>New Product</h1>
        </header>
        <!-- W3 Header Ends here -->

          <!-- Form Contents Starts here -->
          <form action="{{url('/')}}/admin/products/add" method="post" enctype="multipart/form-data">
          <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          <div class="w3-center w3-light-grey " style="margin:10px;">
            <div class=" w3-xlarge w3-text-red"></div>          
            <div class="w3-row ">
              <a href="#"  onclick="openTab(event, 'First');">
                <div id="firstTab" class=" w3-third w3-blue tablink w3-xlarge  w3-border-blue w3-hover-shadow w3-padding w3-card-24">General Descriptions</div>
              </a>
              <a href="#"  onclick="openTab(event, 'Second');">
                <div id="secondTab" class=" w3-large w3-third tablink w3-disabled  w3-hover-shadow  w3-grey  w3-padding w3-card-24">Product Features</div>
              </a>
              <a href="#" onclick="openTab(event, 'Third');">
                <div id="thirdTab" class=" w3-large w3-third w3-disabled tablink  w3-hover-shadow  w3-grey  w3-padding w3-card-24">Stock Details</div>
              </a>
            </div>
            <!-- First Section -->
            <br><br> 
            <div id="First" class="w3-container myTab w3-center " style="display:block; ">
              <div class=" form_wizard wizard_verticle  col-md-3  ">
              <br><br>
              <ul class="list-unstyled wizard_steps w3-center" style="padding-left:40%;">
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                            <br><br>
                          </a>
                        </li>
                        <li class="">
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                      </ul>
              </div>
              <div class=" w3-animate-zoom col-md-9 ">
              <!-- Elemenst Area -->
              <br><br>
              <p>
              <select class=" w3-hover-green  w3-select w3-center   w3-large w3-light-grey" name="cat" id="cat"  style="text-indent: 45%;"> 
                <option class="w3-center" value="" disabled selected hidden  >Main Category</option>
                @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach                          
              </select>
              </p>
              <br>

              <p>
                  <select class="w3-hover-green w3-select w3-center w3-light-grey w3-large  w3-text-black" name="category_id"  id="subcat" style="text-indent: 45%;">                     
                      <option value="" disabled selected hidden  >Sub Category</option>
                  </select>
              </p>
              <br>
              <p class="w3-hover-green">                
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('product_name') }}" placeholder=" Product Name for Inventory" name="product_name" type="text" >
              </p>

              <br>
              <p class="w3-hover-green">                
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('title') }}" placeholder=" Product Title for Shop" name="title" type="text" >
              </p>
              <br>

              <p class="w3-hover-green">                
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('sub_title') }}" placeholder=" Product Sub Title" name="sub_title" type="text" >
              </p>
              <br>
              <p class="w3-hover-green">                
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('brand') }}" placeholder=" Brand" name="brand" type="text" >
              </p>
              <br>
              <p class="w3-hover-green">                
                <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn w3-green w3-large w3-hover-green  w3-hover-shadow w3-text-white">
                                Browse&hellip; <input type="file" name="images[]"  value="Input::old('images[]')" style="display: none;" multiple>
                            </span>
                        </label>
                        <input type="text" placeholder="Select minimum 3 images" class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" readonly>
                    </div>    
              </p>    
              <br>
                <a href="#" class="w3-btn w3-large w3-card-24 w3-blue w3-hover-shadow"   onclick="openTab(event, 'Second');">></a>
                <br>
                <br>
              </div>
              <!-- Elemenst Area Ends Here-->
            </div>
            <!-- Second Section -->
            <div id="Second" class="w3-container myTab" style="display:none;">
              <div class=" form_wizard wizard_verticle  col-md-3  ">
              <br><br>
              <ul class="list-unstyled wizard_steps w3-center" style="padding-left:40%;">
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                            <br><br>
                          </a>
                        </li>
                        <li >
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                      </ul>
              </div>
              <div class=" w3-animate-zoom col-md-9 ">
              <!-- Elemenst Area -->
              <br><br>
              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('feature1') }}" placeholder=" First Feature" name="feature1" type="text" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('feature2') }}" placeholder=" Second Feature" name="feature2" type="text" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('feature3') }}" placeholder=" Third Feature" name="feature3" type="text" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('feature4') }}" placeholder=" Fourth Feature" name="feature4" type="text" >
              </p>
              <br>

              <p>
                <textarea  class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large  w3-hover-green" name="warranty" rows="5" cols="80"  placeholder="warranty details"> Warranty Details 
                </textarea>
              </p>
              <br>

              <p>
                <textarea id="editor1" class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large  w3-hover-green" name="features" rows="10" cols="80" value="{{ Input::old('features') }}" placeholder="Enter the Features"> 
                </textarea>
              </p>
              <br>

              

              
              <br>
              <a href="#" class="w3-btn w3-large w3-card-24 w3-blue w3-hover-shadow"   onclick="openTab(event, 'First');"><</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="#" class="w3-btn w3-large w3-card-24 w3-blue w3-hover-shadow"   onclick="openTab(event, 'Third');">></a>
                <br>
                <br>
                </div>
            </div>
            <!-- Third Section -->
            <div id="Third" class="w3-container myTab" style="display:none;">
              <div class=" form_wizard wizard_verticle  col-md-3  ">
              <br><br>
              <ul class="list-unstyled wizard_steps w3-center" style="padding-left:40%;">
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                            <br><br>
                          </a>
                        </li>
                        <li >
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <span class="step_no">O</span>
                          </a>
                        </li>
                      </ul>
              </div>
              <div class=" w3-animate-zoom col-md-9 ">
              <!-- Elemenst Area -->
              <br><br>
              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('sku') }}" placeholder=" Stock Keeping Unit" name="sku" type="text" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('stock') }}" placeholder=" Stock count" name="stock" type="number" max="100" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('unit') }}" placeholder=" Unit Type (bundle/dozen/10 pieces etc)" name="unit" type="text" >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('mrp') }}" placeholder=" Maximum Retail Price" name="mrp" type="decimal"  >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('unit_price') }}" placeholder=" Base Price" name="unit_price" type="decimal"  >
              </p>
              <br>

              <p>
                <input class="w3-input w3-border-bottom w3-light-grey w3-border-teal w3-large w3-center w3-hover-green" value="{{ Input::old('discount') }}" placeholder=" Discount Percentage " name="discount" type="number"  >
              </p>
              <br>

              <p>
                <select class=" w3-hover-green  w3-select w3-center   w3-large w3-light-grey" name="warehouse" id="cat"  style="text-indent: 40%;">
                  <option value="" disabled selected hidden>Warehouse Location</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                  <option value="Daman and Diu">Daman and Diu</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Orissa">Orissa</option>
                  <option value="Pondicherry">Pondicherry</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttaranchal">Uttaranchal</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="West Bengal">West Bengal</option>
                  </select>
              </p>
              <br>


              <p><label class="w3-hover-green"> Cash On Delivery</label></p>
              <p>              
                <input class="w3-radio" type="radio" name="cod" value="1" checked>
                <label class="w3-validate">Yes</label>

                <input class="w3-radio" type="radio" name="cod" value="0">
                <label class="w3-validate">No</label>
              </p>
              <br>
                <p><label class="w3-hover-green"> Enable Tax</label></p>
              <p>              
                <input class="w3-radio" type="radio" name="tax_enabled" value="1" checked>
                <label class="w3-validate">Yes</label>

                <input class="w3-radio" type="radio" name="tax_enabled" value="0">
                <label class="w3-validate">No</label>
              </p>

              <br>
              <a href="#" class="w3-btn w3-large w3-card-24 w3-blue w3-hover-shadow"   onclick="openTab(event, 'Second');"><</a>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <button class="w3-btn w3-large w3-card-24 w3-green w3-hover-shadow"   >Add</button>
                <br>
                <br>
              </div>
            </div>
          </div>           


          </form>

            <br><br>
          <!-- Form Contents Ends here -->
        <!-- W3 Footer Starts here -->
        <div class="w3-container w3-teal">
          <br>
        </div>
        <!-- W3 Footer Ends here -->
      </div>
      <!-- W3 Main Card Ends here -->
    </div>
    <!-- W3 Main Container Ends here -->
    <br>
  </div>
</div>

<!-- /page content -->


@stop

@section('script')
@include('link.wizardscript')

@stop