<?php

require 'functions.php';

require 'header.php';

$db = connect();
$recent_posts = get_recent_posts($db);

?>
<div class="container blog">
	<h2>Blog</h2>
	<p>Keep up with the latest news.</p>
	<div class="row">
		<?php foreach ($recent_posts as $post): ?>
			<div class="col-xs-4">
				<img src="<?php echo $post->thumbnail_url; ?>">
				<h3><?php echo $post->title; ?></h3>
				<span><?php echo $post->date; ?></span>
				<p><?php echo substr($post->content, 0, 50); ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php

require 'footer.php';