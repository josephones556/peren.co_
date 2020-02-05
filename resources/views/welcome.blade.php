@extends('layout/master')

@section('title')
    leading independent oil and gas company
@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="main-content  type- isfront" id="main-content">
        <!-- Content Header (Page header) -->
        
      <div id="block-perencocontentheader">
          
    <section class="hero-section perenco-homeheaderimg print-fix" title="">
            <img class="show-for-mobile" src="{{ asset('sites/default/files/2018-12/homepage_mobie.jpg') }}" alt="" title="">
                <img class="hide-for-mobile" src="{{ asset('sites/default/files/idg/homepage_0_1349_466_80_1_0_1349_466_80.jpg') }}" alt="" title="">
            <div class="hero-content">
            <h1><p><strong>OIL REMAINS AN ADVENTURE</strong></p>
    </h1>
        </div>
    </section>
    
    <div class="container print-only">
        <p><strong>OIL REMAINS AN ADVENTURE</strong></p>
    
    </div>
    
    <style>
    .perenco-homeheaderimg{
        background-image:url("{{ asset('sites/default/files/idg/homepage_0_1349_466_80_1_0_1349_466_80.jpg') }}");
    }
    /* mobile */
    @media(max-width:767px) {
        .perenco-homeheaderimg{
            background-image:url("{{ asset('sites/default/files/2018-12/homepage_mobie.jpg') }}");
        }
    }
    </style>
      </div>
    
    
        <!-- Main content -->
        <div class="page-wrapper">
          <div class="container">
            <div class="row wrapper  ">
                          
      
    
    <section class="home-grid-section">
        <div class="container">
           <div class="row">
                <div class="col-md-6 home-grid-left">
                    <div class="parent-story-slider" style="background-image:url({{ asset('sites/default/files/2018-11/collaborateurs-desktop_5.jpg') }});" title="Perenco" alt="Perenco">
                        <div class="parent-story-item">
                           <div class="parent-story-item-inner">
                                                            <div class="parent-story-content">
                                    <p>14 onshore and offshore subsidiaries in Asia, Europe, West Africa, the Mediterranean and<br />
    Latin America</p>
    
                                    <a class="site-btn" href="subsidiaries">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acquisition-section">
                       <div class="acquisition-inner">
                          <div class="slider-img-wrapper">
                                                  <img class="hide-for-mobile" src="{{ asset('sites/default/files/idg/Productionbrute_462_429_80.jpg') }}" alt="" title=""/>
                                                                         <img class="show-for-mobile" src="{{ asset('sites/default/files/idg/Productionbrute_375_350_80.jpg') }}" alt="" title=""/>
                                                  </div>
                           <div class="acquisition-content">
                               <h2>GROSS PRODUCTION</h2>
                               <p>465 000 boepd</p>
                               <a class="site-btn" href="about-us-overview">Learn more</a>
                           </div>
                       </div>
                    </div>
                </div>
                <div class="col-md-6 home-grid-right">
                    <div class="why-perenco-list">
                                            <div class="why-perenco">
                            <a style="color:white;" href="about-us-our-strategy">                        <div class="why-perenco-inner print-fix" style="background-image:url({{ asset('sites/default/files/2018-08/27853173601_564c3bfd5e_b.jpg') }});" title="">
                                <img class="show-for-mobile" src="{{ asset('sites/default/files/2018-08/27853173601_564c3bfd5e_b.jpg') }}" alt="" title=""/>
                                <h3>How we are different</h3>
                            </div>
                            </a>                    </div>
                                            <div class="why-perenco">
                            <a style="color:white;" href="subsidiaries">                        <div class="why-perenco-inner print-fix" style="background-image:url({{ asset('sites/default/files/2018-08/service-img1.jpg') }});" title="">
                                <img class="show-for-mobile" src="{{ asset('sites/default/files/2018-08/service-img1.jpg') }}" alt="" title=""/>
                                <h3>Nurturing our independence</h3>
                            </div>
                            </a>                    </div>
                                            <div class="why-perenco">
                            <a style="color:white;" href="innovation">                        <div class="why-perenco-inner print-fix" style="background-image:url({{ asset('sites/default/files/2018-08/service-img2_0.jpg') }});" title="">
                                <img class="show-for-mobile" src="{{ asset('sites/default/files/2018-08/service-img2_0.jpg') }}" alt="" title=""/>
                                <h3><p>Innovating today, for tomorrow</p>
    </h3>
                            </div>
                            </a>                    </div>
                                            <div class="why-perenco">
                            <a style="color:white;" href="experiences">                        <div class="why-perenco-inner print-fix" style="background-image:url({{ asset('sites/default/files/2018-08/service-img3.jpg') }});" title="">
                                <img class="show-for-mobile" src="{{ asset('sites/default/files/2018-08/service-img3.jpg') }}" alt="" title=""/>
                                <h3>Driving performance</h3>
                            </div>
                            </a>                    </div>
                                            <div class="why-perenco">
                            <a style="color:white;" href="csr">                        <div class="why-perenco-inner print-fix" style="background-image:url({{ asset('sites/default/files/2018-08/service-img4.jpg') }});" title="">
                                <img class="show-for-mobile" src="sites/default/files/2018-08/service-img4.jpg" alt="" title=""/>
                                <h3>A committed and responsible player</h3>
                            </div>
                            </a>                    </div>
                                        </div>
                </div>
            </div>
        </div>
    </section>
    
                      </div>
          </div>
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
