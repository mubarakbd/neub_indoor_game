<?php
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/Session.php');
	include_once ($filepath.'/../lib/Database.php');
	include_once ($filepath.'/../helpers/Format.php');
class User{
	private $db;
	private $fm;
	public function __construct(){
		$this->db = new Database();
		$this->fm = new Format();
	}

	public function UserRegistration($data){
		$name = mysqli_escape_string($this->db->link,$data['name']);
		$email = mysqli_escape_string($this->db->link,$data['email']);
		$dept = mysqli_escape_string($this->db->link,$data['dept']);
		$game = mysqli_escape_string($this->db->link,$data['game']);
		$phone = mysqli_escape_string($this->db->link,$data['phone']);
		$password = mysqli_escape_string($this->db->link,md5($data['password']));


		if($name == "" || $email==""|| $dept==""|| $game=="" || $phone=="" || $password ==""){
			$msg = "<span class ='error'>Fileds Must Not Be Empty!</span>";
			return $msg;
		}

		$maile = "SELECT * FROM  tbl_user WHERE email = '$email' ";
		$chk = $this->db->select($maile);

		if($chk!=false){
			$msg= "<span class ='error'>Email Already Exist!</span>";
			 return $msg;
		}
		 
		else{
			$query = "INSERT INTO  tbl_user(name,dept,game,email ,password,phone) 
			VALUES('$name','$dept','$game','$email',  '$password' ,'$phone')";
			$insert_rows = $this->db->insert($query);
			if($insert_rows){
			   $msg= "<span class ='success'>Registration SuccessFully Done!</span>";
			   return $msg;
			}else{
			   $msg= "<span class ='error'>Something is Worng!</span>";
			   return $msg;
			}
		}
		 

   }


   public function userLogin($data)
   {
	   $email 	= $this->fm->validation($data['email']);
	   $password  	= $this->fm->validation($data['password']);

	   $email 	= mysqli_real_escape_string($this->db->link, $email);
	   $password 	= mysqli_real_escape_string($this->db->link, md5($password));

	   if (empty($email) || empty($password)) {
		   $msg = "<span class='error'>Fields must not be empty!</span>";
		   return $msg;
	   }
	   $query = "SELECT * FROM tbl_user WHERE email = '$email' AND password = '$password'";
	   $result = $this->db->select($query);
	   if ($result != false) {
		   $value = $result->fetch_assoc();
		   Session::set("userlogin", true);
		   Session::set("userid", $value['id']);
		   Session::set("name", $value['name']);
		   header("Location:games.php");
	   } else {
		   $msg = "<span class='error'>Email or Passowrd not matched!</span>";
		   return $msg;
	   }
   }

		public function getAlluser(){
			$query = "select * from tbl_user order by userid desc";
			$result = $this->db->select($query);
			return $result;
		}

		public function disbleUser($userid){
			$query = "update tbl_user set status = '1' where userid = '$userid'";
			$updated_row = $this->db->update($query );
			if($updated_row){
				$msg = "<span class = 'success'>User Disabled!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>User Not Disabled</span>";
				return $msg;
			}
		}
		 public function enbleUser($userid){
			$query = "update tbl_user set status = '0' where userid = '$userid'";
			$updated_row = $this->db->update($query );
			if($updated_row){
				$msg = "<span class = 'success'>User Enabled!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>User Not Enabled</span>";
				return $msg;
			}
		}
	       public function delUser($userid){
			$query = "delete from tbl_user where userid = '$userid'";
			$deldata = $this->db->delete($query);
			if($deldata){
				$msg = "<span class = 'success'>User Removed!!!</span>";
				return $msg;
			}
			else{
				$msg = "<span class = 'error'>Error....User Not Removed</span>";
				return $msg;
			}
			
		}
		   }
	
	
		
			


	
?>