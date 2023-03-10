<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <title>Banking System</title>
</head>
<style>
  .container-fluid h1 {
    color: #000000;
    /* -webkit-text-stroke: 0.3vh rgb(255 255 255); */
  }
  .container-fluid h2 {
    color: #000000;
    /* -webkit-text-stroke: 0.3vh rgb(255 255 255); */
}
h1{
  /* animation: type 30s infinite; */
}
@keyframes type {
  0%{margin-left: 100px;}
  10%{margin-left: 50px;}
  20%{margin-right: 100px;}
  30%{margin-right: 50px;}
  40%{margin-left: 100px;}
  50%{margin-left: 50px;}
  60%{margin-right: 100px;}
  70%{margin-right: 50px;}
  80%{margin-left: 100px;}
  90%{margin-left: 50px;}
  100%{margin-right: 100px;}
  
}
  </style>
<body>
  <?php
  include 'navigation.php';
  ?>

  <div class="container-fluid">
    <div class="row intro py-5">
      <div class="col-sm-12 col-md">
        <div class="heading text-center my-5">
          <h2>Welcome To</h2>
          <h1>THE BANK OF INDIA</h1>
        </div>
      </div>
      <div class="col-sm-12 col-md img text-center py-2">
        <img class="im" src="img/bank6.png" class="img-fluid pt-2 zoom">
      </div>
    </div>
  </div>

  <br>

  <h3 class="action">BANKING SERVICES</h3><br>
  <div class="container px-4">
    <div class="row gx-5">
      <div class="col">
        <div class="p-3 border bg-white">
          <div class="col">
            <img src="img/bank3.png" class="img-fluid zoom"><br>
          </div>
          <a href="user.php"><button>View User</button></a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border bg-white">
          <div class="col">
            <img src="img/bank2.png" class="img-fluid zoom"><br>
          </div>
          <a href="transfer.php"><button>Make a Transaction</button></a>
        </div>
      </div>
      <div class="col">
        <div class="p-3 border bg-white">
          <div class="col">
            <img src="img/bank1.png" class="img-fluid zoom"><br>
            <a href="transactionhistory.php"><button>Transaction History</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <br>
  <!-------Footer------>
  <div class="footer-dark">
    <footer>
      <div class="container">
        <p class="copyright">The Bank of India</p>
        <div class="text-center">
<p><a href="https://internship.thesparksfoundation.info/">Interning @The Sparks Foundation</a> </p>
        </div>
        <div class="col item social">
          <a href="https://www.linkedin.com/in/shivank-mittal-aba0b81a1/"><i class="icon ion-social-linkedin"></i></a>
          <a href="https://www.youtube.com/watch?v=RXddGTqT_ig"><i class="icon ion-social-youtube"></i></a>
          <a href="https://github.com/surajIT36/Banking_System"><i class="icon ion-social-github"></i></a>
          <a href="https://twitter.com/shivank__mittal"><i class="icon ion-social-twitter"></i></a>
        </div>
        <p class="copyright">Shivank Mittal Copyright 2023</p>
      </div>
    </footer>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
