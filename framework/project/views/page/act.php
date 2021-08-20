<div>
	это представление
	действия act контроллера page
</div>
<h1><?= $header ?></h1>
<ul>
	<?php foreach ($users as $user): ?>
		<li><?= $user; ?></li>
	<?php endforeach; ?>
</ul>