<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

:root{
    --main-color:#ef7819;
    --black:#141215;
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

html::-webkit-scrollbar{
    width: 1rem;
}

html::-webkit-scrollbar-track{
    background: var(--black);
}

html::-webkit-scrollbar-thumb{
    background: var(--main-color);
}

html .running{
    font-size: 90px;
    color: rgb(255, 0, 0);
    margin-bottom: 400px;
}


body{
    overflow-x: hidden;
    background: var(--black);
}

section{
    padding:2rem 9%;
}

.heading{
    font-size: 5rem;
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
    padding-right: .5rem;
    color:var(--main-color);
    animation: floating 3s linear infinite;
}

@keyframes floating{
    0%, 100%{
        transform: translateY(0rem);
    }
    50%{
        transform: translateY(-1rem);
    }
}

.header .navbar a{
    font-size: 3rem;
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

.home{
    padding:0;
}

.home .home-slider .box{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding:2rem;
    background-size: cover !important;
    background-position: center !important;
}

.home .home-slider .box .content{
    text-align: center;
}

.home .home-slider .box .content h3{
    font-size: 5rem;
    color:#fff;
    transition-delay: .2s;
}

.home .home-slider .box .content p{
    font-size: 3rem;
    color:#fff;
    transition-delay: .4s;
    padding:1rem 0;
}

.home .home-slider .box .content .button{
    transition-delay: .6s;
}

.home .home-slider .box .content > *{
    transform: translateY(2rem);
    opacity: 0;
}

.home .home-slider .swiper-slide-active .content > *{
    transform: translateY(0rem);
    opacity: 1;
}

.home .home-slider .swiper-button-next{
    right: 4rem;
    color:#fff;
    opacity: 0;
}

.home .home-slider .swiper-button-prev{
    left: 4rem;
    color:#fff;
    opacity: 0;
}

.home .home-slider .swiper-button-next:hover,
.home .home-slider .swiper-button-prev:hover{
    color:var(--main-color);
}

.home .home-slider:hover .swiper-button-next,
.home .home-slider:hover .swiper-button-prev{
    opacity: 1;
}

.footer{
    background: #000;
}



.footer .box-container .box a:hover i{
    padding-right: 2rem;
    color:#fff;
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

/* media queries  */

@media (max-width:991px){

    html{
        font-size:55%;
    }

    .header{
        padding:2rem;
    }

    .header.active{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: inline-block;
    }

    .header .search-form{
        width:90%;
    }

    .header .navbar{
        position: absolute;
        top:99%; left:0; right:0;
        background:#222;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    .header .navbar a{
        display: block;
        margin:2rem;
        font-size: 2rem;
    }

}

@media (max-width:450px){

    html{
        font-size:50%;
    }

    .home .home-slider .swiper-button-next,
    .home .home-slider .swiper-button-prev{
        display: none;
    }

}
    </style>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="/index" class="logo"> <i class="fas fa-running"> </i>  Funrun </a>

    <nav class="navbar">
        <a href="/index" class="active">home</a>
        <a href="/register">Register</a>
        <a href="/login">Login</a>
        <a href="#arrivals">arrivals</a>
    </nav>



</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box" style="background: url(https://campaigns.aia.co.th/vitality/assets/media/articles/2018-12-20-10-14-04-48137_1200x630.jpg);">
               
                <h1 class="running">Running GAME</h1>
               




            </div>

       
        </div>
    </div>

</section>

<!-- home section ends -->



<!-- footer section starts  -->

<section class="footer" id="footer">

    <div class="credit"> created by <span>Running GAME</span></div>

</section>

<!-- footer section ends -->


















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file links  -->
<script src="js/script.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      delay:400,
      duration:800
  });
</script>

</body>
</html>