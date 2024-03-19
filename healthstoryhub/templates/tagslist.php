<?php
/**
 * Template Name: tagslist
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

$tags = get_tags();
foreach ( $tags as $tag ) :
$tag_link = get_tag_link( $tag->term_id );
?>
<li>
<a href='<?php echo $tag_link;
?>' title='<?php echo $tag->name;
?>' class='<?php echo $tag->slug 
?>'><?php echo $tag->name ?></a>
</li>
<?php
endforeach;
?>
</ul>

</main><!-- #site-content -->


