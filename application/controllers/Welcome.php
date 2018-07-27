<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('pancing');
	}
	function penjualan()
	{
		$this->load->view('penjualan');
	}
	function report()
	{
		$this->load->view('report');
	}
	function tes()
	{
		$this->load->view('penjualan1');
	}
	function tes1()
	{
		$this->load->view('report1');
	}

}
