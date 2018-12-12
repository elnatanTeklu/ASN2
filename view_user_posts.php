<?php # Script 9.6 - view_users.php #2
// This script retrieves all the records from the users table.

$page_title = 'User Posts';
include('includes/header.html');

// Page header:
echo '<h1>User Posts</h1>';

require('mysqli_connect.php'); // Connect to the db.

$messages = 'dang';
// Make the query:
$q = "SELECT username AS name, user_id from users ORDER BY user_id ASC";
//$q = "SELECT CONCAT(users.last_name, ', ', users.first_name) AS name, messages.body as message FROM users INNER JOIN messages ON messages.user_id = users.user_id WHERE messages.user_id = 1";
$r = @mysqli_query($dbc, $q); // Run the query.

// Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.

	// Print how many users there are:
	echo "<p>There are currently $num users.</p>\n";

	// Table header.
	echo '<table width="60%">
	<thead>
	<tr>
		<th align="left">User Handle</th>
		<th align="left">See User Posts</th>
	</tr>
	</thead>
	<tbody>
';

	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['name'] . '</td><td align="left">' . '<a href="actual_posts.php?id=' . $row['user_id'] . '">View User Posts</a>'  .'</td></tr>
		';
	}

	echo '</tbody></table>'; // Close the table.

	mysqli_free_result ($r); // Free up the resources.

} else { // If no records were returned.

	echo '<p class="error">This user has no posts.</p>';

}

mysqli_close($dbc); // Close the database connection.

include('includes/footer.html');
?>