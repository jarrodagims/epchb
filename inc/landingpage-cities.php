<?php

function gff_lp_cities() {
	if (is_page ('home')) { 
	echo '<h1>Sell a House Fast In El Paso, Texas</h1>';
	} elseif (is_page('216')) {
	echo '<h1>Sell a House Fast In Anthony, Texas</h1>';
		
		} elseif (is_page('230')) {
	echo '<h1>Sell a House Fast In El Chaparral, Texas</h1>';
		
		} elseif (is_page('232')) {
	echo '<h1>Sell a House Fast In Horizon City, Texas</h1>';
			
			} elseif (is_page('223')) {
	echo '<h1>Sell a House Fast In Canutillo, Texas</h1>';
			
			} elseif (is_page('244')) {
	echo '<h1>Sell a House Fast In Las Cruces, New Mexico</h1>';
			
			} elseif (is_page('236')) {
	echo '<h1>Sell a House Fast In San Elizario, Texas</h1>';
			
			} elseif (is_page('246')) {
	echo '<h1>Sell a House Fast In Santa Teresa, New Mexico</h1>';
			
			} elseif (is_page('238')) {
	echo '<h1>Sell a House Fast In Socorro, Texas</h1>';
			
			} elseif (is_page('242')) {
	echo '<h1>Sell a House Fast In Vinton, Texas</h1>';
			
			} elseif (is_page('228')) {
	echo '<h1>Sell a House Fast In Clint, Texas</h1>';
			
			} elseif (is_page('240')) {
	echo '<h1>Sell a House Fast In Sunland Park, Texas</h1>';
		}
	
	
	
}

add_shortcode ('elpcities','gff_lp_cities');