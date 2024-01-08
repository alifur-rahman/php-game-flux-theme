<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Project Alfheim</title>
    <link rel="stylesheet" href="css/flux.css" type="text/css" media="screen" title="" charset="utf-8" />
    <link href="css/flux/unitip.css" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />

    <link href="css/aos.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/boxicons.min.css" rel="stylesheet" />
    <link href="css/glightbox.min.css" rel="stylesheet" />
    <link href="css/remixicon.css" rel="stylesheet" />
    <link href="css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="css/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Theme Main CSS File -->
    <link href="css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/flux.datefields.js"></script>
    <script type="text/javascript" src="js/flux.unitip.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
</head>

<body>
    <div class="bg-dark p-2 pe-4 server-status">
        <iframe src="https://free.timeanddate.com/clock/i4ejlcxu/n179/fn13/fcbababa/tct/pct/tt0/tm1/tb2" frameborder="0"
            width="282" height="18" allowtransparency="true" class="server-time"></iframe>
        <span class="float-sm-end"><span class="text-label">Users Online:</span>
            <span class="up">275</span> &nbsp;&nbsp;
            <span class="text-label">Autotraders:</span>
            <span class="up">766</span> &nbsp;&nbsp;
            <span class="text-label">Total:</span>
            <span class="up">1041</span> &nbsp;&nbsp;
            <span class="text-label">Unique Logins(72h):</span>
            <span class="up">757</span> &nbsp;&nbsp;
            <span class="status-label">Status: <img src="img/online.png" height="20px" /></span></span>
        <!-- End LowProfileMode -->
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <!-- Uncomment below if you prefer to use an image logo --><!-- <h1 class="logo me-auto"><a href="index.html">AlfheimRO</a></h1> -->
            <a href="?module=main" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid" /></a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li>
                        <a class="nav-link scrollto" href="?module=main">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><span>Server Info</span></a>
                        <ul>
                            <li>
                                <a href="?module=main&amp;action=features">Settings/Features</a>
                            </li>
                            <li>
                                <a href="?module=main&amp;action=rules">Server Rules</a>
                            </li>
                            <li>
                                <a href="?module=main&amp;action=about">About Us</a>
                            </li>
                            <li>
                                <a href="?module=woe_stats">WOE Statistics</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="?module=main#newsupdates">News &amp; Updates</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="wiki">Wiki</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="?module=donate">Donate</a>
                    </li>
                    <!--<li><a class="nav-link scrollto" href="?module=market">Market</a></li>-->
                    <li>
                        <a class="nav-link scrollto" href="?module=main&amp;action=downloads">Download</a>
                    </li>
                    <li>
                        <a class="nav-link scrollto discord-nav" href="https://discord.gg/projectalfheim">&nbsp;</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle">&nbsp;</i>
            </nav>
            <!-- .navbar -->
            <!-- End LowProfileMode -->
        </div>
    </header>
    <!-- End Header --><!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <!-- <div class="magic-circle"></div> -->
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="login-panel mx-auto">
                        <img src="img/logo.png" alt="" class="img-fluid users-area-logo" />
                        <p class="text-white text-center users-heading">USERS AREA</p>
                        <form action="/?module=account&amp;action=login&amp;return_url=" method="post">
                            <input type="hidden" name="server" value="AlfheimRO" />
                            <div class="login_row_main">
                                <div class="login_row">
                                    <table>
                                        <tr>
                                            <td>
                                                <input type="text" name="username" placeholder="Username"
                                                    class="textClass" id="username" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="password" name="password" placeholder="Password"
                                                    class="textClass" id="password" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" value="lsRememberMe" id="rememberMe" /><label
                                                    for="rememberMe" class="text-white">Remember me</label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="login_btn">
                                    <input type="submit" value="LOGIN" class="loginBtn" /><br />
                                </div>
                                <div style="height: 5px"></div>
                            </div>
                            <div class="accountAction">
                                Don't have an account?
                                <a href="/?module=account&amp;action=create">Register Now!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
    <!-- Content -->
    <div class="global-container" id="main-cont">
        <!-- Messages -->
        <!-- Sub menu -->
        <!-- Page menu -->
        <!-- Credit balance -->
    </div>
    <!-- ./global-container -->
    <main id="main">