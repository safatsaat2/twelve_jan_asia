<?php
function course_by_cat_id($atts, $limit)
{
    ?>
    <style>
        .arm-alpha-trending {
            display: flex;
            padding-bottom: 0px;
            flex-direction: column;
            gap: 20px;
            border-radius: 6px;
            border: 1px solid #E7EBF1;
            background: #FFF;
            margin-bottom: 30px;
        }

        .arm-alpha-trending a img.attachment-post-thumbnail {
            display: flex;
            width: 100%;
            height: 200px;
            flex-direction: column;
            justify-content: flex-end;
            align-items: flex-end;
            gap: 10px;
            border-radius: 3px 3px 0px 0px;
        }

        .arm-rating-review {
            display: flex;
            align-items: center;
            color: #4B5162;
            font-family: IBM Plex Sans;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: 150%;
        }

        h2.arm-crs-title {
            margin-top: 20px;
            margin-bottom: 20px;
            height: 60px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        h2.arm-crs-title a {
            color: #3F4554;
            font-family: IBM Plex Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 32px;
            text-transform: capitalize;
            margin: 10px 0;
            text-decoration: none;
        }

        h2.arm-crs-title a:hover {
            color: #63BC70;
        }

        .arm-price {
            color: #B7C0B8;
            font-family: IBM Plex Sans;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 100%;
        }

        .arm-price-and-std {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .arm-std {
            color: #4B5162;
            font-family: IBM Plex Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 150%;
        }

        a.arm-add-to-cart {
            display: flex;
            height: 40px;
            justify-content: center;
            align-items: center;
            gap: 4px;
            align-self: stretch;
            border-radius: 3px;
            border: 1px solid #E7EBF1;
            background: #FFF;
            color: #3F4554;
            font-family: IBM Plex Sans;
            font-size: 14px;
            font-style: normal;
            font-weight: 600;
            line-height: 150%;
            text-transform: uppercase;
            text-decoration: none;
        }

        a.arm-add-to-cart:hover {
            background: #63BC70;
        }

        .arm-price span {
            color: #63BC6F;
            font-size: 20px;
            font-weight: 700;
        }
    </style>
    <?php
    $category_id = $atts['cat_id'];
    $course_ids = $atts['course_ids'];
    $limit = $atts['limit'];
    //$add_to_cart = $atts['add_to_cart'];
    //$check_details = $atts['check_details'];
    //cat id 55846
    $new_array_numbers = array_map('intval', explode(',',  $course_ids));
    //var_dump($add_to_cart); //'post__in' => array( 2, 4, 6 ),
    if ($category_id) {
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => $limit,
            'post_status' => 'publish',
            'orderby' => 'meta_value_num',
            'order'   => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'course-cat',
                    'field' => 'term_id',
                    'terms' => $category_id
                )
            ),
            'meta_query' => array(
                array(
                    'key'     => 'vibe_students',
                ),
                array(
                    'key' => 'vibe_product',
                    'value'   => array(''),
                    'compare' => 'NOT IN'
                )
            )
        );
    } elseif ($course_ids) {
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => $limit,
            'post_status' => 'publish',
            'orderby' => 'meta_value_num',
            'order'   => 'DESC',
            'post__in' => $new_array_numbers,
            'meta_query' => array(
                array(
                    'key'     => 'vibe_students',
                ),
                array(
                    'key' => 'vibe_product',
                    'value'   => array(''),
                    'compare' => 'NOT IN'
                )
            )
        );
    } else {
        $args = array(
            'post_type' => 'course',
            'posts_per_page' => $limit,
            'post_status' => 'publish',
            'orderby' => 'meta_value_num',
            'order'   => 'DESC',
            'meta_query' => array(
                array(
                    'key'     => 'vibe_students',
                ),
                array(
                    'key' => 'vibe_product',
                    'value'   => array(''),
                    'compare' => 'NOT IN'
                )
            )
        );
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<div class="row mha_tabs_row">';
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-3 col-sm-6 offset-md-3 align-self-start justify-content-end">
                <div class="arm-alpha-trending">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            echo '<img src="https://dummyimage.com/600x400/7d797d/ffffff" alt="alt image" />';
                        }
                        ?>
                        <!-- <img class="arm-crs-img" src="https://www.alphaacademy.org/wp-content/uploads/2021/08/Learn-Spanish-Language-Complete-Intermediate-Level-Course-1024x623-1.webp" alt=""> -->
                    </a>
                    <div style="padding: 0 15px 15px;">
                        <div class="arm-rating-review">
                            <?php $count = get_post_meta(get_the_ID(), 'rating_count', true); ?>
                            <img class="arm-rating" src="https://www.alphaacademy.org/wp-content/uploads/2023/09/5star-1.webp" alt=""> ( <?php
                                                                                                                                            if ($count > 999) {
                                                                                                                                                echo ($count / 1000) . 'k';
                                                                                                                                            } else {
                                                                                                                                                echo $count;
                                                                                                                                            }
                                                                                                                                            ?> )
                        </div>
                        <h2 class="arm-crs-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="arm-price-and-std">
                            <div class="arm-price">
                                <?php
                                $product_ID = get_post_meta(get_the_ID(), 'vibe_product', true);
                                $regular_price = get_post_meta($product_ID, '_regular_price', true);
                                $sale_price = get_post_meta($product_ID, '_sale_price', true);
                                $current_currency = get_woocommerce_currency_symbol();


                                if (!empty($product_ID)) {
                                    if ($sale_price !== "") {
                                        $m_price =   '<span>' . $current_currency . $sale_price . '</span>' . ' ' . '<del>' . $current_currency . $regular_price . '</del>';
                                    } elseif ($regular_price !== "") {
                                        $m_price = '<span>' . $current_currency . $regular_price . '</span>';
                                    } else {
                                        $m_price = '';
                                    }
                                    echo $m_price;
                                } else {
                                    echo "Free";
                                }

                                ?>

                            </div>
                            <div class="arm-std">
                                <img src="https://www.alphaacademy.org/wp-content/uploads/2023/10/Icons-3.png" alt=""> <?php $studentNumers = get_post_meta(get_the_ID(), 'vibe_students', true);
                                                                                                                        if ($studentNumers > 999) {
                                                                                                                            echo round($studentNumers / 1000) . 'k';
                                                                                                                        } else {
                                                                                                                            echo $studentNumers;
                                                                                                                        }
                                                                                                                        ?> Students
                            </div>
                        </div>
                        <a href="<?php echo home_url(); ?>/cart/?add-to-cart=<?php echo $product_ID; ?>" class="arm-add-to-cart">
                            <img src="https://www.alphaacademy.org/wp-content/uploads/2023/10/Icons-4.png" alt=""> Add To Cart
                        </a>
                    </div>
                </div>
            </div>
<?php
        endwhile;
        echo '</div>';
        wp_reset_query();
    } else {
        echo "<h3>No course found</h3>";
    }
}
add_shortcode('course_by_cat_id', 'course_by_cat_id');