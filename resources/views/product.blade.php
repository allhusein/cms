@extends('layouts.masterLayout')

@section('content')
<div class="ourproduct">
  <div class="container">
     <div class="row product_style_3" >
      <!-- product -->
      @foreach($posts as $p)
     
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
     
        <div class="product_img">
            <div class="center"> <img src="{{ $p -> image }}" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">{{ $p -> price }} <span class="old_price">$679.89</span></p>
            <p class="product_descr">{{ $p -> name }}</p>
          </div>
  
          
        </div>
      </div>
      @endforeach
      <!-- end product -->
      <!-- product -->
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="icon/p2.png" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
            <p class="product_descr">Lightweight Down Puffer Coat</p>
          </div>
        </div>
      </div>
      <!-- end product -->
      <!-- product -->
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="icon/p3.png" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
            <p class="product_descr">Lightweight Down Puffer Coat</p>
          </div>
        </div>
      </div> -->
      <!-- end product -->
      <!-- product -->
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="icon/p4.png" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
            <p class="product_descr">Lightweight Down Puffer Coat</p>
          </div>
        </div>
      </div> -->
      <!-- end product -->
      <!-- product -->
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="icon/p1.png" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
            <p class="product_descr">Lightweight Down Puffer Coat</p>
          </div>
        </div>
      </div> -->
      <!-- end product -->
      <!-- product -->
      <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="full product">
          <div class="product_img">
            <div class="center"> <img src="icon/p2.png" alt="#"/>
              <div class="overlay_hover"> <a class="add-bt" href="product_detail3.html">+ Add to cart</a> </div>
            </div>
          </div>
          <div class="product_detail text_align_center">
            <p class="product_price">$679.89 <span class="old_price">$679.89</span></p>
            <p class="product_descr">Lightweight Down Puffer Coat</p>
          </div>
        </div>
      </div> -->
      <!-- end product -->
    </div>
  </div>
</div>


@endsection