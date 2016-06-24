@extends('store.master')
@section('content')
		<!-- Cart view section -->


 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
          <div style="background:white;">
            @include('store.alert')              
          </div>
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Remove</th>
                        <th>Picture</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse($carts as $cart)
                      <tr>
                        <td><a class="remove" href="{{url('/')}}/shop/cart/remove/{{$cart->id}}" title="remove"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="{{asset('img/products/preview/'.$cart->image_url)}}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="{{url('/')}}/shop/products/{{$cart->inventory_id}}">{{$cart->title}}</a></td>
                        <td><label id="">{{$cart->price}}</label></td>
                        <td><input disabled id="itemcount" class="aa-cart-quantity" min="1" max="10" type="number" value="{{$cart->count}}"></td>
                        <td><label>{{$cart->base_total}}</label></td>
                      </tr> 
                      @empty
                      @endforelse
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Delivery Charge</th>
                     <td>{{$deliveryCharge}}</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>{{$total}}</td>
                   </tr>
                 </tbody>
               </table>
               @if($total != 0)
               <a href="{{url('')}}/shop/checkout" class="aa-cart-view-btn">Proced to Checkout</a>
               @endif
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
   <br><br>
 </section>
 

 <!-- / Cart view section -->


  
@stop