<?php
$heading = "Home";
require('header.php');

$sql = "SELECT * FROM `products`";
$result = mysqli_query($con, $sql);
?>
<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3---  section-bg-1--- mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <!-- CATEGORY-MENU-LIST START -->
                <div class="ltn__category-menu-wrap">
                    <div class="ltn__category-menu-title">
                        <h2 class="section-bg-1 ltn__secondary-bg text-color-white">categories</h2>
                    </div>
                    <div class="ltn__category-menu-toggle ltn__one-line-active">
                        <ul>
                            <!-- Submenu Column - unlimited -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="icon-shopping-bags"></i>Health Care </a>
                            </li>
                            <!-- Submenu Column - 4 -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="icon-options"></i>First Aid </a>
                            </li>
                            <!-- Submenu Column - 3 -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="icon-award"></i>Surgical Product</a>
                            </li>
                            <!-- Submenu Column - 2 -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="icon-user"></i>Diagnostic Product</a>
                            </li>
                            <!-- Submenu -->
                            <li class="ltn__category-menu-item ltn__category-menu-drop">
                                <a href="#"><i class="icon-shopping-cart"></i>Laboratory Product</a>
                            </li>
                            <li class="ltn__category-menu-more-item-parent">
                                <a class="rx-default">
                                    More categories <span class="cat-thumb  icon-plus"></span>
                                </a>
                                <a class="rx-show">
                                    close menu <span class="cat-thumb  icon-remove"></span>
                                </a>
                            </li>
                            <!-- Single menu end -->
                        </ul>
                    </div>
                </div>
                <!-- END CATEGORY-MENU-LIST -->
            </div>
            <div class="col-lg-9">
                <div class="ltn__slide-active-2 slick-slide-arrow-1 slick-slide-dots-1">
                    <!-- ltn__slide-item -->
                    <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bs-bg="admin/uploads/medicine.png">
                        <div class="ltn__slide-item-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h5 class="slide-sub-title ltn__secondary-color animated text-uppercase">Up To 50% Off Today Only!</h5>
                                                <h1 class="slide-title  animated">Gold Standard <br>Pre-Workout</h1>
                                                <h5 class="color-orange  animated">Starting at &16.99</h5>
                                                <div class="slide-brief animated d-none">
                                                    <p>Predictive analytics is drastically changing the real estate industry. In the past, providing data for quick</p>
                                                </div>
                                                <div class="btn-wrapper  animated">
                                                    <a href="/shop" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                        <div class="slide-item-img">
                                            <!-- <a href="#"><img src="img/product/1.png" alt="Image"></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__slide-item -->
                    <div class="ltn__slide-item ltn__slide-item-10 section-bg-1 bg-image" data-bs-bg="admin/uploads/medicine.png">
                        <div class="ltn__slide-item-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
                                        <div class="slide-item-info">
                                            <div class="slide-item-info-inner ltn__slide-animation">
                                                <h4 class="slide-sub-title ltn__secondary-color animated text-uppercase">Welcome to our shop</h4>
                                                <h1 class="slide-title  animated">Gold Standard <br>Pre-Workout</h1>
                                                <div class="slide-brief animated d-none">
                                                    <p>Predictive analytics is drastically changing the real estate industry. In the past, providing data for quick</p>
                                                </div>
                                                <div class="btn-wrapper  animated">
                                                    <a href="/shop" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
                                        <div class="slide-item-img">
                                            <!-- <a href="#"><img src="img/slider/62.jpg" alt="Image"></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mt-35 mt--65---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-1">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="assets/img/icons/svg/8-trolley.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            <p>On all orders over ₹99.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="assets/img/icons/svg/9-money.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>15 days returns</h4>
                            <p>Moneyback guarantee</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="assets/img/icons/svg/10-credit-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Secure checkout</h4>
                            <p>Protected by Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="assets/img/icons/svg/11-gift-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Offer & gift here</h4>
                            <p>On all orders over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->
<!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <!-- <h6 class="section-subtitle ltn__secondary-color">// Cars</h6> -->
                    <h1 class="section-title">Our Products</h1>
                    <p>A highly efficient slip-ring scanner for today's diagnostic requirements.</p>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">
                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_3_1">Equipment</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_2" class="">Medicine</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_3" class="">Sanitizer</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_4" class="">Safety-suits</a>
                        <a data-bs-toggle="tab" href="#liton_tab_3_5" class="">Face-mask</a>
                    </div>
                </div>
                <div class="tab-content">
                    <?php
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            if (is_array($row) && !empty($row)) {
                                echo '<div class="tab-pane fade active show" id="liton_tab_3_1"><div class="ltn__product-tab-content-inner"><div class="row ltn__tab-product-slider-one-active slick-arrow-1">';
                                foreach ($row as $index => $product) {
                                    if ($index < 10) { ?>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="admin/<?php echo $product['Image']; ?>" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="#"><?php echo $product['Name']; ?></a></h2>
                                                <div class="product-price">
                                                    <span>₹<?php echo $product['Price']; ?></span>
                                                </div>
                                                <div class="add-to-cart-btn">
                                                    <a href="shop?id=<?= $row['ID'] ?>"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                                echo '</div></div></div>';


                                echo '<div class="tab-pane fade" id="liton_tab_3_2"><div class="ltn__product-tab-content-inner"><div class="row ltn__tab-product-slider-one-active slick-arrow-1">';
                                foreach ($row as $index => $product) {
                                    if ($index < 20) { ?>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="admin/<?php echo $product['Image']; ?>" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="#"><?php echo $product['Name']; ?></a></h2>
                                                <div class="product-price">
                                                    <span>₹<?php echo $product['Price']; ?></span>
                                                </div>
                                                <div class="add-to-cart-btn">
                                                    <a href="shop?id=<?= $row['ID'] ?>"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                                echo '</div></div></div>';

                                echo '<div class="tab-pane fade" id="liton_tab_3_3"><div class="ltn__product-tab-content-inner"><div class="row ltn__tab-product-slider-one-active slick-arrow-1">';
                                foreach ($row as $index => $product) {
                                    if ($index < 30) { ?>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="admin/<?php echo $product['Image']; ?>" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="#"><?php echo $product['Name']; ?></a></h2>
                                                <div class="product-price">
                                                    <span>₹<?php echo $product['Price']; ?></span>
                                                </div>
                                                <div class="add-to-cart-btn">
                                                    <a href="shop?id=<?= $row['ID'] ?>"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                                echo '</div></div></div>';

                                echo '<div class="tab-pane fade" id="liton_tab_3_4"><div class="ltn__product-tab-content-inner"><div class="row ltn__tab-product-slider-one-active slick-arrow-1">';
                                foreach ($row as $index => $product) {
                                    if ($index < 40) { ?>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="admin/<?php echo $product['Image']; ?>" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="#"><?php echo $product['Name']; ?></a></h2>
                                                <div class="product-price">
                                                    <span>₹<?php echo $product['Price']; ?></span>
                                                </div>
                                                <div class="add-to-cart-btn">
                                                    <a href="shop?id=<?= $row['ID'] ?>"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                                echo '</div></div></div>';

                                echo '<div class="tab-pane fade" id="liton_tab_3_4"><div class="ltn__product-tab-content-inner"><div class="row ltn__tab-product-slider-one-active slick-arrow-1">';
                                foreach ($row as $index => $product) {
                                    if ($index < 50) { ?>
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="#"><img src="admin/<?php echo $product['Image']; ?>" alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">-19%</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> (24)</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h2 class="product-title"><a href="#"><?php echo $product['Name']; ?></a></h2>
                                                <div class="product-price">
                                                    <span>₹<?php echo $product['Price']; ?></span>
                                                </div>
                                                <div class="add-to-cart-btn">
                                                    <a href="shop?id=<?= $row['ID'] ?>"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Add to cart</button></a>
                                                </div>
                                            </div>
                                        </div>
                    <?php
                                    }
                                }
                                echo '</div></div></div>';
                            }
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->


<!-- COUNTDOWN AREA START -->
<div class="ltn__call-to-action-area section-bg-1 bg-image pt-120 pb-120" data-bs-bg="img/bg/27.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-4">
                <img src="admin/uploads/medicine.png" alt="#">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="call-to-action-inner text-color-white--- text-center---">
                    <div class="section-title-area ltn__section-title-2--- text-center---">
                        <h6 class="ltn__secondary-color">Todays Hot Offer</h6>
                        <h1 class="section-title">Buy all your medicines <br> at 50% offer</h1>
                        <p>Get extra cashback with great deals and discounts </p>
                    </div>
                    <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="2023/5/01"></div>
                    <div class="btn-wrapper animated">
                        <a href="/shop" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                        <a href="/shop" class="ltn__secondary-color text-decoration-underline">Deal of The Day</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTDOWN AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Best Selling Item</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="#"><img src="admin/uploads/medicine.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">New</li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="#">Antiseptic Spray</a></h2>
                        <div class="product-price">
                            <span>₹32.00</span>
                        </div>
                        <div class="add-to-cart-btn">
                            <a href="/shop"><button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">View</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->

<?php require('footer.php');
