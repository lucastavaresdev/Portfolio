<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Santo Sofá</title>
        <?php include("includes/head.php");?>
    </head>
    <body>
		<?php include("includes/header-menu.php") ?>
		<section class="destaques">  
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div id="main_area">
						    <!-- Slider -->
						    <div class="row">
						      <div class="col-xs-12" id="slider">
						        <!-- Top part of the slider -->
						        <div class="row">
						          <div class="col-md-12" id="carousel-bounding-box">
						            <div class="carousel slide" id="contentCarousel">
						              <!-- Carousel items -->
						              <div class="carousel-inner">
						                <div class="active item" data-slide-number="0">
						                  <img src="assets/img/tentacao/1.jpg" class="img-responsive center-block" alt="">
						              	</div>
						              	<div class="item" data-slide-number="0">
						                  <img src="assets/img/tentacao/2.jpg" class="img-responsive center-block" alt="">
						              	</div>					                
						              </div>
						            
						              <!-- Carousel nav -->
						              <a class="left carousel-control" href="#contentCarousel" role="button" data-slide="prev">
						                <span class="glyphicon glyphicon-chevron-left"></span>
						              </a>
						              <a class="right carousel-control" href="#contentCarousel" role="button" data-slide="next">
						                <span class="glyphicon glyphicon-chevron-right"></span>
						              </a>
						            </div>
						          </div>

						        </div>
						      </div>
						    </div>
						    <!--/Slider-->

						    <div class="row hidden-xs" id="slider-thumbs">
						      <!-- Bottom switcher of slider -->
						      <ul class="hide-bullets">
						        <li class="col-sm-2">
						          <a class="thumbnail" id="carousel-selector-0"><img src="assets/img/tentacao/1.jpg" class="img-responsive center-block" alt=""></a>
						        </li>

						        <li class="col-sm-2">
						          <a class="thumbnail" id="carousel-selector-1"><img src="assets/img/tentacao/2.jpg" class="img-responsive center-block" alt=""></a>
						        </li>					        
						      </ul>
						    </div>
						  </div>
					</div>
					<div class="col-md-5">
						<h1>Sofá Tentação</h1>
						<?php include("includes/btn-orcamento.php") ?>
						<p style="line-height:180%">
							Promoção<br>
							1,85m 12x R$139,00 no cartão<br>
							2,05m 12x R$149,00 no cartão<br>
							2,25m 12x R$159,00 no cartão<br>
							Retrátil com assento em molas<br>
							Pilow top<br>
							Várias opções de cores.<br>
						</p><br>

						<div class="table-responsive">
							<table class="table">
						        <tbody>
						        
						        </tbody>
						      </table>
					  		</div>
					</div>
			</div>
				</div>			  
		</section>
		<?php include("includes/footer-news.php");?>
		<?php include("includes/js.php");?>
    </body>
</html>