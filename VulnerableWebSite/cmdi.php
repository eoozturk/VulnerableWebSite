<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Anasayfa</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/tut.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/duyuru.js"></script>
<script type="text/javascript">$(document).ready(function(){$('.menu').scrollToFixed();});</script>

</head>
<body>
<!-- üst header -->

<div class="container-fluid" style="background-color:#36273c">
	
    	<div class="col-md-8">
        <span style="color:#fff;float:left;padding-top:2px">| Kocaeli Üniversitesi Bilgisayar Mühendisliği |</span>
         </div>
</div> 

<!-- üst header -->

<div class="container">
<div class="menu">
 <div class="row">
			<nav class="navbar navbar-default" style="background-color:#E0F2B7" role="navigation">
			  <div class="container-fluid">
				<div class="collapse navbar-collapse acilirmenu" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav" style="margin-left:260px">
					<li><a href="index.php">Anasayfa</a></li>
					<li><a href="sqlinc.php">SQL Injection</a></li>
					<li><a href="xss.php">XSS</a></li>
					<li><a href="cmdi.php">Command Injection</a></li>
					<li><a target="_blank" href="files/Kurulum-Kılavuzu.pdf">Kurulum Dokümantasyonu</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
      </div>
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <a href="http://www.kocaeli.edu.tr" target="_blank"><img style="margin-left:40px" src="images/logo2.png"/></a>
	  <br><br>
	   </div>
	   </div>
	  <div class="row">
	  <div class="col-md-6 col-md-offset-3">
	  <div class="duyurubaslik">
		<span><h3>Command Injection</h3></span>
		</div>
		</div>
	  </div>
  </div>
<br>
<div class="container-fluid" role="main" >
	<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
					<hr >
					<p><br>
Komut enjeksiyonu, hedefin savunmasız bir uygulama vasıtasıyla ana işletim sisteminde keyfi komutların çalıştırıldığı bir saldırıdır. Bir uygulama güvenli olmayan kullanıcı tarafından sağlanan verileri (formlar, çerezler, HTTP üstbilgileri vb.) Bir sistem kabuğuna geçirdiğinde komut enjeksiyonu saldırıları mümkündür. Bu saldırıda, saldırgan tarafından sağlanan işletim sistemi komutları genellikle savunmasız uygulama ayrıcalıklarıyla yürütülür. Komuta atma saldırıları büyük ölçüde girdi doğrulamasının yetersiz olması nedeniyle mümkündür.
			<h4>Command Injection’dan nasıl korunabiliriz?</h4>
<p>Command Injection, yani komut enjeksiyonu saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir. Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır. Literatürde Shell kodlaması diye de geçer. Command Injection saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir.</p>
			</div><!-- /.col -->	
	</div>
	<br><br>
	<div class="row">
		<div class="col-md-offset-5">
		<a href="cmdiornek.php" target="_blank"><button type="button" class="btn btn-danger">Hatalı Örnek</button></a>
		<a href="cmdiornek2.php" target="_blank"><button type="button" class="btn btn-success">Hatasız Örnek</button></a>
		</div>
	</div>
		</div><!-- /.conainer -->

<br><br><br>


    <footer>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4">
					<h4>Projeyi Geliştirenler<hr style="margin-top:2px" /></h4>
	
					<p align="center">Designed & Produced  <br> Emre Ozan Öztürk - İbrahim Kangal <br> 2017</p>
          
                </div>
                <div class="col-md-4">
                <h4>Ek Bilgiler<hr style="margin-top:2px" /></h4>
                    <ul class="list-unstyled">
						<li class="altyazi"><a href="https://www.owasp.org/index.php/SQL_Injection" target="_blank" style="text-decoration: none; color: #fff">Sql injection</a></li>
                    	 <li class="altyazi"><a href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)" target="_blank" style="text-decoration: none; color: #fff">Xss</a></li>
                          <li class="altyazi"><a href="https://www.owasp.org/index.php/Command_Injection" target="_blank" style="text-decoration: none; color: #fff">Komut Enjeksiyonu</a></li>
                          <li class="altyazi"><a href="https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)" target="_blank" style="text-decoration: none; color: #fff">Xcrf-Csrf</a></li>
                          
                    </ul>
                </div>

                <div class="col-md-4">
                                <h4>İletişim<hr style="margin-top:2px" /></h4>
                <p><strong>Facebook:</strong> facebook.com/ibokan28--eo.ozturk<br/>
				<strong>Twitter:</strong> twitter.com/ibokngl--eo.ozturk<br/>
				<strong>E-Posta:</strong> ibokngl@gmail.com-eo.ozturk@hotmail.com<br />
				<strong>Web:</strong> http://ibokan.net </p>
                </div>
                
                 
            </div>
        </div>
    
    </footer>

</body>
</html>
