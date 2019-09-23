<!DOCTYPE html>
<html lang="en">
<head>
<title>Vinayak Overseas | Home</title>
<link rel="icon" href="images/logo.PNG" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/star-rating.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) 
	{
		$(".scroll").click(function(event)
		{		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	var i1 = 0;
        function changeIt1(x) {
            if (x > i1) {
                var p = x - i1;
                for (j = 1; j <= p; j++) {
                    my_div1.innerHTML = my_div1.innerHTML + " <input class='text' style='width:35%' type='number' min='1' max='10' placeholder='Age of child' name='mytext1" + i1 + "' id='mytext1" + i1 + "'> ";
                    i1++;
                }
            } else if (x < i1) {
                var p = i1 - x;
                var contentID;
                var a = i1;
                for ((k = (a - 1)); k >= x; k--) {
                    contentID = document.getElementById('my_div1');
                    contentID.removeChild(document.getElementById('mytext1' + k));
                    i1--;
                }
            }

        }

	/*$(document).ready(function() {
		setTimeout(function() {
  			$('#myModal').modal('show');
		}, 1000); // milliseconds
	});*/
</script> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
$(function () {

        $('#myForm1').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'mail_prac1.php',
            data: $('#myForm1').serialize(),
            success: function (data1) {
			  alert(data1);
              //alert('Your form has been submitted..Thank you');
            }
          });

        });

      });
      jQuery(document).ready(function () {
           

            $('.rb-rating').rating({
                
                'stars': '5',
                'min': '0',
                'max': '5',
                'step': '1',
                'size': 'xs',
                'starCaptions': { 1: 'One Star Hotel', 2: 'Two Star Hotel', 3: 'Three Star Hotel', 4: 'Four Star Hotel', 5: 'Five Star Hotel'}
            });		
        });
</script>

<style>
	.carousel-inner
	{
		width:100%;
		max-height: 850px !important;
	}
</style>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
    
	<div class="mybanner">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;margin-top:-70px;height:750px">
		
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="width:100%;">
            <div class="item active">
                <img src="images/8.jpg" alt="Oops!!" style="width:100%;height:800px;">
            </div>

            <div class="item">
                <img src="images/5.jpg" alt="Oops!!" style="width:100%;height:800px">
            </div>

            <div class="item">
                <img src="images/18.jpg" alt="Oops!!" style="width:100%;height:800px">
            </div>

            <div class="item">
                <img src="images/21.jpg" alt="Oops!!" style="width:100%;height:800px">
            </div>
            <div class="item">
                <img src="images/4.jpg" alt="Oops!!" style="width:100%;height:800px">
            </div>
            <div class="item">
                <img src="images/11.jpg" alt="Oops!!" style="width:100%;height:800px">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
		<div class="navbar navbar-fixed-top" style="background-color:rgba(138,196,139,.7)">
   			<div class="navbar-inner" style="background-color:transparent; z-index:5;">
            	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                	<img id="logo" style="z-index:10" class="center-block" src="images/logo.PNG" height="100px" />
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <b>
                    
                    <ul class="nav navbar-nav link-effect-4">

                        <li class="active"><a href="index.php" data-hover="Home">Home</a> </li>
                        <li><a href="about.php" data-hover="About">About Us</a> </li>
                        <li class="dropdown">
												<a href="#" class="dropdown-toggle" data-hover="Trip" data-toggle="dropdown">Trips <b class="caret"></b></a>
												<ul class="dropdown-menu">
													<li><a href="Domestic_gallery.php">Domestic</a></li>
													<li><a href="International_gallery.php">International</a></li>
												</ul>
										  </li>
                        <li><a href="contact.php" data-hover="Contact">Contact Us</a></li>
                        
                    </ul>
                    
                    </b>
                	</div>
                		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                </div>
   			</div>
		</div>

		<div class="navbar navbar-fixed-bottom">
   			<div class="navbar-inner" style="background-color:transparent; z-index:5;">

   				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                	
                </div>

            	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center;">
                	<span><button class="btn btn-lg btn-success responsive-width" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-comment"></i></button> </span>
                </div>
                
   			</div>
		</div>
    </div>
</div>

	<div class="welcome" id="welcome">
		<div class="container">
			<div class="w3-welcome-heading" style="padding-top:50px;">
				<h2>Welcome</h2>
			</div>
			<div class="w3l-welcome-info">
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/27.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/23.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p>Another reason to explore the world. Have international tours on your mind but this year, sort through the best beaches in the world
				 to kick back and relax. Here are the top beaches & Destinations  that will leave you surprised and satisfied with amazing coastal beauty. </p>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div id="services" class="services">
		<div class="container">  
			<div class="w3-welcome-heading">
				<h3>Our Services</h3>
			</div>
			<div class="services-w3ls-row">
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-briefcase effect-1" aria-hidden="true"></span>
					<h5>International & Domestic Hotel Booking</h5>
					<p>Book the bestest property in good deals and enjoy your stay lavishly</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
					<h5>International & Domestic Tours</h5>
					<p>Customise your trip with your choices of destinations and hotels with amazing amenities</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-w3layouts">
					<span class="glyphicon glyphicon-plane effect-1" aria-hidden="true"></span>
					<h5>International & Domestic Air tickets</h5>
					<p>Lucky You as You are reading this as our Customrer and book your tickets with lowest prices</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 services-grid">
					<span class="glyphicon glyphicon-education effect-1" aria-hidden="true"></span>
					<h5>Student & Visitor Visa</h5>
					<p>Get Visitor Visa of Selected countries with us as We have helped our customers with best services of Visitors Visa.</p>
				</div> 
				<div class="clearfix"> </div>
			</div>  
		</div>
	</div>
	<!-- //services -->
	<!-- feedback -->
	<div class="feedback_dot">
		<div class="jarallax feedback">
			<div class="container">
				<div class="w3-welcome-heading">
					<h3>Feedback</h3>
				</div>
				<div class="agileits-feedback-grids">
					<div id="owl-demo" class="owl-carousel owl-theme">
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
                                <p>Vinayak Overseas :) you can count me in as one of your most satisfied customers. This firm has been making my travel arrangements for over a decade now. Being a globe trotter, I can firmly assert that what ever the leisure trips I have taken up till now, my each and every small detail has been catered by this firm. My unique needs especially time constraints, budget accommodation, personal likes and dislikes every thing has been taken into consideration minutely.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Dr.Roopal Patel.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Dr. Roopal Patel</h5>
										<p>Mumbai</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>I have witnessed  the  growth  of  vinayak  overseas  in  last  12 years. It is  very  economical in real  sense. You  will get best  guidance  as well  as  services .once  you  fly  from  vinayak  u would  like  to  travel  again  n again  with  them</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Dimpy Gupta.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Dimpy Gupta</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>A company’s only continuing resolution should be to deliver better customer service. So is the sole motto of Vinakyak Overseas. And when it comes to travel you really need the best serives. Going above and beyond, making customers “feel special” and  helping them out even when it may not make sense. Being a satisfied customer I only refer Vinayak Overseas for your travel bookings.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Akshita gala.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Akshita Gala</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>Vinayak Overseas is not only travel planner they are family tour consultant. Mr Urjit owner of Vinayak is having deep knowledge of his field.  He can plan tour or vacation according to our convenience according to our budget. I strongly recommend to visit Vinayak one time must I am sure you will definitely habitual with Vinayak for sure.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Pratik shah.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Pratik Shah</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>Vinayak Overseas is well known for very well organising national and international tours. Mr. Urjit is very pleasant nature fellow. He handles his clients with respect and. He looks after even the small details. He covers every major and minor "MUST SEE" places and all these very reasonable price.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Chitrang Shah.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Chitrang shah</h5>
										<p>-Chairman- Team animation</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>I have been associated with vinayak overseas for a decade now..They are thoroughly professional in their approach and are an excellent one stop solution for your travelling, packaging and ticketing needs...</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Bhaumik Sanghvi.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Bhaumik Sanghvi</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>It is every daughter's wish to show and experience the world outside India. I had that wish as well , Vinayak overseas not only helped me to get visa for my parents but also for my sister. I can not thank enough for what it has done for me . I had no idea how the process goes , Urjit went with me step by step and did everything starting from visa to  to travel insurance to booking tickets .For me it is truly an angel who made my dream come true.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Khyati Rao.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Khyati Rao</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>Vinayak Overseas is an excellent travel partner for us, they considered our unique needs and planed our itinerary. Every suggestion they made was excellent, as they considered our budget, time, constraints, and personal likes and dislikes. I would definitely plan our each and every trip with them as they made our trip easy and stress free.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Sanjay Chopra.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Sanjay chopra</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>It an immense pleasure and joy to be customer of such Travel Agency. Vinayak overseas never lets you to dissatisfaction and Mr Urjit Rao is always available for 24*7 for his rendered services. I am highly satisfied with all my bookings and travelling till date whichever I have done with Vinayak Overseas. </p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Harsh Shah.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Harsh Shah</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
                        <div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>I was in Italy for a vacation and I had to make an emergency journey back home due to personal reasons. It was the time of Patel Aandolan in Ahmedabad and Internet services were off. Yet, I established contact with Urjit Bhai at 4 Am Indian time and he promptly without any delay booked a ticket for me and my wife due to which I was able to come back home.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Rovin Desai.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Rovin Desai</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>Vinayak Overseas is the most esteemed visa consultancy across Gujarat. Our goal is to become customer centric organisation that is not just the best but legendary.Their secret of success is their highly experienced Mentor Mr.Urjit Rao, who is the founder of our frontier and with exemplary track record in applying for family and individual visitor visas under various categories and their by enabled thousands of visa applicants to make their dream come true.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Bhagirath Rao.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Bhagirath Rao</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>I had traveled to Dubai along with family and friends family during Mar 2016 through Vinayak Overseas. I normally explore different online travel portals and some well known local travel agents before finalizing my travel. I must say that Vinayak Overseas offered us the best value for money package with no hidden costs for our tour covering most of the famous landmarks of Dubai. We were also very impressed with the frank and honest consulting provided to finalize our travel plan and itinerary. Would strongly recommend all to consult them once before finalizing your travel plans!</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Anand Barot.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Anand Barot</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
						<div class="item">
							<div class="feedback-info">
								<div class="feedback-top">
									<p>Being a Gujarati vacation means a lot And when it comes to any vacation the only eco which comes from my family is "vinayak overseas"Affordable and the most reliable services is offered to us that we just have to keep our brains aside and walk through the path which is suggested by Urjit rao.. And i am damn sure no one would ever regret it anytime! Thanks a zillion for making our national as well as international vacations so so so awesome, exciting and thrilling.</p>
								</div>
								<div class="feedback-grids">
									<div class="feedback-img">
										<img class="img img-circle" src="images/Krupa Bhrambhatt.jpg" alt="" />
									</div>
									<div class="feedback-img-info">
										<h5>Krupa Brahmbhatt</h5>
										<p></p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer" style="background-color:rgb(138,196,139)">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Business Hours : </h4>
						<font color="white">
						<table height=100px class="table table-responsive">
							<tr>
								<td>Monday-Friday</td>
								<td>:</td>
								<td>10AM to 7PM</td>
							</tr>
							<tr>
								<td>Saturday</td>
								<td>:</td>
								<td>10AM to 5PM</td>
							</tr>
							<tr>
								<td>Sunday</td>
								<td>:</td>
								<td>Closed</td>
							</tr>
						</table>
						</font>
					
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Get Connected with us : </h4>
					<font color="white">
						<table class="table table-responsive">
							<tr>
								<td><a href="https://www.facebook.com/VinayakOverseas"><img class="img img-circle" src="images/facebook.png" class="img img-responsive img-circle" height="40px" width="40px"></a></td>
								<td><span title="+919825814015"><img class="img img-circle" src="images/whatsapp.png" class="img img-responsive" height="40px" width="40px"></span></td>
							</tr>
							
						</table>
						</font>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>Popular Items</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/International/20.jpg"><img src="images/International/20.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/International/9.jpg"><img src="images/International/9.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/International/4.jpg"><img src="images/International/4.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/International/38.jpg"><img src="images/International/38.jpg" alt="" height="30%"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/Domestic/2.jpg"><img src="images/Domestic/2.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/Domestic/6.jpg"><img src="images/Domestic/6.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/Domestic/14.jpg"><img src="images/Domestic/14.jpg" alt="" height="30%"></a>
						</div>
						<div class="popular-grid">
							<a class='example-image-link'  data-lightbox='example-set' href="images/Domestic/16.jpg"><img src="images/Domestic/16.jpg" alt="" height="30%"></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	</div>
	<!-- //footer -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script src="js/owl.carousel.js"></script>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Leave us a message</h4>
      </div>
      <div class="modal-body">
        <div class="agileinfo-contact-form-grid">
			<form method="post" id="myForm1">
							<input type="text" name="Name1" class="text" placeholder="Name" required>
							<input type="email" name="Email1" class="text" placeholder="Email" required>
							<input type="text" name="Telephone1" class="text" placeholder="Telephone" required>
							<textarea name="Message1" class="text" placeholder="Message" required></textarea>
							<input type="text" class="text" name="Place1" placeholder="Place" required>
            				<div class='input-group date' id='datetimepicker61'>
                				<input type='text' class="form-control" placeholder="Select your check in date" name="CheckIn1" required>
                				<span class="input-group-addon">
                    				<span class="glyphicon glyphicon-calendar"></span>
                				</span>
            				</div>
        
            				<div class='input-group date' id='datetimepicker71'>
                				<input type='text' class="form-control" name="CheckOut1" placeholder="Select your check out date" required>
                				<span class="input-group-addon">
                    				<span class="glyphicon glyphicon-calendar"></span>
                				</span>
            				</div>
       
							<input type="number" class="text" name="Adults1" min="0" placeholder="No. of Adults">
							<input type="number" class="text" name="Child1" min="0" placeholder="No. of Child" onChange="changeIt1(this.value)">
                            <div id="my_div1"></div>
							<input type="number" class="text" name="Rooms1" min="0" placeholder="No. of Rooms">
							<font color="#666666">Hotel Category : </font><input required class="rb-rating" type="text" value="" title="" name="Category1">
							<!-- <input type="text" name="Category" placeholder="Category"> -->
							<input type="submit" class="btn1" id="submitButton1" value="Submit"/>
						</form>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
	
$(document).ready(function() {
		
        $(function () {

            $('#datetimepicker61').datetimepicker({
                format:'DD-MM-YYYY'
                //minTime:'11:00'
            });
            $('#datetimepicker71').datetimepicker({
                format:'DD-MM-YYYY',
                useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker61").on("dp.change", function (e) {
                $('#datetimepicker71').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker71").on("dp.change", function (e) {
                $('#datetimepicker61').data("DateTimePicker").maxDate(e.date);
            });
        });
    });
</script>
</script>
</body>	
</html>