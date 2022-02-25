<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themes.hody.co/html/comet/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:50:21 GMT -->
<head>
    <title>Comet | Creative Multi-Purpose HTML Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('/user/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('/user/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        @php
          $logo=App\Models\setting::find(1);
        @endphp
        <div class="logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset($logo->logo) }}" alt="" class="logo-light">
            <img src="{{ asset($logo->logo) }}" alt="" class="logo-dark">
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Shopping cart-->
            <div class="cart">
              <a href="#">
                <i class="ti-bag"></i><span class="cart-number">2</span>
              </a>
              <div class="shopping-cart">
                <div class="shopping-cart-info">
                  <div class="row">
                    <div class="col-xs-6">
                      <h6 class="upper">Your Cart</h6>
                    </div>
                    <div class="col-xs-6 text-right">
                      <h6 class="upper">$399.99</h6>
                    </div>
                  </div>
                  <!-- end of row-->
                </div>
                <ul class="nav product-list">
                  <li>
                    <div class="product-thumbnail">
                      <img src="/user/images/shop/2.jpg" alt="">
                    </div>
                    <div class="product-summary">
                      <a href="#">Premium Suit Blazer</a><span>$199.99</span>
                    </div>
                  </li>
                  <li>
                    <div class="product-thumbnail">
                      <img src="/user/images/shop/5.jpg" alt="">
                    </div>
                    <div class="product-summary">
                      <a href="#">Reiss Vara Tailored Blazer</a><span>$199.99</span>
                    </div>
                  </li>
                </ul>
                <p><a href="#" class="btn btn-color btn-block btn-sm">Checkout</a>
                </p>
              </div>
            </div>
            <!-- End shopping cart-->
          </div>
          <div class="menu-item">
            <!-- Search Form-->
            <div class="search">
              <a href="#">
                <i class="ti-search"></i>
              </a>
              <div class="search-form">
                <form action="#" class="inline-form">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn"><button type="button" class="btn btn-color"><span><i class="ti-search"></i></span>
                    </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
            <!-- End search form-->
          </div>
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>
        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            <li class="has-submenu">
              <a href="#">Home</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li>
                      <span>Multi Page</span>
                    </li>
                    <li>
                      <a href="index-2.html">Home Classic</a>
                    </li>
                    <li>
                      <a href="index-01.html">Video Background</a>
                    </li>
                    <li>
                      <a href="index-02.html">HTML5 Video BG</a>
                    </li>
                    <li>
                      <a href="index-03.html">Animated Zoom Slider</a>
                    </li>
                    <li>
                      <a href="index-04.html">Text Rotator</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>One Page</span>
                    </li>
                    <li>
                      <a href="index-op.html">One Page Classic</a>
                    </li>
                    <li>
                      <a href="index-op-01.html">Video Background</a>
                    </li>
                    <li>
                      <a href="index-op-02.html">HTML5 Video BG</a>
                    </li>
                    <li>
                      <a href="index-op-03.html">Animated Zoom Slider</a>
                    </li>
                    <li>
                      <a href="index-op-04.html">Text Rotator</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>Home Layouts</span>
                    </li>
                    <li>
                      <a href="home-restaurant.html">Restaurant</a>
                    </li>
                    <li>
                      <a href="home-architecture.html">Architecture</a>
                    </li>
                    <li>
                      <a href="home-photography.html">Photography</a>
                    </li>
                    <li>
                      <a href="home-landing.html">Landing Page</a>
                    </li>
                    <li>
                      <a href="home-resume.html">Resume</a>
                    </li>
                    <li>
                      <a href="home-models.html">Model Agency<span class="label">New</span></a>
                    </li>
                    <li>
                      <a href="home-fitness.html">Fitness<span class="label">New</span></a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Pages</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li>
                      <span>Pages</span>
                    </li>
                    <li>
                      <a href="page-about.html">About Us</a>
                    </li>
                    <li>
                      <a href="page-about-2.html">About Us 2</a>
                    </li>
                    <li>
                      <a href="page-services.html">Services</a>
                    </li>
                    <li>
                      <a href="page-services-2.html">Services 2</a>
                    </li>
                    <li>
                      <a href="page-contact.html">Contact</a>
                    </li>
                    <li>
                      <a href="page-contact-2.html">Contact 2</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>Other Pages</span>
                    </li>
                    <li>
                      <a href="page-pricing.html">Pricing</a>
                    </li>
                    <li>
                      <a href="page-careers.html">Careers</a>
                    </li>
                    <li>
                      <a href="page-login.html">Login / Register</a>
                    </li>
                    <li>
                      <a href="page-coming-soon.html">Coming Soon</a>
                    </li>
                    <li>
                      <a href="page-404.html">Error 404</a>
                    </li>
                    <li>
                      <a href="page-faq.html">Faq</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Elements</a>
              <ul class="submenu megamenu">
                <li>
                  <ul>
                    <li>
                      <span>Elements</span>
                    </li>
                    <li>
                      <a href="elements-accordions.html"><i class="ti-layout-accordion-merged"></i>Accordions</a>
                    </li>
                    <li>
                      <a href="elements-alerts.html"><i class="ti-comment-alt"></i>Alerts</a>
                    </li>
                    <li>
                      <a href="elements-buttons.html"><i class="ti-control-play"></i>Buttons</a>
                    </li>
                    <li>
                      <a href="elements-countdowns.html"><i class="ti-timer"></i>Countdowns </a>
                    </li>
                    <li>
                      <a href="elements-features.html"><i class="ti-view-grid"></i>Features Box</a>
                    </li>
                    <li>
                      <a href="elements-forms.html"><i class="ti-layout-cta-left"></i>Forms</a>
                    </li>
                    <li>
                      <a href="elements-grid.html"><i class="ti-layout"></i>Grid</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <ul>
                    <li>
                      <span>Elements</span>
                    </li>
                    <li>
                      <a href="elements-icons.html"><i class="ti-image"></i>Icons </a>
                    </li>
                    <li>
                      <a href="elements-media.html"><i class="ti-volume"></i>Media Elements</a>
                    </li>
                    <li>
                      <a href="elements-titles.html"><i class="ti-uppercase"></i>Page Titles</a>
                    </li>
                    <li>
                      <a href="elements-bars.html"><i class="ti-align-left"></i>Progress Bars</a>
                    </li>
                    <li>
                      <a href="elements-sliders.html"><i class="ti-layout-slider"></i>Sliders &amp; Galleries</a>
                    </li>
                    <li>
                      <a href="elements-tabs.html"><i class="ti-layout-tab-window"></i>Tabs</a>
                    </li>
                    <li>
                      <a href="elements-typography.html"><i class="ti-paragraph"></i>Typography</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Portfolio</a>
              <ul class="submenu">
                <li class="has-submenu">
                  <a href="#">Boxed</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-boxed-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="portfolio-boxed-3col.html">3 Columns</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Wide</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-wide-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="portfolio-wide-3col.html">3 Columns</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Single</a>
                  <ul class="submenu">
                    <li>
                      <a href="portfolio-single-1.html">Single Work 1</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Single Work 2</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Single Work 3</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Blog</a>
              <ul class="submenu">
                <li>
                  <a href="blog-fixed-image.html">Fixed Image</a>
                </li>
                <li class="has-submenu">
                  <a href="#">Classic</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Masonry</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog-masonry.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-masonry-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-masonry-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu">
                  <a href="#">Single Post</a>
                  <ul class="submenu">
                    <li>
                      <a href="blog-single.html">No Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-single-sidebar.html">Right Sidebar</a>
                    </li>
                    <li>
                      <a href="blog-single-sidebar-left.html">Left Sidebar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu">
              <a href="#">Shop</a>
              <ul class="submenu">
                <li class="has-submenu">
                  <a href="#">Shop Layout</a>
                  <ul class="submenu">
                    <li>
                      <a href="shop-2col.html">2 Columns</a>
                    </li>
                    <li>
                      <a href="shop-3col.html">3 Columns</a>
                    </li>
                    <li>
                      <a href="shop-4col.html">4 Columns</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="shop-single.html">Single Product</a>
                </li>
                <li>
                  <a href="shop-cart.html">Cart</a>
                </li>
                <li>
                  <a href="shop-checkout.html">Checkout</a>
                </li>
                
              </ul>



            </li>


            <li class="has-submenu">
              @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
            
              <li class="has-submenu">
                
                <a href="#">{{ Auth::user()->name }}</a>

                <ul class="submenu">
                  <p style="margin-left: 15px; color:black; font-size:14px">
                    manage account 
                  </p>
                  <li>
                    <a href="{{ route('profile.show') }}">User_Profile</a>
                  </li>
                  <li>
                    <a id="logout" href="">Logout</a>
                  </li>
                 
                </ul>
              </li>
                
              @else
                  <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                  @if (Route::has('register'))
                      <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                  @endif
              @endauth
          </div>
      @endif
          </li>
          </ul>
          <!-- End navigation menu        -->
        </div>
      </div>
    </header>
    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="/user/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">


            @foreach ($all as $a )
              


  
            <div class="blog-posts">
              <article class="post-single">
                <div class="post-info">
                  <h2><a href="#">{{ $a->title }}</a></h2>
                  <h6 class="upper"><span>By</span><a href="#"> {{ $a->user_find->name }}</a><span class="dot"></span><span>{{date("F j, Y, g:i a",strtotime($a->created_at))  }}</span><span class="dot"></span>
                  
                   @foreach ($a->find_cat as $x )
                     
                  
                    <a href="{{ route('cat_post',['slug'=>$x->slug,'id'=>$x->id]) }}" class="post-tag">
                               {{ $x->name  }} |
                      {{-- {{ $a->find_cat->name }} --}}
                    </a>
                    @endforeach
                  </h6>
                </div>
                <div class="post-media">
                  <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                    <ul class="slides">
                      <li>
                        <img src="{{ asset($a->feature_image) }}" alt="">
                      </li>
                   
                    </ul>
                  </div>
                </div>
                <div class="post-body">
                  <p>
               
                    {!! \Illuminate\Support\Str::words(htmlspecialchars_decode($a->content), 19,'........')               !!}
                    
                  </p>
                  <p><a href="{{ route('single_post',$a->slug) }}" class="btn btn-color btn-sm">Read More</a>
                  </p>
                </div>
              </article>
            
            </div>
            @endforeach
         

                 





            <ul class="pagination">

              {{ $all->links('vendor.pagination.default') }}
              {{-- <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
              </li>
              <li class="active"><a href="#">1</a>
              </li>
              <li><a href="#">2</a>
              </li>
              <li><a href="#">3</a>
              </li>
              <li><a href="#">4</a>
              </li>
              <li><a href="#">5</a>
              </li>
              <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
              </li> --}}
            </ul>
            <!-- end of pagination-->
          </div>
          <div class="col-md-3 col-md-offset-1">
            <div class="sidebar hidden-sm hidden-xs">
              <div class="widget">
                <h6 class="upper">Search blog</h6>
                <form action="{{ route('post_search') }}"   method="POST"  enctype="multipart/form-data">
                  @csrf
                  <input type="text" placeholder="Search.." name="search" class="form-control">
                </form>
              </div>
              <!-- end of widget        -->


              @php
                $cat=\App\Models\Catagorie::latest()->take(3)->get()
              @endphp
              <div class="widget">
                <h6 class="upper">Categories</h6>
                <ul class="nav">


               
                  @foreach ($cat as $c)
               
                  <li><a href="{{ route('cat_post',['slug'=>$c->slug,'id'=>$c->id]) }}">{{ $c->name }}</a>
                  </li>
                  
                  @endforeach
                </ul>
              </div>
              <!-- end of widget        -->
              <div class="widget">
                <h6 class="upper">Popular Tags</h6>
                <div class="tags clearfix"><a href="#">Design</a><a href="#">Fashion</a><a href="#">Startups</a><a href="#">Tech</a><a href="#">Web</a><a href="#">Lifestyle</a>
                </div>
              </div>
              @php
              $post=\App\Models\Post::latest()->take(4)->get()
            @endphp
              <!-- end of widget      -->
              <div class="widget">
                <h6 class="upper">Latest Posts</h6>
                <ul class="nav">

                  @foreach ($post as $p )
                    
                
                  <li><a href="{{ route('single_post',$p->slug) }}">{{ $p->title }}<i class="ti-arrow-right"></i><span>{{date("F j, Y, g:i a",strtotime($p->created_at))  }}</span></a>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
              <!-- end of widget          -->
            </div>
            <!-- end of sidebar-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>
    <!-- Footer-->
    <footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">About Comet</h6>
                  <p>
                    <span>Fourth Floor</span>
                    <span>New York, NY 10011</span>
                    <span>hello@comet.com</span>
                  </p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Culture</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Team</a>
                    </li>
                    <li>
                      <a href="#">Process</a>
                    </li>
                    <li>
                      <a href="#">Story</a>
                    </li>
                    <li>
                      <a href="#">Careers</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Case Studies</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="portfolio-single-1.html">Neleman Cava</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Sweet Lane</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Jeff Burger</a>
                    </li>
                    <li>
                      <a href="portfolio-single-1.html">Juice Meds</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <h6 class="upper">Stay in touch</h6>
                  <p>Sign Up to get the latest updates.</p>
                  <div class="footer-newsletter">
                    <form data-mailchimp="true" class="inline-form">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control"><span class="input-group-btn"><button type="submit" data-loading-text="Loading..." class="btn btn-color">Subscribe</button></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p><i class="icon-heart red mr-15"></i>© 2015 Comet Agency.</p>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->
    <script type="text/javascript" src="/user/js/jquery.js"></script>
    <script type="text/javascript" src="/user/js/bundle.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="/user/js/main.js"></script>
  </body>


<!-- Mirrored from themes.hody.co/html/comet/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:50:21 GMT -->
</html>