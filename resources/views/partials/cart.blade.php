@extends('layouts.index')

@section('content')

<div class="main">
    <div class="container">
        <div class="row margin-bottom-40">
            <div class="col-md-12 col-sm-12">
                <h1>Panier</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <div class="table-wrapper-responsive">
                            <table summary="Shopping cart">
                                <tr>
                                    <th class="goods-page-image">Image</th>
                                    <th class="goods-page-description">Description</th>
                                    <th class="goods-page-ref-no">Ref No</th>
                                    <th class="goods-page-quantity">Quantité</th>
                                    <th class="goods-page-price">Prix Unitaire</th>
                                    <th class="goods-page-total" colspan="2">Total</th>
                                </tr>

                                @forelse($cart as $item)
                                <tr>
                                    <td class="goods-page-image">
                                        <a href="#"><img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}"></a>
                                    </td>
                                    <td class="goods-page-description">
                                        <h3><a href="#">{{ $item['name'] }}</a></h3>
                                        <p><strong>Référence : </strong> </p>
                                    </td>
                                    <td class="goods-page-ref-no"></td>
                                   
                                    <td class="goods-page-quantity">
                                        <div class="product-quantity">
                                            <button class="btn btn-sm btn-outline-secondary decrease-quantity" data-id="{{ $item['id'] }}">-</button>
                                            <input type="text" value="{{ $item['quantity'] }}" readonly class="form-control input-sm text-center quantity-input" data-id="{{ $item['id'] }}">
                                            <button class="btn btn-sm btn-outline-secondary increase-quantity" data-id="{{ $item['id'] }}">+</button>
                                        </div>
                                    </td>
                                    


                                    <td class="goods-page-price">
                                        <strong><span>$</span>{{ number_format($item['price'], 2) }}</strong>
                                    </td>
                                    <td class="goods-page-total">
                                        <strong><span>$</span>{{ number_format($item['quantity'] * $item['price'], 2) }}</strong>
                                    </td>
                                    <td class="del-goods-col">
                                        <a class="del-goods" href="">&times;</a>
                                    </td>

                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Votre panier est vide.</td>
                                </tr>
                                @endforelse
                            </table>
                        </div>

                        <div class="shopping-total">
                            <ul>
                                <li>
                                    <em>Sous-total</em>
                                    <strong class="price"><span>$</span>{{ number_format(collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']), 2) }}</strong>
                                </li>
                                <li>
                                    <em>Frais de livraison</em>
                                    <strong class="price"><span>$</span>3.00</strong>
                                </li>
                                <li class="shopping-total-price">
                                    <em>Total</em>
                                    <strong class="price"><span>$</span>{{ number_format(collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']) + 3, 2) }}</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-default">Continuer vos achats <i class="fa fa-shopping-cart"></i></a>
                    <a href="" class="btn btn-primary">Passer la commande <i class="fa fa-check"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection