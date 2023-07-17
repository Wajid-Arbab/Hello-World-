<?php
defined('BASEPATH') OR exit('No direct script access allowed');
   
class StripePayment extends CI_Controller {
    
    public function __construct() {
       parent::__construct();
    }
    
    public function index()
    {
        $this->load->view('dashboard/stripe');
    }
    
    public function handlePayment()
    {
        require_once('application/libraries/vendor/stripe/stripe-php/init.php');
    
        \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
     
        \Stripe\Charge::create ([
                "amount" => 100 * 120,
                "currency" => "inr",
                "source" => $this->input->post('stripeToken'),
                "description" => "Dummy stripe payment." 
        ]);
            
        $this->session->set_flashdata('success', 'Payment has been successful.');
             
        redirect('/make-stripe-payment', 'refresh');
    }
}