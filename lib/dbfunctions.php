<?php
/*
define('DB_SERVER','localhost');
define('DB_USER','root'); 
define('DB_PASS' ,'');  // password 
define('DB_NAME', 'oopdb');  // database name is oopdb
*/
include_once('database/dbconfig.php');
/*
define('DB_SERVER',$DB_SERVER);
define('DB_USER',$DB_USER); 
define('DB_PASS' ,$DB_PASS);  
define('DB_NAME', $DB_NAME);  
*/
class Databasefunctions
{
	

//public $con; 
//Constructor functions are called automatically whenever an object is created.	
function __construct()
{
//create connection	
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}

// for username availblty
public function usernameavailblty($uname) {
$result =mysqli_query($this->dbh,"SELECT username FROM users WHERE username='$uname'");
return $result;

}


// Function for registration
	public function registration($fullname,$username,$email,$pasword)
	{
	$retdata=mysqli_query($this->dbh,"insert into users(fullname,username,email,password) values('$fullname','$username','$email','$pasword')");
	return $retdata;
	}

// Function for Login
public function login($email,$password)
	{
	$email = mysqli_real_escape_string($this->dbh, $email);
    $password = mysqli_real_escape_string($this->dbh, $password);
	$result=mysqli_query($this->dbh,"select id,fullname from users where (email='$email' OR phone_no='$email') and password='$password'");
	return $result; // return true if username and password match
	}

	
	// Function for validation
	public function validation($fullname,$username,$email,$pasword)
	{
	
	$code="";	
	$error="";
		
 if(empty($fullname))
 {
  $error = "enter your fullname !";
  $code = 1;
 }
 else if(!ctype_alpha($fullname))
 {
  $error = "letters only !";
  $code = 1;
 }
 else if(empty($username))
 {
  $error = "enter your username !";
  $code = 2;
 }			
 else if(empty($email))
 {
  $error = "enter your email !";
  $code = 3;
 }
 else if(!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email))
 {
  $error = "not valid email !";
  $code = 3;
 }
 else if(empty($pasword))
 {
  $error = "enter password !";
  $code = 4;
 }
 else if(strlen($pasword) < 4 )
 {
  $error = "Minimum 4 characters !";
  $code = 4;
 }			
 
 
		
		
	return $code.''.$error;
	}




   public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->dbh, $string))  
           {  
                //return true;  
			    return mysqli_insert_id($this->dbh);
           }  
           else  
           {  
                echo mysqli_error($this->dbh);  
           }  
      }  
      public function select($table_name)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name."";  
           $result = mysqli_query($this->dbh, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  
      public function select_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->dbh, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  
      public function update($table_name, $fields, $where_condition)  
      {  
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           /*This code will convert array to string like this-  
           input - array(  
                'key1'     =>     'value1',  
                'key2'     =>     'value2'  
           )  
           output = key1 = 'value1', key2 = 'value2'*/  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           /*This code will convert array to string like this-  
           input - array(  
                'id'     =>     '5'  
           )  
           output = id = '5'*/  
           $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->dbh, $query))  
           {  
                return true;  
           }  
      }  




	
	   

      
	
	
	
	
	
	
	  public function compress_image($source_url, $destination_url, $quality) {

      $info = getimagesize($source_url);

          if ($info['mime'] == 'image/jpeg')
          $image = imagecreatefromjpeg($source_url);

          elseif ($info['mime'] == 'image/gif')
          $image = imagecreatefromgif($source_url);

          elseif ($info['mime'] == 'image/png')
          $image = imagecreatefrompng($source_url);

          imagejpeg($image, $destination_url, $quality);
          return $destination_url;
        }

	/*
	  function upload_files($file)  
      {  
           if(isset($file))  
           {  
                $extension = explode('.', $file["name"]);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/' . $new_name;  
                move_uploaded_file($file['tmp_name'], $destination);  
                return $new_name;  
           }  
      }  
	*/
	
	   function upload_files($file,$folder)  
      {  
           if(isset($file))  
           {  
                $file_name = $file['name'];
					$file_tmp = $file['tmp_name'];
					
					if(!empty($file_name)){
				  
				$fileNameCmps = explode(".", $file_name);
                    $fileExtension = strtolower(end($fileNameCmps));	
                    $upload_pic = md5(time() . $file_name) . $fileExtension;	 
						
						//move_uploaded_file($file_tmp, "../property_photo/2/".$property_id.$file_name);
						$target = $folder.$upload_pic;
						if(move_uploaded_file($file_tmp, $target))
						{
							return($target);
						}else{
							return false;
						}
						
					}
           }  
      }  
	  
	
	  function upload_file($file,$folder)  
      {  
           if(isset($file))  
           {  
                $file_name = $file['name'];
					$file_tmp = $file['tmp_name'];
					
					if(!empty($file_name)){
				
				$fileNameCmps = explode(".", $file_name);
                    $fileExtension = strtolower(end($fileNameCmps));	
                    $upload_pic = md5(time() . $file_name) . '.png';	 
						
						//move_uploaded_file($file_tmp, "../property_photo/2/".$property_id.$file_name);
						$target = $folder.$upload_pic;
						if($filenames = $this->compress_image($file_tmp, $target, 80))
						{
							return($target);
						}else{
							return false;
						}
						
					}
           }  
      }  
	
	
	    function upload_image_file($file)  
        {
			if(isset($file))
			{
				
				
					
					$file_name = $file['name'];
					$file_tmp = $file['tmp_name'];
					
					if(!empty($file_name)){
				
				$fileNameCmps = explode(".", $file_name);
                    $fileExtension = strtolower(end($fileNameCmps));	
                    $upload_pic = md5(time() . $file_name) . '.png';	 
						

						//move_uploaded_file($file_tmp, "../property_photo/2/".$property_id.$file_name);
						$target = "data/photo/".$upload_pic;
						$filenames = $this->compress_image($file_tmp, $target, 80);
						
						return($target);
					}
				
				
			}
			
		}
	
	     function upload_video_file($file)  
        {
			if(isset($file))  
           {
				$file_video_name = $file['name'];
		  $file_video_tmp = $file['tmp_name'];
			
					$fileNameCmps = explode(".", $file_video_name);
                    $fileExtension = strtolower(end($fileNameCmps));	
                   // $upload_pic1 = "data/video/".md5(time() . $file_video_name) . '.' . $fileExtension;	   
					  
                  $upload_video = md5(time() . $file_video_name) . '.' . $fileExtension; 
						

						//move_uploaded_file($file_tmp, "../property_photo/2/".$property_id.$file_name);
						$target = "data/video/".$upload_video;        
			
			
					if(move_uploaded_file($file_video_tmp, $target)){
						return $target;
					}else{
						return false;
					}
				    
				 
			 }
			
		}

	
	
function humanTiming ($time)
        {

            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
                31536000 => 'year',
                2592000 => 'month',
                604800 => 'week',
                86400 => 'day',
                3600 => 'hour',
                60 => 'minute',
                1 => 'second'
            );

            foreach ($tokens as $unit => $text) {
                if ($time < $unit) continue;
                $numberOfUnits = floor($time / $unit);
                return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s'.' ago':''.' ago');
            }

        }	
	
	
	
function email_validation($str) { 
    return (!preg_match( 
"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) 
        ? FALSE : TRUE; 
} 
  

function validate_phone_number($str){
	return (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $str)) 
        ? TRUE : FALSE; 
} 

function phone_validation($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}
	
	
	
	


}
?>