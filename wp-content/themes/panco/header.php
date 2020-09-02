<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

</head>
<body <?php body_class(); ?>>

<div class="main-wrapper">


    <!-- /.topbar -->

    <div class="main-header-wrap">
        <header class="main-header">
            <div class="site-container wide">
                <div class="header-inner-wrap">
                    <span class="logo-wrap">
                        <a href="#" class="logo">Panco.md</a>
                    </span>

                    <div class="topnav-wrap">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => '',
                                'menu'            => '',
                                'container'       => 'ul',
                                'container_class' => 'main-menu',
                                'container_id'    => '',
                                'menu_class'      => 'topnav',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                                )
                            );
                    ?>
                    </div>
                </div>
            </div>
        </header>
        <!-- /.main-header -->
        <div class="search-dropdown">
            <div class="site-container">
                <form class="form-search" action="products.html">
                    <fieldset>
                        <input type="text" class="field" placeholder="Search..."/>
                    </fieldset>
                    <button type="button" class="icon-close search-toggle"></button>
                </form>
            </div>
        </div>
        <!-- /.search-dropdown -->
    </div>

    <header class="mobile-header">
        <div>
            <button class="topnav-toggle">
                <span class="lines">
                    <img src="images/icons/menu-line.svg" alt="line" class="line first"/>
                    <img src="images/icons/menu-line.svg" alt="line" class="line second"/>
                    <img src="images/icons/menu-line.svg" alt="line" class="line third"/>
                    <img src="images/icons/menu-line.svg" alt="line" class="line fourth"/>
                </span>
            </button>
            <a href="/" class="logo">PANCO.MD</a>
        </div>
        <div>
            <button class="search-toggle open">
                <i class="icon-search"></i>
            </button>
            <div class="cart">
                <button type="button" class="cart-toggle mobile">
                    <i class="icon-shopping-cart"></i>
                    <span class="number">5</span>
                </button>
                <div class="cart-dropdown">
                    <ul class="items">
                        <li>
                            <a href="#" class="item">
                                <span class="image">
                                    <img src="images/cart_1.jpg" alt="Img 1">
                                </span>
                                <div class="info">
                                    <span class="title">Pieced Multi-Color Sneakers</span>
                                    <span class="size">EU 26 (16.2cm) x1</span>
                                    <span class="price">
                                            <span class="old">640 MDL</span>
                                            <span class="new">559 MDL</span>
                                        </span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <span class="image">
                                    <img src="images/cart_2.jpg" alt="Img 1">
                                </span>
                                <div class="info">
                                    <span class="title">Detailed Sneakers</span>
                                    <span class="size">EU 26 (16.2cm) x1</span>
                                    <span class="price">545 MDL</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                               <span class="image">
                                    <img src="images/cart_3.jpg" alt="Img 1">
                                </span>
                                <div class="info">
                                    <span class="title">Mickey Mouse Disney Sneakers</span>
                                    <span class="size">EU 26 (16.2cm) x1</span>
                                    <span class="price">545 MDL</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.items -->
                    <p class="items-added">5 items added</p>
                    <a href="#" class="button purple block">View cart</a>
                </div>
            </div>
        </div>
    </header>
    <!-- /.mobile-header -->

    <div class="mobile-nav-overlay"></div>
    <div class="mobile-nav">
        <ul class="main-menu">
            <li>
                <a href="#" class="purple login">
                    <span>
                        <i class="icon-person"></i>
                        Create an account &nbsp;|&nbsp; Log in
                    </span>
                    <i class="icon-arrow_right"></i>
                </a>
            </li>
            <li>
                <a href="#" class="parent main-item">
                    <span>Newborn</span>
                    <i class="icon-arrow_right"></i>
                </a>
            </li>
            <li>
                <a href="#" class="parent main-item">
                    <span>kids</span>
                    <i class="icon-arrow_right"></i>
                </a>
            </li>
            <li>
                <a href="#" class="parent main-item">
                    <span>girls</span>
                    <i class="icon-arrow_right"></i>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="#" class="purple back">
                            <i class="icon-arrow_left"></i>
                            <span>Girls</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="parent">
                            <span>Clothing</span>
                            <i class="icon-arrow_right"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="#" class="purple back">
                                    <i class="icon-arrow_left"></i>
                                    <span>Girls / Clothing</span>
                                </a>
                            </li>
                            <li><a href="#">Athlete</a></li>
                            <li><a href="#">Track suits</a></li>
                            <li><a href="#">Trousers</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Coats</a></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Sweatshirt</a></li>
                            <li><a href="#">Tights</a></li>
                            <li><a href="#">Pyjamas</a></li>
                            <li><a href="#">Vests</a></li>
                            <li><a href="#">Cardigans</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="parent">
                            <span>Shoes</span>
                            <i class="icon-arrow_right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="parent">
                            <span>Accesories</span>
                            <i class="icon-arrow_right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="red">
                            <span>Sale up to 40%</span>
                        </a>
                    </li>
                    <li><a href="#">New Releases</a></li>
                    <li><a href="#">Best Sellers</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="parent main-item">
                    <span>boys</span>
                    <i class="icon-arrow_right"></i>
                </a>
            </li>
            <li>
                <a href="#" class="main-item">
                    <span>new releases</span>
                </a>
            </li>
            <li>
                <a href="#" class="main-item">
                    <span>sale</span>
                </a>
            </li>
            <li>
                <a href="#" class="grey favorites">
                    <i class="icon-heart-outline"></i>
                    <span>My favorites</span>
                </a>
            </li>
            <li class="dropdown-box">
                <a href="#" class="grey dropdown-toggle">
                    <span>Language</span>
                    <i class="icon-plus-outline"></i>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Russian</a></li>
                    <li><a href="#">Romanian</a></li>
                </ul>
            </li>
            <li><a href="#" class="grey">Delivery</a></li>
            <li><a href="#" class="grey">About us</a></li>
            <li><a href="#" class="grey">Call us: + (373) 791 27 999</a></li>
            <li class="copyright">2020 Panco.md</li>
        </ul>


    </div>
    <!-- /.mobile-nav -->

    <div class="container-fluid">