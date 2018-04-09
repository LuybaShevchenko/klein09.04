<?php
return function ($request, $response, $service, $app) {
	$name= 'wolrd';
    $service->render('views/hello.php',['name'=>$name]);
};