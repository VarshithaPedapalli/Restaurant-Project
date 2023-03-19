<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Here</title>
    <link rel="stylesheet" href="./login.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

  </head>
  <body>
    <header>
      <a href="#" class="logo"><img src="../images/logo.png" alt="" /></a>
      <a href="#" class="logoname">Friendly Cafe</a>

      <!-- <div id="menu-bar" class="fas fa-hamburger"></div> -->

      <nav class="navbar">
        <!-- <section class="navlinks"> -->
        <ul>
          <li><a class="active" href="../index.php">Home</a></li>
        </ul>
       
      </nav>
    </header>
    <script src="../js/script.js"></script>
    <section>
      <div class="form-container">
        <h1>Welcome Back</h1>
        <form action="login.php" method="post">
          <?php if(isset($_GET['error'])) {
            ?> 
            <p class="error" style="color: #af4242;
          padding: 10px;
          background-color: rgb(252, 237, 237);
          text-align:center;
          font-size: 18px;
          border-radius:30px;
          margin-bottom:20px;"> <?php echo $_GET['error']; ?></p>
        <?php  }  ?>
          <div class="control">
            <label for="name" >Email</label>
            <input type="email" name="uname" id="name"/>
          </div>
          <div class="control">
            <label for="psw">Password</label>
            <input type="password" name="password" id="psw" />
          </div>
          <div class="control">
            <button type="submit" value="Login">Login</button>
          </div>
        </form>
        <div class="link">
          <a href="#">Forget password ?</a>
             </div>
      </div>
    </section>
    
  </body>
</html>
