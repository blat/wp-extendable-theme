<form method="get" action="<?php bloginfo('url'); ?>/">
	<input type="text" value="Rechercher sur le blog ..." onFocus="if (!this.cliquer) { this.value=''; this.cliquer=true; }" onBlur="if(this.value=='') { this.value='Rechercher sur le blog ...'; delete this.cliquer; }" name="s" id="s" />
	<input type="submit" class="submit" value="Go »" />
</form>
