<!DOCTYPE html>
<html lang="en">
  <head class="no-skrollr">
    <meta charset="utf-8">
    <title>Motion Revolution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/extension.css" rel="stylesheet">
    <link href="assets/css/typography.css" rel="stylesheet">
    <link href="stylesheets/isotope.css" rel="stylesheet">
    <link href="stylesheets/colorbox.css" rel="stylesheet"/>
    <link href="stylesheets/flexslider.css" rel="stylesheet"/>  
    <link href="stylesheets/prettyPhoto.css" rel="stylesheet"/>  
    <link href="stylesheets/jquery.tweet.css" rel="stylesheet"/>
    <link href="stylesheets/responsive-nav.css" rel="stylesheet">
    <link href="stylesheets/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="stylesheets/ie8.css">
    <![endif]-->

    <style>
    .page{
        padding-bottom: 60px !important;
        min-height: 400px !important;
        background: transparent !important;
    }
    .carousel-indicators li{
        background: #000 !important;
        cursor: pointer;
    }
    .carousel-indicators li:hover{
        background: #F48C2D !important;
        cursor: pointer;
    }
    .point-left > .carousel-indicators{
        left:0 !important;
    }
    #navigation {
    top: 0 !important;
    width: 100%;
    position: fixed !important;
    height: 70px;
    z-index: 1000;
    background: #2c2c2c !important;
}
    .show-item{
        padding-top:0px !important;
    }
    .show-item-mid{
        padding-bottom: 30px !important;
    }  
    .show-specs{
        margin-top: 0px !important;
    }  
    .error404{
        margin-top: 120px;
        font-size: 96px;
        text-align: right;
        color: #fff;
    }
    #showcase{
        height: 400px !important;
    }
    .promo-text{
        color: #fff;
    }
    </style>
</head>
<body>

   <!-- Mobile Only Navigation - 2 types each for (480px to 640px) and (640px to 960px) wide device screens -->
    <header id="mobile-header" class="clearfix hidden-desktop">
        <div id="nav">
          <ul>
            <li><a class="scroll-link" href="index.html" data-soffset="0">Back to Home</a></li>
          </ul>
        </div>
    </header>

    <!-- Desktop Navigation-->
    <nav id="navigation" class="visible-desktop">
    
        <a href="/"><img title="MoRev" alt="MoRev" class="logo pull-right" src="images/logo.png"/></a>
        <ul id="menu" class="visible-desktop pull-left"><li class="links">
                <a href="/">Back to Home</a>
            </li>
        </ul>

    </nav>
    <!--/Navigation-->
    


<section id="showcase" class="band page top-space">
    <section class="container-fluid">
    <div class="row-fluid">
        <section class="container">
            <div class="welcome row">
                <article class="span12">
                    <h1 class="text-left promo-caps error404">Thanks</h1>
                </article>
            </div><!--/ row-->
            <div class="welcome row">
                <article class="span12">
                    <p class="text-right promo-text">We got your message. We will <span>get back to you</span> soon.</p>
                </article>
            </div><!--/ row-->

        </section><!--/ container-->        
    </div><!--/ row-fluid-->    
    </section>
</section><!--/ band-->

    <section class="container-fluid address-wrap">
    <div class="row-fluid">
        <section class="container">

            <div class="row">
                <article id="link-block" class="span3">
                    <h3>Latest Blog Posts</h3>
                    <ul>
                        <li><a href="http://blog.motionrev.com/?p=1">Hello world!</a></li>
                    </ul>
                </article>
                <article id="address-block" class="span9">
                    <h2>MoRev</h2>
                    <h3>Boston, Massachusetts</h3>
                    <h5><span>Copyright &copy; 2013. All rights reserved.</span></h5>
                </article>



            </div><!--/ row-->

        </section><!--/ container-->
    </div><!--/ row-fluid-->
    </section>
</section><!--/ band-->


<footer id="mastfoot">
    <section class="container-fluid">
    <div class="row-fluid">
        <section class="container">

            <div class="row">
                <article class="span4">
                    <h3 class="text-left twitter-user">Get Connected</h3>
                </article>
                <nav class="span8 foot-social">
                    <a href="http://twitter.com/MotionRev"><img title="Twitter" alt="Twitter" src="images/social/07.png"></a>
                    <a href="http://facebook.com/MotionRev"><img title="Facebook" alt="Facebook" src="images/social/02.png"></a>
                    <a href="http://blog.motionrev.com/feed"><img title="Blog RSS" alt="Blog RSS" src="images/social/06.png"></a>
                </nav>
            </div><!--/ row-->

        </section><!--/ container-->
    </div><!--/ row-fluid-->
    </section>
</footer>

<div id="progress" data-0="width:0%;" data-end="width:100%;"></div>

</div>

<div class="scrollpos-status">
</div>

	<!--js stuff down here after the rest of the page has loaded-->
	<script type="text/javascript" src="javascripts/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.easing.1.3.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="javascripts/fake-element.js"></script>
    <script type="text/javascript" src="javascripts/jquery.colorbox.js" ></script>
    <script defer src="javascripts/jquery.flexslider.js"></script>
    <script type="text/javascript" src="javascripts/jquery.backstretch.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="javascripts/form-validation.js"></script>
    <script type="text/javascript" src="javascripts/waypoints.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.tweet.js"></script>
    <script type="text/javascript" src="javascripts/responsive-nav.js" ></script>
    <script type="text/javascript" src="javascripts/scroll.js"></script>
	<script type="text/javascript" src="javascripts/script.js"></script>
    <script type="text/javascript" src="helpers/scrollpos-finder.js"></script>




    <script>
        var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
          animate: true, // Boolean: Use CSS3 transitions, true or false
          transition: 400, // Integer: Speed of the transition, in milliseconds
          label: "Menu", // String: Label for the navigation toggle
          insert: "after", // String: Insert the toggle before or after the navigation
          customToggle: "", // Selector: Specify the ID of a custom toggle
          openPos: "static", // String: Position of the opened nav, relative or static
          jsClass: "js", // String: 'JS enabled' class which is added to <html> el
          init: function(){}, // Function: Init callback
          open: function(){}, // Function: Open callback
          close: function(){} // Function: Close callback
        });


    </script>

    <script type="text/javascript">
//http://detectmobilebrowsers.com/ + tablets
(function(a) {
if(/android|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(ad|hone|od)|iris|kindle|lge |maemo|meego.+mobile|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))
{
//Suspend skrollr on mobile devices
//(You can uncomment the below line to activate parallax effect on supported mobiles).
// document.write('<script type="text/javascript" src="javascripts/skrollr.mobile.min.js"><\/script>');
document.write('<link href="stylesheets/mobile-hook.css" rel="stylesheet">');
//Mobile Only Navigation Scrolling:
}

else{
//Activating skrollr only on non-mobile (bigger) devices.
//(You can comment the below line to disable parallax effect on all devices and browsers).
document.write('<script type="text/javascript" src="javascripts/skrollr.min.js"><\/script>');
document.write('<script type="text/javascript" src="javascripts/skrollr.menu.js"><\/script>');
}
})(navigator.userAgent||navigator.vendor||window.opera);
</script>

<!--[if lt IE 9]>
<script type="text/javascript" src="javascripts/skrollr.ie.min.js"></script>
<![endif]-->



	<script type="text/javascript">
    //Skrollr Parallax Engine Invoking
    var s = skrollr.init({
        forceHeight: false
    });

    //Skrollr Parallax Menu Scrolling Navigation Invoking
    skrollr.menu.init(s, {
        animate: true, //skrollr will smoothly animate to the new position using `animateTo`.
        duration: 1000
    });
    </script>

    <script>
        $.backstretch([
          "images/bg.jpg",
          "images/bg2.jpg",
          "images/bg4.jpg"
        ], {
            fade: 3000,
            duration: 4000
        });
    </script>


</body>

</html>