<div class="navbar-wrapper">
  	<div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
    	    <div class="container">
    	    	<div class="navbar-brand">
    	    		<a href="{{url('/')}}"><img src="{{asset('img/RPL-Logo@sm.png')}}"></img></a>
    	    	</div>
            	<div class="navbar-header">
              		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                		<span class="sr-only">Toggle navigation</span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
                		<span class="icon-bar"></span>
              		</button>
            	</div>

            <!-- Nav Starts -->
	            <div class="navbar-collapse collapse">
	            	@guest
			            <ul class="nav navbar-nav navbar-right scroll">
			            	<li class="dropdown">
			                	<a href="#" class="dropdown-toggle navMenu" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspoup="true" data-placement="bottom" title="Beranda" id="navBeranda"><i class="fas fa-fw fa-home"></i><i class="fas fa-fw fa-caret-down"></i></a>
			                	<ul class="dropdown-menu">
			                		<li class="dropdown-item"><a class="nav-link" href="{{url('/')}}#profil-rpl" data-toggle="tooltip" data-placement="right" id="navProfil" title="Profil RPL"><i class="far fa-fw fa-address-card"></i>&nbsp;Profil RPL</a></li>
			                		<li class="dropdown-item"><a class="nav-link" href="{{url('/')}}#visi-misi" data-toggle="tooltip" data-placement="right" id="navVisiMisi" title="Visi Misi"><i class="fas fa-fw fa-tasks"></i>&nbsp;Visi Misi</a></li>
			                		<li class="dropdown-item"><a class="nav-link" href="{{url('/')}}#struktur-organisasi" data-toggle="tooltip" data-placement="right" id="navStrukturOrganisasi" title="Struktur Organisasi"><i class="fas fa-fw fa-users"></i>&nbsp;Struktur Organisasi</a></li>
			                		<li class="dropdown-item"><a class="nav-link" href="{{url('/')}}#kurikulum-rpl" data-toggle="tooltip" data-placement="right" id="navKurikulum" title="Kurikulum RPL"><i class="fas fa-fw fa-book"></i>&nbsp;Kurikulum RPL</a></li>
			                		<li class="dropdown-item"><a class="nav-link" href="{{url('/')}}#peluang-kerja" data-toggle="tooltip" data-placement="right" id="navPeluangKerja" title="Peluang Kerja"><i class="fas fa-fw fa-briefcase"></i>&nbsp;Peluang Kerja</a></li>
			                	</ul>
			                </li>
			                <li class="dropdown">
			                	<a href="#" class="dropdown-toggle navMenu" role="button" title="Informasi" id="navInformasi" data-placement="bottom" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown"><i class="fas fa-fw fa-info"></i> <i class="fas fa-fw fa-caret-down"></i></a>
			                	<ul class="dropdown-menu">
			                		<li class="dropdown-item">
			                			<a href="{{url('/berita')}}" class="nav-link" data-toggle="tooltip" data-placement="right" title="Berita" id="navBerita"><i class="far fa-fw fa-bell"></i>&nbsp;Berita</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Guru" id="navGuru" href="{{url('/guru')}}"><i class="far fa-fw fa-id-card"></i>&nbsp;Guru</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Agenda" id="navAgenda" href="{{url('/agenda')}}"><i class="far fa-fw fa-calendar"></i>&nbsp;Agenda</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Download" id="navDownload" href="{{url('/download')}}"><i class="fas fa-fw fa-download"></i>&nbsp;Download</a>
			                		</li>
			                	</ul>
			                </li>
			                <li ><a href="#" class="navMenu" data-toggle="tooltip" data-placement="bottom" title="Pengumuman" id="navPengumuman"><i class="fas fa-fw fa-bullhorn"></i></a></li>
			                <li ><a href="#" class="navMenu" data-toggle="tooltip" data-placement="bottom" title="Kritik & Saran" id="navBukuTamu"><i class="fas fa-fw fa-address-book"></i></a></li>
							<li ><a href="{{url('/login')}}" class="navMenu" id="aksesAdmin" data-toggle="tooltip" data-placement="bottom" title="Login Admin"><i class="fas fa-fw fa-sign-in-alt"></i></a></li>
							<li>
	                            
	                        </li>
			            </ul>
			        @else
			        	<ul class="nav navbar-nav navbar-right scroll">
			        		<li>
			        			<a href="{{url('/home')}}" class="navMenu" data-toggle="tooltip" data-placement="bottom" title="Beranda" id="navBeranda"><i class="fas fa-fw fa-home"></i></a>
			        		</li>
			        		<li class="dropdown">
			                	<a href="#" class="dropdown-toggle navMenu" role="button" title="Informasi" id="navInformasi" data-placement="bottom" aria-expanded="false" aria-haspopup="true" data-toggle="dropdown"><i class="fas fa-fw fa-info"></i> <i class="fas fa-fw fa-caret-down"></i></a>
			                	<ul class="dropdown-menu">
			                		<li class="dropdown-item">
			                			<a href="{{url('/berita')}}" class="nav-link" data-toggle="tooltip" data-placement="right" title="Berita" id="navBerita"><i class="far fa-fw fa-bell"></i>&nbsp;Berita</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Guru" id="navGuru" href="{{url('/guru')}}"><i class="far fa-fw fa-id-card"></i>&nbsp;Guru</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Agenda" id="navAgenda" href="{{url('/agenda')}}"><i class="far fa-fw fa-calendar"></i>&nbsp;Agenda</a>
			                		</li>
			                		<li class="dropdown-item">
			                			<a class="nav-link" data-toggle="tooltip" data-placement="right" title="Download" id="navDownload" href="#"><i class="fas fa-fw fa-download"></i>&nbsp;Download</a>
			                		</li>
			                	</ul>
			                </li>
			        		<li class="dropdown">
			        			<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true"><i class="fas fa-fw fa-user"></i> {{Auth::user()->name}} <i class="fas fa-fw fa-caret-down"></i></a>

			        			<ul class="dropdown-menu">
			        				<li class="dropdown-item">
			        					<!-- <a href="#"><i class="fas fa-fw fa-user-circle"></i> Ubah Profile</a> -->
			        				</li>
			        				<li class="divider"></li>
			        				<li class="dropdown-item">
			        					<a href="{{ route('logout') }}"
			                                onclick="event.preventDefault();
			                                         document.getElementById('logout-form').submit();">
			                                <i class="fas fa-fw fa-sign-out-alt"></i> Logout
			                            </a>

			                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                {{ csrf_field() }}
			                            </form>
			        				</li>
			        			</ul>
			        		</li>
			        	</ul>
			        @endguest
	            </div>
            <!-- #Nav Ends -->

          	</div>
        </div>

    </div>
</div>
<!-- #Header Starts -->