<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller 
{
    public function home()
	{
		$_SESSION['count1'] = 0;
		$this->load->view('admin/form/datatable');
	}
	public function search()
	{
		$this->load->view('admin/form/searchdatatable');
	}
	public function adddata()
	{
		$this->load->view('admin/form/adddata');
	}
	public function editdata()
	{
		$_SESSION['count'] = 0;
		$this->load->view('admin/form/editdata');
	}
}
