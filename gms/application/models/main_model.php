<?php

class main_model extends CI_Model
{
	function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }   

	function add_member($first_name_var,$last_name_var,$middle_name_var,$email_address_var,$contact_number_var,$address_var,$age_var,$gender_var,$height_var,$weight_var,$profile_var)
	{
		$query="INSERT into member_info_tbl(member_id,first_name,last_name,middle_name,email_address,contact_number,address,age,gender,height,weight,member_photo) values('','$first_name_var','$last_name_var','$middle_name_var','$email_address_var','$contact_number_var','$address_var','$age_var','$gender_var','$height_var','$weight_var','$profile_var')";
		$this->db->query($query);
	}

	function add_equip($name_var,$description_var,$image_var)
	{
		$query="INSERT into equip_info_tbl(equip_id,equip_name,equip_description,equip_img) values('','$name_var','$description_var','$image_var')";
		$this->db->query($query);
	}

	function view_equip()
	{
		 $query = $this->db->get('equip_info_tbl');  
          return $query;  
		// $query=$this->db->query("select * from equip_info_tbl");
		// return $query->result();

	}

	function view_member()
	{
		$query=$this->db->query("select * from member_info_tbl");
		return $query->result();
	}

	public function select_member()  
    {  
         //data is retrive from this query  
         $query = $this->db->get('member_info_tbl');  
         return $query;  
     }  

     public function delete_member_model($value){
    $this -> db -> where('member_id', $value);
    $this -> db -> delete('member_info_tbl');
}
}

?>