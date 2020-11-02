<?php
 
include 'dbconnect.php';
	$conn = OpenCon();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">TO-Let</span> BD</h1>
        </div>
		<nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="insert.php">Insert New Record</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
	<div class="container">
      <div class="container">
        <h1>Welcome to the Dashboard</h1>
        <nav>
		   <div class="search-container">
				<form action="http://localhost/project2/search.php" method="GET">
					<input type="text" placeholder="Search" name="query">
					<button type="submit" class="button_1">Search</button>
				</form>
			</div>
		</nav>
	  </div>
	</div>
	</section>
	<div class="dark1">
	<div class="backgroundColor">
		<div class="form">
		<h5></h5>
		<h2>Inserted Data</h2>
		<table width="100%" border="1" style="border-collapse:collapse;">
		<thead>
		<tr><th><strong>Bed</strong></th><th><strong>Location</strong></th><th><strong>Type</strong></th><th><strong>Price</strong></th><th><strong>Image</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
		</thead>
		</div>
	</div>
    </div>
  </body>
<?php
$count=1;
$sel_query="Select * from rooms ORDER BY Serial_Number;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["id"]; ?></td><td align="center"><?php echo $row["location"]; ?></td><td align="center"><?php echo $row["type"]; ?></td><td align="center"><?php echo $row["price"]; ?></td><td align="center"><?php echo "<img src='img/".$row['img_dir']."' >"; ?></td><td align="center"><a href="edit.php?Serial_Number=<?php echo $row["Serial_Number"]; ?>">Edit</a></td><td align="center"><a href="delete.php?Serial_Number=<?php echo $row["Serial_Number"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
<footer>
      <div class="form">
        <h1><a href="login.php"><h3>Log out</h3></a></h1>

        </div>
      <p> Created by Akil</p>
    </footer>


</html>
