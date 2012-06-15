{include:header}
	
<h1>Members</h1>

<div class="search">

	<form method="post" action="/users/search" class="default">

		<label for="searchbox">Search:</label>
		<input type="text" name="query" id="searchbox" maxlength="255" value="" class="searchbox" />
		<input type="image" src="/static/images/btn_search.gif" id="searchbutton" />
		<br class="clear" />

	</form>		

</div>

{if members}

	{pagination}

	<br class="clear" />

	{members}
	
		<div class="avatarbox">
			{member:avatar}
			<br />
			<a href="{member:link}">{member:name}</a>
		</div>
	
	{/members}
	
	<br class="clear" /><br />

	{pagination}

{else}

	<p>No users found.</p>

{/if}

{include:footer}