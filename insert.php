

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
   
    <title>Signup</title>

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
            <li class="current"><a href="signup.php">Signup</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>

    

    <section id="showcase_sign">
	<div class="container">
	<?php 
 
include 'dbconnect.php';
	$conn = OpenCon();

$status = "";
if(isset($_POST['Serial_Number']) )
{
	
	//$target = "img/".basename($_FILES['image']['name']);
	
$Serial_Number = $_REQUEST['Serial_Number'];
$ID =$_REQUEST['ID'];
$Location=$_REQUEST['Location'];
$Type = $_REQUEST['Type'];
$Price = $_REQUEST['Price'];
$image = $_FILES['image']['name'];

$ins_query="insert into rooms (Serial_Number,id,location,type,price,img_dir) values ('$Serial_Number','$ID','$Location','$Type','$Price','$image')";
mysqli_query($conn,$ins_query);

	
$status = "<h1 id='text1'>New Record Inserted Successfully.</h1><a href='ownerDashboard.php'><h1 id='text1'>          <ul>View Inserted Record</ul></h1></a>";
echo '<p>'.$status.'</p>';
/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}*/
}else{
CloseCon($conn);

?>
      
        <article id="main-col">
         


 <h1 class="page-title">Be A Proud User</h1>
      <div class="dark">
		<h1>Insert New Record</h1>
		<form name="form" method="post" action="" enctype="multipart/form-data"> 
			<p><input type="text" name="Serial_Number" placeholder="Enter Serial_Number" required /></p>
			<p><input type="text" name="ID" placeholder="Bed number" required /></p>
			<p><input type="text" name="Location" placeholder="Enter Location" required /></p>
			<p><input type="text" name="Type" placeholder="Enter Type" required /></p>
			<p><input type="text" name="Price" placeholder="Enter Price" required /></p>
			<div>
				<input type="file" name="image"/>
			</div>


			<div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" value="submit">Submit</button>
           </form> 
      </div>
    </section>
<?php } ?>
    
  </body>
</html>