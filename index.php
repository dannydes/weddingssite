<?php

require 'functions.php';

require 'header.php';

$db = connect();
$recent_posts = get_recent_posts($db);

?>
<div class="intro text-block">
	<h1>Luxury Wedding & Event Planners</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate quam nec ligula euismod pulvinar. Mauris vehicula est id tincidunt rutrum. Pellentesque dapibus orci quis lectus auctor, sed vulputate ipsum consectetur. Aenean sodales nunc quis finibus vulputate. Nullam non ornare felis. Suspendisse et lorem sit amet dui dictum luctus ac eu leo. In viverra, lorem eu convallis gravida, enim odio varius mi, ac auctor nisi ligula id velit. Donec tincidunt sit amet felis sit amet elementum. In diam risus, tempus nec congue ac, porttitor ut nulla. Vestibulum molestie nibh et ipsum mattis consequat.</p>
	<button class="primary-btn">REAd more</button>
</div>
<div class="container blog">
	<div class="text-block">
		<h2>Blog</h2>
		<p>Keep up with the latest news.</p>
	</div>
	<div class="row">
		<?php foreach ($recent_posts as $post): ?>
			<div class="col-xs-4">
				<img src="<?php echo $post->thumbnail_url; ?>">
				<h3><?php echo $post->title; ?></h3>
				<span><?php echo $post->date; ?></span>
				<p><?php echo substr($post->content, 0, 50); ?>... <a href="<?php echo $post->url; ?>" title="<?php echo $post->title; ?>" class="default-link">Read More</a></p>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php

require 'footer.php';