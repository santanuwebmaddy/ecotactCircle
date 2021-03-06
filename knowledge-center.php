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
<div class="section-sm knowledge-section">
  <div class="container">
  	<div class="row">
  		<div class="col-md-12 text-center mb-10">
  			<h2 class="title">KNOWLEDGE CENTER</h2>
  		</div>
  	</div>
    
    <!--  -->
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
    <div class="knowledge-content add-comment">
      <div class="row">
        <div class="col-md-12">
          <div class="text-area comment-area">
            <form>
              <div class="row">
                <div class="col-md-10">
                  <textarea class="form-control text-area" name="" placeholder="Type Your Comment..."></textarea>
                </div>
                <div class="col-md-2">
                  <a href="#" class="btn btn-secondary mt-10">Add Comment</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    for ($i=1; $i <6 ; $i++) { 
    ?>
    <div class="knowledge-content user-replay">
      <div class="row">
        <div class="col-md-12">
          <div class="text-area user-question">
            <p>My Mom did the same to me. She would tell me and everyone around me that I was the
              easier child to raise because I didn&#39;t get in trouble at school and brought home good
              grades. But to be honest??? My dad was very emotional and verbally abusive while my Mom
              worked. He also was on drugs. On top of that, I got bullied every single day in high school.
              It was so bad, in 10th grade, I started to self harm. My school counselor threatened to put me
              in the ???crazy house???. My Mom found out and nothing was done. I was also sexually
              assaulted by a someone close???
            </p>
            <p><span>Robert Pattinson, Kabul</span> <span class="pull-right"><small>April 2019, 2021</small></span></p>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
    <!-- <div class="knowledge-content add-comment">
      <div class="row">
        <div class="col-md-12">
          <div class="text-area comment-area">
            <form>
              <div class="row">
                <div class="col-md-10">
                  <input type="" class="form-control" name="">
                </div>
                <div class="col-md-2">
                  <a href="#" class="btn btn-secondary mt-10">Add Comment</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->

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