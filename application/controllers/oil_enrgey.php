<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class oil_enrgey extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		 $data['title']="dashboard";
		 $this->load->template("oil_enrgey/lists", $data);
	}


	public function lists()
	{
		 $data['title']="dashboard";
		 $this->load->template("oil_enrgey/lists", $data);
	}

		public function presell()
	{
		
		//mines from stock pre
		$data['stock_rows']=$this->stock->get_where(array('type' => 'pre'));
		$data['account_rows']=$this->account->get_where(array('type' => 'customer'));
		$data['main_title']="pre sell";
		$data['sub_title']="pre sell";
		$data['desc']="pre sell";
		$data['account_label']="sell to";
		$data['presell']="presell";
		 $data['pre_date']="pre sell date";
		 $data['pre_date_2']="pre sell give date";
		 $data['stock_label']="from stack";
		 $this->load->template("oil_enrgey/pre_transaction_form", $data);
	}

		public function prebuy()
	{
		//add to stock pre
		$data['stock_rows']=$this->stock->get_where(array('type' => 'pre'));
		$data['account_rows']=$this->account->get_where(array('type' => 'seller'));
		$data['main_title']="pre buy";
		$data['sub_title']="pre buy";
		$data['desc']="pre buy";
		$data['account_label']="buy from";
		$data['desc']="pre sell";
		$data['presell']="prebuy";
		 $data['pre_date']="pre buy date";
		  $data['pre_date_2']="pre sell reveived date";
		 $data['stock_label']="to stack";
		 $this->load->template("oil_enrgey/pre_transaction_form", $data);
	}


}