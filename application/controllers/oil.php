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


	public function lists($buy_sell="sell" ,$type="fact")
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

		$data['oil_rows']=$this->oil_model->get_where(array('type' => $type, 'buy_sell'=>$buy_sell));
		$this->load->template("oil/lists", $data);
	}

		public function pre_buy_sell($buy_sell="buy")
		{

			if($buy_sell=="buy") {
				$data = array(
					'main_title' => "pre buy",
					'sub_title' => "pre buy sub title",
					'desc' => "pre sell desc",
					'account_label' => 'buy from',
					'pre_date' => 'pre buy date',
					'pre_date_2' => 'pre buy give date',
					'stock_label' => 'to stock',
					'stock_disable' => 'enabled',
					'buy_sell' => 'buy',
					'transaction_type'=>'debit',
					'type'=>'seller'
				);
			}else if($buy_sell=="sell"){
				$data = array(
					'main_title' => "pre sell",
					'sub_title' => "pre sell sub title",
					'desc' => "pre sell desc",
					'account_label' => 'sell for',
					'pre_date' => 'pre sell date',
					'pre_date_2' => 'pre sell give date',
					'stock_label' => 'from stock',
					'stock_disable'=>'enabled',
					'buy_sell' => 'sell',
					'transaction_type'=>'credit',
					'type'=>'customer'
				);
			}

			//mines from stock pre
			$data['stock_rows'] = $this->stock_model->get_where(array('type'=>'pre'));
			//$data['account_rows'] = $this->account->get_where(array('type' => 'customer'));
			$data['account_rows'] = $this->account_model->get_where(array('type'=>$data['type']));

			$data['balance_rows'] = $this->balance_model->get_where(array('type'=>'pre'));


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

				$car_count=$this->input->post('car_count');
				if(empty($car_count)){

					$amount = $this->db->escape_str($this->input->post('amount'));
					$cash = $this->input->post('unit_price') *
						$this->input->post('amount');
					} else {
					$amount = $this->input->post('amount')* $this->input->post('car_count');
					$cash = $this->input->post('unit_price') *
						$this->input->post('amount') *
						$this->input->post('car_count');
				}

				$stock_tramsaction = array(
					'f_date' => $this->input->post('f_date'),
					's_date' => $this->db->escape_str($this->input->post('s_date')),
					'type' => "pre",
					'buyer_seller_id' => $this->db->escape_str($this->input->post('account_id')),
					'name' => $this->db->escape_str($this->input->post('oil_type')),
					'unit_price' => $this->db->escape_str($this->input->post('unit_price')),
					'stock_id' => $this->input->post('stock_id'),
					'car_count' => $this->db->escape_str($this->input->post('car_count')),
					'buy_sell' => $data['buy_sell'],
					'desc' => $this->db->escape_str($this->input->post('desc')),
					'amount' => $amount,
					'unit' => $this->db->escape_str($this->input->post('unit'))
				);

				$id = $this->oil_model->insert($stock_tramsaction); //reterive the inserted id



				$cash_information = array(
					'cash' =>$cash,
					'type' => $this->db->escape_str($this->input->post('money_type')),
					'transaction_type' =>$data['transaction_type'],
					'table_id'=>$id,
					'account_id'=>$this->db->escape_str($this->input->post('account_id')),
					'table_name'=>'stock_transaction'

				);

				$cash_id = $this->cash_model->insert($cash_information);
				$data['fu_page_title'] = "Login Form";
				//echo $cash_id;
				redirect('oil/pre_buy_sell/'.$data['buy_sell']);
				// $this->profile($id); 
			}
		}

	public function pre_buy_sell_balance(){
		$this->oil_model->get_balance(array('type'=>'pre', 'buy_sell'=>'buy'));
	}
public function buy($template="template" , $popupp_pre_buy_sell_id=""){

	$data = array(
		'main_title' => "pre sell",
		'sub_title' => "pre sell sub title",
		'desc' => "pre sell desc",
		'account_label' => 'sell from',
		'pre_date' => 'pre sell date',
		'pre_date_2' => 'pre sell give date',
		'stock_label' => 'from stock',
		'stock_disable'=>'enabled',
		'buy_sell' => 'sell',
		'transaction_type'=>'credit',
		'type'=>'customer',
		'popupp_pre_buy_sell_id'=>$popupp_pre_buy_sell_id
	);

	$this->form_validation->set_rules('pre_buy_sell_id', null, 'required',
		array(
			'required' => 'You have not provided name in name field'
		)
	);
	$this->form_validation->set_rules('transit', null, 'required',
		array(
			'required' => 'You have not provided name in name field'
		)
	);

	$this->form_validation->set_rules('barcode', null, 'required',
		array(
			'required' => 'You have not provided name in name field'
		)
	);

	$this->form_validation->set_rules('first_amount', null, 'is_natural|required',
		array(
			'required' => 'You have not provided name in name field',
			'is_natural' => 'Please Use Just numberic charecters'
		)
	);

	$this->form_validation->set_rules('second_amount', null, 'is_natural|required',
		array(
			'required' => 'You have not provided name in name field',
			'is_natural' => 'Please Use Just numberic charecters'
		)
	);

	$this->form_validation->set_rules('extra_amount', null, 'is_natural|required',
		array(
			'required' => 'You have not provided name in name field',
			'is_natural' => 'Please Use Just numberic charecters'
		)
	);

	$this->form_validation->set_rules('extra_money', null, 'is_natural|required',
		array(
			'required' => 'You have not provided name in name field',
			'is_natural' => 'Please Use Just numberic charecters'
		)
	);

	$this->form_validation->set_rules('pre_buy_sell_id', null, 'required|check_exist_pre_buy_sell_id',
		array(
			'required' => 'You have not provided name in name field',
			'check_exist_pre_buy_sell_id' => 'factor id does not exost'
		)
	);

	function check_exist_pre_buy_sell_id($id){
		$ci = get_instance();
		$con= $ci->oil_model->check_exist(array('id'=>$id));
		return $con;
    }
	if ($this->form_validation->run() == false) {

		$data['seller_rows'] = $this->account_model->get_where(array('type'=>'seller'));
		$data['driver_rows'] = $this->account_model->get_where(array('type'=>'driver'));
		$data['stock_rows'] = $this->stock_model->get_where(array('type'=>'fact'));

		$this->load->$template('oil/buy', $data);
	} else {
		$fact_transaction = array(
			'parent_id' => $this->input->post('pre_buy_sell_id'),
			'f_date' => $this->input->post('received_date'),
			'buyer_seller_id' =>$this->input->post('account_id'),
			'barcode' =>  $this->db->escape_str($this->input->post('barcode')),
			'amount' =>  $this->db->escape_str($this->input->post('second_amount')),
			'source' =>  $this->db->escape_str($this->input->post('source')),
			'stock_id' => $this->input->post('stock_id'),
			'desc' => $this->db->escape_str($this->input->post('desc')),
			'unit' => 'ton',
			'type' => "fact",
			'buy_sell' =>  'buy',
		);

		$id = $this->oil_model->insert($fact_transaction);

		$pre_transaction=$this->oil_model->get_where(array('id'=>$this->input->post('pre_buy_sell_id')));
		foreach ($pre_transaction as $key => $value){

			$cash=$this->db->escape_str($this->input->post('second_amount')) * $value->unit_price;
			$cash_information = array(
				'cash' =>  $cash,
				'type' => 'usa',
				'transaction_type' =>'debit',
				'table_id'=>$id,
				'account_id'=>$this->db->escape_str($this->input->post('account_id')),
				'table_name'=>'stock_transaction'

			);

			$this->cash_model->insert($cash_information);
		}



		$extra_transaction = array(
			'st_id' => $id,
			'driver_id' =>$this->input->post('driver_id'),
			'transit' =>  $this->db->escape_str($this->input->post('transit')),
			'amount' =>  $this->db->escape_str($this->input->post('extra_amount'))
		);


		$d_id = $this->driver_model->insert($extra_transaction);
		$extra_cash_information = array(
			'cash' =>  $this->db->escape_str($this->input->post('extra_money')),
			'type' => 'ir',
			'transaction_type' =>'debit',
			'table_id'=>$d_id,
			'account_id'=>$this->db->escape_str($this->input->post('account_id')),
			'table_name'=>'driver_transaction'

		);

		$this->cash_model->insert($extra_cash_information);

		$this->load->$template('oil/buy', $data);
	}



}

	public function sell(){
		$data['account_rows'] = $this->account_model->get_where(array('type'=>'driver'));
		$data['stock_rows'] = $this->stock_model->get();
		$this->load->template('oil/sell');
	}

	public function profile($id=""){
		$this->load->template('oil/profile');
	}
}