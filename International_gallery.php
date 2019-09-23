<!DOCTYPE html>
<html lang="en">
<head>
<title>Vinayak Overseas | Contact us</title>
<link rel="icon" href="images/logo.PNG" type="image/png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<!-- //font -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="js/star-rating.js" type="text/javascript"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
<script language="javascript">

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

    </script>

<!-- light-box -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //light-box -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->

<!-- for random images -->
<script type="text/javascript">
  var array = ["images/International/1.jpg","images/International/2.jpg","images/International/3.jpg","images/International/4.jpg","images/International/5.jpg","images/International/6.jpg","images/International/7.jpg","images/International/8.jpg","images/International/9.jpg","images/International/10.jpg","images/International/11.jpg","images/International/12.jpg","images/International/13.jpg","images/International/14.jpg","images/International/15.jpg","images/International/16.jpg","images/International/17.jpg","images/International/18.jpg","images/International/19.jpg","images/International/20.jpg","images/International/21.jpg","images/International/22.jpg","images/International/23.jpg","images/International/24.jpg","images/International/25.jpg","images/International/26.jpg","images/International/27.jpg","images/International/28.jpg","images/International/29.jpg","images/International/30.jpg","images/International/31.jpg","images/International/32.jpg","images/International/33.jpg","images/International/34.jpg","images/International/35.jpg","images/International/36.jpg"];

function displayImage() {
  var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
	//alert(array[0]);
  return array;
}
</script>
</head>
<body>
	<!-- banner -->
	<div class="navbar" style="background-color:rgb(138,196,139);">
   			<div class="navbar-inner" style="background-color:rgb(138,196,139);">
            	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                	<img id="logo" style="z-index:10" class="center-block" src="images/logo.PNG" height="100px" />
                </div>
                
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <b>
                    
                    <ul class="nav navbar-nav link-effect-4">

                        <li><a href="index.php" data-hover="Home">Home</a> </li>
                        <li><a href="about.php" data-hover="About">About Us</a> </li>
                        <li class="dropdown" style="color:#000; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">
												<a href="#" class="dropdown-toggle" data-hover="Trip" data-toggle="dropdown" style="color:#000; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Trips <b class="caret"></b></a>
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
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery">
    <div class="container">
      <div class="gallery-grids">
        <div class="w3ls-gallery-grids">
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
               <script type="text/javascript">
			      var arr = displayImage();
                  document.write("<a class='example-image-link' href='"+arr[0]+"'  data-lightbox='example-set'> <img alt='"+arr[0]+"' src='"+arr[0]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
                  document.write("<a class='example-image-link' href='"+arr[1]+"'  data-lightbox='example-set'> <img alt='"+arr[1]+"' src='"+arr[1]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
                  document.write("<a class='example-image-link' href='"+arr[2]+"'  data-lightbox='example-set'> <img alt='"+arr[2]+"' src='"+arr[2]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[3]+"'  data-lightbox='example-set'> <img alt='"+arr[3]+"' src='"+arr[3]+"'></a>");
               </script>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="w3ls-gallery-grids agileits-gallery-grids">
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[4]+"'  data-lightbox='example-set'> <img alt='"+arr[4]+"' src='"+arr[4]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[5]+"'  data-lightbox='example-set'> <img alt='"+arr[5]+"' src='"+arr[5]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[6]+"'  data-lightbox='example-set'> <img alt='"+arr[6]+"' src='"+arr[6]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[7]+"'  data-lightbox='example-set'> <img alt='"+arr[7]+"' src='"+arr[7]+"'></a>");
               </script>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <div class="w3ls-gallery-grids">
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[8]+"'  data-lightbox='example-set'> <img alt='"+arr[8]+"' src='"+arr[8]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[9]+"'  data-lightbox='example-set'> <img alt='"+arr[9]+"' src='"+arr[9]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[10]+"'  data-lightbox='example-set'> <img alt='"+arr[10]+"' src='"+arr[10]+"'></a>");
               </script>
            </div>
          </div>
          <div class="col-md-3 gallery-grids-left-subr">
            <div class="gallery-grid">
              <script type="text/javascript">
			      document.write("<a class='example-image-link' href='"+arr[11]+"'  data-lightbox='example-set'> <img alt='"+arr[11]+"' src='"+arr[11]+"'></a>");
               </script>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
        <script src="js/lightbox-plus-jquery.min.js"> </script>
      </div>
    </div>
  </div>

	<!-- //gallery -->
	<!-- footer -->
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
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
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
</body>	
</html>