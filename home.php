<?php 
include 'admin/db_connect.php'; 
?>
<style>



* {box-sizing: border-box;}
            body {font-family: Verdana, sans-serif;}
            .mySlides {display: none;}
            img {vertical-align: middle;}


            *, *:before, *:after {
  box-sizing: inherit;
}

             
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Exo 2', sans-serif;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body{
  background:white;
}

.wrapper{
  margin-top: 60px;
  text-align: center;
}

.button{
  background-color: #0ba8e6;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.wrapper h1{
  font-family: 'Yatra One', cursive;
  font-size: 48px;
  color: #fff;
  margin-bottom: 25px;
}

.our_team{
  width: auto;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.our_team .team_member{
  width: 300px;
  margin: 10px;
  background: #fff;
  padding: 20px 10px;
}

.our_team .team_member .member_img{
  background: #ffffff;  
  max-width: 190px;
  width: 100%;
  height: 190px;
  margin: 0 auto;
  border-radius: 50%;
  padding: 5px;
  position: relative;
  cursor: pointer;
}

.our_team .team_member .member_img img{
  width: 100%;
  height: 100%;
}

.our_team .team_member h3{
  text-transform: uppercase;
  font-size: 18px;
  line-height: 18px;
  letter-spacing: 2px;
  margin: 15px 0 0px;
}

.our_team .team_member span{
  font-size: 10px;
}

.our_team .team_member p{
  margin-top: 20px;
  font-size: 14px;
  line-height: 20px;
  color: #000000;
}

.our_team .team_member .member_img .social_media{
  position: absolute;
  top: 5px;
  left: 5px;
  background: rgba(0,0,0,0.65);
  width: 95%;
  height: 95%;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: scale(0);
   transition: all 0.5s ease;
}

.our_team .team_member .member_img .social_media .item{
  margin: 0 10px;
}

.our_team .team_member .member_img .social_media .fab{
  color: #8c7ae6;
  font-size: 20px;
}

.our_team .team_member .member_img:hover .social_media{
  transform: scale(1);

}
.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  margin-top: 200px;
  color: white;
}

.bg_image{
              background-image: url("images/bg3.jpg");
              background-repeat: no-repeat;
              background-position-y: bottom;
              background-size: 100% 100%;
            }

            hr{
              border-color: rgb(106, 0, 255) ;
            }

            p{
              color: black;
            }

            marquee{
              margin-top: 20px;
            }
            
            /* Slideshow container */
            .slideshow-container {
              height: 287px;
              width: 800px;
              position: relative;
              margin-top: 150px;
              margin-left: 350px;
              margin-bottom: 40px;
              background-color: #bbb;
              padding-bottom: 80px;
            }
            
            /* Caption text */
            .text {
              color: #f2f2f2;
              font-size: 15px;
              padding: 8px 12px;
              position: absolute;
              bottom: 8px;
              width: 100%;
              text-align: center;
            }
            
            /* Number text (1/3 etc) */
            .numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }
            
            /* The dots/bullets/indicators */
            .dot {
              height: 15px;
              width: 15px;
              margin: 20px 2px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              transition: background-color 0.6s ease;
            }
            
            .active {
              background-color: black;
            }
            
            /* Fading animation */
            .fade {
              animation-name: fade;
              animation-duration: 1.5s;
            }
            
            @keyframes fade {
              from {opacity: .4} 
              to {opacity: 1}
            }
            


            @media screen and (max-width: 650px) {
              .div1{
            .column {
            width: 100%;
          display: block;}}

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
              .div2{}
              .text {font-size: 11px}
            }

#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.event-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
.banner{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 26vh;
        width: calc(30%);
    }
    .banner img{
        width: calc(100%);
        height: calc(100%);
        cursor :pointer;
    }
.event-list{
cursor: pointer;
border: unset;
flex-direction: inherit;
}

.event-list .banner {
    width: calc(40%)
}
.event-list .card-body {
    width: calc(60%)
}
.event-list .banner img {
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
    min-height: 50vh;
}
span.hightlight{
    background: yellow;
}
.banner{
   min-height: calc(100%)
}
</style>
<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <center><img src="images/seven.jpg"></center>
  <div class="text"></div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <center><img src="images/one.jpg"></center>
    <div class="text">SVKM IOT, DHULE</div>
  </div>

  <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <center><img src="images/two.jpg"></center>
      <div class="text"></div>
    </div>
  
  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <center><img src="images/three.jpg"></center>
    <div class="text"> </div>
  </div>

  <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <center><img src="images/four.jpg"></center>
      <div class="text"></div>
    </div>

    
    

    </div>
    <div style="text-align:center;">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      
      

    </div>
  </div>
  </div>
  
  
  
  
  
  <script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 2 seconds
  }
  </script>



<div class="about-section">
            <h1>About Project</h1><br>
            <h6>Alumni Tracking System is an Web-based application that helps to tracking of college graduates..</h6><br>
            <h6>Each year many students graduated from their respective universities or colleges. It’s is very hard for the colleges and universities to maintain their
              comprehensive data and result in lack of communication between alumni and their alma mater. Even if we have to invite any alumni for meeting or events
              it will be very difficult for colleges or universities to contact them. Many of alumni will start their venture after graduation, for colleges to make sure that
              this alumnus takes best of mind from their college it is necessary to have a relationship with those alumni.</h6>
          </div>
          <br>
          <h2 style="text-align:center">Our Team</h2>
          <div class="our_team">
            <div class="team_member">
               <div class="member_img">
                 <img src="kirti.jpg" alt="our_team">
              </div>
              <h3 style="text-align: center;">Kirti Patil</h3>
              <span></span>
               <center><p>kirtipatil1203@gmail.com</p></center>
              <center><p><button class="button" >Contact</button></p></center>
          </div>
            <div class="team_member">
              <div class="member_img">
                 <img src="kadambari.jpg" alt="our_team">
              </div>
              <h3 style="text-align: center;">Kadambari Suryawanshi</h3>
              <span></span>
              <center><p>kadambarisuryawanshi68@gmail.com</p></center>
              <center><p><button class="button" >Contact</button></p></center>
            </div>
          
            <div class="team_member">
               <div class="member_img">
                 <img src="sakshi.jpg" alt="our_team">
              </div>
              <h3 style="text-align: center;">Sakshi Patil</h3>
              <span></span>
              <center><p>sakshirpatil236@gmail.com</p></center>
              <center><p><button class="button" >Contact</button></p></center>
          </div>
            <div class="team_member">
               <div class="member_img">
                 <img src="harshada.jpg" alt="our_team" style="height: 100%;">
              </div>
              <h3 style="text-align: center;">Harshada Dhakad </h3>
              <span></span>
              <center><p>harshada5dhakad@gmail.com</p></center>
              <p></p>
              <center><p><button class="button" >Contact</button></p></center>
          </div>  
          </div>
          </div>	
            <div class="container mt-3 pt-2">
                
                <?php
                $event = $conn->query("SELECT * FROM events where date_format(schedule,'%Y-%m%-d') >= '".date('Y-m-d')."' order by unix_timestamp(schedule) asc");
                while($row = $event->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['content']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card event-list" data-id="<?php echo $row['id'] ?>">
                     <div class='banner'>
                        <?php if(!empty($row['banner'])): ?>
                            <img src="admin/assets/uploads/<?php echo($row['banner']) ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="row  align-items-center justify-content-center text-center h-100">
                            <div class="">
                                <h3><b class="filter-txt"><?php echo ucwords($row['title']) ?></b></h3>
                                <div><small><p><b><i class="fa fa-calendar"></i> <?php echo date("F d, Y h:i A",strtotime($row['schedule'])) ?></b></p></small></div>
                                <hr>
                                <larger class="truncate filter-txt"><?php echo strip_tags($desc) ?></larger>
                                <br>
                                <hr class="divider"  style="max-width: calc(80%)">
                                <button class="btn btn-primary float-right read_more" data-id="<?php echo $row['id'] ?>">Read More</button>
                            </div>
                        </div>
                        

                    </div>
                </div>
                <br>
                <?php endwhile; ?>
                
            </div>


            <div id="preloader"></div>
        <footer class=" py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0 ">Contact us</h2>
                        <center><hr class="divider my-4" /></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="text-black"><?php echo $_SESSION['system']['contact'] ?></div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:<?php echo $_SESSION['system']['email'] ?>"><?php echo $_SESSION['system']['email'] ?></a>
                    </div>
                </div>
            </div>
            <br>
            <div class="container"><div class="small text-center text-muted">Copyright © 2023 - <?php echo $_SESSION['system']['name'] ?> | <a href="https://www.google.com" target="_blank">SVKM</a></div></div>
        </footer>



<script>
     $('.read_more').click(function(){
         location.href = "index.php?page=view_event&id="+$(this).attr('data-id')
     })
     $('.banner img').click(function(){
        viewer_modal($(this).attr('src'))
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.event-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>