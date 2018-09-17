<?php

function getRandomQuote(array $quotes){
	$rand_num = rand(0,count($quotes)-1);
	echo $quotes[$rand_num];
}