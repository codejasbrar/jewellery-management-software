<?php
//error_reporting(0);
session_start();
include 'database/dbconfig.php';
include_once('lib/dbfunctions.php');

$data = new Databasefunctions();

?>
<?php

if($_REQUEST['action']=='following'){
	
	$users_id=$_REQUEST['users_id'];
	$following_id=$_SESSION['user_id'];
	
	  $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),  
           'following_id'          =>     mysqli_real_escape_string($con, $following_id)  
      );  
      if($insert_id=$data->insert('following', $insert_data))  
      {  
		  //echo $post_id;
           $success_message = 'Post Inserted';  
      }       
	
	
}



if($_REQUEST['action']=='like'){
	
	$post_id=mysqli_real_escape_string($con,$_REQUEST['post_id']);
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	$total_likes=0;
	
	$sqlpost="SELECT * FROM post WHERE id='$post_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
           $row = mysqli_fetch_assoc($result);
	      $total_likes=$row['likes'];
	
	  $sqlpost="SELECT * FROM likes WHERE post_id='$post_id' AND user_id='$users_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
	  $row_count=mysqli_num_rows($result);
      if($row_count > 0)
      {
         $sqldel="DELETE FROM likes WHERE post_id='$post_id' AND user_id='$users_id'";
		 $resultdel = mysqli_query($con, $sqldel);
		 $total_likes=$total_likes-1; 
		  
	  }
	  else
	  {
		  
		  $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),  
           'post_id'          =>     mysqli_real_escape_string($con, $post_id)  
          );  
         if($insert_id=$data->insert('likes', $insert_data))  
          {  
		  //echo $post_id;
           $success_message = 'Post Inserted';  
		   $total_likes=$total_likes+1; 	 
			 
          }  
		  
		  
	  }
	
	  if($total_likes<0)
	  {
	    $total_likes=0;
	  }
	 $update_data = array(  
           'likes'     =>     mysqli_real_escape_string($con, $total_likes)
      );  
      $where_condition = array(  
           'id'     =>     $post_id  
      );  
      if($data->update("post", $update_data, $where_condition))  
      {  
		  if($total_likes==0)
	      {
	        $total_likes='';
	      }
         echo $total_likes;  
      }  
	
	
	
}


if($_REQUEST['action']=='repost'){
	
	$post_id=mysqli_real_escape_string($con,$_REQUEST['post_id']);
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	$total_reposts=0;
	
	$sqlpost="SELECT * FROM post WHERE id='$post_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
           $row = mysqli_fetch_assoc($result);
	      $total_reposts=$row['reposts'];
	      $description=$row['description'];
	
	  $sqlpost="SELECT * FROM reposts WHERE post_id='$post_id' AND user_id='$users_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
	  $row_count=mysqli_num_rows($result);
      if($row_count > 0)
      {
        // $sqldel="DELETE FROM reposts WHERE post_id='$post_id' AND user_id='$users_id'";
		// $resultdel = mysqli_query($con, $sqldel);
		// $total_reposts=$total_reposts-1; 
		  
	  }
	  else
	  {
		  
		  $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),  
           'post_id'          =>     mysqli_real_escape_string($con, $post_id)  
          );  
         if($insert_id=$data->insert('reposts', $insert_data))  
          {  
		  //echo $post_id;
		   $repost_id=$insert_id;	 
           $success_message = 'Post Inserted';  
		   $total_reposts=$total_reposts+1; 	 
			 
          }  
		  
		  
		  
		  
		   $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),
		   'description'          =>     mysqli_real_escape_string($con, $description),	   
           'repost_id'          =>     mysqli_real_escape_string($con, $repost_id)  
          );  
         if($insert_id=$data->insert('post', $insert_data))  
          {  
		   $new_post_id=$insert_id;
           $success_message = 'Post Inserted'; 	 
			 
          } 
		  
		  
		  $sqldata="SELECT * FROM datatable WHERE post_id='$post_id'";
	       $resultdata = mysqli_query($con, $sqldata);  
           while($row_data = mysqli_fetch_assoc($resultdata))  
           {    
			   $files=$row_data['files'];
			   $category=$row_data['category'];
			   
			   
			   $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),  
           'post_id'          =>     mysqli_real_escape_string($con, $new_post_id),
			'category'     =>     mysqli_real_escape_string($con, $category),  
           'files'          =>     mysqli_real_escape_string($con, $files)				
							
           );  
           if($photo_id=$data->insert('datatable', $insert_data))  
           {  
		      //echo $photo_id;
               $success_message = 'Post Inserted';  
           }   
			   
			   
		   }
		  
		  
		  
		  
		  
		   if($total_reposts<0)
	  {
	    $total_reposts=0;
	  }
	 $update_data = array(  
           'reposts'     =>     mysqli_real_escape_string($con, $total_reposts)
      );  
      $where_condition = array(  
           'id'     =>     $post_id  
      );  
      if($data->update("post", $update_data, $where_condition))  
      {  
		  
         
      }  
		  
		  
		  
		  
		  
		  
	  }
	
	 if($total_reposts==0)
	      {
	        $total_reposts='';
	      }
	echo $total_reposts;  
	
	
}




if($_REQUEST['action']=='show_post'){
	
	$last_post_id=0;
	  $count_post=0;
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	$last_post_id=mysqli_real_escape_string($con,$_REQUEST['last_post_id']);
	
	 $sqlpostp="SELECT DISTINCT(post.id) FROM post LEFT JOIN following ON post.user_id=following.following_id WHERE (post.user_id='$users_id' OR post.user_id=following.following_id) AND post.id>'$last_post_id' ORDER BY id DESC";
	  $resultp = mysqli_query($con, $sqlpostp);  
	 while($rowp = mysqli_fetch_assoc($resultp))  
           {
	  $users_post_id=$rowp['id'];
		  if($count_post==0){
			   $last_post_id=$users_post_id;
			   ?>
	             <input type="hidden" name="last_post_id" class="last_post_id_textbox last_post_id" value="<?php echo $last_post_id;?>">
	
	         <?php
		   }
		 $count_post=$count_post+1;
	$sqlpost="SELECT * FROM post WHERE id='$users_post_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
           $row = mysqli_fetch_assoc($result);  
             
			   $row_user_id=$row['user_id'];
			   
			   $sqlusers="SELECT * FROM users WHERE id='$row_user_id'";
	           $resultusers = mysqli_query($con, $sqlusers);  
               $row_users = mysqli_fetch_assoc($resultusers);  
			   
			   $users_profile_photo='icons/upload_profile_pic.png';
	           if($row_users['photo']!=''){
				   $users_profile_photo=$row_users['photo'];
			   }
			   
			   $users_fullname=ucfirst($row_users['fullname']);
			   $users_name=$row_users['username'];
			   
			   $row_post_id=$row['id'];
			   $post_description=$row['description'];
			   $post_time=$data->humanTiming(strtotime($row['created']));
			   
			   $total_likes=$row['likes'];
			   $total_reposts=$row['reposts'];
			   $total_comments=$row['comments'];
			   if($total_likes==0){
				   $total_likes='';
			   }
			   if($total_reposts==0){
				   $total_reposts='';
			   }
			   if($total_comments==0){
				   $total_comments='';
			   }
                ?>
	              
	             
   <div class="middle_content post_<?php echo $users_post_id;?>">
	   
	  <div class="post_header">   
	   
        <div class="post_profile_image"><img src="<?php echo $users_profile_photo;?>"></div>
		 <div class="post_header_name_details">
	       <span class="post_user_name">&nbsp; <?php echo $users_fullname;?> </span><br>
		   <span class="post_user_profile_name">&nbsp; <?php echo $users_name;?> - <?php echo $post_time;?> </span>	 
		 </div>	  
	      <div class="post_share_icon"><img src="icons/share.png"></div>
		  
	  </div>	 
	   
	  <div class="post_body">
	   <p style="padding: 5px;"><?php echo $post_description;?></p>
	   
	   <?php 
			$sqldata="SELECT * FROM datatable WHERE post_id='$row_post_id'";
	  $resultdata = mysqli_query($con, $sqldata);  
           while($row_data = mysqli_fetch_assoc($resultdata))  
           {    
			   $data_post=$row_data['files'];
			   $data_category=$row_data['category'];
			   
			   if($data_category=='photo'){
				   ?>
				   <img src="<?php echo $data_post;?>">
		         <?php
			   }
			   
			   if($data_category=='video'){
				   ?>
				   <video src="<?php echo $data_post;?>" width="100%"  controls=""></video>
					   
		         <?php
			   }
		   }
			   
			 
		  $sqllikes="SELECT * FROM likes WHERE post_id='$row_post_id' ORDER BY id DESC";
	  $resultlikes = mysqli_query($con, $sqllikes);  
           while($row_likes = mysqli_fetch_assoc($resultlikes))  
           {  
			
			 $likes_user_id=$row_likes['user_id'];
			   
			 $sqllikesusers="SELECT * FROM users WHERE id='$likes_user_id'";
	           $resultlikesusers = mysqli_query($con, $sqllikesusers);  
               $row_likes_users = mysqli_fetch_assoc($resultlikesusers); 
			   
			   if($total_likes<3){
				   
			   }
		   }
		?>	   
		  
	    
		 
		<span class="post_like">Liked by <span class="post_user_name">Name1,Name2,</span> and <span class="post_user_name">3 others</span></span>  
		  
	  </div>  
		 
	   
	  <div class="post_footer"> 
		 <br>
	    <div class="post_like_repost_comment_options">
			
		  <div class="post_like_repost_comment_options_img">
			  <div class="post_like_repost_comment_options_combine pointer">
			  <img src="icons/like.png" onClick="like_post('<?php echo $users_post_id;?>')">
			  <span class="post_like_repost_comment_options_text total_likes_<?php echo $users_post_id;?>"><?php echo $total_likes;?></span>
			  </div>	  
		  </div>	  
			
		  <div class="post_like_repost_comment_options_img">
			  <div class="post_like_repost_comment_options_combine pointer">
			  <img src="icons/repost.png" onClick="repost_post('<?php echo $users_post_id;?>')">
			<span class="post_like_repost_comment_options_text total_reposts_<?php echo $users_post_id;?>"><?php echo $total_reposts;?></span>
			  </div>
		  </div>	  
			
		  <div class="post_like_repost_comment_options_img">
			  <div class="post_like_repost_comment_options_combine pointer">
			  <img src="icons/comments.png">
			<span class="post_like_repost_comment_options_text"><?php echo $total_comments;?></span>
			  </div>
		  </div>	  
			
		  <div class="post_like_repost_comment_options_img">
			  <div class="post_like_repost_comment_options_combine pointer">
			  <img src="icons/options.png" onClick="$('.post_options_<?php echo $users_post_id;?>').show();">
				  
				  <div class="post_options post_options_<?php echo $users_post_id;?>" style="display: none;">
					  
			  <!--a href="#!" onclick="return false;"><img src="icons/copylink.png">Copy link to Post</a-->
			   <a href="#!" onclick="copylink_post('<?php echo $users_post_id;?>');"><img src="icons/copylink.png">Copy link to Post</a>		  
			  <a href="#" id="post_options_add_bookmarks_<?php echo $users_post_id;?>" onclick="add_bookmarks('<?php echo $users_post_id;?>');"><img src="icons/bookmarks.png">Add Post to Bookmarks</a>
			  <a href="#" onclick="delete_post('<?php echo $users_post_id;?>');"><img src="icons/deletepost.png">Delete Posts</a>
			  <a href="#" onclick="dislike_post('<?php echo $users_post_id;?>');"><img src="icons/dislike.png">I don't like this Post</a>
			  <a href="#" onclick="report_post('<?php echo $users_post_id;?>');"><img src="icons/report.png">Report this Post</a>		  
			  <a href="#" onclick="unfollow_user('<?php echo $row_user_id;?>');"><img src="icons/unfollow.png">Unfollow <?php echo $users_name;?></a>
			  <a href="#" onclick="block_user('<?php echo $row_user_id;?>');"><img src="icons/block.png">Block <?php echo $users_name;?></a>	  
			  <a href="#" onclick="mute_user('<?php echo $row_user_id;?>');"><img src="icons/mute.png">Mute <?php echo $users_name;?></a>	  
				  
			  </div>
				  
				  
			  </div>
		  </div>	  
			
	    </div>	 
		 
	  </div>	 
	   
	   
   </div>
<?php
		 
	 }
	
}


if($_REQUEST['action']=='add_bookmarks')
{
	
	$post_id=mysqli_real_escape_string($con,$_REQUEST['post_id']);
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	
	 $sqlpost="SELECT * FROM bookmarks WHERE post_id='$post_id' AND user_id='$users_id' ORDER BY id DESC";
	  $result = mysqli_query($con, $sqlpost);  
	  $row_count=mysqli_num_rows($result);
      if($row_count > 0)
      {
        // $sqldel="DELETE FROM bookmarks WHERE post_id='$post_id' AND user_id='$users_id'";
		// $resultdel = mysqli_query($con, $sqldel);
		// $total_reposts=$total_reposts-1; 
		  
	  }
	  else
	  {
		  
		  $insert_data = array(  
           'user_id'     =>     mysqli_real_escape_string($con, $users_id),  
           'post_id'          =>     mysqli_real_escape_string($con, $post_id)  
          );  
         if($insert_id=$data->insert('bookmarks', $insert_data))  
          {  
		     $total_bookmarks=0;
			 
			 $sqlusers="SELECT * FROM users WHERE id='$users_id'";
	           $resultusers = mysqli_query($con, $sqlusers);  
               $row_users = mysqli_fetch_assoc($resultusers); 
			 
			 $total_bookmarks=$row_users['bookmarks'];
			 
			 $total_bookmarks=$total_bookmarks+1;
			 
			 $update_data = array(  
              'bookmarks'     =>     mysqli_real_escape_string($con, $total_bookmarks)
             );  
            $where_condition = array(  
              'id'     =>     $users_id  
             );  
            if($data->update("users", $update_data, $where_condition))  
            {  
		        
            }  
			 
			 
			 
		   
			 
          }  
		 
	  }
	
}



if($_REQUEST['action']=='delete_post')
{
	
	$post_id=mysqli_real_escape_string($con,$_REQUEST['post_id']);
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	
	 
         $sqldel="DELETE FROM post WHERE id='$post_id' AND user_id='$users_id'";
		 $resultdel = mysqli_query($con, $sqldel);
	
	     $sqldel="DELETE FROM datatable WHERE post_id='$post_id' AND user_id='$users_id'";
		 $resultdel = mysqli_query($con, $sqldel);
	
	     $sqldel="DELETE FROM likes WHERE post_id='$post_id'";
		 $resultdel = mysqli_query($con, $sqldel);
	
		  
	  }

if($_REQUEST['action']=='unfollow_user')
{
	
	$unfollow_users_id=mysqli_real_escape_string($con,$_REQUEST['unfollow_users_id']);
	$users_id=mysqli_real_escape_string($con,$_SESSION['user_id']);
	
	 
         $sqldel="DELETE FROM following WHERE user_id='$unfollow_users_id' AND following_id='$users_id'";
		 $resultdel = mysqli_query($con, $sqldel);
	
		  
	  }
?>