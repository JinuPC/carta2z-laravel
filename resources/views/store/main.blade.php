@extends('store.master')
@section('content')

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


  

@stop