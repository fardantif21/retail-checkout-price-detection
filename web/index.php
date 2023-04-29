<?php 
	require_once "connection.php";
	//Query sql
	$sql="SELECT * FROM produk";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    
    <title>DigiMedia - Creative SEO HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
             <img src="assets/images/logo-v4.png" width="50px" height="50px"> 
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#deteksi">Deteksi</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><div class="border-first-button"><a href="#deteksi">Login</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="about-right-content">
                      <div class="section-heading">
                        <h4>DETEKSI JENIS <em>PRODUK</em> UNTUK <em>MENGHITUNG</em> HARGA <em>BELANJAAN</em></h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#deteksi">Deteksi</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="deteksi" style="text-align: center;">
    <div class="container">
      <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
        <h6>Our Services</h6>
        <h4> Deteksi <em>Produk</em></h4>
      </div>
      <div id="drop_zone">
        <p>Drop file here</p>
        <p>or</p>
        <p><button type="file" name="txt_file" id="btn_file_pick"  class="btn btn-primary"><span class="glyphicon glyphicon-folder-open"></span>  Select File</button></p>
        <p id="file_info"></p>
        <p><button type="button" name="btn_insert" id="btn_upload" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-up"></span>  Upload To Server</button></p>
        <input type="file" id="selectfile">
        <p id="message_info"></p>
      </div>
      <script>
        var fileobj;
        $(document).ready(function(){
          $("#drop_zone").on("dragover", function(event) {
            event.preventDefault();  
            event.stopPropagation();
            return false;
          });
          $("#drop_zone").on("drop", function(event) {
            event.preventDefault();  
            event.stopPropagation();
            fileobj = event.originalEvent.dataTransfer.files[0];
            var fname = fileobj.name;
            var fsize = fileobj.size;
            if (fname.length > 0) {
                document.getElementById('file_info').innerHTML = "File name : " + fname +' <br>File size : ' + bytesToSize(fsize);
            }
            document.getElementById('selectfile').files[0] = fileobj;
            document.getElementById('btn_upload').style.display="inline";
          });
          $('#btn_file_pick').click(function(){
            /*normal file pick*/
            document.getElementById('selectfile').click();
            document.getElementById('selectfile').onchange = function() {
            fileobj = document.getElementById('selectfile').files[0];
            var fname  = fileobj.name;
            var fsize = fileobj.size;
            if (fname.length > 0) {
                document.getElementById('file_info').innerHTML = "File name : " + fname +' <br>File size : ' + bytesToSize(fsize);
            }
                document.getElementById('btn_upload').style.display="inline";
            };
          });
          $('#btn_upload').click(function(){
            if(fileobj=="" || fileobj==null){
                alert("Please select a file");
                return false;
            }else{
                ajax_file_upload(fileobj);
            }
          });
        });
        function ajax_file_upload(file_obj) {
          if(file_obj != undefined) {
            var form_data = new FormData();                  
            form_data.append('upload_file', file_obj);
            $.ajax({
                type: 'POST',
                url: 'upload.php',
                contentType: false,
                processData: false,
                data: form_data,
                beforeSend:function(response) {
                  $('#message_info').html("Uploading your file, please wait...");
                },
                success:function(response) {
                  $('#message_info').html(response);
                  alert(response);
                  $('#selectfile').val('');
                }
            });
          }
        }
        function bytesToSize(bytes) {
          var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
          if (bytes == 0) return '0 Byte';
          var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
          return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
        }

      </script>

    </div>

      <div class="container" style="margin-top: 100px;">   
        <div class="col-md-8 col-sm-6 mb-3">
          <div class="card">
            <img src="gambar1.jpg" class="card-img-top" alt="..." style="height: 310px;">
       
            <div class="card-body">
              <div class="card-title"><h4>Hasil Deteksi Produk</h4></div>
            </div>
          </div>
        </div>
       
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card">
            <div class="card-body" style="height: 350px;">
              <div class="card-title"><h3>Detail</h3></div>
              Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div id="free-quote" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h4>Kelompok 2</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>
