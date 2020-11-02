<?php
include 'dbconnect.php';
$conn = OpenCon();
/**/

//CloseCon($conn);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <title>Customer</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h3 class="text-center text-light bg-info p-2">You Will Find House You Are Searching</h3>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <h5>Search Here</h5>
          <hr>
          <h6 class="text-info">Select Area</h6>
          <ul class="list-group">
            <?php
              $sql="SELECT DISTINCT location FROM rooms ORDER BY location";
              $result=$conn->query($sql);
              while ($row=$result->fetch_assoc()) {

             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['location']; ?>" id="location"><?= $row['location']; ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>
          <h6 class="text-info">Select Type</h6>
          <ul class="list-group">
            <?php
              $sql="SELECT DISTINCT type FROM rooms ORDER BY type";
              $result=$conn->query($sql);
              while ($row=$result->fetch_assoc()) {

             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['type']; ?>" id="type"><?= $row['type']; ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>
          <h6 class="text-info">Select Bed Number</h6>
          <ul class="list-group">
            <?php
              $sql="SELECT DISTINCT id FROM rooms ORDER BY id";
              $result=$conn->query($sql);
              while ($row=$result->fetch_assoc()) {

             ?>
             <li class="list-group-item">
               <div class="form-check">
                 <label class="form-check-label">
                   <input type="checkbox" class="form-check-input product_check" value="<?= $row['id']; ?>" id="id"><?= $row['id']; ?>
                 </label>
               </div>
             </li>
           <?php } ?>
          </ul>

        </div>
        <div class="col-lg-9">
            <h5  id="textChange">Houses for rent</h5>
            <hr>
            <div  class="text-center">
              <img src="img/loader.gif" id="loader" width="200" style="display:none;">
            </div>
            <div class="row" id="result">
              <?php
                $sql="SELECT * from rooms";
                $result=$conn->query($sql);
                while ($row=$result->fetch_assoc()) {

              ?>
              <div class="col-md-3 mb-2">
                <div class="card-deck">
                  <div class="card border-secondary">
					<img src="img/<?= $row['img_dir']; ?>"
						class="card-img-top">
                    <div class="card-img-overlay">
                      <h6 style="margin-top:175px" class="text-light bg-info text-center rounded p-1">Type : <?= $row['type']; ?></h6>
                    </div>
                    <div class="card-body">
                      <br>
                      <br>
                      <br>
                      <br>
                    <p class="card-title text-danger">
                      Location : <?= $row['location']; ?><br>
                      Bed : <?= $row['id']; ?><br>
                      Price : <?= $row['price']; ?> BDT<br>

                    </p>


                  </div>
                  <div class="card">
                  <a href="details.php" class="btn btn-primary">View Details</a>
                </div>
                  </div>

                </div>
              </div>
            <?php } ?>
            </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function () {

          $(".product_check").click(function(){
            $("#loader").show();

            var action = 'data';
            var location = get_filter_text('location');
            var type = get_filter_text('type');
            var id = get_filter_text('id');

            $.ajax({
              url:'action.php',
              method:'POST',
              data:{action:action,location:location,type:type,id:id},
              success:function (response) {
                $("#result").html(response);
                $("#loader").hide();
                $("#textChange").text("Filtered Houses");
              }
            });
          });

        function get_filter_text(text_id) {
          var filterData =[];
          $('#'+text_id+':checked').each(function () {
            filterData.push($(this).val());
          });
          return filterData;
        }

      });

    </script>
    <footer>
      <div class="form">
        <h1><a href="login.php"><h3>Log out</h3></a></h1>

        </div>
      <p> Created by Akil</p>
    </footer>
  </body>
</html>
