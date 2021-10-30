<?php include_once('header.php'); ?>

    <!-- welcome section -->
    <div class="welcome-section">
      <div class="container">
        <div class="welcome-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <ul class="list-inline">
                <li><a href="#">Knowledge Center</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Upcoming Events</a></li>
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Member Log in</a></li>
                <li><a href="#"><div class="search"><!-- <i class="las la-search"></i> --></div></a></li>
              </ul>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-md-8 col-md-offset-2">
              <div class="text-area">
                <h3>Welcome to</h3>
                <img src="img/welcome-image.jpg" class="mt-15 logo mb-30">
                <p class="p-lg">A center for growth, knowledge and support for Ecotact stakeholders in the packaging and grain industry. A community of driven businesses that support each other and the world, and uplift the society with forums, events, sustainability drives and care</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /welcome section -->
    
    <div class="section-sm">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="title text-center mb-15">GALLERY</h2>
    			</div>
    		</div>
    		<div class="row">
    			<?php
            for ($i=1; $i <=9; $i++) { 
              ?>
              <div class="col-md-4">
                <a class="image-popup" href="https://via.placeholder.com/720x500" title="Gallery Image">
                  <div class="img-hover">
                    <img src="https://via.placeholder.com/360x300">
                    <div class="box-content">
                      <i class="las la-eye"></i>
                    </div>
                  </div>
                </a>
              </div>


              <!-- <a class="image-popup" href="assets/img/projects/project-1.jpg" title="Shampoo Promotes">
                <img src="assets/img/icons/full-screen.png" alt="icons" class="icons">
              </a> -->
              <!-- <div class="col-md-4">
                <div class="img-hover">
                  <img src="https://via.placeholder.com/360x300" class="img-responsive mb-30">
                  <div class="box-content">
                    <img src="http://markobrando.com/gafa/img/loupe.svg">
                  </div>
                </div>
              </div> -->
              <?php
            }
          ?>
    		</div>
    	</div>
    </div>

    <!-- <div class="mb-30">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="title text-center mb-15">Upcoming events</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2">
    				<div class="row">
    					<div class="col-md-12">
    						<ul class="list-unstyled events-list">
    							<li>
    								<a href="#">
    									<h3>SCA <span class="pull-right">12.09.2021</span></h3>
    								</a>
    							</li>
    							<li>
    								<a href="#">
    									<h3>Ecotact Connect <span class="pull-right">12.09.2021</span></h3>
    								</a>
    							</li>
    						</ul>
    					</div>
    					<div class="col-md-12 text-center">
    						<a href="#" class="btn btn-secondary">Register</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div> -->


<?php include_once('footer.php'); ?>