<!DOCTYPE html>
<html lang="en">
<head>

     <title>Surabaya Movie Week 2020</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/animate.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
     <style>
          footer{padding:0px 0;}
     </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{url('/')}}" class="navbar-brand">Surabaya Movie Week 2020</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#home" class="smoothScroll">Beranda</a></li>
                         <li><a href="#about" class="smoothScroll">Program</a></li>
                         <li><a href="#team" class="smoothScroll">Juri</a></li>
                         <li><a href="{{url('/trailer')}}" class="smoothScroll">Trailer</a></li>
                         <li><a href="#contact" class="smoothScroll">Lokasi</a></li>
                         <li><a href="#regis" id="reg" name="registrasi" data-toggle="modal" data-target="#regis" class="nav-link"class="smoothScroll">Volunteer</a></li>
                    </ul>

                    <!-- <i class="fa fa-phone"></i> -->
                    <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login'))
                                   @auth
                                   <li><a href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>
                                   @else
                                   <li><a href="{{ route('login') }}">Login</a></li>

                                   @if (Route::has('register'))
                                       <li><button type="button" class="btn btn-warning" style="margin-top:5px;"><a href="{{ route('register') }}">Register</a></button> </li>
                                   @endif
                                   @endauth
                              
                         @endif
                    </ul>
               </div>
          
          </div>
     </section>
     <div class="modal fade" id="regis">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Pendaftaran Volunteer SMW 2020 Surabaya</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			 <table class="table table-hover" id="mytable">
       
       <div class="card">
              <div class="card-body">
                <p class="card-text">
                
                <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
               
                <div class ="form-group" input type ="text" class="form-control">		
		     <label> Nama Lengkap : </label> <input type="text" required="required" name="nama_lengkap_volunteer" class="form-control"> <br/>
               <label> Email : </label> <input type="email" required="required" name="email_volunteer" class="form-control"> <br/>
		     <label> Jenis Kelamin : </label> <input class="form-check-input" type="radio" name="rbkelamin" id="rblaki" value="option1"> 
                                                <label class="form-check-label" for="rblaki">
                                                     Laki-Laki
                                                </label>
                                                
                                                <input class="form-check-input" type="radio" name="exampleRadios" id="rbperempuan" value="option2"> 
                                                <label class="form-check-label" for="rbperempuan">
                                                     Perempuan
                                                </label> <br/><br>
               <div class="row">
                    <div class="col-md-4">
                    <label> Tempat : </label> <input type="text" required="required" name="tempat" class="form-control">
                    </div>
     
                    <div class="col-md-8">
               <label> Tanggal Lahir : </label> <input type="date" required="required" name="tanggal_lahir" class="form-control"><br>
                    </div>
               </div>
               <label> Alamat Tinggal : </label> <input type="text" required="required" name="alamat" class="form-control"> <br/>
               <label> Sekolah,Universitas/Instansi : </label> <input type="text" required="required" name="instansi" class="form-control"> <br/>
               <label> Alasan ingin menjadi volunteer SMW 2020 : </label> <textarea required="required" name="alasan" row="3" class="form-control"></textarea> <br/>
               <label> Pengalaman mengikuti kegiatan serupa : </label> <textarea name="pengalaman" required="required" row="3" class="form-control"></textarea> </br>
               <label> Upload foto KTP : </label><input type="file" name="foto" required="required" class="form-control"></br>
               <label> Alergi Makanan :</label> <input type="text" required="required" name="alergi" class="form-control"> <br/>
               <label> Riwayat penyakit :</label> <input type="text" required="required" name="riwayat_penyakit" class="form-control"><br>
               <div class="col-md-6 offset-md-4">
	          <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div></br>
               @if($errors->has('g-recaptcha-response'))
               <span class="invalid-feedback" style="display:block">
               <strong>{{$errors->first('g-recaptcha-response')}}</strong>  
               </span>   
               @endif
               </div>
                 	<input type="submit" value="Upload" class="form-control" onclick="myFunction()">
                </div>
	            </form>
                </p>
              </div>
            </div>
		  </table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
			</div>
		</div>
	</div>
</div>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             
                                        </div>
                                   </div>
                              </div>
                         </div>

                       
                    </div>

          </div>
     </section>

</br>

     <center>
     <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Trailer</h2>
                              <h4>Kumpulan trailer dari para peserta Surabaya Movie Week 2020</h4>
                         </div>
                    </div>

<!-- TRAILER -->
<section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
@foreach($profile as $p)
<?php
$potong= substr("$p->link",-11);
               echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/$potong' 
                    frameborder='0' allow='accelerometer; autoplay; 
                    encrypted-media; gyroscope; picture-in-picture' allowfullscreen> </iframe>";
               ?>
                  @endforeach                     
               </div>
          </div>
     </section>
     {{ $profile->links() }}
     </center>
     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
          
          <!-- Baris iklan -->
          <div class="row">

<div class="col-md-5 col-sm-8">
     <div class="footer-info">
          <div class="section-title">
               <h2 class="wow fadeInUp" data-wow-delay="0.2s">Find us</h2>
          </div>
          <address class="wow fadeInUp" data-wow-delay="0.4s">
               <p>Universitas Dinamika Surabaya,<br> Jl. Raya Kedung Baruk No.98<br>Kedung Baruk, Kec. Rungkut, Surabaya<br> Jawa Timur 60298</p>
          </address>
     </div>
</div>

<div class="col-md-4 col-sm-8">
     <div class="footer-info">
          <div class="section-title">
               <h2 class="wow fadeInUp" data-wow-delay="0.2s">Contact Person</h2>
          </div>
          <address class="wow fadeInUp" data-wow-delay="0.4s">
               <p>Sutradara :</p>
               <p>081666333 (Martin)</p>
               <p>LINE: martinjaya12 </p>
               <!-- <p><a href="mailto:info@company.com">info@company.com</a></p> -->
               
          </address>
     </div>
</div>
<div class="col-md-3 col-sm-8">
     <ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
          <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-instagram"></a></li>
          <li><a href="#" class="fa fa-google"></a></li>
     </ul>

     <div class="wow fadeInUp copyright-text" data-wow-delay="0.8s"> 
          <p><br>Copyright &copy; 2020 <br>Universitas Dinamika Surabaya 

     </div>
</div>

</div>

     <script src="{{asset('js/jquery.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
     <script src="{{asset('js/wow.min.js')}}"></script>
     <script src="{{asset('js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{asset('js/smoothscroll.js')}}"></script>
     <script src="{{asset('js/custom.js')}}"></script>
     
     
     </script>
</body>
</html>