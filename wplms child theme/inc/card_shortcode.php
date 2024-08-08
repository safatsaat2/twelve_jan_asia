<?php
// Training Team Card Shortcode. Retrieves course information and displays it in a styled card format.
function trainingTeam_card_shortcode($atts)
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
        while ($loop->have_posts()) {
            $loop->the_post();
    ?>
            <div class="srs_card_pr_tr">
                <div class="srs_img_wrapper">
                    <?php
                    $course_ID = get_the_ID();
                    $course_img = get_the_post_thumbnail_url($course_ID, "medium");
                    $average_rating = get_post_meta($course_ID, 'average_rating', true);
                    $countRating = get_post_meta($course_ID, 'rating_count', true);
                    $course_title = get_the_title($course_ID);
                    $units = bp_course_get_curriculum_units($course_ID);
                    $duration = $total_duration = 0;


                    foreach ($units as $unit) {
                        $duration = get_post_meta($unit, 'vibe_duration', true);
                        if (empty($duration)) {
                            $duration = 0;
                        }
                        if (get_post_type($unit) == 'unit') {
                            $unit_duration_parameter = apply_filters('vibe_unit_duration_parameter', 60, $unit);
                        } elseif (get_post_type($unit) == 'quiz') {
                            $unit_duration_parameter = apply_filters('vibe_quiz_duration_parameter', 60, $unit);
                        }
                        $total_duration =  $total_duration + $duration * $unit_duration_parameter;
                    }

                    if (!function_exists('convert_seconds_to_hours_minutes')) {
                        function convert_seconds_to_hours_minutes($seconds)
                        {
                            $hours = floor($seconds / 3600);
                            $minutes = floor(($seconds % 3600) / 60);
                            return sprintf('%02dh %02dm', $hours, $minutes);
                        }
                    }
                    $courseDuration = convert_seconds_to_hours_minutes($total_duration);
                    $courseStudents = get_post_meta($course_ID, 'vibe_students', true);
                    $courseLink = get_the_permalink($course_ID);
                    $taxonomy = 'course-cat';
                    $terms = wp_get_post_terms($course_ID, $taxonomy, array('fields' => 'all'));




                    ?>
                    <img src="<?php
                                echo $course_img;
                                ?>" alt="Course Image" />
                    <?php
                    foreach (array_slice($terms, 0, 1) as $term_single) {
                        $background_class = "cat-background-$term_single->slug";

                        $bg_color = get_term_meta($term_single->term_id, 'bg_color_name', true);

                    ?>
                        <div class="srs_cat <?php
                                            echo $background_class;
                                            ?>" style="background-color:<?php
                                                                        echo $bg_color;
                                                                        ?>">

                            <ul>
                                <i aria-hidden="true" class="fas fa-circle"></i>

                                <li><a href="<?php echo esc_url(get_term_link($term_single)); ?>"><?php echo esc_html($term_single->name); ?></a></li>

                            </ul>
                        <?php
                    }
                        ?>
                        </div>
                </div>
                <div class="srs_content_wrapper">
                    <div class="srs_card_first_part">
                        <div>
                            <div class="srs_rating">
                                <p>
                                    <?php
                                    echo $average_rating;
                                    ?>
                                </p>
                                <i aria-hidden="true" class="fas fa-star"></i>
                            </div>
                            <div class="srs_review">
                                <p>(
                                    <?php
                                    echo $countRating;
                                    ?>
                                    Reviews)</p>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                            <rect width="32" height="32" rx="16" fill="#FDECF0"></rect>
                            <path d="M14 22.6667H18C21.3333 22.6667 22.6667 21.3334 22.6667 18V14C22.6667 10.6667 21.3333 9.33337 18 9.33337H14C10.6667 9.33337 9.33334 10.6667 9.33334 14V18C9.33334 21.3334 10.6667 22.6667 14 22.6667Z" stroke="#EE4166" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.3333 9.62671V16.28C19.3333 17.5934 18.3933 18.1067 17.24 17.4134L16.36 16.8867C16.16 16.7667 15.84 16.7667 15.64 16.8867L14.76 17.4134C13.6067 18.1 12.6667 17.5934 12.6667 16.28V9.62671" stroke="#EE4166" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14 22.6667H18C21.3333 22.6667 22.6667 21.3334 22.6667 18V14C22.6667 10.6667 21.3333 9.33337 18 9.33337H14C10.6667 9.33337 9.33334 10.6667 9.33334 14V18C9.33334 21.3334 10.6667 22.6667 14 22.6667Z" stroke="#EE4166" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M19.3333 9.62671V16.28C19.3333 17.5934 18.3933 18.1067 17.24 17.4134L16.36 16.8867C16.16 16.7667 15.84 16.7667 15.64 16.8867L14.76 17.4134C13.6067 18.1 12.6667 17.5934 12.6667 16.28V9.62671" stroke="#EE4166" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="srs_card_sec_part">
                        <h5>
                            <a href="<?php
                                        echo $courseLink;
                                        ?>">
                                <?php
                                echo $course_title;
                                ?>
                            </a>


                        </h5>
                    </div>
                    <div class="srs_card_third_part">
                        <div>
                            <i aria-hidden="true" class="fas fa-check"></i>
                            <p>CPD</p>
                        </div>
                        <div>
                            <i aria-hidden="true" class="fas fa-check"></i>
                            <p>IOSH</p>
                        </div>
                        <div>
                            <i aria-hidden="true" class="fas fa-check"></i>
                            <p>RoSPA</p>
                        </div>
                    </div>
                    <div class="srs_card_fourth_part">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M1.75 9V3.5C1.75 1.5 2.25 1 4.25 1H7.75C9.75 1 10.25 1.5 10.25 3.5V8.5C10.25 8.57 10.25 8.64 10.245 8.71" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3.175 7.5H10.25V9.25C10.25 10.215 9.465 11 8.5 11H3.5C2.535 11 1.75 10.215 1.75 9.25V8.925C1.75 8.14 2.39 7.5 3.175 7.5Z" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4 3.5H8" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4 5.25H6.5" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p>Modules
                                <?php
                                echo count($units);
                                ?>
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M11 6C11 8.76 8.76 11 6 11C3.24 11 1 8.76 1 6C1 3.24 3.24 1 6 1C8.76 1 11 3.24 11 6Z" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.855 7.59L6.305 6.665C6.035 6.505 5.815 6.12 5.815 5.805V3.755" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p>
                                <?php
                                echo $courseDuration;
                                ?>
                            </p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                                <path d="M6 6C7.38071 6 8.5 4.88071 8.5 3.5C8.5 2.11929 7.38071 1 6 1C4.61929 1 3.5 2.11929 3.5 3.5C3.5 4.88071 4.61929 6 6 6Z" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M10.295 11C10.295 9.065 8.37002 7.5 6.00002 7.5C3.63002 7.5 1.70502 9.065 1.70502 11" stroke="#7C7E91" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <p>Students
                                <?php
                                echo $courseStudents;
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="srs_card_fifth_part">
                        <div class="srs_price">
                            <?php
                            bp_course_credits();
                            ?>
                        </div>
                        <div class="srs_btn">
                            <a href="<?php
                                        echo $courseLink;
                                        ?>">View Course <i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
        wp_reset_query();
    } else {
        echo "No Course Found";
    }

    ?>



<?php
    return ob_get_clean();
}

add_shortcode('trainingTeam_card', 'trainingTeam_card_shortcode');
?>