
        <header class="top-header">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-3">
                        <div class="logo-wrapper">
                            
                            <a href="<?=doseoLink("index")?>"><img src="<?=WEBROOT?>images/logo.png" alt="logo"></a>

                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="top-right-area">

                            <?=getcmsF(33)?>
                            
                            <!-- <div class="email-warp"><a href="mailto:info@dmedinstruments.com">info@dmedinstruments.com</a></div> -->
                            <form method="post" action="<?=doseoLink("search")?>">
                                <input name="tsearch" type="text" placeholder="Enter Any Keywords">
                                <button type="submit" class="fa fa-search"></button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </header>

        <nav class="site-menu">
            <div class="container">
                <div class="row">
                    <div class="menu-wrapper">

                        <div class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav-bar1">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                
                            </div>

                            <div class="collapse navbar-collapse main-nav-bar1 removepadd">
                                
                                <ul class="menu nav navbar-nav" id="navigation-bar">

                                    <li><a href="<?=doseoLink("index")?>">Home</a></li>
                                    <li><a href="<?=doseoLink("content",34)?>">Profile</a></li>
                                    <li><a href="<?=doseoLink("products")?>">Products</a></li>
                                    <li><a href="<?=doseoLink("content",45)?>">Customer Service</a></li>
                                    <li><a href="<?=doseoLink("content",48)?>">Distrubution Application</a></li>
                                    <li><a href="<?=doseoLink("basket")?>">View Basket</a></li>
                                    <li><a href="<?=doseoLink("content",38)?>">FAQ's</a></li>
                                    <li><a href="<?=doseoLink("content",39)?>">Contact us</a></li>
                                    <li><a href="<?=doseoLink("sitemap")?>">Site Map</a></li>
        
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>