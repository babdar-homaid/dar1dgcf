// JavaScript Document
    $(document).ready(function() {

 


$(".up_jawal").click(function(){
	$("#myform_jawal").fadeIn(100)
$("#myformupsc").fadeOut(1000);
$("#myformup").fadeOut(100);

var id_jawal= $(this).attr('id_jawal');
$("#id_jawall").attr('value', id_jawal);
            return false;


});
// التعديل
$(".up_t").click(function(){
$("#myformupsc").fadeIn(1000);
$("#myformup").fadeOut(100);
$("#myform_jawal").fadeOut(100);

var id= $(this).attr('id_up');
$("#id_p").attr('value', id);
            return false;


});


$(".cl_up").click(function(){
	$("#myformup").fadeIn(100);
	$("#myformupsc").fadeOut(100);
		$("#myform_jawal").fadeOut(100);


	/*
	var clickk= $(this).attr('clickk');
if(clickk==1){
	$("#myformup").fadeIn(2000);
$(this).attr('clickk', 2);
	}
if(clickk==2){
	
$("#myformup").fadeOut(2000);
$(this).attr('clickk', 1);
	}
	*/
var name= $(this).attr('name_s');
var card= $(this).attr('card_s');
var jawal= $(this).attr('jawal');
var id= $(this).attr('id_s');
var jawal_k= $(this).attr('jawal_k');
var name_k= $(this).attr('name_k');

var id_jawal= $(this).attr('id_jawal');

$("#name").attr('value', name);
$("#jawal").attr('value', jawal);
$("#card").attr('value', card);
$("#id").attr('value', id);
$("#jawal_k").attr('value', jawal_k);
$("#name_k").attr('value', name_k);


            return false;



                });
/// نهاية التعديل


// الحذذف
$(".dl_TTT").click(function(){
	var answer = confirm('هل أنت متأكد من رغبتك في الحذف?');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent("#p_d");
	
	$(pr_n).fadeOut(300);
	$.post('dll.php',{id_TTT:id_dl},function(data){
	$("#div").html(data);
		});
            return false;
	});


$(".id_TT").click(function(){
	var answer = confirm('حذفك للمعلم من هنا معناه إزالته من البرنامج وحذف تعلقه بالطلاب');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent("#p_d");
	
	$(pr_n).fadeOut(300);
	$.post('dll.php',{id_TT:id_dl},function(data){
	$("#div").html(data);
		});
            return false;
	});

// الحذذف
$(".id_TTTT").click(function(){
	var answer = confirm('حذفك للمشرف من هنا معناه إزالته من البرنامج وحذف تعلقه بالمعلمين ');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent("#p_d");
	
	$(pr_n).fadeOut(300);
	$.post('dll.php',{id_TTTT:id_dl},function(data){
	$("#div").html(data);
		});
            return false;
	});
/// نهاية الحذذف





/*
$(".dl").click(function(){
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent("#p_d");
	$(pr_n).fadeOut(300);
	$.post('dll.php',{id_T:id_dl},function(data){
	$("#divv").html(data);
		});
            return false;
	});
$("#sl").click(function(){
	$("#sl1").slideToggle(300);
	});
	*/
	
function ajax (but,form,url,div) {
        $(but).click(function(){
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


ajax ("#bmyformup","#myformup","up_st.php","#div");
ajax ("#bmyformupsc","#myformupsc","up_sc.php","#div");
ajax ("#bmyform_jawal","#myform_jawal","jawal1.php","#div");

//التحكم بالطلاب
$('#search_speed').keyup(function(){

 var length_n=$("#search_speed").val().length;
if(length_n >1){
	
 var id=$("#search_speed").val();
            $.ajax({url:'search_speed1.php'
            ,type:'POST'
            ,data:'id='+id
            ,beforeSend: function(){
           
		           $("#s").html('<img  src="lo.gif" height="60" width="60">');


                }
            ,success: function(data){
        $("#s").html(data);
    
                          }
                });
}

		});

      $(".id_admincp").click(function(){
	var answer = confirm('حذفك للمشرف من هنا معناه إزالته من البرنامج وحذف تعلقه بالمعلمين ');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
	var pr_n= $(this).parent("#p_d");
	$(pr_n).fadeOut(300);
	$.post('dll.php',{id_admincp:id_dl},function(data){
	$("#div").html(data);
		});
            return false;
	});



$(".Collapsein").click(function(){
	var answer = confirm('هل أنت متأكد من طي قيد الطالب؟');
		if (!answer) {
			return false;
		}
	var id_dl=$(this).attr('id');
		var id_m=$("#id_m").val();

	var pr_n= $(this).parent("#p_d");
	$(pr_n).fadeOut(300);
	$.post('Collapsein.php',{id_T:id_dl,id_m:id_m},function(data){
	$("#div").html(data);
		});
            return false;
	});



		$('#search_speed_teacher').keyup(function(){
 var length_n=$("#search_speed_teacher").val().length;
 if(length_n <=1){
 		
 	 }
if(length_n >1){


 var id=$("#search_speed_teacher").val();
            $.ajax({url:'search_teacher_speed1.php'
            ,type:'POST'
            ,data:'id='+id
            ,beforeSend: function(){

		           $("#s").html('<img  src="lo.gif" height="60" width="60">');


                }
            ,success: function(data){
        $("#s").html(data);

                          }
                });
}



		});
//نهاية التحكم بالعملمين

		$('#search_supervisor_speed').keyup(function(){
 var length_n=$("#search_supervisor_speed").val().length;
 if(length_n <=1){
 		
 	 }
if(length_n >1){
	

 var id=$("#search_supervisor_speed").val();
            $.ajax({url:'search_supervisor_speed1.php'
            ,type:'POST'
            ,data:'id='+id
            ,beforeSend: function(){
           
		           $("#s").html('<img  src="lo.gif" height="60" width="60">');


                }
            ,success: function(data){
        $("#s").html(data);
    
                          }
                });
}



		});



		$('#search_admincp_speed').keyup(function(){
 var length_n=$("#search_admincp_speed").val().length;
 if(length_n <=1){

 	 }
if(length_n >1){


 var id=$("#search_admincp_speed").val();
            $.ajax({url:'search_admincp_speed1.php'
            ,type:'POST'
            ,data:'id='+id
            ,beforeSend: function(){

		           $("#s").html('<img  src="lo.gif" height="60" width="60">');


                }
            ,success: function(data){
        $("#s").html(data);

                          }
                });
}



		});
		//نهاية التحكم بالمشرفين
});