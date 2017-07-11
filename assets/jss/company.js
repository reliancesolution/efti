 $(document).ready(function(){   

        $("#SaveCompany").click(function()
        {  
		
		$('#modal_progress').modal('show');
		
		if($("#company_name").val() != ''&& $("#dpAft").val() != ''&& $("#pbAft").val() != ''&& $("#fbAft").val() != ''&& $("#retAft").val() != ''&& $("#dpPercent").val() != ''&& $("#pbPercent").val() != ''&& $("#FinalPercent").val() != ''&& $("#retPercent").val() != '')
		{
			
			 $.ajax({
				 type: "POST",
				 url: base_url + "company/SaveCompany", 
				 datatype: "json",				 
				 async:false,				 
				 data: {
					companyName: $("#company_name").val(),
					dpafter: $("#dpAft").val(),
					pbAfter: $("#pbAft").val(),
					fbAfter: $("#fbAft").val(),
					retAfter: $("#retAft").val(),
					dpPercent: $("#dpPercent").val(),
					pbPercent: $("#pbPercent").val(),
					fbPercent: $("#FinalPercent").val(),
					retPercent: $("#retPercent").val()                
				},
				success:function(data){
					$("#company_name").val('');
					$("#dpAft").val('');
					$("#pbAft").val('');
					$("#fbAft").val('');
					$("#retAft").val('');
					$("#dpPercent").val('');
					$("#pbPercent").val('');
					$("#FinalPercent").val('');
					$("#retPercent").val('');
					
				
					$('#myModal').modal('hide');
					$('#modal_progress').modal('hide');
					
					$('#modal_success').modal('show');
	
				},
				error:function(){
					$('#modal_progress').modal('hide');
					$('#myModal').modal('hide');
					$('#modal_error').modal('show');
				}
		});
		}
		else
		{
			$('#modal_progress').modal('hide');
			$('#myModal').modal('hide');
			$('#modal_error').modal('show');
		}
		
		
			// showAllCompany();
	});

	
	
	$('#id_save').click(function(){
		$.ajax({
             datatype: 'json',
             type: "POST",
             url: base_url + "welcome/SaveCompany", 
             data: {
                id_name: $("#id_name").val(),
                id_age: $("#id_age").val(),
                id_date: $("#id_date").val()              
                }
            }).done(function(data){

                alert("Success");
    
            });
		});

		$('#EditSaveCompany').click(function()
		{
			$('#modal_progress').modal('show');
			
			if($("#company_name").val() != ''&& $("#dpAft").val() != ''&& $("#pbAft").val() != ''&& $("#fbAft").val() != ''&& $("#retAft").val() != ''&& $("#dpPercent").val() != ''&& $("#pbPercent").val() != ''&& $("#FinalPercent").val() != ''&& $("#retPercent").val() != '')
			{

					var dpPer = "." + $("#dpPercent").val();
					var pbPer = "." + $("#pbPercent").val();
					var fbPer = "." + $("#FinalPercent").val();
					var retPer = "." + $("#retPercent").val();

				$.ajax({
				
				type:'POST',
				url:base_url + 'company/SaveEditCompany/' + $("#company_id").val(),
				datatype:'json',
				async:false,	
				data: 
				{
					companyName: $("#company_name").val(),
					dpafter: $("#dpAft").val(),
					pbAfter: $("#pbAft").val(),
					fbAfter: $("#fbAft").val(),
					retAfter: $("#retAft").val(),
					dpPercent: dpPer,
					pbPercent: pbPer,
					fbPercent: fbPer,
					retPercent: retPer
				},
				success:function(data)
				{
					$("#company_name").val('');
					$("#dpAft").val('');
					$("#pbAft").val('');
					$("#fbAft").val('');
					$("#retAft").val('');
					$("#dpPercent").val('');
					$("#pbPercent").val('');
					$("#FinalPercent").val('');
					$("#retPercent").val('');
					
					$('#myModal').modal('hide');
					$('#modal_progress').modal('hide');
					
					$('#modal_success').modal('show');
					
					window.location.href = base_url + "company/ViewCompany";
					
				},
				error:function()
				{
					$('#modal_progress').modal('hide');
					$('#myModal').modal('hide');
					$('#modal_error').modal('show');
					
				}
			 });
				
				
			}
			else{
					$('#modal_progress').modal('hide');
					$('#myModal').modal('hide');
					$('#modal_error').modal('show');
		
			}
			
			
			
			
		});

		
		function showAllCompany(){
			$.ajax({
				type:'ajax',
				url: base_url + 'company/ReloadCompany',
				async: false,
				dataType:'json',
				success: function(data){
					var html ='';
					var i;
					for(i=0; i < data.length;i++){
						html +=	'<tr>' +
							  '<td>'+data[i].CompanyName +'</td>' +
							  '<td>'+data[i].CompanyDownpaymentPercent+'</td>' +
							  '<td>'+data[i].CompanyProgressPercent+'</td>' +
							  '<td>'+data[i].CompanyFinalPercent+'</td>' +
							  '<td>'+data[i].CompanyRetentionPercent +'</td>' +
							  '<td>'+data[i].DownpaymentLimitDays+'</td>' +
							  '<td>'+data[i].ProgressLimitDays+'</td>' +
							  '<td>'+data[i].FinalLimitDays+'</td>' +
							  '<td>'+data[i].RetentionLimitDays+'</td>' +
							  
							  '<td>' +
								  '<button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>' +
								  '<button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>' +
								  '<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o onClick="window.location.replace('+ base_url + 'company/DeleteCompany/' + data[i].CompanyID +');"></i></button>' +
							  '</td>' +
							'</tr>';
					}
					$('#showDataCompany').html(html);
					
					window.location.href = base_url + 'company/index';
					
				},
				error: function(){
					
					alert('failed');
					
				}
			});
			
			
		}

		
	});