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
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                
                <form action="{{url('/volun')}}" method="post" enctype="multipart/form-data">
		            {{ csrf_field() }}
               
                <div class ="form-group" input type ="text" class="form-control">		
		     <label> Nama Lengkap : </label> <input type="text" required="required" name="nama_lengkap" class="form-control"> <br/>
               <label> Email : </label> <input type="email" required="required" name="email" class="form-control"> <br/>
		     <label> Jenis Kelamin : </label> <input class="form-check-input" type="radio" name="jenis_kelamin" id="rblaki" value="Laki-Laki"> 
                                                <label class="form-check-label" for="rblaki">
                                                     Laki-Laki
                                                </label>
                                                
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" id="rbperempuan" value="Perempuan"> 
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
                                             <!-- <h3>Hai para sutradara muda</h3>
                                             <h1>Jadilah bagian dari Industri perfilman di Indonesia!</h1> -->
                                             <!-- <a href="#team" class="section-btn btn btn-default smoothScroll">Meet our chef</a> -->
                                        </div>
                                   </div>
                              </div>
                         </div>

          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                                   <h4>Saatnya buktikan dirimu sebagai sutradara berbakat!</h4>
                                   <h2>Surabaya Movie Week 2020</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.4s">
                                   <p>Tema “Pemuda Dulu, Kini dan Esok” ini, kami mengajak generasi muda di Surabaya, khususnya pembuat film untuk membuat film mengangkat keresahan dalam beropini dan cara usaha untuk mengembalikan budaya saling menghargai pendapat di era milenial sekarang ini.</p>
                                   <!-- <p>Sed elementum vel felis sed scelerisque. In arcu diam, sollicitudin eu nibh ac, posuere tristique magna. You can use this template for your cafe or restaurant website. Please tell your friends about <a href="https://plus.google.com/+templatemo" target="_parent">templatemo</a>. Thank you.</p> -->
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/about-images.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Juri Surabaya Movie Week 2020</h2>
                              <!-- <h4>Mereka yang akan menilai kali</h4> -->
                              
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/anjas-maradita.jpg" class="img-responsive" alt="" style="object-fit:cover">
                                  
                         </div>
                         <div class="team-info">
                              <h3>Anjas Maradita</h3>
                              <p>Editor</p>
                              <h5>Producer at Daunnet Film & Neuron Media</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/fajar-nugroho.jpg" class="img-responsive" alt="">
                                   
                         </div>
                         <div class="team-info">
                              <h3>Fajar Nugroho</h3>
                              <p>Sutradara</p>
                              <h5>Director film "YOWISBEN" dan "YOWISBEN 2"</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/rukman-rosadi.jpg" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Rukman Rosadi</h3>
                              <p>Actor</p>
                              <h5>Founder of Saturday Acting Club (SAC)</h5>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-3">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/mawar-pandan.jpg" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Mega Pandan W.</h3>
                              <p>Manajemen Produksi</p>
                              <h5>Dosen Universitas Dinamika</h5>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Trailer</h2>
                              <h4>Kumpulan trailer dari para peserta Surabaya Movie Week 2020</h4>
                         </div>
                    </div>

                    
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


     <!-- LOCATION -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                         
                         <div class="col-md-6 col-sm-6">

                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                        <h2>Lokasi Lomba</h2>
                              </div>
                         </div>

                    <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.377270711204!2d112.78022151420475!3d-7.311445173915165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb215a548bbb%3A0xdb6b8f634709fa9e!2sDinamika%20University!5e0!3m2!1sen!2sid!4v1582691054762!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                         </div>
                    </div>         
                    </div>

                    <div class="col-md-6 col-sm-6">

                              <div class="col-md-12 col-sm-12">
                                   <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                        <h2>Lokasi Awarding</h2>
                              </div>
                         </div>

                    <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.536229434107!2d112.74289421852288!3d-7.304134162610165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbb8cfba690d%3A0xc7939b09168c5d6c!2sCGV%20Cinemas%20Marvell%20City!5e0!3m2!1sen!2sid!4v1582871397725!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                         </div>
                    </div>    

                    
                    </div>

               </div>
          </div>
     </section>          


     <!-- FOOTER -->
     <section>
     
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
          
          <!-- Baris iklan -->
     

<!-- Baris CP & kawan kawan -->
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
                                   <p>Panitia :</p>
                                   <p>-</p>
                                   <p>LINE: - </p>
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
          </div>
     </footer>
     </section>


     <!-- SCRIPTS -->
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