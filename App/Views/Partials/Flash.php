<?php if ($messages = \App\Flash::getMessages()):?>
	<?php foreach ($messages as $message): ?>
			<?= $message ?>

	<?php endforeach ?>
<?php endif ?>
