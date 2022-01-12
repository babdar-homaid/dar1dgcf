 // JavaScript Document
    $(document).ready(function() {




        function ajax (but,form,url,div) {
        $(but).click(function(){
			$("#lo").show();

            var data_n=$(form).serialize();
            $.ajax({url:url
            ,type:'POST'
            ,data:data_n
            ,beforeSend: function(){
            $("#lo").html('<img  src="lo.gif" height="60" width="60">');
            $("#lo1").html('<img  src="lo.gif" height="60" width="60">');
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


ajax ("#button11","#myform11","sector1.php","#divv");
ajax ("#button1111","#myform1111","D_sector1.php","#divv");

ajax ("#button14","#myform14","admin1.php","#divv");

ajax ("#button21","#myform21","dl.php","#divv");

ajax ("#button27","#myform27","dl.php","#divv");
ajax ("#D_badmincp","#D_fadmincp","D_admincp1.php","#divv");
ajax ("#bupdate1","#update1","update1.php","#divv");
ajax ("#bupdate","#update","update2.php","#divv");


$("#dll").click(function(){
	var answer = confirm('هل أنت متأكد من حذف المعاملة؟');
		if (!answer) {
			return false;
		}
			var id=	$("#val_id").val();

 			 $.ajax({url:'D_delete.php'
            ,type:'POST'
            ,data:'id='+id
            ,beforeSend: function(){
		    $("#lo").html('<img  src="lo.gif" height="60" width="60">');

                }
            ,success: function(data){
            	
       	 $("#divv").html(data);
		 $("#lo").fadeOut();
 		 $("#container").fadeOut(300);

                          }
                });


});
 

 
//$("#xd").dblclick(function(){
////$("#xd").load("D_Note.php")
	
//});



	

});