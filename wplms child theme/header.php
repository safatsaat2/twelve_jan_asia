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

</head>

<body <?php body_class(); ?>>
  <div id="global" class="global">
    <?php
    get_template_part('mobile', 'sidebar');
    ?>
    <div class="pusher">
    <style>
         

  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  ul
  li
  a {
  font-family: "Plus Jakarta Sans", sans-serif;
  display: -webkit-box !important;
  text-overflow: ellipsis;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  overflow: hidden;
  line-height: 30px !important;
}

 

 .srs_brand_sec {
    max-width: 802px;
    padding: 30px 0 35px 0;
  display: flex;
  align-items: center;
  gap: 16px;
}
.srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items > li:hover > a{
        background: #FE7E41;
    color: #fff;
}

 /* .srs_brand_sec img:first-child {
  max-width: 244px;
}

 .srs_brand_sec img:last-child {
  max-width: 126px;
} */
 .srs_brand_sec img{
    box-shadow: 0px 2px 5px 0px #0000000A;

 }

/* mega menu  */
 .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr {
  position: relative;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_heading {
  font-family: "IBM Plex Sans", sans-serif;
  font-size: 21px;
  font-weight: 700;
  line-height: 25px;
  letter-spacing: 0em;
  text-align: left;
  color: #2b354e;
  padding-bottom: 21px;
  margin: 0;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items {
  max-width: 257px;
  display: flex;
  flex-direction: column;
  gap: 6px;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  .srs_mega_menu_item {
  display: block !important;
  font-family: "Plus Jakarta Sans", sans-serif;
  font-size: 15px;
  font-weight: 500;
  line-height: 18px;
  letter-spacing: 0em;
  text-align: left;
  color: #2b354e;
  padding: 14px 17px;
  transition: all 0.3s linear;
  box-shadow: 0px 2px 5px 0px #0000000A;
  border-radius: 23px;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  .srs_mega_menu_item:hover {
  background: 
  #FE7E41;
  color: #fff;
}

 .srs_mega-menu_pr {
  position: absolute;
  left: 0;
  max-width: 870px;
  width: 100%;
  left: 50%;
  transform: translateX(-50%);
  margin: 0 auto;
  top: 75px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.4s ease-out 0s, visibility 0.1s linear 0s;
  opacity: 0;
    visibility: hidden;
  pointer-events: none;
  z-index: 99;
}
.srs_mega-menu_pr.active{
  opacity: 1;
    visibility: visible;
    pointer-events: auto;
}
/* .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items li ul{
  grid-template-rows: auto !important;
} */
@media (max-width:767px){
  .srs_brand_sec{
    gap: 7px;
    justify-content: space-between;
    max-width: 335px;
    margin: 0 auto;
    padding: 20px 0 0px 0;
  }
  .srs_brand_sec img{
    max-width: 61px;
  }
  .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_heading{
  font-size:15px;
    padding-bottom: 7px;
  }
  .srs_mega-menu_pr .srs_content{
    padding: 13px 20px !important;
  }
  .srs_mega-menu_pr{
    z-index:99;
  }
  .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items{
    max-width: 143.64px;
      overflow-y: scroll;
  }
    .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items li ul{
      margin-left:143.64px !important;
      grid-template-columns: repeat(1, minmax(0, 1fr)) !important;

      height: 310px;
      overflow-y: scroll;
    }
    .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items .srs_mega_menu_item{
    padding: 6px 10px;
        font-size: 10px;
        line-height: auto
    }
    .srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr .srs_mega_menu_items li ul li a{
        font-size:9px !important;
        line-height: 20px !important;
        padding:0 !important;
    }
}

  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  ul {
    background: #fff;
  position: absolute;
  display: none;
  column-gap: 24px;
  padding-left: 23px;
  margin-left: 257px;
  top: 0;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  grid-template-rows: repeat(7, minmax(0, 1fr));
  transition: all 0.2s linear;
  z-index: 0;
  height: 100%;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  a {
  position: static;
  z-index: 1;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li:hover
  > ul {
  display: grid;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  ul
  li
  a {
  display: block;
  font-family: "Plus Jakarta Sans", sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 17px;
  letter-spacing: 0em;
  text-align: left !important;
  padding: 8px 27px;
  color: #50617B;
  border-bottom: 1px solid #d9d9d9;
}

 .srs_mega-menu_pr .srs_content {
  background: #fdfdfd;
  padding: 35px 35px 0 35px;
  width: 100%;
  box-shadow: 0px 2px 20px 0px #00000026;
  border-radius: 10px;
}


 .srs_content .col {
  display: flex;
  flex-direction: column;
  line-height: 3rem;
}

 .srs_content .col .img-wrapper {
  display: block;
  position: relative;
  width: 100%;
  height: 20vw;
  overflow: hidden;
}

 .srs_content .col .img {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

 .srs_content .col img {
  width: 100%;
  transition: transform 0.3s ease-in-out;
}

 .srs_content .col .img-wrapper:hover img {
  transform: scale(1.1);
}

 .srs_content .col .menu-title {
  color: #ff5722;
  font-size: 1.2rem;
  line-height: 3rem;
  font-weight: bold;
}

 .srs_content .col p {
  line-height: 1.2rem;
  margin-top: 5px;
  color: #112f48;
}

 .srs_content .col .mega-links {
  border-left: 1px solid #3c3c3c;
}

 .srs_content .col .read-more {
  font-size: 16px;
  display: flex;
  padding-top: 1rem;
  color: #03a9f4;
  transition: color 0.3s ease;
  justify-srs_content: flex-end;
  padding-right: 10px;
}

 .col .mega-links li,
 .col .mega-links li a {
  padding: 0 1rem;
}

 .menu-items li:hover .srs_mega-menu_pr {
  opacity: 1;
  visibility: visible;
}

 .srs_content .col .read-more:hover {
  color: #ff5722;
}


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  ul
  li
  a:hover {
  color: 
#FE7E41;
}

 


  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li.srs_first_active
  ul {
  display: grid;
}

  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li.srs_first_active
  > a {
  background: 
#FE7E41;
  color: white;
}
 
@media (max-width: 767px){
  .srs_mega-menu_pr
  .srs_content
  .srs_mega_menu_item_pr
  .srs_mega_menu_items
  li
  ul{
    overflow: scroll;
    grid-template-rows: auto;
  }
}

.srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr ul{
    list-style: none;
    padding: 0;
}
.srs_mega-menu_pr .srs_content .srs_mega_menu_item_pr ul li a{
    text-decoration: none;
}





    </style>

      <header class="srs_header_pr">
        <div class="srs_logo_wrapper">
          <!-- Dynamically logo coming -->
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

        <!-- Course Search start -->
        <div class="srs_search_form">
          <form method="GET" action="<?php echo esc_url(home_url('/')); ?>" id="header-search-form">
            <input type="text" name="s" placeholder="Search for your courses..." class="autocomplete_field" id="autoCompleteOne" value="" autocomplete="off" />
            <input type="hidden" name="post_type" value="course" />
            <button type="submit" id="search_iconOne" class="" aria-label="Search">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.60421 12.8905C10.6648 12.8905 13.1459 10.4094 13.1459 7.3488C13.1459 4.28822 10.6648 1.80713 7.60421 1.80713C4.54363 1.80713 2.06254 4.28822 2.06254 7.3488C2.06254 10.4094 4.54363 12.8905 7.60421 12.8905Z" stroke="#2B354E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M13.7292 13.4738L12.5625 12.3071" stroke="#2B354E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
              Search
            </button>
          </form>
        </div>
        <!-- Course Search end -->



        <div class="srs_right_side">

          <!-- Nav Items -->
          <nav class="srs_nav_list">
            <div class="srs_cross">
              <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" class="srs_cross" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </div>
            <ul class="srs_items">
              <li class="srs_item srs_only_pc">
                <a href="<?php echo site_url(); ?>/courses/">All Courses
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.38 5.86133L6.18333 9.66466C6.6325 10.1138 7.36749 10.1138 7.81666 9.66466L11.62 5.86133" stroke="#2B354E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
                <!-- sub menu starts -->
                <div class="srs_sub_menu_pr">
                  <ul class="srs_sub_items">
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/personal-development/">Personal Development</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/management/">Management</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/business/">Business</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/health-and-care/">Health and Care</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/design/">Design</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/marketing/">Marketing</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/hr-and-leadership/">HR and Leadership</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/technology/">Technology</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="srs_item srs_only_mobile">
                <a href="#">All Courses
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.38 5.86133L6.18333 9.66466C6.6325 10.1138 7.36749 10.1138 7.81666 9.66466L11.62 5.86133" stroke="#2B354E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
                <!-- sub menu starts -->
                <div class="srs_sub_menu_pr">
                  <ul class="srs_sub_items">
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/personal-development/">Personal Development</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/management/">Management</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/business/">Business</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/health-and-care/">Health and Care</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/design/">Design</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/marketing/">Marketing</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/hr-and-leadership/">HR and Leadership</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/course-cat/technology/">Technology</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="srs_item srs_hot-deals">
                <a href="#">Hot Deal</a>
              </li>
              <li class="srs_item">
                <a href="#">Subscription
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.38 5.86133L6.18333 9.66466C6.6325 10.1138 7.36749 10.1138 7.81666 9.66466L11.62 5.86133" stroke="#2B354E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <span>new</span>
                </a>
                <!-- sub menu starts -->
                <div class="srs_sub_menu_pr">
                  <ul class="srs_sub_items">
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/lifetime-prime-membership/">Lifetime Prime Membership</a>
                    </li>
                    <li class="srs_item">
                      <a href="#">Yearly Subscription</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="srs_item">
                <a href="<?php echo site_url(); ?>/new-business-page/">Team Traning</a>
              </li>
              <li class="srs_item">
                <a href="#">Explore
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.38 5.86133L6.18333 9.66466C6.6325 10.1138 7.36749 10.1138 7.81666 9.66466L11.62 5.86133" stroke="#2B354E" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
                <!-- sub menu starts -->
                <div class="srs_sub_menu_pr">
                  <ul class="srs_sub_items">
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/certificate">Get Certificate</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/bundle/">Career Bundle</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/redeem-voucher/">Redeem Voucher</a>
                    </li>
                    <li class="srs_item">
                      <a href="<?php echo site_url(); ?>/student-id-card/"> Student ID</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <div class="srs_btns_sec">


            <!-- Cart Functionality -->
            <?php
            if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
              global $woocommerce;
            ?>

              <a href="#" class="srs_cart_btn vbpcart ">
                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.9375 15.8281C3.9375 16.7585 4.69462 17.5156 5.625 17.5156C6.55538 17.5156 7.3125 16.7585 7.3125 15.8281C7.3125 14.8977 6.55538 14.1406 5.625 14.1406C4.69462 14.1406 3.9375 14.8977 3.9375 15.8281ZM6.1875 15.8281C6.1875 16.1381 5.93494 16.3906 5.625 16.3906C5.31506 16.3906 5.0625 16.1381 5.0625 15.8281C5.0625 15.5182 5.31506 15.2656 5.625 15.2656C5.93494 15.2656 6.1875 15.5182 6.1875 15.8281Z" fill="black" />
                  <path d="M14.0625 15.8281C14.0625 14.8977 13.3054 14.1406 12.375 14.1406C11.4446 14.1406 10.6875 14.8977 10.6875 15.8281C10.6875 16.7585 11.4446 17.5156 12.375 17.5156C13.3054 17.5156 14.0625 16.7585 14.0625 15.8281ZM11.8125 15.8281C11.8125 15.5182 12.0651 15.2656 12.375 15.2656C12.6849 15.2656 12.9375 15.5182 12.9375 15.8281C12.9375 16.1381 12.6849 16.3906 12.375 16.3906C12.0651 16.3906 11.8125 16.1381 11.8125 15.8281Z" fill="black" />
                  <path d="M2.30625 2.32812C2.376 2.99244 3.15225 10.3657 3.27206 11.5047C3.36262 12.3659 4.08431 13.0156 4.95056 13.0156H13.716C14.5063 13.0156 15.2004 12.4543 15.3664 11.6814L16.7175 5.37631C16.7889 5.04219 16.7068 4.6985 16.4919 4.43356C16.2771 4.16806 15.9581 4.01562 15.6167 4.01562H3.61519L3.37219 1.70713C3.34181 1.42025 3.1005 1.20312 2.8125 1.20312H1.125C0.8145 1.20312 0.5625 1.45513 0.5625 1.76562C0.5625 2.07612 0.8145 2.32812 1.125 2.32812H2.30625ZM15.6167 5.14062L14.2661 11.4457C14.2104 11.7033 13.9792 11.8906 13.7154 11.8906H4.95056C4.66144 11.8906 4.42125 11.6741 4.39088 11.3872L3.73331 5.14062H15.6167Z" fill="black" />
                </svg>
                Cart
                <?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?>
              </a>
              <div class="woocart"><?php woocommerce_mini_cart(); ?></div>

            <?php
            }
            ?>


            <!-- Log in details or buttons -->
            <?php
            $show_cart = apply_filters('wplms_header_show_cart', 1);
            if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
            ?>

              <a href="<?php bp_loggedin_user_link(); ?>" class="srs_profile_name smallimg vbplogin">
                <span>
                  <p id="nameDisplay"><?php bp_loggedin_user_fullname(); ?></p>
                </span></a>
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
            <?php
            else :
            ?>

              <a href="#login" class="srs_log_btn  vbplogin">Log In</a>
              <a href="<?php echo site_url(); ?>/register" class="srs_sign_btn">Sign Up</a>

            <?php
            endif;
            ?>

            <a href="#" class="srs_hamburg"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="srs_hamburg_svg">
                <path d="M20 5.907H4v1.59h16v-1.59ZM20 16.503H4v1.59h16v-1.59ZM20 11.205H4v1.59h16v-1.59Z" fill="currentColor"></path>
              </svg></a>
          </div>
        </div>
        <div class="srs_overlay">

        </div>
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
      </header>
      
        <div class="srs_mega-menu_pr sample">
          <div class="srs_content">
            <div class="srs_mega_menu_item_pr">
              <h4 class="srs_mega_heading">Popular Courses</h4>
              <ul class="srs_mega_menu_items">
              
                <?php
                  $taxonomy = 'course-cat';
                  $terms = get_terms(array(
                    'taxonomy'   => $taxonomy,
                    'hide_empty' => false,
                    'orderby'    => 'count',
                    'order'      => 'DESC',
                    'number'     => 6,
                  ));
                  ?>
                  <?php foreach ($terms as $term) : ?>
                          <li>
                            <a href="<?php echo get_term_link($term); ?>" class="srs_mega_menu_item srs-mobile-check"><?php echo $term->name; ?></a>
                            <ul>
                              <?php
                              $args = array(
                                'post_type'      => 'course',
                                'posts_per_page' => 18,
                                'tax_query'      => array(
                                  array(
                                    'taxonomy' => $taxonomy,
                                    'field'    => 'term_id',
                                    'terms'    => $term->term_id,
                                  ),
                                ),
                              );
                              $courses_query = new WP_Query($args);
                              if ($courses_query->have_posts()) :
                                while ($courses_query->have_posts()) : $courses_query->the_post(); ?>
                                  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                              <?php endwhile;
                                wp_reset_postdata();
                              else :
                                echo '<li>No courses found</li>';
                              endif;
                              ?>
                            </ul>
                          </li>
                        <?php endforeach; ?>
                <li><a href="/all-courses/" class="srs_mega_menu_item">View All Courses</a></li>
              </ul>
            </div>
            <div class="srs_brand_sec">
              <img src="https://nextgenlearning.org.uk/wp-content/uploads/2024/07/Group-1000002620-1.webp" alt="Brand">
              <img src="https://nextgenlearning.org.uk/wp-content/uploads/2024/07/Group-1000002626-2.webp" alt="Brand">
              <img src="https://nextgenlearning.org.uk/wp-content/uploads/2024/07/Group-1000002621.webp" alt="Brand">
              <img src="https://nextgenlearning.org.uk/wp-content/uploads/2024/07/Group-1000004155.webp" alt="Brand">
              <img src="https://nextgenlearning.org.uk/wp-content/uploads/2024/07/Group-1000004155.webp" alt="Brand">

            </div>
          </div>
        </div>
      



      <script>
        addEventListener("DOMContentLoaded", (event) => {
          const srs_btn =document.querySelector('.srs_hot-deals');
          const srs_mega_menu_1 =document.querySelector('.srs_mega-menu_pr');
const srsMenuItems = document.querySelector(".menu-items");
const srsMega_first_item = document.querySelector(".srs_mega_menu_items li");
const srsMega_first_item_link = document.querySelector(".srs_mega_menu_items li a");
const srsMegaSingleItem = document.querySelectorAll('.srs_mega_menu_items li');
const srsBrandSec = document.querySelector('.srs_brand_sec');


if (srs_mega_menu_1) {
    // Function to remove active class
    function removeActiveClass() {
        var activeElements = document.querySelectorAll('.srs_mega-menu_pr.active');

        activeElements.forEach(function(element) {
            element.classList.remove('active');
        });
    }

    // Event listener for clicks outside the mega menu
    document.addEventListener('click', function(event) {
        if (!srs_mega_menu_1.contains(event.target) && !srs_btn.contains(event.target)) {

            removeActiveClass();
        }
    });

    // Prevent the click inside the mega menu from closing it
    srs_mega_menu_1.addEventListener('click', function(event) {
        event.stopPropagation();

    });
} else {
    console.error('Mega menu element not found');
}

srs_btn.addEventListener('mouseover', function(event) {
    event.stopPropagation();
    srs_mega_menu_1.classList.add('active');

});
srs_mega_menu_1.addEventListener('mouseover', function(event) {
    event.stopPropagation();
    srs_mega_menu_1.classList.add('active');

});
srs_mega_menu_1.addEventListener('mouseout', function(event) {
    event.stopPropagation();
    srs_mega_menu_1.classList.remove('active');

});
function isMobile() {
            return window.matchMedia("(max-width: 767px)").matches;
        }

        if (isMobile()) {
            var menuItems = document.querySelectorAll('.srs-mobile-check');
            menuItems.forEach(function(item) {
                item.href = 'javascript:void(0)';
            });
        }
function toggle() {
  // add open class
  srsMenuBtn.classList.toggle("open");
  srsMenuItems.classList.toggle("open");
    
}

window.onkeydown = function (event) {
  const key = event.key; // const {key} = event; in ES6+
  const active = srsMenuItems.classList.contains("open");
  if (key === "Escape" && active) {
    toggle();
  }
};


function srsFirstClassAdd() {
  srsMega_first_item.classList.add("srs_first_active");
}

srsFirstClassAdd();

const srsMegaItemActive = document.querySelector(".srs_first_active");

srsMegaSingleItem.forEach(function(btn) {
  btn.addEventListener("mouseover", () => {
    
    if (srsMegaItemActive) {
      srsMegaItemActive.classList.remove("srs_first_active");

    }
  });

  btn.addEventListener("mouseout", () => {
    const child = btn.querySelector("ul");
    if (child) {
      srsMega_first_item.classList.add("srs_first_active");

    }
  });

 
  btn.addEventListener("mouseenter", () => {
    srsMega_first_item_link.style.backgroundColor = "";
    srsMega_first_item_link.style.color = "";

  });

  if (btn.textContent.trim() === "View All Courses") {
    btn.addEventListener("mouseover", () => {
      const siblingUl = srsMega_first_item_link.nextElementSibling;
      if (siblingUl) {
        siblingUl.style.display = "grid";

      }
    });

    btn.addEventListener("mouseout", () => {
      const siblingUl = srsMega_first_item_link.nextElementSibling;
      if (siblingUl) {
        siblingUl.style.display = "";
      }
    });
  }
});

srsBrandSec.addEventListener("mouseover", () => {
  srsMega_first_item.classList.add("srs_first_active");
  srsMega_first_item_link.style.backgroundColor = "#FE7E41";
  srsMega_first_item_link.style.color = "white";

});

srsBrandSec.addEventListener("mouseout", () => {
  srsMega_first_item.classList.remove("srs_first_active");
  srsMega_first_item_link.style.backgroundColor = "";
  srsMega_first_item_link.style.color = "";

});
        });
        
    </script>


      <script>
        const srsMenuItem = document.querySelectorAll("header.srs_header_pr .srs_right_side .srs_nav_list ul.srs_items li.srs_item");
        const srsHamburg = document.querySelector(".srs_hamburg");
        const srsCross2 = document.querySelector(".srs_cross");
        const srsMenuParent = document.querySelector(".srs_nav_list");
        const srsOverlay = document.querySelector(".srs_overlay");
        srsMenuItem.forEach((item) => {
          item.addEventListener("click", () => {
            item.classList.toggle("active");
          })
        });
        srsCross2.addEventListener("click", () => {
          srsMenuParent.classList.remove("active");
          srsOverlay.classList.remove("active");
        });
        srsOverlay.addEventListener("click", () => {
          srsMenuParent.classList.remove("active");
          srsOverlay.classList.remove("active");
        });
        srsHamburg.addEventListener("click", () => {
          srsMenuParent.classList.add("active");
          srsOverlay.classList.add("active");
        })
      </script>