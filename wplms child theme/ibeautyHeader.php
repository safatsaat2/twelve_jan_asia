<?php
//Header File
if (!defined('ABSPATH')) {
  exit;
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php
  wp_head();
  ?>
  <style>
    header.srs_header_pr {
      padding: 0 20px;
    }

    header.srs_header_pr .srs_upperNav {
      max-width: 1360.56px;
      margin: 0 auto;
      padding: 20px 0 29px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header.srs_header_pr .srs_upperNav #logo a {
      width: 135.21px;
      display: inline-block;
    }

    header.srs_header_pr .srs_upperNav .srs_header_logo #logo a img {
      width: 100%;
    }

    header.srs_header_pr .srs_upperNav .srs_input_field {
      max-width: 913px;
      width: 100%;
      padding: 6px;
      border: 1px solid #E0DFFF;
      border-radius: 100px;
    }

    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
    }

    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_select {
      height: 20px;
      margin-left: 25px;
      width: 138px;
      border: none;

      padding-right: 24px;
      background-image: url(https://ibeautymakeup.co.uk/wp-content/uploads/2024/04/Vector-19.png);
      background-position: 87% 50%;
      background-repeat: no-repeat;
      background-size: auto 35%;
      border-right: 1px solid #4F5A61;
      font-family: "Inter", sans-serif;
      font-size: 14px;
      font-weight: 400;
      line-height: 24px;
      text-align: left;
      color: #2B354E;
    }

    /* header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_select option {
      background-color: #5B3671;
      color: #fff;
      font-weight: 500;
    } */

    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input {
      width: 67%;
      border: none;
    }

    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input::placeholder {
      font-family: "Inter", sans-serif;
      font-size: 14px;
      font-weight: 400;
      line-height: 16.94px;
      text-align: left;
      color: #2B354E;
    }

    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_btn {
      background: #5B3671;
      color: #fff;
      border-radius: 100px;
      border: none;
      margin: 0;
      width: 118px;
      text-align: right;
      padding: 12px;
      padding-left: 47px;
      font-family: "Inter", sans-serif;
      font-size: 16px;
      font-weight: 400;
      line-height: 19.36px;
      text-align: left;
      background-image: url("assets/header/img/search.svg");
      background-repeat: no-repeat;
      background-size: auto;
      background-position: 18% 50%;
    }

    header.srs_header_pr .srs_upperNav .srs_login_part {
      display: flex;
      align-items: center;
      gap: 12px;
      position: relative;
    }

    header.srs_header_pr .srs_upperNav .srs_login_part .log_btn {
      padding: 12px 29px;
      border: 1px solid #4F5A61;
      border-radius: 100px;

    }

    header.srs_header_pr .srs_upperNav .srs_login_part .log_btn p {
      font-family: "Inter", sans-serif;
      font-size: 16px;
      font-weight: 600;
      line-height: 19.36px;
      text-align: left;
      color: #2B354E;
      margin: 0;
    }

    header.srs_header_pr .srs_upperNav .srs_login_part .name_btn {
      padding: 12px 16px;
      border: 1px solid #4F5A61;
      border-radius: 100px;

    }

    header.srs_header_pr .srs_upperNav .srs_login_part .name_btn .smallimg {
      display: inline-block !important;
    }

    header.srs_header_pr .srs_upperNav .srs_login_part .name_btn p {
      font-family: "Inter", sans-serif;
      font-size: 16px;
      font-weight: 600;
      line-height: 19.36px;
      text-align: left;
      color: #2B354E;
      margin: 0;
    }

    header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn {
      padding: 12px 29px;
      border: 1px solid #4F5A61;
      background-color: #1C1D1F;
      border-radius: 100px;

    }

    header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn p {
      font-family: "Inter", sans-serif;
      font-size: 16px;
      font-weight: 600;
      line-height: 19.36px;
      text-align: left;
      color: #fff;
      margin: 0;
    }

    @media (max-width:1300px) {
      header.srs_header_pr .srs_upperNav .srs_input_field {
        max-width: 613px;
        width: 80%;
      }

      header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_select {
        margin-left: 0;
        font-size: 12px;
      }

      header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input::placeholder {
        font-size: 12px;
      }

      header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_btn {
        font-size: 12px;
      }
    }

    @media (max-width:1024px) {
      header.srs_header_pr .srs_upperNav #logo a {
        width: 100.21px;
        display: inline-block;
      }

      header.srs_header_pr .srs_upperNav .srs_login_part .log_btn p {
        font-size: 12px;
      }

      header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn p {
        font-size: 12px;
      }

      header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn {
        padding: 8px 20px;
      }

      header.srs_header_pr .srs_upperNav .srs_login_part .log_btn {
        padding: 8px 20px;
      }
    }

    @media (max-width:890px) {
      header.srs_header_pr .srs_upperNav .srs_input_field {
        max-width: 450px;
      }
    }

    header.srs_header_pr nav.srs_lower_nav {
      float: none;
      max-width: 1257px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-bottom:23px;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_learners_insight .srs_learners_btn {
      display: flex;
      align-items: center;
      padding: 10px 11px;
      border: 1px solid #E0DFFF;
      background: #F8F8F8;
      border-radius: 100px;
      gap: 3px
    }

    header.srs_header_pr nav.srs_lower_nav .srs_learners_insight .srs_learners_btn p {
      margin: 0;
      color: #64748B;
      font-family: "Inter", sans-serif;
      font-size: 14px;
      font-weight: 500;
      line-height: 24px;
      text-align: left;

    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul {
      display: flex;
      align-items: center;
      gap: 24px
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul>li {
      padding: 10px 0;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul li a {
      font-family: "Inter", sans-serif;
      font-size: 15px;
      font-weight: 500;
      line-height: 18.15px;
      text-align: left;
      color:
        #2B354E;
      padding: 10px 0;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul li:hover>a {
      text-decoration: underline;
      color: #5B3671 !important;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul li ul {
      width: 250px;
      border-radius: 10px;
      box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      padding: 10px;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul li ul li {
      border: none;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav div>ul li ul li:hover>a {
      text-decoration: underline;
      color: #5B3671 !important;
      opacity: 1;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav .menu-item {
      position: relative;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_items_nav .menu-item:hover ul {
      display: block;
      opacity: 1;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_cart_sec {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    header.srs_header_pr nav.srs_lower_nav .srs_cart_sec .srs_line {
      width: 1px;
      height: 19px;
      background: #2B354E;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item a {
      font-size: 16px !important;
      color: #2d3748 !important;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item .remove {
      color: #ff0000 !important;
    }

    @media (max-width:1280px) {
      header.srs_header_pr .woocart {
        width: 300px;
        background: #fff;

      }
    }


    header.srs_header_pr .woocart .cart_list.product_list_widget {
      padding: 0;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item {
      background: #fff !Important;
      box-shadow: 2px 2px 6.3px 0px #0000001F;
      border-radius: 18px;
      padding: 10px;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item .remove {
      border: 1px solid #FF0000;
      border-radius: 50%;
      padding: 2px;
      line-height: 8px;
      width: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-left: auto;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item a {
      font-family: "Poppins", sans-serif;
      font-size: 15.78px;
      font-weight: 500;
      line-height: 23.67px;
      text-align: left;
      color: #2D3748;
      display: flex;
      align-items: center;
      gap: 9px;
      overflow: hidden;

    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item a img {
      width: 93px;
      border-radius: 7px;
      margin: 0 !important;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item span {
      color: #5b3671 !important;
      font-family: "Poppins", sans-serif !important;
      font-size: 16px !important;
      font-weight: 500 !important;
      line-height: 24px !important;
      text-align: left;

    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item>span {
      margin-left: 102px;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget li {
      margin-top: 20px;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget li:first-child {
      margin-top: 0px;
    }

    nav .menu-item-has-children:hover>a:before,
    headerheader.srs_header_pr .vbpcart.active:after {
      display: none;
    }

    header.srs_header_pr .woocart .total {
      border: none;
      padding: 0;
      margin: 20px 0px 35px;
    }

    header.srs_header_pr .woocart .total strong {
      font-family: "Poppins", sans-serif !important;
      font-size: 15.78px !important;
      font-weight: 700 !important;
      line-height: 23.67px !important;
      text-align: left !important;
      color: #5b3671;
    }

    header.srs_header_pr .woocart span.woocommerce-Price-amount.amount,
    header.srs_header_pr .woocart span.woocommerce-Price-currencySymbol {
      font-family: "Poppins", sans-serif !important;
      font-size: 15.78px !important;
      font-weight: 700 !important;
      line-height: 23.67px !important;
      text-align: left !important;
      color: #5b3671 !important;
    }

    header.srs_header_pr .woocart .buttons .button {
      padding: 12px 10px;
      border: 1px solid #5b3671 !important;
      border-radius: 10px;
      font-family: "Poppins", sans-serif !important;
      font-size: 15px !important;
      font-weight: 700 !important;
      line-height: 22.5px !important;
      text-align: center !important;
      color: #5b3671 !important;
      background: #fff;
      margin: 0 !important;

    }

    header.srs_header_pr .woocart {
      background: #fff;
      border: 1px solid #5b3671;
      border-radius: 10px;
      padding: 10px;
      position: absolute;
      right: 0;
      top:40px;
      width: 300px;
      display: none;
    }

    header.srs_header_pr .woocart.active {
      display: block;
    }

    header.srs_header_pr .srs_cart {
      position: relative;

    }
    header.srs_header_pr .srs_cart .smallimg{
      cursor: pointer;
    }
    @media (max-width:1100px){
      header.srs_header_pr .srs_cart .smallimg{
      display: block !important;
    }
    }
    header.srs_header_pr .srs_cart .srs_cart_icon{
      display: flex;
      align-items: center;
      gap: 4px;
    }
    header.srs_header_pr .srs_cart .srs_cart_icon p{
      font-family: "Inter", sans-serif;
font-size: 14px;
font-weight: 400;
line-height: 16.94px;
text-align: left;
color:#383838;
margin: 0;
    }

    header.srs_header_pr .woocart .buttons {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header.srs_header_pr .woocart .buttons .button.checkout {
      padding: 12px 10px;
      background: #5b3671 !important;
      border-radius: 10px;
      color: #fff !important;
    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item a {
      font-family: "Inter", sans-serif !important;

    }

    header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item span {
      font-family: "Inter", sans-serif !important;
    }

    header.srs_header_pr .woocart .buttons .button {
      font-family: "Inter", sans-serif !important;
    }

    header.srs_header_pr .woocart .widget_shopping_cart_content::-webkit-scrollbar {
      width: 4px;

    }

    header.srs_header_pr .woocart .widget_shopping_cart_content::-webkit-scrollbar-thumb {
      background: #5b3671;
      border-radius: 10px;
    }

    header.srs_header_pr .smallimg img {
      border-radius: 0;
    }

    header.srs_header_pr .woocart .srs_cart {
      list-style: none !important;
    }

    header.srs_header_pr .smallimg em {
      background: #5b3671;
      color: #fff;
      border-radius: 50%;
      padding: 0 2px;
      font-size: 10px;
      position: absolute;
      top: 0;
      left: -2px;
    }
    @media (max-width:1100px){
header.srs_header_pr .srs_items_nav {
    position:fixed;
    right:0;
    background:#fff;
    z-index:9;
    height:100vh;
    top:0;
    padding: 20px;
    padding-top:100px;
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    transform:translateX(100%);
    transition: all .2s linear;
}
header.srs_header_pr nav.srs_lower_nav .srs_items_nav div > ul{
flex-direction:column;
    align-items: start;
    gap:10px;
}
header.srs_header_pr nav.srs_lower_nav .srs_items_nav div > ul li ul{box-shadow: none;
                                                                     position:relative;
                                                                     width: auto;
                                                                     padding:10px 0;
                                                                     border: 0;}
header.srs_header_pr nav.srs_lower_nav .srs_items_nav div > ul li a{
padding:5px 0;
}
}

@media (max-width:767px){
header.srs_header_pr .srs_upperNav .srs_input_field{
    display:none;
}
    header.srs_header_pr nav.srs_lower_nav .srs_learners_insight .srs_learners_btn p{
font-size:10px;}
}
@media (min-width:1101px){
header.srs_header_pr nav.srs_lower_nav .srs_cart_sec .srs_hamburg{
display:none;
cursor: pointer;
}
 header.srs_header_pr nav.srs_lower_nav .srs_cart_sec  .srs_line.hide {
    display:none;
}
}
@media (max-width:1100px){
header.srs_header_pr nav.srs_lower_nav .srs_cart_sec  .srs_line.hide{
    width:1px;
    display:block !important;
}}
header.srs_header_pr .woocart .cart_list.product_list_widget{
    max-height: 400px;
    overflow-y: scroll;
    padding: 5px;
    padding-right: 10px;
}
 header.srs_header_pr .woocart .cart_list.product_list_widget::-webkit-scrollbar {
    width: 13px;
    
}
 header.srs_header_pr .woocart .cart_list.product_list_widget::-webkit-scrollbar-thumb {
    width: 10px;
    border: 2px solid #5b3671;
    background: rgb(255, 255, 255);
    border-radius: 10px;
}
 header.srs_header_pr .woocart .cart_list.product_list_widget::-webkit-scrollbar-track {
    background-color: #5b3671;
    border-radius: 10px;
}
header.srs_header_pr .woocart .widget_shopping_cart_content{
    max-height:initial;
    padding: 35px 0px 35px 10px !important;
}
header.srs_header_pr nav.srs_lower_nav .srs_items_nav.active{
  transform: translateX(0);
}
.srs_items_nav .srs_cross{
    display: none;
}


@media (max-width:1100px){
    
.srs_items_nav .srs_cross{
    display:block;
    position:absolute;
    top: 60px;
    right:20px;
    cursor: pointer;
}
}
@media (max-width:767px){
    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_select{
        display: none;
    }
    header.srs_header_pr .srs_upperNav .srs_input_field{
        display:block;
        border-radius:10px;
    }
    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_btn{
        width:30px;
        padding:6px 10px;
        padding-left:25px;
        border-radius:10px;
        background-size: 40%;
        background-position: 50%;
        font-size:0px;
    }
    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input{
        width:100% !important;
    }
    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form{
        gap:0;
    }
    header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input::placeholder{
    font-size:9px;
    }
    header.srs_header_pr .srs_upperNav{
        gap:20px;
    }
    header.srs_header_pr .woocart{
    right:-40px;
    }
}
@media (max-width:767px){
    header.srs_header_pr .srs_upperNav .srs_input_field{
max-width:150px
}
header.srs_header_pr .srs_upperNav .srs_login_part{
    gap:4px;
}
header.srs_header_pr .srs_upperNav .srs_login_part .log_btn{
padding:6px;
    border-radius:10px
}
header.srs_header_pr .srs_upperNav .srs_login_part .log_btn p{
    font-size:9px
}
header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn{
padding:6px;
    border-radius:10px
}
header.srs_header_pr .srs_upperNav .srs_login_part .sign_btn p{
    font-size:9px
}
}
@media (max-width:420px){
    header.srs_header_pr{
padding:0 5px;
}
    header.srs_header_pr .srs_upperNav{
        gap:5px;
    }
}
@media (max-width:767px){
  header.srs_header_pr .srs_upperNav .srs_input_field{
border-radius:100px;
    padding:0;
}
header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_input{
background: transparent;
    padding-left: 12px;
    font-size: 10px;
}
header.srs_header_pr .srs_upperNav .srs_input_field .srs_input_form .srs_btn{
    border-radius:100px;
}
}
header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item .remove{
    width:12px;
    height:12px;
    font-size: 11px !important;
    padding: 0 !important;
    padding-bottom:2px !important;
    line-height: 0px !important;
    align-items: center;
    justify-content: center;
}
header.srs_header_pr .woocart .cart_list.product_list_widget .mini_cart_item a{
    font-size: 13px !important;
    line-height: 16px;
}
header.srs_header_pr .srs_overlay.active{
  display: block;
}
header.srs_header_pr .srs_overlay{
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  background: #000;
  opacity: .5;
  top:0;
  left: 0;
}
  </style>
</head>

<body <?php body_class(); ?>>
  <div id="global" class="global">
    <?php
    get_template_part('mobile', 'sidebar');
    ?>
    <div class="pusher">
      <?php
      $fix = vibe_get_option('header_fix');
      ?>
      <header class="srs_header_pr">
    <div class="srs_upperNav">
        <div class="srs_header_logo">
            <?php

            if (is_home()) {
                echo '<h1 id="logo">';
            } else {
                echo '<h2 id="logo">';
            }

            $url = apply_filters('wplms_logo_url', VIBE_URL . '/assets/images/logo.png', 'header');
            if (!empty($url)) {
            ?>

                <a class="logo" href="<?php echo vibe_site_url('', 'logo'); ?>"><img src="<?php echo vibe_sanitizer($url, 'url'); ?>" alt="<?php echo get_bloginfo('name'); ?>" /></a>
            <?php

            }
            if (is_home()) {
                echo '</h1>';
            } else {
                echo '</h2>';
            } ?>
        </div>
    <!-- <select onchange="redirectToPage(this)" class="srs_select" name="category">
    <option value="">All Categories</option>
    <?php
    $taxonomy = 'course-cat';
    $categories = get_terms(array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ));

    foreach ($categories as $category) {
        $category_link = get_term_link($category); // Get the link to the category archive
        $selected = (isset($_GET['category']) && $_GET['category'] === $category->slug) ? 'selected' : '';
        echo '<option value="' . esc_url($category_link) . '" ' . $selected . '>' . $category->name . '</option>';
    }
    ?>
</select> -->
<nav class="srs_upper_nav">
    
            <a id="srs_all_courses" href="#">All Categories</a>
            <ul  class="srs_select sub-menu">
                <?php
                $taxonomy = 'course-cat';
                $categories = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'hide_empty' => false,
                ));

                foreach ($categories as $category) {
                    $category_link = get_term_link($category); // Get the link to the category archive
                    $selected = (isset($_GET['category']) && $_GET['category'] === $category->slug) ? 'selected' : '';
                    echo '<li><a href="' . esc_url($category_link) . '" ' . $selected . '>' . $category->name . '</a></li>';
                }
                ?>
            </ul>
</nav>

        <div class="srs_input_field">
            <form class="srs_input_form" method="GET" action="<?php echo esc_url(home_url('/')); ?>">

                <input placeholder="Find Your Courses...." type="text" class="srs_input" name="s">
                <input type="hidden" name="post_type" value="course" />
                <input style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/assets/header/img/search.svg'; ?>);" class="srs_btn" type="submit" value="Search">
            </form>

            <?php
            if (isset($_GET['s']) || isset($_GET['category'])) {
                $search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
                $category_slug = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';

                $args = array(
                    'post_type' => 'post',
                    's' => $search_query,
                );

                if (!empty($category_slug)) {
                    $args['tax_query'] = array(
                        array(
                            'taxonomy' => 'course-cat',
                            'field' => 'slug',
                            'terms' => $category_slug,
                        ),
                    );
                }

                $search_query = new WP_Query($args);

                if ($search_query->have_posts()) {
                    while ($search_query->have_posts()) {
                        $result =  $search_query->the_post();
                        // Display your search results here
                        echo $result;
                    }
                } else {
                    // echo 'No results found.';
                }
                wp_reset_postdata();
            }
            ?>
        </div>
        <ul class="srs_login_part">

            <?php
            $show_cart = apply_filters('wplms_header_show_cart', 1);
            if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
            ?>

                <li class="name_btn smallimg vbplogin"><a href="<?php bp_loggedin_user_link(); ?>" class="smallimg vbplogin">
                        <span>
                    
                            <p class="srs_full_name"><?php bp_loggedin_user_fullname(); ?></p>
                            <p class="srs_two_name"></p>
                        </span></a></li>


            <?php
            else :
            ?>

                <li onclick="opentab('tab1')" class=""><a href="#login" rel="nofollow" class="log_btn vbplogin"><span>
                            <p><?php _e('Login', 'vibe'); ?></p>
                        </span></a></li>
                <li onclick="opentab('tab2')" class=""><a href="#signup" rel="nofollow" class="sign_btn vbplogin"><span>
                            <p><?php _e('Sign Up', 'vibe'); ?></p>
                        </span></a></li>

            <?php
            endif;
            ?>
            <?php
            $style = vibe_get_login_style();
            if (empty($style)) {
                $style = 'default_login';
            }
            ?>
            <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style, 'text'); ?>">
                <?php
                vibe_include_template("login/$style.php");
                ?>
            </div>
        </ul>

    </div>


    <nav class="srs_lower_nav <?php if (isset($fix) && $fix) {
                                    echo 'fix';
                                } ?>">
        <div class="srs_lower_nav_items_menu">
        <div class="srs_learners_insight">
            <a href="https://ibeautymakeup.co.uk/top-reviews/" class="srs_learners_btn">
                <p>Learner's Insights</p>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/star.svg'; ?>" alt="">
            </a>
        </div>
        <div class="srs_items_nav">
            <img class="srs_cross" src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/cross.png'; ?>" alt="">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'srstopmenu',
                    'menu_id' => 'topmenucontainer',
                    'menu_class' => 'list-inline text-center text-[#fff] srs_nav_header_pr'
                )
            );
            ?>
        </div>
        <div class="srs_cart_sec">
            <a class="srs_phone" href="tel:02039238705">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/phone.png'; ?>" alt="">
            </a>
            <div class="srs_line">

            </div>
            <!-- <a class="srs_phone" href="#">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/love.svg'; ?>" alt="">
            </a>
            <div class="srs_line">

            </div> -->
            <?php
            $show_cart = apply_filters('wplms_header_show_cart', 1);
            if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
                if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                    global $woocommerce;
            ?>
                    <div class="srs_cart"><a class="smallimg vbpcart"><span class="srs_cart_icon">
                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/shop.svg'; ?>" />
                                <?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?>
                                <?php

                                global $woocommerce;


                                $amount2 = floatval(preg_replace('#[^\d.]#', '', $woocommerce->cart->get_cart_total()));

                                ?>
                                <p>
                                    £<?php echo $amount2; ?>
                                </p>
                            </span></a>
                        <div class="woocart">
                            <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
                        </div>
                    </div>
                <?php
                }
                ?>
            <?php
            else :
            ?>
                <?php
                if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                    global $woocommerce;
                ?>
                    <div class="srs_cart"><a class=" vbpcart"><span class="srs_cart_icon"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/shop.svg'; ?>" /> <?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?><?php

                                                                                                                                                                                                                                                                                                                    global $woocommerce;


                                                                                                                                                                                                                                                                                                                    $amount2 = floatval(preg_replace('#[^\d.]#', '', $woocommerce->cart->get_cart_total()));

                                                                                                                                                                                                                                                                                                                    ?>
                                <p>
                                    £<?php echo $amount2; ?>
                                </p>
                            </span></a>
                        <div class="woocart"><?php woocommerce_mini_cart(); ?></div>
                    </div>
                <?php
                }
                ?>

            <?php
            endif;
            ?>
            <?php
            $style = vibe_get_login_style();
            if (empty($style)) {
                $style = 'default_login';
            }
            ?>
            <div id="vibe_bp_login" class="<?php echo vibe_sanitizer($style, 'text'); ?>">
                <?php
                vibe_include_template("login/$style.php");
                ?>
            </div>
            <div class="srs_line hide">

            </div>
            <a class="srs_hamburg">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/header/img/hamburg.svg'; ?>" alt="">
            </a>
        </div>
        </div>

    </nav>

    <div class="srs_overlay">

    </div>

</header>

      <script>
        const srsHamBtn =document.querySelector(".srs_hamburg");
        const srsNavItems =document.querySelector(".srs_items_nav");
        const srsCross =document.querySelector(".srs_cross");
        const srsOverlay =document.querySelector(".srs_overlay");
            srsHamBtn.addEventListener("click", () =>{
              srsNavItems.classList.add("active");
              srsOverlay.classList.add("active");
            })
            srsCross.addEventListener("click", () =>{
              srsNavItems.classList.remove("active");
              srsOverlay.classList.remove("active");

            })
            srsOverlay.addEventListener("click", () =>{
              srsNavItems.classList.remove("active");
              srsOverlay.classList.remove("active");
            })
      </script>