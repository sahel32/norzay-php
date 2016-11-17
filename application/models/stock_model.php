<?php 
class stock_model extends CI_Model{

  public $table;
  public $id;
  public $name;
  public $province;
  public $type;
  public $date;
  public $desc;

  public function __construct()
    {
     parent::__construct();
     $this->table="stock";
     $this->id="id";
     $this->name="name";
     $this->province="province";
     $this->type="type";
     $this->date="date";
     $this->desc="desc";

    }

    //get all rows of table
    function get(){
    //  $this->db->order_by($this->id,'desc');
      $query=$this->db->get($this->table);
      return $query->result();
    }



    //get data from table by condition or array of condition
    function get_where($wheres){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
      $query=$this->db->get_where($this->table, $wheres);
      return $query->result();
    }

    //deletes data from table by condtion or array of condition
    function delete($wheres){
      $this->db->delete($this->table,$wheres);
    }

    //inset array of data to table
    function insert($data){
          $this->db->insert($this->table,$data);
          return $this->last_id();
    }


    //updates data or array of data by condition or array of condition
    function update($data,$wheres){
      $str = $this->db->update($this->table, $data, $wheres);
      return $str;
    }

    function check_email_exist($wheres){
      //$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
      $query=$this->db->get_where($this->table, $wheres);
      $result=$query->num_rows();
      if($result==0){
        return false;
      }else{
        return true;
      }
    }


    //check tha table if is empty or not
    function check_empty(){
      return $this->db->count_all($this->table);
    }


    function last_id(){

      $this->db->select($this->id);
      $this->db->from($this->table);
      $this->db->limit(1);
      $this->db->order_by($this->id, "desc");
      $query=$this->db->get();
      $result=$query->result();
      if(empty($result)){
          return 1;
        }else{
      foreach ($result as $key => $value) {
       return $value->{$this->id}++;
      }
    }
}

    function last_row(){

      $this->db->select('*');
      $this->db->from($this->table);
      $this->db->limit(1);
      $this->db->order_by($this->id, "desc");
      $query=$this->db->get();
      $result=$query->row_array();
      return $result;
    }

    }
?>