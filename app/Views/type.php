<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>type</title>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/type.css">

</head>
<body>
    
<!-- header section starts  -->
<header class="header">
    <a href="/index" class="logo"> <i class="fas fa-running"> </i>  Funrun </a>
    <nav class="navbar">
        <a href="/index" class="active">home</a>
        <a href="/type">type</a>
        <a href="/register">Register</a>
        <a href="/login">Login</a>
    </nav>
</header>
<!-- header section ends -->

<!-- products section starts  -->
<section class="products mt-6" id="products">
    <h1 class="heading"> ตารางประเภท <span>การลงแข่งวิ่ง</span> </h1>

    
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>

    <div class="mt-5">
        <table class="table table-bordered" id="users-list">
          <thead>
             <tr>
                <th>ประเภท</th>
                <th>ระยะเวลา</th>
                <th>ราคา</th>
             </tr>
          </thead>
          <tbody>
                    
            <?php if($category): ?>
            <?php foreach($category as $categor): ?>

             <tr>
                <td><?php echo $categor['category_name']; ?></td>
                <td><?php echo $categor['length']; ?></td>
                <td><?php echo $categor['price']; ?> บาท</td>
             </tr>
             
             <?php endforeach; ?>
         <?php endif; ?>

          </tbody>
        </table>
     </div>

</section>
<!-- products section ends -->


<!-- footer section starts  -->
<section class="footer" id="footer">
    <div class="credit"> created by <span>Funrun</span></div>
</section>
<!-- footer section ends -->

</body>
</html>