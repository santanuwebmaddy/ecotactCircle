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
          <div class="col-md-8">
            <div class="single-blog">
              <img src="https://via.placeholder.com/800x500" class="mb-15">
              <p><span><i class="las la-clock"></i> November 01, 2021</span></p>
              <div class="content mb-30">
                <h2>How find low interest rate for home loan.</h2>
                <p>Consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa.  </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12 mb-15">
                <h2 class="recent-post-title">RECENT POST</h2>
              </div>
              <?php
                for ($i=1; $i <=6 ; $i++) { 
                  ?>
                  <div class="col-md-12 mb-15">
                    <div class="media recent-post">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" src="https://via.placeholder.com/800x600" style="width:100px;" alt="...">
                        </a>
                      </div>
                      <div class="media-body">
                        <p><small><i class="las la-clock"></i> November 01, 2021</small></p>
                        <h4>How find low interest rate for home loan.</h4>
                      </div>
                    </div>
                  </div>

                  <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>



    <?php include_once('footer.php'); ?>