<div id="blog">
	<? foreach($model as $entry): ?>
	
		<h1><?= anchor("blog/post/" . $entry->Id, $entry->Title); ?></h1>	
		<div class="post_footer">
			posted by: <b><?= $entry->Author ?></b> on <?= unix_to_human($entry->LastUpdated); ?> |
			<?= anchor("blog/post/". $entry->Id, "(" . $entry->Comments . ") Comments"); ?>
		</div>	
		
		<div class="post_body">
			<?= $entry->Body ?>
		</div>	
	
	<? endforeach ?>
	
	<div id="pagination">
		<?= $this->pagination->create_links(); ?>
	</div>
	
</div>

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>