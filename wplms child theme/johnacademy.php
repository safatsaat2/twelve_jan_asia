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
        .navbar_pr .navbar .menu-items .srs_explore_more a {
            align-items: center;
            gap: 6px;
            padding: 20px 0;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li ul li a {
            font-family: "Inter", sans-serif;
            display: -webkit-box !important;
            text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 30px !important;
        }

        @media (max-width: 1024px) {
            .navbar_pr .menu-items.open {
                top: 0;
                display: flex;
                flex-direction: column;
                align-items: start;
                justify-content: center;
                gap: 10px;
            }

            .navbar_pr .navbar .menu-items .srs_explore_more a {
                padding: 10px 1rem;
            }

            .navbar_pr .navbar .menu-item.srs_search_field {
                margin-left: 10px;
            }
        }

        .navbar_pr #s {
            border: none !important;
            width: none !important;
            padding: 10px 17px !important;
        }

        .navbar_pr input+input {
            margin-top: 0 !important;
        }

        .navbar_pr .navbar:after,
        .navbar_pr .navbar:before {
            display: none !important;
        }

        header nav.navbar_pr {
            display: block;
        }

        nav.navbar_pr {
            float: none;
        }

        .navbar_pr {
            background: #fff;
            position: relative;
            z-index: 501;
        }

        .navbar_pr .navbar {
            max-width: 1248px;
            margin: 0 auto;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            padding: 9px 0px;
        }

        /* .sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 999;
  } */

        .navbar_pr .navbar .logo img {
            text-decoration: none;
            color: #122f48;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 20px;
            width: 129.88px;
        }

        /* nav menu button */

        .navbar_pr .menu-btn {
            position: relative;
            display: none;
            justify-content: center;
            align-items: center;
            width: 24px;
            height: 6px;
            cursor: pointer;
            z-index: 2;
            background-position: center center;
            background-repeat: no-repeat;
            padding: 13px 5px;
            border-radius: 6px;
        }

        .navbar_pr .navbar .menu-btn__lines::before,
        .navbar_pr .navbar .menu-btn__lines::after {
            content: "";
            position: absolute;
        }

        .navbar_pr .navbar .menu-btn__lines,
        .navbar_pr .navbar .menu-btn__lines::before,
        .navbar_pr .navbar .menu-btn__lines::after {
            width: 14px;
            height: 0.1rem;
            background: #fff;
            transition: all 0.4s ease-in-out;
        }

        .navbar_pr .navbar .menu-btn__lines::before {
            transform: translateY(-0.5rem);
        }

        .navbar_pr .navbar .menu-btn__lines::after {
            transform: translateY(0.5rem);
        }

        .navbar_pr .navbar .menu-items {
            display: flex;
            column-gap: 31px;
            align-items: center;
            font-family: "Inter", sans-serif;
            font-size: 18px;
            font-weight: 400;
            line-height: 22px;
            letter-spacing: 0em;
            text-align: center;
            color: #2b354e;
            z-index: 2;
        }

        .navbar_pr .navbar .menu-items .srs_first_child {
            padding: 20px 0;
        }

        .navbar_pr .navbar .menu-items li {
            transition: all 0.2s ease-in-out;
        }

        .navbar_pr .navbar .menu-item:hover {
            color: #FF7235;
            font-family: "Inter", sans-serif;
            font-size: 18px;
            line-height: 22px;
            letter-spacing: 0em;
            text-align: center;
        }

        .navbar_pr .navbar ul li {
            list-style: none;
            transition: all 0.3s ease;
        }

        .navbar_pr .navbar ul li .arrow {
            transition: all 0.3s ease-out;
        }

        .navbar_pr .navbar ul li a {
            text-decoration: none;
            color: #112f48;
            cursor: pointer;
        }

        .navbar_pr #vibe_bp_login {
            top: 80px !important;
        }

        .navbar_pr #vibe_bp_login:after {
            display: none !important;
        }

        /* dropdown menu */

        .navbar_pr .navbar .dropdown {
            position: relative;
        }

        .navbar_pr .expand-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .navbar_pr .srs_hot_deals {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .navbar_pr .navbar .dropdown-menu,
        .navbar_pr .menu-right {
            position: absolute;
            background: #e9ecef;
            width: 190px;
            line-height: 30px;
            border-radius: 0 0 5px 5px;
            top: 65px;
            border-top: 1px solid white;
            left: 0;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            -webkit-box-shadow: 0 20px 50px 0 rgb(0 0 0 / 5%);
            box-shadow: 0 20px 50px 0 rgb(0 0 0 / 5%);
        }

        .navbar_pr .navbar .menu-right {
            top: 0;
            left: 100%;
        }

        .navbar_pr .navbar .dropdown-menu,
        .navbar_pr .menu-left {
            left: unset;
            right: 0;
        }

        .navbar_pr .navbar .menu-left {
            left: -100%;
        }

        .navbar_pr .navbar .menu-item {
            display: flex;
            white-space: nowrap;
            justify-content: space-between;
            transition: all 0.2s ease-in-out;
        }

        @media (max-width: 1024px) {
            .navbar_pr .navbar .menu-item {
                justify-content: start;
            }
        }

        .navbar_pr .navbar .menu-item.srs_search_field {
            max-width: 246px;
            width: 100%;
            background: #f6f5f5;
            border: 1px solid #eaeaea;
            border-radius: 50px;
        }

        .navbar_pr .navbar .menu-item.srs_search_field input {
            background: transparent;
            border: none;
            padding: 10px 17px;
        }

        .navbar_pr .navbar .menu-item.srs_search_field button {
            background: transparent;
            border: none;
            padding-right: 17px;
        }

        .navbar_pr .navbar .menu-item.srs_search_field input:focus-visible {
            background: transparent;
            border: none;
            outline: none;
        }

        .navbar_pr .navbar .menu-item.srs_search_field input::placeholder {
            font-family: "Inter", sans-serif;
            font-size: 14px;
            font-weight: 300;
            line-height: 17px;
            letter-spacing: 0em;
            text-align: center;
            color: #858585;
        }

        .navbar_pr .cart_login_part {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .navbar_pr .cart_login_part .log_btn a {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            background: #FF7235;
            padding: 6px 18px;
            color: #fff;
            font-family: "Inter", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 19px;
            letter-spacing: 0em;
            text-align: center;
            border-radius: 302px;
        }

        .navbar_pr a.vbplogin span {
            padding: 0;
            background: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .navbar_pr .woocart {
            display: none;
            position: absolute;
            width: 200px;
            right: 0;
            top: 75px;
        }

        .navbar_pr .woocart.active {
            display: block;
        }

        @media (max-width: 1024px) {
            .navbar_pr .woocart {
                width: 150px;
                right: 70px;
            }
        }

        .navbar_pr a.vbplogin span p {
            font-family: "Inter", sans-serif;
            display: -webkit-box;
            text-overflow: ellipsis;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
            margin: 0;
        }

        .navbar_pr .navbar .srs_brand_sec {
            padding: 41px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
        }

        .navbar_pr .navbar .srs_brand_sec img:first-child {
            max-width: 244px;
        }

        .navbar_pr .navbar .srs_brand_sec img:last-child {
            max-width: 126px;
        }

        .navbar_pr .navbar .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        .navbar_pr .navbar .dropdown-right:hover .menu-right {
            left: 100%;
            opacity: 1;
            visibility: visible;
        }

        .navbar_pr .navbar .dropdown-right:hover .menu-left {
            left: -100%;
        }

        /* mega menu  */
        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr {
            position: relative;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_heading {
            font-family: "Inter", sans-serif;
            font-size: 21px;
            font-weight: 700;
            line-height: 25px;
            letter-spacing: 0em;
            text-align: left;
            color: #2b354e;
            padding-bottom: 21px;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items {
            max-width: 257px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items .srs_mega_menu_item {
            display: block;
            font-family: "Inter", sans-serif;
            font-size: 15px;
            font-weight: 500;
            line-height: 18px;
            letter-spacing: 0em;
            text-align: left;
            color: #2b354e;
            padding: 14px 15px;
            transition: all 0.3s linear;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items .srs_mega_menu_item:hover {
            background: #f59f31;
            color: #fff;
        }

        .navbar_pr .navbar .mega-menu {
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
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li ul {
            position: absolute;
            display: none;
            column-gap: 24px;
            padding-left: 23px;
            margin-left: 257px;
            top: 0;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            grid-template-rows: repeat(12, minmax(0, 1fr));
            transition: all 0.2s linear;
            z-index: 0;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li a {
            position: static;
            z-index: 1;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li:hover>ul {
            display: grid;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li ul li a {
            display: block;
            font-family: "Inter", sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 17px;
            letter-spacing: 0em;
            text-align: left !important;
            padding: 8px 27px;
            color: #2b354e;
            border-bottom: 1px solid #d9d9d9;
        }

        .navbar_pr .mega-menu .content {
            background: #fdfdfd;
            padding: 30px 30px 50px 30px;
            width: 100%;
            box-shadow: 0px 2px 20px 0px #00000026;
        }

        .navbar_pr .blog .content {
            grid-template-columns: repeat(4, 1fr);
        }

        .navbar_pr .content .col {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            line-height: 3rem;
        }

        .navbar_pr .content .col .img-wrapper {
            display: block;
            position: relative;
            width: 100%;
            height: 20vw;
            overflow: hidden;
        }

        .navbar_pr .content .col .img {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .navbar_pr .content .col img {
            width: 100%;
            transition: transform 0.3s ease-in-out;
        }

        .navbar_pr .content .col .img-wrapper:hover img {
            transform: scale(1.1);
        }

        .navbar_pr .content .col .menu-title {
            color: #ff5722;
            font-size: 1.2rem;
            line-height: 3rem;
            font-weight: bold;
        }

        .navbar_pr .content .col p {
            line-height: 1.2rem;
            margin-top: 5px;
            color: #112f48;
        }

        .navbar_pr .content .col .mega-links {
            border-left: 1px solid #3c3c3c;
        }

        .navbar_pr .content .col .read-more {
            font-size: 16px;
            display: flex;
            padding-top: 1rem;
            color: #03a9f4;
            transition: color 0.3s ease;
            justify-content: flex-end;
            padding-right: 10px;
        }

        .navbar_pr .col .mega-links li,
        .navbar_pr .col .mega-links li a {
            padding: 0 1rem;
        }

        .navbar_pr .menu-items li:hover .mega-menu {
            opacity: 1;
            visibility: visible;
        }

        .navbar_pr .content .col .read-more:hover {
            color: #ff5722;
        }

        /* container */
        .navbar_pr .container {
            margin: 100px auto auto;
            padding: 0 15px;
            max-width: 1200px;
            text-align: center;
        }

        .navbar_pr .container p {
            color: #ffffff;
        }

        .navbar_pr h1 {
            font-weight: 700;
            line-height: 10vw;
            color: #ffffff;
            text-transform: uppercase;
        }

        /* animation menu hamburger */
        .navbar_pr .menu-btn.open .menu-btn__lines {
            transform: translateX(1rem);
            background: transparent;
        }

        .navbar_pr .menu-btn.open .menu-btn__lines::before {
            transform: rotate(45deg) translate(-0.5rem, 0.5rem);
            background: #fff;
        }

        .navbar_pr .menu-btn.open .menu-btn__lines::after {
            transform: rotate(-45deg) translate(-0.5rem, -0.5rem);
            background: #fff;
        }

        .navbar_pr .srs_mobile_mega {
            display: none;
        }

        .navbar_pr .navbar ul li .smallimg.vbplogin {
            display: block !important;
            background: #FF7235 !important;
        }

        /* Responsive style */
        @media (max-width: 1262px) and (min-width: 1024px) {
            .navbar_pr .navbar {
                padding: 9px 20px;
                gap: 20px;
            }

            .navbar_pr .navbar .menu-items {
                font-size: 12px;
            }

            .navbar_pr .navbar .cart_login_part .log_btn a {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 1024px) {
            .navbar_pr .navbar {
                padding: 10px 20px;
            }

            .navbar_pr .overflow {
                overflow: hidden;
            }

            .navbar_pr .overlay {
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                z-index: 500;
                background-color: rgba(0, 0, 0, 0.6);
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
            }

            .navbar_pr .overlay--active {
                opacity: 1;
                visibility: visible;
            }

            .navbar_pr .menu-btn {
                display: flex;
            }

            .navbar_pr .navbar .menu-items {
                position: fixed;
                height: 100%;
                max-height: initial;
                overflow-y: auto;
                width: 100%;
                top: 55px;
                left: 0;
                background: #fcfcfc;
                display: block;
                transform: translateX(-300vh);
                transition: 0.3s ease-out;
                padding-bottom: 100px;
            }

            .navbar_pr .menu-items.open {
                transform: translateY(0);
            }

            .navbar_pr .menu-items li:first-child {
                margin-top: 20px;
            }

            .navbar_pr .menu-items li a {
                padding: 10px 1rem;
                display: block;
                font-size: 18px;
            }

            .navbar_pr .menu-items .dropdown-right .right-arrow {
                transform: rotate(90deg);
            }

            /* DROPDOWN, MEGA MENUS */
            .navbar_pr .menu-items .dropdown-menu,
            .menu-items .menu-right,
            .menu-items .mega-menu {
                position: static;
                opacity: 1;
                top: 4rem;
                visibility: visible;
                margin-left: -18px;
                width: auto;
                max-height: 0;
                transform: scaleX(0);
                transform-origin: left;
                overflow: hidden;
                transition: all 0.5s ease;
            }

            .navbar_pr .menu-items .dropdown-menu,
            .menu-items .menu-right {
                padding-left: 1rem;
                width: 102%;
                margin-left: -10px;
            }

            .navbar_pr .menu-items .mega-menu .col {
                padding-left: 1rem;
            }

            .navbar_pr .expand-btn.open+.sample {
                max-height: 100%;
                transform: scaleZ(1);
            }

            .navbar_pr .expand-btn.open+.blog.sample {
                max-height: 100%;
                transform: scaleZ(1);
                max-width: fit-content;
            }

            .navbar_pr .navbar .sample {
                border-top: none;
            }

            .navbar_pr .sample li {
                margin: 0;
            }

            .navbar_pr .sample li:last-child {
                border-bottom: none;
            }

            .navbar_pr .sample li a {
                font-size: 1rem;
            }

            .navbar_pr .mega-menu .content {
                grid-template-columns: auto;
                padding: 1rem 1rem 0 1rem;
            }

            .navbar_pr .mega-menu .content .col {
                width: 100%;
                padding-top: 1rem;
                margin-bottom: 0.5rem;
            }

            .navbar_pr .col .mega-links li,
            .navbar_pr .col .mega-links li a {
                padding: 0 0.5rem;
            }

            .navbar_pr .content .col .mega-links {
                border-left: 0;
                padding-left: 0.5rem;
            }

            .navbar_pr .col .mega-links li {
                margin: 0;
            }

            .navbar_pr .navbar .menu-item.srs_search_field {
                max-width: 500px;
            }

            .navbar_pr .navbar {
                justify-content: start;
                gap: 0px;
            }

            .navbar_pr .navbar .logo {
                order: 0;
            }

            .navbar_pr .navbar .logo img {
                width: 51.39px;
            }

            .navbar_pr .navbar .menu-btn {
                order: 1;
                margin-left: 12px;
            }

            .navbar_pr .menu-btn.open .menu-btn__lines {
                margin-left: -8px;
            }

            .navbar_pr .navbar .cart_login_part {
                gap: 10px;
                margin-left: auto;
            }

            .navbar_pr .navbar .cart_login_part .log_btn a {
                font-size: 9px;
                padding: 8px 16px;
            }

            .navbar_pr .navbar .cart_login_part li:first-child {
                order: 2;
            }

            .navbar_pr .navbar .cart_login_part li:last-child {
                order: 1;
            }

            .navbar_pr .navbar .cart_login_part .log_btn a img {
                width: 10px;
            }

            .navbar_pr .navbar .cart_login_part li:last-child img {
                width: 24.15px;
            }

            .navbar_pr .navbar .menu-items .srs_first_child {
                padding: 0px;
            }

            .navbar .mega-menu .content {
                width: 100vw;
                position: absolute;
            }

            .navbar_pr .srs_mobile_mega {
                padding: 11px 24px 17px;
                background: #f1f1f1;
            }

            .navbar_pr .srs_mobile_mega li {
                list-style: none;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_heading {
                font-family: "Inter", sans-serif;
                font-size: 12px;
                font-weight: 700;
                line-height: 14px;
                letter-spacing: 0em;
                text-align: left;
                padding-bottom: 12px;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items .srs_mega_menu_item {
                display: block;
                font-family: "Inter", sans-serif;
                font-size: 10px;
                font-weight: 600;
                line-height: 12px;
                letter-spacing: 0em;
                text-align: left;
                text-decoration: none;
                color: #2b354e;
                background: #fff;
                padding: 6px 7px;
                max-width: 143.64px;
                width: 100%;
                margin-bottom: 3px;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items li {
                max-width: 143.64px;
                width: 100%;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items .srs_mega_menu_item:hover {
                color: #fff;
                background: #f59f31;
            }

            .navbar_pr .srs_mobile_mega .srs_brand_sec {
                margin-top: 16px;
                display: flex;
                justify-content: space-between;
            }

            .navbar_pr .srs_mobile_mega .srs_brand_sec img {
                height: 29.64px;
            }

            .navbar_pr .srs_brand_sec img:first-child {
                max-width: 111.26px;
            }

            .navbar_pr .srs_brand_sec img:last-child {
                max-width: 57.45px;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items li:hover>ul {
                display: grid;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items li ul {
                position: absolute;
                display: none;
                column-gap: 24px;
                margin-left: 162px;
                top: 140px;
                transition: all 0.2s linear;
                z-index: 0;
                max-height: 214.91px;
                overflow: scroll;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items li ul li {
                border-bottom: 0.5px solid #d9d9d9;
            }

            .navbar_pr .srs_mobile_mega .srs_mega_menu_item_pr .srs_mega_menu_items li ul li a {
                padding: 4px 0;
                font-family: "Inter", sans-serif;
                font-size: 9px;
                font-weight: 400;
                line-height: 11px;
                letter-spacing: 0em;
                text-align: left;
                color: #2b354e;
                text-decoration: none;

                width: 100%;
            }

            .navbar_pr .srs_mobile_mega.open {
                display: block;
            }

            .navbar_pr .srs_mobile_mega .srs_heading_sec {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
        }

        .navbar_pr .smallimg img {
            border-radius: 0 !important;
        }

        .navbar_pr .menu-item.last-item {
            display: block !important;
        }

        .navbar_pr .srs_explore_more_dropDown {
            display: none;
        }

        @media (max-width: 1024px) {
            .navbar .menu-items .srs_explore_more a {
                padding: 10px 1rem;
                text-align: left;
            }
        }

        @media (max-width: 1024px) {
            .navbar_pr .srs_explore_more_dropDown.dropOpen {
                display: block;
            }
        }

        @media (min-width: 1025px) {
            .navbar_pr .srs_explore_more:hover>ul {
                display: flex;
            }
        }

        @media (max-width: 1024px) {
            .navbar_pr .menu-items.open {
                top: 0 !important;
                display: flex !important;
                flex-direction: column;
                align-items: start !important;
                justify-content: center;
                gap: 10px;
            }
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li ul li a:hover {
            color: #FF7235;
        }

        .navbar_pr a.vbplogin span p {
            overflow: visible;
        }

        .logged-in .navbar_pr a.vbplogin span p {
            overflow: hidden;
        }

        .navbar_pr .srs_explore_more ul {
            top: 75px;
            position: absolute;
            background: #fff;
            text-align: left;
            padding: 16px;
            display: none;
            flex-direction: column;
            gap: 16px;
            box-shadow: 0px 2px 20px 0px #00000026;
            transition: all 0.2s linear;
        }

        .navbar_pr .srs_explore_more ul li a:hover {
            color: #fe7439;
        }

        @media (max-width: 1024px) {
            .navbar_pr .srs_explore_more {
                padding: 0;
                position: relative;
            }

            .navbar_pr .srs_explore_more ul {
                background: #ececec;
                padding-top: 10px;
                top: 0;
                position: relative;
                box-shadow: none;
                transition: all 0.5 linear;
            }

            .navbar_pr .srs_explore_more ul li {
                margin-top: 0 !important;
            }
        }

        .navbar_pr .srs_explore_more_dropDown {
            display: none;
        }

        @media (max-width: 1024px) {
            .navbar_pr .srs_explore_more_dropDown.dropOpen {
                display: block;
            }
        }

        .navbar_pr .woocommerce-mini-cart__empty-message {
            color: #112f48 !important;
        }

        .navbar_pr .smallimg.vbpcart span {
            position: relative;
        }

        .navbar_pr .smallimg.vbpcart span em {
            position: absolute;
            left: 0;
            background: #FF7235 !important;
            padding: 2px;
            font-size: 8px;
            top: -5px;
            color: #fff;
            border-radius: 20px;
        }

        .navbar_pr .woocart {
            width: 300px;
            padding: 10px;
        }

        .navbar_pr .woocart .widget_shopping_cart_content .woocommerce-mini-cart {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .navbar_pr .woocart .widget_shopping_cart_content .woocommerce-mini-cart li {
            font-family: "Inter", sans-serif;
        }

        .navbar_pr .woocart .widget_shopping_cart_content .woocommerce-mini-cart__total,
        bdi {
            color: #000;
            font-family: "Inter", sans-serif;
        }

        .navbar_pr .woocart .widget_shopping_cart_content .woocommerce-mini-cart__buttons {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .navbar_pr .woocart .widget_shopping_cart_content .woocommerce-mini-cart__buttons a {
            padding: 10px;
            background: #FF7235;
            color: #fff;
            font-family: "Inter", sans-serif;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li.srs_first_active ul {
            display: grid;
        }

        .navbar_pr .navbar .mega-menu .content .srs_mega_menu_item_pr .srs_mega_menu_items li.srs_first_active>a {
            background: #FF7235;
            color: white;
        }

        .navbar_pr .navbar .menu-items .srs_mega_menu_items>li:hover>a {
            background: #FF7235 !important;
            color: #fff !important;
        }

        /* ajax search by foy start */
        /* for ajax search */
        .foy-suggestion-box {
            position: absolute;
            background: #ffffff;
            max-width: 345px !important;
            width: 100%;
            padding: 15px;
            border-radius: 8px;
            box-shadow: rgb(0 0 0 / 16%) 0px 1px 4px;
            display: none;
            z-index: 999999;
        }

        .foy-search-suggestion .foy-course-list img {
            height: 45px;
            width: 60px;
            border-radius: 3px;
            margin-right: 5px;
        }

        .foy-suggestion-box hr {
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }

        .foy-suggestion-box hr:last-child {
            display: none;
        }

        #foy-loading {
            display: none;
            background: #ffffff;
            padding: 0;
            position: absolute;
            right: 50px;
            top: 6px;
        }

        #foy-loading img {
            height: 30px;
            width: 30px;
        }

        .foy-suggestion-box h3 {
            margin: 0px;
            font-size: 12px;
        }

        #foy-search-suggestion .foy-course-list a {
            padding: 0px !important;
            font-size: 14px;
            line-height: 22px;
        }

        #foy-search-suggestion .foy-course-list ul#menu-main-menu li a {
            padding: 0px !important;
        }

        #foy-search-suggestion .foy-course-list {
            align-items: center;
            display: flex;
            justify-content: start;
        }

        .search-highlight {
            color: rgb(255, 107, 129);
        }

        .foy-search-cat {
            align-items: center;
            display: flex;
            justify-content: start;
            gap: 10px;
        }

        @media (max-width: 1024px) {
            .navbar_pr .header__search-input {
                width: 100%;
            }

            .navbar_pr form#header-search-form {
                max-width: initial;
                width: 80%;
                margin: 0 1rem;
            }
        }

        .navbar_pr form#header-search-form {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #eaeaea;
            background: #f6f5f5;
            border-radius: 50px;
            overflow: hidden;
            padding: 9px 17px;
            max-width: 246px;
            width: 100%;
        }

        .navbar_pr form#header-search-form input {
            border: none;
            background: transparent;
            color: #858585;
            font-family: Inter;
            font-size: 14px;
            font-weight: 300;
            line-height: 16.94px;
            padding: 0;
        }

        .navbar_pr form#header-search-form button {
            padding: 0;
            background: transparent;
            color: #FF7235;
            font-size: 16px;
            line-height: 0px !important;
            margin: 0;
        }

        .navbar_pr form#header-search-form input::placeholder {
            color: #858585;
        }

        .navbar_pr .foy-suggestion-box li a {
            font-family: "inter", sans-serif !important;
            text-align: start !important;
        }

        .navbar_pr .foy-suggestion-box li a .search-highlight {
            color: #ff8f00;
        }

        @media (max-width: 1024px) {
            .navbar_pr .menu-items.open {
                top: 90px !important;
                justify-content: start !important;
            }
        }

        .navbar_pr .foy-search-cat-list li {
            padding: 10px 0 !important;
        }

        #foy-loading {
            top: 6px;
            right: 25%;
            z-index: 9999999 !important;
            background: transparent;
        }

        #foy-loading img {
            width: 20px;
            height: 20px;
        }

        #header-search-form {
            position: relative;
        }

        /* ajax search by foy end */
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
            <header>
                <nav class="navbar_pr">
                    <div class="navbar sticky">
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

                        <div class="menu-btn" id="srsMenuBtn" style="background-color:#FF7235;">
                            <div class="menu-btn__lines"></div>
                        </div>



                        <ul class="menu-items">
                            <li class="srs_first_child">
                                <a href="#" class="menu-item first-item expand-btn">All courses
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/arrow.png'; ?>" alt="arrow">
                                </a>
                                <div class="mega-menu sample">
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
                                    <div class="content">
                                        <div class="srs_mega_menu_item_pr">
                                            <h4 class="srs_mega_heading">Popular Courses</h4>
                                            <ul class="srs_mega_menu_items">
                                                <?php foreach ($terms as $term) : ?>
                                                    <li>
                                                        <a href="<?php echo get_term_link($term); ?>" class="srs_mega_menu_item"><?php echo $term->name; ?></a>
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
                                                <li><a href="<?php echo site_url(); ?>/all-courses/" class="srs_mega_menu_item">View All Courses</a></li>
                                            </ul>
                                        </div>
                                        <div class="srs_brand_sec">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/UKRLP (3).webp'; ?>" alt="Brand">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group (6) (1).webp'; ?>" alt="Brand">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group 1000004280.webp'; ?>" alt="Brand">
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/QLS_Logo_Colour 3 (1).webp'; ?>" alt="Brand">

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="/hot-deal" class="menu-item first-item srs_hot_deals">
                                    Hot Deals
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/fire_1f525.png'; ?>" alt="arrow">

                                </a></li>
                            <li><a href="/prime" class="menu-item first-item srs_prime_membership">Prime Membership</a></li>

                            <li class="menu-item last-item srs_explore_more">
                                <a href="#" class="menu-item expand-btn2">Explore more

                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/arrow.png'; ?>" alt="arrow">
                                </a>
                                <ul class="srs_explore_more_dropDown">
                                    <li><a href="/quality-licence-scheme-endorsed/">
                                            Quality Licence Scheme Endorsed
                                        </a></li>
                                    <li>
                                        <a href="/student-id-card/">
                                            Student ID
                                        </a>
                                    </li>
                                    <li><a href="/subscription/">
                                            Get Unlimited Access to All Our Courses
                                        </a></li>
                                    <li><a href="/career-exclusive/">
                                            Career Bundle
                                        </a></li>
                                    <li>
                                        <a href="/enrolment-letter">
                                            Enrollment Letter
                                        </a>
                                    </li>
                                    <li><a href="/certificate/">
                                            Order Your Certificate
                                        </a></li>
                                    <li><a href="/refer-a-friend/">
                                            Learn &amp; Earn Program
                                        </a></li>
                                    <li><a href="/prime/">
                                            Prime Membership
                                        </a></li>
                                </ul>
                            </li>
                            <div class="header__search-input">
                                <div class="search-container" id="foy-search-suggestion">
                                    <form method="GET" action="<?php echo get_site_url(); ?>" id="header-search-form">
                                        <input type="text" name="s" placeholder="Search Courses ..." class="autocomplete_field" id="autoCompleteOne" value="" autocomplete="off">
                                        <input type="hidden" name="post_type" value="course">
                                        <button type="submit" id="search_iconOne" class="btn btn-warning btn-fla" aria-label="Search">
                                            <span class="fa fa-search" style="pointer-events: none;"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- <form id="search" class="menu-item first-item srs_search_field" action="">
                <input type="hidden" name="post_type" value="course">
                <input type="text" class="s" id="s" name="s" placeholder="Search over 1900+ courses" value="">
                <button type="submit" class="sbtn">
                  <img src="<?php echo get_stylesheet_directory_uri() . "/assets/imgs/header/Vector (13).svg" ?>" alt="search">
                </button>
              </form> -->
                        </ul>
                        <ul class="cart_login_part">

                            <?php
                            $show_cart = apply_filters('wplms_header_show_cart', 1);
                            if (function_exists('bp_loggedin_user_link') && is_user_logged_in()) :
                            ?>

                                <li class="log_btn"><a href="<?php bp_loggedin_user_link(); ?>" class="smallimg vbplogin">
                                        <span>
                                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group 1000004727.png'; ?>" alt="user">


                                            <p><?php bp_loggedin_user_fullname(); ?></p>
                                        </span></a></li>
                                <?php

                                if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                    global $woocommerce;
                                ?>
                                    <li><a class="smallimg vbpcart"><span class="">
                                                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/cart2.svg'; ?>" />
                                                <?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                        <div class="woocart">
                                            <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
                                        </div>
                                    </li>
                                <?php
                                }
                                ?>

                            <?php
                            else :
                            ?>

                                <li class="log_btn"><a href="#login" rel="nofollow" class=" vbplogin"><span><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group 1000004727.png'; ?>" alt="user">
                                            <p><?php _e('LOGIN', 'vibe'); ?></p>
                                        </span></a></li>
                                <?php
                                if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))  || (function_exists('vibe_check_plugin_installed') && vibe_check_plugin_installed('woocommerce/woocommerce.php')) && $show_cart) {
                                    global $woocommerce;
                                ?>
                                    <li><a class=" vbpcart"><span class=""><img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/cart2.svg'; ?>" /> <?php echo (($woocommerce->cart->cart_contents_count) ? '<em>' . $woocommerce->cart->cart_contents_count . '</em>' : ''); ?></span></a>
                                        <div class="woocart"><?php woocommerce_mini_cart(); ?></div>
                                    </li>
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
                        </ul>
                    </div>
                    <div class="srs_mobile_mega">
                        <div class="srs_mega_menu_item_pr">
                            <div class="srs_heading_sec">
                                <h4 class="srs_mega_heading">Popular Courses</h4>
                                <img width="16" height="16" class="srs_cross" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/cross.png'; ?>" alt="cross">
                            </div>
                            <ul class="srs_mega_menu_items">
                                <?php foreach ($terms as $term) : ?>
                                    <li>
                                        <a href="# <?php //echo get_term_link($term); 
                                                    ?>" class="srs_mega_menu_item"><?php echo $term->name; ?></a>
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
                                <li><a href="<?php echo site_url(); ?>/all-courses/" class="srs_mega_menu_item">View All Courses</a></li>
                            </ul>

                        </div>
                        <div class="srs_brand_sec">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/UKRLP (3).webp'; ?>" alt="Brand">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group (6) (1).webp'; ?>" alt="Brand">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/Group 1000004280.webp'; ?>" alt="Brand">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/header/QLS_Logo_Colour 3 (1).webp'; ?>" alt="Brand">
                        </div>
                    </div>
                </nav>
            </header>

            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    function foyFunction() {
                        const navSearch = $(this).closest('#foy-search-suggestion');
                        const suggestionBox = navSearch.find('.foy-suggestion-box');
                        let loader = navSearch.find('#foy-loading');
                        const keyword = $(this).val();
                        if (keyword.length < 4) {
                            if (suggestionBox) {
                                suggestionBox.remove();
                            }
                            if (loader) {
                                loader.remove();
                            }
                        } else {
                            if (!suggestionBox.length) {
                                navSearch.append('<div class="foy-suggestion-box" id="foy-suggestion-box"><!-- course suggestion --></div>');
                            }
                            if (!loader.length) {
                                const input = navSearch.find('input[name="s"]');
                                loader = $('<div>', {
                                        id: 'foy-loading',
                                        class: 'spinner-border',
                                        role: 'status'
                                    })
                                    .html('<img src="https://uk.hfonline.org/wp-content/uploads/2024/03/loader-2.webp" alt="search loader">');
                                input.after(loader);
                            }
                            loader.show();
                            $.ajax({
                                url: ajaxurl,
                                type: 'get',
                                data: {
                                    action: 'data_fetch_new',
                                    keyword: keyword
                                },
                                success: function(data) {
                                    const suggestionBox = navSearch.find('.foy-suggestion-box');
                                    suggestionBox.html(data).show();
                                    loader.hide();
                                }
                            });
                        }
                    }
                    $('#foy-search-suggestion input[name="s"]').on('keyup', foyFunction);
                });
                document.addEventListener('click', function(event) {
                    var suggestionBox = document.querySelector('.foy-suggestion-box');
                    if (suggestionBox) {
                        let loader = document.querySelector('#foy-loading');
                        var isClickedInside = suggestionBox.contains(event.target);
                        if (!isClickedInside) {
                            suggestionBox.remove();
                            if (loader) {
                                loader.remove();
                            }
                        }
                    }
                });





                const srsMega_first_item = document.querySelector(".srs_mega_menu_items li");
                const srsMega_first_item_link = document.querySelector(".srs_mega_menu_items li a");
                const srsMegaSingleItem = document.querySelectorAll('.srs_mega_menu_items li');
                const srsBrandSec = document.querySelector('.srs_brand_sec');
                const srsBody = document.querySelector("body");
                const srsMenuBtn = document.querySelector(".menu-btn");
                const srsMenuItems = document.querySelector(".menu-items");
                const srsExpandBtn = document.querySelectorAll(".expand-btn");
                const srsExpandBtn2 = document.querySelectorAll(".expand-btn2");
                const srsExploreMoreDrop = document.querySelectorAll(".srs_explore_more_dropDown");
                const srsMbOpenMega = document.querySelectorAll(".srs_mobile_mega");
                const srsCross = document.querySelector(".srs_cross");

                function toggle() {
                    // add open class
                    srsMenuBtn.classList.toggle("open");
                    srsMenuItems.classList.toggle("open");

                }

                srsMenuBtn.addEventListener("click", () => {
                    toggle();
                });

                window.onkeydown = function(event) {
                    const key = event.key; // const {key} = event; in ES6+
                    const active = srsMenuItems.classList.contains("open");
                    if (key === "Escape" && active) {
                        toggle();
                    }
                };



                srsCross.addEventListener("click", (e) => {
                    closeMega();
                })

                function closeMega() {
                    srsMbOpenMega[0].classList.remove("open");
                }

                // mobile menu expand
                srsExpandBtn.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        srsMbOpenMega[0].classList.add("open");
                        toggle();


                    });
                });
                srsExpandBtn2.forEach((btn) => {
                    btn.addEventListener("click", () => {
                        srsExploreMoreDrop[0].classList.toggle("dropOpen");
                    });
                });

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
                    srsMega_first_item_link.style.backgroundColor = "#FF7235";
                    srsMega_first_item_link.style.color = "white";

                });

                srsBrandSec.addEventListener("mouseout", () => {
                    srsMega_first_item.classList.remove("srs_first_active");
                    srsMega_first_item_link.style.backgroundColor = "";
                    srsMega_first_item_link.style.color = "";

                });
            </script>