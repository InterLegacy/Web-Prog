@extends('themes.projectfitwalk.layouts.app')
@include('themes.projectfitwalk.shared.slider')
@section('content')

<!-- Popular -->
<section class="popular">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <h1>Popular</h1>
      </div>
      <div class="col-6 text-end">
        <a href="#" class="btn-first">View All</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-3 col-6">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/adidascampus.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">SNEAKERS ADIDAS CAMPUS 2.0 SPORT SHOE</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 1.350.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/archfitdeluxe.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">SKECHERS ARCH FIT D'LUX FITNESS SLIP ON SHOES</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 1.110.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6 mt-3 mt-lg-0">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/nikeairmax.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">Nike Air Max 97 “Silver Bullet” 87 DM0028-002</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 1.550.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6 mt-3 mt-lg-0">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/newbalance.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">New Balance Men's Made in USA 990v6</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 3.300.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest -->
<section class="latest">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-6">
        <h1>Latest</h1>
      </div>
      <div class="col-6 text-end">
        <a href="#" class="btn-first">View All</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-3 col-6">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/airjordants.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">AIR JORDAN 1 RETRO LOW OG X TRAVIS SCOTT 'REVERSE MOCHA'</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 3.699.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/airjordanrt.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">Air Jordan Retro OG</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 3.500.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6 mt-3 mt-lg-0">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/airjordan6.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">Air Jordan 6 'University Blue'</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 3.899.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6 mt-3 mt-lg-0">
        <div class="card card-body p-lg-4 p3">
          <a href="#"><img src="{{ asset('themes/projectfitwalk/assets/img/adidassamba.jpg') }}" alt="" class="img-fluid"></a>
          <h3 class="product-name mt-3">Adidas Samba OG White</h3>
          <div class="rating">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
          </div>
          <div class="detail d-flex justify-content-between align-items-center mt-4">
              <p class="price">IDR 1.750.000</p>
              <a href="#" class="btn-cart"><i class="bx bx-cart-alt"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Subscribe  -->
<section class="subscribe">
  <div class="container">
    <div class="subscribe-wrapper">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-7 col-10 col-sub">
          <h1>Subscribe to get latest updates!</h1>
          <form action="#" class="mt-5">
            <div class="input-group w-100">
              <input type="email" class="form-control" placeholder="Type your email ..">
              <button class="btn btn-outline-warning">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection