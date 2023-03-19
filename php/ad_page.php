<?php

@include 'config.php';
session_start();
$userprofile = $_SESSION['user_name'] ;
if( $userprofile == true){

}
else{
  header('location:index.php');
}

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;

   if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:ad_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>admin page</title>

   <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
<header>
      <a href="#" class="logo"><img src="../images/logo.png" alt="" /></a>
      <a href="#" class="logoname">Friendly Cafe</a>

      <!-- <div id="menu-bar" class="fas fa-hamburger"></div> -->

      <nav class="navbar">
        <!-- <section class="navlinks"> -->
        <ul>
          <li><a class="active" href="../index.php">home</a></li>
          <!-- <li><a href="../index.html#about">about</a></li>
          <li><a href="../index.html#menu">menu</a></li>
          <li><a href="../index.html#popular">popular</a></li>
          <li><a href="../index.html#gallery">gallery</a></li> -->
          <li><a href="logout.php">
            logout
          </a></li>
        </ul>
        <!-- <div class="navsocial">
        <a href="https://www.facebook.com/"><i class="bx bxl-facebook" style="color: blue"></i></a>  
         <a href="https://www.instagram.com/"><i class="bx bxl-instagram" style="color: rgb(246, 6, 74)"></i></a> 
         <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><i class="bx bxl-twitter" style="color: rgb(4, 165, 218)"></i></a> 
        </div> -->
</header>
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="number" placeholder="enter product price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product image</th>
            <th>product name</th>
            <th>product price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="ad_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="ad_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>
<script src="./js/script.js"></script>


</body>
</html>