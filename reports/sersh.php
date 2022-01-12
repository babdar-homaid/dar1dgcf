<?php
include ("../logn.php");
include ("../supervisor/Security1.php");
include ("../config.php");
include ("../supervisor/had1.php");
?>
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,../nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { ../nm=val.name1; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+../nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+../nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+../nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+../nm+' لا يمكن ارسال قيمة فارغة.\n'; }
    } if (errors) alert(''+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>

<form  action='sersh1.php' method='POST' onSubmit="MM_validateForm('seer','','R');return document.MM_returnValue">
    <p align="center">&nbsp;<input name='id' name1=' ' type='text' id="seer" value='' dir='rtl' >

<input type='submit' value='بحــــــــــث'>	
</p>
</form>
		