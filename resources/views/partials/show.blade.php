@extends('layouts.index')

@section('content')
<div class="main">
    <div class="container">
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-7">
                <div class="product-page">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="product-main-image">
                                <img src="{{ asset('/' . $product->image) }}" alt="{{ $product->name }}" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h1>{{ $product->name }}</h1>
                            <div class="price-availability-block clearfix">
                                <div class="price">
                                    <strong><span>€</span>{{ $product->price }}</strong>
                                </div>
                            </div>
                            <div class="description">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="product-page-cart">
                                <div class="product-quantity">
                                    <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm text-center">
                                </div>
                                <a href="" class="btn btn-default add2cart" data-id="{{ $product->id }}">Ajouter au panier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection