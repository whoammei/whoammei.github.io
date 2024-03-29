<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Resume detail</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.html">Home</a>
            <ul>
              <li><a href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Position</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a class="active" href="resume-detail.html">Resume detail</a></li>
              <li><a href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <img src="assets/img/avatar.jpg" alt="">
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
              <h1>John Doe</h1>
              <h3>Front-end developer</h3>
            </div>
            <hr>
<form action="?" method="post">
	<script src="https://authedmine.com/lib/captcha.min.js" async></script>
	<script>
		function myCaptchaCallback(token) {
			alert('Hashes reached. Token is: ' + token);
		}
	</script>
	<div class="coinhive-captcha" 
		data-hashes="256" 
		data-key="HsGsLZJp1DIurCtld28UoqtZsHyE4KWC"
		data-whitelabel="false"
		data-disable-elements="input[type=submit]"
		data-callback="myCaptchaCallback"
	>
		<em>Loading Captcha...<br>
		If it doesn't load, please disable Adblock!</em>
	</div>
<?php	
	$post_data = [
	'secret' => "2tUEitTaXsueVNqYGoJVF2KYz9tuJfWC", // <- Your secret key
	'token' => $_POST['coinhive-captcha-token'],
	'hashes' => 256
];

$post_context = stream_context_create([
	'http' => [
		'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		'method'  => 'POST',
		'content' => http_build_query($post_data)
	]
]);

$url = 'https://api.coinhive.com/token/verify';
$response = json_decode(file_get_contents($url, false, $post_context));

if ($response && $response->success) {
	echo "All GOOD!!";
}
?>
	<!-- submit button will be automatically disabled and later enabled
		again when the captcha is solved -->
	<input type="submit" value="Submit"/>
</form>
            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                <span>Mountain view, CA</span>
              </li>

              <li>
                <i class="fa fa-globe"></i>
                <a href="#">mywebsite.me</a>
              </li>

              <li>
                <i class="fa fa-money"></i>
                <span>$85 / hour</span>
              </li>

              <li>
                <i class="fa fa-birthday-cake"></i>
                <span>27 years-old</span>
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span>(+1) 123 456 7890</span>
              </li>

              <li>
                <i class="fa fa-envelope"></i>
                <a href="#">hi@mywebsite.me</a>
              </li>
            </ul>

            <div class="tag-list">
              <span>HTML5</span>
              <span>CSS3</span>
              <span>Bootstrap</span>
              <span>ReactJS</span>
              <span>SASS / LESS</span>
              <span>Grunt / Gulp</span>
              <span>Wordpress</span>
            </div>
          </div>
        </div>

        <div class="button-group">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>

          <div class="action-buttons">
            <a class="btn btn-gray" href="#">Download CV</a>
            <a class="btn btn-success" href="#">Contact me</a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Education -->
      <section>
        <div class="container">

          <header class="section-header">
            <span>Latest degrees</span>
            <h2>Education</h2>
          </header>
          
          <div class="row">
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-mit.png" alt="">
                  <div class="hgroup">
                    <h4>Master <small>Computer Science</small></h4>
                    <h5>Massachusetts Institute of Technology</h5>
                  </div>
                  <h6 class="time">2012 - 2014</h6>
                </header>
                <div class="item-body">
                  <p>The Massachusetts Institute of Technology (MIT) is a private research university in Cambridge, Massachusetts. Founded in 1861 in response to the increasing industrialization of the United States, MIT adopted a European polytechnic university model and stressed laboratory instruction in applied science and engineering.</p>
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-berkeley.png" alt="">
                  <div class="hgroup">
                    <h4>Bachelor <small>Computer Science</small></h4>
                    <h5>University of California, Berkeley</h5>
                  </div>
                  <h6 class="time">2008 - 2012</h6>
                </header>
                <div class="item-body">
                  <p>The University of California, Berkeley is a public research university located in Berkeley, California. It is the flagship campus of the University of California system, one of three parts in the state's public higher education plan, which also includes the California State University system and the California Community Colleges System.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- END Education -->


      <!-- Work Experience -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Past positions</span>
            <h2>Work Experience</h2>
          </header>
          
          <div class="row">

            <!-- Work item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>Google</h4>
                    <h5>Senior front-end developer</h5>
                  </div>
                  <h6 class="time">Jan 2016 - Present</h6>
                </header>
                <div class="item-body">
                  <p>Responsibilities:</p>
                  <ul>
                    <li>Developed front-end for world-class online social viewing video and chat platform using xHTML, CSS, ActionScript 2-3, Javascript, and XML.</li>
                    <li>Developed built-in chat application into Flash video player in ActionScript 3.</li>
                    <li>Built and developed sites for ABC Family properties such as Gilmore Girls, The Middleman, Secret Life of an American Teenager, Greek, and Kyle XY. </li>
                    <li>Translate designs into responsive web interfaces </li>
                    <li>Collaboration with the graphic designer on the front-end aspect of development. </li>
                    <li>Cross-platform cross-browser development. </li>
                    <li>Some back-end development in collaboration with senior developer.</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Work item -->


            <!-- Work item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-facebook.png" alt="">
                  <div class="hgroup">
                    <h4>Facebook</h4>
                    <h5>Interface developer</h5>
                  </div>
                  <h6 class="time">Aug 2014 - Jan 2016</h6>
                </header>
                <div class="item-body">
                  <p>Responsibilities:</p>
                  <ul>
                    <li>Work as a part of a large team on a major corporate project</li>
                    <li>Responsible for all aspects of presentation layer development including developing templates using HTML, DHTML, Javascript, XML, and XSL.</li>
                    <li>Rapid-prototyping for usability studies and new business development.</li>
                    <li>Collaboration with the graphic designer on the front-end aspect of development.</li>
                    <li>Some back-end development in collaboration with senior developer.</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Work item -->


            <!-- Work item -->
            <div class="col-xs-12">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-envato.png" alt="">
                  <div class="hgroup">
                    <h4>Envato</h4>
                    <h5>Quality assurance engineer</h5>
                  </div>
                  <h6 class="time">Mar 2012 - Jun 2014</h6>
                </header>
                <div class="item-body">
                  <p>Responsibilities:</p>
                  <ul>
                    <li>Software testing in a Web Applications/Mobile environment.</li>
                    <li>Software Test Plans from Business Requirement Specifications for test engineering group.</li>
                    <li>Run production tests as part of software implementation; Create, deliver and support test plans for testing group to execute.</li>
                    <li>Software testing in a Web Applications environment.</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- END Work item -->


          </div>

        </div>
      </section>
      <!-- END Work Experience -->


      <!-- Skills -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Expertise Areas</span>
            <h2>Skills</h2>
          </header>
          
          <br>
          <ul class="skills cols-3">
            <li>
              <div>
                <span class="skill-name">HTML</span>
                <span class="skill-value">100%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 100%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">CSS</span>
                <span class="skill-value">95%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 95%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Javascript</span>
                <span class="skill-value">80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 80%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Photoshop</span>
                <span class="skill-value">60%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">ReactJS</span>
                <span class="skill-value">70%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 70%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Team work</span>
                <span class="skill-value">90%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 90%;"></div>
              </div>
            </li>
          </ul>

        </div>
      </section>
      <!-- END Skills -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved by <a href="http://themeforest.net/user/shamsoft">ShaMSofT</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
