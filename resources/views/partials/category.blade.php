@extends('layouts.index')

@section('content')

<div class="title-wrapper">
    <div class="container">
        <div class="container-inner">
            <h1><span>NOS</span> Produits</h1>
        </div>
    </div>
</div>

<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Accueil</a></li>
            <li class="active">Catégorie: {{ $categories->name }}</li>
        </ul>

        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-5">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    @foreach ($allCategories as $category)

                    <li class="list-group-item clearfix">
                        <a href="{{ route('category.show', ['slug' => $category->slug]) }}">
                            <i class="fa fa-angle-right"></i> {{ $category->name }}
                        </a>
                    </li>

                    @endforeach

                </ul>
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-7">
                <div class="row product-list">
                    @if ($products->isEmpty())
                    <div class="col-md-12">
                        <p class="alert alert-warning text-center">
                            Aucun produit disponible pour la catégorie "{{ $categories->name }}"
                        </p>
                    </div>
                    @endif
                    @foreach ($products as $product)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item">
                            <div class="pi-img-wrapper">
                                <img src="{{ asset('/' . $product->image) }}" class="img-responsive" alt="{{ $product->name }}" style="height:264px;width:100%">
                                <div>
                                    <a href="{{ asset('/' . $product->image) }}" class="btn btn-default fancybox-button">Zoom</a>
                                    <a href="{{ route('shop.show', ['slug' => $product->slug]) }}" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                            </div>
                            <h3><a href="{{ route('shop.show', ['slug' => $product->slug]) }}">{{ $product->name }}</a></h3>
                            <div class="pi-price">{{ $product->price }} €</div>
                            <a href="" class="btn btn-default add2cart">Add to cart</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
</div>

@endsection