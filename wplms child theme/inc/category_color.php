
<?php
// Save Background Color data for new term
add_action('created_course-cat', 'save_course_category_bg_colors');

function save_course_category_bg_colors($term_id)
{
    if (isset($_POST['bg_color'])) {
        $bg_color_value = sanitize_text_field($_POST['bg_color']);
        add_term_meta($term_id, 'bg_color_name', $bg_color_value, true);
    }
}

// Edit existing term Background Colors
add_action('course-cat_edit_form_fields', 'edit_course_category_bg_colors');

function edit_course_category_bg_colors($term)
{
    $bg_color_value = get_term_meta($term->term_id, 'bg_color_name', true);
?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="bg_color">Background Color</label></th>
        <td>
            <input type="text" name="bg_color" value="<?php echo esc_attr($bg_color_value); ?>" class="my-color-field" />
            <p class="description">Enter your Background Color value here.</p>
        </td>
    </tr>
    <?php
}

// Save Background Color data for existing term
add_action('edited_course-cat', 'update_course_category_bg_colors');

function update_course_category_bg_colors($term_id)
{
    if (isset($_POST['bg_color'])) {
        $bg_color_value = sanitize_text_field($_POST['bg_color']);
        update_term_meta($term_id, 'bg_color_name', $bg_color_value);
    }
}

function save_category_bg_color($term_id)
{
    if (isset($_POST['bg_color'])) {
        $bg_color_value = sanitize_text_field($_POST['bg_color']);
        update_term_meta($term_id, 'bg_color_name', $bg_color_value);
    }
}


add_action('admin_enqueue_scripts', 'mw_enqueue_color_picker');
function mw_enqueue_color_picker()
{
    // first check that $hook_suffix is appropriate for your admin page
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('my-script-handle', get_stylesheet_directory_uri() . '/assets/js/main.js', array('wp-color-picker'), false, true);
}
