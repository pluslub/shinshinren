<?php
/**
 * 心身連 公式テーマ functions.php
 */


if ( ! defined( '_S_VERSION' ) ) {
    define( '_S_VERSION', '1.0.0' );
}

function shinshinren_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	
}
add_action( 'after_setup_theme', 'shinshinren_setup' );

function shinshinren_scripts() {
    wp_enqueue_style( 'common-style', esc_url( site_url( '/css/common.css' ) ), array(), _S_VERSION );
	wp_enqueue_style( 'contact-style', esc_url( site_url( '/css/contact.css' ) ), array('common-style'), _S_VERSION );
	wp_enqueue_style( 'news-style', esc_url( site_url( '/css/news.css' ) ), array('common-style'), _S_VERSION );
	wp_enqueue_style( 'news-detail-style', esc_url( site_url( '/css/news_detail.css' ) ), array('common-style'), _S_VERSION );

    wp_enqueue_script( 'gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js', array(), null, true );
    wp_enqueue_script( 'lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js', array(), null, true );
    wp_enqueue_script( 'common-js', esc_url( site_url( '/js/common.js' ) ), array('gsap', 'lenis'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'shinshinren_scripts' );

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/**
 * Ajaxで記事とページネーションを返す（shinshinrenテーマ用）
 */

add_action('wp_ajax_filter_posts', 'filter_posts_ajax');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts_ajax');

function filter_posts_ajax() {
    if (ob_get_length()) ob_clean();

	$paged  = (isset($_POST['paged']) && $_POST['paged']) ? intval($_POST['paged']) : 1;
    $cat_id = isset($_POST['category']) ? intval($_POST['category']) : 0;

	$args = array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'paged'          => $paged,
        'post_status'    => 'publish',
    );

    if ($cat_id !== 0) {
        $args['cat'] = $cat_id;
    }

    $query = new WP_Query($args);

    ob_start();
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            $categories = get_the_category(); ?>
            <article class="news-card">
                <div class="card-meta">
                    <span class="tag <?php echo esc_attr($categories[0]->slug); ?>"><?php echo esc_html($categories[0]->name); ?></span>
                    <time class="date"><img src="./assets/images/cal.svg" alt=""><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="card-title"><?php the_title(); ?></h3>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-link"></a>
            </article>
        <?php endwhile;
    else :
        echo '<p>記事が見つかりませんでした。</p>';
    endif;
    $posts_html = ob_get_clean();

    ob_start();
    if(function_exists('wp_pagenavi')) {
        wp_pagenavi(array('query' => $query));
    }
    $pagenavi_html = ob_get_clean();

    wp_send_json(array(
        'posts' => $posts_html,
        'nav'   => $pagenavi_html
    ));
}