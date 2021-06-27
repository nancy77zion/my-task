function range( $start, $end, $increment ) {
  $result = [];
  if ( $increment == undefined )
    $increment = 1;
  $numLoops = Math.abs( ($end - $start)/ $increment ) + 1 ;
  for ( $i = 0; $i < numLoops; $i ++ ) {
	$result.push( $start );
    $start += $increment;
  }
  return $result;
}

function sum( $numArray ) 
  $arrayTotal = 0;
  $numLoops = $numArray.length;
  for ( $i = 0; $i < $numLoops; $i ++ ) {
    $arrayTotal += $numArray[$i];
  }
  return $arrayTotal;
}
