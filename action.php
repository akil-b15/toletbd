<?php
include 'dbconnect.php';
$conn = OpenCon();

if(isset($_POST['action'])){
  $sql = "SELECT * FROM rooms WHERE location !=''";

  if(isset($_POST['location'])){
    $location = implode("','", $_POST['location']);
    $sql .="AND location IN('".$location."')";
  }
  if(isset($_POST['type'])){
    $type = implode("','", $_POST['type']);
    $sql .="AND type IN('".$type."')";
  }
  if(isset($_POST['id'])){
    $id = implode("','", $_POST['id']);
    $sql .="AND id IN('".$id."')";
  }

  $result = $conn->query($sql);
  $output='';

  if ($result->num_rows>0) {
    while($row=$result->fetch_assoc()){
    $output .='<div class="col-md-3 mb-2">
                <div class="card-deck">
                  <div class="card border-secondary">
					<img src="img/'.$row['img_dir'].'"
						class="card-img-top">
                     
                    <div class="card-img-overlay">
                      <h6 style="margin-top:175px" class="text-light bg-info text-center rounded p-1">Type : '.$row['type'].'</h6>
                    </div>
                    <div class="card-body">
                      <br>
                      <br>
                      <br>
                      <br>
                    <p class="card-title text-danger">
                      Location : '.$row['location'].'<br>
					  
                      Bed : '.$row['id'].'<br>
                      Price : '.$row['price'].' BDT<br>

                    </p>


                  </div>
                  <div class="card">
                  <a href="#" class="btn btn-primary">Rent This House</a>
                </div>
                  </div>

                </div>
              </div>';
	}
  }
  else {
    $output = "<h3>NO Product Found!</h3>";
  }
  echo $output;
}
 ?>
