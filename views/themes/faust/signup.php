<?=form_open("create/user")?>
	<p><?=form_label("Username")?></p>
	<p><?=form_input("username")?></p>
	<p><?=form_label("Password")?></p>
	<p><?=form_input("password")?></p>
	<p><?=form_label("Email")?></p>
	<p><?=form_input("email")?></p>
	<p><?=form_label("Timezone")?></p>
	<p><?=timezone_menu()?></p>
	<p><?=form_label("Editor of choice")?></p>
	<p><?=form_dropdown("editor",array("textile" => "Textile","markdown" => "Markdown"))?></p>
	<p><?=form_label("&nbsp;")?></p>
	<p><?=form_submit("","Signup")?></p>
<?=form_close()?>