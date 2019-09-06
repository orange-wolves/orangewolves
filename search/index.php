<?php require '/../resources/php/dbConnectOrangeWolves.php';
?><!DOCTYPE html>
<html>
	<header>
		<h1>Search Results</h1>
		<?php include("/../resources/layout/header.html"); ?><br>
	</header>
	<body>
		<?php
		$visabletext = $_GET['searchtext'];//to be visable for the user
		$visabletext = htmlspecialchars($visabletext);
		$searchtext = $_GET['searchtext'];
		$searchtext = trim($searchtext);
		$searchtext = strip_tags($searchtext);
		$searchtext = addslashes($searchtext);

		echo "<p>Following results for: $visabletext</p>";

		$sql = "SELECT teams.roles
				FROM orangewolves.contact
				INNER JOIN orangewolves.teams ON orangewolves.contact.nameID = orangewolves.teams.nameID
				WHERE name LIKE '%$searchtext%';";

		echo "<p>$sql</p>";
		$result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

		$num_rows = mysqli_num_rows($result);

		echo "$num_rows";

		while ($line_array = mysqli_fetch_array($result))
		{
		echo "<div>";
		echo "<table><tr>";
		echo "<td>$line_array[0]</td>";//NameId column
		echo "</table></tr>";
		echo "</div>";
		}

		$sql = "SELECT * FROM orangewolves.events WHERE name LIKE '%$searchtext%' OR description LIKE '%$searchtext%';";
		$result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

		while ($line_array = mysqli_fetch_array($result))
		{
		echo "<div>";
		echo "<table><tr>";
		echo "<td>$line_array[0]</td>";
		echo "<td>$line_array[1]</td>";
		echo "<td>$line_array[2]</td>";
		echo "<td>$line_array[3]</td>";
		echo "<td>$line_array[4]</td>";
		echo "<td>$line_array[5]</td>";
		echo "<td>$line_array[6]</td>";
		echo "</table></tr>";
		echo "</div>";
		}

		$sql = "SELECT * FROM orangewolves.teams WHERE roles LIKE '%$searchtext%' OR description LIKE '%$searchtext%';";
		$result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

		while ($line_array = mysqli_fetch_array($result))
		{
		echo "<div>";
		echo "<table><tr>";
		echo "<td>$line_array[0]</td>";
		echo "<td>$line_array[1]</td>";
		echo "<td>$line_array[2]</td>";
		echo "<td>$line_array[3]</td>";
		echo "<td>$line_array[4]</td>";
		echo "</table></tr>";
		echo "</div>";
		}

		$sql = "SELECT * FROM orangewolves.bus WHERE description LIKE '%$searchtext%' OR location LIKE '%$searchtext%';";
		$result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

		while ($line_array = mysqli_fetch_array($result))
		{
		echo "<div>";
		echo "<table><tr>";
		echo "<td>$line_array[0]</td>";
		echo "<td>$line_array[1]</td>";
		echo "<td>$line_array[2]</td>";
		echo "<td>$line_array[3]</td>";
		echo "</table></tr>";
		echo "</div>";
		}

		echo "<p>End results for: $visabletext</p>";
		?>
	</body>

	<?php include("../resources/layout/footer.html"); ?>

</html>