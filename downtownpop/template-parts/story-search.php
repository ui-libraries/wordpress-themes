<?php
$pods = pods( 'story' ); 

// Output a filter form with just a text box to search 
echo $pods->filters(); 

$params = array('limit'=>-1);
$pods->find($params); 

while ( $pods->fetch() ) { 
   echo "<div class='col-lg-6'>
	<div class='col-inner'>
		<div class='view-grouping-header'><img src='".$pods->display('related_person.icon._src.thumbnail')."'/>
		</div>
		<div class='view-grouping-content'>
			<h3><a href='".home_url('/')."story/".$pods->display('slug')."'>".$pods->display('title')."</a></h3>
			
		</div>
	</div>
</div>";
		} 

echo "<div style='clear:both;'></div>";

?>