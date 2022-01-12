// JavaScript Document
    $(document).ready(function() {
 	$("#card_T").change(function(){

		            $("#show1").html('<img  src="lo.gif" height="60" width="60">');

		var checked = $("#card_T").attr('checked');
	if(checked==undefined){
		
		$("#card_T").attr('checked', 'checked');
    		var id=$("#id").val();

    		var ok=1;
			
		$.post('admincp_edit1.php',{ok:ok,id:id},function(data){
	$("#show1").html(data).fadeIn(100);
		$("#show1").html(data).fadeOut(5000);
$("#or").html("ok");

		});
         
          

	}///
	if(checked!=undefined){
		$("#card_T").removeAttr('checked');
    		var id=$("#id").val();

	var no=2;

		$.post('admincp_edit1.php',{no:no,id:id},function(data){
$("#show1").html(data).fadeIn(100);
		$("#show1").html(data).fadeOut(5000);		});
$("#or").html("ok");
	}
		//}
		//if(checked==false){
		
		//}
		   

		
	});
	
});