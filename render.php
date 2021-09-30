<?php
include_once('header.php');
include_once('connection.php');
?> 

    <section class="home_banner_bg">
		<div class="container-fluid">
			<div class="home-banner render_banner_bg">
				<div class="home-room-content">
					<h1 style="color:#fff;">Beautifully<br> Photorealistic</h1>
					<p style="color:#fff;">Hugo & Boo create beautiful photorealistic renders for architects, property developers,<br> real estate agents and top brands.
                Our architectural designers, creative director and<br> visualisers are here to provide a high quality service to our corporate clients. </p>
				</div>
			</div>
		</div>  
	</section>            
	
<div class="container-fluid"> 
	<section class="gallery render_gallery">
	    <div class="container">
		    <div class="col-md-12 col-sm-12 col-xs-12 gall_margin_bottom">
			    <div class="gallery_image_wrap">
				    <img src="images/gallery_page_img1.jpg" alt="gallery_page_img1">
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 gall_margin_bottom">
			    <div class="col-md-8 col-sm-8 col-xs-12 gall_left_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img2.jpg" alt="gallery_page_img2">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 gall_right_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img3.jpg" alt="gallery_page_img3">
					</div>
				</div> 
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 gall_margin_bottom">
			    <div class="col-md-4 col-sm-4 col-xs-12 gall_left_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img4.jpg" alt="gallery_page_img4">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img5.jpg" alt="gallery_page_img5">
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 gall_right_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img6.jpg" alt="gallery_page_img6">
					</div>
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 gall_margin_bottom">
			    <div class="col-md-6 col-sm-6 col-xs-12 gall_left_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img7.jpg" alt="gallery_page_img7">
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 gall_right_padding">
					<div class="gallery_image_wrap">
						<img src="images/gallery_page_img8.jpg" alt="gallery_page_img8">
					</div>
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12">
			    <div class="gallery_image_wrap">
				    <img src="images/gallery_page_img9.jpg" alt="gallery_page_img9">
				</div>
			</div>
			
		</div>
	</section>
	
	<section class="enquiry_wrap">
		<div class="contact_form_container cont_detail">
			<h1>Contact us today</h1>
			<p>Call us at: 0333 305 7652</p>
			<p>Email us: <span class="blue-test">info@hugoboo.com</span></p>
		</div>
	</section>

    <section class="enquiry_wrap">
		<div class="contact_form_container">
			<h1>Enquiries Form</h1>
			<p>We invite you to make contact with our design studio to collaborate<br>
			or enquire about a project.</p>
		<div class=" contact_form_inner inquiry_inner">
			<form class="contact-form enquery_form">
				<div class="row">
					<div class="col-md-12">
						<div class="md-form mb-0">
						    <input type="text" id="name" placeholder="First name" name="Your name" class="form-control">
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="md-form mb-0">
						     <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
						</div>
					</div>

					<div class="col-md-6">
						<div class="md-form mb-0">
							<input type="text" id="surname" placeholder="Telephone number" name="name" class="form-control">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="md-form">
						<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Enquiry"></textarea>
						</div>
					</div>
				</div>

				<div class="submit-btn-wrap">
				<a class="btn btn-primary submit-btn">Submit</a>
				</div>
			
			</form>


			<div id="status"></div>
			</div>
		</div>
    </section>

</div>







<?php
include_once('footer.php');

?>