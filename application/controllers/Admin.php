<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	public function admin_login()
	{
		$email=$this->input->post('email',true);
		$password=$this->input->post('password',true);
		$this->load->model('admin_model');
		$result=$this->admin_model->admin_model_info($email,$password);
		$sdata=array();
		if($result){
			$sdata['admin_id']=$result->$admin_id;
			$sdata['admin_name']=$result->$admin_name;
			$this->session->set_userdata($sdata);
			redirect('dashboard');
		}
		else{
			$sdata['message'] = 'Your email or password is invalid!!';
			$this->session->set_userdata($sdata);
			redirect(base_url());
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('admin_id');
		$this->session->unset_userdata('admin_name');
		$sdata['message']="Logout Successfully!";
		$this->session->set_userdata($sdata);
		redirect(base_url());
	}
	public function add_student()
	{
		$date = array();
		$data['admin_main_content'] = $this->load->view('pages/add_student','',true);
		$this->load->view('dashboard',$data);	
	}
	
	public function edit_admin()
	{
		$date = array();
		$data['admin_main_content'] = $this->load->view('pages/edit_admin','',true);
		$this->load->view('dashboard',$data);	
	}
	public function dashboard()
	{
		$date = array();
		$data['admin_main_content'] = $this->load->view('pages/admin_index','',true);
		$this->load->view('dashboard',$data);	
	}

	//Save student information
	public function save_student()
	{

		$this->form_validation->set_rules('student_name', 'Student Name', 'required');
        $this->form_validation->set_rules('student_phone', 'Student Phone','required');
        $this->form_validation->set_rules('student_roll', 'Student Roll', 'required');

		 if ($this->form_validation->run() == true)
            {
                $this->admin_model->save_student_info();
				$sdata=array();
				redirect('manage-student');
				//echo "success";
            }
            else
            {
            	$data=array();
				$data['admin_main_content'] = $this->load->view('pages/add_student','',true);
				$this->load->view('dashboard',$data);
			}
		
	}
	//Show Student Information
	public function manage_student()
	{
		$data = array();
		$data['show_student_info'] = $this->admin_model->show_student_info();
		$data['admin_main_content'] = $this->load->view('pages/manage_student',$data,true);
		$this->load->view('dashboard',$data);	
	}

	//Edit Student Data
	public function edit_student($student_id)
	{
		$data = array();
		$data['update_student'] = $this->admin_model->update_student($student_id);
		$this->load->view('pages/edit_student',$data);	
	}
	public function delete_student($student_id)
	{
		$this->admin_model->delete_student($student_id);
		$data = array();
		$this->session->set_userdata($data);
		redirect('manage-student');		
	}
	public function update_students()
	{
		$this->admin_model->update_student_info();
		redirect('manage-student');
	}
}
