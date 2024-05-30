<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurina Irdina Individual Assignment : Web Development</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style>
	p.meow{
    text-align: center;
    color: #fff;
    }
	
	.section-title{
    text-align: center;
	}
	
	.row {
	  display: flex;
	  flex-wrap: wrap;
	  padding: 0 4px;
	}

	/* Create four equal columns that sits next to each other */
	.column {
	  flex: 30%;
	  max-width: 25%;
	  padding: 0 4px;
	}

	.column img {
	  margin-top: 8px;
	  vertical-align: middle;
	  width: 100%;
	}

	/* Responsive layout - makes a two column-layout instead of four columns */
	@media screen and (max-width: 800px) {
	  .column {
		flex: 50%;
		max-width: 50%;
	  }
	}

	/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
	  .column {
		flex: 100%;
		max-width: 100%;
	  }
	}
	
	</style>
  </head>
  <body>

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
      <a href="#" class="brand">Rina</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="index.php">Home</a>
        <a href="myself.php">Myself</a>
        <a href="education.php">Education</a>
        <a href="passion.php">Passion</a>
        <a href="Photo_gallery.php">Photo Gallery</a>
        <a href="comment.php">Contact Me</a>
		<a href="calculator.php">BMI Calculator</a>
      </div>
    </header>
	
	<section class="photo" id="photo">
      <div class="title reveal">
        <h2 class="section-title">My Photo Gallery</h2>
		<p class="meow"> from left to right:
            <br>me as one of the crews Park Jeongwoo Cup Sleeve Event 1st October 2023
            <br>me at Stadium Malawati for Hello Tour in KL 11th March 2023
            <br>me at Bangi Golf Resort for High School Batch Reunion Dinner 2022
            <br>me at TGV Sunway Pyramid with Gojou Satoru for Jujutsu Kaisen 0 March 2022
            <br>me at TGV Sunway Pyramid with Okkotsu Yuta for Jujutsu Kaisen 0 March 2022
            <br>me at GCS MidValley MegaMall with Kuroo Tetsurou for HAIKYU!! THE DUMPSTER BATTLE 18th May 2024
        </p>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me as crew jeongwoo cse.png" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me hello tour in kl.png" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me royal dinner.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me with gojou satoru.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me with okkotsu yuta.jpg" alt="">
          </div>
        </div>
        <div class="card reveal">
          <div class="card-img">
            <img src="images/me with kuroo.jpg" alt="">
          </div>
        </div>
      </div>
	  <br><br>
	  <h2 class="section-title">My Collection</h2>
    
	  <div class="row">
		  
	  <div class="column">
		<img src="images/haikyuu.jpg">
		<img src="images/jjk rabbit.jpg">
		<img src="images/mytown.jpg">
		<img src="images/mytown buffet.jpg">
		<img src="images/wawan cse.jpg">
		<img src="images/woo ads.jpg">
	  </div>
	  <div class="column">
		<img src="images/woo digipack.jpg">
		<img src="images/woo hilang.jpg">
		<img src="images/woo in kl.jpg">
		<img src="images/woo japan.jpg">
		<img src="images/day.jpg">
	  </div>
	  <div class="column">
		<img src="images/woo kete.jpg">
		<img src="images/woo kipas.jpg">
		<img src="images/woo love.jpg">
		<img src="images/woo night garden.jpg">
		<img src="images/woo oren.jpg">
		<img src="images/me woo sopa.jpg">
	  </div>
	  <div class="column">
		<img src="images/woo singapore.jpg">
		<img src="images/woo sofa.jpg">
		<img src="images/woo spek.jpg">
		<img src="images/yuta podong matetsu.jpg">
		<img src="images/yuta.jpg">
	  </div>
	</div>
	<div class="title reveal">
    <a href="index.php" class="btn">Home</a>
    </div>
    </section>
	
	<footer class="footer">
      <span class="footer-title">Nurina Irdina</span>
      <p>Copyright @2024 <a href="index.php">nuna_winna</a></p>
    </footer>

    <script src="script.js" charset="utf-8"></script>
   </body>
</html>
	