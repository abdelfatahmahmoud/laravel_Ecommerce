<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }

        .wishlisted{
            background-color: #F15412 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color: #fff !important;
        }

    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Articles
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div class="row">


                            @foreach($images as $image)
                                <div class="col-lg-10 col-md-10 col-10 col-sm-10">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <h3>{{$image->article->title}} </h3>
                                                    <img class="default-img" src="{{asset('assets/uploads/articles')}}/{{$image->image}}" alt="{{$image->title}}">
                                                    {{--                                                <img class="hover-img" src="{{asset('assets/imgs/shop/product-')}}{{$product->id}}-2.jpg" alt="{{$product->name}}">--}}
                                               <br>

                                            </div>


                                        </div>
                                        <div class="product-content-wrap">

                                            <p>{{$image->article->description}} </p>


                                            <div class="product-action-1 show">
{{--                                                @if($witems->contains($product->id))--}}
                                                    <a aria-label="remove from Wishlist" class="action-btn hover-up wishlisted" href="#" ><i class="fi-rs-heart"></i></a>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        <!--pagination-->
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

@push('scripts')
    <script>
        var sliderrange = $('#slider-range');
        var amountprice = $('#amount');
        $(function() {
            sliderrange.slider({
                range: true,
                min: 0,
                max: 1000,
                values: [0, 1000],
                slide: function(event, ui) {
                {{--    amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);--}}
                    @this.set('main_value',ui.values[0]);
                @this.set('max_value',ui.values[1]);
                }
            });
        });

    </script>
@endpush
