<form role="search" method="get" action="<?php echo home_url('/'); ?>">
	<div class="input-field">
		<i class="material-icons left prefix">search</i>
		<input type="text" class="" id="first" value="<?php echo get_search_query(); ?>" name="s" class="validate">
		<label for="first">Search</label>
	</div>
</form>