<?php
$rows = array();
$count = 0;
if (($handle = fopen("input.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    	if($count > 0) {
    		$rows[] = $data;
    	}
    	
    	$count++;
    }
    fclose($handle);
}

usort($rows, function($a, $b) {
	return $a[1] <=> $b[1];
});


foreach($rows as $row) {
	?>
	<div style="border:1px solid">
	<p><?php echo $row[0]; ?></p>
	<p><?php echo $row[1]; ?></p>
	<p><?php echo $row[2]; ?></p>
	</div>
<?php
	
}
?>