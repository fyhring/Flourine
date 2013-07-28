
	<h2>Users</h2>

	<table border="1" cellpadding="3" cellspacing="0" bordercolor="#000">
		<tr>
			<th>ID</th>
			<th>Email</th>
			<th>Name</th>
		</tr>
	<?php
	foreach($users as $user) {
		?>
		<tr>
			<td><?php echo $user->id; ?></td>
			<td><?php echo $user->email; ?></td>
			<td><?php echo $user->name; ?></td>
		</tr>
		<?php
	}
	?>
	</table>
