<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brianna J. Lofton</title>
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
    // $( "#skills" ).click(function() {
    //     $('html, body').animate({
    //         scrollTop: $("#about").offset().top
    //     }, 1000);
    // });
    $( "#about" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });

});

</script>
</script>
</head>
<body>
<div class="bg"></div><div id="overlay"></div>
<div id="name">
    <!--<h1>¯\_(ツ)_/¯</h1>-->
    <h1 class="line">______</h1>
    <h1 class="myname">BRIANNA J. LOFTON</h1>
    <h3>Hi! I am a full-stack web developer currently based in Raleigh, NC.  I build fully functioning, interactive web sites and web applications.</h3>
</div>
<div id="main">
    <div id="skills" class="col-md-12">
      <div class="row">
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/html5.png" alt="html5"></div>
            <div class="lang">
            <h1><span>HTML5</span></h1>
            <p>Expert level with 6 years of experience.</p>
            </div>
        </div>
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/css3.png" alt="css3"></div>
          <div class="lang">
          <h1><span>CSS3</span></h1>
          <p>Expert level with 6 years of experience.</p>
          </div>
        </div>
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/javascript.png" alt="javascript"></div>
          <div class="lang">
          <h1><span>JAVASCRIPT</span></h1>
          <p>Beginner but proficient in both JS and JQuery with one year of experience.</p>
          </div>
        </div>
      </div>
      <div class="row" style="margin-top: 30px;">
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/bootstrap.png" alt="bootstrap" style="width:80%; padding-top:10%;"></div>
          <div class="lang" style="margin-top:30px;">
              <h1><span>BOOTSTRAP</span></h1>
              <p>Responsive design. Proficient with one year of experience.</p>
          </div>
        </div>
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/php.png" alt="php" style="width:70%;padding-top:25%;"></div>
          <div class="lang" style="margin-top:30px;">
          <h1><span>PHP</span></h1>
          <p>Intermediate level with 2 years of experience.</p>
          </div>
        </div>
        <div class="col-sm-4 skill">
          <div class="logo"><img src="images/mysql.png" alt="mysql" style="padding-top: 18%;"></div>
          <div class="lang" style="margin-top:30px;">
          <h1><span>MYSQL</span></h1>
          <p>Intermediate level with 2 years of experience.</p>
          </div>
        </div>
      </div>
    </div><!-- end skills-->


    <div id="about">
        <div id="img_container">
            <img src="images/greenway.jpg" class="about_me" alt="the greenway">
            <img src="images/me.jpg" class="about_me filter" alt="Photo of me">
            <img src="images/atl.jpg" class="about_me" alt="ATL">
            <img src="images/code_library.jpg" class="about_me" alt="hunt library">
            <img src="images/cupcake.jpg" class="about_me" alt="cupcake">
            <img src="images/battleship.jpg" class="about_me" alt="battleship">
            <img src="images/talley.jpg" class="about_me" alt="talley student center">
            <img src="images/snow_ny.jpg" class="about_me" alt="NYC">
            <img src="images/flower.jpg" class="about_me" alt="flower">
            <img src="images/donut_wall.jpg" class="about_me" alt="donut wall">
            <img src="images/charlotte_park.jpg" class="about_me" alt="a park">
        </div><!-- end img_container-->
        <div id="dark"></div>
        <div id="tagline">
            <h1>See. Live. Learn. Dream. Create.</h1>
        </div>
    </div><!-- end about -->



    <div id="read">
        <div id="view_container">
        <button id="resume"><h3>View Resume &nbsp;<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></h3></button>
        </div><!-- view container -->
        <div id="view_options" style="display:none;">
            <a href="resume.docx" target="_blank"><img src="images/word.png" class="view_icon" alt="Microsoft Word"></a>
            <a href="https://github.com/bjlofton" target="_blank"><img src="images/git.png" class="view_icon" alt="Git"></a>
            <a href="https://www.linkedin.com/in/brianna-lofton-88617263/" target="_blank"><img src="images/linkedin.png" class="view_icon" alt="Linked In"></a>
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
<div style="margin-bottom: 200px;"></div>
</div><!-- end main -->
<div id="status"></div>
<script>
    var winWidth  = 0;
$(window).resize(function() {
  winWidth = $(window).width();
  $("#status").text(winWidth);
});
</script>
<script>
var skill = document.getElementsByClassName("skill");
for(var i = 0; i < skill.length; i++) {
  skill[i].onmouseover = function() {
    this.getElementsByClassName("logo")[0].style.display = "none";
    this.getElementsByClassName("lang")[0].style.display = "block";
  };
  skill[i].onmouseout = function() {
    this.getElementsByClassName("logo")[0].style.display = "block";
    this.getElementsByClassName("lang")[0].style.display = "none";
  };
}
</script>
</body>
</html>
