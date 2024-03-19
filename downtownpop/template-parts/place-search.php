<?php
$pods = pods( 'place' );

if (isset($placetype)) {
	$params = array(
		"where" => "place_type.slug='$placetype'",
		'limit'=>-1
	);
	$typeName = pods('place_type', array('where'=>"slug='$placetype'"))->field('name');
	echo '<h2>'.$typeName.'</h2>';
} else $params = array('limit'=>-1);

// Output a filter form with just a text box to search
echo $pods->filters();

$pods->find($params);

while ( $pods->fetch() ) {
   echo "<div class='col-lg-6'>
	<div class='col-inner place-search'>
		<div class='view-grouping-header'><img src='".$pods->display('icon._src.thumbnail')."'/>
		</div>
		<div class='view-grouping-content'>
			<h3><a href='".home_url('/')."place/".$pods->display('slug')."'>".$pods->display('title')."</a></h3>
			<a class='btn-outline' href='".home_url('/')."place/".$pods->display('slug')."'>View</a>
            <div class='field-content-address'><strong>ADDRESS: </strong>".$pods->field('address')."</div>";




            if ($pods->field('place_type')) {
							echo "<strong>PLACE TYPE</strong><ul class='place-type-list'>";
				foreach ($pods->field('place_type') as $type) {
				echo "<li><a href='".home_url('/').'places/'.$type['slug']."'>".$type['name']."</a></li>";

				}
				echo "</ul>";
			}


		echo "</div>
	</div>
</div>";
		}

echo "<div style='clear:both;'></div>";

?>
