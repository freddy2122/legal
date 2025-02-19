<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eso-Ayissogbe | Boutique de Produits Spirituels Africains</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Méta SEO -->
    <meta name="description" content="Découvrez Eso-Ayissogbe, votre boutique spécialisée dans la vente de produits spirituels africains : encens, talismans, statuettes et bien plus pour votre bien-être spirituel.">
    <meta name="keywords" content="produits spirituels africains, ésotérisme, encens africain, talisman, magie africaine, spiritualité, protection spirituelle">
    <meta name="author" content="Eso-Ayissogbe">

    <!-- Balises Open Graph (OG) pour le partage sur Facebook, WhatsApp, etc. -->
    <meta property="og:site_name" content="Eso-Ayissogbe">
    <meta property="og:title" content="Eso-Ayissogbe | Boutique de Produits Spirituels Africains">
    <meta property="og:description" content="Découvrez notre sélection de produits spirituels africains : encens, talismans, statuettes et objets de protection spirituelle.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.eso-ayissogbe.com/images/ee.png"> <!-- Mets un vrai lien d'image -->
    <meta property="og:url" content="https://www.eso-ayissogbe.com"> <!-- Mets l'URL de ton site -->

    <!-- Balises Twitter Card pour un meilleur affichage sur Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Eso-Ayissogbe | Boutique de Produits Spirituels Africains">
    <meta name="twitter:description" content="Découvrez notre sélection de produits spirituels africains pour la protection, la purification et le bien-être.">
    <meta name="twitter:image" content="https://www.eso-ayissogbe.com/images/ee.png">

    <!-- Balise Canonical pour éviter le contenu dupliqué -->
    <link rel="canonical" href="https://www.eso-ayissogbe.com">

    <!-- Favicon pour tous les navigateurs -->
    <link rel="icon" type="image/png" sizes="32x32" href="/images/ee.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/ee.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Favicon pour Apple (iOS) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/ee.png">

    <!-- Favicon pour Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="/images/ee.png">

    <!-- Manifest pour Android -->
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts START -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="/assets/pages/css/animate.css" rel="stylesheet">
    <link href="/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="/assets/pages/css/components.css" rel="stylesheet">
    <link href="/assets/pages/css/slider.css" rel="stylesheet">
    <link href="/assets/pages/css/style-shop.css" rel="stylesheet">
    <link href="/assets/corporate/css/style.css" rel="stylesheet">
    <link href="/assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="/assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>

<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
                <li class="color-red current color-default" data-style="red"></li>
                <li class="color-blue" data-style="blue"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
                <li class="color-gray" data-style="gray"></li>
                <li class="color-turquoise" data-style="turquoise"></li>
            </ul>
        </div>
    </div>
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <!-- BEGIN CURRENCIES -->
                        <li class="shop-currencies">
                            <a href="javascript:void(0);" class="currency-item">
                                <img src="" class="currency-flag" alt="Flag" width="20">
                                <span class="currency-symbol">$</span>
                            </a>
                        </li>
                        <!-- END CURRENCIES -->
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper">
                                <div class="langs-block-others">
                                    <a href="javascript:void(0);">French</a>
                                </div>
                            </div>
                        </li>
                        <!-- END LANGS -->
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <!-- <li><a href="shop-wishlist.html">My Wishlist</a></li> -->
                        @if (Route::has('login'))
                        @auth
                        <li><a href="{{route('dashboard')}}">Mon compte</a></li>
                        @else
                        <li><a href="{{route('login')}}">Se connecter</a></li>
                        @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <a class="site-logo list-style-none" href="/"><span style="color: #e6400c;">Eso</span> AYISSOGBE <img src="/images/ee.png" height="36px" alt="Metronic Shop UI"></a>

            <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

            <!-- BEGIN CART -->
            <div class="top-cart-block">
                <div class="top-cart-info">
                    <a href="javascript:void(0);" class="top-cart-info-count">
                        <span id="cart-count">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                    </a>
                    <a href="javascript:void(0);" class="top-cart-info-value" id="cart-total">
                        {{ session('cart') ? array_sum(array_column(session('cart'), 'price')) : 0 }} <span class="currency-symbol"></span>
                    </a>
                </div>
                <i class="fa fa-shopping-cart"></i>
                <div class="top-cart-content-wrapper">
                    <div class="top-cart-content">
                        <ul class="scroller" style="height: 250px;">
                            @if(session('cart'))
                            @foreach(session('cart') as $id => $item)
                            <li>
                                <a href="{{ route('shop.show', ['slug' => $id]) }}"><img src="{{ asset('/' . $item['image']) }}" alt="{{ $item['name'] }}" width="37" height="34"></a>
                                <span class="cart-content-count">x {{ $item['quantity'] }}</span>
                                <strong><a href="{{ route('shop.show', ['slug' => $id]) }}">{{ $item['name'] }}</a></strong>
                                <em>{{ $item['price'] }} €</em>
                                <button class="del-goods" data-id="{{ $id }}">&nbsp;</button>
                            </li>
                            @endforeach
                            @else
                            <li>Aucun produit dans le panier</li>
                            @endif
                        </ul>
                        <div class="text-right">
                            <a href="{{ route('cart.show') }}" class="btn btn-default">Voir le panier</a>
                            <a href="shop-checkout.html" class="btn btn-primary">Commander</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-navigation">
                <ul>
                    <li>
                        <a href="/">
                            Accueil

                        </a>
                    </li>
                    <li>
                        <a href="{{route('product_list')}}">
                            Nos produits

                        </a>
                    </li>
                    <li><a href="{{route('about')}}">Qui sommes-nous?</a></li>
                    <li>
                        <a href="{{route('contact')}}">
                            Contact

                        </a>
                    </li>

                    <li class="menu-search">
                        <span class="sep"></span>
                        <i class="fa fa-search search-btn"></i>
                        <div class="search-box">
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Rechercher un produit..." class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">Rechercher</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- END TOP SEARCH -->
                </ul>
            </div>
            <!-- END NAVIGATION -->
        </div>
    </div>
    <main>
        @yield('content')
    </main>

    <div class="pre-footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN BOTTOM ABOUT BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>A propos de nous</h2>
                    <p>Bienvenue sur le site de Eso-Ayissogbe ! Nous sommes ravis de vous présenter notre boutique en ligne spécialisée dans la vente de produits africains et spirituels. Que vous soyez passionné par la culture africaine ou à la recherche de produits spirituels pour apporter plus d’harmonie et de bien-être dans votre vie, vous êtes au bon endroit. </p>
                </div>
                <!-- END BOTTOM ABOUT BLOCK -->
                <!-- BEGIN BOTTOM INFO BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Liens rapides</h2>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right"></i> <a href="/">Accueil</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{route('contact')}}">Contact</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{route('product_list')}}">Nos produits</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="{{route('about')}}">Qui nous sommes</a></li>
                    </ul>
                </div>
                <!-- END INFO BLOCK -->

                <!-- BEGIN TWITTER BLOCK -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2 class="margin-bottom-0"> Dernieres nouvelles</h2>
                    <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
                </div>
                <!-- END TWITTER BLOCK -->

                <!-- BEGIN BOTTOM CONTACTS -->
                <div class="col-md-3 col-sm-6 pre-footer-col">
                    <h2>Nos Contacts</h2>
                    <address class="margin-bottom-40">
                        35, Lorem Lis Street, Park Ave<br>
                        California, US<br>
                        Phone: 300 323 3456<br>
                        Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
                    </address>
                </div>
                <!-- END BOTTOM CONTACTS -->
            </div>
            <hr>
            <div class="row">
                <!-- BEGIN SOCIAL ICONS -->
                <div class="col-md-6 col-sm-6">
                    <ul class="social-icons">
                        <li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
                        <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                        <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                        <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                        <li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
                        <li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
                        <li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
                        <li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
                    </ul>
                </div>
                <!-- END SOCIAL ICONS -->
                <!-- BEGIN NEWLETTER -->
                <div class="col-md-6 col-sm-6">
                    <div class="pre-footer-subscribe-box pull-right">
                        <h2>Newsletter</h2>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" placeholder="youremail@mail.com" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Souscrire</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END NEWLETTER -->
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- BEGIN COPYRIGHT -->
                <div class="col-md-4 col-sm-4 padding-top-10">
                    2015 © Eso-Ayissogbe. Tout droits reserves.
                </div>
                <!-- END COPYRIGHT -->
                <!-- BEGIN PAYMENTS -->
                <div class="col-md-4 col-sm-4">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><img src="assets/corporate/img/payments/western-union.jpg" alt="We accept Western Union" title="We accept Western Union"></li>
                        <li><img src="assets/corporate/img/payments/american-express.jpg" alt="We accept American Express" title="We accept American Express"></li>
                        <li><img src="assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
                        <li><img src="assets/corporate/img/payments/PayPal.jpg" alt="We accept PayPal" title="We accept PayPal"></li>
                        <li><img src="assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4 text-right">
                    <p class="powered">Construit par: <a href="https://eso-ayissogbe.com/">eso-ayissogbe.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".add2cart").click(function(e) {
                e.preventDefault();
                var productId = $(this).data("id");

                $.ajax({
                    url: "{{ route('cart.add') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId
                    },
                    success: function(response) {
                        console.log("Produit ajouté :", response.product); // Afficher le produit ajouté
                        console.log("Contenu du panier :", response.cart); // Afficher tout le panier
                        $("#cart-count").text(response.cart_count);
                    }
                });
            });

            $(".del-goods").click(function(e) {
                e.preventDefault();
                var productId = $(this).data("id");

                $.ajax({
                    url: "{{ route('cart.remove') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId
                    },
                    success: function(response) {
                        alert(response.success);
                        console.log("Produit supprimé :", response.product); // Produit supprimé
                        console.log("Nouveau panier :", response.cart); // Panier mis à jour
                        $("#cart-count").text(response.cart_count);
                        location.reload();
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Augmenter la quantité
            $(".increase-quantity").click(function() {
                var productId = $(this).data("id");
                updateCartQuantity(productId, "increase");
            });

            // Diminuer la quantité
            $(".decrease-quantity").click(function() {
                var productId = $(this).data("id");
                updateCartQuantity(productId, "decrease");
            });

            function updateCartQuantity(productId, action) {
                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        action: action
                    },
                    success: function(response) {
                        console.log(response);
                        location.reload(); // Recharge la page pour voir les modifications
                    }
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            let baseCurrency = "XOF"; // Devise de base : Franc CFA (XOF)

            $.get("http://ip-api.com/json", function(response) {
                let countryCode = response.countryCode; // Ex: BJ, FR, US
                let currencyData = getCurrencyByCountry(countryCode);
                let flagUrl = `https://flagsapi.com/${countryCode}/flat/32.png`; // Drapeau dynamique

                // Mettre à jour le symbole de la devise
                $(".currency-symbol").text(currencyData.symbol);
                $(".currency-code").text(currencyData.code);
                $(".currency-flag").attr("src", flagUrl).attr("alt", countryCode);

                // Convertir les prix en fonction du taux de change
                convertPrices(baseCurrency, currencyData.code);
            });

            function getCurrencyByCountry(countryCode) {
                let currencies = {
                    // Afrique de l'Ouest (XOF)
                    "BJ": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Bénin
                    "SN": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Sénégal
                    "CI": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Côte d'Ivoire
                    "ML": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Mali
                    "TG": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Togo
                    "BF": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Burkina Faso
                    "NE": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Niger
                    "GW": {
                        symbol: "CFA",
                        code: "XOF"
                    }, // Guinée-Bissau

                    // Europe (EUR)
                    "FR": {
                        symbol: "€",
                        code: "EUR"
                    },
                    "DE": {
                        symbol: "€",
                        code: "EUR"
                    },
                    "IT": {
                        symbol: "€",
                        code: "EUR"
                    },
                    "ES": {
                        symbol: "€",
                        code: "EUR"
                    },
                    "BE": {
                        symbol: "€",
                        code: "EUR"
                    },

                    // États-Unis (USD)
                    "US": {
                        symbol: "$",
                        code: "USD"
                    },
                    "CA": {
                        symbol: "$",
                        code: "USD"
                    }, // Canada
                    "NG": {
                        symbol: "$",
                        code: "USD"
                    } // Nigeria (USD par défaut)
                };

                return currencies[countryCode] || {
                    symbol: "CFA",
                    code: "XOF"
                }; // XOF par défaut
            }

            function convertPrices(baseCurrency, targetCurrency) {
                if (baseCurrency === targetCurrency) return; // Pas besoin de conversion

                let apiKey = "7a9a27568d7bb9f9aea5b25649b658a6"; // Remplace par ta clé API
                let apiUrl = `https://api.exchangerate-api.com/v4/latest/${baseCurrency}`;

                $.get(apiUrl, function(data) {
                    let exchangeRate = data.rates[targetCurrency] || 1; // Récupère le taux ou 1 par défaut

                    $(".product-price").each(function() {
                        let basePrice = parseFloat($(this).text()); // Récupérer le prix en XOF
                        let convertedPrice = (basePrice * exchangeRate).toFixed(2); // Convertir et arrondir

                        $(this).text(convertedPrice); // Mettre à jour le prix affiché
                    });
                });
            }
        });
    </script>
</body>
<!-- END BODY -->

</html>