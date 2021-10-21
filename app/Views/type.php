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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
:root{
    --main-color:#ff7300;
    --black:#bdbdbd;
}
*{
    font-family: 'Sriracha', cursive;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
    transition: width none;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 7rem;
}
body{
    overflow-x: hidden;
    background: var(--black);
    font-size: 25px;
}
section{
    padding:2rem 9%;
}
.heading{
    font-size: 4rem;
    text-align: center;
    padding-bottom: 2rem;
    color:#fff;
}
.heading span{
    color:var(--main-color);
}
.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.8rem 3rem;
    font-size: 1.7rem;
    background:#fff;
    font-weight: 500;
    color:var(--black);
    cursor: pointer;
}
.btn:hover{
    background: var(--main-color);
    color:#fff;
    letter-spacing: .1rem;
}
.header{
    position: fixed;
    top:0; left:0; right:0;
    z-index: 1000;
    background: rgba(0,0,0,.3);
    padding:3rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.header .logo{
    font-size: 3.5rem;
    color:#fff;
    font-weight: bolder;
}
.header .logo i{
    padding-right: 2rem;
    color:var(--main-color);
    animation: floating 3s linear infinite;
}
.header .navbar a{
    font-size: 2.5rem;
    color:#fff;
    margin:0 1rem;
}
.header .navbar a.active,
.header .navbar a:hover{
    color:var(--main-color);
}
.header .icons a,
.header .icons div{
    font-size: 2.5rem;
    color:#fff;
    margin-left: 2rem;
    cursor: pointer;
}
.header .icons a:hover,
.header .icons div:hover{
    color:var(--main-color);
}
#menu-btn{
    display: none;
}
.header .search-form{
    position: absolute;
    top:115%; right:-105%;
    background: #fff;
    width:50rem;
    height:5rem;
    display: flex;
    align-items: center;
    opacity: 0;
}
.header .search-form.active{
    right:2rem;
    opacity: 1;
    transition: .4s linear;
}
.header .search-form input{
    width:100%;
    padding:0 1.5rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}
.header .search-form label{
    font-size: 2.5rem;
    padding-right: 1.5rem;
    color: var(--black);
    cursor: pointer;
}
.header .search-form label:hover{
    color:var(--main-color);
}
.header.active{
    padding:2rem 9%;
    background: #222;
}
.products {
    margin-top: 150px;
}
.th {
    color: rgb(255, 255, 255);
    font-size: 50px;
}
.footer{
    margin-top: 184px;
    background: #000;
}
.footer .credit{
    padding:1rem;
    padding-top: 2.5rem;
    margin-top: 2.5rem;
    border-top:.1rem solid #fff3;
    font-size: 2rem;
    color:#aaa;
    text-align: center;
}
.footer .credit span{
    color:var(--main-color);
}
    </style>

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