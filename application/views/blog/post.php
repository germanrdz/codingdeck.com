<div id="blog">
	
	<? if ($model) : ?>
	
	<? foreach($model as $entry): ?>
	
		<h1><a href="javascript:;"><?= $entry->Title ?></a></h1>	
		<div class="post_footer">
			posted by: <b><?= $entry->Author ?></b> at <?= unix_to_human($entry->LastUpdated); ?>
		</div>	
		
		<div class="post_body">
			<?= $entry->Body ?>
		</div>	
	
	<? endforeach ?>
	
	<h2>User Comments</h2>
	
	
	<? if (isset($user)) : ?>
		<div id="form" style="overflow: hidden">
			<?= form_open('blog/saveComment'); ?>
			<?= form_hidden('EntryId', $model[0]->Id); ?>
			<?= form_hidden('AuthorName', $user->name); ?>
			<?= form_hidden('AuthorId', $user->id); ?>
		
			<div style="float: left; padding-top: 30px; padding-right: 10px;">
				<img src="http://graph.facebook.com/<?= $user->id ?>/picture?type=square" align="left"/> 
			</div>
		
			<div style="float: left">
				<?= form_label('Hi '. $user->name,'Body'); ?><br />
				<?= form_textarea(
					array('name' => 'Body', 'rows' => '8', 'cols' => '70', 'class' => 'comment_empty'), 
					"Write a comment..."); ?><br />
				<input type="submit" id="submitComment" value="Submit" style="display: none" />
			</div>
			
			<? form_close(); ?>
		</div>
	<? else : ?>
		<div id="login" style="padding-left: 50px;">
			<fb:login-button></fb:login-button> to leave a comment.
		</div>
	<? endif ?>
	
	
	<div id="comments">

		<? if (count($comments) > 0) : ?>
			<? foreach ($comments as $comment) : ?>
				<div class="comment">
					<div class="avatar">
						<img src="http://graph.facebook.com/<?= $comment->AuthorId ?>/picture?type=square" align="left"/> 
					</div>
					<div class="body">
						<small><?= unix_to_human($comment->Date); ?></small> <br/>
						<b><?= $comment->AuthorName ?></b> said: <br />
						<?= $comment->Body ?>
					</div>
				</div>
			<? endforeach; ?>
		<? else : ?>
			No comments had been made.
		<? endif; ?>
	</div>
	
	<? else: ?>
		No post found
	<? endif; ?>
	
</div>

<script type="text/javascript">
     SyntaxHighlighter.all()
</script>