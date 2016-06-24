@extends('store.master')
@section('content')
@include('store.alert')

	<!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('store/img/slider/slider1.jpg')}}" alt="Men slide img" />
              </div>
              <div style="" class="seq-title">
               <span data-seq>New Levis Jeans Bulk packages</span>                
                <h2 data-seq>Levis Jeans</h2>                
                <p data-seq>New whole package arrived...</p>
                <a data-seq href="" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('store/img/slider/slider2.jpg')}}" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>New Rajasthani Collection</span>                
                <h2 data-seq>Embroidery Sarees</h2>                
                <p data-seq>Hand embroidered design sarees from Rajastan Sarees Center.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('store/img/slider/slider3.jpg')}}" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>New Men Collections Arrived</span>                
                <h2 data-seq>Men Collection</h2>                
                <p data-seq>New Collections with Western Brands.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('store/img/slider/slider4.jpg')}}" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                             
                <h2 data-seq>Watch Collections</h2>                
                
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{asset('store/img/slider/slider5.jpg')}}" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <h2 data-seq>More Fashion accessiores</h2> 
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->

  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{asset('store\img\promo-banner\sarees.jpg')}}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>25% Off</span>
                      <h4><a href="#">Silks Sarees</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('store\img\promo-banner\shirts.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Items</span>
                        <h4><a href="#">Men Shirts</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('store\img\promo-banner\kurtis.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="#">On Kurtis</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('store\img\promo-banner\watches.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="#">In Mens Watches</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('store\img\promo-banner\shoes.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="#">For Bags</a></h4>                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo section -->





  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                    <li><a href="#women" data-toggle="tab">Women</a></li>
                    <!-- <li><a href="#sports" data-toggle="tab">Sports</a></li>
                    <li><a href="#electronics" data-toggle="tab">Electronics</a></li> -->
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach($mens as $men)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('img/products/preview/'.$men->products->images->image_url)}}" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn" href="{{url('/')}}/shop/cart/add/{{$men->id}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="{{url('/')}}/shop/products/{{$men->id}}">{{$men->products->title}}</a></h4>
                              <span class="aa-product-price">{{$men->unit_price}}</span><span class="aa-product-price"><del>{{$men->mrp}}</del></span><br>
                              <span class="aa-product-price">{{$men->products->unit}}</span>

                            </figcaption>
                          </figure> 
                        </li>
                        @endforeach                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->
                    <!-- start women product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach($mens as $men)

                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('img/products/preview/'.$men->products->images->image_url)}}" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">Women T shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure> 
                        </li>
                        @endforeach                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->
                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @for($i=0;$i<8;$i++)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('img\products\preview\2016-06-22-10-13slider3.jpg')}}" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">Sports T shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure> 
                        </li>
                        @endfor                        
                      </ul>
                    </div>
                    <!-- / sports product category -->
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @for($i=0;$i<4;$i++)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="#"><img src="{{asset('img\products\preview\2016-06-22-10-13slider3.jpg')}}" alt="polo shirt img"></a>
                            <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <figcaption>
                              <h4 class="aa-product-title"><a href="#">polo t shirt</a></h4>
                              <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                            </figcaption>
                          </figure> 
                        </li>
                        @endfor                        
                      </ul>
                      <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / electronic product category -->
                  </div>
                        
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->


  

@stop