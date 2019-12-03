<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="banner_text text-center">
                    <div class="banner_text_iner">
                        <h1>Моя <br>
                            деятельность </h1>
                        <p> Пришло время рассказать, ибо стало поступать много вопросов. Может быть смогу быть вам полезна. </p>
                        <a href="#" class="btn_2">Свяжись с организатором</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner_video">
                    <div class="banner_video_iner">
                        <img src="<?php echo Url::to('@web/img/banner_video.png') ?>" alt="">
                        <div class="extends_video">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                               href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="fas fa-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- service part start-->
<section class="service_part">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-4 col-sm-10">
                <div class="service_text">
                    <h2> Я - #менеджер рекламного агенства. </h2>
                    <p>Если вы хотите у нас поработать - пишите менеджерам по персоналу (есть в контактах группы). Если вы хотите заказать у нас промо-акцию или мероприятие - пишите мне в Личные сообщения.
                    </p>
                    <a href="#" class="btn_3">узнать больше</a>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <div class="service_part_iner">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text ">
                                <i class="flaticon-money"></i>
                                <h4>Дни рождения</h4>
                                <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                                <a href="#">donate now</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>Корпаративы</h4>
                                <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                                <a href="#">contact us</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>Презентации</h4>
                                <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                                <a href="#">read more</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_service_text">
                                <i class="flaticon-money"></i>
                                <h4>Квесты</h4>
                                <p>Lorem ipsum dolor sit amet consectetur elit seiusmod tempor incididunt</p>
                                <a href="#">donate now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service part end-->

<!-- about part end-->
<section class="about_us">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6">
                <div class="about_us_img">
                    <img src="<?php echo Url::to('@web/img/top_service.png') ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_us_text">
                    <h5>
                        2012<br><span>since</span>
                    </h5>
                    <h2>Я - #туризм</h2>
                    <p>Помогу подобрать вам пакетный тур в любимую страну, либо отдельно забронировать отели, купить билеты, заказать экскурсии, оформить трансфер - мне за эти услуги платить не надо ;)))</p>
                    <div class="banner_item">
                        <div class="single_item">
                            <h2> <span class="count">50</span>k</h2>
                            <h5>Посещенных
                                стран</h5>
                        </div>
                        <div class="single_item">
                            <h2><span class="count">25</span>k</h2>
                            <h5>Потраченных
                                Денег</h5>
                        </div>
                        <div class="single_item">
                            <h2><span class="count">100</span>k</h2>
                            <h5>Пройденных
                                Километров</h5>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-12">
                <div class="text-center about_btn">
                    <a class="btn_3 " href="#">узнать больше</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end-->

<!--::passion part start::-->
<section class="passion_part passion_section_padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-8">
                <div class="section_tittle">
                    <h2>Our Causes</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna </p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-passion">
                    <div class="card">
                        <img src="<?php echo Url::to('@web/img/passion/passion_1.png') ?>" class="card-img-top" alt="blog">
                        <div class="card-body">

                            <a href="#">
                                <h5 class="card-title">Fourth created forth fill
                                    created subdue be </h5>
                            </a>
                            <ul>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_1.svg') ?>" alt=""> Goal: $2500</li>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_2.svg') ?>" alt=""> Raised: $1533</li>
                            </ul>
                            <div class="skill">
                                <div class="skill-bar skill11 wow slideInLeft animated">
                                    <span class="skill-count11">75%</span>
                                </div>
                            </div>
                            <a href="#" class="btn_2">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-passion">
                    <div class="card">
                        <img src="<?php echo Url::to('@web/img/passion/passion_2.png') ?>" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Fourth created forth fill
                                    created subdue be </h5>
                            </a>
                            <ul>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_1.svg') ?>" alt=""> Goal: $2500</li>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_2.svg') ?>" alt=""> Raised: $1533</li>
                            </ul>
                            <div class="skill">
                                <div class="skill-bar skill11 wow slideInLeft animated">
                                    <span class="skill-count11">75%</span>
                                </div>
                            </div>
                            <a href="#" class="btn_2">read more</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-passion">
                    <div class="card">
                        <img src="<?php echo Url::to('@web/img/passion/passion_3.png') ?>" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">Fourth created forth fill
                                    created subdue be </h5>
                            </a>
                            <ul>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_1.svg') ?>" alt=""> Goal: $2500</li>
                                <li><img src="<?php echo Url::to('@web/img/icon/passion_2.svg') ?>" alt=""> Raised: $1533</li>
                            </ul>
                            <div class="skill">
                                <div class="skill-bar skill11 wow slideInLeft animated">
                                    <span class="skill-count11">75%</span>
                                </div>
                            </div>
                            <a href="#" class="btn_2">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::passion part end::-->

<!-- intro_video_bg start-->
<section class="intro_video_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8">
                <div class="intro_video_iner text-center">
                    <h2>Please raise your hand & Save world </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                    <a href="#" class="btn_2">Become a Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- intro_video_bg part start-->

<!--::event_part start::-->
<section class="event_part">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-8">
                <div class="section_tittle">
                    <h2>Upcoming Event</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="single_event media">
                    <img src="<?php echo Url::to('@web/img/event_1.png') ?>" class="align-self-center" alt="...">
                    <div class="tricker">10 Jun</div>
                    <div class="media-body align-self-center">
                        <h5 class="mt-0">Volunteeer Idea 2020</h5>
                        <p>Seed the life upon you are creat.</p>
                        <ul>
                            <li><span id="days"></span>days</li>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single_event media">
                    <img src="<?php echo Url::to('@web/img/event_2.png') ?>" class="align-self-center" alt="...">
                    <div class="tricker">10 Jun</div>
                    <div class="media-body align-self-center">
                        <h5 class="mt-0">Volunteeer Idea 2020</h5>
                        <p>Seed the life upon you are creat.</p>
                        <ul>
                            <li><span id="days1"></span>days</li>
                            <li><span id="hours1"></span>Hours</li>
                            <li><span id="minutes1"></span>Minutes</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single_event media">
                    <img src="<?php echo Url::to('@web/img/event_3.png') ?>" class="align-self-center" alt="...">
                    <div class="tricker">10 Jun</div>
                    <div class="media-body align-self-center">
                        <h5 class="mt-0">Volunteeer Idea 2020</h5>
                        <p>Seed the life upon you are creat.</p>
                        <ul>
                            <li><span id="days2"></span>days</li>
                            <li><span id="hours2"></span>Hours</li>
                            <li><span id="minutes2"></span>Minutes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="single_event media">
                    <img src="<?php echo Url::to('@web/img/event_4.png') ?>" class="align-self-center" alt="...">
                    <div class="tricker">10 Jun</div>
                    <div class="media-body align-self-center">
                        <h5 class="mt-0">Volunteeer Idea 2020</h5>
                        <p>Seed the life upon you are creat.</p>
                        <ul>
                            <li><span id="days3"></span>days</li>
                            <li><span id="hours3"></span>Hours</li>
                            <li><span id="minutes3"></span>Minutes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::event_part end::-->

<!--::blog_part start::-->
<section class="blog_part padding_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-8">
                <div class="section_tittle text-center">
                    <h2>Blog Post</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog">
                    <div class="appartment_img">
                        <img src="<?php echo Url::to('@web/img/blog/blog_1.png') ?>" alt="">
                    </div>
                    <div class="single_appartment_content">
                        <a href="blog.html">
                            <h4>First cattle which earthcan get
                                and see what

                            </h4>
                        </a>
                        <p>et dolore magna aliqua. Quis ipsum susp endisse ultrices gravida.
                            Risus com modo viverra maecenas accumsan lacus vel. </p>
                        <ul class="list-unstyled">
                            <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                            <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog">
                    <div class="appartment_img">
                        <img src="<?php echo Url::to('@web/img/blog/blog_2.png') ?>" alt="">
                    </div>
                    <div class="single_appartment_content">
                        <a href="blog.html">
                            <h4>First cattle which earthcan get
                                and see what

                            </h4>
                        </a>
                        <p>et dolore magna aliqua. Quis ipsum susp endisse ultrices gravida.
                            Risus com modo viverra maecenas accumsan lacus vel.
                        </p>
                        <ul class="list-unstyled">
                            <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                            <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_blog">
                    <div class="appartment_img">
                        <img src="<?php echo Url::to('@web/img/blog/blog_3.png') ?>" alt="">
                    </div>
                    <div class="single_appartment_content">
                        <a href="blog.html">
                            <h4>First cattle which earthcan get
                                and see what
                            </h4>
                        </a>
                        <p>et dolore magna aliqua. Quis ipsum susp endisse ultrices gravida.
                            Risus com modo viverra maecenas accumsan lacus vel.
                        </p>
                        <ul class="list-unstyled">
                            <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                            <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::blog_part end::-->

<!--::our client part start::-->
<section class="client_part padding_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Who Donate us</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="client_logo owl-carousel">
                    <div class="single_client_logo">
                        <img src="<?php echo Url::to('@web/img/client_logo/Logo_1.png') ?>" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo Url::to('@web/img/client_logo/Logo_2.png') ?>" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo Url::to('@web/img/client_logo/Logo_3.png') ?>" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo Url::to('@web/img/client_logo/Logo_4.png') ?>" alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src="<?php echo Url::to('@web/img/client_logo/Logo_5.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::our client part end::-->

