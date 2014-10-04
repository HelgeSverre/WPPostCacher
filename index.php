<?php 

include("WPPostCacher.php");
// Initialize the WPPostCacher class
$BlogPosts = new WPPostCacher(
	"http://helgesverre.com/blog/feed", 
	"cache.html"
);

// Run the app
$BlogPosts->Run();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>WPPostCacher Example</title>
</head>
<body>

	<h1>Latest blog posts</h1>
	<ul class="posts">
		<?php 
		// Display the list items.
		$BlogPosts->DisplayPosts(); 
		?>
	</ul>

</body>
</html>