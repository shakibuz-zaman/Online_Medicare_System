<?php  
	function log_in(){
		return (isset($_SESSION['uid'])) ? true:false;
	}
	function registerd($regd){
		$dkey=implode(", ",array_keys($regd));
		$data="'".implode("', '",$regd)."'";
		$ins="insert into donline (did,name,dept,ostat) values('".$regd['uname']."','".$regd['fname']."','".$regd['dept']."',ostat=1)";
		mysql_query($ins);
		$que="insert into user_info ($dkey) values ($data)";
		//echo $que;
		mysql_query($que);

	}
	function endata($string,$un,$dep){
		$str="select count('uid') from user_prob where uid='$un'";
		$co=mysql_query($str);

		$row = mysql_fetch_row($co);
		$cc=$row[0]+1;
		$qu="insert into user_prob (uid, serial, prob, dept, solve) values('$un',$cc,'$string','$dep','0')";
		mysql_query($qu);
		//return $qu;
	}
	function ensol($string,$un,$pr){
		$up="update user_prob set solve='$string' where uid='$un' and prob='$pr' ";
		//echo $up.'<br>';
		//echo $up.'<br>';
		mysql_query($up);

	}
	function chkad($uid){
		$qu="select count('admin') from user_info where uname='$uid' and admin='1'";
		$co=mysql_query($qu);
		$row=mysql_fetch_row($co);
		$cc=$row[0];
		return $cc;
	}
	function getdept($uid){
		$adc=mysql_query("select dept from user_info where uname='$uid'");
		$st=mysql_result($adc,0);
		return $st;
	}
	function isadmin($uid){
		//$adc=1;
		$adc=mysql_query("select admin from user_info where uname='$uid'");
		$st=mysql_result($adc,0);
		return $st;
	}
	function user_exists($username){
		$username=sanitize($username);
		$query=mysql_query("select count('uid') from user_info where uname='$username'");
		//echo $query.' that is query <br>';
		return (mysql_result($query, 0)==1)?true:false;
	}
	function email_exists($email){
		$email=sanitize($email);
		$query=mysql_query("select count('uid') from user_info where mail='$email'");
		//echo $query.' that is query <br>';
		return (mysql_result($query, 0)==1)?true:false;
	}

	function uid($username){
		$username=sanitize($username);
		return mysql_result(mysql_query("select uid from user_info where uname='$username'"),0,'uid');
	}
	function login($username,$password){
		$qu=mysql_query("select count(uid) from user_info where uname='$username' and pass='$password'");
		$uid=uid($username);
		return (mysql_result($qu,0)==1) ? $uid:false;
	}
?>