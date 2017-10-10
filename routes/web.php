<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
	$data=array('nombre' => 'Herramientas Industriales, Herramientas neumaticas, Herramientas de alto torque',
		'Home' => 'current_page_item', 
		'Productos' => '', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('front',$data);
});
$app->get('/productos', function () use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('productos',$data);
});
$app->get('/herramientas', function () use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('productos',$data);
});
$app->get('/productos/herramientas-neumaticas', function () use ($app) {
	$data=array('nombre' => 'Productos',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('herramientas-neumaticas',$data);
});


$app->get('/servicios', function () use ($app) {
	$data=array('nombre' => 'Servicios',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => 'current_page_item',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('servicios',$data);
});

$app->get('/servicios/servicio-tecnico', function () use ($app) {
	$data=array('nombre' => 'Servicios',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => 'current_page_item',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('servicios',$data);
});

$app->get('/servicios/servicio-al-cliente', function () use ($app) {
	$data=array('nombre' => 'Servicio al Cliente',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => 'current_page_item',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('servicio-al-cliente',$data);
});
$app->get('/servicios/servicio-tecnico', function () use ($app) {
	$data=array('nombre' => 'Servicio técnico',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => 'current_page_item',
		'Quienes' => '',
		'Contacto' => ''
	);
    return $app->make('view')->make('servicio-tecnico',$data);
});
$app->get('/quienes-somos', function () use ($app) {
	$data=array('nombre' => 'Quienes Somos',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => '',
		'Quienes' => 'current_page_item',
		'Contacto' => ''
	);
    return $app->make('view')->make('quienes-somos',$data);
});
$app->get('/contacto/', function () use ($app) {
	$data=array('nombre' => 'Contacto',
		'Home' => '', 
		'Productos' => '', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => 'current_page_item',
		'contacto' =>1
	);


    return $app->make('view')->make('contacto',$data);
});




$app->post('/cotizacion', function () use ($app) {
   require 'cotizacion.php';
});


$app->get('productos/{cat}', function ($cat) use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return view('productosview', ['categoria' => $cat], $data);
   
});

$app->get('herramientas/{cat}', function ($cat) use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return view('productosview', ['categoria' => $cat], $data);
   
});

$app->get('producto/{producto}', function ( $producto) use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return view('producto',  ['producto' => $producto], $data);
   
});
$app->get('herramienta/{producto}', function ( $producto) use ($app) {
	$data=array('nombre' => 'Herramientas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
    return view('producto',  ['producto' => $producto], $data);
   
});
$app->post('/HacerPregunta', function () use ($app) {
    require 'send.php';
    
});

$app->get('/descargas', function () use ($app) {
	$data=array('nombre' => 'Descargas',
		'Home' => '', 
		'Productos' => 'current_page_item', 
		'Servicios' => '',
		'Quienes' => '',
		'Contacto' => ''
	);
	$cat='descargas';
	return view('descargas', ['categoria' => $cat], $data);

	

});


$app->get('test', function () { 
	require 'prueba.php';
  return 'Hello World'; 
});
$app->post('/Contacto', function () use ($app) {
    require 'contacto.php';
    
});