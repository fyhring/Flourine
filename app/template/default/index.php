<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>{$title}</title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
	
	<div class="wrapper">
		{if="$isView==true"}
			{include="$view"}
		{else}
			{$view}
		{/if}
	</div>

</body>
</html>