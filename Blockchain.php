<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blockchain Exchange</title>
  
  <!-- External CSS Libraries -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="CSS/Blockchain.css">
</head>

<body>
  <?php session_start(); 
  ?>

  <header>
    <div class="logo">
      <img src="./FOTO/logo.png" alt="Blockchain Logo" />
      <h4>Blockchain</h4>
    </div> 

    <h1>Welcome <?php echo isset($_SESSION['name']) ? $_SESSION['name'] : "User"; ?>!</h1>
  </header>

  <!-- Services Section Starts-->
  <section class="service section" id="service">
    <div class="container">
      <div class="service-items">
        <div class="service-item">
          <div class="service-container">
            <div class="service-item-inner">
              <div class="icon">
                <i class='bx bxs-dashboard'></i>
              </div>
              <h4>Dashboard</h4>
              <p>Creat+HER Girls in ICT Caribbean Hackathon (test)</p>
              <a href="dashboard.html" class="btn">Go to Dashboard</a>
            </div>
          </div>
        </div> 

        <div class="service-item">
          <div class="service-container">
            <div class="service-item-inner">
              <div class="icon">
                <i class='bx bxs-user'></i>
              </div>
              <h4>Account</h4>
              <p>Creat+HER Girls in ICT Caribbean Hackathon (test)</p>
              <a href="account.html" class="btn">Go to Personalia</a>
            </div>
          </div>
        </div> 

        <div class="service-item">
          <div class="service-container">
            <div class="service-item-inner">
              <div class="icon">
                <i class='bx bxs-book-bookmark'></i>
              </div>
              <h4>Portfolio</h4>
              <p>Creat+HER Girls in ICT Caribbean Hackathon (test)</p>
              <a href="portfolio.html" class="btn">Go to Portfolio</a>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!-- End Services Section -->
</body>
</html>
