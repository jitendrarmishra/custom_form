<?php
/**
/* Template Name: Request Page 
*
*
*	@package WordPress
*/
get_header(); ?>
<?php
if (!empty($_POST)) {
	global $wpdb;
	$table = wp_request;
	$data = array(
		'Name'    => $_POST['your-name'],
		'Email'    => $_POST['your-email'],
		'Service'    => $_POST['Service'],
		'Date'    => $_POST['date'],
		'Address'    => $_POST['address'],
		'Phone'    => $_POST['tel'],
		'Message'    => $_POST['your-message']
	);
	$format = array(
		'%s','%s','%s','%s','%s','%s','%s'
	);
	$success=$wpdb->insert( $table, $data, $format );
	if($success){
		echo '<h3>Your request successfully sent</h3>' ; 
	}
}
else   { ?>
	<section id="primary" class="content-area formcon">
	<main id="main" class="site-main">
		<form method="post">
			<p><label> Your Name<br />
				<input type="text" name="your-name" required="" value="" size="40" /></label></p>
				<p><label> Your Email<br />
					<input type="email" name="your-email" required value="" size="40"/></label></p>
					<p><label> Select Service<br />
						<select name="Service" required>
							<option value="Website">Website</option>
							<option value="SEO">SEO</option>
							<option value="SMM">SMM</option>
						</select>
					</label></p>
					<p><label> Date <br />
						<input type="date" name="date" required value="" placeholder="Select Date" /></label></p>
						
							<p><label> Your Phone Number<br />
								<input type="tel" required name="tel" value="" size="40" placeholder="Mobile Number" /></label></p>
								<p><label> Your Address<br />
							<textarea name="address" required cols="2" rows="2"></textarea></label></p>
								<p><label> Your Message <br />
									<textarea required name="your-message" cols="2" rows="2" ></textarea></label></p>

									<p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
								</form>

							</main><!-- .site-main -->
						</div><!-- .content-area -->
					</section>
					<?php }  ?>
					<?php get_footer(); ?>