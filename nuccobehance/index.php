

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
        
        <nav id="zw-nav"></nav>
    </div>


    <!-- Section Block (Portfolio) -->
    <section id="work" class="section-block">
        
         

        <!-- Portfolio -->
        <div class="portfolio clearfix">
            <div class="container">

                <!-- Items -->
                
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