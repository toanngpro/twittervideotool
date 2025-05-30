<?php
add_action('wp_enqueue_scripts', function() {
    // Loại bỏ tất cả style của Flatsome trên trang custom
    if (is_page_template('home-video-download.php')) {
        wp_dequeue_style('flatsome-style');
        wp_dequeue_style('flatsome-main');
        wp_dequeue_style('flatsome-css');
        wp_dequeue_style('flatsome-theme');
    } else {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }

    // Enqueue style và font của custom
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css', [], '1.0.1');
    wp_enqueue_style('inter-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', [], null);

    // Enqueue file lightning.js
    if (is_page_template('home-video-download.php')) {
        wp_enqueue_script('lightning-js', get_stylesheet_directory_uri() . '/js/lightning.js', [], '1.0.0', true);
    }

    // Loại bỏ script không cần thiết trên trang custom
    if (is_page_template('home-video-download.php')) {
        wp_dequeue_script('flatsome-js');
    }
}, 999);

// Loại bỏ các thành phần không mong muốn trong wp_footer trên trang custom, nhưng giữ lại admin bar
add_action('wp_footer', function() {
    if (is_page_template('home-video-download.php') && !is_admin_bar_showing()) {
        remove_all_actions('wp_footer');
        wp_scripts()->do_items();
    }
}, 1);

// In CSS để ẩn #main-menu khi đã login và ở homepage
add_action('wp_footer', function() {
    if (is_page_template('home-video-download.php') && is_user_logged_in() && is_front_page()) {
        echo '<style>#main-menu { display: none !important; }</style>';
    }
}, 999);

// Đảm bảo admin bar được hiển thị nếu người dùng đã đăng nhập
add_action('after_setup_theme', function() {
    if (is_page_template('home-video-download.php') && is_user_logged_in()) {
        show_admin_bar(true);
    }
});
?>