<header>
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-2 px-sm-2 px-1">
                <!-- logo --> 
                    <?php if(!$this->session->userdata('s_id')){ ?>
                <div id="logo">
                    <a style="font-size:25px" href="homepage">SCHOOL MANAGEMENT SYSTEM </a>
                </div><?php } 
                else { ?>
                <div id="logo">
                    <a style="font-size:25px;font-family:serif;" href="homepage">WelCome:<?php echo $this->session->userdata('s_name') ?> </a>
                </div> <?php } ?>
                <!-- //logo -->
                <!-- nav -->
                <div style="color:blue;" class="nav_w3ls ml-lg-5" class="yamm">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu list">
                            <li class="active"><a href="homepage">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#join">Join Now</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Pages <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="tec-register" class="drop-text">Teacher Registration</a></li>
                                    <li><a href="Teacher-list" class="drop-text">Subject & Teacher</a></li>
                                    <li><a href="#events" class="drop-text">Events</a></li>
                                    <li><a href="#what" class="drop-text">What We Do?</a></li>
                                    <li><a href="#courses" class="drop-text">Popular Courses</a></li>
                                    <li><a href="#stats" class="drop-text">Statistics</a></li>
                                    <li><a href="#gallery" class="drop-text">Gallery</a></li>
                                </ul>
                            </li>
                           <!-- <li><a href="#contact">Contact</a></li>-->
                          <!--  <li><a href="login">Login</a></li>-->
                             <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Student section <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="SList" class="drop-text">Student list</a></li>
                                    <li><a href="login" class="drop-text">Login</a></li>
                                </ul>
                            </li>
                         <?php if(!$this->session->userdata('s_id')){ ?>
                         <li><a href="login">Login</a></li><?php } 
                          else { ?>
                            <li><a href="logout">logout</a></li>
                          <?php }?> 
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>



