$(document).ready(function(){
	
	$('#SaveAccount').click(function(){
		
			$("#modal_progress").modal("show");
		$.ajax({
			
			
			type:'POST',
			url: base_url+'accounts/SaveAccount',
			data : {
				txtUsername : $('#txtUsername').val(),
				txtPassword : $('#txtPassword').val(),
				txtName : $('#txtName').val()
			},
			async: false,
			datatype:'text',
			success : function(data){
				
				$('#txtUsername').val('');
				$('#txtPassword').val('');
				$('#txtName').val('');
				
				$('#myModal').modal("hide");
				$("#modal_progress").modal("hide");
				
				$("#modal_success").modal("show");
			},
			error : function(){
				
				$('#myModal').modal("hide");
				$("#modal_progress").modal("hide");
				$("#modal_error").modal("show");
			}			
		});
		
	});
	
	
});