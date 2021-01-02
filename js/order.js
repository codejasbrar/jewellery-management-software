$(document).ready(function () {
		
    		//User Variables
    		var canvasWidth = 400;                           //canvas width
    		var canvasHeight = 60;                           //canvas height
    		var canvas = document.getElementById('canvas');  //canvas element
    		var context = canvas.getContext("2d");           //context element
    		var clickX = new Array();
    		var clickY = new Array();
    		var clickDrag = new Array();
    		var paint;
	        var sign=0;
    		
    		canvas.addEventListener("mousedown", mouseDown, false);
            canvas.addEventListener("mousemove", mouseXY, false);
            document.body.addEventListener("mouseup", mouseUp, false);
            
            //For mobile
            canvas.addEventListener("touchstart", mouseDown, false);
            canvas.addEventListener("touchmove", mouseXY, true);
            canvas.addEventListener("touchend", mouseUp, false);
            document.body.addEventListener("touchcancel", mouseUp, false);

    		function draw() {
        		context.clearRect(0, 0, canvas.width, canvas.height); // Clears the canvas

        		context.strokeStyle = "#000000";  //set the "ink" color
        		context.lineJoin = "miter";       //line join
        		context.lineWidth = 2;            //"ink" width

        		for (var i = 0; i < clickX.length; i++) {
            		context.beginPath();                               //create a path
            		if (clickDrag[i] && i) {
                		context.moveTo(clickX[i - 1], clickY[i - 1]);  //move to
            		} else {
                		context.moveTo(clickX[i] - 1, clickY[i]);      //move to
            		}
            		context.lineTo(clickX[i], clickY[i]);              //draw a line
            		context.stroke();                                  //filled with "ink"
            		context.closePath();                               //close path
        		}
				sign = 1;
    		}

    		//Save the Sig
    		$("#saveSig").click(function saveSig() {
        		var sigData = canvas.toDataURL("image/png");
        		$("#imgData").text(sigData);
				$("#signature").val(sigData);
    		});

    		//Clear the Sig
    		$('#clearSig').click(
    			function clearSig() {
        			clickX = new Array();
        			clickY = new Array();
        			clickDrag = new Array();
        			context.clearRect(0, 0, canvas.width, canvas.height);
        			$("#imgData").html('');
					$("#signature").val('');
					sign=0;
			});
			
			function addClick(x, y, dragging) {
        		clickX.push(x);
        		clickY.push(y);
        		clickDrag.push(dragging);
    		}

			function mouseXY(e) {
				if (paint) {
            		addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
            		draw();
        		}
			}

			function mouseUp() {
				paint = false;
				
				var sigData = canvas.toDataURL("image/png");
				if(sign==1){
					$("#imgData").text(sigData);
				    $("#signature").val(sigData);
				}
        		
			}

			function mouseDown(e)
			{
				var mouseX = e.pageX - this.offsetLeft;
        		var mouseY = e.pageY - this.offsetTop;

        		paint = true;
        		addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
        		draw();
			}
			
    		
		});











   function change_cutomer_type(v){
		//alert(v);
		$('.customer_div').hide();
		//$('.'+v).show();
		//$('.'+v).fadeIn('slow');
		//$('.'+v).fadeIn('10000');
		
		$('.checked-box').removeClass('diff');
		$('.'+v+'_checkbox').addClass('diff');
		
		var d=$('.'+v).html();
		$('.form_data').html(d)
	}

	//var p=0;
    var p=parseInt($('#product_count').val());

	function add_new_product(){
		
		p = p + 1;
		
		$('.add_new_product_div').append('<div class="product product_div_'+p+'"><div style="float:right;"><a href="#!" onclick="product_delete('+p+');">&times; Delete</a></div><br><br><div class="row"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Product Type :</label></div><div class="input-undi"><div class="form-group select-icon icon-select-2"><select name="product_type_'+p+'" id="cre-t" class="form-input"><option value="Ring (finger)">Ring (finger)</option><option value="Necklace">Necklace</option><option value="Bangle">Bangle</option><option value="Earing">Earing</option><option value="Tooth cover">Tooth cover</option><option value="Buckle">Buckle</option><option value="Other">Other</option></select><span class="select-icon-absolute"><img src="assets/img/keyboard_arrow_down_24px.png" alt=""></span></div></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Product Quantity :</label></div><div class="input-undi"><input id="tel" name="product_quantity_'+p+'" type="text" placeholder="Product Quantity" onKeyPress="javascript:return isNumber(event)" class="form-input"></div></div></div></div><div class="row"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Material :</label></div><div class="input-undi"><div class="form-group select-icon icon-select-2"><select name="product_material_'+p+'" id="cre-t" class="form-input"><option value="14ct Gold">14ct Gold</option><option value="18ct Yellow Gold">18ct Yellow Gold</option><option value="18ct White Gold">18ct White Gold</option><option value="22ct Yellow Gold">22ct Yellow Gold</option><option value="22ct White Gold">22ct White Gold</option><option value="Palladium">Palladium</option><option value="Platinum">Platinum</option><option value="925 Silver">925 Silver</option><option value="Bronze">Bronze</option><option value="Brass">Brass</option><option value="Copper">Copper</option><option value="Nickle">Nickle</option><option value="White Rhodium">White Rhodium</option><option value="Black Rhodium">Black Rhodium</option><option value="Other">Other</option></select><span class="select-icon-absolute"><img src="assets/img/keyboard_arrow_down_24px.png" alt=""></span></div></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Weight :</label></div><div class="input-undi"><input id="tel" name="product_weight_'+p+'" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Weight" class="form-input"></div></div></div></div><div class="row"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Price :</label></div><div class="input-undi"><input id="product_price_'+p+'" name="product_price_'+p+'" onKeyPress="javascript:return isNumber(event)" type="text" placeholder="Price" class="form-input"></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Ex- VAT Price :</label></div><div class="input-undi"><input id="tel" name="product_ex_vat_price_'+p+'" type="text" onKeyPress="javascript:return isNumber(event)" placeholder="Ex- VAT Price" class="form-input"></div></div></div></div><div class="row mt-4"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Product Photo :</label></div><div class="input-undi"><div class="file-field form-group"><div class="z-depth-1-half mb-2 image_box"><label for="product_photoupload_'+p+'"><img src="assets/img/filel-uploader.svg" alt="example placeholder" id="product_image_upload_'+p+'" class="image_upload_preview"></label></div><div class="d-flex justify-content-center"><div class=""><p class="file-type">JPG or PNG, Smaller then 10MB</p><div class="input-file-container"><input name="product_photoupload_'+p+'" type="file" id="product_photoupload_'+p+'" class="file-upload__input rf_0 multiplefilesfilter image_upload" accept="image/*" onchange="document.getElementById(\'product_image_upload_'+p+'\').src = window.URL.createObjectURL(this.files[0])"><label for="product_photoupload_'+p+'"><strong>Select a file...</strong> Select a file...</label></div></div></div></div></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Attach Files :</label></div><div class="input-undi"><input type="file" name="product_attach_files_'+p+'" value="attach File" class="custom-file-input"></div></div></div></div><hr></div>');
		
		
		$('#product_count').val(p);
		
	}
	
	
	//var m=0;
    var m=parseInt($('#mould_count').val());
	function add_new_mould(){
		
		m = m + 1;
		
		$('.add_new_mould_div').append('<div class="mould mould_div_'+m+'"><div style="float:right;"><a href="#!" onclick="mould_delete('+m+');">&times; Delete</a></div><br><br><div class="row"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Mould in stock? </label></div><div class="input-undi"><div class="yes-no-box"><div class="single-yesno"><div class="form-group"><label class="radion-label forml"><input type="radio" class="option-input radio" value="yes" name="mould_in_stock_'+m+'" id="mould_in_stock_yes_'+m+'" checked onChange="radio(\'moulds_'+m+'\',this);" />Yes</label></div></div><div class="single-yesno"><div class="form-group"><label class="radion-label"><input type="radio" class="option-input radio" value="no" name="mould_in_stock_'+m+'" id="mould_in_stock_no_'+m+'" onChange="radio(\'moulds_'+m+'\',this);" />No</label></div></div></div></div></div></div><div class="col-md-6 custom-column moulds_'+m+'"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Mould in Stock :</label></div><div class="input-undi"><input type="text" placeholder="Mould in Stock" name="moulds_in_stock_'+m+'" onKeyPress="javascript:return isNumber(event)" class="form-input"></div></div></div></div><div class="row moulds_'+m+'"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Mould ID :</label></div><div class="input-undi"><input type="text" placeholder="Mould ID" name="mould_id_'+m+'" class="form-input"></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Mould Location :</label></div><div class="input-undi"><input type="text" placeholder="Mould Location" name="mould_location_'+m+'" maxlength="200" class="form-input"></div></div></div></div><div class="row moulds_'+m+'"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Mould Pre-set Price :</label></div><div class="input-undi"><input type="text" placeholder="Mould Pre-set Price" id="mould_pre_set_price_'+m+'" name="mould_pre_set_price_'+m+'" onKeyPress="javascript:return isNumber(event)" class="form-input"></div></div></div></div><div class="row mt-3 moulds_'+m+'"><div class="col-md-8 custom-column"><div class="customer-details-box-single"><div class="left-label"><label for="mould-notes" class="form-label">mould-notes :</label></div><div class="input-undi"><input id="mould-notes" type="text" name="mould_notes_'+m+'" maxlength="500" placeholder="Write here mould-notes" class="form-input"></div></div></div></div><div class="row mt-3 moulds_'+m+'"><div class="col-md-4 custom-column"><label for="mould-notes" class="form-label">mould photo</label><br><div class="file-field form-group"><div class="z-depth-1-half mb-2 image_box"><label for="mould_photo_photoupload"><img src="assets/img/filel-uploader.svg" alt="example placeholder" id="mould_photo_image_upload_'+m+'" class="image_upload_preview"></label></div><div class="d-flex justify-content-center"><div class=""><p class="file-type">JPG or PNG, Smaller then 10MB</p><div class="input-file-container"><input name="mould_photo_'+m+'" type="file" id="mould_photo_photoupload_'+m+'" class="file-upload__input rf_0 multiplefilesfilter image_upload" accept="image/*" onchange="document.getElementById(\'mould_photo_image_upload_'+m+'\').src = window.URL.createObjectURL(this.files[0])"><label for="mould_photo_photoupload_'+m+'"><strong>Select a file...</strong> Select a file...</label></div></div></div></div></div><div class="col-md-8 custom-column"><div class="form-group long-height"><label for="message" class="form-label"> Wax notes</label><textarea id="message" name="wax_notes_'+m+'" maxlength="500" placeholder="Write here notes" class=" text-area-box form-input"></textarea></div></div></div><hr></div>');								 
		
		$('#mould_count').val(m);
	}
	
	
	//var d=0;
    var d=parseInt($('#model_count').val());
	function add_new_model(){
		
		d = d + 1;
		
		$('.add_new_model_div').append('<div class="mould mould_div_'+d+'"><div style="float:right;"><a href="#!" onclick="mould_delete('+d+');">&times; Delete</a></div><br><br><div class="row"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">3D Model in stock? </label></div><div class="input-undi"><div class="yes-no-box"><div class="single-yesno"><div class="form-group"><label class="radion-label forml"><input type="radio" class="option-input radio" value="yes" name="3d_model_in_stock_'+d+'" id="3d_model_in_stock_yes_'+d+'" checked onChange="radio(\'models_'+d+'\',this);" />Yes</label></div></div><div class="single-yesno"><div class="form-group"><label class="radion-label"><input type="radio" class="option-input radio" name="3d_model_in_stock_'+d+'" id="3d_model_in_stock_no_'+d+'" value="no" onChange="radio(\'models_'+d+'\',this);" />No</label></div></div></div></div></div></div><div class="col-md-6 custom-column models_'+d+'"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Models in Stock :</label></div><div class="input-undi"><input type="text" placeholder="Models in Stock" class="form-input" name="models_in_stock_'+d+'" onKeyPress="javascript:return isNumber(event)"></div></div></div></div><div class="row models_'+d+'"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Model ID :</label></div><div class="input-undi"><input type="text" placeholder="Model ID" class="form-input" name="model_id_'+d+'"></div></div></div><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Model Location :</label></div><div class="input-undi"><input type="text" placeholder="Model Location" class="form-input" name="model_location_'+d+'" maxlength="200"></div></div></div></div><div class="row models_'+d+'"><div class="col-md-6 custom-column"><div class="customer-details-box-single"><div class="left-label"><label class="form-label">Model Pre-set Price :</label></div><div class="input-undi"><input type="text" placeholder="Model Pre-set Price" class="form-input" id="model_pre_set_price_'+d+'" name="model_pre_set_price_'+d+'" onKeyPress="javascript:return isNumber(event)"></div></div></div></div><div class="row mt-3 models_'+d+'"><div class="col-md-4 custom-column"><label for="mould-notes" class="form-label">Model photo</label><br><div class="file-field form-group"><div class="z-depth-1-half mb-2 image_box"><label for="model_photo_photoupload_'+d+'"><img src="assets/img/filel-uploader.svg" alt="example placeholder" id="model_photo_image_upload_'+d+'" class="image_upload_preview"></label></div><div class="d-flex justify-content-center"><div class=""><p class="file-type">JPG or PNG, Smaller then 10MB</p><div class="input-file-container"><input name="model_photo_'+d+'" type="file" id="model_photo_photoupload_'+d+'" class="file-upload__input rf_0 multiplefilesfilter image_upload" accept="image/*" onchange="document.getElementById(\'model_photo_image_upload_'+d+'\').src = window.URL.createObjectURL(this.files[0])"><label for="model_photo_photoupload_'+d+'"><strong>Select a file...</strong> Select a file...</label></div></div></div></div></div><div class="col-md-8 custom-column"><div class="form-group long-height"><label for="message" class="form-label"> Model notes</label><textarea id="message" placeholder="Write here notes" name="model_notes_'+d+'" maxlength="500" class=" text-area-box form-input"></textarea></div></div></div><hr></div>');								 
		
		$('#model_count').val(d);
	}							   
	
	
	function calculate_total(){
		
		var total_net_cost=0;
		var total_gross_cost=0;
		var product_count=$('#product_count').val();
		var mould_count=$('#mould_count').val();
		var model_count=$('#model_count').val();
		var products_price=0;
		var delivery_charge=0;
		var mould_costs=0;
		var model_costs=0;
		var department_price=0;
		var services_charge=0;
		var product=0;
		var department=0;
		var services=0;
		var mould=0;
		var model=0;
		var workshop=0;
		
		for(var p=0;p<=product_count;p++){
			//products_price=products_price + parseFloat($('#product_price_'+p+'').val());
			product=$('#product_price_'+p+'').val();
			
			product = isNaN(parseFloat(product)) ? 0 : parseFloat(product);
			
			products_price=products_price + product;
		}
		
		products_price=parseFloat(products_price);
		
		$('#total_products_price').val(products_price);
		
		total_net_cost=total_net_cost+products_price;
		
		delivery_charge=parseFloat($('#delivery_charge').val());
		
		delivery_charge = isNaN(parseFloat(delivery_charge)) ? 0 : parseFloat(delivery_charge);
		
		$('#total_delivery_charge').val(delivery_charge);
		
		//total_net_cost=total_net_cost+delivery_charge;
		
		
		for(var m=0;m<=mould_count;m++){
			
			if($("#mould_in_stock_yes_"+m).is(":checked"))
				{
					
			mould=parseFloat($('#mould_pre_set_price_'+m+'').val());
		
		    mould = isNaN(parseFloat(mould)) ? 0 : parseFloat(mould);
			
			mould_costs=mould_costs + mould;
					
				}
		}
		
		
		total_net_cost=total_net_cost+mould_costs;
		
		for(var k=0;k<=model_count;k++){
			
			if($("#3d_model_in_stock_yes_"+k).is(":checked"))
				{
			
			model=parseFloat($('#model_pre_set_price_'+k+'').val());
		
		    model = isNaN(parseFloat(model)) ? 0 : parseFloat(model);
			
			model_costs=model_costs + model;
					
				}
		}
		
		total_net_cost=total_net_cost+model_costs;
		
		
		for(var d=1;d<=10;d++){
			
			if($("#department_"+d).is(":checked"))
            {
			 department=$('#department_'+d+'_price').val();	
			 department = isNaN(parseFloat(department)) ? 0 : parseFloat(department);	
             department_price=department_price+parseFloat(department);
             
				var w=$("#department_name_"+d).val();
				if(w=="Workshop"){
					workshop=1;
				}
				
            }
			
			
		}
		
		services_charge=services_charge+department_price;
		
		if(workshop==1){
			
		
		if($("#cleaning").is(":checked"))
            {
			 services=$('#cleaning_price').val();
			 services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
             
            }
		if($("#polishing").is(":checked"))
            {
             services=$('#polishing_price').val();
             services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
		if($("#assembly").is(":checked"))
            {
             services = $('#assembly_price').val();
              services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
		if($("#plating").is(":checked"))
            {
             services = $('#plating_price').val();
             services = isNaN(parseFloat(services)) ? 0 : parseFloat(services);	
             services_charge=services_charge+parseFloat(services);
            }
			
		}
		
		total_net_cost=total_net_cost+parseFloat(services_charge);
		
		total_net_cost=parseFloat(total_net_cost);
		
		$('#total_services_price').val(services_charge);
		
		$('#total_gross_cost').val(total_net_cost);
		
		total_net_cost=total_net_cost+delivery_charge;
		
		$('#total_net_cost').val(total_net_cost);
		
		$('#total_price').val(total_net_cost);
		
	}
	
	/*
	$('#charging_details').onscroll = calculate_total();
	
$('body').delegate('.form-input', 'blur',function()  
{
	calculate_total();
}); 	
*/	
	
function product_delete(x){
	$('.product_div_'+x).html('');
	calculate_total();
}	
	
function mould_delete(x){
	$('.mould_div_'+x).html('');
	calculate_total();
}		
	
function model_delete(x){
	$('.model_div_'+x).html('');
	calculate_total();
}	
		
	
function delete_row(tble_name,id,div){
	
	if(confirm('Are You sure, you want to delete!'))
	{
		
	var datastring = 'tble_name='+tble_name+'&id='+id+'&action=delete';
	  //alert(datastring);
               $.ajax({  
				     url:"order.php",
                     method:"POST",  
                     data:datastring, 
                     success:function(data)  
                     {  
                        //alert(data);
	                    $('.'+div).html('');
	                    calculate_total();
						
					 }
					 }); 
		
	}
	
}	

function checkbox(department,v){
	//alert(department);
	if($(v).is(":checked"))
      {
		  $('.'+department).show();
	  }else{
		  $('.'+department).hide();
		  
	  }
	  
}	


function radio(clas,v){
	//alert(clas);
	if($(v).is(":checked"))
      {
		  var yn=$(v).val();
		  if(yn=='yes'){
			  $('.'+clas).show();
		  }else{
			  $('.'+clas).hide();
		  }
		  
	  }else{
		 // $('.'+clas).hide();
		  
	  }
	  
}	



function isInView(elem){
   return $(elem).offset().top - $(window).scrollTop() < $(elem).height() ;
}

$(window).scroll(function(){
	// alert('Hello world');
	calculate_total();
   if (isInView($('#charging_details'))){
	    //fire whatever you what 
      //alert('Hello world');
   }
     
})


