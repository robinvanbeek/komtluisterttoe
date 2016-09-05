<?php
$sql = "SELECT title, album, artist FROM musics WHERE status = 1 ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
		<div class="col-md-3 content-grid">
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="images/v1.jpg" title="allbum-name"></a>
			
			<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
		</div>
		<div id="small-dialog" class="mfp-hide">
			<iframe src="https://player.vimeo.com/video/12985622"></iframe>
			
		</div>
		<?php
    }
} else {
    $result->mysqli_error;
}
$conn->close();
?>