<?php
/*
Plugin Name: Gorramit
Plugin URI: 
Description: 
Author: Chelsea Otakan
Version: 1.0
Author URI: 
*/


$quotes = "I can kill you with my brain.
Oh God, oh God, we're all gonna die.
We are just too pretty for God to let us die.
Ha ha ha! Mine is an evil laugh! Now DIE!
Pain is scary.
We're still flying.
Oh, I get it! I'm good. Best thing for everybody. I'm right there with you.
Looked bigger when I couldn't see him.
I got stabbed! Right here!
Mal: How drunk was I last night? <br /> Jayne: I 'unno, I passed out.
I call it Vera.
";

// Here we split it into lines
$quotes = explode("\n", $quotes);
// And then randomly choose a line
$chosen = wptexturize( $quotes[ mt_rand(0, count($quotes) - 1) ] );

// This just echoes the chosen line, we'll position it later
function gorramit() {
	global $chosen;
	echo "<p id='gorram-quotes'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'gorramit');

// We need some CSS to position the paragraph
function gorramit_css() {
	echo "
	<style type='text/css'>
	#gorramit {
	}
	</style>
	";
}

add_action('admin_head', 'gorramit');

?>