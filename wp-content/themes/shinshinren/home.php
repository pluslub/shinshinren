<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shinshinren
 */

get_header();
?>
<main>
    <section class="fv_news">
        <div class="fv__text">
            <div class="fv__inner">
                <span>LATEST NEWS</span>
                <h2>お知らせ</h2>
                <p>当法人からのお知らせやイベント情報、活動報告をお届けします</p>
            </div>
        </div>
    </section>

    <section class="news-archive">
        <div class="sort-container">
            <ul class="sort-list">
				<li class="<?php echo ( !is_category() ) ? 'active' : '#'; ?>" data-id="0"><a href="#">すべて</a></li>
				<?php
				$categories = get_categories(array(
					'orderby' => 'name',
					'order'   => 'ASC'
				));
				foreach($categories as $category) :
					$active_class = (is_category($category->term_id)) ? 'active' : '#';
					?>
                <li class="<?php echo $active_class; ?>" data-id="<?php echo $category->term_id; ?>"><a href="#"><?php echo $category->name; ?></a></li>
				<?php endforeach; ?>
			</ul>
        </div>
		<?php
		  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		  $args = array(
			'post_type' => 'post',
			'posts_per_page' => 10,
			'paged' => $paged
		  );
		  $query = new WP_Query( $args );
		?>
		<div class="news-grid">
            <?php if( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <?php
                    $categories = get_the_category();
                    ?>
			<article class="news-card">
                <div class="card-meta">
                    <span class="tag <?php echo $categories[0]->slug; ?>"><?php echo $categories[0]->name; ?></span>
					<time class="date"><img src="./assets/images/cal.svg" alt=""><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="card-title"><?php the_title(); ?></h3>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="card-link"></a>
            </article>

			<?php endwhile; wp_reset_postdata(); ?>
			<?php else : ?>
			<p class="">記事が見つかりませんでした。</p>
			<?php endif; ?>
        </div>
		<div class="pagination">
			<?php
			if(function_exists('wp_pagenavi')) {
				  wp_pagenavi(array('query' => $query));
			  }
			?>
		</div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(function($) {

    function ajax_fetch_posts(catId, paged) {
        const grid = $('.news-grid');
        const pagination = $('.pagination');

        grid.animate({'opacity': 0.5}, 200);

        $.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'filter_posts',
                category: catId,
                paged: paged
            },
            success: function(data) {
                grid.html(data.posts).animate({'opacity': 1}, 200);
                pagination.html(data.nav);
            }
        });
    }
	
    $('.sort-list li').on('click', function(e) {
        e.preventDefault();
        const catId = $(this).data('id') || 0;
        $('.sort-list li').removeClass('active');
        $(this).addClass('active');
        ajax_fetch_posts(catId, 1);
    });


	$(document).on('click', '.wp-pagenavi a', function(e) {
    e.preventDefault();
    const catId = $('.sort-list li.active').data('id') || 0;
    const href = $(this).attr('href');

    let paged = 1;

    const matchPaged = href.match(/[?&]paged=(\d+)/);
    const matchPath  = href.match(/\/page\/(\d+)/);
    const matchLast  = href.match(/\/(\d+)\/?$/);

    if (matchPaged) {
        paged = matchPaged[1];
    } else if (matchPath) {
        paged = matchPath[1];
    } else if (matchLast) {
        paged = matchLast[1];
    }

    ajax_fetch_posts(catId, paged);
});
	
});
</script>
<?
get_footer();
