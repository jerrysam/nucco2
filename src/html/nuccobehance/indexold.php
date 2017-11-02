

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


    require_once __DIR__ . '/../vendor/autoload.php';
    $client = NuccoBrain\Services::getBehanceClient();
    $projects = $client->getCollectionProjects(60495231);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="We specialise in video production, infographics and branded content for internal and external communication campaigns, in order to enhance target audience engagement.">
    <meta name="keywords" content="Nucco Brain, Nuccobrain, Studio, Freelance, London, Visual Storytelling, Explianimation, Animation, Motion Graphics, Illustration, Branding, Storyboarding, Start up" />
    <meta name="author" content="Nucco Brain, NuccoBrain, Stefano Marrone, Ben Wright, Valorize">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../assets/css/new-column-ctyles.css">
    <link rel="stylesheet" href="../assets/css/default.css">

    <!-- Icons -->
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Plugin Stylesheet -->
    <link rel="stylesheet" href="../assets/plugins/magnificpopup/jquery.magnific-popup.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <title>Nucco Brain for Corporate Communications</title>
</head>

<body>


    <!-- Fullscreen Container -->

    <div class="header headag" id="header">
        <div class="inner">
            <!-- <img class="ribbon hidden-xs hidden-sm hidden-md" src="../img/ribbonag.png" alt="NuccoLogo">
          <img class="ribbon hidden-lg" src="../img/ribbonag_ipad.png" alt="NuccoLogo"> -->
            <a href="../index.php"><img src="../img/NuccoLogo.png" alt="NuccoLogo" class="desktop_logo">
            </a>
            <a href="../index.php"><img src="../img/NuccoLogo_mobile.png" alt="NuccoLogo" class="mobile_logo"></a>
            <button class="mobile-nav closed-nav">
              <i class="fa fa-bars"></i>
            </button>
            <div class="col-xs-12 col-sm-12 col-md-12 menu-container">
                    <div class="nav">
                        <ul class="col-xs-12 col-sm-12 col-md-12 navi">
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="../index.php"><i class="fa fa-arrow-left"></i>  Back</a>
                            </li>
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="#work">Works</a>
                            </li>
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="#about">About</a>
                            </li>
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="#client">Clients</a>
                            </li>
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="#friends">Friends</a>
                            </li>
                            <li class="col-xs-2 col-sm-2 col-md-2"><a href="#contact">Contact</a>
                            </li>
                        </ul>

                    </div>
                </div>
        </div>
        <nav id="zw-nav"></nav>
    </div>


    <!-- Section Block (Portfolio) -->
    <section id="work" class="section-block">
        <div class="container">
            <div class="row">
                <div class="span2 offset1">
                    <img src="../img/button/corpcommsshadow1.png" alt="" class="header-img">
                </div>
                <div class="span8">
                    <h4 class="section-title" style="text-align:left">NUCCO&nbsp;&nbsp;&nbsp;FOR</h4>
                    <h2 class="section-title" style="text-align:left">CORPORATE&nbsp;&nbsp;&nbsp;Communications</h2>
                    <p class="lead"><span class="dropcap">W</span>e specialise in video production, infographics and branded content for internal and external communication campaigns, in order to enhance target audience engagement.
                        <br>We have a strong passion for effective communication and a story well told: the best way to make people within organisations, partners and clients alike connect and engage.</p>
                    <p class="lead">The Nucco Brain Team brings its experience with innovative companies and creative content production to the world of corporate comms, without forgetting what makes any kind of content worth watching: it needs to be both informative and entertaining.</p>
                    <h1 class="divider-title">WE&nbsp;&nbsp;&nbsp;TELL&nbsp;&nbsp;&nbsp;STORIES.&nbsp;&nbsp;&nbsp;YOUR&nbsp;&nbsp;&nbsp;STORIES.&nbsp;&nbsp;&nbsp;VISUALLY.</h1>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio clearfix">
            <div class="container">

                <!-- Items -->
                <div class="banana row ">
                    <div class="reelsec moveleft">
                        <div class="span8 item 3d">
                            <div class="media">
                                <iframe src="https://player.vimeo.com/video/151256926" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                        </div>
                        <?php if ($projects): ?>
                            <?php $project = array_shift($projects) ?>
                            <div class="item span4">
                                <a href="php/work/work.php?itemId=<?php echo $project->id ?>" class="item-link">
                                    <img src="<?php echo $project->covers->{'404'} ?>" alt="">
                                    <h2><i><?php echo preg_replace('/([^|]*) |/', '$1', $project->name) ?></i></h2>
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row">
                    <div class="span12">
                        <div class="items-wrap clearfix banana">
                        <?php foreach ($projects as $project): ?>
                            <div class="item">
                                <a href="php/work/work.php?itemId=<?php echo $project->id ?>" class="item-link">
                                    <img src="<?php echo $project->covers->{'404'} ?>" alt="">
                                    <h2><i><?php echo preg_replace('/([^|]*) |/', '$1', $project->name) ?></i></h2>
                                </a>
                            </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <!-- End Items -->
            </div>
        </div>
        <!-- End Portfolio -->
    </section>
    <!-- End Section Block (Portfolio) -->

    <!-- Aside Block -->
    <aside class="aside-block" data-background="../assets/img/parallaxbg.png">
        <div class="aside-overlay"></div>
        <div class="aside-container">
            <div class="aside-content">
            </div>
        </div>
    </aside>
    <!-- End Aside Block -->

    <!-- Section Block (About Us) -->
    <section id="about" class="section-block">

        <h1 class="section-title">MAKING&nbsp;&nbsp;&nbsp;YOUR&nbsp;&nbsp;&nbsp;STORY&nbsp;&nbsp;&nbsp;COME&nbsp;&nbsp;&nbsp;ALIVE.</h1>

        <div class="container">

            <!-- Spiegazione -->
            <div class="row">
                <div class="span12">

                    <p class="lead"><span class="dropcap">N</span>ucco Brain, the visual storytelling studio, was founded in 2013 and has quickly grown into an outstanding in-house team of the best creatives out there, constantly looking for new trends and exciting solutions we can bring to our clients and partners.</p>
                    <p class="lead">We love working on diverse projects that help us bring innovation and fresh ideas in different industries.
                        <br>We believe that the set of skills necessary to be a visual storyteller should be used with an horizontal, media-agnostic approach to create strong communications campaigns that make the best possible use of all channels available and focus on high engagement of the target audience.</p>
                    <p class="lead">Storytelling is at the centre of all the content we produce. We believe stories are the way for humans to best process, learn and retain information, no matter if this happens in front of a campfire or via a digital activation campaign</p>
                    <p class="lead">That’s why our approach for any kind of project starts with a question: “How do we make this story come to life?”</p>

                </div>

            </div>
        </div>
        <div class="separator"> </div>

<?php require("../team_section/index.php"); ?>

    </section>
    <!-- End Section Block (Team) -->


    <!-- Aside Block -->
    <aside class="aside-block" data-background="../assets/img/parallaxbg.png">
        <div class="aside-overlay"></div>
        <div class="aside-container">
            <div class="aside-content">

            </div>
        </div>
    </aside>
    <!-- End Aside Block -->

    <!-- Section Block (Clients) -->
    <section id="client" class="section-block ">
        <h1 class="section-title">Those&nbsp;&nbsp;&nbsp;who&nbsp;&nbsp;&nbsp;trust&nbsp;&nbsp;&nbsp;Nucco</h1>

        <div class="container">
            <div class="row">
                <div class="span12">

                    <!-- Client -->
                    <div class="clients">
                        <ul>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/innovate_icon.png" alt="">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/john_lewis_icon.png" alt="">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo4.png" alt="">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/hsbc_icon.png" alt="">
                  </span>
                                </span>
                            </li>

                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/llyods_icon.png" alt="Llyods Bank">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo2.png" alt="">
                  </span>
                                </span>
                            </li>

                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo7.png" alt="">
                  </span>
                                </span>
                            </li>

                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/hs2_icon.png" alt="HS 2">
                  </span>
                                </span>
                            </li>

                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo18.png" alt="Luxottica">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/redcross_icon.png" alt="International Red Cross">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/sport_england_icon.png" alt="Sport England">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/rolls_icon.png" alt="Rolls Royce">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo23.png" alt="Bbc">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo21.png" alt="Bbc">
                  </span>
                                </span>
                            </li>
                            <li>
                                <span class="client-wrap">
                  <span class="client-logo">
                      <img src="clients/logo31.png" alt="wallstreet">
                  </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
    </section>
    <!-- End Section Block (Clients) -->

    <!-- Aside Block -->
    <aside class="aside-block" data-background="../assets/img/parallaxbg.png">
        <div class="aside-overlay"></div>
        <div class="aside-container">
            <div class="aside-content">

            </div>
        </div>
    </aside>
    <!-- End Aside Block -->

    <!-- Section Block (Partners) -->
    <section id="friends" class="section-block">
        <?php require("../friends_section/index.php"); ?>
    </section>
    <!-- End Section Block (Team) -->

    <!-- Aside Block -->
    <aside class="aside-block" data-background="../assets/img/parallaxbg.png">
        <div class="aside-overlay"></div>
        <div class="aside-container">
            <div class="aside-content">

            </div>
        </div>
    </aside>
    <!-- End Aside Block -->

        <section id="testimonial" class="section-block">
    <h1 class="section-title">Testimonials</h1>
    <div class="container">
      <div class="span12">
              <div class="cycle-slideshow" id="text-slideshow"
                  data-cycle-fx="scrollHorz" 
                data-cycle-timeout="4000"
                data-cycle-slides="> div"
                data-cycle-center-horz=true
                >
                <div><p>"The Nucco Brain Team came to us via a recommendation and they lived up to every bit of their reputation. 
                Throughout the process they have been efficient, professional, managed expectations and delivered within budget."<br><br>
                James Du Boulay, Head of Sales and Marketing at P3P Partners</p></div>
                <div><p>"Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project."<br><br>
                Parthipan Ragunathan, Global Head of Marketing Strategy Planning at Lycamobile Group</p></div>
                <div><p>
                "Nucco Brain Team level of deep understanding of our brand and needs helped us shape our B2B marketing strategy with effective results and great quality of production.”<br><br>
                Lorenzo Rulfo, MD of Book on a Tree Ltd</p></div>
                <div><p>
                "Absolute pleasure and professionalism in combination with artistic talents and production values. One of the most enjoyable and favourable collaboration in my professional career up to date."<br><br>
                Ilija Smiljanic, Brand Manager at Nurture Immunity</p></div>
              </div>
      </div>
    </div>

    <style>
    </style>
  </section>

    <!-- Aside Block -->
  <aside class="aside-block" data-background="../assets/img/parallaxbg.png">
    <div class="aside-overlay"></div>
    <div class="aside-container">
      <div class="aside-content">

      </div>
    </div>
  </aside>
  <!-- End Aside Block -->

    <!-- Section Block (Contact) -->
    <section id="contact" class="section-block">
        <h1 class="section-title">Get&nbsp;&nbsp;&nbsp;in&nbsp;&nbsp;&nbsp;Touch</h1>
        <div class="container">

            <!-- Contact Map -->
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <div class="sidebar-block">
                            <h3 class="city">NEW BUSINESS</h3>
                            <p><a href="mailto:stefano@nuccobrain.com">stefano@nuccobrain.com</a>
                                <h3 class="city">GENERAL ENQUIRES</h3>
                                <p><a href="mailto:contact@nuccobrain.com">contact@nuccobrain.com</a>
                        </div>
                        <div class="sidebar-block">
                            <h3 class="city">LONDON</h3>
                            <span class="tel">+44 (0)20 7688 1089</span></br>
                            Unit 3, 17-18 Clere Street</br>
                            EC2A 4LJ - London, UK</p>
                        </div>
                        <div class="sidebar-block">
                            <h3 class="city">MILAN</h3>
                            <span class="tel">+39 02 872 346 72</span>
                            </br>
                            Via Tito Livio 22, 20137 </br>
                            Milan - Italy</p>
                        </div>
                    </div>
                </div>
                <div class="span9">
                    <div class="google-maps" data-center-lat="51.5279696" data-center-lng="-0.0888695" data-zoom="15" data-marker-lat="51.5279696" data-marker-lng="-0.0888695" data-draggable="false"></div>
                </div>
            </div>
            <!-- End Contact Map -->
        </div>
    </section>
    <!-- End Section Block (Contact) -->

    <!-- Footer -->
    <footer class="footer">
        <div class="back-top"></div>

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <a href="http://www.nuccoblog.com" target="_blank"><img src="../img/nuccoblog.png" alt="nuccoblog" class="pull-left">
                            <span><span class="big">NuccoBlog</span>
                            <br><span class="under"> Insights from our world</span></span>
                        </a>
                    </div>
                    <div class="span6">
                        <ul class="list-inline text-center social">
                            <li><a href="http://vimeo.com/nuccobrain" target="_blank"><i class="fa fa-vimeo-square"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/nuccobrainstudio" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="http://www.pinterest.com/nuccobrain/" target="_blank"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li><a href="http://uk.linkedin.com/company/nucco-brain" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="http://instagram.com/nuccobrain" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://twitter.com/NuccoBrain" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://plus.google.com/+Nuccobrain/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="https://www.behance.net/nuccobrain" target="_blank"><i class="fa fa-behance"></i></a>
                            </li>
                        </ul>
                        <h2 style="text-align:center; font-size:20px; text-decoration:underline; ">
                            <a href="http://nuccobrain.us9.list-manage1.com/subscribe?u=afd82c7ac490b4b00ff047e67&id=584a86d726&orig-lang=1" target="_blank">Subscribe to our Newsletter <i class="fa fa-envelope" style="margin-left:20px;font-size:27px;"></i></a>
                        </h2>
                    </div>
                    <div class="span3">
                        <p><a href="mailto:contact@nuccobrain.com">contact@nuccobrain.com</a><br/>
                            +44 (0)20 7688 1089<br/>
                            Unit 3, 17-18 Clere Street<br/>
                            London - EC2A 4LJ
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        Copyright 2017. Nucco Brain. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- jQuery & Bootstrap -->
    <script src="../assets/js/jquery-1.9.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->

    <script src="../assets/plugins/fitvids/jquery.fitvids.min.js"></script>
    <script src="../assets/plugins/isotope/jquery.isotope.min.js"></script>
    <script src="../assets/plugins/quovolver/jquery.quovolver.min.js"></script>
    <script src="../assets/plugins/magnificpopup/jquery.magnific-popup.min.js"></script>

    <!-- Maps -->
    <script src="../assets/plugins/map/gmap3.min.js"></script>

    <!-- Cycle Plugin -->
    <script src="../assets/plugins/cycle2/jquery.cycle2.min.js"></script>
    <script src="../assets/plugins/cycle2/jquery.cycle2.swipe.min.js"></script>
    <script src="../assets/plugins/cycle2/jquery.cycle2.center.min.js"></script>

    <!-- Template Script -->
    <script src="../assets/js/leviate.plugins.js"></script>
    <script src="../assets/js/leviate.parallax.js"></script>
    <script src="../assets/js/leviate.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/AnimatedHeader.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-39432279-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>