<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function addnew(){
       
        $this->load->view('admin/newtask');
    }
	public function systemsetting(){
       $data['setting']=$this->db->get('setting')->row_array();
        $this->load->view('admin/systemsetting',$data);
    }
	function groupedit($parm1){
		$data['group_id']=$parm1;
		$data['setting']=$this->db->where('group_id',$parm1)->get('group')->row_array();
		$this->load->view('admin/groupedit',$data);

	}

	function editpi($parm1){
		$data['pi_id']=$parm1;
		$data['setting']=$this->db->where('pi_id',$parm1)->get('pi')->row_array();
		$data['adminlist']=$this->db->get('group')->result_array();
		$this->load->view('admin/piedit',$data);
	}


		public function taskcomplete($par){
			$d['status']=1;
			$this->db->where('task_id',$par)->update('task',$d);
			$this->session->set_flashdata('success', 'Data has been Updated Sucessfully.');
			redirect(base_url().'admin/');			
		}

public  function taskdelete($par){
	$this->db->where('postdata_id',$par)->delete('postdata');
	$this->session->set_flashdata('success', 'Data has been Removed Sucessfully.');
	redirect(base_url().'admin/post');
}
//deletepi
public  function deletepi($par){
	$this->db->where('pi_id',$par)->delete('pi');
	$this->session->set_flashdata('success', 'Data has been Removed Sucessfully.');
	redirect(base_url().'admin/pi');
}

	function updatesettingdata(){
		$data['font']=$this->input->post('font');
		$data['orientation']=$this->input->post('orientation');
		$insert_id = 1;
	   if(move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/' . $insert_id . '.jpg'))  {
   $data['background']=base_url().'uploads/' . $insert_id . '.jpg';
	   }
		
	   
		$this->db->where('setting_id',$insert_id);
		$this->db->update('setting',$data);
		$this->session->set_flashdata('success', 'Data has been Updated Sucessfully.');
		redirect(base_url().'admin/systemsetting/');
	}
	public function addnewpi(){
		$d['adminlist']=$this->db->get('group')->result_array();
        $this->load->view('admin/newpiadd',$d);
    }
	
	public function index()
	{
		$d['adminlist']=$this->db->get('group')->result_array();

		$this->load->view('admin/home',$d);


	}



	public function post()
	{
		$d['adminlist']=$this->db->get('postdata')->result_array();

		$this->load->view('admin/post',$d);


	}
	public function addnewpostdata(){
		$fileName=$_FILES['userfile']['name'];
		if(move_uploaded_file($_FILES['userfile']['tmp_name'], 'uploads/' . $fileName))  {
			$data['background']=base_url().'uploads/' . $fileName ;
			$data['duration']=$this->input->post('duration');
			$data['group_id']=$this->input->post('group_id');
			$this->db->insert('postdata',$data);
			///
			$c['refresh_status']=1;
			$this->db->where('group_id',$data['group_id'])->update('pi',$c);
			
			
			
			$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
			redirect(base_url().'admin/addnewpost/');	
		}else{
			$this->session->set_flashdata('error', 'Error in uploading only upload image and video.');
			redirect(base_url().'admin/addnewpost/');

		}

	}
	public function addnewpost(){
		$d['adminlist']=$this->db->get('group')->result_array();

		$this->load->view('admin/postnew',$d);
	}
public function pi(){
	$d['adminlist']=$this->db->get('pi')->result_array();

	$this->load->view('admin/pi',$d);
}



	//addoperatordata
	public function addgroupdata(){
		$c['title']=$this->input->post('title');
		$this->db->insert('group',$c);
		$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
		redirect(base_url().'admin/addnew/');
		}

		//updategroupdata
		public function updategroupdata($parm1){
			$c['title']=$this->input->post('title');
			$this->db->where('group_id',$parm1)->update('group',$c);
			$this->session->set_flashdata('success', 'Data has been Updated Sucessfully.');
			redirect(base_url().'admin/groupedit/'.$parm1);
			}
//addpiedata
public function addpiedata(){
	$c=$this->input->post();
	$this->db->insert('pi',$c);
	$this->session->set_flashdata('success', 'Data has been Added Sucessfully.');
	redirect(base_url().'admin/addnewpi/');
	}
	public function updatepiedata($id){
		$c=$this->input->post();
		$this->db->where('pi_id',$id)->update('pi',$c);
		$this->session->set_flashdata('success', 'Data has been updated Sucessfully.');
		redirect(base_url().'admin/editpi/'.$id);
		}

}