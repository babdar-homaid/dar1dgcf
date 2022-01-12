// JavaScript Document
    $(document).ready(function() {
 	$("#card_T").change(function(){


		
		var checked = $("#card_T").attr('checked');
	if(checked==undefined){
		$("#card_T").attr('checked', 'checked');
		$("#ty").fadeOut(1000);
				$("#myformup").fadeIn(1000);
								$("#my1").fadeOut(1000);



	}
	if(checked!=undefined){
		$("#card_T").removeAttr('checked');
				$("#ty").fadeIn(1000);
								$("#myformup").fadeOut(1000);
					$("#my1").fadeIn(1000);



	}
		//}
		//if(checked==false){
		
		//}
		   

		
	});
	 function ajax (but,form,url,div) {
        $(but).click(function(){
            var data_n=$(form).serialize();
            $.ajax({url:url
            ,type:'POST'
            ,data:data_n
            ,beforeSend: function(){
            $("#lo").html('<img  src="lo.gif" height="60" width="60">');
            $("#lo1").html('<img  src="lo.gif" height="60" width="60">');
							   $('#myform17').fadeOut();

                }
            ,success: function(data){
        $(div).html(data);
            $(".lo").html('<A href="javascript:window.location.reload()" target="_self"><img  src="go-back-icon.png" height="60" width="60"></A>');
                  $(".lo").hide();
                  $(".lo").fadeIn(4000);

            	$('.out').fadeOut();
                $("#lo").hide();
                  $("#lo1").hide();
                          }
                });
            return true
            });
             }


ajax ("#bmyformup","#myformup","up_st.php","#divvvv");
ajax ("#myb","#my1","teacherـedit1.php","#divvvv");
ajax ("#dl","#myform17","dl.php","#divv");

$(".dl_T").click(function(){
	var answer = confirm('هل أنت متأكد من رغبتك في الحذف?');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent(".p_dd");
	
	$(pr_n).html('تم الحذف')
	//$(pr_n).fadeOut(300);
	$.post('dl_sc_te.php',{id_T:id_dl},function(data){
	
		});
            return false;
	});
	 
	//	  function kmt(){
	//$("#Teacher1").load('teacherـedit.php #Teacher1')
	//	  };
		  
  //	setInterval( kmt , 5000);

	//kmt();
});