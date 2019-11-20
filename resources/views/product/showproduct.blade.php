@extends('layouts.appmain')


@section('content')



<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
				</div>


				<div class="clearfix"> </div>
		</div>
		</div>

	</div>


<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">

				<!--initiate accordion-->

<!---->
	<div class="product-middle">

					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
						<a href="#" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>

										<div class="clearfix"> </div>
									</ul>

								</div>

		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
				@foreach($productsBest as $best)

                    <div class="product-go">
                        <div class=" fashion-grid">
                                    <a href="{{route('showselectedproduct', $best->id)}}"><img class="img-responsive " src="{{asset($best->image)}}" alt=""></a>

                                </div>
                            <div class=" fashion-grid1">
                                <h6 class="best2"><a href="single.html" >{{$best->title}}</a></h6>

                                <span class=" price-in1"> ${{$best->price}}</span>
                            </div>

                            <div class="clearfix"> </div>
                            </div>
                            @endforeach


				</div>
				<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });

			});
		</script>
<div class=" per1">
				<a href="#" ><img class="img-responsive" src="images/pro.jpg" alt="">

			</div>
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">
			<div class="flexslider">
  <ul class="slides">
    <li data-thumb="{{asset($product->image)}}">
      <img src="{{asset($product->image)}}">
    </li>
    <li data-thumb="{{asset($product->image)}}">
      <img src="{{asset($product->image)}}">
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

<script>

$(document).ready(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails",
  });
});
</script>
					</div>
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>{{$product->title}}</h4>
							<div class="star-on">
								<ul class="star-footer">
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
									</ul>
								<div class="review">
									<a href="#"> 1 customer review </a>

								</div>
							<div class="clearfix"> </div>
							</div>
						<p>dssvsdv</p>
							<h5 class="item_price">{{$product->price}} $</h5>
							<p>{{$product->description}}</p>



								<a href="{{route('addtocart',$product->id)}}" class="add-cart item_add">ADD TO CART</a>

						</div>
						<br>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Description </a></li>
					<li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
					<li><a data-content="television" href="#0" class="selected ">Reviews ({{$countComments}})</a></li>

				</ul>
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
									  <p > {{$product->description}}</p>
										<ul>
											<li>Research</li>
											<li>Design and Development</li>
											<li>Porting and Optimization</li>
											<li>System integration</li>
											<li>Verification, Validation and Testing</li>
											<li>Maintenance and Support</li>
										</ul>
							        </div>

</li>
<li data-content="cinema" >
		<div class="facts1">

						<div class="color"><p>Color</p>
							<span >Blue, Black, Red</span>
							<div class="clearfix"></div>
						</div>
						<div class="color">
							<p>Size</p>
							<span >S, M, L, XL</span>
							<div class="clearfix"></div>
						</div>

			 </div>

</li>
<li data-content="television" class="selected">
	<div class="comments-top-top">
				<div class="top-comment-left">
					<img class="img-responsive" src="images/co.png" alt="">
				</div>
				<div class="top-comment-right">


						@foreach($commentsProduct as $comment)
						<h6>{{$comment->user->name}}  At {{$comment->created_at}}</h6>
						<br>
						<hr>
						<ul class="star-footer">



										<!-- <li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li>
										<li><a href="#"><i> </i></a></li> -->

									</ul>
										<h5>{{$comment->body}}</h5>

									@endforeach
				</div>
				<div class="clearfix"> </div>
				@if(Auth::user())
						<div class="card">

												<div class="card-block">

													<form action="{{route('createcomment',$product->id)}}" method="POST">
														 {{ csrf_field() }}



														<div class="form-group">
															<textarea name="body" cols="30" class="form-control" rows="10" placeholder="YOUR Comments here"></textarea>

														</div>
														  <div class="form-group">
														  	<span class="rating">
												    <input type="radio" class="rating-input"
												           id="rating-input-1-5" name="rating-input-1" value="5">
												    <label for="rating-input-1-5" class="rating-star" ></label>
												    <input type="radio" class="rating-input"
												           id="rating-input-1-4" name="rating-input-1" value="4">
												    <label for="rating-input-1-4" class="rating-star"></label>
												    <input type="radio" class="rating-input"
												           id="rating-input-1-3" name="rating-input-1" value="3">
												    <label for="rating-input-1-3" class="rating-star"></label>
												    <input type="radio" class="rating-input"
												           id="rating-input-1-2" name="rating-input-1" value="2">
												    <label for="rating-input-1-2" class="rating-star"></label>
												    <input type="radio" class="rating-input"
												           id="rating-input-1-1" name="rating-input-1" value="1">
												    <label for="rating-input-1-1" class="rating-star"></label>
												</span>
														  </div>


										<!-- 	<div class="wrapernew">
															<input type="radio" id="r1" name="rg1" value="1">
															  <label for="r1">&#10038;</label>
															  <input type="radio" id="r2" name="rg1" value="2">
															  <label for="r2">&#10038;</label>
															  <input type="radio" id="r3" name="rg1" value="3">
															  <label for="r3">&#10038;</label>
															  <input type="radio" id="r4" name="rg1" value="4">
															  <label for="r4">&#10038;</label>
															  <input type="radio" id="r5" name="rg1" value="5">
															  <label for="r5">&#10038;</label>



														</div> -->
														<!-- 	<div class="form-group">
																<p>Your vote </p>
															<label class="radio-inline">
														     <input type="radio" name="vote" value="1">1
														    </label>
														    <label class="radio-inline">
														      <input type="radio" name="vote" value="2">2
														    </label>
														    <label class="radio-inline">
														      <input type="radio" name="vote" value="3">3
														    </label>
														     <label class="radio-inline">
														      <input type="radio" name="vote" value="4">4
														    </label>
														     <label class="radio-inline">
														      <input type="radio" name="vote" value="5">5
														    </label>
														</div> -->
														<div class="form-group">
															<button type="submit" class="btn btn-danger">SAVE</button>
														</div>
													</form>

												</div>



										</div>


										@else
										<br>
										<hr>
										<h4 class="text-warning" >
											<a href="{{ route('login') }}">Sign in</a> to live your comment
										</h4>
										<br>
										<hr>


										@endif
			</div>

</li>
<div class="clearfix"></div>
	</ul>
</div>
		<div class=" bottom-product">

			<h3> Your Recent Views Products :</h3>
			<br>
			<hr>
			@foreach($productsVisited as $best)
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">

						<div class="product-at ">
							<a href="{{route('showselectedproduct', $best->id)}}"><img class="img-responsive" src="{{asset($best->image)}}" alt="">
							<div class="pro-grid">
										<span class="buy-in">Buy Now</span>
							</div>
						</a>
						</div>
						<p class="tun">{{$best->description}}</p>
						<a href="{{route('addtocart',$best->id)}}" class="item_add"><p class="number item_price"><i> </i>{{$best->price}}</p></a>
					</div>

					@endforeach


					<div class="clearfix"> </div>
				</div>
</div>

		<div class="clearfix"> </div>
		</div>
		</div>





@endsection
@section('script')
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
@endsection
