<?php
//files needed
require_once ('wp-config.php');
require_once ('wp-settings.php');
require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';

//set default time on load
date_default_timezone_set("America/El_Salvador");

use Twilio\Rest\Client;
global $wpdb;


if(isset($_POST['submit']))
{    

//MySql Data Register

	 $dt1=date('Y-m-d H:i:sa');
     $phone = $_POST['phone'];
     $message = $_POST['message'];
	 $table_name ='sqlstored';
     
	 $result= $wpdb-> insert($table_name, array(
		'datedTime' => $dt1,
		'toField' => $phone,
		'toMessage' => $message
	 ));

//Twilio API Call - Outgoing

	$client = new Client(TWILIO_SID, TWILIO_TOKEN);
	$client->messages->create(
    $phone,
    [
        'from' => TWILIO_NUM,
        'body' => $message,
    ]
);


}
?>
		


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Seedlet
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content', get_theme_mod( 'index_display_excerpt_or_full_post', 'full' ) );
			}

			// Numbered pagination.
			seedlet_the_posts_pagination();

		} 
		?>
			
			
		<!-- Starts Code -->


<!-- structure division -->
<div class="container text-center">
<div class="row align-items-start">

<!-- Left Side Form-->
<div class="formGroup col">
	<h1>
	Send Your Message:
	</h1>

	<div>
		<form action='' id='mainForm' method="post">
			<div class="toGroup">
				<label> Send to:</laber>
				<input type="tel" id="phone" name="phone" pattern="+[0-9]{3}[0-9]{4}[0-9]{4}" required>
			</div>
			<div class="messageGroup">
				<label> Message:</laber>
				<textarea type="text" id="message" name="message" required></textarea>
			</div>
			<div class="buttonGroup">
			<input type='submit' name ='submit' value='submit'>
			</div>
		</form>
	</div>
</div>

<!-- Right Side Table-->

<div class="sqlGroup col ">
	<h1>
	Table Updates:
	</h1>

	<div style="margin-top:2rem">
	<table style=" border: 1px solid black;
  border-collapse: collapse;">
	<tr>
	<th>Date / Time</th>
	<th>Sent To</th>
	<th>Message</th>
	</tr>
	<?php
	global $wpdb;
    $result = $wpdb->get_results ( "SELECT * FROM sqlstored" );
	foreach ( $result as $print ) {
	?>
	<tr>
	<td><?php echo $print->datedTime;?></td>
	<td><?php echo $print->toField;?></td>
	<td><?php echo $print->toMessage?></td>
	</tr>
	<?php
		}
	?>
	</table>

	</div>
</div>
			
	
			


		</main><!-- .site-main -->
	</section><!-- .content-area -->

