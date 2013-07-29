<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>{$title}</title>
</head>
<body>

	{if="$isView==true"}
		{include="$view"}
	{else}
		{$view}
	{/if}

</body>
</html>