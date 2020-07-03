<?php

$no_breadcrumb;
function precontent() {
	$cookie_name = "watched_brand_film";


	if(!isset($_COOKIE[$cookie_name])) {
		?>
		<script type="text/javascript">
			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			setCookie('watched_brand_film', '1', 3650)
		</script>
		<span id="home-video-wrapper">
		<style>
			#home-video {
				height: 100vh;
				background: #000
			}

			#the-full-page {
				height: 100%
			}

			iframe {
				height: 100%;
				width: 100%
			}

		</style>
		<div id="home-video">
			<iframe src="https://player.vimeo.com/video/195227735?autoplay=1&loop=1&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
		</div></span>

		<script>
		function detectScroll() {
			window.onscroll = function(ev) {
				document.getElementById('home-video-wrapper').outerHTML = '';

			};
		};
		
		detectScroll();
		
		</script>
		<?php
	}
}
	?>
<?php get_header(); ?>

<title>Radford College - Truth, Compassion, Wisdom</title>
<div class="embeddedcontent">
	<div class="hero vid-hero">
		<div class="hero-video">
			<video autoplay="autoplay" muted preload="preload" loop="loop" poster="/wp-content/uploads/2020/01/RCMontage-Fallback.png">
				<source src="/wp-content/uploads/2020/01/RCMontage-WebHero.mp4" type="video/mp4">
			</video>
		</div>
		<div class="hero-para">
			<h1>Welcome to Radford College</h1>
		</div>
	</div>

	<div class="grid-x grid-margin-x">
		<div class="cell large-8">
			<div class="block-header">
					<h2 class="rad-icon-news">Latest News</h2>
				</div>

				<div class="home-articles">
					<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>

					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				            <?php
						echo '<a href="';
						echo get_the_permalink();
						echo '">';
						if ( has_post_thumbnail() ) {
				                	the_post_thumbnail();
						} else {
						echo '<img src="http://alphaweb.radford.internal/wp-content/uploads/2019/12/RadWordPressfavicon-Small-1024x1024.png">';
						}

				            ?>
						</a>
						<a href="<?php echo get_the_permalink(); ?>">
						<p class="entry-title"><?php the_title(); ?><br></a><span class="entry-desc"><?php echo get_the_excerpt(); ?></span</p>



				        </article>

					<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div class="home-articles">
		</div>
		<div class="cell large-4">
			<div class="block-header">
				<h2 class="rad-icon-paperclip">Quick Links</h2>
			</div>
			<div class="home-quicklinks">
				<?php global $post;
		                    wp_list_pages( array(
		                    'child_of' => '586', // Only pages that are children of the current page
		                    'sort_order' => 'ASC',
		                    'title_li' => '',
							'depth' => '1'
		                ));
		         ?>
			</div>
			<div class="block-header">
				<h2 class="rad-icon-twitter">Tweets</h2>
			</div>
			<div class="tweets"><?php echo do_shortcode("[rotatingtweets screen_name='radfordact' show_media='1']");?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
