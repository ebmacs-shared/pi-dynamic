<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function getrefreshstatus(){
	    	header('Content-Type: text/json');
	    	$mac=$this->input->post('mac');
	$xxy=$this->db->where('mac',$mac)->get('pi')->row_array();
	if(empty($xxy)){
	    
	    
		$j['success']=1;
		$j['result']=array('msg'=>'invalid mac address');
		echo json_encode($j);
		exit;
	}else{
	$jkl['refresh_status']=0;
	$this->db->where('mac',$mac)->update('pi',$jkl);
	    $j['success']=1;
	    	$j['result']=array('refresh_status'=>$xxy['refresh_status']);
	    		echo json_encode($j);
		exit;
	}
	}
	
	
	public function readdata(){
		header('Content-Type: text/json');
	$mac=$this->input->post('mac');
	$xxy=$this->db->where('mac',$mac)->get('pi')->row_array();
	if(empty($xxy)){
		$j['success']=1;
		$j['result']=array('msg'=>'invalid mac address');
		echo json_encode($j);
		exit;
	}else{
		$group_id=$xxy['group_id'];
		$j['success']=1;
		$j['result']=$this->db->where('group_id',$group_id)->get('postdata')->result_array();
		$j['pie_info']=$xxy;
		echo json_encode($j);
		exit;
	}
	

	}

}