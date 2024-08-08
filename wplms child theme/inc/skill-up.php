<?php

function su_cards_cate_shortcode($atts)
{

    $atts = shortcode_atts(
        array(
            'category' => '', 
        ), $atts);
    ob_start();

    $category_slug = $atts['category']; 
    if (!empty($category_slug)) {
        $category = get_term_by('slug', $category_slug, 'course-cat');
        $category_name = $category->name;
        $category_description = $category->description;
        $arg = array(
            "post_type" => "course",
            "posts_per_page" => 4,
            "post_status" => "published",
            "tax_query" => array(
                array(
                    'taxonomy' => 'course-cat', 
                    'field' => 'slug',
                    'terms' => $category_slug, 
                ),
            ),
        );
    }

    $loop = new WP_Query($arg);
    ?>
    <div class="r4h-su-category-tab-courses">
        <?php
    if (!empty($category_name)) {
        echo '<h2 class="su-category-name">' . $category_name . '</h2>';
    }
    if (!empty($category_description)) {
        echo '<p  class="su-category-description">' . $category_description . '</p>';
    }
    ?>

  <div  class="cat-courses-button">
    <a href="/course-cat/<?php echo $category_slug ?>">Explore <?php echo $category_name?></a>
  </div>
<?php
    
    if ($loop->have_posts()) {
        ?>
        <div class="r4h-su-category-tab-courses_container">
            <?php
            while ($loop->have_posts()) {
                $loop->the_post();

                $course_ID = get_the_ID();
                $course_title = get_the_title($course_ID);
                $course_img = get_the_post_thumbnail_url($course_ID, "large");
                $bundle_tip = get_post_meta($course_ID, 'custom_course_tip_meta', true);
                $course_link = get_the_permalink($course_ID);
                $average_rating = get_post_meta($course_ID, 'average_rating', true);
                $reviewsUsers = get_post_meta($course_ID, 'rating_count', true);
                $featured_meta = get_post_meta($course_ID, 'featured_meta', true);
                ?>
                <div class="r-su-home-4-course_card_h">
                    <div class="image-duration-featured">
                    <?php
                    if ($featured_meta) {
                        ?>
                        <p class="featured">
                            <span> &#9733; </span>
                            <span> <?php echo $featured_meta ?> </span>
                        </p>
                    <?php } ?>
                        
                        <div class="course-thumb-image">
                            <img src="<?php echo $course_img ?>" alt="" />
                        </div>
                        <p class="duration">
                            <span> &#128339; </span>
                            <span> 01 year </span>
                        </p>
                    </div>
                    <div class="course-meta-data">
                        <h4 class="course-title">
                            <a href="<?php echo $course_link ?>">
                            <?php echo $course_title ?>
                            </a>
                        </h4>
                        <?php
                        if ($bundle_tip) {
                            echo '<div class="bundle_or_not">
                            <h6>
                            ' . $bundle_tip . '
                            </h6>
                        </div>';
                        }
                        ?>
                        <div class="ratings-detail">
                        <?php
                            if (is_numeric($average_rating)) {
                                $percentage = ($average_rating / 5) * 100;
                            }
                            ?>
                            <p class="r4h-ratings">
                                <svg viewBox="0 0 1000 200" class="rating">
                                    <defs>
                                        <polygon id="star"
                                            points="100,0 131,66 200,76 150,128 162,200 100,166 38,200 50,128 0,76 69,66 ">
                                        </polygon>
                                        <clipPath id="stars">
                                            <use xlink:href="#star"></use>
                                            <use xlink:href="#star" x="20%"></use>
                                            <use xlink:href="#star" x="40%"></use>
                                            <use xlink:href="#star" x="60%"></use>
                                            <use xlink:href="#star" x="80%"></use>
                                        </clipPath>
                                    </defs>
                                    <rect class="rating__background" clip-path="url(#stars)"></rect>
                                    <rect width="<?php echo $percentage ?>%" class="rating__value" clip-path="url(#stars)"></rect>
                                </svg>
                            </p>
                            <p class="total-reviews">(<?php
                            if ($reviewsUsers) {
                                echo $reviewsUsers;
                            } else {
                                echo '0';
                            }
                            ?> reviews)</p>
                        </div>
                    </div>
                    <div class="price-button">
                        <a href="<?php echo $course_link ?>" class="course_details_button">View Course</a>
                        <div class="course-price-details">
                        <?php
                            bp_course_credits();
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        </div>
        <?php
        wp_reset_query();
    } else {
        echo "No Course Found";
    }
    return ob_get_clean();
}

add_shortcode('su_cards_cate', 'su_cards_cate_shortcode');
?>