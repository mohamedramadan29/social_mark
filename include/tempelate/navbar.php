 <body>


    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target is-sticky" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          

            
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="contact.php" class="nav-link">طلب خدمة </a></li>
                <li><a href="services.php" class="nav-link"> خدماتنا  </a></li>
                <li><a href="works.php" class="nav-link"> اعمالنا </a></li>
                <li><a href="index.php" class="nav-link"> الرئيسية </a></li>
<!--
                <li class="has-children">
                  <a href="#about-section" class="nav-link">Fun</a>
                  <ul class="dropdown">
                    <li><a href="wallpaper.php" class="nav-link">WallPapers</a></li>
                  </ul>
                </li>
--> 
                     <div class="lang">
                         
                         
                    <?php 
 

      if (isset($_SESSION['lang'])) {
        if (isset($_GET['lang'])) {
           $session = $_GET['lang'];
        if ($session == 'en') {?>
                    <button>  <a href="index.php?lang=ar"> العربية </a> </button>
                    <?php
        }else{?>
                    <button> <a href="index.php?lang=en">English </a></button>
                    <?php 
        }
          
        }else{?>
                    <button>  <a href="index.php?lang=ar"> العربية </a> </button>
                    <?php
        }
       
      }else{?>
                    <button> <a href="index.php?lang=ar"> العربية </a></button>
                    <?php 
      }

     
      ?>
                    <!--
        <button class="btn btn-primary"> <a href="index.php?lang=en"> [ EN ] </a> </button>
        <button class="btn btn-primary"><a href="index.php?lang=ar"> [ AR ] </a></button>
    -->
            
         
                
            
            </div>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php"> <img src="uploads/logo.png"> <span class="text-primary"></span> </a></h1>
          </div>
         


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
