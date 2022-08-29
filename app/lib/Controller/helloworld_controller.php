<?php
namespace App\Controller;

class helloworld_controller
{
	function index() 
	{
		// Handle the input
		$name = e(@$_GET['name'])?: 'World';

		// Render the view
		require 'view/helloworld.php';
	}
}