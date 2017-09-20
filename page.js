
var URL = 'https://c7jkdmj5df.execute-api.us-east-1.amazonaws.com/prod/-contact'
 
$('#contact_form').submit(function (event) {
  event.preventDefault()
 
  var data = {
    name: $('#name-input').val(),
    email: $('#email-input').val(),
    subject: $('#subject-input').val(),
    description: $('#description-input').val()
  }
 console.log(JSON.stringify(data));
  $.ajax({
    type: 'POST',
    url: URL,
    headers: {
    },
    dataType: 'json',
    contentType: 'application/json',
    data: JSON.stringify(data),
    success: function () {
      // clear form and show a success message
      $('#success').html("Your message has been sent!");
      $('#name-input').val("");
      $('#email-input').val("");
      $('#subject-input').val("");
      $('#description-input').val("");
    },
    error: function () {
      // show an error message
    }
  })
})




$(document).ready(function() {
    $( "#name" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#main").offset().top
        }, 1000);
    });
    $( "#about" ).click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });

});

var winWidth  = 0;
$(window).resize(function() {
  winWidth = $(window).width();
  $("#status").text(winWidth);
});

var skill = document.getElementsByClassName("skill");
if(window.innerWidth > 768) {
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
} else {
  for(var i = 0; i < skill.length; i++) {
    skill[i].onmouseover = function() {
      this.getElementsByClassName("logo")[0].style.display = "none";
      this.getElementsByClassName("lang2")[0].style.display = "block";
    };
    skill[i].onmouseout = function() {
      this.getElementsByClassName("logo")[0].style.display = "block";
      this.getElementsByClassName("lang2")[0].style.display = "none";
    };
  }
}

$(document).ready(function(){
    $("#resume").click(function(){
      $("#view_options").slideToggle('slow');
    });
});

var agent = '<?php echo $agent;?>';
if(agent.includes("Mobi")) {
  var cflag=0;
    for(var i = 0; i < skill.length; i++) {
      skill[i].onclick = function() {
        if(cflag == 0) {
          this.getElementsByClassName("logo")[0].style.display = "none";
          this.getElementsByClassName("lang2")[0].style.display = "block";
          cflag = 1;
        } else
        if(cflag == 1) {
          this.getElementsByClassName("logo")[0].style.display = "block";
          this.getElementsByClassName("lang2")[0].style.display = "none";
          cflag = 0;
        }
      };
  }
}