<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class oil extends CI_Controller {

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
		 $this->load->template("oil/lists", $data);
	}


	public function lists($type="pre")
	{

		$data=array(
			'main_title'=>"pre sell",
			'sub_title'=>"pre sell sub title",
			'desc'=>"pre sell desc",
			'account_label'=>'sell to',
			'pre_date'=>'pre sell date',
			'pre_date_2'=>'pre sell give date',
			'stock_label'=>'from stock'
		);
		$data['oil_rows']=$this->oil_model->get_where(array('type' => $type));
		$this->load->template("oil/lists", $data);
	}

		public function presell()
		{


			$data = array(
				'main_title' => "pre sell",
				'sub_title' => "pre sell sub title",
				'desc' => "pre sell desc",
				'account_label' => 'sell to',
				'pre_date' => 'pre sell date',
				'pre_date_2' => 'pre sell give date',
				'stock_label' => 'from stock'
			);
			//mines from stock pre
			$data['stock_rows'] = $this->stock_model->get_where(array('type' => 'pre'));
			//$data['account_rows'] = $this->account->get_where(array('type' => 'customer'));
			$data['account_rows'] = $this->account->get();


			$data['main_title'] = "add stock";
			$data['sub_title'] = "add stock form ";
			$data['desc'] = "add stock decription";

			$this->form_validation->set_rules('f_date', null, 'required',
				array(
					'required' => 'You have not provided name in name field'
				)
			);
			$this->form_validation->set_rules('s_date', null, 'required',
				array(
					'required' => 'You have not provided name in name field'
				)
			);

			$this->form_validation->set_rules('amount', null, 'is_natural|required',
				array(
					'required' => 'You have not provided name in name field',
					'is_natural' => 'Please Use Just numberic charecters'
				)
			);

			$this->form_validation->set_rules('unit_price', null, 'is_natural|required',
				array(
					'required' => 'You have not provided name in name field',
					'is_natural' => 'Please Use Just numberic charecters'
				)
			);

			if ($this->form_validation->run() == false) {

				$data['signup_form'] = "active";
				$this->load->template("oil/pre_transaction_form", $data);
			} else {

				$stock_tramsaction = array(
					'f_date' => $this->db->escape_str($this->input->post('f_data')),
					's_date' => $this->db->escape_str($this->input->post('s_data')),
					'type' => $this->db->escape_str($this->input->post('type')),
					'account_id' => $this->db->escape_str($this->input->post('account_id')),
					'name' => $this->db->escape_str($this->input->post('name')),
					'unit_price' => $this->db->escape_str($this->input->post('unit_price')),
					//'car_count' => $this->db->escape_str($this->input->post('car_count')),
					//'money_type' => $this->db->escape_str($this->input->post('money_type')),
					'buy_sell' => "sell",
					'desc' => $this->db->escape_str($this->input->post('desc')),
					'amount' => $this->db->escape_str($this->input->post('amount')),
					'unit' => $this->db->escape_str($this->input->post('unit'))
				);

	
				$id = $this->oil_model->insert($stock_tramsaction); //reterive the inserted id

				$cash= $this->db->escape_str($this->input->post('unit_price')) *
					$this->db->escape_str($this->input->post('amount')) *
					$this->db->escape_str($this->input->post('car_count'));
				$cash_information = array(
					'st_id' => $id,
					'cash' =>$cash,
					'type' => $this->db->escape_str($this->input->post('money_type'))
				);

				$cash_id = $this->cash_model->insert($cash_information);
				$data['fu_page_title'] = "Login Form";
				echo $cash_id;
				//redirect('oil/presell/');
				// $this->profile($id); 
			}
		}

		public function prebuy()
	{
		//add to stock pre
		$data['stock_rows']=$this->stock_model->get_where(array('type' => 'pre'));
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
		 $this->load->template("oil/pre_transaction_form", $data);
	}


}