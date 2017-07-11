$(document).ready(function(){

	 $("#btnVerify").click(function(){
		 $.ajax({
			 
			 type:'POST',
			 url: base_url + 'invoice/VerifyPO/'+ $("#txtPO").val(),
			 dataType:'json',
			 data:{
				 txtPO:$("#txtPO").val(),
				 txtCompanyName:$("#txtCompanyName").val()
		 		},
			 success:function(verify)
			 {
				 alert(verify);
				 if($.trim(verify) == 'suc')
				 {
				    
					window.location.href = base_url+'invoice/viewTransactions/'+ $("#txtPO").val();
					//window.location.href = base_url+'invviewTransactionsoice/createExistInvoice/'+ $("#txtPO").val();
				 }
				 else if($.trim(verify) == 'notexist')
				 {
					
					window.location.href = base_url+'invoice/createNewInvoice/' + $("#txtPO").val();
				 }
				 else{
					alert("failed in php")
				 }
			 },
			 error:function(){
				  	alert("failed");
			 }
		 }); 
	 });




	 
	 
	 $("#btnSavePo").click(function(){
		 
		// alert("working");

		var downpaymentStatus = "false";
		var progressStatus = "false";
		var finalStatus = "false";
		var retentionStatus = "false";

		
			if($("#chck_dp").attr('checked'))
			{
				downpaymentStatus = "true";
			}

			if($("#chck_pb").attr('checked'))
			{
				progressStatus = "true";
			}

			if($("#chck_fb").attr('checked'))
			{
				finalStatus = "true";
			}
			if($("#chck_ret").attr('checked'))
			{
				retentionStatus = "true";
			}


		 $.ajax({
			 
			 type:'POST',
			 url: base_url + "invoice/savePO/" + $("#txtCompanyName").val(),
			 data:{
				txtCompanyName:$("#txtCompanyName").val(),
				txtInvoiceNo:$("#txtInvoiceNo").val(),
				txtDate:$("#txtDate").val(),
				txtSiteCode:$("#txtSiteCode").val(),
				txtPO:$("#txtPO").val(),
				txtSite:$("#txtSite").val(),
				txtPOAmount:$("#txtPOAmount").val(),
				txtNatureOfWork:$("#txtNatureOfWork").val(),
				dp:downpaymentStatus,
				pb:progressStatus,
				fb:finalStatus,
				ret:retentionStatus
			 },
			 dataType:'text',
			 async:false,
			 success: function(){
				 alert("SUCCESS'");
			 },
			 error: function(){
				 alert("failed");
			 }
			  
		 });
		 
	 });



	 $("").click(function(){

		alert("success add");






	 });


});