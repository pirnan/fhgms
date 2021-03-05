<?php
class main extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
        $this->load->database();
        $this->load->model('main_model');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('download');
        $this->load->library('form_validation');
        
    }
   public function index()
    {
        if($this->session->userdata('entrance')) {
        redirect('main/indexadmin');
    }
        $this->load->view('homepage');
    }

   public function indexadmin()
    {   
        if(! $this->session->userdata('entrance')) {
            redirect('main/index');
    }
        if($this->input->post('signout'))
        {
            $this->session->set_userdata('entrance', false);
            redirect('main/index');
        }

        $this->load->view('header');
        $this->load->view('home_page_2');
    }

   public function login()
    {   
        $this->form_validation->set_rules('username','Username','trim|required|callback_validate_user');
        $this->form_validation->set_rules('password','Password','trim|required|callback_validate_pass');

        if($this->form_validation->run()==true)
        { 
            $this->session->set_userdata('entrance', true);
            redirect('main/indexadmin');
        }

        $this->load->view('login');
    } 

    public function membership_page()
    {
        $this->load->view('membership');
    }

    public function aboutus_call()
    {
        $this->load->view('aboutus');

    }

   public function validate_user($str)
    {
        $this->db->select('*');
        $this->db->from("user");
        $this->db->where("user_name like binary",$str);
        $result = $this->db->get();
        if($result->num_rows()==0)
        {
            $this->form_validation->set_message('validate_user', 'Invalid {field}!');
            return FALSE;
        }
        return TRUE;
    }

    public function validate_pass($str)
    {
        $this->db->select('*');
        $this->db->from("user");
        $this->db->where("user_password like binary",$str);
        $result = $this->db->get();
        if($result->num_rows()==0)
        {
            $this->form_validation->set_message('validate_pass', 'Invalid {field}!');
            return FALSE;
        }
        return TRUE;
    }
    function equipment_call()
    {
        if($this->input->post('signout'))
        {
            $this->session->set_userdata('entrance', false);
            redirect('main/index');
        }
         if($this->input->post('upload') != NULL )
         { 
            
            $data = array(); 
            if(!empty($_FILES['file']['name'])){ 
                 // Set preference 
                 $config['upload_path'] = 'uploads/'; 
                 $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                 $config['max_size'] = '100000'; // max_size in kb 
                 $config['file_name'] = $_FILES['file']['name']; 

                 // Load upload library 
                 $this->load->library('upload',$config); 
           
                 // File upload
                if($this->upload->do_upload('file'))
                { 
                    // Get data about the file
                    $uploadData = $this->upload->data(); 
                    $filename = $uploadData['file_name']; 
                    $data['response'] = 'successfully uploaded '.$filename; 

                    $equipment_name_var=$this->input->post('equip_name');
                    $equipment_description_var=$this->input->post('equip_description');
                    $this->main_model->add_equip($equipment_name_var,$equipment_description_var,$filename);
                }
                else
                { 
                    $data['response'] = 'failed'; 
                } 
            }     
            else
            { 
                $data['response'] = 'failed'; 
            } 
            // load view 
            $this->load->view('header'); 
            $this->load->view('add_equip'); 
 
       }
       else
       {
          $this->load->view('header'); 
          $this->load->view('add_equip'); 
       } 
       
    }

    function view_equip_call()
    {
        if($this->input->post('signout'))
        {
            $this->session->set_userdata('entrance', false);
            redirect('main/index');
        }
        $this->load->view('header'); 
        $this->load->database();  
        $this->load->model('main_model');  
        $data['e']=$this->main_model->view_equip();  
        $this->load->view('view_equip',$data);

    }

  
    function view_members_call()
    {
        if($this->input->post('signout'))
        {
            $this->session->set_userdata('entrance', false);
            redirect('main/index');
        }
        $this->load->view('header');
        $this->load->database();  
        $this->load->model('main_model');  
        $data['h']=$this->main_model->select_member();  
        $this->load->view('view_members',$data);


    }

    function membership_page_call()
    {
        if($this->input->post('signout'))
        {
            $this->session->set_userdata('entrance', false);
            redirect('main/index');
        }
        if($this->input->post('upload') != NULL )
        {
            $data = array(); 
            if(!empty($_FILES['file']['name'])){ 
                 // Set preference 
                 $config['upload_path'] = 'uploads/'; 
                 $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                 $config['max_size'] = '100000'; // max_size in kb 
                 $config['file_name'] = $_FILES['file']['name']; 

                 // Load upload library 
                 $this->load->library('upload',$config); 
           
                 // File upload
                if($this->upload->do_upload('file'))
                { 
                    // Get data about the file
                    $uploadData = $this->upload->data(); 
                    $filename = $uploadData['file_name']; 
                    $data['response'] = 'successfully uploaded '.$filename; 

                    $first_name_var=$this->input->post('first_name');
                    $last_name_var=$this->input->post('last_name');
                    $middle_name_var=$this->input->post('middle_name');
                    $email_address_var=$this->input->post('email_address');
                    $contact_number_var=$this->input->post('contact_number');
                    $address_var=$this->input->post('address');
                    $age_var=$this->input->post('age');
                    $gender_var=$this->input->post('gender');
                    $height_var=$this->input->post('height');
                    $weight_var=$this->input->post('weight');
                    $this->main_model->add_member($first_name_var,$last_name_var,$middle_name_var,$email_address_var,$contact_number_var,$address_var,$age_var,$gender_var,$height_var,$weight_var,$filename);
                }
                else
                { 
                    $data['response'] = 'failed'; 
                }
            }
            else
            { 
                $data['response'] = 'failed'; 
            } 
            // load view 
            $this->load->view('header'); 
            $this->load->view('add_member'); 
 
       }
       else
       {
          $this->load->view('header'); 
          $this->load->view('add_member'); 
       }
      
    }

    public function delete_member($value) {   
    $this->load->model("main_model");
    $this->main_model->delete_member_model($value);
}
}
?>

