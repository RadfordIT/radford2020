<?php get_header();?>

<?php
$bulletin_obj_list = get_the_terms( $post->ID, 'bulletin' );
$my_bulletin_slugs = wp_list_pluck($bulletin_obj_list, 'slug');
$my_main_bulletin_slug = $my_bulletin_slugs[0];

$my_bulletin = get_term_by('slug', $my_main_bulletin_slug, 'bulletin');
?>
<title><?php echo get_the_title(); ?> | Radford College</title>

<div class="grid-x grid-margin-x">
	<div class="cell large-3 sidemenu small-order-2 large-order-1">
		<h2><a href="/index.php/bulletin/<?php echo $my_bulletin->slug ?>"><?php echo $my_bulletin->name ?>: In This Bulletin</a></h2>

	</div>

	<div class="cell embeddedcontent large-7 small-order-1 large-order-2">
		<h1 class="pagetitle"><?php echo get_the_title(); ?></h1>
		<i><?php $writtenby = get_post_meta($post->ID, 'writtenby_writtenby', true);

		if (!empty($writtenby)) {
			echo '<i>Written by ';
			echo $writtenby;
			echo '</i><br><br>';
		}; ?></i>
		<span class="article_post_thumb wp-block-image"><?php the_post_thumbnail(); ?></span>
		<?php
			while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
					<?php the_content(); ?> <!-- Page Content -->
			<?php
			endwhile; //resetting the page loop
			wp_reset_query(); //resetting the page query
		?>
	</div>
</div>

<?php get_footer();?>
