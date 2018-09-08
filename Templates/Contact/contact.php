<?php ?>

<div id="contact-section" class="preload-hide">

	<form id="contact-form">
		<div class="form-container">
			<div class="row">
	 			<div class="col-sm-12">
	 				<h4 class="content-title">Call 508-966-8439 or fill out the form below for all inquiries.</h4>
	 				
	 				<div class="alert alert-success hidden" id="contact-submit-message">
					  <strong>Thank you for your request.</strong><br>It is being reviewed by our staff and we will get back to you shortly.
					</div>
	 				
	 				<div class="form-group">
 					    <label for="contact-form-firstName" class="contact-form-label">First Name</label>
    					<input type="text" class="form-control" name="firstName" id="contact-form-firstName">
	 				</div>
	 				<div class="form-group">
 					    <label for="contact-form-lastName" class="contact-form-label">Last Name</label>
    					<input type="text" class="form-control" name="lastName" id="contact-form-lastName">
	 				</div>
	 				<div class="form-group">
 					    <label for="contact-form-email" class="contact-form-label">Email</label>
    					<input type="email" class="form-control" name="email" id="contact-form-email">
	 				</div>
	 				<div class="form-group">
 					    <label for="contact-form-phoneNumber" class="contact-form-label">Phone Number</label>
    					<input type="tel" class="form-control" name="phone" id="contact-form-phoneNumber">
	 				</div>	 				

	 				<div class="form-group">
 					    <label for="contact-form-serviceType" class="contact-form-label">Type of Inquiry</label>
 					    <br>						
 					    <label class="service-item">Rides
						  <input type="radio" name="type" value="rides" checked>
						  <span class="checkmark"></span>
						</label>
						
						<label class="service-item">Tours
						  <input type="radio" name="type" value="tours">
						  <span class="checkmark"></span>
						</label>
						
					    <label class="service-item">Events
						  <input type="radio" name="type" value="events">
						  <span class="checkmark"></span>
						</label>
						
						<label class="service-item">Advertising
						  <input type="radio" name="type" value="advertising">
						  <span class="checkmark"></span>
						</label>
						
						<label class="service-item">General
						  <input type="radio" name="type" value="general">
						  <span class="checkmark"></span>
						</label>
	 				</div>
	 				
	 				<div class="rides_questions">
    	 				<div class="form-group">
     					    <label for="contact-form-serviceDate" class="contact-form-label">Date of Service Requested</label>
        					<input class="form-control datepicker" name="serviceDate" id="contact-form-serviceDate">
    	 				</div>
	 				</div>
	 				
	 				<div class="hidden event_questions">
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">Event Location</label>
	    					<input type="text" class="form-control" name="eventLocation" id="contact-form-serviceDate">
		 				</div>
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">Start Time</label>
	    					<input type="time" class="form-control" name="eventStartTime" id="contact-form-serviceDate">
		 				</div>
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">End Time</label>
	    					<input type="time" class="form-control" name="eventEndTime" id="contact-form-serviceDate">
		 				</div>
	 				</div>
	 				
	 				<div class="hidden advertise_questions">
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">Business / Organization Name</label>
	    					<input type="text" class="form-control" name="orgName" id="contact-form-serviceDate">
		 				</div>
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">When do you want to run your ad?</label>
                            <div class="input-group input-daterange">
                                <input type="text" name="advStart" class="form-control">
                                <div class="input-group-addon">to</div>
                                <input type="text" name="advEnd" class="form-control">
                            </div>
		 				</div>
		 				<div class="form-group">
	 					    <label for="contact-form-serviceDate" class="contact-form-label">Advertising Type</label>
	    					<select type="time" class="form-control" name="advType" id="contact-form-serviceDate">
	    						<option value="digital">Digital Ad</option>
	    						<option value="print">Print Ad</option>
	    						<option value="both">Both</option>
	    					</select>
		 				</div>
	 				</div>
	 				
	 				<div class="form-group">
 					    <label for="contact-form-serviceDate" class="contact-form-label">A brief description of your needs.</label>
    					<textarea type="text" class="form-control" name="message" id="contact-form-serviceDate"></textarea>
	 				</div>
	 			</div>
	 			<div class="col-sm-12">
					<a href="#" type="submit" class="theme-btn-cta-secondary" id="contact-form-submit">Submit</a>
				</div>  
			</div>
		</div>	
	</form>			 			 			
	
</div>