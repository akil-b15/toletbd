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

    <section id="newsletter">
      <div class="container">
        <h1>You can search for rent here</h1>
        <nav>
          <form>
            <button type="nav" class="button_1" ><a href="all.php">Find Apartment</a></button>
          </form>
        </nav>
      </div>
    </section>

    <section id="showcase_sign">
      <div class="container">
        <article id="main-col">
          
          
      <div class="dark">
          <h3>Create A New Account</h3>
		 
            <form class="quote" action="signupInsart.php" method="POST">
              <div>
                <label>Name</label><br>
                <input type="text" placeholder="Full Name" name="name" required>
              </div>
              <div>
                <label>Address</label><br>
                <input type="Address" placeholder="Address" name="address" required>
              </div>
              <div>
                <label>Age</label><br>
                <input type="text" placeholder="Enter your age here" name="age" required>
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" placeholder="Email Address" name="email" required>
              </div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
             
              <div>
                <h5> </h5>
              </div>
              <button class="button_1" type="submit" >Signup</button>
           </form> 
      </div>
    </section>

    <footer>
      <p> Created by Akil</p>
    </footer>
  </body>
</html>
