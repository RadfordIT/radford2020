<?php
get_header();

$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$cat_name = $category->cat_name;


$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat' => $cat_id,
    'posts_per_page' => 5,
);

  $idObj = get_category_by_slug($args->category_name); 
  $id = $idObj->term_id;
echo $id;
$arr_posts = new WP_Query( $args );

?>
<title><?php echo $cat_name;?> | Radford College</title>

<style>
h1 {
	font-size: 40px;
}

h1, h2 {
	margin: 0px;
	margin-bottom: 10px!important
}

</style>

<div class="container">

	<div class="row">
		<div class="col-md-12" id="bulletin_header">

			<h1>Radford Bulletin</h1>
			<h2><?php echo $cat_name ?></h2>
		</div>
	</div>

<div class="home-articles">

<?php
if ( $arr_posts->have_posts() ) :
 
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
		echo get_the_permalink();
		echo '<img src="http://alphaweb.radford.internal/wp-content/uploads/2019/12/RadWordPressfavicon-Small-1024x1024.png">';
		}

            ?>
		</a>
		<a href="<?php echo get_the_permalink(); ?>">
		<p class="entry-title"><?php the_title(); ?><br></a><span class="entry-desc"><?php echo get_the_excerpt(); ?></span</p>
		


        </article>
        <?php
    endwhile;
endif;
echo '</div>';
?>

</div>

<?php get_footer();?>
