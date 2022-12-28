<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/application.css">
    <link rel="stylesheet" href="../css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
<script src="../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
<script src="../css/jquery/jquery.js"></script>
  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,200' rel='stylesheet' type='text/css'>

  <!-- Stylesheets -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
		
  <!-- <script src="../css/js/jquery.validate.js"></script>       -->
	  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script>

var v = jQuery("#msform").validate({
	  ignore: ".ignore",	
      rules: {
			firstname: "required",
			lastname: "required",
            'gender': {
			required: true
			},
            address: "required",
            mobilenumber: "required",
            email: "required",
            postalcode: "required",
            cityname: "required"
        },
        submitHandler: function(form) 
        { 
				var formData = new FormData(form);
				//e.preventDefault();
					$("#loadingmessage").show();
						$.ajax({
						url: "formsubmitajax.php",
						type: "POST",
						data: formData,
						contentType: false,
						cache: false,
						processData:false,
						success: function(data)
						{
							if(data == 'success')
							{
								$("#loadingmessage").hide();
								$("#sucessmsg").show();
							}
							if(data == 'error')
							{
								$("#loadingmessage").hide();
								$("#errormsg").show();
							}
						
						},
						error: function(){} 	        
						
						});		
				
				//return false;  //This doesn't prevent the form from submitting.
		},
		highlight: function(element, errorClass) {
			
			window.scrollTo(0, 0);
		
		},
		unhighlight: function(element, errorClass) {
		//$(element).closest(".form-group").removeClass("has-error");
		},
    });
    </script>
</head>
<body>


<div class="container">
  <div class="row">
  <div class="col-xs-12" style="padding-right:0px;padding-left:0px;">
    <div class="col-md-10 col-xs-12 col-md-offset-1">
		
      <!-- multistep form -->
      <form class="form-horizontal form" id="msform" method="POST" action="" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
          <li class="active">Step One</li>
          <li>Step Two</li>
          <li>Step Three</li>
          <li>Final Step</li>
        </ul>
        
        <div id="sucessmsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Form Submitted Successfully</h2></div>
		<div id="errormsg" style="display:none;"><h2 class="fs-subtitle" style="color: #dc3c52; font-size:22px; text-align:center;">Oops.. Something wrong.</h2></div>
        
        <!-- fieldsets -->
        <fieldset id="step1">
			
			
		<div align="center">
			<h3 class="fs-subtitle">Multi Step form</h3>
			
		</div>		
		   
          <h2 class="fs-title">Personal Details</h2>
        
         <div class="form-group required">
          <label class="control-label col-sm-2">First Name: </label>
          <div class="col-sm-10">
          <input type="text" name="firstname"/>
         </div>
         </div>
         
         <div class="form-group required"> 
          <label class="control-label col-sm-2">Last Names: </label>
          <div class="col-sm-10">
          <input type="text" name="lastname" />
         </div>
         </div>
                  
         <div class="form-group required">  
          <label class="control-label col-sm-2">Gender:</label>
          <div class="col-sm-10">
          <label class="checkstyle">Male
		  <input type="radio" name="gender" value="Male">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="checkstyle">Female
		  <input type="radio" name="gender" value="Female">
		  <span class="checkmark"></span>
		  </label>
		  
		  <label class="checkstyle">Other
		  <input type="radio" name="gender" value="Other">
		  <span class="checkmark"></span>
		  </label>
		  <label for="gender" class="error" generated="true"></label>
          </div>
          </div>
          
        <input style="float:right;" type="button" id="stepone" name="next" class="next action-button" value="Next" />
         
        </fieldset>
        
        <fieldset id="step2">
			
			<h2 class="fs-title">Contact Information</h2>
			
		<div class="form-group required">
          <label class="control-label col-sm-2">Email: </label>
          <div class="col-sm-10">
          <input type="text" name="email"/>
         </div>
         </div>
			
         <div class="form-group required">
          <label class="control-label col-sm-2">Mobile Number: </label>
          <div class="col-sm-10">
          <input type="text" name="mobilenumber"/>
         </div>
         </div> 
          
       
          <input type="button" name="previous" id="previous1" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="steptwo" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step3">
          	
          <h2 class="fs-title">Address Information</h2>
          
          <div class="form-group required">
          <label class="control-label col-sm-2">Address: </label>
          <div class="col-sm-10">
          <input type="text" name="address"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">Postal Code: </label>
          <div class="col-sm-10">
          <input type="text" name="postalcode"/>
         </div>
         </div>
         
         <div class="form-group required">
          <label class="control-label col-sm-2">City Name: </label>
          <div class="col-sm-10">
          <input type="text" name="cityname"/>
         </div>
         </div>
      
          
          <input type="button" name="previous"  id="previous2" class="previous action-button" value="Previous" />
          <input style="float:right;" type="button" id="stepthree" name="next" class="next action-button" value="Next" />
        </fieldset>
        
        
        <fieldset id="step4">
			
          	
          <h2 class="fs-title">Upload Document</h2>
          
          <div class="form-group">
			  <label class="control-label col-sm-2">Upload File: </label>
          <div class="col-sm-5">
		  <input type="file" name="uploadFile">
          </div>
          </div>
          
          <div class="form-group">
          <div class="col-sm-10">
			  <a href = "#" style="text-decoration: none;" class="terms_text">
			  <label style="padding-left: 30px;" class="checkstyle">I have read, agree and accept the terms and conditions
			  <input type="checkbox" id="termscls" name="termsclsname">
			  <span class="checkmark"></span></a>
			  </label>
			  <label id="temsandconderror" style="color:red;display:none;">Please Accept Terms & Conditions</label>
          </div>
          </div>
          
          <input type="button" name="previous" id="previous3" class="previous action-button" value="Previous" />
		  
		  <input style="float:right;" type="submit" id="stepfour" name="submit" class="submitbutton" value="Submit" />

        </fieldset>
       
      </form>
	 
</div>
</div>
</div>      
</div>
   
</body>
</html>