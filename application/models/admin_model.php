<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function admin_model_info($email,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query_result=$this->db->get();
		$result=$query_result->row();
		return $result;
	}

	public function save_student_info()
	{
		$data = array();
		$data['student_name']=$this->input->post('student_name',true);
		$data['student_phone']=$this->input->post('student_phone',true);
		$data['student_roll']=$this->input->post('student_roll',true);

				$sdata=array();
				$error = "";
                $config['upload_path']          = 'image/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000000000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $sdata = $this->upload->data();
                        $data['image'] = $config['upload_path'].$sdata['file_name'];
                }

		$this->db->insert('student',$data);
	}

	public function show_student_info()
	{
		$this->db->select('*');
		$this->db->from('student');
		$query_result=$this->db->get();
		$student_info=$query_result->result();
		return $student_info;
	}
	
	public function update_student($student_id)
	{
		$this->db->select('*');
		$this->db->from('student');
		$this->db->where('student_id',$student_id);
		$query_result=$this->db->get();
		$update_info=$query_result->row();
		return $update_info;
	}

	public function update_student_info()
	{
		$data = array();
		$student_id=$this->input->post('student_id',true);
		$data['student_name']=$this->input->post('student_name',true);
		$data['student_phone']=$this->input->post('student_phone',true);
		$data['student_roll']=$this->input->post('student_roll',true);
		$this->db->where('student_id',$student_id);
		$this->db->update('student',$data);
	}
	public function delete_student($student_id)
	{
		$this->db->where('student_id',$student_id);
		$this->db->delete('student');
	}
}
