<?php

class MainC extends CI_Controller {
//    public function _construct(){
//       parent:: _construct();
//       date_default_timezone_set(Asia/Kolkata);
//}
    
    public function index()
	{
		$this->load->view('index');
	}
        public function tec_register()
	{
		$this->load->view('Teacher-registration');
	}
        public function student_list()
	{
            if(!$this->session->userdata('s_id')){
                 redirect(base_url('login'));
             }
            $data['slist'] = $this->MainM->get_list_model();
		$this->load->view('Student_list',$data);
	}
        public function login()
	{
		$this->load->view('login');
	}
        public function data_submit(){
          $name    = $this->input->post('FName');
          $contact = $this->input->post('Contact');
          $address = $this->input->post('Add');
          $class   = $this->input->post('Class');
          $email   = $this->input->post('email');
          $pass    = md5($this->input->post('pass'));
          $message = $this->input->post('Msg');
          $stu = $this->input->post('student');
         $res =  $this->MainM->get_data_model($name,$contact,$address,$class,$message,$email,$pass,$stu);
        if($res>0){
           redirect(base_url ('SList?success=yes'));
       }
       else{
           redirect(base_url ('homepage?eroor=yes'));
       }
        }
        public function edt_data(){
            $uid = $this->input->get('uid');
            $data['stlist']=$this->MainM->get_singledata_model($uid);
            $this->load->view('edit-data',$data);
        }
        public function upd_data(){
          $name  = $this->input->post('name');
          $class = $this->input->post('std');
          $contact = $this->input->post('mobile');
          $uid = $this->input->post('sid');
          $res = $this->MainM->update_data_model($uid,$name,$class,$contact);
         if($res>0){
           redirect(base_url ('SList?success=yes'));
       }
       else{
           redirect(base_url ('edt-data?error=yes'));
       }
             
        }
        public function dlt_data(){
            $uid = $this->input->get('uid');
          $res = $this->MainM->dlt_singledata_model($uid);
        if($res>0){
           redirect(base_url ('SList?success=yes'));
       }
       else{
           redirect(base_url ('homepage?error=yes'));
       }
        }
        public function register_Tdata(){
          $name    = $this->input->post('name');
          $subject = $this->input->post('sub');
          $contact = $this->input->post('mob');         
          $email   = $this->input->post('Email');
          $tea   = $this->input->post('teacher');
          $pass    = $this->input->post('Pass1');
          $pass2   = $this->input->post('Pass2');
          if($pass==$pass2){
              $pwd = md5($pass);
          }
           $photo   =$_FILES['Photo']['name'];
//           $size   =$_FILES['Photo']['size'];  //it's divide by 1024 for kb
//           $error   =$_FILES['Photo']['error'];
//           $temp   =$_FILES['Photo']['tmp_name'];
//           $type   =$_FILES['Photo']['type'];
      // echo $photo,$size."<br>".$error,$temp,$type;
           
           // file upload
           if($_FILES AND $_FILES['Photo']['name'])
              {
                 $ext = pathinfo($_FILES['Photo']['name'], PATHINFO_EXTENSION);
                 $doc_name = "PHOTO".date('ymdhis').".".$ext;
                 
                  $config['upload_path'] = './uploads';
                  $config['allowed_types'] = 'pdf|jpg|jpeg|PDF|JPG|JPEG|png|PNG|webp';
                  $config['max_size'] = 1000000;
                  $config['file_name'] = $doc_name;
                  
                  $this->load->library('upload',$config);
                  
                  if(!$this->upload->do_upload('Photo'))
                  {
                    $error = array('error' => $this->upload->display_errors());
                   // print_r($error);
                    $this->load->view('',$error);
                  }
                   else 
                   {
                      $data = array('upload_data' => $this->upload->data());
                   }
              }
              else{$doc_name = '';}
           
           $res = $this->MainM->get_Tdata_model($name,$subject,$contact,$email,$pwd,$doc_name,$tea);
       if($res>0){
           redirect(base_url ('Teacher-list?success=yes'));
       }
       else{
           redirect(base_url ('register-Tdata?eroor=yes'));
       }
         }
         public function Teacher_list()
	{
             if(!$this->session->userdata('s_id')){
                 redirect(base_url('login'));
             }
            $data['tlist'] = $this->MainM->get_Teacher_list();
		$this->load->view('teacher-list',$data);
	}
        public function edt_Tdata(){
         $uid = $this->input->get('uid');
         //echo $uid;
         $data['tclist'] = $this->MainM->get_single_Tdata_model($uid);
         $this->load->view('edt-Tdata',$data);   
        }
       public function upd_Tdata(){
            $uid = $this->input->post('uid');
            $name = $this->input->post('name');
            $sub = $this->input->post('sub');
            $con = $this->input->post('mobile');
            $eml = $this->input->post('email');
            $pass =md5($this->input->post('pass'));
        $res = $this->MainM->upd_Tdata_model($uid,$name,$sub,$con,$eml,$pass);
        if($res>0){
           redirect(base_url ('Teacher-list?success=yes'));
       }
       else{
           redirect(base_url ('register-Tdata?eroor=yes'));
       }         
        }
        public function dlt_Tdata(){
            $uid = $this->input->get('uid');
          $res = $this->MainM->dlt_singleTdata_model($uid);
        if($res>0){
           redirect(base_url ('Teacher-list?success=yes'));
       }
       else{
           redirect(base_url ('register-Tdata?eroor=yes'));
       }
        }
        
        //Authentication
     public function login_us(){
         $uname = $this->input->post('Name');
         $upass =md5($this->input->post('Password'));
         $type = $this->input->post('utype');
       // echo $uname."<br>".$upass."<br>".$type; 
       //  die();
     $res =  $this->MainM->auth_model_data($uname,$upass,$type);
      // $row = $query->row();
     // print_r($res);
      //  die();
       if($type == 1){
           if($res){
            $session_data = array('s_id'=>$res->sid,
                's_name'=>$res->Student_Name,
                's_standard'=>$res->Standard,
                's_email'=>$res->Email,
                's_contact'=>$res->Contact_no               
            );
          $this->session->set_userdata($session_data);
          redirect(base_url('SList')); 
        }
        else{
           echo "username and password is not valid"; 
        }
       }
     elseif($type == 2) {
          if($res){
            $session_data = array('s_id'=>$res->uid,
                's_name'=>$res->Name,
                's_subject'=>$res->Subject,
                's_email'=>$res->Email,
                's_contact'=>$res->Contact               
            );
          $this->session->set_userdata($session_data);  
      redirect(base_url('Teacher-list'));  
        }
        else{
           echo "username and password is not valid"; 
        }
     } 
   
     }
        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url ('homepage'));
        }
         
       
}

