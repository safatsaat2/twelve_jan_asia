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
    .srs_header_pr {
      background-color: transparent !important;
      position: fixed;

    }

    .srs_header_pr.fixed {
      position: fixed;
      width: 100%;
    }

    .srs_header_pr div.srs_header_child_pr {
      position: relative;
      display: flex;
      padding: 24px 48px;
      justify-content: space-between;
      align-items: center;
      background: rgba(255, 255, 255, 0.25);
      transition: all .3s linear;

    }

    .srs_header_pr.fixed div.srs_header_child_pr {
      background: #fff;
    }

    .srs_header_pr .srs_logo_sec a {
      position: absolute;
      background: #fff;
      top: 32px;
      padding: 8px;
      width: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .srs_header_pr .srs_logo_sec h2#logo img {
      max-width: 184px;
      transition: all .3s linear;
      max-height: 200px;
        height: 100%;
    }

    .srs_header_pr.fixed .srs_logo_sec a img {
      max-height: 48px !important;
      margin: 0 auto;
      height: 48px;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr {
      display: flex;
      align-items: center;
      gap: 32px;
      padding: 0;
      list-style: none;
      margin: 0;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a {
      color: #1b1b1b;
      text-decoration: none;
      font-size: 16px;
      line-height: 24px;
      font-family: "Lato", sans-serif;
      text-transform: uppercase;
      white-space: nowrap;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr {
      position: relative;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr .srs_sub_items_pr li {
      padding: 4px 0;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr.active a svg {
      transform: rotate(180deg);
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a svg {
      transform: rotate(0deg);
      transition: all .3s linear;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr .srs_sub_items_pr {
      display: none;
    }

    .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr.active .srs_sub_items_pr {
      display: block;
      padding: 0;
      list-style: none;
      margin: 0;
      position: absolute;
      background-color: #fff;
      padding: 16px;
      top: 32px;
      right: 0;
      border-radius: 4px;
      box-shadow: 0 3px 6px 3px rgba(0, 0, 0, 0.24);
    }

    .srs_cross {
      display: none;
    }

    .srs_hamburg {
      display: none;
    }

    @media (max-width: 1400px) {
      .srs_header_pr .srs_nav_pr .srs_items_pr {
        gap: 20px;
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a {
        font-size: 14px;
      }
    }

    @media (max-width: 1130px) {
      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a {
        font-size: 12px;
      }
    }

    @media(max-width:1024px) {
      .srs_header_pr .srs_logo_sec a {
        top: 12px;
        width: 80px;
        height: 80px;
        padding: 0;
      }

      .srs_header_pr .srs_logo_sec a img {
        width: 100%;
        padding: 8px;
      }
    }

    @media (max-width: 1024px) {
      .srs_header_pr div.srs_header_child_pr nav.srs_nav_pr {
        position: absolute;
        width: 100%;
        background: #161616;
        height: 100vh;
        top: 0;
        left: 0;
        padding: 56px 48px;
        transform: translateX(-100%);
        transition: all .3s linear;
      }

      .srs_header_pr div.srs_header_child_pr nav.srs_nav_pr.active {
        transform: translateX(0%);
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr {
        flex-direction: column;
        align-items: start;
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr {
        width: 100%;
        border-bottom: 1px solid rgba(76, 76, 76, 0.5);
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a {
        width: 100%;
        color: rgb(164, 164, 164);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-left: 16px;
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr.active .srs_sub_items_pr {
        position: relative;
        background-color: transparent;
        top: 0;
        padding: 0;
        width: 100%;
        box-shadow: none;
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr {
        gap: 0;
      }

      .srs_header_pr .srs_nav_pr .srs_items_pr .srs_item_pr a.srs_item {
        font-size: 16px;
        padding: 16px 0;
        color: #fff;
        padding-left: 0;
      }

      .srs_cross {
        padding: 8px;
        width: 40px;
        margin-left: auto;
        display: block;
      }

      .srs_hamburg {
        display: block;
      }

      .srs_header_pr.fixed .srs_logo_sec a img {
        max-height: 200px;
      }
    }
  </style>
</head>

<body <?php body_class(); ?>>
  <div id="global" class="global">
    <?php
    get_template_part('mobile', 'sidebar');
    ?>
    <div class="pusher">
      <header class="srs_header_pr">
        <div class="srs_header_child_pr">
          <div class="srs_logo_sec">

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
          <nav class="srs_nav_pr">
            <div class="srs_cross">
              <svg viewBox="0 0 24 24" fill="white" width="28px" height="28px" data-ux="CloseIcon" data-edit-interactive="true" data-close="true" class="x-el x-el-svg c1-1 c1-2 c1-17 c1-37 c1-1o c1-4g c1-4h c1-4i c1-4j c1-3g c1-6d c1-6e c1-1k c1-6f c1-6g c1-6h c1-b c1-6i c1-6j c1-6k c1-6l c1-6m">
                <path fill-rule="evenodd" d="M19.245 4.313a1.065 1.065 0 0 0-1.508 0L11.78 10.27 5.82 4.313A1.065 1.065 0 1 0 4.312 5.82l5.958 5.958-5.958 5.959a1.067 1.067 0 0 0 1.508 1.508l5.959-5.958 5.958 5.958a1.065 1.065 0 1 0 1.508-1.508l-5.958-5.959 5.958-5.958a1.065 1.065 0 0 0 0-1.508"></path>
              </svg>
            </div>
            <ul class="srs_items_pr">
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> Home</a>
              </li>
              <li class="srs_item_pr ">
                <a href="#" class="srs_item"> Online Training <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-20 c2-21 c2-22 c2-23 c2-m c2-24 c2-1p c2-3 c2-1s c2-1w c2-1x c2-1y c2-1z">
                    <path fill-rule="evenodd" d="M19.774 7.86c.294-.335.04-.839-.423-.84L4.538 7c-.447-.001-.698.48-.425.81l7.204 8.693a.56.56 0 0 0 .836.011l7.621-8.654z"></path>
                  </svg></a>
                <ul class="srs_sub_items_pr">
                  <li class="srs_sub_item">
                    <a class="srs_sub_link" href="#">
                      BUSINESS SKILLS
                    </a>
                  </li>
                  <li class="srs_sub_item">
                    <a class="srs_sub_link" href="#">
                      HEALTH & SAFETY
                    </a>
                  </li>
                  <li class="srs_sub_item">
                    <a class="srs_sub_link" href="#">
                      HEALTH & SOCIAL CARE
                    </a>
                  </li>
                </ul>
              </li>
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> Consultancy Services</a>
              </li>
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> Additional Courses</a>
              </li>
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> Blog</a>
              </li>
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> Contact Us</a>
              </li>
              <li class="srs_item_pr">
                <a href="#" class="srs_item"> More <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16" data-ux="Icon" class="x-el x-el-svg c2-1 c2-2 c2-20 c2-21 c2-22 c2-23 c2-m c2-24 c2-1p c2-3 c2-1s c2-1w c2-1x c2-1y c2-1z">
                    <path fill-rule="evenodd" d="M19.774 7.86c.294-.335.04-.839-.423-.84L4.538 7c-.447-.001-.698.48-.425.81l7.204 8.693a.56.56 0 0 0 .836.011l7.621-8.654z"></path>
                  </svg></a>
                <ul class="srs_sub_items_pr">
                  <li class="srs_sub_item">
                    <a class="srs_sub_link" href="#">
                      TRAINING WRITING SERVICE
                    </a>
                  </li>
                  <li class="srs_sub_item">
                    <a class="srs_sub_link" href="#">
                      HOME SCHOOLING TUTORS
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <div class="srs_hamburg">
            <svg viewBox="0 0 24 24" fill="currentColor" width="40px" height="40px" data-ux="IconHamburger" class="x-el x-el-svg c2-1 c2-2 c2-1x c2-1y c2-1z c2-20 c2-21 c2-22 c2-23 c2-3 c2-4 c2-5 c2-6 c2-7 c2-8">
              <path fill-rule="evenodd" d="M19 8H5a1 1 0 1 1 0-2h14a1 1 0 0 1 0 2zm0 5.097H5a1 1 0 1 1 0-2h14a1 1 0 1 1 0 2zm0 5.25H5a1 1 0 1 1 0-2h14a1 1 0 1 1 0 2z"></path>
            </svg>
          </div>
        </div>
      </header>

      <script>
        document.querySelectorAll('.srs_item_pr').forEach(item => {
          item.addEventListener('click', function(e) {
            e.preventDefault();
            item.classList.toggle('active');
          });
        });
        window.addEventListener('scroll', function() {
          const srsHeader = document.querySelector(".srs_header_pr");
          var scrollTop = window.scrollY;

          if (scrollTop > 60) { // Change 100 to the scroll position where you want to add the class
            srsHeader.classList.add('fixed');
          } else {
            srsHeader.classList.remove('fixed');
          }
        });
        const srsHamburg = document.querySelector(".srs_hamburg")
        const srsCross = document.querySelector(".srs_cross")
        const srsNavbar = document.querySelector(".srs_nav_pr")
        srsHamburg.addEventListener("click", () => {
          srsNavbar.classList.toggle("active");
        });
        srsCross.addEventListener("click", () => {
          srsNavbar.classList.toggle("active");
        });
      </script>