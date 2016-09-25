<h2>Join</h2>
<div class="row">
	<div class="col-md-6">
		So you want to join? (We usually are online from 17:00-22:00 UTC.)<br>
		Well then better connect to our Discord.<br>
		<br>
		<?php
			include("includes/steamgroup.php");
			echo(renderGroup(loadGroup('2BE83DBD7301732FB0EB6486D69E6D2C','GOWATTSU'),'view/steamGroupTemplate.html','view/steamMemberTemplate.html'));
		?>
	</div>
	<div class="col-md-6">
		<iframe src="https://discordapp.com/widget?id=223039036929867777&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
	</div>
</div>

