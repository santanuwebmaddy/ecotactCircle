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
<!-- welcome section -->
<div class="section knowledge-section">
  <div class="container">
  	<div class="row">
  		<div class="col-md-12 text-center mb-10">
  			<h2 class="title">KNOWLEDGE CENTER</h2>
  		</div>
  	</div>
    <div class="knowledge-content mt-10">
      <div class="row">
        <div class="col-md-12">
          <div class="text-area user-question">
            <h2 class="user"><img src="https://via.placeholder.com/360x360"> Rupal Baid</h2>
            <form>
              <textarea class="form-control text-area content-div" id="style-3" name="" placeholder="What is brewing in your mind?"></textarea>
              <button type="submit" class="btn btn-secondary pull-right" style="padding:5px 20px;">Post</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <?php 
    for ($i=0; $i <8 ; $i++) { 
    ?>
    <a href="knowledge-center.php">
      <div class="knowledge-content mt-10">
        <div class="row">
          <div class="col-md-12">
            <div class="text-area user-question">
              <h2 class="eco-user">Robert Pattinson, Ecotact, India <span class="pull-right">April 2019</span></h2>
              <h3 class="eco-replay">My daughter (18) all of a sudden thinks she has mental health issues and wants to see a therapist. I don&#39;t believe her because she&#39;s never shown any symptoms. What should I do?</h3>
              <ul class="list-inline reaction mt-15">
                <li style="margin-right:5px;"><a href="#"><i class="las la-thumbs-up"></i><span>5k</span></a></li>
                <li><a href="#"><i class="las la-comment-alt"></i><span>100</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php
    }
    ?>
    <div class="pagination">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-inline">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- /welcome section -->
<?php include_once('footer.php'); ?>