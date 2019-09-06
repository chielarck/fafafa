<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	public function index()
	{
		$d['app'] = $this->uri->segment(1).'/';
		$this->load->view('top',$d);
		$this->load->view('menu');
		$this->load->view('dashboard/dashboard');
		$this->load->view('bottom');
	}
}
