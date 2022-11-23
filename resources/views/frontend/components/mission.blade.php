{{-- <section class="container-fluid mission py-5">
    <div class="container heading">
        <h1>Our Mission</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis, officiis! Nisi repellendus odio, earum itaque repudiandae iure quod temporibus aperiam doloribus ad quasi! Reiciendis perspiciatis doloremque sit quod! Nobis ex dolor at qui aperiam fugiat deleniti recusandae nulla quidem doloremque. Quisquam laboriosam enim praesentium facilis placeat soluta, atque quidem cupiditate!</p>
    </div>
</section> --}}
<style>
    .btn-primary {
        background-color:
            #f47a21 !important;
        border: none;
    }

    .btn-div h1 {
        /* font-weight: 700; */
        font-size: 8vmin;
        color:
            #272e3e
    }

    .btn-div p {
        color: grey;
        font-size: 16px;

    }

    .btn-div .h4 {
        color: #293040;
    }

    .btn-div h6 {
        color: #5f619d;
        text-decoration: underline;
        font-weight: bold
    }

    .btn-div span {
        color: #5f619d;
    }

    .btn-div .viewall {
        display: flex;
    }

    .btn-div .fa-solid {
        margin-left: 10px;
        color: #5f619d;
    }

    @media(max-width: 400px) {
        .btn-div h1 {
            font-size: 6vmin
        }

        .btn-div p {
            font-size: 15px;
        }

    }

    .btn-div h4 {
        font-size: 4vmin
    }

    @media(max-width: 300px) {
        .btn-div h1 {
            font-size: 8vmin
        }



        .btn-div p {
            font-size: 10px;
            line-height: 20px !important;
        }

        .btn-div h6,
        i {
            font-size: 5vmin;

        }

        .btn-div .fa-solid {
            margin-left: 3px;
            color: #5f619d;
        }

    }



    .scroll-bg {
        background-color: 5px 10px red;
        width: 400px;
        /* padding: 60px; */
    }

    .scroll-div {
        width: 400px;
        box-shadow: 1px 0 4px rgb(38 45 61);
        height: 300px;
        overflow: hidden;
        overflow-y: scroll;
        /* padding: 50px */
    }

    .scroll-object {
        /* color: black; */
        padding: 20px
    }


    .fa-star {
        color:
            #ff9c00;
        padding-top: 10px
    }

    @media(max-width: 800px) {
        .scroll-bg {
            width: auto;
            padding: 20px 0;
        }

    }

    @media(max-width: 450px) {
        .scroll-bg {
            width: 300px;
        }

        .scroll-div {
            width: 300px;
            box-shadow: 1px 0 4px rgb(38 45 61);
            height: 200px;
            overflow: hidden;
            overflow-y: scroll;
            /* padding: 50px */
        }

        .scroll-bg p {
            line-height: 25px
        }

    }

    @media(max-width: 350px) {
        .scroll-bg {
            width: 200px;
        }

        .scroll-div {
            width: 200px;
            box-shadow: 1px 0 4px rgb(38 45 61);
            height: 100px;
            overflow: hidden;
            overflow-y: scroll;
            /* padding: 50px */
        }

        .scroll-bg p {
            line-height: 20px
        }

    }

     .img-parent{
        position: relative;
      
    }

    .img-div{
        position: absolute;
        top: -30px;
    left: -25%;

    }
    .img-div img{
        border-radius: 10px
    }
    .head{
        display: flex
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
</style>
<section class="container-fluid testimonial py-5">
    <div class="container">

        <div class="row head">
            <div class="col-md-6 btn-div">
                <button type="button" class="btn btn-primary btn-btn-sm ">Large button</button>
                <h1 class="py-2">Success Speaks</h1>
                <p>Still Confuse About Choosing Tulasi School & College? Hear From The Students of Tulasi College
                    Itself.
                </p>
                <h4>We Have <span>1500+</span> Students Enrolled at Tulasi</h4>
                <div class="viewall py-3s">
                    <h6>VIEW ALL</h6><i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>

            <div class="col-md-6 p-3 img-parent">
                <div class="scroll-bg">
                    <div class="scroll-div heading">
                        <p class="scroll-object">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis, illum. Animi nemo cum
                            exercitationem odit. Perferendis, nam quas dolor accusantium velit a labore inventore
                            incidunt facere reiciendis necessitatibus vero recusandae possimus corporis optio molestiae
                            voluptatem minus quod, quisquam deserunt veritatis repellendus placeat? Officia, perferendis
                            molestiae. Blanditiis totam accusantium aspernatur deserunt dolorum dolore ab non, quasi
                            asperiores possimus ad consectetur, ipsam animi cupiditate quisquam veritatis. Ea quasi
                            numquam, aperiam cupiditate, repellendus placeat consequuntur culpa nulla eius ipsam,
                            perspiciatis fugit? Laborum corrupti iusto commodi dicta temporibus, in aperiam? Quis
                            veritatis deserunt nostrum voluptatibus tenetur ut nam ex numquam iure? Nulla, soluta omnis.
                        </p>
                    </div>
                </div>
                <i class="fa-solid fa-star"></i>


                <div class="img-div">
                    <img src="https://scontent.fktm1-1.fna.fbcdn.net/v/t31.18172-8/1091119_276890405787232_521031278_o.jpg?stp=dst-jpg_s960x960&_nc_cat=110&ccb=1-7&_nc_sid=e3f864&_nc_ohc=FYQBVo-wFOEAX8qnWQV&_nc_ht=scontent.fktm1-1.fna&oh=00_AfD-R9dqKM6LEInDKEA_SZq5Q6smZ53E0l1gVWVp0YZ-Ww&oe=63A1B720" alt="" width="35%" class="img-fluid">
                </div>

            </div>
        </div>
    </div>









    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <a class="btn btn-primary" href="http://thecodeblock.com/create-a-quote-testimonial-slider-using-bootstrap-carousel"><i class="fa fa-arrow-left"></i> Back to Article</a>
    </div>
</section>
