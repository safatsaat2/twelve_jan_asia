<?php

//  custom meta box for course 
function custom_course_details_meta()
{
    add_meta_box(
        'custom_course_details_meta',
        'Bundle Course Details',
        'bundle_course_details',
        'course',
        'normal',
        'high'
    );
    add_meta_box(
        'custom_course_tip_meta',
        'Bundle course Tip',
        'bundle_course_tip',
        'course',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'custom_course_details_meta');

// Callback function to render the meta box
function bundle_course_details($post)
{
    // Retrieve existing meta values
    $bundle_course_details = get_post_meta($post->ID, 'custom_course_details_meta', true);


    // Output HTML for meta box
?>
    <label class="screen-reader-text" for="custom_course_details_meta">Text Area</label>
    <textarea rows="1" cols="40" name="custom_course_details_meta" id="custom_course_details_meta" style="display: block;
    margin: 12px 0 0;
    height: 4em;
    width: 100%;"><?php echo esc_html($bundle_course_details); ?> </textarea>
<?php
}
function bundle_course_tip($post)
{
    // Retrieve existing meta values
    $bundle_course_tip = get_post_meta($post->ID, 'custom_course_tip_meta', true);


    // Output HTML for meta box
?>
    <label class="screen-reader-text" for="custom_course_tip_meta">Bundle Course Tip</label>
    <textarea rows="1" cols="40" name="custom_course_tip_meta" id="custom_course_tip_meta"><?php echo esc_html($bundle_course_tip); ?> </textarea>
    <?php
}

// Save custom meta data when the post is updated
function save_custom_details_meta($post_id)
{

    // Check if auto save
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check user permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save meta data
    if (isset($_POST['custom_course_details_meta'])) {
        update_post_meta($post_id, 'custom_course_details_meta', sanitize_text_field($_POST['custom_course_details_meta']));
    }
    // Save meta data
    if (isset($_POST['custom_course_tip_meta'])) {
        update_post_meta($post_id, 'custom_course_tip_meta', sanitize_text_field($_POST['custom_course_tip_meta']));
    }
}
add_action('save_post', 'save_custom_details_meta');




// bundle course shortcode function 
function srs_bundle_courses_function($atts)
{
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts
    );
    ob_start();

    $a2n_course_id = $atts['id'];
    if (!empty($a2n_course_id)) {
        $a2n_course_ids = $a2n_course_id;
        $a2n_course_ids = (explode(",", $a2n_course_ids));
        $course_id = array();
        if ($a2n_course_ids) {
            foreach ($a2n_course_ids as $a2n_course_id) {
                $course_id[] = $a2n_course_id;
            }
        }
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => 3,
            'post__in' => $course_id,
            'post_status' => 'published',
        );
    }
    $fetch = new WP_Query($args);
    if ($fetch->have_posts()) {
        while ($fetch->have_posts()) {
            $fetch->the_post();

            $course_ID = get_the_ID();
            $course_title = get_the_title($course_ID);
            $course_img = get_the_post_thumbnail_url($course_ID, "large");
            $bundle_course_details = get_post_meta($course_ID, 'custom_course_details_meta', true);
            $bundle_tip = get_post_meta($course_ID, 'custom_course_tip_meta', true);
            $course_link = get_the_permalink($course_ID);
            $product_ID = get_post_meta($course_ID, 'vibe_product', true);
            $add_to_cart_url = wc_get_cart_url() . '?add-to-cart=' . $product_ID;

    ?>

            <div class="a2n_bundle_course">
                <div class="bundle-content">
                    <div class="bundle-image-container">
                        <a href="<?php echo $course_link ?>">
                            <img alt="Electrician Career Specialization Bundle" loading="lazy" decoding="async" src="<?php echo $course_img ?>" class="bundle-image" />
                            <div class="course-badge">
                                <span>
                                    <?php
                                    if ($bundle_tip) {
                                        echo  $bundle_tip;
                                    }
                                    ?>
                                     Courses Bundle
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="bundle-details">
                        <h3 class="bundle-title">
                            <a href="/bundle/electrician-bundle-novice-to-pro">
                                <?php echo $course_title  ?>
                            </a>
                        </h3>
                        <ul class="bundle-features">
                            <?php
                            if ($bundle_course_details) {
                                $details_array = explode('/', $bundle_course_details);
                                foreach ($details_array as $detail) {
                            ?>
                                    <li class="feature-item">
                                        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M6.44845 15.6088C6.96584 16.1325 8.11819 15.9589 8.24226 15.1355C9.01422 10.0233 12.8769 5.71052 15.8 1.64658C16.6105 0.520419 14.7469 -0.549399 13.947 0.56336C11.2758 4.27665 7.909 8.18398 6.59187 12.6899C5.08671 11.1516 3.57547 9.62798 1.88731 8.27629C0.818189 7.41991 -0.71113 8.92864 0.369511 9.79401C2.56898 11.5558 4.46976 13.6102 6.44845 15.6088Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="feature-text"><?php echo trim($detail); ?></span>
                                    </li>
                            <?php
                                }
                            }
                            ?>

                        </ul>
                    </div>
                </div>
                <div class="bundle-footer">
                    <div class="bundle-price-container-wrapper">
                        <div class="bundle-price-container">
                            <?php bp_course_credits(); ?>
                        </div>
                        <div class="bundle-button-container">
                            <a href="<?php echo $add_to_cart_url ?>" class="bundle-button">
                                <div class="button-text">Add to cart</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

<?php
        }
        wp_reset_query();
    } else {
        echo "no course found";
    }
    return ob_get_clean();
}
add_shortcode('srs_bundle_course_apex', 'srs_bundle_courses_function');
