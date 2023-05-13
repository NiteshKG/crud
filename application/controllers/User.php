<?php

class User extends CI_Controller{
    public function register(){
        $this->load->view('create');
    }
    public function index(){
        $this->load->model('user_model');
        $users=$this->user_model->all();
        $data=array();
        $data['users']=$users;
        $this->load->view('create',$data);


    }
    public function edit($userid){
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        $data=array();
        $data['user']=$user;
        $this->form_validation->set_rules('name', 'Name','required' );
        $this->form_validation->set_rules('email', 'Email','required|valid_email' );
        if($this->form_validation->run()){
          $formArray = array();
          $formArray['name']=$this->input->post('name');
          $formArray['email']=$this->input->post('email');
          $this->user_model->updateuser($userid,$formArray);
         
          $this->session->set_flashdata('success','Record updated successfully');
          redirect(base_url().'user/index/');
        }
        else{
            $this->load->view('edit',$data);
        }
    }
    public function create(){
        $this->load->model('User_model');

        $this->form_validation->set_rules('name', 'Name','required' );
        $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[users.email]' );

       if($this->form_validation->run()){
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['email']=$this->input->post('email');
            $formArray['created_at']=date('Y-m-d');
            $this->User_model->create($formArray);

            
            $this->session->set_flashdata('success','Record saved successfully');
            
            redirect(base_url().'user/index/');
            
            
       }
       else{
            $this->register();
       }
        
       
    }

    public function delete($userid){
        $this->load->model('user_model');
        $user=$this->user_model->getuser($userid);
        if(empty($user)){
            $this->session->set_flashdata('failure','Record not exists.');
            
            redirect(base_url().'user/index/');
            
        }
        else{
            $this->user_model->deleteuser($userid);
            $this->session->set_flashdata('success','Record deleted successfully.');
            
            redirect(base_url().'user/index/');
            
        }
    }
}

?>