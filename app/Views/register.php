<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
   
   
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
    padding: 1.2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.header .logo{
    font-size: 3rem;
    color:#fff;
    font-weight: bolder;
}
.header .logo i{
    padding-right: 2.5rem;
    color:var(--main-color);
    animation: floating 3s linear infinite;
}

.header .navbar a{
    font-size: 2rem;
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


.footer{
    background: #000;
    margin-top: 1rem;
}
.footer .credit{
    padding:1rem;
    padding-top: 1rem;
    margin-bottom: 1rem;
    border-top:.1rem solid #fff3;
    font-size: 2rem;
    color:#aaa;
    text-align: center;
}
.footer .credit span{
    color:var(--main-color);
}



.form-holder {
      margin-top: 70px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      min-height: 20vh;
}

.form-holder .form-content {
    position: relative;
    text-align: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-align-items: center;
    align-items: center;
    padding: 15px;
}

.form-content .form-items {
    border: 3px solid #fff;
    padding: 40px;
    display: inline-block;
    width: 100%;
    min-width: 540px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    text-align: left;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    background-color: rgb(161, 161, 161);
}

.form-content h3 {
    color: rgb(252, 73, 73);
    text-align: left;
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 2px;
    text-align: center;
}

.form-content h3.form-title {
    margin-bottom: 30px;
}


.form-content label, .was-validated .form-check-input:invalid~.form-check-label, .was-validated .form-check-input:valid~.form-check-label{
    color: #fff;
}

.form-content input[type=text], .form-content input[type=password], .form-content input[type=email], .form-content select {
    width: 100%;
    padding: 9px 20px;
    text-align: left;
    border: 0;
    outline: 0;
    border-radius: 6px;
    background-color: #fff;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin-top: 16px;
}


.btn-primary{
    margin-top: 35px;
    background-color: #0088ff;
    outline: none;
    border: 0px;
    box-shadow: none;
    border-radius: 10px;
    width: 40%;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active{
    background-color: #015095;
    outline: none !important;
    border: none !important;
     box-shadow: none;
}

.btn {
    margin-left: 28px;
    border-radius: 6px;
    width: 40%;
    text-align: center;
}

.form-content textarea {
    position: static !important;
    width: 100%;
    padding: 8px 20px;
    border-radius: 6px;
    text-align: left;
    background-color: #fff;
    border: 0;
    font-size: 15px;
    font-weight: 300;
    color: #8D8D8D;
    outline: none;
    resize: none;
    height: 120px;
    -webkit-transition: none;
    transition: none;
    margin-bottom: 14px;
}

.form-content textarea:hover, .form-content textarea:focus {
    border: 0;
    background-color: #ebeff8;
    color: #8D8D8D;
}

.mv-up{
    margin-top: -9px !important;
    margin-bottom: 8px !important;
}

.invalid-feedback{
    color: #ff606e;
}

.valid-feedback{
   color: #2acc80;
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



<div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    
                    <h3>Register Run</h3>

        

                    <form class="requires-validation" action="/register/save" method="post">

                        <div class="col-md-12">
                            <input type="text" name="id_card" class="form-control item" id="inputforid_card" value="<?= set_value('id_card'); ?>" placeholder="กรอกรหัสประชาชน">
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control item" id="inputforname" value="<?= set_value('name'); ?>" placeholder="กรอกชื่อ">
                        </div>

                        <div class="col-md-12">
                            <input type="text" name="age" class="form-control item" id="inputforage" value="<?= set_value('age'); ?>" placeholder="กรอกอายุ">
                        </div>

                        <div class="col-md-12">
                            <select class="form-select mt-3" name="category_run"  value="<?= set_value('category_run'); ?>" >
                                  <option selected disabled value="">เลือกประเภทวิ่ง</option>
                                  <option value="1">FUN RUN</option>
                                  <option value="2">MINI MARATHON</option>
                                  <option value="3">VIP</option>
                                  <option value="4">Super VIP</option>
                           </select>
                       </div>

                       <div class="col-md-12">
                            <input type="text" name="ID" class="form-control item" id="inputforID" value="<?= set_value('ID'); ?>" placeholder="กรอกรหัสRUNxxxxxxx">
                        </div>

                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control item" id="inputforemail" value="<?= set_value('email'); ?>" placeholder="กรอกอีเมลผู้ใช้งาน">
                        </div>

                       <div class="col-md-12">
                            <input type="password" name="password" class="form-control item" id="inputforpassword" placeholder="รหัสผ่าน">
                       </div>

                       <div class="col-md-12">
                            <input type="password" name="confpassword" class="form-control item" id="inputforconfpassword" placeholder="ยืนยันรหัสผ่าน">  
                       </div>

                        <div class="form-button mt-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="/login" class="btn btn-primar">Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- footer section starts  -->
<section class="footer" id="footer">
    <div class="credit"> created by <span>Funrun</span></div>
</section>
<!-- footer section ends -->


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>