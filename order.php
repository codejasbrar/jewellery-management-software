<?php
//error_reporting(0);
include_once('lib/dbfunctions.php');
include_once('lib/dbfunction.php');

$data = new Databasefunctions();
?>

<?php
//print_r($_POST);

?>
<!--pre>
<?php //var_dump($_POST); ?>
</pre-->

<?php

	
if(isset($_POST['submit']) && $_POST['submit']=='create_order')
{
	
	
		  /*
		  $insert_data = array( 
           'customer_id'          =>     mysqli_real_escape_string($con, $main_customer_id),
		   'expedite_order' => mysqli_real_escape_string($con, $_POST['expedite_order']),
		   'due_date' => mysqli_real_escape_string($con, $_POST['due_date']),
		   'delivery_method' => mysqli_real_escape_string($con, $_POST['delivery_method']),
		   'payment_type' => mysqli_real_escape_string($con, $_POST['payment_type']),
		   'delivery_charge' => mysqli_real_escape_string($con, $_POST['delivery_charge']),	  
		   'deposit_paid' => mysqli_real_escape_string($con, $_POST['deposit_paid']),
		   'ordered_via' => mysqli_real_escape_string($con, $_POST['ordered_via']),
		   'ordered_notes' => mysqli_real_escape_string($con, $_POST['ordered_notes']),
		   'mould_in_stock' => mysqli_real_escape_string($con, $_POST['mould_in_stock']),
		   'moulds_in_stock' => mysqli_real_escape_string($con, $_POST['moulds_in_stock']),	  
		   'mould_id' => mysqli_real_escape_string($con, $_POST['mould_id']),
		   'mould_location' => mysqli_real_escape_string($con, $_POST['mould_location']),
		   'mould_pre_set_price' => mysqli_real_escape_string($con, $_POST['mould_pre_set_price']),	  
		   'mould_notes' => mysqli_real_escape_string($con, $_POST['mould_notes']),
		   'wax_notes' => mysqli_real_escape_string($con, $_POST['wax_notes']),
		   '3d_model_in_stock' => mysqli_real_escape_string($con, $_POST['3d_model_in_stock']),
		   'models_in_stock' => mysqli_real_escape_string($con, $_POST['models_in_stock']),	  
		   'model_id' => mysqli_real_escape_string($con, $_POST['model_id']),
		   'model_location' => mysqli_real_escape_string($con, $_POST['model_location']),
		   'model_pre_set_price' => mysqli_real_escape_string($con, $_POST['model_pre_set_price']),
		   'model_notes' => mysqli_real_escape_string($con, $_POST['model_notes']),	  
		   'special_instructions' => mysqli_real_escape_string($con, $_POST['special_instructions'])
          );
		  */
	
	      $order_status=mysqli_real_escape_string($con, $_POST['order_status']);
	
	       $insert_data = array( 
           'customer_id'          =>     mysqli_real_escape_string($con, $main_customer_id),
		   'expedite_order' => mysqli_real_escape_string($con, $_POST['expedite_order']),
		   'due_date' => mysqli_real_escape_string($con, $_POST['due_date']),
		   'delivery_method' => mysqli_real_escape_string($con, $_POST['delivery_method']),
		   'payment_type' => mysqli_real_escape_string($con, $_POST['payment_type']),
		   'delivery_charge' => mysqli_real_escape_string($con, $_POST['delivery_charge']),	  
		   'deposit_paid' => mysqli_real_escape_string($con, $_POST['deposit_paid']),
		   'ordered_via' => mysqli_real_escape_string($con, $_POST['ordered_via']),
		   'ordered_notes' => mysqli_real_escape_string($con, $_POST['ordered_notes']),  
		   'special_instructions' => mysqli_real_escape_string($con, $_POST['special_instructions']),
		   'total_price' => mysqli_real_escape_string($con, $_POST['total_price']),
		   'order_status' => mysqli_real_escape_string($con, $_POST['order_status'])	   
          );
		  if($order_id=$data->insert('orders', $insert_data))
		  {
			  //echo "<script>window.location.href='search_customer.php'</script>";
		  
	
	      $product_count=mysqli_real_escape_string($con, $_POST['product_count']);
	   
	      for($p=0;$p<=$product_count;$p++)
		  {
			  if(isset($_POST['product_type_'.$p]))
			   {	  
				  
			  $product_type=$_POST['product_type_'.$p];
			  $product_quantity=$_POST['product_quantity_'.$p];
			  $product_material=$_POST['product_material_'.$p];
			  $product_weight=$_POST['product_weight_'.$p];
			  $product_price=$_POST['product_price_'.$p];
			  $product_ex_vat_price=$_POST['product_ex_vat_price_'.$p];
			  
			   $product_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'product_type' => mysqli_real_escape_string($con, $product_type),
		   'product_quantity' => mysqli_real_escape_string($con, $product_quantity),
		   'material' => mysqli_real_escape_string($con, $product_material),
		   'weight' => mysqli_real_escape_string($con, $product_weight),
		   'price' => mysqli_real_escape_string($con, $product_price),	  
		   'ex_vat_price' => mysqli_real_escape_string($con, $product_ex_vat_price)
          );
		  if($product_id=$data->insert('products', $product_insert_data))
		  {
			  //echo "<script>window.location.href='search_customer.php'</script>";
			  
			  /////////////////////////////// products photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['product_photoupload_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['product_photoupload_'.$p],'data/products/photo/'))
		              {
						  
						  $category='products';
						  $files_type='photo';
						  
						  $photo_insert_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $product_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            );  
                            if($photo_id=$data->insert('datatable', $photo_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
						  
						  
					  }
						
					}
			  
			   /////////////////////////////// products photo insertion end ///////////////////
			  
			  
			   /////////////////////////////// products attachment insertion start ///////////////////
			  
			                $doc_file_name = $_FILES['product_attach_files_'.$p]['name'];
		            if(!empty($doc_file_name))
		            {
			
		              if($doc = $data->upload_file($_FILES['product_attach_files_'.$p],'data/products/doc/'))
		              {
						  $update_data = array(  
                           'attach_files'     =>     mysqli_real_escape_string($con, $doc)
							);  
                          $where_condition = array(  
                            'id'     =>     $product_id  
                            );  
                          if($data->update("products", $update_data, $where_condition))  
                            {  
           
                            } 
						  
					  }
						
					}
			  
			  
			  /////////////////////////////// products attachment insertion end ///////////////////
			  
			  
			  
			  
		  }
			  
		  }
			  
			  
		  }
	
	     
	//////////////////////////////////////// mould insertion start ///////////////////////////////		  
			  
			   $mould_count=mysqli_real_escape_string($con, $_POST['mould_count']);
	   
	      for($p=0;$p<=$mould_count;$p++)
		  {
			  if(isset($_POST['mould_in_stock_'.$p]) && $_POST['mould_in_stock_'.$p]=='yes')
			   {	  
			
			  
			   $mould_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'mould_in_stock' => mysqli_real_escape_string($con, $_POST['mould_in_stock_'.$p]),
		   'moulds_in_stock' => mysqli_real_escape_string($con, $_POST['moulds_in_stock_'.$p]),	  
		   'mould_id' => mysqli_real_escape_string($con, $_POST['mould_id_'.$p]),
		   'mould_location' => mysqli_real_escape_string($con, $_POST['mould_location_'.$p]),
		   'mould_pre_set_price' => mysqli_real_escape_string($con, $_POST['mould_pre_set_price_'.$p]),	  
		   'mould_notes' => mysqli_real_escape_string($con, $_POST['mould_notes_'.$p]),
		   'wax_notes' => mysqli_real_escape_string($con, $_POST['wax_notes_'.$p])
          );
		  if($moulds_id=$data->insert('moulds', $mould_insert_data))
		  {
			  
	
	       /////////////////////////////// mould photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['mould_photo_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['mould_photo_'.$p],'data/moulds/photo/'))
		              {
						  
						  $category='moulds';
						  $files_type='photo';
						  
						  $photo_insert_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $moulds_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            );  
                            if($photo_id=$data->insert('datatable', $photo_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
						  
						  
					  }
						
					}
			  
			   /////////////////////////////// mould photo insertion end ///////////////////
	
		  }
			  
			  }
		  }
	    /////////////////////////////// mould insertion end //////////////////////////////////////////////    
			  
			  
	////////////////////////////////////// model insertion start //////////////////////////////////////////		  
			  
		$model_count=mysqli_real_escape_string($con, $_POST['model_count']);
	   
	      for($p=0;$p<=$model_count;$p++)
		  {
			  if(isset($_POST['3d_model_in_stock_'.$p]) && $_POST['3d_model_in_stock_'.$p]=='yes')
			   {	  
			
			  
			   $models_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   '3d_model_in_stock' => mysqli_real_escape_string($con, $_POST['3d_model_in_stock_'.$p]),
		   'models_in_stock' => mysqli_real_escape_string($con, $_POST['models_in_stock_'.$p]),	  
		   'model_id' => mysqli_real_escape_string($con, $_POST['model_id_'.$p]),
		   'model_location' => mysqli_real_escape_string($con, $_POST['model_location_'.$p]),
		   'model_pre_set_price' => mysqli_real_escape_string($con, $_POST['model_pre_set_price_'.$p]),
		   'model_notes' => mysqli_real_escape_string($con, $_POST['model_notes_'.$p])
          );
		  if($models_id=$data->insert('models', $models_insert_data))
		  {	  
			  
	
	       /////////////////////////////// models photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['model_photo_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['model_photo_'.$p],'data/models/photo/'))
		              {
						  
						  $category='models';
						  $files_type='photo';
						  
						  $photo_insert_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $models_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            );  
                            if($photo_id=$data->insert('datatable', $photo_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
						  
						  
					  }
						
					}
			  
			   /////////////////////////////// model photo insertion end ///////////////////
			  
		  }
			  }
			  
		  }
		
	////////////////////////////////////// model insertion end //////////////////////////////////////////				  
				  
	
	   //////////////////////////// departments insertion start /////////////////////////////////////////
			  $worksop=0;
			  $outsource=0;
	
	                  $sqldepart="SELECT * FROM department_list ORDER BY department_order ASC";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($row = mysqli_fetch_assoc($resultdepart))
		   {
			   
			   $department_list_id=$row['id'];
			   $department_name=$row['department_name'];
			   $department_price=$_POST['department_'.$department_list_id.'_price'];
			   $department_include=$_POST['department_'.$department_list_id];
			   
			   if($department_include=='yes'){
				   
				   if($department_name=='Workshop'){
				     $worksop=1;
			       }
				   
				   if($department_name=='Outsource'){
				     $outsource=1;
			       }
				   
			   }
			   
			    $department_insert_data = array(   
                           'order_id'     =>     mysqli_real_escape_string($con, $order_id),
			               'department_id'     =>     mysqli_real_escape_string($con, $department_list_id),
			               'department_name'     =>     mysqli_real_escape_string($con, $department_name),				  
                           'department_price'          =>     mysqli_real_escape_string($con, $department_price),
					       'department_include'          =>     mysqli_real_escape_string($con, $department_include)
                            );  
                            if($department_id=$data->insert('department', $department_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
			   
			   
		   }
	         
	 /////////////////////////////////  departments insertion end ////////////////////////////////////////////
	
	   /////////////////////////////////////  workshop insertion start //////////////////////////////////////
	    if($worksop==1){
			
	             
		  $workshop_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'cleaning' => mysqli_real_escape_string($con, $_POST['cleaning']),
		   'cleaning_price' => mysqli_real_escape_string($con, $_POST['cleaning_price']),
		   'polishing' => mysqli_real_escape_string($con, $_POST['polishing']),
		   'polishing_price' => mysqli_real_escape_string($con, $_POST['polishing_price']),
		   'sandblasting' => mysqli_real_escape_string($con, $_POST['sandblasting']),	  
		   'matt_finish' => mysqli_real_escape_string($con, $_POST['matt_finish']),
		   'high_polish' => mysqli_real_escape_string($con, $_POST['high_polish']),
		   'fine_polish' => mysqli_real_escape_string($con, $_POST['fine_polish']),
		   'pin_barrel' => mysqli_real_escape_string($con, $_POST['pin_barrel']),
		   'assembly' => mysqli_real_escape_string($con, $_POST['assembly']),	  
		   'assembly_price' => mysqli_real_escape_string($con, $_POST['assembly_price']),
		   'assembly_notes' => mysqli_real_escape_string($con, $_POST['assembly_notes']),
		   'plating' => mysqli_real_escape_string($con, $_POST['plating']),	  
		   'plating_price' => mysqli_real_escape_string($con, $_POST['plating_price']),
		   'plating_type' => mysqli_real_escape_string($con, $_POST['plating_type']),
		   'plating_thickness' => mysqli_real_escape_string($con, $_POST['plating_thickness']),
		   'plating_colours' => mysqli_real_escape_string($con, $_POST['plating_colours'])
          );
		  if($workshop_id=$data->insert('workshop', $workshop_insert_data))
		  {
			  //echo "<script>window.location.href='search_customer.php'</script>";
		  }
		
		}
	
	  //////////////////////////////////////  workshop insertion end  ////////////////////////////////////////////
	
	
	/////////////////////////////////////  outsource insertion start //////////////////////////////////////
	   
		if($outsource==1){
			  
	             
		  $outsource_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'outsource_plating' => mysqli_real_escape_string($con, $_POST['outsource_plating']),
		   'plating_company' => mysqli_real_escape_string($con, $_POST['plating_company']),
		   'hallmark' => mysqli_real_escape_string($con, $_POST['hallmark']),
		   'hallmark_outsourcing_company' => mysqli_real_escape_string($con, $_POST['hallmark_outsourcing_company']),
		   'hallmark_notes' => mysqli_real_escape_string($con, $_POST['hallmark_notes']),	  
		   'outsource_setting' => mysqli_real_escape_string($con, $_POST['outsource_setting']),
		   'setting_company' => mysqli_real_escape_string($con, $_POST['setting_company']),
		   'outsource_engraving' => mysqli_real_escape_string($con, $_POST['outsource_engraving']),
		   'engraving_company' => mysqli_real_escape_string($con, $_POST['engraving_company'])
          );
		  if($outsource_id=$data->insert('outsource', $outsource_insert_data))
		  {
			  //echo "<script>window.location.href='search_customer.php'</script>";
		  }
	
		}
	  /////////////////////////////////////  outsource insertion end  ////////////////////////////////////////////
	
	         ///////////////////////////// customer signanture start ////////////////////////////////////////
			  if(isset($_POST['signature']) && !empty($_POST['signature'])){
				  
			  $img = $_POST['signature'];
                $datas = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
			    $signature='data/customers/signature/'.$main_customer_id.'_'.$order_id.'.png';
                 if(file_put_contents($signature, $datas))
				 {
					 $sign_update_data = array(  
                           'signature'     =>     mysqli_real_escape_string($con, $signature)
							);  
                          $sign_where_condition = array(  
                            'id'     =>     $order_id  
                            );  
                          if($data->update("orders", $sign_update_data, $sign_where_condition))  
                            {  
           
                            } 
				 }
			
			  }
		
			 ///////////////////////////// customer signature end /////////////////////////////////////////// 
			  
			   
	
		  }
	
	 echo "<script>alert('Data inserted successfully');</script>";
	
	if($order_status=='estimate'){
		echo "<script>window.location.href='search_estimate.php'</script>";
	}else{
		echo "<script>window.location.href='search_order.php'</script>";
	}
	
		
}
		





if(isset($_POST['submit']) && $_POST['submit']=='update_order')
{

     
	$order_status=mysqli_real_escape_string($con, $_POST['order_status']);
	
	    $update_data = array( 
           'customer_id'          =>     mysqli_real_escape_string($con, $main_customer_id),
		   'expedite_order' => mysqli_real_escape_string($con, $_POST['expedite_order']),
		   'due_date' => mysqli_real_escape_string($con, $_POST['due_date']),
		   'delivery_method' => mysqli_real_escape_string($con, $_POST['delivery_method']),
		   'payment_type' => mysqli_real_escape_string($con, $_POST['payment_type']),
		   'delivery_charge' => mysqli_real_escape_string($con, $_POST['delivery_charge']),	  
		   'deposit_paid' => mysqli_real_escape_string($con, $_POST['deposit_paid']),
		   'ordered_via' => mysqli_real_escape_string($con, $_POST['ordered_via']),
		   'ordered_notes' => mysqli_real_escape_string($con, $_POST['ordered_notes']),  
		   'special_instructions' => mysqli_real_escape_string($con, $_POST['special_instructions']),
		   'total_price' => mysqli_real_escape_string($con, $_POST['total_price']),
		   'order_status' => mysqli_real_escape_string($con, $_POST['order_status'])
          );
	       $where_condition = array(  
               'id'     =>     $order_id  
            ); 
		  if($order_ids=$data->update("orders", $update_data, $where_condition)) 
		  {
			  
//////////////////////////////////////////////  Products start  ///////////////////////////////////////////////
			  
			  $product_count=mysqli_real_escape_string($con, $_POST['product_count']);
	   
	      for($p=0;$p<=$product_count;$p++)
		  {
			 
			  
			  if(isset($_POST['product_type_'.$p]))
			   {	  
				  
			  $product_type=$_POST['product_type_'.$p];
			  $product_quantity=$_POST['product_quantity_'.$p];
			  $product_material=$_POST['product_material_'.$p];
			  $product_weight=$_POST['product_weight_'.$p];
			  $product_price=$_POST['product_price_'.$p];
			  $product_ex_vat_price=$_POST['product_ex_vat_price_'.$p];
				  
				  
				   $product_insert_update_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'product_type' => mysqli_real_escape_string($con, $product_type),
		   'product_quantity' => mysqli_real_escape_string($con, $product_quantity),
		   'material' => mysqli_real_escape_string($con, $product_material),
		   'weight' => mysqli_real_escape_string($con, $product_weight),
		   'price' => mysqli_real_escape_string($con, $product_price),	  
		   'ex_vat_price' => mysqli_real_escape_string($con, $product_ex_vat_price)
          );
			  
			  }
				  
			  if(isset($_POST['product_id_'.$p])){
				  
				  $product_id=$_POST['product_id_'.$p];
				  
			$product_where_condition = array(  
               'id'     =>     $product_id  
            ); 
		   if($product_ids=$data->update("products", $product_insert_update_data, $product_where_condition)) 
		   { 
			  
		   }
				  
				  
				  
				  
		}else{
			  
			  if(isset($_POST['product_type_'.$p]))
			   {	  
				  
			  
		             if($product_id=$data->insert('products', $product_insert_update_data))
		             {
			  
			  
		             }
			  
		       }
		  }
			  
			  if($product_id>0)
			  {
				  
				   /////////////////////////////// products photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['product_photoupload_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['product_photoupload_'.$p],'data/products/photo/'))
		              {
						  
						  $category='products';
						  $files_type='photo';
						  
						  $photo_insert_update_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $product_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            ); 
						  
						   $sqlpro="SELECT * FROM datatable WHERE post_id='$product_id' AND category='$category'";
	                       $resultpro = mysqli_query($con, $sqlpro);  
                           $rowpro = mysqli_fetch_assoc($resultpro);
						   if($rowpro>0) 
		                   {
							   $datatable_id=$rowpro['id'];
							   $product_where_condition = array(  
                                 'id'     =>     $datatable_id  
                                ); 
		  
							 if($photo_id=$data->update('datatable', $photo_insert_update_data, $product_where_condition))  
                             {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }   
						  
							   
						   }else{
							   
						    
                             if($photo_id=$data->insert('datatable', $photo_insert_update_data))  
                             {  
		                         //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }   
						  
						   }
						  
					  }
						
					}
			  
			   /////////////////////////////// products photo insertion end ///////////////////
				  
				  
				   /////////////////////////////// products attachment insertion start ///////////////////
			  
			                $doc_file_name = $_FILES['product_attach_files_'.$p]['name'];
		            if(!empty($doc_file_name))
		            {
			
		              if($doc = $data->upload_file($_FILES['product_attach_files_'.$p],'data/products/doc/'))
		              {
						  $update_data = array(  
                           'attach_files'     =>     mysqli_real_escape_string($con, $doc)
							);  
                          $where_condition = array(  
                            'id'     =>     $product_id  
                            );  
                          if($data->update("products", $update_data, $where_condition))  
                            {  
           
                            } 
						  
					  }
						
					}
			  
			  
			  /////////////////////////////// products attachment insertion end ///////////////////
			  
			  
			  
				  
			  }
			  
			  
			  
			  
		  }
	
			  
//////////////////////////////////////////////  Products end  /////////////////////////////////////////////////		
			  
//////////////////////////////////////// mould insertion start ///////////////////////////////		  
			  
			   $mould_count=mysqli_real_escape_string($con, $_POST['mould_count']);
	   
	      for($p=0;$p<=$mould_count;$p++)
		  {
			    
			
			  
			   $mould_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'mould_in_stock' => mysqli_real_escape_string($con, $_POST['mould_in_stock_'.$p]),
		   'moulds_in_stock' => mysqli_real_escape_string($con, $_POST['moulds_in_stock_'.$p]),	  
		   'mould_id' => mysqli_real_escape_string($con, $_POST['mould_id_'.$p]),
		   'mould_location' => mysqli_real_escape_string($con, $_POST['mould_location_'.$p]),
		   'mould_pre_set_price' => mysqli_real_escape_string($con, $_POST['mould_pre_set_price_'.$p]),	  
		   'mould_notes' => mysqli_real_escape_string($con, $_POST['mould_notes_'.$p]),
		   'wax_notes' => mysqli_real_escape_string($con, $_POST['wax_notes_'.$p])
          );
				  
		  if(isset($_POST['moulds_id_'.$p])){
				  
				  $moulds_id=$_POST['moulds_id_'.$p];
			  
			       $where_condition = array(  
                            'id'     =>     $moulds_id  
                            ); 
			    if(isset($_POST['mould_in_stock_'.$p]) && $_POST['mould_in_stock_'.$p]=='yes')
			   {	
			     if($moulds_ids=$data->update('moulds', $mould_insert_data,$where_condition))
		         {
					 
					 
					 
				 }
					
			   }else{
					
					$where='id='.$moulds_id;
		           $delete_col=deleteWhere($con,'moulds',$where);
				   
			   }
			  
		  }else{
			  
			  if(isset($_POST['mould_in_stock_'.$p]) && $_POST['mould_in_stock_'.$p]=='yes')
			   {	
			  
			  if($moulds_id=$data->insert('moulds', $mould_insert_data))
		      {
				  
			  }
			  
			  }
		  }
				  
		  if($moulds_id>0)
		  {
			  
	
	       /////////////////////////////// mould photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['mould_photo_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['mould_photo_'.$p],'data/moulds/photo/'))
		              {
						  
						  $category='moulds';
						  $files_type='photo';
						  
						  $photo_insert_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $moulds_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            );  
						  
						  
						   $sqlmo="SELECT * FROM datatable WHERE post_id='$moulds_id' AND category='$category'";
	                       $resultmo = mysqli_query($con, $sqlmo);  
                           $rowmo = mysqli_fetch_assoc($resultmo);
						   if($rowmo>0) 
		                   {
							   $datatable_id=$rowmo['id'];
							   $mould_where_condition = array(  
                                 'id'     =>     $datatable_id  
                                ); 
		  
							 if($photo_id=$data->update('datatable', $photo_insert_data, $mould_where_condition))  
                             {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }   
							   
						   }else{
							   
							 if($photo_id=$data->insert('datatable', $photo_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
							   
							   
						   }
						  
						  
                            
						  
						  
						  
					  }
						
					}
			  
			   /////////////////////////////// mould photo insertion end ///////////////////
	
		  }
			  
			  
		  }
/////////////////////////////////////////////// mould insertion end //////////////////////////////////////////////    
			  
			  
			  
			  
////////////////////////////////////// model insertion start //////////////////////////////////////////		  
			  
		$model_count=mysqli_real_escape_string($con, $_POST['model_count']);
	   
	      for($p=0;$p<=$model_count;$p++)
		  {
			 	  
			 
			   $models_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   '3d_model_in_stock' => mysqli_real_escape_string($con, $_POST['3d_model_in_stock_'.$p]),
		   'models_in_stock' => mysqli_real_escape_string($con, $_POST['models_in_stock_'.$p]),	  
		   'model_id' => mysqli_real_escape_string($con, $_POST['model_id_'.$p]),
		   'model_location' => mysqli_real_escape_string($con, $_POST['model_location_'.$p]),
		   'model_pre_set_price' => mysqli_real_escape_string($con, $_POST['model_pre_set_price_'.$p]),
		   'model_notes' => mysqli_real_escape_string($con, $_POST['model_notes_'.$p])
          );
				  
				  
		 if(isset($_POST['models_id_'.$p])){
				  
				  $models_id=$_POST['models_id_'.$p];
			  
			       $where_condition = array(  
                            'id'     =>     $models_id  
                            ); 
			    if(isset($_POST['3d_model_in_stock_'.$p]) && $_POST['3d_model_in_stock_'.$p]=='yes')
			   {	
			     if($models_ids=$data->update('models', $models_insert_data,$where_condition))
		         {
					 
					 
					 
				 }
					
			   }else{
					
					$where='id='.$models_id;
		           $delete_col=deleteWhere($con,'models',$where);
				   
			   }
			  
		  }else{
			  
			  if(isset($_POST['3d_model_in_stock_'.$p]) && $_POST['3d_model_in_stock_'.$p]=='yes')
			   {	
			  
			  if($models_id=$data->insert('models', $models_insert_data))
		      {
				  
			  }
			  
			  }
		  }		  
				  
				  
		  if($models_id>0)
		  {  
			  
	
	       /////////////////////////////// models photo insertion start ///////////////////
			  
			   $photo_file_name = $_FILES['model_photo_'.$p]['name'];
		            if(!empty($photo_file_name))
		            {
			
		              if($photo = $data->upload_file($_FILES['model_photo_'.$p],'data/models/photo/'))
		              {
						  
						  $category='models';
						  $files_type='photo';
						  
						  $photo_insert_data = array(   
                           'post_id'     =>     mysqli_real_escape_string($con, $models_id),
			               'category'     =>     mysqli_real_escape_string($con, $category),
			               'files_type'     =>     mysqli_real_escape_string($con, $files_type),				  
                           'files'          =>     mysqli_real_escape_string($con, $photo)				
                            );  
						  
						   $sqlmo="SELECT * FROM datatable WHERE post_id='$models_id' AND category='$category'";
	                       $resultmo = mysqli_query($con, $sqlmo);  
                           $rowmo = mysqli_fetch_assoc($resultmo);
						   if($rowmo>0) 
		                   {
							   $datatable_id=$rowmo['id'];
							   $mould_where_condition = array(  
                                 'id'     =>     $datatable_id  
                                ); 
		  
							 if($photo_id=$data->update('datatable', $photo_insert_data, $mould_where_condition))  
                             {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }   
							   
						   }else{
							   
							 if($photo_id=$data->insert('datatable', $photo_insert_data))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
							   
							   
						   }
						  
						  
						  
						  
					  }
						
					}
			  
			   /////////////////////////////// model photo insertion end ///////////////////
			  
		  }
			  
			  
		  }
		
////////////////////////////////////// model insertion end //////////////////////////////////////////	
			  
			  
//////////////////////////// departments insertion start /////////////////////////////////////////
			  $worksop=0;
			  $outsource=0;
	
			  $dc=0;
	                  $sqldepart="SELECT * FROM department WHERE order_id='$order_id'";
	        $resultdepart = mysqli_query($con, $sqldepart);  
           while($row = mysqli_fetch_assoc($resultdepart))
		   {
			   
			    $dc=$dc+1;
			   
			   $department_list_id=$row['department_id'];
			   $department_name=$row['department_name'];
			   $department_price=$row['department_price'];
			   
			   $department_include=$_POST['department_'.$dc];
			   
			   $did=$row['id'];
			   
			   if($department_include=='yes'){
				   
				   if($department_name=='Workshop'){
				     $worksop=1;
			       }
				   
				   if($department_name=='Outsource'){
				     $outsource=1;
			       }
				   
				  $department_price=$_POST['department_'.$dc.'_price'];
				   
			   }
			   
			    $department_insert_data = array(   				  
                           'department_price'          =>     mysqli_real_escape_string($con, $department_price),
					       'department_include'          =>     mysqli_real_escape_string($con, $department_include)
                            );  
			                 $department_where_condition = array(  
                                 'id'     =>     $did  
                                );
                            if($department_id=$data->update('department', $department_insert_data,$department_where_condition))  
                            {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                            }   
						  
			   
			   
		   }
	         
/////////////////////////////////  departments insertion end ////////////////////////////////////////////
		  
		/////////////////////////////////////  workshop insertion start //////////////////////////////////////
			  
			   $workshop_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'cleaning' => mysqli_real_escape_string($con, $_POST['cleaning']),
		   'cleaning_price' => mysqli_real_escape_string($con, $_POST['cleaning_price']),
		   'polishing' => mysqli_real_escape_string($con, $_POST['polishing']),
		   'polishing_price' => mysqli_real_escape_string($con, $_POST['polishing_price']),
		   'sandblasting' => mysqli_real_escape_string($con, $_POST['sandblasting']),	  
		   'matt_finish' => mysqli_real_escape_string($con, $_POST['matt_finish']),
		   'high_polish' => mysqli_real_escape_string($con, $_POST['high_polish']),
		   'fine_polish' => mysqli_real_escape_string($con, $_POST['fine_polish']),
		   'pin_barrel' => mysqli_real_escape_string($con, $_POST['pin_barrel']),
		   'assembly' => mysqli_real_escape_string($con, $_POST['assembly']),	  
		   'assembly_price' => mysqli_real_escape_string($con, $_POST['assembly_price']),
		   'assembly_notes' => mysqli_real_escape_string($con, $_POST['assembly_notes']),
		   'plating' => mysqli_real_escape_string($con, $_POST['plating']),	  
		   'plating_price' => mysqli_real_escape_string($con, $_POST['plating_price']),
		   'plating_type' => mysqli_real_escape_string($con, $_POST['plating_type']),
		   'plating_thickness' => mysqli_real_escape_string($con, $_POST['plating_thickness']),
		   'plating_colours' => mysqli_real_escape_string($con, $_POST['plating_colours'])
          );
			  
			  
			   $sqlwork="SELECT * FROM workshop WHERE order_id='$order_id'";
	        $resultwork = mysqli_query($con, $sqlwork);  
            $rowwork = mysqli_fetch_assoc($resultwork);
			if($rowwork>0)  
			{
				$workshop_id=$rowwork['id'];
				if($worksop==1){
							   
							   $workshop_where_condition = array(  
                                 'id'     =>     $workshop_id  
                                ); 
		  
							 if($photo_id=$data->update('workshop', $workshop_insert_data, $workshop_where_condition))  
                             {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }
				}else{
					
					$where='id='.$workshop_id;
		           $delete_col=deleteWhere($con,'workshop',$where);
					
				}
							   
				}else{
							   
				  if($worksop==1){
			
		                      if($workshop_id=$data->insert('workshop', $workshop_insert_data))
		                      {
			 
		                      }
		
		             } 
							   
							   
				}
			  
	    
	
	  //////////////////////////////////////  workshop insertion end  ////////////////////////////////////////////
	
	
	/////////////////////////////////////  outsource insertion start //////////////////////////////////////
	   
		
			  
	             
		  $outsource_insert_data = array( 
           'order_id'          =>     mysqli_real_escape_string($con, $order_id),
		   'outsource_plating' => mysqli_real_escape_string($con, $_POST['outsource_plating']),
		   'plating_company' => mysqli_real_escape_string($con, $_POST['plating_company']),
		   'hallmark' => mysqli_real_escape_string($con, $_POST['hallmark']),
		   'hallmark_outsourcing_company' => mysqli_real_escape_string($con, $_POST['hallmark_outsourcing_company']),
		   'hallmark_notes' => mysqli_real_escape_string($con, $_POST['hallmark_notes']),	  
		   'outsource_setting' => mysqli_real_escape_string($con, $_POST['outsource_setting']),
		   'setting_company' => mysqli_real_escape_string($con, $_POST['setting_company']),
		   'outsource_engraving' => mysqli_real_escape_string($con, $_POST['outsource_engraving']),
		   'engraving_company' => mysqli_real_escape_string($con, $_POST['engraving_company'])
          );
			
			$sqlout="SELECT * FROM outsource WHERE order_id='$order_id'";
	        $resultout = mysqli_query($con, $sqlout);  
           $rowout = mysqli_fetch_assoc($resultout);
			if($rowout>0)
		   {
				$outsource_id=$rowout['id'];
				if($outsource==1){
					
					 $outsource_where_condition = array(  
                                 'id'     =>     $outsource_id  
                                ); 
		  
							 if($outsource_id=$data->update('outsource', $outsource_insert_data, $outsource_where_condition))  
                             {  
		                        //echo $photo_id;
                                 $success_message = 'Post Inserted';  
                             }
					
				}else{
					
					$where='id='.$outsource_id;
		           $delete_col=deleteWhere($con,'outsource',$where);
					
				}
			   
			   
		   }else{
				
			if($outsource==1){
				if($outsource_id=$data->insert('outsource', $outsource_insert_data))
		        {
			  //echo "<script>window.location.href='search_customer.php'</script>";
		         }
			
			}
				
		  }
			
		  
	
		
/////////////////////////////////////  outsource insertion end  ////////////////////////////////////////////
	
///////////////////////////// customer signanture start ////////////////////////////////////////
			  
			  if(isset($_POST['signature']) && !empty($_POST['signature'])){
				  
			  
			  $img = $_POST['signature'];
                $datas = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
			    $signature='data/customers/signature/'.$main_customer_id.'_'.$order_id.'.png';
                 if(file_put_contents($signature, $datas))
				 {
					 $sign_update_data = array(  
                           'signature'     =>     mysqli_real_escape_string($con, $signature)
							);  
                          $sign_where_condition = array(  
                            'id'     =>     $order_id  
                            );  
                          if($data->update("orders", $sign_update_data, $sign_where_condition))  
                            {  
           
                            } 
				 }
			
			  }
		
///////////////////////////// customer signature end /////////////////////////////////////////// 	  
			  
	
		  }
	
	echo "<script>alert('Updated successfully');</script>";
	
	if($order_status=='estimate'){
		echo "<script>window.location.href='search_estimate.php'</script>";
	}else{
		echo "<script>window.location.href='search_order.php'</script>";
	}


}





if(isset($_POST['action']) && $_POST['action']=='delete')
{
	$table=$_POST['tble_name'];
	$id=$_POST['id'];
	$where='id='.$id;
	
	if($table=='orders'){
		
	
		$t1='products';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
		$t1='moulds';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
		$t1='models';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
		$t1='department';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
		$t1='outsource';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
		$t1='workshop';
	$where_type='order_id='.$id;
		$delete_col=deleteWhere($con,$t1,$where_type);
		
	}
	
	$delete_col=deleteWhere($con,$table,$where);
	
}

?>
