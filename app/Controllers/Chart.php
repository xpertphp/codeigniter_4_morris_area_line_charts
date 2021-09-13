<?php 

namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Chart extends Controller
{
 
	public function __construct()
	{
		helper(['html','url']);
	}
		
	public function index() {
		return view('index');     
	}
 
}

?>