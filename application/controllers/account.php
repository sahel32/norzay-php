<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {

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
		 $this->load->template("Accounts/index", $data);
	}

	public function lists($type)
	{
		 $data['title']="dashboard";
		$data['account_rows'] = $this->account_model->get_where(array('type'=>$type));
		 $this->load->template("Accounts/lists", $data);
	}

	public function add(){

        $this->form_validation->set_rules('name' , null, 'alpha_int|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_int'         =>'please insert just alghabatic charecters'
        )
            );
       $this->form_validation->set_rules('lname' , null, 'alpha_int|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_int'         =>'please insert just alghabatic charecters'
        )
            );

       $this->form_validation->set_rules('phone' , null, 'is_natural|required|regex_match[/^[0-9]{10}$/]',
            array(
                'required'      => 'You have not provided name in name field',
                'is_natural'         =>'Please Use Just numberic charecters'
        )
            );

		function alpha_int($str)
		{
			$ci =& get_instance();
			$str = (strtolower($ci->config->item('charset')) != 'utf-8') ? utf8_encode($str) : $str;

			return ( ! preg_match("/^[[:alpha:]- چجحخهعغفقثصضشسیبلاتنمکگپظطزرذدئو_.]+$/", $str)) ? FALSE : TRUE;
		}

		$data['account_rows']=$this->account_model->group_by(array(),'type');
        if($this->form_validation->run()==false){

        $data['signup_form']="active";
        $this->load->template('accounts/add',$data);
        }else{

        $cantact_info=array(
            'name'=>$this->db->escape_str($this->input->post('name')),
            'lname'=>$this->db->escape_str($this->input->post('lname')),
			'type'=>$this->db->escape_str($this->input->post('type')),
            'phone'=>$this->db->escape_str($this->input->post('phone'))
            );

       $id=$this->account_model->insert($cantact_info);

        $data['fu_page_title']="Login Form";
        redirect('account/profile/'.$id.'/'.$this->input->post('type'));
      // $this->profile($id); 
        }


    }

    public function profile($id=0,$type){
    	  $data['fu_page_title']="Login Form";
<<<<<<< HEAD
		
=======
		$this->session->set_userdata('url',$this->router->fetch_class().'/'.$this->router->fetch_method().'/'.$this->uri->segment(3).'/'.$this->uri->segment(4));
>>>>>>> refs/remotes/origin/master
		if($type=="driver"){
			$data['account_rows'] = $this->account_model->get_where(array('id' => $id));
			$data['single_balance_rows']=$this->cash_model->get_balance_credit_debit_single(array('account_id' => $id));
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$data['driver_cash_rows']=$this->cash_model->get_where(array('account_id' => $id, 'table_name'=>'driver_transaction'));
			$data['driver_oil_rows']=$this->driver_model->get_where_oil(array('driver_transaction.driver_id' => $id));
			$this->load->template('accounts/driver_profile',$data);
		}

		if($type=="exchanger"){
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$data['type_rows']=$this->cash_model->group_by(array('account_id'=>$id),'type');
			$data['account_rows']=$this->cash_model->get_balance_credit_debit_single($id);
			$data['exchanger_cash_rows']=$this->cash_model->get_where(array('account_id' => $id, 'table_name'=>'account'));
			$data['cash_type_rows']=$this->cash_model->group_by(array('account_id' => $id),'type');

			$this->load->template('accounts/exchanger_profile',$data);
		}

		if($type=="seller"){
			$data['account_rows'] = $this->account_model->get_where(array('id' => $id));
			$data['single_balance_rows']=$this->cash_model->get_balance_credit_debit_single(array('account_id' => $id));
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$data['buy_rows']=$this->oil_model->get_where(array('buyer_seller_id' => $id ,'buy_sell' => 'buy', 'type'=> 'pre'));
			$this->load->template('accounts/seller_profile',$data);
		}
		if($type=="customer"){
			$data['account_rows'] = $this->account_model->get_where(array('id' => $id));
			$data['cash_rows']=$this->cash_model->get_where(array('account_id' => $id));
			$data['single_balance_rows']=$this->cash_model->get_balance_credit_debit_single(array('account_id' => $id));
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$data['pre_buy_rows']=$this->oil_model->get_where(array('buyer_seller_id' => $id ,'buy_sell' => 'buy', 'type'=> 'pre'));
			$data['pre_sell_rows']=$this->oil_model->get_where(array('buyer_seller_id' => $id ,'buy_sell' => 'sell', 'type'=> 'pre'));
			$data['buy_rows']=$this->oil_model->get_where(array('buyer_seller_id' => $id ,'buy_sell' => 'buy', 'type'=> 'fact'));
			$data['sell_rows']=$this->oil_model->get_where(array('buyer_seller_id' => $id ,'buy_sell' => 'sell', 'type'=> 'fact'));
			$this->load->template('accounts/customer_profile',$data);
		}

		if($type=="stuff"){
			$data['account_rows'] = $this->account_model->get_where(array('id' => $id));
			$data['single_balance_rows']=$this->cash_model->get_balance_credit_debit_single(array('account_id' => $id));
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$this->load->template('accounts/stuff_profile',$data);
		}

		if($type=="dealer"){
			$data['account_rows'] = $this->account_model->get_where(array('id' => $id));
			$data['single_balance_rows']=$this->cash_model->get_balance_credit_debit_single(array('account_id' => $id));
			$data['all_debit_credit']=$this->cash_model->get_where(array('account_id' => $id));
			$this->load->template('accounts/dealer_profile',$data);
		}
    }
	public function delete($id=0){


		//$this->load->template('accounts/profile',$data);
	}
}
