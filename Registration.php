<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Blockchain Exchange</title>
  <script src="https://cdn.jsdelivr.net/npm/typed.js"></script>

  <!-- External CSS Libraries -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="registratie.css">
  <link rel="stylesheet" href="CSS/Registration.css">
</head>

<body>
  <main>
    <div class="box">

    <!-- PHP Section Starts-->
    <?php
      session_start();
      
      // Connect to the database
      $servername = "localhost";  
      $username = "root";  
      $password = "";  
      $dbname = "blockchain"; 

      // Connect to the database
      $conn = new mysqli($servername, $username, $password, $dbname);
    

      // Check the connection
      if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
      }  

      // Process the form when it is submitted
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];


        // SQL query for inserting data
          $sql = "INSERT INTO registration (name, email, password)
          VALUES ('$name', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
          $_SESSION['name'] = $name;
          header("Location: Registration.php");
          exit();
          /*echo "New record added successfully";*/
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
      
        // Close the connection
        $conn->close();
    ?>
    <!-- PHP Section Ends-->


    <!-- Sign Up Section Starts-->
    <div class="inner-box">
      <div class="forms-wrap">
        <form action="Blockchain.html" autocomplete="off" class="sign-in-form" method="post">
          <div class="logo">
            <img src="./FOTO/logo.png" alt="easyclass" />
            <h4>Blockchain</h4>
          </div>
    
          <div class="heading">
            <h2>Welcome Back</h2>
              <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
          </div>
    
          <div class="actual-form">
            <div class="input-wrap">
              <input type="text" minlength="4" class="input-field" 
                name="name" autocomplete="off" required/>
              <label>Name</label>
            </div>
    
            <div class="input-wrap">
              <input type="password" minlength="4" class="input-field"
                name="password" autocomplete="off" required/>
              <label>Password</label>
            </div>
    
            <input type="submit" value="Sign In" class="sign-btn" />
    
              <p class="text">
                Forgotten your password or you login datails?
                <a href="#">Get help</a> signing in
              </p>
         </div>
       </form>
       <!-- Sign Up Section Ends-->
    
       <!-- Sign In Section Starts-->
       <form action="Registration.php" autocomplete="off" class="sign-up-form" method="post">
          <div class="logo">
            <img src="./FOTO/logo.png" alt="easyclass" />
              <h4>Blockchain</h4>
          </div>
    
          <div class="heading">
            <h2>Get Started</h2>
              <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
          </div>
    
          <div class="actual-form">
            <div class="input-wrap">
              <input type="text" minlength="4" class="input-field"
                name="name" autocomplete="off" required/>
              <label>Name</label>
            </div>
    
            <div class="input-wrap">
              <input type="email" class="input-field"
                name="email" autocomplete="off" required/>
              <label>Email</label>
            </div>
    
            <div class="input-wrap">
              <input type="password" minlength="4" class="input-field"
                name="password" autocomplete="off" required/>
              <label>Password</label>
            </div>

            <input type="submit" value="Sign Up" class="sign-btn" />
    
              <p class="text">
                By signing up, I agree to the
                <a href="#">Terms of Services</a> and
                <a href="#">Privacy Policy</a>
              </p>
          </div>
        </form>
      </div>
      <!-- Sign In Section Ends-->

      <div class="white-text-field">
      </div>

    
      <!-- Slide Show Starts-->
      <div class="carousel">
        <div class="images-wrapper">
          <img src="./FOTO/front1.jpeg" class="image img-1 show" alt="" />
          <img src="./FOTO/front2.jpg" class="image img-2 show" alt="" />
          <img src="./FOTO/front3.jpg" class="image img-3 show" alt="" />
        </div>
    
        <div class="text-slider">
          <div class="text-wrap">
            <div class="text-group">
              <h2>The only crypto wallet you'll ever need</h2>
              <h2>Buy, sell and swap crypto in minutes</h2>
              <h2>Your keys, your crypto</h2>
            </div>
          </div>
    
          <div class="bullets">
            <span class="active" data-value="1"></span>
            <span data-value="2"></span>
            <span data-value="3"></span>
          </div>
        </div>
      </div>
      <!-- Slide Show Ends-->


    </div>
  </div>
</main>
    
    <!-- Javascript file -->
    <script src="JS/Registration.js"></script>
  </body>
</html>