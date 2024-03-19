

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/col_maps.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox_alt.css"/>


<script src="<?php echo get_template_directory_uri(); ?>/js/col_maps.js"></script>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section id="block-col-maps-map" class="block block-col-maps clearfix">


		  <div id="map"></div>
		</section> <!-- /.block -->
		<section>



<div id="map_list_container">

	<div id="map_list" class="maplist">


	<ul>

			<?php
			//vars $tourtype and $tourquery available from url.
			$story = FALSE;

			//determine type of tour from query and get appropriate records
			if (isset($tourtype) && in_array($tourtype, array('person', 'place_type', 'neighborhood', 'walkingtour')) && $tourquery) {

				if ($tourtype === "person") {
					$story = TRUE;
					$params = array('where' => "related_person.post_name = '$tourquery'", 'limit' => -1);
					$places = pods('story', $params);
				} else {
					$params = array( 'where' => "$tourtype.slug = '$tourquery'", 'limit' => -1 );
					$places = pods('place', $params);
				}
			} else {
				//default is display all
				$params = array('limit'=>-1);
				$places = pods('place', $params);
			}
			?>

			<?php /* display places */ ?>
			<?php if ( 0 < $places->total() ) : ?>

				<?php
				$i = 0;
				$modal = '';
				?>

				<?php while ( $places->fetch() ) : ?>

					<?php
					$name = $places->field( 'name' );
					$content = $places->field( 'content' );
					$id = $places->field( 'id' );
					$storyNames = array();

					if ($story) {
						$icon = $places->display( 'place_relation.icon._src.thumbnail' );
						$address = $places->display( 'place_relation.address' );
						$lat = $places->display( 'place_relation.lat' );
						$long = $places->display( 'place_relation.long' );
					} else {
						$icon = $places->display( 'icon._src.thumbnail' );
						$address = $places->display( 'address' );
						$lat = $places->display( 'lat' );
						$long = $places->display( 'long' );
						//get list of associated story names for normal places
						$storyparams = array('where' =>"place_relation.id = '$id'", 'limit' => 5);
						$placeStories = pods('story', $storyparams);
						while ( $placeStories->fetch()) {
							array_push($storyNames, $placeStories->field('name'));
						}
						#print_r($storyNames);
					}

					//build modal content
					$modal.= '<div id="myModal'.$i.'" class="modal fade" role="dialog">
						 <div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button><h3 class="modal-title">'.$name.'</h3>

								</div>
								<div class="modal-body">
									<img src="'.$icon.'" class="left circle">
									<div class="marker_address">'.$address.'</div>

									'.$content.'

									<h4><strong>Related Stories</strong></h4>
									<ul class="modal-list">';
									foreach ($storyNames as $storyName){
										$modal.='<li>'.$storyName.'</li>';
									}
									$modal.='</ul>
									<p class="button-link">
										<a href="'.get_permalink($id).'">Open Full Page</a>
									</p>
								</div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							  </div>
							</div>
						</div>
					</div>';

					?>

					<?php /* build map list display */ ?>
					<li id='<?php echo $id; ?>'>
						<div class='infoWindow'>
							<div class='marker_title'><?php echo $name; ?></div>
							<div class='marker_address'><?php echo $address; ?></div>
							<div class='marker_brief'>
								<!-- Trigger the modal with a button -->
								<button type='button' data-toggle='modal' data-target='#myModal<?php echo $i; ?>'>OPEN</button>
							</div>
						</div>
						<div class='marker_long'><?php echo $lat; ?></div>
						<div class='marker_lat'><?php echo $long; ?></div>
						<div class='marker_id'><?php echo $i; ?></div>
						<a class='list-link'></a>
					</li>
					<?php $i++; ?>
				<?php endwhile; ?>

			<?php else: ?>
				<p>Whoops, no places found!</p>
			<?php endif; ?>
		</ul>
	</div>

</div>




<!-- Modal -->


	<?php echo $modal; ?>


</section>

<section id="block-col-maps-slidebuttons" class="block block-col-maps clearfix">
	<div class="slideButtons">
		<button id="prev"><</button>
		<button id="next">></button>
	</div>
</section>



<!-- JS -->
<script src="/cityoflit/wp-content/themes/cityoflit/map/mobileclick.js"></script>
<script src="/cityoflit/wp-content/themes/cityoflit/map/endscript.js"></script>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
