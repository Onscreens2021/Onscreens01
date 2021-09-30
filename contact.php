<?php

include_once('header.php');

?>

<div class="container-fluid">


	<section class="contact_wrap">
		<div class="container">
			<div class="contact_heading">
				<h1>Contact us</h1>
			</div>
		</div>
	</section>
    
	<section class="contact_info">
	    <div class="container">
		    <div class="info_wrap">
				<h1>Enquiry Form</h1>
				<p>We invite you to make contact with our design studio to collaborate or <br>enquire about a project.</p>
			</div>
			<div class="contact_detail">
				<p>Phone: 0333 305 7652</p>
				<p>Email: info@hugoboo.com</p>
			</div>
			<div class="contact_form_container">
			   <div class="col-md-6 col-md-6 col-xs-12 contact_form_inner">
                  <form class="contact-form">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" placeholder="First name" name="name" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="surname" placeholder="Sur name" name="name" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->
					  
					   <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="surname" placeholder="Telephone number" name="name" class="form-control">
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="subject" name="subject" placeholder="Enquiry" class="form-control">
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

					
					<!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">

							<select class="form-control" id="exampleFormControlSelect1">
							  <option>Department of Enquiry</option>
							  <option>2</option>
							  <option>3</option>
							  <option>4</option>
							  <option>5</option>
							</select>
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->
					  
  
                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Enquiry"></textarea>
                              </div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="submit-btn-wrap">
                      <a class="btn btn-primary submit-btn">Submit</a>
                  </div>
                  <div id="status"></div>
              </div>
			</div>
		</div>
	</section>

<?php

include_once('footer.php');

?>
