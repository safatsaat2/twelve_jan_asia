<?php
function srs_tab_function($atts)
{
    ob_start();

    $atts = shortcode_atts(
        array(
            'filter' => 'new',
        ),
        $atts
    );


    if ($atts['filter'] == 'top_rated') {
        $arg = array(
            "post_type" => "course",
            "posts_per_page" => 7,
            "meta_key" => 'rating_count',
            "orderby" => 'meta_value_num',
            "order" => 'DESC',
            "post_status" => "publish",
        );
    } elseif ($atts['filter'] == 'most_popular') {
        $arg = array(
            "post_type" => "course",
            "posts_per_page" => 7,
            "post_status" => "publish",
            "meta_key" => "vibe_students",
            "orderby" => "meta_value_num",
            "order" => "DESC",
        );
    } else {
        $arg = array(
            "post_type" => "course",
            "posts_per_page" => 7,
            "post_status" => "publish",
            "orderby" => "date",
            "order" => "DESC"
        );
    }

    $loop = new WP_Query($arg);
    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            $course_ID = get_the_ID();
            $average_rating = get_post_meta($course_ID, 'average_rating', true);
            $course_img = get_the_post_thumbnail_url($course_ID, "medium");
            $countRating = get_post_meta($course_ID, 'rating_count', true);
            $course_title = get_the_title($course_ID);
            $courseLink = get_the_permalink($course_ID);
            $courseStudents = get_post_meta($course_ID, 'vibe_students', true);

            if (is_numeric($average_rating)) {
                $percentage = ($average_rating / 5) * 100;
            }
?>

            <div class="a2n_bs-card">
            <?php
                        $product_ID = get_post_meta($course_ID, 'vibe_product', true);
                        ?>
                <?php
                $product = wc_get_product($product_ID);
                if ($product) {
                    $sale_price = $product->get_sale_price();
                    $regular_price = $product->get_regular_price();

                    if (is_numeric($sale_price) && is_numeric($regular_price) && $regular_price != 0) {

                        $discount = ($regular_price - $sale_price) / $regular_price * 100;
                ?>
                        <div class="a2n_discount"><?php echo round($discount) ?> % OFF
                            <img class="a2n_offer-img" src="https://backend.apexlearning.org.uk/wp-content/uploads/2024/06/corner-ribbon.svg" alt="" />
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="a2n_discount">0 % OFF
                            <img class="a2n_offer-img" src="https://backend.apexlearning.org.uk/wp-content/uploads/2024/06/corner-ribbon.svg" alt="" />
                        </div>
                <?php
                    }
                }
                ?>

                <div class="a2n_image_sec"><a href="<?php echo $courseLink ?>">
                        <img src="<?php echo $course_img ?>" alt="" />
                    </a></div>
                <div class="a2n_content_sec">
                    <?php
                    $course_ID = get_the_ID();
                    $taxonomy = 'course-cat';
                    $terms = wp_get_post_terms($course_ID, $taxonomy, array('fields' => 'all'));
                    ?>
                    <?php
                    foreach (array_slice($terms, 0, 1) as $term_single) {
                    ?>
                        <div class="a2n_cat-items">
                            <a class="a2n_cat" href="<?php echo esc_url(get_term_link($term_single)); ?>"><?php echo esc_html($term_single->name); ?></a>
                        </div>
                    <?php
                    }
                    ?>
                    <div>

                        <a class="a2n_heading" href="<?php echo $courseLink ?>"><?php echo $course_title ?></a>

                    </div>
                    <div>
                        <div class="a2n_rating_sec">
                            <?php echo $average_rating ?>
                            <div class="a2n-ratings-container bp_blank_stars">
                                <div class="bp_filled_stars" style="width: <?php echo $percentage ?>%;"></div>
                            </div>
                        </div>
                        <div class="a2n_footer_content">
                            <?php bp_course_credits(); ?>
                            <div class="a2n_member">
                                <div class="members_icon"></div>
                                <?php echo $courseStudents ?> Students

                            </div>
                        </div>
                    </div>
                </div>
                <a class="a2n_bs-btn" href="#"><i class="fas fa-arrow-right" aria-hidden="true">&lt;/i &gt;</i></a>
                <div class="a2n_hover_card"><img src="https://backend.apexlearning.org.uk/wp-content/uploads/2024/06/card-hover-arrow.webp" alt="" /></div>
            </div>

<?php
        }
        wp_reset_query();
    } else {
        echo "No Course Found";
    }

    return ob_get_clean();
}

add_shortcode('srs_tab_course', 'srs_tab_function');
?>