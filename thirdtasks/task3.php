<?php
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
 "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
  "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
  asort($cities);
  echo "<ul> ";
  foreach( $cities as $city => $capital){
    echo "<li> the capital of ".$city." is".$capital."</li>";

  }
  
  echo "</ul>";
  
  ?>