<?php
$redirecturl = get_post_meta($post->ID, 'redirpage_url', true);

if (!empty($redirecturl)) {
    echo "Redirecting...";
    header("Location: $redirecturl");
    die;
}
?>

<?php get_header();
$my_id = get_the_id();
?>

<title><?php echo get_the_title(); ?> | Radford College</title>


<div class="grid-x grid-margin-x">
    <div class="cell large-3 sidemenu small-order-2 large-order-1">
        <?php
        $parent_id = wp_get_post_parent_id($my_id);

        if ($post->post_parent)	{
	        $ancestors=get_post_ancestors($post->ID);
            $root=count($ancestors)-1;
	        $parent = $ancestors[$root];
        } else {
	        $parent = $post->ID;
        }

        $parent_title = get_the_title($parent);
        $parent_url = get_the_permalink($parent);

        ?>
        <?php global $post;
                    wp_list_pages( array(
                    'child_of' => $parent, // Only pages that are children of the current page
                    'sort_order' => 'ASC',
                    'sort_column' => 'menu_order',
                    'title_li' => '<a href=' . $parent_url . '>' . $parent_title . ': In This Section</a>'
                ));
            ?>
    </div>

    <div class="cell large-7 embeddedcontent small-order-1 large-order-2">
        <h1 class="pagetitle"><?php echo get_the_title(); ?></h1>
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
