<?php include_once('header.php'); ?>
    <!-- welcome section -->
    <div class="welcome-section">
      <div class="container">
        <div class="welcome-content">
          <!-- <div class="row">
            <div class="col-md-12 text-center">
              <ul class="list-inline">
                <li><a href="#">Knowledge Center</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Upcoming Events</a></li>
                <li><a href="#">FAQ's</a></li>
                <li><a href="#">Member Log in</a></li>
                <li><a href="#"><div class="search"></div></a></li>
              </ul>
            </div>
          </div> -->
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



    
      <div class="section-sm" style="overflow: hidden;">
        <div class="container">
          <div class="row">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title text-center mb-15">BLOG</h2>
              </div>
            </div>
          </div>
          <div class="blog-area">
            <div class="row">
              <?php 
              for ($i=1; $i <=6 ; $i++) { 
              ?>
              <div class="col-md-6">
                <div class="blog-list">
                  <div class="blog-image" style="position:relative;">
                    <img src="https://via.placeholder.com/600x320" class="img-responsive">
                    <div class="user-dp" style="background-image: url('https://via.placeholder.com/600x320');">
                      
                    </div>
                  </div>
                  <h3>Select the best packaging solution for green coffee and food grains</h3>
                  <ul class="list-unstyled">
                    <li>Author: Alfrendo Cuchet</li>
                    <li>Thursday, August 26, 2021</li>
                  </ul>
                </div>
              </div>
              <?php
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    


    <!-- <div class="section-sm">
      <div class="container">
        <div class="row">
          <?php
          for ($i=1; $i <=6 ; $i++) { 
            ?>
            <div class="col-md-4 mt-30">
              <a href="blog-details.php">
                <div class="blog">
                  <img src="https://via.placeholder.com/360x360" class="mb-15">
                  <p><i class="las la-clock"></i> November 01, 2021</p>
                  <h2>How find low interest rate for home loan.</h2>
                </div>
              </a>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
    </div> -->



    <?php include_once('footer.php'); ?>