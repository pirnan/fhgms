<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

    public function index() {
        $id=$this->input->get('id');
        if($id == 1)
        {
            $this->load->view('email/contactdaily');
        }
        if($id == 2)
        {
            $this->load->view('email/contactweekly');
        }
        if($id == 3)
        {
            $this->load->view('email/contactmonthly');
        }
    }

    function send() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = "Fitness and Health Gym";
        $name = $this->input->post('name');
        $membership = $this->input->post('typeofmembership');
        if ($membership == "Monthly")
        {
        $message = "Thank you for signing up $name. You selected $membership type of payment with a price of PHP 750. Please proceed to the gym and scan the below qr code: ";
        }
        elseif ($membership == "Monthly w/ Coach") {
        $message = "Thank you for signing up $name. You selected $membership type of payment with a price of PHP 3,500. Please proceed to the gym and scan the below qr code: ";
        }
        else {
            $price = $this->input->post('priceofmembership');
            $message = "Thank you for signing up $name. You selected $membership type of payment with a price of $price. Please proceed to the gym and scan the below qr code: ";
        }

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}