<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Nucco Brain is a visual storytelling studio based in London. We produce all assets needed from our clients for the development of both a visual language, and the story they want to tell. The core asset delivered is explanimation, animated video of 90 seconds narrating our clients' story in an appealing and intuitive way.">
    <meta name="keywords" content="Nucco Brain, Nuccobrain, Studio, Freelance, London, Visual Storytelling, Explianimation, Animation, Motion Graphics, Illustration, Branding, Storyboarding, Start up" />
    <meta name="author" content="Nucco Brain, NuccoBrain, Stefano Marrone, Ben Wright, Valorize">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/assets/css/new-column-ctyles.css">
    <link rel="stylesheet" href="/assets/css/default.css">

    <!-- Icons -->
    <link href='http://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Plugin Stylesheet -->
    <link rel="stylesheet" href="/assets/plugins/magnificpopup/jquery.magnific-popup.css">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <title>Nucco Brain for Agency & Branding</title>
</head>

<body>


<!-- Fullscreen Container -->

<div class="header headag" id="header">
    <div class="inner">
        <!-- <img class="ribbon hidden-xs hidden-sm hidden-md" src="/img/ribbonag.png" alt="NuccoLogo">
            <img class="ribbon hidden-lg" src="/img/ribbonag_ipad.png" alt="NuccoLogo"> -->
        <a href="/index.php" style="display:block;width:auto;"><img src="/img/NuccoLogo.png" alt="NuccoLogo" style="display:block;margin:0 auto"></a>
        <button class="mobile-nav closed-nav">
            <i class="fa fa-bars"></i>
        </button>
        <div class="col-xs-12 col-sm-12 col-md-12 menu-container">
            <div class="nav">
                <ul class="col-xs-12 col-sm-12 col-md-12 navi">
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php" ><i class="fa fa-arrow-left"></i>  Back</a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php#work">Works</a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php#about">About</a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php#client">Clients</a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php#friends">Friends</a></li>
                    <li class="col-xs-2 col-sm-2 col-md-2"><a href="/agencie/index.php#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav id="zw-nav"></nav>
</div>


<!-- Project Block -->
<section id="work" class="section-block">
    <div class="item-detail item-popup-block clearfix">
        <div class="item-info">
            <h3 class="title"><?php echo $content['title'] ?></h3>
        </div>
        <div class="item-info">
            <?php echo $content['description'] ?>
            <div class="clearfix"><hr/></div>
        </div>
        <div class="item-media">
            <?php foreach ($content['media'] as $media): ?>
                <div class="media">
                    <?php if ('image' == $media['type']): ?>
                        <img src="<?php echo $media['src'] ?>" />
                    <?php elseif ('video' == $media['type']): ?>
                        <div class="fluid-width-video-wrapper" style="padding-top: 50%;">
                            <?php echo $media['embed'] ?>
                        </div>
                    <?php elseif ('text' == $media['type']): ?>
                        <span style="color:#000000 !important">
                        <?php echo $media['text'] ?>
                    </span>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- End Project Block -->


<!-- Footer -->
<footer class="footer">
    <div class="back-top"></div>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <a href="http://www.nuccoblog.com" target="_blank"><img src="/img/nuccoblog.png" alt="nuccoblog" class="pull-left">
                        <span><span class="big">NuccoBlog</span><br><span class="under"> Insights from our world</span></span>
                    </a>
                </div>
                <div class="span6">
                    <ul class="list-inline text-center social">
                        <li><a href="http://vimeo.com/nuccobrain" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="https://www.facebook.com/nuccobrainstudio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.pinterest.com/nuccobrain/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="http://uk.linkedin.com/company/nucco-brain" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="http://instagram.com/nuccobrain" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://twitter.com/NuccoBrain" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/+Nuccobrain/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="https://www.behance.net/nuccobrain" target="_blank"><i class="fa fa-behance"></i></a></li>
                    </ul>  					</div>
                <div class="span3">
                    <p><a href="mailto:contact@nuccobrain.com">contact@nuccobrain.com</a> <br>
                        +44 (0)20 7739 6042<br>
                        Unit 8 Pickwick House, 20 Ebenezer Street<br>
                        N1 7NP - London, UK</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    Copyright 2016. Nucco Brain. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- jQuery & Bootstrap -->
<script src="/assets/js/jquery-1.9.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->

<script src="/assets/plugins/fitvids/jquery.fitvids.min.js"></script>
<script src="/assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="/assets/plugins/quovolver/jquery.quovolver.min.js"></script>
<script src="/assets/plugins/magnificpopup/jquery.magnific-popup.min.js"></script>

<!-- Maps -->
<script src="/assets/plugins/map/gmap3.min.js"></script>

<!-- Cycle Plugin -->
<script src="/assets/plugins/cycle2/jquery.cycle2.min.js"></script>
<script src="/assets/plugins/cycle2/jquery.cycle2.swipe.min.js"></script>
<script src="/assets/plugins/cycle2/jquery.cycle2.center.min.js"></script>

<!-- Template Script -->
<script src="/assets/js/leviate.plugins.js"></script>
<script src="/assets/js/leviate.parallax.js"></script>
<script src="/assets/js/leviate.js"></script>
<script src="/js/classie.js"></script>
<script src="/js/AnimatedHeader.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39432279-1', 'auto');
    ga('send', 'pageview');

</script>
</body>

</html>
