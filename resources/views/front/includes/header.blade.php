<!-- header -->
<header>
    <div class="container">
        <!-- top nav -->
        <nav class="top_nav d-flex pt-3 pb-1">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href="{{route('/')}}">fh
                </a>
            </h1>
            <!-- //logo -->
            <div class="w3ls_right_nav ml-auto d-flex">
                <!-- search form -->
                <form class="nav-search form-inline my-0 form-control" action="#" method="post">
                    <select class="form-control input-lg" name="category">
                        <option value="all">Search our store</option>
                        <optgroup label="Mens">
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="coats-jackets">Coats & Jackets</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Suits & Blazers">Suits & Blazers</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Sweat Shirts">Trousers</option>
                        </optgroup>
                        <optgroup label="Womens">
                            <option value="Dresses">Dresses</option>
                            <option value="T-shirts">T-shirts</option>
                            <option value="skirts">Skirts</option>
                            <option value="jeans">Jeans</option>
                            <option value="Tunics">Tunics</option>
                        </optgroup>
                        <optgroup label="Girls">
                            <option value="Dresses">Dresses</option>
                            <option value="T-shirts">T-shirts</option>
                            <option value="skirts">Skirts</option>
                            <option value="jeans">Jeans</option>
                            <option value="Tops">Tops</option>
                        </optgroup>
                        <optgroup label="Boys">
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="coats-jackets">Coats & Jackets</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Suits & Blazers">Suits & Blazers</option>
                            <option value="Jackets">Jackets</option>
                            <option value="Sweat Shirts">Sweat Shirts</option>
                        </optgroup>
                    </select>
                    <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                </form>
                <!-- search form -->
                <div class="nav-icon d-flex">
                    <!-- sigin and sign up -->
                    <a class="text-dark login_btn align-self-center mx-3" href="#myModal_btn" data-toggle="modal" data-target="#myModal_btn">
                        <i class="far fa-user"></i>
                    </a>
                    <!-- sigin and sign up -->
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="hubcart hubcart2 cart cart box_1">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="display" value="1">
                                <button class="btn top_hub_cart mt-1" type="submit" name="submit" value="" title="Cart">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
            </div>
        </nav>
        <!-- //top nav -->
        <!-- bottom nav -->
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link  active" href={{route('/')}}>Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="men.html">T-Shirts</a>
                                        <a class="dropdown-item" href="men.html">Coats</a>
                                        <a class="dropdown-item" href="men.html">Shirts</a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a>
                                        <a class="dropdown-item" href="men.html">Trousers</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="men.html">T-Shirts</a>
                                        <a class="dropdown-item" href="men.html">Trousers</a>
                                        <a class="dropdown-item" href="men.html">Shirts</a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Coats & Jackets</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="men.html">T-Shirts</a>
                                        <a class="dropdown-item" href="men.html">Coats</a>
                                        <a class="dropdown-item" href="men.html">Shirts</a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a>
                                        <a class="dropdown-item" href="men.html">Trousers</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="women.html">Dresses</a>
                                        <a class="dropdown-item" href="women.html">T-shirts</a>
                                        <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a>
                                        <a class="dropdown-item" href="women.html">Tunics</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="women.html">T-shirts</a>
                                        <a class="dropdown-item" href="women.html">Dresses</a>
                                        <a class="dropdown-item" href="women.html">Tunics</a>
                                        <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="women.html">Dresses</a>
                                        <a class="dropdown-item" href="women.html">T-shirts</a>
                                        <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a>
                                        <a class="dropdown-item" href="women.html">Tunics</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kids Clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="container">
                                <div class="row w3_kids  py-3">
                                    <div class="col-md-3 ">
                                        <span class="bg-light">Boy's Clothing</span>
                                        <a class="dropdown-item" href="boys.html">T-Shirts</a>
                                        <a class="dropdown-item" href="boys.html">Coats</a>
                                        <a class="dropdown-item" href="boys.html">Shirts</a>
                                        <a class="dropdown-item" href="boys.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="boys.html">Jackets</a>
                                        <a class="dropdown-item" href="boys.html">Trousers</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="dropdown-item mt-4" href="boys.html">T-Shirts</a>
                                        <a class="dropdown-item" href="boys.html">Coats</a>
                                        <a class="dropdown-item" href="boys.html">Shirts</a>
                                        <a class="dropdown-item" href="boys.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="boys.html">Jackets</a>
                                        <a class="dropdown-item" href="boys.html">Trousers</a>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Girl's Clothing</span>
                                        <a class="dropdown-item" href="girls.html">T-shirts</a>
                                        <a class="dropdown-item" href="girls.html">Dresses</a>
                                        <a class="dropdown-item" href="girls.html">Tunics</a>
                                        <a class="dropdown-item" href="girls.html">Skirts</a>
                                        <a class="dropdown-item" href="girls.html">Jeans</a>
                                        <a class="dropdown-item" href="girls.html">Midi</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="dropdown-item  mt-4" href="girls.html">Tunics</a>
                                        <a class="dropdown-item" href="girls.html">Skirts</a>
                                        <a class="dropdown-item" href="girls.html">T-shirts</a>
                                        <a class="dropdown-item" href="girls.html">Dresses</a>
                                        <a class="dropdown-item" href="girls.html">Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('about')}}>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('blog')}}>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{route('contact')}}>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //bottom nav -->
    </div>
    <!-- //header container -->
</header>
<!-- //header -->