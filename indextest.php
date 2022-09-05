<?php
$this->load->view('header');
//$store_slug = isset($social_analytics_codes['slug']) ? $social_analytics_codes['slug'] : "";
$currency = isset($ecommerce_config['currency']) ? $ecommerce_config['currency'] : "USD";
$currency_icon = isset($currency_icons[$currency]) ? $currency_icons[$currency] : "$";
$currency_position = isset($ecommerce_config['currency_position']) ? $ecommerce_config['currency_position'] : "left";
$decimal_point = isset($ecommerce_config['decimal_point']) ? $ecommerce_config['decimal_point'] : 0;
$thousand_comma = isset($ecommerce_config['thousand_comma']) ? $ecommerce_config['thousand_comma'] : '0';
$buy_button_title = isset($ecommerce_config['buy_button_title']) ? $ecommerce_config['buy_button_title'] : $this->lang->line("Buy Now");
$is_category_wise_product_view = isset($ecommerce_config['is_category_wise_product_view']) ? $ecommerce_config['is_category_wise_product_view'] : "0";
$product_listing = isset($ecommerce_config['product_listing']) ? $ecommerce_config['product_listing'] : "list";
$hide_add_to_cart = isset($ecommerce_config['hide_add_to_cart']) ? $ecommerce_config['hide_add_to_cart'] : "0";
$hide_buy_now = isset($ecommerce_config['hide_buy_now']) ? $ecommerce_config['hide_buy_now'] : "0";
$store_slug = isset($social_analytics_codes['slug']) ? $social_analytics_codes['slug'] : "";
$currency_left = $currency_right = "";
if ($currency_position == 'left')
    $currency_left = $currency_icon;
if ($currency_position == 'right')
    $currency_right = $currency_icon;

$subscriber_id = $this->session->userdata($store_data['id'] . "ecom_session_subscriber_id");
if ($subscriber_id == "")
    $subscriber_id = isset($_GET['subscriber_id']) ? $_GET['subscriber_id'] : "";
$pickup = isset($_GET['pickup']) ? $_GET['pickup'] : '';

$form_action = base_url('ecommerce/store/' . $store_data['store_unique_id']);
$form_action = mec_add_get_param($form_action, array("subscriber_id" => $subscriber_id, "pickup" => $pickup));

$current_cart_id = isset($current_cart['cart_id']) ? $current_cart['cart_id'] : 0;
$cart_count = isset($current_cart['cart_count']) ? $current_cart['cart_count'] : 0;
$current_cart_url = base_url("ecommerce/cart/" . $current_cart_id);
$current_cart_url = mec_add_get_param($current_cart_url, array("subscriber_id" => $subscriber_id, "pickup" => $pickup));
$url_cat = isset($_GET["category"]) ? $_GET["category"] : "";

$product_list_grouped = array();
$product_list_grouped_ordered = array();
if ($is_category_wise_product_view == '1') {
    foreach ($product_list as $key => $value) {
        if (isset($category_list[$value["category_id"]]))
            $product_list_grouped[$value["category_id"]][] = $value;
        else
            $product_list_grouped["other"][] = $value;
    }
    foreach ($category_list as $key => $value) {
        if (isset($product_list_grouped[$key]))
            $product_list_grouped_ordered[$key] = $product_list_grouped[$key];
    }
    if (isset($product_list_grouped["other"]))
        $product_list_grouped_ordered["other"] = $product_list_grouped["other"];
} else
    $product_list_grouped_ordered['none'] = $product_list;


$featured_product_lists = array();
foreach ($product_list as $feature_product) {
    if ($feature_product['is_featured'] == '0')
        continue;

    array_push($featured_product_lists, $feature_product);
}
?>

<style>
    .add-to-cart1 a::after{
        color:#ffe600
    }

    .add_to_cart{
        background-color: #000 !important;
        color: #ffe600 !important;
        margin-right: 10px;
        border-radius: 50px;
        font-weight: 600;
        border: 1px solid #000;
    }
    .add_to_cart:hover{
        background-color: #ffe600 !important;
        color: #000 !important;
        margin-right: 10px;
        border-radius: 50px;
        border: 1px solid #ffe600;
    }

    .category::-webkit-scrollbar{
        opacity: 0;
        visibility: hidden;
        height: 2px;
    }

    .categorie{
        text-align: center;
    }


    .view-all-text{
        text-align: center;
    }

    .view-all-text a{
        color: #000;
        font-weight: 600;
    }

    .yith-wcbsl-badge-wrapper{
        left: -12px !important;
    }

    @media (max-width: 500px) {

        .viewall-text{
            display: none !important;
        }

        #mobile-category{
            display: block !important;
        }

        #desktop-category{
            display: none;
        }

    }

</style>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--<div class="row">-->
            <!-- shop -->
            <?php
            $ckh = count($slider);
            if ($ckh > 0) {
                ?>
                <div class="col-12 p-0">
                    <div class="col-12 p-0 mb-3">
                        <div class="owl-carousel owl-theme" id="products-carousel">
                            <?php
                            foreach ($slider as $slider_img) {

                                $temp = explode(',', $slider_img->slider_img);
                            }
                            foreach ($temp as $val) {
                                $imgSrcs = 'https://store.qpe.co.in/upload/slider_image/' . $val;
                                if ($val != '') {
                                    ?>
                                    <article class="mb-1 mt-1" data-cat="" style="border-radius:20px;height:200px">
                                        <div class="" style="border-radius: 20px;height:200px">
                                            <a href="#" >
                                                <div class="article-image" data-background="<?php echo $imgSrcs; ?>" style="border-radius: 20px; width: 100%; height: 100%; background-size: 100% 100%;background-image: url('<?php echo $imgSrcs; ?>');"></div>
                                            </a>
                                        </div>
                                    </article>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- /shop -->
            <!--</div>-->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">All Categories</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="viewall-text"><a href="<?= base_url('all-category/' . $store_slug) ?>">View All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /section title -->
            <div id="mobile-category" style="display: none;">
                <div id="top_4_categpry" style="display: block">
                    <div class="row" style="margin-left: 0px; display: flex; flex-direction: row; flex-wrap: wrap;">
                        <?php
                        $counter = 1;
                        foreach ($category_list_raw as $cat) {
                            if ($counter < 9) {
                                ?>
                                <div class="col-sm-3 col-3">
                                    <div class="categorie">
                                        <a href="<?= base_url('products/' . $store_slug . '?category=' . $cat['id']) ?>">
                                            <div class="catrgorie-image">
                                                <img src="https://store.qpe.co.in/upload/ecommerce/<?= @$cat['thumbnail']; ?>" alt="">
                                                <p><?= $cat['category_name'] ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            $counter++;
                        }
                        ?>
                    </div>
                </div>

                <div id="all_categpry" style="display: none">
                    <div class="row" style=" margin-left: 0px; display: flex; flex-direction: row; flex-wrap: wrap;">
                        <?php
                        foreach ($category_list_raw as $cat) {
                            ?>
                            <div class="col-sm-3 col-3">
                                <div class="categorie">
                                    <a href="<?= base_url('products/' . $store_slug . '?category=' . $cat['id']) ?>">
                                        <div class="catrgorie-image">
                                            <img src="https://store.qpe.co.in/upload/ecommerce/<?= @$cat['thumbnail']; ?>" alt="">
                                            <p><?= $cat['category_name'] ?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $counter++;
                        }
                        ?>
                    </div>
                </div>
                <div class="view-all-text">
                <a href="#" class="view_all">
                    View all
                </a>
            </div>
            </div>

        </div>

        <!-- Products tab & slick -->
        <div class="col-md-12" id="desktop-category">
            <div class="category">
                <?php
                foreach ($category_list_raw as $cat) {
                    ?>
                    <div class="categorie">
                        <a href="<?= base_url('products/' . $store_slug . '?category=' . $cat['id']) ?>">
                            <div class="catrgorie-image">
                                <img src="https://store.qpe.co.in/upload/ecommerce/<?= @$cat['thumbnail']; ?>" alt="">
                                <p><?= $cat['category_name'] ?></p>
                            </div>
                        </a>
                        <!--  <div class="categorie-text">

                          </div>-->
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
        <!-- Products tab & slick -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /SECTION -->


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row main-section">

            <?php if ($this->is_ecommerce_related_product_exist) : ?>
                <?php if (!empty($featured_product_lists)) : ?>
                    <div class="col-12 p-0">
                        <div class="section-title mt-3 mb-1"><?php echo "Featured Products" ?></div>
                    </div>
                    <div class="col-12 p-0 mb-3">
                        <div class="owl-carousel owl-theme" id="featured-products-carousel">
                            <?php foreach ($featured_product_lists as $featured) : ?>
                                <?php
                                $imgSrcs = ($featured['thumbnail'] != '') ? base_url('upload/ecommerce/' . $featured['thumbnail']) : base_url('assets/img/products/product-1.jpg');
                                if (isset($featured["woocommerce_product_id"]) && !is_null($featured["woocommerce_product_id"]) && $featured['thumbnail'] != '')
                                    $imgSrcs = $featured['thumbnail'];

                                $product_url = base_url("ecommerce/product/" . $featured['id']);
                                $product_url = mec_add_get_param($product_url, array("subscriber_id" => $subscriber_id, "pickup" => $pickup));

                                $display_featured_product_price = mec_display_price($featured['original_price'], $featured['sell_price'], $currency_icon, '1', $currency_position, $decimal_point, $thousand_comma);
                                $display_featured_product_discount = mec_display_price($featured['original_price'], $featured['sell_price'], $currency_icon, '4', $currency_position, $decimal_point, $thousand_comma);
                                ?>
                                <article class="article article-style-c mb-1 mt-1" data-cat="<?php echo $featured['category_id']; ?>">
                                    <div class="article-header">
                                        <a href="<?php echo $product_url; ?>">
                                            <div class="article-image" data-background="<?php echo $imgSrcs; ?> " style="background-image: url('<?php echo $imgSrcs; ?>');"></div>
                                        </a>
                                        <?php echo $display_featured_product_discount; ?>

                                    </div>
                                    <div class="article-details pt-0 pb-0 pl-1 pr-1">
                                        <div class="article-category mt-1 mb-0"><?php echo $display_featured_product_price; ?></div>
                                        <div class="article-title mb-0">
                                            <a href="<?php echo $product_url; ?>" class="text-dark text-small"><?php echo $featured['product_name']; ?></a>
                                        </div>
                                        <p class="d-none"><?php echo strip_tags($featured['product_description']); ?></p>
                                        <p class="d-none"><?php echo isset($category_list[$featured['category_id']]) ? $category_list[$featured['category_id']] : ''; ?></p>
                                        &nbsp;
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <?php

            foreach ($product_list_grouped_ordered as $key_main => $value_main) :

                if ($is_category_wise_product_view == '1') {

                    $category_id = $value_main[0]['category_id'];

                    $echo_cat = isset($category_list[$key_main]) ? $category_list[$key_main] : $this->lang->line("Other Items");
                    echo '<div class="row"><div class="col-12"><div class="section-title mt-3 mb-1">' . $echo_cat . '</div></div>';

                    $top4 = 0;?>

                  <?php  foreach ($value_main as $key => $value) :

                        //if($top4 < 4){
                        $product_link = base_url("product/" . $value['id']);
                        //$product_link = mec_add_get_param($product_link, array("subscriber_id" => $subscriber_id, "pickup" => $pickup));
                        $show_preperation_time = false;
                        if (isset($ecommerce_config['is_preparation_time']) && $ecommerce_config['is_preparation_time'] == '1' && $value["preparation_time_unit"] != "")
                            $show_preperation_time = true;
                        $preperationtime = "";
                        if ($show_preperation_time) {
                            $system_preparation_time = isset($ecommerce_config['preparation_time']) ? $ecommerce_config['preparation_time'] : "30";
                            $system_preparation_time_unit = isset($ecommerce_config['preparation_time_unit']) ? $ecommerce_config['preparation_time_unit'] : "minutes";
                            $preparation_time = $value['preparation_time'] == "" ? $system_preparation_time : $value['preparation_time'];
                            $preparation_time_unit = $value['preparation_time_unit'] == "" ? $system_preparation_time_unit : $value['preparation_time_unit'];
                            $preparation_time_unit = str_replace(array("minutes", "hours", "days"), array("m", "h", "d"), $preparation_time_unit);
                            $preperationtime = $value["preparation_time_unit"] != "" ? $preparation_time . "" . $preparation_time_unit : "";
                        }

                        $imgSrc = ($value['thumbnail'] != '') ? 'https://store.qpe.co.in/upload/ecommerce/' . $value['thumbnail'] : base_url('assets/img/products/product-1.jpg');
                        if (isset($value["woocommerce_product_id"]) && !is_null($value["woocommerce_product_id"]) && $value['thumbnail'] != '')
                            $imgSrc = $value['thumbnail'];

                        $display_price = mec_display_price($value['original_price'], $value['sell_price'], $currency_icon, '1', $currency_position, $decimal_point, $thousand_comma);
                        $display_discount = mec_display_price($value['original_price'], $value['sell_price'], $currency_icon, '4', $currency_position, $decimal_point, $thousand_comma);

                        $display_review = "";
                        $rating = "";
                        if ($this->ecommerce_review_comment_exist && isset($review_data[$value['id']])) :
                            $float_review = 'float-right';
                            $rating = mec_average_rating($review_data[$value['id']]['total_point'], $review_data[$value['id']]['total_review']);
                            $review_star = mec_display_rating_starts($rating, 'text-small');
                            $display_review = '<span class="' . $float_review . '">' . $review_star . '</span>';
                        endif;

                        $lim = $hide_add_to_cart == '1' && $hide_buy_now == '1' ? 75 : 30;

                        $display_short_description = strlen(strip_tags($value['product_description'])) > $lim ? substr(strip_tags($value['product_description']), 0, $lim) . '..' : strip_tags($value['product_description']);

                        // $cart_lang = $cart_count>0 ? $this->lang->line("Add to Cart") : $this->lang->line("Cart");
                        $cart_lang = $product_listing == 'list' ? "Add to Cart" : '';
                        $buy_button_title = $product_listing == 'list' ? $buy_button_title : '';
                        $is_float = $product_listing == 'list' ? 'float-right' : 'float-right';
                        $display_buy_button = $display_add_to_cart = "";
                        $btn_size = $product_listing == 'list' ? '' : '';

                        if ($hide_add_to_cart == '1')
                            $is_float = '';

                        if ($hide_buy_now == '0') {
                            if ($value['attribute_ids'] == '')
                                $display_buy_button = '<a href="" class="btn ' . $btn_size . 'btn-primary' . $is_float . ' add_to_cart buy_now by_now" data-attributes="' . $value['attribute_ids'] . '" data-product-id="' . $value['id'] . '" data-action="add"> ' . $buy_button_title . '</a>';
                            else
                                $display_buy_button = '<a href="" class="btn ' . $btn_size . 'btn-primary' . $is_float . ' add_to_cart_modal buy_now by_now" data-product-id="' . $value['id'] . '"> ' . $buy_button_title . '</a>';
                        }


                        if ($hide_add_to_cart == '0') {
                            if ($value['attribute_ids'] == '') {
                                $display_add_to_cart = '<a href="" class="btn  ' . $btn_size . ' add-to-cart-btn add_to_cart" data-attributes="' . $value['attribute_ids'] . '" data-product-id="' . $value['id'] . '" data-action="add"><i class="fa fa-plus"></i> ' . $cart_lang . '</a>';
                            } else {
                                $display_add_to_cart = '<a href="" data-product-id="' . $value['id'] . '" class="btn ' . $btn_size . ' btn-outline-primary add_to_cart_modal"><i class="fa fa-plus"></i> ' . $cart_lang . '</a>';
                            }
                        }?>


                    <?php     if ($product_listing == 'list') {

                            if ($top4 < 4) {

                                ?>
                                <div class="col-md-3 col-xs-6 product-single" data-cat="<?php echo $value['category_id']; ?>">
                                    <div class="product">
                                        <a href="<?php echo $product_link; ?>"><div class="product-img">
                                                <img src="<?= $imgSrc ?>" alt="">
                                                <div class="product-label">
                                                    <span class="sale"><?php echo $display_discount; ?></span>
                                                    <div class="product-rating">
                                                        <?php if ($show_preperation_time): ?>
                                                            <span class="badge badge-dark rounded preparation_time2">
                                                                <i class="fa fa-clock"></i> <?php echo $preperationtime; ?>
                                                                <span class="float-right"><?php echo $rating != "" && $rating != 0 ? $rating . " <i class='fa fa-star orange text-small'></i>" : ""; ?></span>
                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div></a>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="<?php echo $product_link; ?>"><?php echo $value['product_name']; ?></a></h3>
                                            <h4 class="product-price"><?php echo $display_price ?></del></h4>
                                            <div class="product-rating">
                                                <!-- <?php if ($show_preperation_time): ?>
                                                <?php endif; ?> -->
                                            </div>
                                            <div class="add-to-cart1">
                                                <?php
                                                echo $display_add_to_cart;
                                                echo $display_buy_button;
                                                ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                        }  else {
                            ?>

                            <div class="col-md-3 col-xs-6 product-single" data-cat="<?php echo $value['category_id']; ?>">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="<?= $imgSrc ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale"><?php echo $display_discount; ?></span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="<?php echo $product_link; ?>"><?php echo $value['product_name']; ?></a></h3>
                                        <h4 class="product-price"><?php echo $display_price; ?></h4>
                                        <div class="product-rating">
                                            <?php if ($show_preperation_time): ?>
                                                <span class="badge badge-dark rounded preparation_time2">
                                                    <i class="fa fa-clock"></i> <?php echo $preperationtime; ?>
                                                    <span class="float-right"><?php echo $rating != "" && $rating != 0 ? $rating . " <i class='fa fa-star orange text-small'></i>" : ""; ?></span>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="add-to-cart1">
                                            <?php
                                            echo $display_add_to_cart;
                                            echo $display_buy_button;
                                            ?>
                                        <!--<button class="add-to-cart-btn" style=""><i class="fa fa-plus"></i> add to cart</button>-->
                                        </div>
                                        <!-- <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div> -->

                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>


                        <?php
                        $top4++;

                    endforeach;
                    if ($top4 > 4) {
                        echo $cat_count;
                           ?>
                           <div class="viewall-btn">
                               <a href="<?= base_url('products/' . $store_slug . '?category=' . @$category_id); ?>"<p>View All</p></a>
                           </div>
                         <?php }
                }else {
                    foreach ($value_main as $key => $value) :

                        //if($top4 < 4){
                        $product_link = base_url("product/" . $value['id']);
                        //$product_link = mec_add_get_param($product_link, array("subscriber_id" => $subscriber_id, "pickup" => $pickup));
                        $show_preperation_time = false;
                        if (isset($ecommerce_config['is_preparation_time']) && $ecommerce_config['is_preparation_time'] == '1' && $value["preparation_time_unit"] != "")
                            $show_preperation_time = true;
                        $preperationtime = "";
                        if ($show_preperation_time) {
                            $system_preparation_time = isset($ecommerce_config['preparation_time']) ? $ecommerce_config['preparation_time'] : "30";
                            $system_preparation_time_unit = isset($ecommerce_config['preparation_time_unit']) ? $ecommerce_config['preparation_time_unit'] : "minutes";
                            $preparation_time = $value['preparation_time'] == "" ? $system_preparation_time : $value['preparation_time'];
                            $preparation_time_unit = $value['preparation_time_unit'] == "" ? $system_preparation_time_unit : $value['preparation_time_unit'];
                            $preparation_time_unit = str_replace(array("minutes", "hours", "days"), array("m", "h", "d"), $preparation_time_unit);
                            $preperationtime = $value["preparation_time_unit"] != "" ? $preparation_time . "" . $preparation_time_unit : "";
                        }

                        $imgSrc = ($value['thumbnail'] != '') ? 'https://store.qpe.co.in/upload/ecommerce/' . $value['thumbnail'] : base_url('assets/img/products/product-1.jpg');
                        if (isset($value["woocommerce_product_id"]) && !is_null($value["woocommerce_product_id"]) && $value['thumbnail'] != '')
                            $imgSrc = $value['thumbnail'];

                        $display_price = mec_display_price($value['original_price'], $value['sell_price'], $currency_icon, '1', $currency_position, $decimal_point, $thousand_comma);
                        $display_discount = mec_display_price($value['original_price'], $value['sell_price'], $currency_icon, '4', $currency_position, $decimal_point, $thousand_comma);

                        $display_review = "";
                        $rating = "";
                        if ($this->ecommerce_review_comment_exist && isset($review_data[$value['id']])) :
                            $float_review = 'float-right';
                            $rating = mec_average_rating($review_data[$value['id']]['total_point'], $review_data[$value['id']]['total_review']);
                            $review_star = mec_display_rating_starts($rating, 'text-small');
                            $display_review = '<span class="' . $float_review . '">' . $review_star . '</span>';
                        endif;

                        $lim = $hide_add_to_cart == '1' && $hide_buy_now == '1' ? 75 : 30;

                        $display_short_description = strlen(strip_tags($value['product_description'])) > $lim ? substr(strip_tags($value['product_description']), 0, $lim) . '..' : strip_tags($value['product_description']);

                        // $cart_lang = $cart_count>0 ? $this->lang->line("Add to Cart") : $this->lang->line("Cart");
                        $cart_lang = $product_listing == 'list' ? "Add to Cart" : '';
                        $buy_button_title = $product_listing == 'list' ? $buy_button_title : '';
                        $is_float = $product_listing == 'list' ? 'float-right' : 'float-right';
                        $display_buy_button = $display_add_to_cart = "";
                        $btn_size = $product_listing == 'list' ? '' : '';

                        if ($hide_add_to_cart == '1')
                            $is_float = '';

                        if ($hide_buy_now == '0') {
                            if ($value['attribute_ids'] == '')
                                $display_buy_button = '<a href="" class="btn ' . $btn_size . 'btn-primary' . $is_float . ' add_to_cart buy_now by_now" data-attributes="' . $value['attribute_ids'] . '" data-product-id="' . $value['id'] . '" data-action="add"> ' . $buy_button_title . '</a>';
                            else
                                $display_buy_button = '<a href="" class="btn ' . $btn_size . 'btn-primary' . $is_float . ' add_to_cart_modal buy_now by_now" data-product-id="' . $value['id'] . '"> ' . $buy_button_title . '</a>';
                        }


                        if ($hide_add_to_cart == '0') {
                            if ($value['attribute_ids'] == '') {
                                $display_add_to_cart = '<a href="" class="btn  ' . $btn_size . ' add-to-cart-btn add_to_cart" data-attributes="' . $value['attribute_ids'] . '" data-product-id="' . $value['id'] . '" data-action="add"><i class="fa fa-plus"></i> ' . $cart_lang . '</a>';
                            } else {
                                $display_add_to_cart = '<a href="" data-product-id="' . $value['id'] . '" class="btn ' . $btn_size . ' btn-outline-primary add_to_cart_modal"><i class="fa fa-plus"></i> ' . $cart_lang . '</a>';
                            }
                        }


                        if ($product_listing == 'list') {
                            ?>
                            <div class="col-md-3 col-xs-6 product-single" data-cat="<?php echo $value['category_id']; ?>">
                                <div class="product">
                                    <a href="<?php echo $product_link; ?>"><div class="product-img">
                                            <img src="<?= $imgSrc ?>" alt="">
                                            <div class="product-label">
                                                <span class="sale"><?php echo $display_discount; ?></span>
                                                <div class="product-rating">
                                                    <?php if ($show_preperation_time): ?>
                                                        <span class="badge badge-dark rounded preparation_time2">
                                                            <i class="fa fa-clock"></i> <?php echo $preperationtime; ?>
                                                            <span class="float-right"><?php echo $rating != "" && $rating != 0 ? $rating . " <i class='fa fa-star orange text-small'></i>" : ""; ?></span>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div></a>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="<?php echo $product_link; ?>"><?php echo $value['product_name']; ?></a></h3>
                                        <h4 class="product-price"><?php echo $display_price ?></del></h4>
                                        <div class="product-rating">
                                            <!-- <?php if ($show_preperation_time): ?>
                                            <?php endif; ?> -->
                                        </div>
                                        <div class="add-to-cart1">
                                            <?php
                                            echo $display_add_to_cart;
                                            echo $display_buy_button;
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>

                            <div class="col-md-3 col-xs-6 product-single" data-cat="<?php echo $value['category_id']; ?>">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="<?= $imgSrc ?>" alt="">
                                        <div class="product-label">
                                            <span class="sale"><?php echo $display_discount; ?></span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="<?php echo $product_link; ?>"><?php echo $value['product_name']; ?></a></h3>
                                        <h4 class="product-price"><?php echo $display_price; ?></h4>
                                        <div class="product-rating">
                                            <?php if ($show_preperation_time): ?>
                                                <span class="badge badge-dark rounded preparation_time2">
                                                    <i class="fa fa-clock"></i> <?php echo $preperationtime; ?>
                                                    <span class="float-right"><?php echo $rating != "" && $rating != 0 ? $rating . " <i class='fa fa-star orange text-small'></i>" : ""; ?></span>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="add-to-cart1">
                                            <?php
                                            echo $display_add_to_cart;
                                            echo $display_buy_button;
                                            ?>
                                        <!--<button class="add-to-cart-btn" style=""><i class="fa fa-plus"></i> add to cart</button>-->
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    endforeach;
                }
                ?>
            </div>
            <?php


            //$cat_count++;
        endforeach;
        ?>

        <!-- Products tab & slick -->

    </div>

    <!-- /row -->
</div>


<!-- /container -->
</div>
<!-- /SECTION -->



<!-- /NEWSLETTER -->
<?php
$this->load->view('footer');
?>

<script>
    $(document).on('click', '.view_all', function () {
        $("#top_4_categpry").css("display", "none");
        $("#all_categpry").css("display", "block");
    });

    $("#products-carousel").owlCarousel({
        items: 4,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        loop: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 3
            }
        }
    });
</script>
