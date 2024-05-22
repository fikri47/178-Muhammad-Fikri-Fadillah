@extends('layout.main-homepage')


@section('content')
    <!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Furnishing with style</p>
							<h1>High Quality Furniture</h1>
							<div class="hero-btns">
								<a href="#product-us" class="boxed-btn">Furniture Collection</a>
								<a href="#contact-us" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->	

		<!-- shop banner -->
		<section class="shop-banner" id="contact-us">
			<div class="container">
				<h3>Mohon untuk dibaca <span class="green-text">Pemesanan...</span></h3>
				<div class="sale-percent"><span>Bisa Melalui<br></span>WA</div>
				<a href="shop.html" class="cart-btn btn-lg">Pesan Sekarang!</a>
			</div>
		</section>
		<!-- end shop banner -->	

	<!-- product section -->
	<div class="product-section mt-150 mb-150" id="product-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
               
            <div class="row">                
                @forelse ($produk as $key=>$value)            
                <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/produk/{{$value->id}}"><img src="{{asset('produk_gambar/'. $value->gambar)}}" alt=""></a>
						</div>
						<h3>{{$value->nama}}</h3>
						<p class="product-price"><span>Est. {{$value->estimasi}} Hari</span></p>
                        <p class="product-price"><span>RP. {{number_format($value->harga)}}</span></p>
						<a href="/produk/{{$value->id}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> More Detail</a>
					</div>
				</div>				
                @empty
                <h3>No Product</h3>
                @endforelse			
			</div>
		</div>
	</div>
	<!-- end product section -->	
@endsection