<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- Bootstrap CSS -->
   
   
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/login.css">

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
                    
                    <h3>Log in</h3>
                    <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
                    <form class="requires-validation" action="/login/auth" method="post">

                        <div class="col-md-12">
                            <input class="form-control" type="email" name="#1451 - Cannot delete or update a parent row: a foreign key constraint fails (`funrun`.`regis`, CONSTRAINT `regis_ibfk_1` FOREIGN KEY (`member`) REFERENCES `member` (`id_card`))" placeholder="อีเมลผู้ใช้งาน" value="<?= set_value('email'); ?>" required>
                        </div>

                       <div class="col-md-12">
                          <input class="form-control" type="password" name="password" placeholder="รหัสผ่าน" required>
                       </div>

                        <div class="form-button mt-3">
                            <button type="submit" class="btn btn-primary">Log in</button>
                            <a href="/register" class="btn btn-primar">Register</a>
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

</body>
</html>