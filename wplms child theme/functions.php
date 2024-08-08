<?php


//  Enqueues style and js for child theme
function srs_child_assets()
{
    wp_enqueue_style("localStyle", get_stylesheet_uri(), null, "0.1");
    wp_enqueue_style("card_css", get_stylesheet_directory_uri() . "/assets/css/srs_card.css", null, time());
    wp_enqueue_style("eduCavecard_css", get_stylesheet_directory_uri() . "/assets/css/eduCavecard_css.css", null, time());
    wp_enqueue_style("oneEdu_card", get_stylesheet_directory_uri() . "/assets/css/oneEdu_card.css", null, time());
    wp_enqueue_style("header css", get_stylesheet_directory_uri() . "/assets/css/header.css", null, time());
    wp_enqueue_style("apexlearningcs css", get_stylesheet_directory_uri() . "/assets/css/apexlearningcs.css", null, time());
}

add_action("wp_enqueue_scripts", "srs_child_assets");

include_once get_stylesheet_directory() . '/inc/category_color.php';
include_once get_stylesheet_directory() . '/inc/card_shortcode.php';
include_once get_stylesheet_directory() . '/inc/educave_card_shortcode.php';
include_once get_stylesheet_directory() . '/inc/skill-up.php';
include_once get_stylesheet_directory() . '/inc/oneEducation_card.php';
include_once get_stylesheet_directory() . '/inc/apexlearningcard.php';
include_once get_stylesheet_directory() . '/inc/apexLearningBundleCourse.php';
include_once get_stylesheet_directory() . '/inc/topRated.php';
include_once get_stylesheet_directory() . '/inc/alphaAcademyshort.php';
include_once get_stylesheet_directory() . '/inc/bulkCourseArKitaThake.php';


function srs_headerAssets(){
    register_nav_menu("topmenu", __("srs Top Menu", "firstSrsTheme"));
}

add_action("after_setup_theme","srs_headerAssets");


function custom_logout_button() {
    return '<a class="srs_items-link without-p srs_log-out" href="' . wp_logout_url() . '">
                <div class="srs_items-container">
                    <svg class="srs_items-icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="rotate-180">
                        <path d="M3.67412 14.6738L8.66439 14.6738C9.03285 14.6738 9.33105 14.3753 9.33105 14.0072C9.33105 13.639 9.03285 13.3405 8.66439 13.3405L3.67412 13.3405C3.11225 13.3405 2.65525 12.8848 2.65526 12.3246L2.65526 3.67549C2.65526 3.11529 3.11226 2.65956 3.67412 2.65956L8.66439 2.65956C9.03286 2.65956 9.33106 2.36103 9.33106 1.99289C9.33106 1.62476 9.03286 1.32623 8.66439 1.32623L3.67412 1.32623C2.37726 1.32623 1.32192 2.38029 1.32192 3.67549L1.32192 12.3246C1.32192 13.6198 2.37725 14.6738 3.67412 14.6738Z" class="fill-current"></path>
                        <path d="M12.4806 7.33102L6.0222 7.33102C5.65373 7.33102 5.35553 7.62955 5.35553 7.99769C5.35553 8.36582 5.65373 8.66435 6.0222 8.66435L12.4665 8.66436L10.4252 10.8447C10.1733 11.1136 10.1869 11.5354 10.4558 11.7871C10.7247 12.039 11.1472 12.025 11.3979 11.7562L14.464 8.48169C14.5369 8.41356 14.5931 8.33076 14.6297 8.23596C14.6469 8.19269 14.6491 8.14682 14.6568 8.10149C14.6625 8.06629 14.6777 8.03449 14.6777 7.99776C14.6777 7.99636 14.6769 7.99515 14.6769 7.99375C14.6778 7.82882 14.6184 7.66375 14.4974 7.53455L11.3978 4.22435C11.2669 4.08435 11.0892 4.01342 10.9115 4.01342C10.7481 4.01342 10.5847 4.07302 10.4557 4.19342C10.1869 4.44502 10.1732 4.86695 10.4251 5.13582L12.4806 7.33102Z" class="fill-current"></path>
                    </svg>
                    <span class="srs_items-text">Log Out</span>
                </div>
            </a>';
}
function custom_course_search_widget_query($query_args) {
    // Check if the query is for courses
    if (isset($query_args['post_type']) && $query_args['post_type'] == 'course') {
        // Modify the query to filter by specific categories
        $query_args['tax_query'] = array(
            array(
                'taxonomy' => 'course-cat', 
                'field' => 'ID',
                'terms' => array(47, 48), 
            ),
        );
    }
    return $query_args;
}
add_filter('wplms_course_search_widget_query_args', 'custom_course_search_widget_query');

?>





