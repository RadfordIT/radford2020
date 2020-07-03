<?php
get_header();
$requested_bulletin_id = get_queried_object()->term_id;
$bulletin = get_term_by('id', $requested_bulletin_id, 'bulletin');

$bulletin_name = $bulletin->name;
$bulletin_slug = $bulletin->slug;
$bulletin_id = $bulletin->id;


?>
<title><?php echo $bulletin_name?> | Radford College</title>

<style>
h1 {
	font-size: 40px;
}

h1, h2 {
	margin: 0px;
	padding-bottom: 10px!important;
	padding-left: 20px
}

</style>



<?php

$arr_posts = new WP_Query( array(
    'post_type' => 'post',
	'posts_per_page' => -1,
    'tax_query' => array(
        array (
            'taxonomy' => 'bulletin',
            'field' => 'slug',
            'terms' => $bulletin_slug,
        )
    ),
) );

?>


<div class="grid-x grid-margin-x">
<div class="cell">
<div class="bulletin-header">
	<h1>Radford Bulletin</h1>
	<h2><?php echo $bulletin_name ?></h2>
</div>
</div>
</div>
<div class="grid-x grid-margin-x">
<div class="announcements-pane cell large-4">

<h2 class="titleribbon">Announcements</h2>
<?php
$loop = new WP_Query( array(
	'post_type' => 'announcement',
    'tax_query' => array(
        array (
            'taxonomy' => 'bulletin',
            'field' => 'slug',
            'terms' => $bulletin_slug,
        )
    ),
) );
?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); $announcementid = get_the_id();  ?>
	<a href="<?php echo get_post_meta($announcementid, 'announcements_url', true);?>" target="_blank">
	<div class="announcement <?php echo get_post_meta($announcementid, 'announcements_color', true);  ?> <?php echo get_post_meta($announcementid, 'announcements_icon', true);  ?>">
		<div class="announcement-body">
			<p class="announcement_title"><?php echo get_the_title();?></p>
			<p class="announcement_desc"><?php echo get_post_meta($announcementid, 'announcements_description', true);  ?></p>
		</div>
	</div>
	</a>
<?php endwhile; wp_reset_query(); ?>




</div>
<div class="home-articles cell large-8">
<h2 class="titleribbon">Articles</h2>
<?php
if ( $arr_posts->have_posts() ) {

    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
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
    endwhile;} else {
	echo '<br><h2>No articles in this bulletin.</h2>';
}
echo '</div>';
?>
</div>


<?php get_footer(); ?>
