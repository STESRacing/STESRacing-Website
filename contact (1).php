<!DOCTYPE html>
<html>

<head>
	<title> Contact Us - Sphar Enterprises</title>
</head>

<?php include "header.php";?>
<iframe name="hiddenFrame" class="hide"></iframe>

<body>
	<div id="canvas">
<div id="box_wrapper">
<!-- template sections -->

<div class="section title-section bg-primary-3 wf-section">
   <div class="container text-center">
      <h1 class="text-white">Write to Us&nbsp;<br></h1>
      <div class="section-subtitle text-large">If you have suggestions, questions or just want to know more about us, please fill this form and we will get back to you soon.<br></div>
   </div>
   <a class="danish_anchor" id="contact"></a>
   <div class="decoration-container left-middle"></div>
   <div class="decoration-container right-middle"></div>
</div>
<div class="section no-space bg-primary-3 wf-section section_padding_bottom_100" style="padding-left:1vw;padding-right:1vw;">
	<div class="container container-narrow align-left">
		<div class="card">
			<div class="card-body">
				<div class="w-embed w-script">
					<!--[if lte IE 8]>
					<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
					<![endif]-->
					<form action="mail (1)" method="post">
									<div class="col-sm-6"><input class="form-input w-input" type="text"  style="height:45px; background-color:#f5f8fa;" name="Name" required="" placeholder="Name*" maxlength="50" minlength="1" onkeyup="this.value=this.value.replace(/[^\a-zA-Z ']+/,'')" oninvalid="this.setCustomValidity('Please Enter Your Name')" oninput="setCustomValidity('')"></div>
									<div class="col-sm-6"><input class="form-input w-input "  style="height:45px; background-color:#f5f8fa;" type="email" name="Email" required="" placeholder="you@yourcompany.com*" maxlength="320" minlength="1" oninvalid="this.setCustomValidity('Please Enter Your Email ID')" oninput="setCustomValidity('')"></div>
									<div class="col-sm-6"><input class="form-input w-input" type="text" style="height:45px; background-color:#f5f8fa;" name="PhNumber" required="" placeholder="Phone Number*" maxlength="50" minlength="1" onkeyup="this.value=this.value.replace(/[^\d+ ()-]+/,'')" oninvalid="this.setCustomValidity('Please Enter Your Phone Number')" oninput="setCustomValidity('')"></div>
									<div class="col-sm-12"><textarea class="form-input w-input" style="height:200px; border-width:2px;; background-color:#f5f8fa;" rows="14" name="Message" required="" placeholder="Message*" maxlength="300" minlength="1" oninvalid="this.setCustomValidity('Please Enter The Message You Wish To Convey')" oninput="setCustomValidity('')"></textarea></div>
									<div class="col-sm-12" style="text-align:center!important"><button class=" button-block button"  style="width:110px; text-transform: capitalize;" type="submit">submit</button></div>
								</form>  
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container container-narrow align-left" style="padding-top:100px; !important">
	<div class="w-embed w-script">
		<div data-aos="fade-up" data-aos-easing="linear"  data-aos-once="true" data-aos-duration="750" class="row">
			<div class="col-sm-12"><iframe allowfullscreen="" frameborder="0" width="100%" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30275.125877128263!2d73.74655779252495!3d18.465952152376527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc29584a2f5431f%3A0xe51afcd2be1260c5!2sSphar%20Enterprises!5e0!3m2!1sen!2sin!4v1605079387727!5m2!1sen!2sin" style="border-radius: 0.5rem;"></iframe></div>
		</div>
	</div>
</div>

<div class="section wf-section">
   <div class="container">
      <div data-w-id="aee5eb55-9970-9f2f-3118-9cf378644302" style="opacity: 1;" class="contact-methods-row">
         <div class="contact-method-item">
            <div class="text-small-caps contact-method-heading">email us</div>
            <a href="mailto:info@spharenterprises.com" class="text-large">info@spharenterprises.com</a>
         </div>
         <div class="contact-method-item">
            <div class="text-small-caps contact-method-heading">call anytime</div>
			<a href="tel:+918956872538" class="text-large">ELGi Sales : +91 - 89568 72538 </a> <br>
			<a href="tel:+918956872532" class="text-large">ELGi Service : +91 - 89568 72532 </a> <br>
			<a href="tel:+919960893934" class="text-large">Victaulic Sales : +91 - 99608 93934 </a>
         </div>
         <div class="contact-method-item">
            <div class="text-small-caps contact-method-heading">support</div>
            <a href="#contact" aria-current="page" class="text-large w--current">Leave a message</a>
         </div>
      </div>
   </div>
</div>
			
			
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!-- <script src="js/switcher.js"></script> -->
	<!-- Google Map Script -->
	<script type="text/javascript">
			function myMap() {
		var mapProp= {
		center:new google.maps.LatLng(51.508742,-0.120850),
		zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
	</script>
  <script type="text/javascript">
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
  </script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>

<?php include "footer.php";?>

<!-- Mirrored from webdesign-finder.com/html/electrix/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Nov 2020 07:38:18 GMT -->
</html>