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
			$data['account_rows'] = $this->account->get_where(array('type' => 'customer'));


			$data['main_title'] = "add stock";
			$data['sub_title'] = "add stock form ";
			$data['desc'] = "add stock decription";

			$this->form_validation->set_rules('name', null, 'alpha_numeric_spaces|required',
				array(
					'required' => 'You have not provided name in name field',
					'alpha_numeric_spaces' => 'please insert just alghabatic charecters'
				)
			);
			$this->form_validation->set_rules('province', null, 'alpha_numeric_spaces|required',
				array(
					'required' => 'You have not provided name in name field',
					'alpha_numeric_spaces' => 'please insert just alghabatic charecters'
				)
			);

			$this->form_validation->set_rules('phone', null, 'is_natural|required|regex_match[/^[0-9]{10}$/]',
				array(
					'required' => 'You have not provided name in name field',
					'is_natural' => 'Please Use Just numberic charecters'
				)
			);

			if ($this->form_validation->run() == false) {

				$data['signup_form'] = "active";
				$this->load->template("oil/pre_transaction_form", $data);
			} else {

				$cantact_info = array(
					'name' => $this->db->escape_str($this->input->post('name')),
					'province' => $this->db->escape_str($this->input->post('province')),
					'phone' => $this->db->escape_str($this->input->post('phone')),
					'address' => $this->db->escape_str($this->input->post('address')),
					'desc' => $this->db->escape_str($this->input->post('desc'))
				);

				$id = $this->stock_model->insert($cantact_info);

				$data['fu_page_title'] = "Login Form";
				redirect('oil/list/');
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