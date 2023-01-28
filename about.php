<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>About</title>
  </head>
  <style>
    #navbarNav {
      display: flex;
      justify-content: right;
      text-align: right;
      margin-right: 1%;
    }
  
    .navbar-brand {
      padding-left: 3%;
    }
  
    .navbar h3 {
      color: rgb(236, 230, 230);
      padding-left: 2ch;
    }
  </style>
  <body style="background-color:aquamarine;">
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <h3>ToDos List</h3>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="container" style="background-color:  rgb(141 145 217 / 87%);margin-top: 32px; padding-bottom: 50px;">
            <h1 style="padding: 123px 391px; padding-bottom: 25px " ><u>About The Author</u></h1>
            <center><img src="account.png" width="100" height="100" style="margin-bottom: 60px"></center>
            <p style="background-color: skyblue ;padding:7px 44px;border:2px solid;border-color:black">Hi, I am Sakshi Verma of National Institute of Technology Sikkim, this is my first project on Web development. I have continuously worked to create a project on ToDos List. On doing this project I have incorporated nearly 8 pages into a single linked webpage. I had assigned different weeks for diversifying my workflow for different tasks. The main programming languages used are HTML, CSS, PHP. A wide variety of bootstrap mockups were also used for the project. I have put much effort in this project.
<br><br>Hope, you all enjoy this.</p>
            
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <br>
    <br>
    <?php require 'partials/footer.php' ?>
  </body>
</html>