<?php

$app->get('/citas', function() use($app) {

	$app->render('citas/show.twig');
});

$app->get('/citas/edit/:num', function($num) use($app) {

	$app->render('citas/edit.twig', [
		'num'	=> $num
	]);

});