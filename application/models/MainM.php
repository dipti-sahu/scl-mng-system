<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 class MainM extends CI_Model{
 public function get_data_model($name,$contact,$address,$class,$message,$email,$pass,$stu)
	{
	$sql ="INSERT INTO student_table(Student_Name,Contact_no,Address,Standard,Message,Email,Password,Student)VALUES('$name','$contact','$address','$class','$message','$email','$pass','$stu')";
	return $this->db->query($sql);     
        }
         public function get_list_model()
	{
	$sql = "SELECT * FROM student_table";
        return $this->db->query($sql)->result();
        }
        public function get_singledata_model($uid){
            $sql = "SELECT * FROM student_table WHERE sid=$uid";
            return $this->db->query($sql)->row();
        }
         public function get_Tdata_model($name,$subject,$contact,$email,$pwd,$doc_name,$tea)
	{
	$sql ="INSERT INTO teacher_table(Name,Subject,Contact,Email,Password,Photo,Teacher)VALUES('$name','$subject','$contact','$email','$pwd','$doc_name','$tea')";
	return $this->db->query($sql);     
        }
        public function update_data_model($uid,$name,$class,$contact){
            $sql = "UPDATE student_table SET Student_Name='$name',Standard='$class',Contact_no='$contact' WHERE sid='$uid'";
             return $this->db->query($sql);
        // $data = array('Student_Name'=>$name,
         //    'Standard'=>$class,
          //   'Contact_no'=>$contact    
         //) ;  
         //$this->db->where('sid',$uid);
        //return $this->db->query('student_table',$data);
        }
        public function dlt_singledata_model($uid){
        return $this->db->query("DELETE FROM student_table WHERE sid='$uid'");   
        }
         public function get_Teacher_list()
	{
	$sql = "SELECT * FROM teacher_table";
        return $this->db->query($sql)->result();
        }
        public function get_single_Tdata_model($uid){
         $sql = "SELECT * FROM teacher_table WHERE uid='$uid'";
        return $this->db->query($sql)->row();
        }
        public function upd_Tdata_model($uid,$name,$sub,$con,$eml,$pass){
            $sql = "UPDATE teacher_table SET Name='$name',Subject='$sub',Contact='$con',Email='$eml', Password='$pass' WHERE uid='$uid'";
             return $this->db->query($sql); 
        }
        public function dlt_singleTdata_model($uid){
        return $this->db->query("DELETE FROM teacher_table WHERE uid='$uid'");   
        }
        public function auth_model_data($uname,$upass,$type){
         switch($type){
             case 1:$sql = "SELECT * FROM student_table WHERE Email='$uname' AND Password='$upass'";
    return $this->db->query($sql)->row();
              case 2:$sql = "SELECT * FROM teacher_table WHERE Email='$uname' AND Password='$upass'";
    return $this->db->query($sql)->row();
         }       
        }
 }
