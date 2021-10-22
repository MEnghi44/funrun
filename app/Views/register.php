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
    <link rel="stylesheet" href="/css/register.css">

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