<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<base href="<?= base_url() ?>" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
		<meta name="robots" content="all" /> 

		<?= link_tag("public/stylesheets/master.css"); ?>
		<?= link_tag("public/stylesheets/panel.css"); ?>

		<script src="public/scripts/jquery.js" type="text/javascript" charset="utf-8"></script>
		<script src="public/scripts/panel.js" type="text/javascript" charset="utf-8"></script>

		<title>Coding Deck : Panel</title> 
	</head>
	<body>
	
		<div id="header">
			<div class="logo">
				<h1>
					<a href="http://www.codingdeck.com">
						<span>Coding Desk</span>
					</a>
				</h1>
				The fabulous life of a developer
			</div>
			
			<div class="navigation">
				<?= anchor("blog", "Home"); ?>
				<?= anchor("blog/about", "About"); ?>
				<?= anchor("blog/contact", "Contact"); ?>
			</div>
		</div>
		
		<div id="content">
			<div id="panel">
				<h1>Panel</h1>
	
				<div class="new_entry">
					<a href="javascript:;" id="new_entry_link">Post a new entry</a>
				</div>
			
				<div id="form">
					<?= form_open('panel/create'); ?>
					<?= form_hidden('Author', 'German Rodriguez'); ?>
					
						<p>
							<?= form_label('Title','Title'); ?><br/>
							<?= form_input("Title"); ?>
						</p>
						<p>
							<?= form_label('Body','Body'); ?><br />
							<?= form_textarea(array('name' => 'Body', 'rows' => '12', 'cols' => '70')); ?>
						</p>
						<p class="submit">
							<?= form_submit("Submit", "Submit"); ?>
						</p>
					<?= form_close(); ?>
				</div>
			
				<table id="entries_list">
					<thead class="header">
						<td>Id</td>
						<td>Title</td>
						<td>Author</td>
						<td>Last Updated</td>
						<td>Actions</td>
					</thead>
					
					<? foreach($model as $entry): ?>
						<tr>
							<td><?= $entry->Id ?></td>
							<td><?= anchor("blog/comments/" . $entry->Id, $entry->Title); ?></td>
							<td><?= $entry->Author ?></td>
							<td><?= $entry->LastUpdated ?></td>
							<td>
								<?= anchor("panel/edit/" . $entry->Id, "edit"); ?>
								<?= anchor("panel/delete/" . $entry->Id, "delete",
									array(
										"onclick" => "javascript:return confirm('Are you sure you want to delete this post?')", 
										"style" => "padding-left: 15px;")
									);
								?>
							</td>
						</tr>
					<? endforeach; ?>
				
				</table>
			</div>
		</div>
	
	</body>
</html>