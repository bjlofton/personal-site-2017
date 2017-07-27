<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script>
$(document).ready(function() {
    var flag=true;

    $('#view_container').click(function() {
        //$('#resume').toggle('slow');
        if (flag) {
             $( "#resume" ).animate({left: "-=100px"}, 'slow');
             flag = false;
        }
        $( '#view_options' ).toggle( 'slow' );
    });
    $( "#name" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 1000);
    });
    $( "#skills" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 1000);
    });
    $( "#about" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });
    
});


// if (flag) {
        //     $( "#resume" ).animate({left: "-=100px"}, 'slow');
        //     flag = false;
        // }
</script>
</script>
</head>
<body>
<!--<nav class="navbar">-->
<!--  <div class="container-fluid">-->
<!--    <div class="navbar-header">-->
<!--      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>-->
<!--        <span class="icon-bar"></span>                        -->
<!--      </button>-->
<!--      <a class="navbar-brand" href="#">WebSiteName</a>-->
<!--    </div>-->
<!--    <div class="collapse navbar-collapse" id="myNavbar">-->
<!--      <ul class="nav navbar-nav">-->
<!--        <li><a href="#skills">Skills</a></li>-->
<!--        <li><a href="#">Page 2</a></li>-->
<!--        <li><a href="#">Page 3</a></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--  </div>-->
<!--</nav>-->
<!--<div id="button" style="z-index: 9000000;">button</div>-->
<div class="bg"></div><div id="overlay"></div>
<div id="name">
    <!--<h1>¯\_(ツ)_/¯</h1>-->
    <h1>______</h1>
    <h1 style="font-size: 72px;">BRIANNA J. LOFTON</h1>
    <h3>Hi! I am a full-stack web developer currently based in Raleigh, NC.  I build fully functioning, interactive web sites and web applications.</h3>
</div>
<div id="main">
    <div id="skills">
        <div class="col-md-12">
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                <h1><span>HTML5</span></h1>
                <p>Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                <h1><span>CSS3</span></h1>
                <p>Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
        </div><!-- end col-12 -->
        <div class="col-md-12">
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                <h1><span>JAVASCRIPT</span></h1>
                <p>Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
       
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                    <h1><span>BOOTSTRAP</span></h1>
                    <p>Responsive design. Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
        </div><!-- end col-12 -->
        <div class="col-md-12" style="margin-bottom: 50px;">
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                <h1><span>PHP</span></h1>
                <p>Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="lang">
                <h1><span>MYSQL</span></h1>
                <p>Highly proficient with 4 years of experience.</p>
                <button>See Example</button>
                </div>
            </div>
        </div><!-- end col-12 -->
    </div><!-- end skills-->
    
    
    <div id="about">
        <div id="img_container">
            <img src="images/greenway.jpg" class="about_me" alt="Photo of me">
            <img src="images/me.jpg" class="about_me filter" alt="Photo of me">
            <img src="images/atl.jpg" class="about_me" alt="Photo of me">
            <img src="images/code_library.jpg" class="about_me" alt="Photo of me">
            <img src="images/cupcake.jpg" class="about_me" alt="Photo of me">
            <img src="images/battleship.jpg" class="about_me" alt="Photo of me">
            <img src="images/talley.jpg" class="about_me" alt="Photo of me">
            <img src="images/snow_ny.jpg" class="about_me" alt="Photo of me">
            <img src="images/flower.jpg" class="about_me" alt="Photo of me">
            <img src="images/donut_wall.jpg" class="about_me" alt="Photo of me">
            <img src="images/charlotte_park.jpg" class="about_me" alt="Photo of me">
        </div><!-- end img_container-->
        <div id="dark"></div>
        <div id="tagline">
            <h1 style="font-size: 50px;">See. Live. Learn. Dream. Create.</h1>
        </div>
    </div><!-- end about -->
    
    
    
    <div id="read">
        <div id="view_container">
        <button id="resume"><h3>View Resume &nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></h3></button>
        </div><!-- view container -->
        <div id="view_options" style="display:none;">
            <img src="images/word.png" class="view_icon" alt="Microsoft Word">
            <img src="images/git.png" class="view_icon" alt="Git">
            <img src="images/linkedin.png" class="view_icon" alt="Linked In">
        </div><!-- end view_options -->
    </div><!-- end work-->

    <div id="contact">
        <fieldset>
            <legend>Contact Me</legend>
        <form action="" method="post" name="">
            <p>Name *</p><input type="text" name="name" class="form_field" required>
            <p>Email *</p><input type="text" name="email" class="form_field" required>
            <p>Subject *</p><input type="text" name="subject" class="form_field" required>
            <p>Message *</p><textarea name="message" cols="30" rows="6" class="form_field" required></textarea>
            <p><input type="submit" name="submit" value="Send"></p>
        </form>
        </fieldset>
    </div><!-- end contact -->
<div style="margin-bottom: 600px;"></div>
</div><!-- end main -->
<div id="status"></div>
<script>
    var winWidth  = 0;
$(window).resize(function() {
  winWidth = $(window).width();
  $("#status").text(winWidth);
});
</script>
</body>
</html>