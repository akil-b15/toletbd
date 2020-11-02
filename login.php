<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    
    <title>Login</title>
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
            <li><a href="signup.php">Signup</a></li>
            <li class="current"><a href="login.php">Login</a></li>
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

    <section id="showcaselog">
      <div class="container">
  
        <aside id="sidebar">
          <div class="dark">
            <h3>Login to your Account</h3>
            <form class="quote" action="check.php" method="POST">
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address" name="email" required>
  						</div>
              <div>
                <label>Password</label><br>
                <input type="text" placeholder="Password" name="password" required>
              </div>
  			  <div>
                <label>Account Type</label><br>
               
				<input type="radio" name="type" value="c" required>
				Seeker<br>
				<input type="radio" name="type" value="a" required>
				Owner<br>
              </div>				             
              <div>
                <h5> </h5>
              </div>
  						<button class="button_1" type="submit">login</button>
			</form>
          
        </aside>
      </div>
    </section>

    <footer>
      <p> Created by Akil</p>
	 
    </footer>
  </body>
</html>