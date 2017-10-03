
<!DOCTYPE html>
<html lang="en">
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<meta NAME="Description" CONTENT="Balkan Instagram Follower">
	<meta NAME="Keywords" CONTENT="Instagram autofollower Balkan likes follows">
	<meta NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
	<title>Insta Follow Balkan</title>
      <!--Import Google Icon Font-->
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!--
	  
	  
	  
	  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<link rel="stylesheet" href="css/custom.css" media="screen,projection">
    </head>

<body>
<div class="navbar-fixed">
<nav>
	<div class="nav-wrapper" style="background-color:#254D77;">
	  <a href="#" class="insta brand-logo center ">Insta Follow Balkan</a>
	  <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	  <ul class="left hide-on-med-and-down">
		<li><a href="index.php">Home</a></li>
		<li><a href="vippaket.php">VIP Paket</a></li>
		<li><a href="#">Ocene korisnika</a></li>
	  </ul>
	  	<ul class="side-nav" id="mobile">
		<li><a href="index.php">Home</a></li>
		<li><a href="vippaket.php">VIP Paket</a></li>
		<li><a href="#">Ocene korisnika</a></li>
	</ul>
	</div>
</nav>
</div>


<div class="container">
<div class="row" style="margin: 60px 0px 100px 0px">
	<div class="col s12 m4 feature">
	  <div class="icon-block">
		<h2 class="center light-blue-text"><i class="large material-icons">verified_user</i></h2>
		<h5 class="center">Garantovani Rezultati!</h5>

		<p class="light center-align">Dobijte prave pratioce i lajkove!</p>
	  </div>
	</div>
	<div class="col s12 m4 feature">
	  <div class="icon-block">
		<h2 class="center light-blue-text"><i class="large material-icons">verified_user</i></h2>
		<h5 class="center">Prosto i lako!</h5>

		<p class="light center-align">Uz nekoliko klika dobicete masu pratioca i lajkova</p>
	  </div>
	</div>
	<div class="col s12 m4 feature">
	  <div class="icon-block">
		<h2 class="center light-blue-text"><i class="large material-icons">verified_user</i></h2>
		<h5 class="center">Vrhunski sistem!</h5>

		<p class="light center-align">Izradjeno od strane vrhunskih programera!</p>
	  </div>
	</div>

</div>
<div class="row">
	<div class="col s12 l8">
		<div class="row">
			<div class="col s12 center-align">
			<ul class="collapsible" data-collapsible="accordion">
			<li>
			  <div class="collapsible-header insta-li  active" >O usluzi</div>
			  <div class="collapsible-body"><p>Uz pomoc InstaFollowBalkan mozete dobiti stotine, mozda cak i hiljade lajkova i pratioca na Instagramu<br> <b> Podelite stranicu sa vasim prijateljima, tako da i oni mogu biti popularni! </b>.
			  <br><br> <b> Mozete maksimalno dobiti 100 pratioca i lajkova u besplatnoj verziji! Za kupovinu pogledajte VIP Paket </b>.</p>
			  </div>
			</li>
			<li>
			  <div class="collapsible-header insta-li center-align">Da li je sigurno?</div>
			  <div class="collapsible-body"><p>Jeste! Kada se logujete mozda ce vam izaci obavestenje od Instagrama da neko zeli da se prijavi na vas nalog, prihvatite i nastavite proces na sajtu</p></div>
			</li>
			<li>
			  <div class="collapsible-header insta-li center-align">Pomoc</div>
			  <div class="collapsible-body left-align">
			  <blockquote style="margin:15px" >Ukoliko je vas nalog privatan prebacite ga na javni tako da bi lajkovi mogli stici</blockquote>
			  <blockquote style="margin:15px" >Koristite iskljucivo vase podatke za logovanje na sajt!</blockquote>
			</li>
			<li>
			  <div class="collapsible-header insta-li center-align">VIP Paket</div>
			  <div class="collapsible-body"><p>Da dobijete vise pratioca kliknite na dugme ispod!</p><p><a href="/vippaket.php" class="twitter-follow-button" data-show-count="false">VIP Paket</a></p></div>
			</li>
			</ul>
		
			</div>
		</div>
	</div>
	<div style="margin-top:7px" class="col s12 l4 z-depth-1">
		<div class="row">
		<div class="col s12 center-align grey lighten-3">
			<h5 class="insta" style="font-size:2em;color:#125688;"> Insta Follow Balkan Login</h5>
		</div>
		<div class="col s12">
			 <div class="row">
				<div class="input-field col s12">
				  <input name="user" id="username" type="text" class="validate">
				  <label for="username">Username</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
				  <input name="pass" id="password" type="password" class="validate">
				  <label for="password">Password</label>
				</div>
			  </div>
			<button style="width:100%;" class="waves-effect waves-light btn blue darken-1" type="submit" name="action">Login</button>
				
		</div>
		</div>
	</div>
</div>
</div>
</div>

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	
		$("#username").on("keydown", submit);
		$("#password").on("keydown", submit);
		function submit(e){
			if(13 === e.keyCode)
				login();
		}
		function login(){
			var h = new XMLHttpRequest;
			h.open("GET", "login.php?username="+escape($("#username").val())+"&password="+escape($("#password").val()), true);
			h.onreadystatechange = function(){
				if(h.readyState == 4 && h.status == 200){
					var j = JSON.parse(h.responseText);
					//console.log(h.responseText);
					if(!j.authenticated)
						Materialize.toast('Netacno korisnicko ime ili lozinka!', 4000);
					else
					{
						Materialize.toast('Prijava uspesna, preusmeravanje...', 4000);
						if(confirm("Da li zelite VIP paket?"))
							location = "vippaket.php";
					}
				}
			};
			h.send();
		}
		$("button[type=submit]").on("click", login);
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-57677638-3', 'auto');
	  ga('send', 'pageview');

	</script>
	<footer class="page-footer" style="margin-top:150px;background-color:#254D77;">
          <div class="container" >
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">O InstaFollowBalkan</h5>
                <p class="grey-text text-lighten-4">Prvo Instagram auto follower/liker na Balkanu!</p>
              </div>
             
            </div>
          </div>
	<div class="footer-copyright">
      <div class="container">
      ASAP Network, 2017</a>
      </div>
    </div>
	</footer>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".button-collapse").sideNav();
		});
	  </script>
	  </body>
</html>