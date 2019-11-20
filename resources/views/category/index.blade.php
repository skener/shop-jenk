
@extends('layouts.appmain')



@section('content')

<hr>

<div class="container">

    <!--content-->
<!---->
        <div class="product">
            <div class="container">
                <div class="col-md-3 product-price">


                <!--initiate accordion-->
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
<!---->
    <div class="product-middle">

                    <div class="fit-top">
                        <h6 class="shop-top">Lorem Ipsum</h6>
                        <a href="single.html" class="shop-now">SHOP NOW</a>
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

@foreach($showBestProducts as $best)

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
<!-- <div class=" per1">
                <a href="single.html" ><img class="img-responsive" src="{{asset('images/pro.jpg')}}" alt="">

            </div> -->
                </div>
                <div class="col-md-9 product1">
                <div class=" bottom-product row">

                    @foreach($showProducts as $product)
     <div class=" simpleCart_shelfItem col-sm-4 col-md-4 col-xs-12">
                        <div class="product-at product-height">
                            <a href="{{route('showselectedproduct',$product->id)}}"><img class="img-responsive" src="{{asset($product->image)}}" alt="">
                            <div class="pro-grid">
                                        <span class="buy-in">Buy Now</span>
                            </div>
                        </a>
                        </div>
                        <p class="tun">{{$product->title}}</p>


                        <a href="{{route('addtocart',$product->id)}}" id="{{$product->id}}" class="item_add"><p class="number item_price"><i> </i>{{$product->price}} $</p></a>
                        <br>
                    </div>


                    @endforeach
                    <br>





<!--
                    <div class="clearfix"> </div> -->
                </div>

                </div>
        <!-- <div class="clearfix"> </div> -->
        <div class="text-center">
<div class="pagination ">
    <br>
      <p>{{ $showProducts->links() }}</p>


</div>
</div>
        </div>

        </div>






    </div>











@endsection
