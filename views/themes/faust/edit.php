<?=form_open("edit/post",array("id" => "editform"))?>
	<p><?=form_label("Your post's body")?></p>
	<p><?=form_textarea("body",$post->body)?></p>
	<p><?=form_label("&nbsp;")?></p>
	<p><?=form_submit("","Save")?><?=form_submit("","Cancel",'onClick="window.location=\''.base_url()."show/topic/".$post->url.'\';return false;"')?></p>
	<?=form_hidden("id",$post->id)?>
	<?=form_hidden("forum",$post->forum)?>
	<?=form_hidden("post",$post->url)?>
<?=form_close()?>