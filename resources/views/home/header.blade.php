<!-- ----------------------------- -->
<style>
	/* CSS Document */

	@import url(https://fonts.googleapis.com/css?family=Open+Sans);
	@import url(https://fonts.googleapis.com/css?family=Bree+Serif);

	#container2 {
		margin: 0 auto;
	}


	nav2 {
		margin: 50px 0;
		background-color: #E64A19;
	}

	nav2 ul2 {
		padding: 0;
		margin: 0;
		list-style: none;
		position: relative;
	}

	nav2 ul2 li2 {
		display: inline-block;
		background-color: #E64A19;
	}

	nav2 a {
		display: block;
		padding: 0 10px;
		color: #FFF;
		font-size: 20px;
		line-height: 60px;
		text-decoration: none;
	}

	nav2 a:hover {
		background-color: #000000;
	}

	/* Hide Dropdowns by Default */
	nav2 ul2 ul2 {
		display: none;
		position: absolute;
		top: 60px;
		/* the height of the main nav */
	}

	/* Display Dropdowns on Hover */
	nav2 ul2 li2:hover>ul2 {
		display: inherit;
	}

	/* Fisrt Tier Dropdown */
	nav2 ul2 ul2 li2 {
		width: 170px;
		float: none;
		display: list-item;
		position: relative;
	}

	/* Second, Third and more Tiers	*/
	nav2 ul2 ul2 ul2 li2 {
		position: relative;
		top: -60px;
		left: 170px;
	}


	/* Change this in order to change the Dropdown symbol */
	li>a:after {
		content: ' +';
	}

	li>a:only-child:after {
		content: '';
	}
</style>
<!-- ----------------------------- -->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
<div class="container">
    <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"> Menu</span>
    </button>

    <!--NAV beginning -->
        
    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>

			<!--deneme alanı -->
			
            <nav2>
                <ul2>
                    <li2 ><a href="#">Home</a></li>
                        <li2><a href="#">WordPress</a>
                            <!-- First Tier Drop Down -->
                            <ul2>
                                <li2><a href="#">Themes</a></li>
                                    <li2><a href="#">Plugins</a></li>
                                        <li2><a href="#">Tutorials</a></li>
                            </ul2>
                        </li2>
                        <li2><a href="#">Web Design</a>
                            <!-- First Tier Drop Down -->
                            <ul2>
                                <li2><a href="#">Resources</a></li>
                                    <li2><a href="#">Links</a></li>
                                        <li2><a href="#">Tutorials</a>
                                            <!-- Second Tier Drop Down -->
                                            <ul2>
                                                <li2><a href="#">HTML/CSS</a></li>
                                                    <li2><a href="#">jQuery</a></li>
                                                        <li2><a href="#">Other</a>
                                                            <!-- Third Tier Drop Down -->
                                                            <ul2>
                                                                <li2><a href="#">Stuff</a></li>
                                                                    <li2><a href="#">Things</a></li>
                                                                        <li2><a href="#">Other Stuff</a></li>
                                                            </ul2>
                                                        </li2>
                                            </ul2>
                                        </li2>
                            </ul2>
                        </li2>

                </ul2>
            </nav2>
        
			<!--deneme alanı -->
            <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                        <div id="submenu-11" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>


            <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
        </ul>
    </div>
</div>
</nav>

<!-- END nav -->