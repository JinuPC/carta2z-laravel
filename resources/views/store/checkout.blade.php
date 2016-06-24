@extends('store.master')
@section ('content')
<!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="{{url('/')}}/shop/checkout/{{$user->user_id}}" method="post">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    
                    
                    
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Shippping Address
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">

                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="firstname" value="{{isset($user->firstname)?$user->firstname:""}}" placeholder="First Name*" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="lastname" value="{{$user->lastname}}" placeholder="Last Name*" required>
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="company" value="{{$user->company}}" placeholder="Company name" required>
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" value="{{$user->email}}"  name="email" placeholder="Email Address*" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" name="phone_no" value="{{$user->phone_no}}" placeholder="Phone*" required>
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text"  name="landmark" value="{{$user->landmark}}" placeholder="Landmark" required>
                              </div>                             
                            </div>                            
                          </div>   
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" value="{{$user->street}}" placeholder="Street" name="street" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" value="{{$user->city}}" placeholder="City / Town*" name="city" required>
                              </div>
                            </div>
                          </div>   
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" value="{{$user->district}}" name="district" placeholder="District*" required>
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="number" name="postcode" min="111111" max="999999" value="{{$user->postcode}}" placeholder="Postcode " required>
                                <input type="hidden" value="{{$user->id}}" name="id">
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select style="color:black;" name="state" required>
                                @if($user->state)
                                <option selected  value="{{$user->state}}">{{$user->state}}</option>
                                @else
                                  <option selected value="" disabled  hidden>Select State</option>
                                  @endif
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
                                </select>
                              </div>                             
                            </div>                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($carts as $cart)
                        <tr>
                          <td>{{$cart->title}} <strong> x  {{$cart->count}}</strong></td>
                          <td>{{$cart->base_total}}</td>
                        </tr>
                        @endforeach                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Delivery Charges</th>
                          <td>{{$deliveryCharge}}</td>
                        </tr>                         
                         <tr>
                          <th>Total</th>
                          <td>{{$total}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input checked type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                    <label for="paypal"><input disabled type="radio" id="paypal" name="optionsRadios" > Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" value="Place Order" class="aa-browse-btn"> 
                          
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
@stop