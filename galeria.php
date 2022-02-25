<!DOCTYPE html>
<html lang="es">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>AZAR Rock</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
   
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
              
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li> <a href="index.html">Inicio</a> </li>                  
                      <li> <a href="informaciont.html">Informaci&oacute;n</a> </li>
                      <li> <a href="presentaciones.html">Recitales </a> </li>
                      <li class="active"> <a href="galeria.html">Fotos</a> </li>
					  <li> <a href="videos.html">Videos</a> </li>
                      <li> <a href="contacto.html">Contacto</a> </li>                 
                     </ul>
                   </nav>                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
    
</header>


<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>Galeria</h2>
        </div>
      </div>
    </div>
  </div>
</div>


<div id="gallery" class="Gallery">
  <div class="container">
		
		<?php
			$galeria = $_GET[idgal];
			foreach (glob("images/galeria".$galeria."/*.jpg") as $filename) { 
				echo "<img src='$filename'><br>&nbsp;</br> "; 
			}
		?>

	<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
		<div class="box_text">
			<a href="javascript: history.go(-1)">Volver</a>
		</div>
  </div>
</div>

<!-- end Gallery --> 

    <!--  footer -->
    <footr>
      <div class="footer ">
        <div class="container">
          <div class="row">

			<br>&nbsp;</br>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
					<div class="address">
						<ul class="loca">
							<li>
								<a href="#"><img src="icon/whatsapp.png" alt="#" /></a>+549 2644589511
							</li>
							<li>
								<a href="#"><img src="icon/whatsapp.png" alt="#" /></a>+549 2644030971
							</li>
							  
							<li>
								<a href="#"><img src="icon/email.png" alt="#" /></a>azar.rockband@gmail.com
							</li>
                        </ul>
                    </div>
                </div>
					  
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                           <ul class="social_link">
								<li><a href="https://open.spotify.com/artist/7a5GAZSHlWofQIiyDOVOcH?si=I5o7-eRrTqiX8KrC_5P-xg&dl_branch=1" target="_blank"><i class="fa fa-spotify" aria-hidden="true"></i></a></li>
								<li><a href="https://soundcloud.com/azar_rock" target="_blank"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
								<li><a href="https://www.facebook.com/Azar.Rock.SJ/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/azar.rock" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCf1YUsRA1QdSXya07toLCuA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							</ul>
                       </div>
                    </div>
                  </div>

                </div>

              </div>
               <div class="container">
				   <div class="copyright">               
					  <p>AZAR 2021 - todos los Derechos Reservados</p>
					</div>
              </div>
            </div>
          </footr>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.bundle.min.js"></script>
          <script src="js/jquery-3.0.0.min.js"></script>
          <script src="js/plugin.js"></script>
          <!-- sidebar -->
          <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
          <script src="js/custom.js"></script>
          <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</body>

</html>