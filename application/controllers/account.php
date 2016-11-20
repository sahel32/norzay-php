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

	public function lists()
	{
		 $data['title']="dashboard";
		$data['account_rows'] = $this->account_model->get();
		 $this->load->template("Accounts/lists", $data);
	}

	public function add(){

        $this->form_validation->set_rules('name' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>'please insert just alghabatic charecters'
        )
            );
       $this->form_validation->set_rules('lname' , null, 'alpha_numeric_spaces|required',
            array(
                'required'      => 'You have not provided name in name field',
                'alpha_numeric_spaces'         =>'please insert just alghabatic charecters'
        )
            );

       $this->form_validation->set_rules('phone' , null, 'is_natural|required|regex_match[/^[0-9]{10}$/]',
            array(
                'required'      => 'You have not provided name in name field',
                'is_natural'         =>'Please Use Just numberic charecters'
        )
            );

        if($this->form_validation->run()==false){

        $data['signup_form']="active";
        $this->load->template('accounts/add',$data);
        }else{

        $cantact_info=array(
            'name'=>$this->db->escape_str($this->input->post('name')),
            'lname'=>$this->db->escape_str($this->input->post('lname')),
            'phone'=>$this->db->escape_str($this->input->post('phone'))
            );

       $id=$this->account->insert($cantact_info);

        $data['fu_page_title']="Login Form";
        redirect('accounts/profile/'.$id);
      // $this->profile($id); 
        }


    }

    public function profile($id=0){
    	  $data['fu_page_title']="Login Form";
          $data['account_rows']=$this->account_model->get_where(array('id' => $id));
          $data['balance_rows']=$this->account_model->get_where(array('id' => $id ,'type' => 'account'));
		$data['buy_rows']=$this->oil_model->get_where(array('account_id' => $id ,'buy_sell' => 'buy', 'type'=> 'pre'));
		$data['sell_rows']=$this->oil_model->get_where(array('account_id' => $id ,'buy_sell' => 'sell', 'type'=> 'pre'));
		$data['cash_rows']=$this->cash_model->get_where(array('id' => $id));

       	$this->load->template('accounts/profile',$data); 
    }
	public function delete($id=0){


		$this->load->template('accounts/profile',$data);
	}
}
