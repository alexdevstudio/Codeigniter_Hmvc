<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kickstart extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->model('kickstart_model');
    $data['kickstart'] = $this->kickstart_model->letsbegin();
    
    $this->load->view('index', $data);
  }

}
