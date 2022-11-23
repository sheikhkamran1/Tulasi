<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- get bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel&family=Dancing+Script:wght@700&family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- https://www.bootstrapcdn.com/fontawesome/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    
     <!-- Employes -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <style>

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
 /* Testimonial */
        .item p{
            color: whitesmoke !important;
        }
/* Testimonial Ends*/

        .header {
            height: 100vh;
            width: 100%;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://lh3.googleusercontent.com/p/AF1QipO9MwIY3yoOSf5qAQrebyzqUR96BDLX3kO6wUWP=s680-w680-h510') repeat no-repeat;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }

        nav img {
            width: 80px;
        }

        .nav-links {
            flex: 1;
            text-align: right;
        }

        .nav-links ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }

        .nav-links ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
        }

        .nav-links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background-color: #f44336;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links ul li:hover::after {
            width: 100%;
        }

        .text-box {
            width: 90%;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .text-box h1 {

            font-size: 40px;
        }

        /* .text-box a:hover{
            color: whitesmoke
        } */

        .text-box p {
            margin: 10px 0 40px;
            font-size: 14px;
            color: #fff;
        }

        .hero-btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            background: #f44336;

            padding: 12px 34px;
            font-size: 13px;
            /* background: transparent; */
            position: relative;
            cursor: pointer;
        }

       
     .hero-btn:hover {
            /* border: 1px solid #f44336;
            background: #f44336;
            transition: 1s; */
            color: #fff;
        } 

        nav .fa {
            display: none;
        }

        @media(max-width: 700px) {
            .text-box h1 {
                font-size: 20px;
            }

            .text-box p {
                font-size: 12px;
            }

            .nav-links ul li {
                display: block;
            }

            .nav-links {
                position: absolute;
                background: #f44336;
                height: 100vh;
                width: 200px;
                top: 0;
                right: 0px;
                text-align: left;
                z-index: 2;
                transition: 1s;
            }

            nav .fa {
                display: block;
                color: #fff;
                margin: 10px;
                font-size: 22px;
                cursor: pointer;
            }

            .nav-links ul {
                padding: 30px;
            }
        }

        /* Nav Ends */


        /* introduction */
        .heading {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .heading h1 {
            color: #5f619d;
            font-weight: 100px;
            font-size: 5vmin;
        }

        .heading p {
            line-height: 40px;
            font-size: 16px;
            color: #767676;
            font-weight: 300;
        }

        .introduction {
            width: 90%;
            height: auto;
            padding: 50px;
            margin: auto;
            text-align: center;
        }

        .tulasi {
            font-weight: 300;
            line-height: 45px;
            font-size: 34px;
        }

        @media(max-width: 400px) {
            .heading h1{
            font-size: 7vmin
        }

            .experience {
                font-size: 20px;
            }

            .heading p {
                font-size: 15px;
            }

        }

        @media(max-width: 300px) {
            .heading h1{
            font-size: 8vmin
        }

            .experience {
                font-size: 20px;
            }

            .heading p {
                font-size: 12px;
                line-height: 20px!important;
            }

        }

        /* introduction Ends */

       /* education-facultuty */
       .education-facultuty p{
        color: #767676;
            /* font-weight: 100px; */
            font-size: 4vmin;
        
       }
       .education-facultuty .management{
        height: 40vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.pexels.com/photos/14426078/pexels-photo-14426078.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load') repeat no-repeat;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
       }
        /* gallery */
        .gallery{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .gallery img{
            width: 300px;
            height: 300px;
            border: 2px solid #ff3d0036;
            border-radius: 13px;
            box-shadow: 4px 7px 7px 0px #00000042;
            cursor: pointer;
            margin: 10px;
            transition: 400ms;
        }
        .gallery img:hover{
            filter: grayscale(1);
            transform: scale(1.03);
            width: 350px;
            height: 350px;
        }

        /* gallery Ends */

       
        /* Mission */
        .mission{
            background-color: #efefef;
        }
        /* Testimonial */
        .test-main-div{
        height: auto;
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://scontent.fktm19-1.fna.fbcdn.net/v/t1.18169-9/30571704_128775961306873_3985247476453976202_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=e3f864&_nc_ohc=1-H0LR4BORwAX_7q3mx&_nc_ht=scontent.fktm19-1.fna&oh=00_AfDShkoT4aJbD2P8NA8dFe6_Fgqst0THLhZTxm80TcE4-Q&oe=63A4572E') repeat no-repeat;
                background-size: cover;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
            color: #fff; 
    }
    .name{
        color:whitesmoke
    }
    #quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}
/* Testimonail Ends */

/* Employes */
/* .employes{
    background-color: rgba(red, green, blue, alpha)
} */
.content-area{
    position: relative;
}
.custom-overlay{
    position: absolute;
    top: 50px;
    bottom: 0;
    left: 0;
    right: 0;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 0;
    transition: all 400ms ease-in-out;
    height: 70%;
}
.custom-overlay:hover{
    opacity: 1;
}
.custom-overlay h4{
    position: relative;
    font-size: 30px;
    font-family: poppins;
    color: #000;
}
.content-text{
    position: absolute;
    top: 50%;
    left: 10px;
    right: 10px;
    transform: translateY(-50%);
}
.custom-overlay h4::before{
    content: '-';
    padding-right: 10px;
}
.custom-overlay h4::after{
    content: '-';
    padding-right: 10px;
}
.custom-overlay h3{
    color: #000;
    font-family: merienda;
}
..custom-overlay p{
    font-size: 17px;
    line-height: 1.6em
}
.owl-dots{
    text-align: center;
    margin-top: 3%;
}
.owl-dot{
display: inline-block;
height: 6px !important;
width: 60px !important;
background-color: #222 !important;
opacity: 0.8;
margin: 0 5px
}
.owl-dot.active{
background-color: yellow !important;
}
.employes{
    /* background: linear-gradient(to-left, #564390 , #306791); */
    background-color: #5f619d;
}
.employes h1{
    text-align: center;
    color: whitesmoke
}
/* Employes Ends*/

    </style>
</head>

<body>
    @include('frontend.components.navbar')

    {{-- @include('frontend.components.gallery') --}}
    @yield('content')

    {{-- Navbar --}}
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }

        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>
    {{-- Navbar Ends--}}

   

    {{-- Testimonial --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {{-- Testimonial Ends --}}

    {{-- Employes --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:true,
    autoplay:true,
    autoplayTimeout:2000,
    stagePadding:50,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
    </script>
    {{-- Employes Ends --}}

</body>

</html>
