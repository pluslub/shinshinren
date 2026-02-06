<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shinshinren
 */

get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main>
    <article class="post-detail">
        <header class="post-header">
            <div class="post-header__inner">
                <span class="post-label">NEWS</span>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
<!--                   <span class="tag tag-news"><?php the_category(); ?></span>-->
<!--                    <time class="date" datetime="2025-11-01"><?php echo get_the_date(); ?></time>-->
                </div>
            </div>
        </header>

        <div class="post-container">
			<?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('full'); ?>
            </div>
			<?php endif; ?>
            <div class="post-body">
                <p class="post-lead">
                    <?php the_title(); ?>
                </p>
                
                <div class="post-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
	<?php endwhile; endif; ?>
    <section class="related-posts">
        <div class="related-header">
            <h2>その他のお知らせ</h2>
            <button class="primary-button yellow-btn"><a href="./news">お知らせ一覧</a></button>
        </div>
				<div class="related-grid">
<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC'
));
foreach($categories as $category) :
    // 2. 各カテゴリごとに最新の1件を取得するクエリを設定
    $args = array(
        'posts_per_page' => 1,          // 1件だけ取得
        'cat'            => $category->term_id, // 現在のループのカテゴリIDを指定
        'post_type'      => 'post',
        'post_status'    => 'publish'
    );
	$latest_post_query = new WP_Query($args);

	if ($latest_post_query->have_posts()) :	
        while ($latest_post_query->have_posts()) : $latest_post_query->the_post();
?>			
            <article class="related-item">
				<a href="<?php the_permalink(); ?>" class="post-thumbnail-link">
				<div class="post-thumbnail">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('full'); ?>
					<?php else : ?>
						<img src="<?php echo esc_url( home_url('assets') ); ?>/images/non-thumbnail.png">
					<?php endif; ?>
				</div>
				</a>
					<div class="related-meta">
                    <span class="tag <?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></span>
                </div>
                <h3 class="related-title"><?php the_title(); ?></h3>
            </article>
<?php endwhile;
    endif;
    
    wp_reset_postdata();

endforeach;
?>
			</div>
	</section>
</main>
<?php
get_footer();
