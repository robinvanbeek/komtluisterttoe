<?php
$sql = "SELECT title, sub, image FROM trending WHERE status = 1 ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
		<li>
			<div class="banner-img">
				 <img src="<?php echo $row['image']; ?>" class="img-responsive" alt="<?php echo $row['title']; ?>">
			 </div>
			<div class="banner-info">
				<a class="trend">TRENDING</a>
				<h3><?php echo $row['title']; ?></h3>
				<p><?php echo $row['sub']; ?></p>
			</div>
		</li>
		<?php
    }
} else {
    exit;
}
$conn->close();
?>