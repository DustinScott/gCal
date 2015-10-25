<!doctype html>
<!-- <html class="no-js" lang="en"> -->
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    
      
  </head>
  <body>
	<div id="r_resz">
		
		</div>  
	  
    
       <div class="row">
     <div class="large-12 columns">
  
        
  
<!--      <?php include('includes/navigation.php');?> -->
  
        
  
  
        
  
         <div class="row">
  
           <div class="large-2 columns">
  
             <img src="ohtLOGO-CV.png"><br>
  
           </div>
  
  
           <div class="large-5 columns">
	           
	           <br />
	           <br />
  
             <h3 class="show-for-small">Header<hr/></h3>
              <h3 class="show-for-large-up">Welcome<hr/></h3>
			 
		<form>
		
		<label>Your Name<br />
		<input id="f_name" type="text" placeholder="">
		</label>
		
		<label>Last Name<br />	
		<input id="l_name" type="text"  placeholder="">
		</label>
		
		<label>Choose Your Service<br />	
		<select id="choose_service" >
			
			<option value="service1">Service 1</option>
			<option value="service2">Service 2</option>
			<option value="service3">Service 3</option>
			<option value="service4">Service 4</option>
			
		</select>
		</label>
		
		<label>Choose Your Provider<br />
		<select id="choose_provider" >
			
			<option value="provider1">Bob </option>
			<option value="provider2">Harry </option>
			<option value="provider3">Mark </option>
			<option value="provider4">Andy </option>
			
		</select>
		</label>
		
		<label>Service Date<br />
		<input id="when" type="date" >
		</label>
		
		
				
		
		</form>

        <input class="button radius" id="mrform" value="Submit">
        
        <script>
	        
	        $('#mrform').click(function(){
		       
		       alert("test"); 
		        
	        });
	        
	        </script>
   
</div>
<div class="large-5 columns">
	
	<div id="testerrelay"></div>
  
  
        </div>

</div>

      
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
   
    <script>
     
      $(document).foundation();
      
    </script>
  </body>
</html>  

 <script src="js/ajax.js"></script>

