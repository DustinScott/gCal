$('#mrform').on('click', function(){
	
	var fname = $('input#f_name').val();
	
	var lname = $('input#l_name').val();
	
	var when =  $('input#when').val();
	
	var chz_srv = $('select#choose_service option:selected' ).val();
	
	var chz_prv = $('select#choose_provider option:selected' ).val();
	
	
	//alert("test");
	
	if($.trim(fname)!= '' ){
		
	$.post('reciever.php', {f_name:fname, l_name:lname, When:when, choose_service:chz_srv, choose_provider:chz_prv}, function(data){
	
		$('div#r_resz').html(data);
		
	
	  })	
	
	}

});