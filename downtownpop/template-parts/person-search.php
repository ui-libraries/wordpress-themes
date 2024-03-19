<?php
$pods = pods( 'person' );
$params = array('limit'=>-1);


if (isset($taxonomy) && isset($taxvalue)) {
	$params['where']="$taxonomy.slug = '$taxvalue'";
	$typeName = pods($taxonomy, array('where'=>"slug='$taxvalue'"))->field('name');
	echo '<h2>'.$typeName.'</h2>';
} else {
	// Output a filter form with just a text box to search
echo $pods->filters();
}

$pods->find($params);

while ( $pods->fetch() ) {

//ar_dump($pods->field('content'));
   echo "<div class='col-lg-6'>

	<div class='col-inner'>
		<div class='view-grouping-header'><a href='".home_url('/')."person/".$pods->display('slug')."'><img src='".$pods->display('icon._src.thumbnail')."'/></a>
		</div>
		<div class='view-grouping-content'>
			<h3><a href='".home_url('/')."person/".$pods->display('slug')."'>".$pods->display('title')."</a></h3>
			<a class='btn-outline' href='".home_url('/')."person/".$pods->display('slug')."'>View</a>
			
			<div class='field-content'><hr>".$pods->field('excerpt')."  [<a class='underline' href='".home_url('/')."person/".$pods->display('slug')."'>more</a>]</div>


		</div>
	</div>
</div>";
		}

?>
