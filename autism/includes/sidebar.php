<div id="sidebar">

<div id="searchbox">
	
	<form action="search.php" method="get" enctype="multipart/form-data">
	
	<input type="text" name="value" placeholder="Search this site" size="25">
	
	<input type="submit" name="search" value="Search">

	
	<form>

</div>


<div id="social">
	<h2>Follow Us</h2>
	<img src="images/ability.jpg"></a>
	<img src="images/medication.jpg">
	<img src="images/development.jpg">
	<img src="images/perfect.jpg">

</div>
<h2 align="center">Recent Posts</h2>
<div>
<?php 
include("connect.php");

$query = "select * from post order by 1 DESC LIMIT 0,5";

	$run = mysql_query($query); 
	
	while ($row=mysql_fetch_array($run)){
	
	$post_id = $row['post_id'];
	$title = $row['post_title'];
	$image = $row['post_image'];

?>
	<center>
	
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<h3><?php echo $title; ?></h3></a>
	
	<a href="pages.php?id=<?php echo $post_id; ?>">
	<img src='images/<?php echo $image; ?>' width='140' height='140'></a>
	
	</center>
	
<?php } ?>

</div>

</div>