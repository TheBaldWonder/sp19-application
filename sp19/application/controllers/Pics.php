<?php
class Pics extends CI_Controller {
 
    public function __construct()
{
        parent::__construct();
        $this->config->set_item('banner','Pics Section');
        $this->load->model('pics_model');
        $this->load->helper('url_helper');
}
    public function index($param='seahawks')
    {
        $this->config->set_item('title','Flikr Pics');
        
if(isset($_POST['submit']))
{
    $param=$_POST['searchword'];
    $data['pics'] = $this->pics_model->get_pics($param);
    $data['title'] = $param;
    $this->load->view('pics/index', $data);
}
else    
{
        $data['pics'] = $this->pics_model->get_pics($param);
        $data['title'] = $param;
        //$this->load->view('templates/header', $data);
        $this->load->view('pics/index', $data);
        //$this->load->view('templates/footer',$data);
}
    
    
    }
}//end of pics controller
