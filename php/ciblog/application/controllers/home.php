<?php
	class home extends CI_Controller{
		public function index(){
			$data['title'] = 'Home';
			$this->load->view('pelanggan/templates/header',$data);
			$this->load->view('pelanggan/home');
		 	$this->load->view('pelanggan/templates/footer');
		}
		public function about(){
			$data['title'] = 'About Us';
			$this->load->view('pelanggan/templates/headerv2',$data);
			$this->load->view('pelanggan/about');
		 	$this->load->view('pelanggan/templates/footer');
		}
		public function term(){
			$data['title'] = 'Term And Condition';
			$this->load->view('pelanggan/templates/headerv2',$data);
			$this->load->view('pelanggan/term');
		 	$this->load->view('pelanggan/templates/footer');
		}
		
		public function regis(){
			$data['title'] = 'Registrasi';
			$this->load->view('pelanggan/templates/headerv2',$data);
			$this->load->view('pelanggan/regis');
		 	$this->load->view('pelanggan/templates/footer');
		}
		public function learn(){
			$data['title'] = 'Learn More';
			$this->load->view('pelanggan/templates/headerv2',$data);
			$this->load->view('pelanggan/learn');
		 	$this->load->view('pelanggan/templates/footer');
		}
	}