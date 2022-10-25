<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Web extends CI_Controller{
 function __construct(){
    parent::__construct();
    $this ->load->helper('url');
 }
 public function index(){
 $data['judul'] = "Halaman Depan";
 $this->load->view('v_header',$data);
 $this->load->view('v_index',$data);
 $this->load->view('v_footer',$data);
 }
 public function reservasi(){
   $data['judul'] = "Halaman reservasi";
   $this->load->view('v_header',$data);
   $this->load->view('v_reservasi',$data);
   $this->load->view('v_footer',$data);
} }
 ?>
