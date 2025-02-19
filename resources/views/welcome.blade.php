@extends('layouts.index')

@section('content')

<div class="page-slider margin-bottom-35">
    <div id="carousel-example-generic" class="carousel slide carousel-slider">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="item carousel-item-four active">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            Boutique <br /><span class="color-red-v2">de produit </span><br /> africain
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">Utiliser nos produits spirituels pour <br />
                            booster votre vie sans consulter un expert spirituel.</p>
                    </div>
                </div>
            </div>

            <!-- Second slide -->
            <div class="item carousel-item-five">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                            Coutumes
                        </h2>
                        <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">

                        </p>
                        <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                            Esotérique en ligne


                        </p>
                        <a class="carousel-btn" href="{{route('product_list')}}" data-animation="animated fadeInUp">Voir plus de détails</a>
                    </div>
                </div>
            </div>

            <!-- Third slide -->
            <div class="item carousel-item-six">
                <div class="container">
                    <div class="carousel-position-four text-center">
                        <span class="carousel-subtitle-v3 margin-bottom-15" data-animation="animated fadeInDown">
                            Encens Oliban
                        </span>

                        <p class="carousel-subtitle-v3" data-animation="animated fadeInDown">
                            cette résine millénaire
                        </p>
                    </div>
                </div>
            </div>

            <!-- Fourth slide -->
            <div class="item carousel-item-seven">
                <div class="center-block">
                    <div class="center-block-wrap">
                        <div class="center-block-body">
                            <h4 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                Huile <br />
                                essentielle d'encens
                            </h4>
                            <a class="carousel-btn" href="{{route('product_list')}}" data-animation="animated fadeInUp">Mais c'est maintenant !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>
<div class="container">
    <div class="row">
        <h1 class="text-center">BIENVENUE SUR NOTRE BOUTIQUE </h1>
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <p>
                Vous êtes passionnés par le monde de la magie, du bien-être, du chamanisme ou par les arts divinatoires, venez découvrir notre sélection de produits et accessoires pour vos pratiques spirituelles dans notre boutique ésotérique. Commandez dès maintenant et vous serez livrer partout dans le monde
            </p>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<div class="main">
    <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row product-list">
            <h2> Nos ventes</h2>
            @foreach ($products as $product)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item">
                    <div class="pi-img-wrapper">
                        <img src="{{ asset('/' . $product->image) }}" class="img-responsive" alt="{{ $product->name }}" style="height:264px;width:100%">
                        <div>
                            <a href="{{ asset('/' . $product->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                            <a href="{{ route('shop.show', ['slug' => $product->slug]) }}" class="btn btn-default fancybox-fast-view">Voir</a>

                        </div>
                    </div>
                    <h3><a href="">{{ $product->name }}</a></h3>
                    <div class="pi-price">{{ $product->price }} <span class="currency-symbol"></span></div>
                    <a href="" class="btn btn-default add2cart" data-id="{{ $product->id }}">Ajouter au panier</a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row product-list">
            <div class="sidebar col-md-3 col-sm-4">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    @foreach ($categories as $category)
                    <li class="list-group-item clearfix">
                        <a href="{{ route('category.show', ['slug' => $category->slug]) }}">
                            <i class="fa fa-angle-right"></i> {{ $category->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 col-sm-8">
                <h2>Three items</h2>
                @foreach ($products as $product)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-item">
                        <div class="pi-img-wrapper">
                            <img src="{{ asset('/' . $product->image) }}" class="img-responsive" alt="{{ $product->name }}" style="height:264px;width:100%">
                            <div>
                                <a href="{{ asset('/' . $product->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                                <a href="{{ route('shop.show', ['slug' => $product->slug]) }}" class="btn btn-default fancybox-fast-view">Voir</a>

                            </div>
                        </div>
                        <h3><a href="">{{ $product->name }}</a></h3>
                        <div class="pi-price">{{ $product->price }} <span class="currency-symbol"></span></div>
                        <a href="" class="btn btn-default add2cart" data-id="{{ $product->id }}">Ajouter au panier</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">

            <div class="col-md-12 shop-index-carousel">
                <div class="content-slider">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="assets/pages/img/2.jpg" style="width: 100%;" class="img-responsive" alt="Berry Lace Dress">
                            </div>
                            <div class="item">
                                <img src="assets/pages/img/3.jpg" style="width: 100%;" class="img-responsive" alt="Berry Lace Dress">
                            </div>
                            <div class="item">
                                <img src="assets/pages/img/5.jpg" style="width: 100%;" class="img-responsive" alt="Berry Lace Dress">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TWO PRODUCTS & PROMO -->
    </div>
</div>

<div class="brands">
    <div class="container">
        <div class="owl-carousel owl-carousel6-brands">
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/canon.jpg" alt="canon" title="canon"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/esprit.jpg" alt="esprit" title="esprit"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/gap.jpg" alt="gap" title="gap"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/next.jpg" alt="next" title="next"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/puma.jpg" alt="puma" title="puma"></a>
            <a href="shop-product-list.html"><img src="/assets/pages/img/brands/zara.jpg" alt="zara" title="zara"></a>
        </div>
    </div>
</div>
<div class="steps-block steps-block-red">
    <div class="container">
        <div class="row">
            <div class="col-md-4 steps-block-col d-flex justify-content-center align-items-center">
                <i class="fa fa-truck"></i>
            </div>
            <div class="col-md-4 steps-block-col d-flex justify-content-center align-items-center">
                <i class="fa fa-gift"></i>
            </div>
            <div class="col-md-4 steps-block-col d-flex justify-content-center align-items-center">
                <i class="fa fa-phone"></i>
            </div>
        </div>
    </div>
</div>



@endsection