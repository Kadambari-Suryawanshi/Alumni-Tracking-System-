 <!-- Masthead
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                    	 <h1 class="text-uppercase text-white font-weight-bold">About Us</h1>
                        <hr class="divider my-4" />
                    </div>
                    
                </div>
            </div>
        </header>

        

    <section class="page-section">
        <div class="container">
    <?php echo html_entity_decode($_SESSION['system']['about_content']) ?>        
            
        </div>
        </section>-->

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
            </style>
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