<div id="blog">
	<? foreach($model as $entry): ?>
	
		<h1><?= anchor("blog/comments/" . $entry->Id, $entry->Title); ?></h1>	
		<div class="post_footer">
			posted by: <b><?= $entry->Author ?></b> at <?= $entry->LastUpdated ?>
		</div>	
		
		<div class="post_body">
			<?= $entry->Body ?>
		</div>	
	
	<? endforeach ?>
</div>

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>