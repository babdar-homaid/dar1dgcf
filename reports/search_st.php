
<?PHP require_once ('login.php');

 @$name = $_POST['name'];
 //@$Thread2 = $_POST['Thread1'];

    


echo $sql1 = "select * from st  where name= '$name'  ";
 $row1=mysql_query($sql1);
while ($lin = mysql_fetch_array($row1)) {
$s++;
    echo $Number = $lin['n'];
 

}
echo"</table>";



?>