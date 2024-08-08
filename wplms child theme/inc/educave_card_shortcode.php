<?php
// Training Team Card Shortcode. Retrieves course information and displays it in a styled card format.
function eduCave_card_shortcode($atts)
{

    $atts = shortcode_atts(array(
        'id' => '',
    ), $atts);
    ob_start();

    $course_id = $atts['id'];
    if (!empty($course_id)) {
        $course_ids = $course_id;
        $course_ids = (explode(",", $course_ids));
        $cid = array();
        if ($course_ids) {
            foreach ($course_ids as $course_id) {
                $cid[] = $course_id;
            }
        }

        $arg = array(
            "post_type" => "course",
            "posts_per_page" => 8,
            "post__in" => $cid,
            "post_status" => "published",
        );
    }

    $loop = new WP_Query($arg);
    if ($loop->have_posts()) {
        ?>
        <div class="srs_cards_pr">
        <?php
        while ($loop->have_posts()) {
            $loop->the_post();
?>
            <?php
            $course_ID = get_the_ID();
            $average_rating = get_post_meta($course_ID, 'average_rating', true);

            $countRating = get_post_meta($course_ID, 'rating_count', true);
            $course_title = get_the_title($course_ID);
            $courseStudents = get_post_meta($course_ID, 'vibe_students', true);
            $courseLink = get_the_permalink($course_ID);
            $course_excerpt = get_the_excerpt($course_id);



            ?>
            <div class="srs_card_parent">
                <a href="<?php echo $courseLink;?>">
                    <div class="srs_img_container">
                        <div class="srs_play_btn">
                            <i aria-hidden="true" class="fas fa-play"></i>
                        </div>
                        <div class="srs_tag_div">
                            Best Seller
                        </div>
                        <?php bp_course_avatar() ?>
                    </div>
                </a>

                <div class="srs_content_card">
                    <div class="srs_content_first_sec">
                        <h6 class="srs_header_text"><a href="<?php echo $courseLink; ?>"><?php echo $course_title; ?></a></h6>
                        <p class="srs_course_details">
                            <?php
                            echo $course_excerpt;
                            ?></p>
                    </div>

                    <div class="srs_content_second_sec">
                        <div class="srs_user_like_div">
                            <div class="srs_user_div">
                                <i aria-hidden="true" class="far fa-user"></i>
                                <p>
                                    <?php
                                    echo $courseStudents;
                                    ?>
                                </p>
                            </div>
                            <div class="srs_like_div">
                                <i aria-hidden="true" class="far fa-thumbs-up"></i>
                                <p>
                                    <?php
                                    if (is_numeric($average_rating)) {
                                        $percentage = ($average_rating / 5) * 100;
                                        echo $percentage;
                                    }
                                    ?>%
                                </p>
                            </div>
                            <p>(<?php echo $countRating; ?>)</p>
                        </div>
                        <?php
                        $product_ID = get_post_meta($course_ID, 'vibe_product', true);
                        $add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product_ID;
                        ?>
                        <div class="srs_price_sec">
                            <?php
                            $product = wc_get_product($product_ID);

                            // Check if the product exists
                            if ($product) {
                                $sale_price = $product->get_sale_price();
                                $regular_price = $product->get_regular_price();

                                // Check if both sale price and regular price are numeric
                                if (is_numeric($sale_price) && is_numeric($regular_price) && $regular_price != 0) {
                                    // Calculate the discount percentage
                                    $discount = ($regular_price - $sale_price) / $regular_price * 100;
                            ?>
                                    <h6><?php echo round($discount); ?>% Disc. <span><?php bp_course_credits(); ?></span></h6>
                            <?php
                                } else {
                                    ?>
                                    <h6>0% Disc. <span><?php bp_course_credits(); ?></span></h6>
                                    <?php
                                }
                            } else {
                                // Handle if product is not found
                                echo "Product not found";
                            }
                            ?>
                            <a href="<?php echo $add_to_cart_url ?>"><i aria-hidden="true" class="fas fa-shopping-cart"></i> Buy <?php bp_course_credits();?></a>
                        </div>
                    </div>
                </div>
                <a href="<?php echo $add_to_cart_url ?>" class="srs_third_sec">
                    <i aria-hidden="true" class="fas fa-plus"></i>
                    <p>Add to a list</p>
                </a>
            </div>
    <?php
        }
        wp_reset_query();
        ?>
        <div>
        <?php
    } else {
        echo "No Course Found";
    }

    ?>



<?php
    return ob_get_clean();
}

add_shortcode('eduCave_card', 'eduCave_card_shortcode');
?>