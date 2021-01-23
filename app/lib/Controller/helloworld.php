<?php
namespace App\Controller;

class HelloWorld
{
	function index() 
	{
		// Handle the input
		$name = e(@$_GET['name'])?: 'World';

		// Render the view
		require 'view/helloworld.php';
	}
}