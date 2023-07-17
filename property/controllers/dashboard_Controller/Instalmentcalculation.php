<?php
	class Instalmentcalculation extends CI_Controller{
		
		public function calculation(){			
			$DurationYear = $this->input->post('month');
			$PropertyPrice = $this->input->post('amount');
			$InterestRate = $this->input->post('interest');
		
			$totalInterest = $PropertyPrice * $InterestRate/100;
			$totalAmount = $PropertyPrice + $totalInterest;
			$payPerMonth = $totalAmount / $DurationYear;
			
			
			$this->sendHtmlPage($DurationYear, $PropertyPrice, $InterestRate, $totalInterest, $totalAmount, $payPerMonth);
			//here we sent it html page here we
		}
		
		public function sendHtmlPage($DurationYear, $PropertyPrice, $InterestRate, $totalInterest, $totalAmount, $payPerMonth){
			$data["RS"] = array($DurationYear, $PropertyPrice, $InterestRate, $totalInterest, $totalAmount, $payPerMonth);
			
				$this->load->view('_template/header-1');
				$this->load->view('dashboard/calculation', $data);
				$this->load->view('_template/footer-1');
		}
		
	}


?>