<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "UA-90680653-2");
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template" />
    <meta name="author" content="BootstrapDash" />

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet" />
    <link href="../lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" />

    <!-- azia CSS -->
    <link rel="stylesheet" href="azia.css" />
</head>

<div class="az-header">
    <div class="container">
        <div class="az-header-left">
            <a href="index.php" class="az-logo"><span></span> azia</a>
            <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div>
        <!-- az-header-left -->
        <div class="az-header-menu">
            <div class="az-header-menu-header">
                <a href="index.php" class="az-logo"><span></span> azia</a>
                <a href="" class="close">&times;</a>
            </div>
            <!-- az-header-menu-header -->
            <ul class="nav">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> users</a>
                </li>
                <li class="nav-item">
                    <a href="resources.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> resources</a>
                </li>
                <li class="nav-item">
                    <a href="categories.php" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> categories</a>
                </li>
            </ul>
        </div>
        <!-- az-header-menu -->
        <div class="az-header-right">
            <a href="https://www.bootstrapdash.com/demo/azia-free/docs/documentation.html" target="_blank" class="az-header-search-link"><i class="far fa-file-alt"></i></a>
            <a href="" class="az-header-search-link"><i class="fas fa-search"></i></a>
            <div class="az-header-message">
                <a href="#"><i class="typcn typcn-messages"></i></a>
            </div>
            <!-- az-header-message -->
            <div class="dropdown az-header-notification">
                <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header mg-b-20 d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <h6 class="az-notification-title">Notifications</h6>
                    <p class="az-notification-text">You have 2 unread notification</p>
                    <div class="az-notification-list">
                        <div class="media new">
                            <div class="az-img-user">
                                <img src="../img/faces/face2.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>
                                    Congratulate <strong>Socrates Itumay</strong> for work
                                    anniversaries
                                </p>
                                <span>Mar 15 12:32pm</span>
                            </div>
                            <!-- media-body -->
                        </div>
                        <!-- media -->
                        <div class="media new">
                            <div class="az-img-user online">
                                <img src="../img/faces/face3.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <strong>Joyce Chua</strong> just created a new blog post
                                </p>
                                <span>Mar 13 04:16am</span>
                            </div>
                            <!-- media-body -->
                        </div>
                        <!-- media -->
                        <div class="media">
                            <div class="az-img-user">
                                <img src="../img/faces/face4.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <strong>Althea Cabardo</strong> just created a new blog
                                    post
                                </p>
                                <span>Mar 13 02:56am</span>
                            </div>
                            <!-- media-body -->
                        </div>
                        <!-- media -->
                        <div class="media">
                            <div class="az-img-user">
                                <img src="../img/faces/face5.jpg" alt="" />
                            </div>
                            <div class="media-body">
                                <p>
                                    <strong>Adrian Monino</strong> added new comment on your
                                    photo
                                </p>
                                <span>Mar 12 10:40pm</span>
                            </div>
                            <!-- media-body -->
                        </div>
                        <!-- media -->
                    </div>
                    <!-- az-notification-list -->
                    <div class="dropdown-footer">
                        <a href="">View All Notifications</a>
                    </div>
                </div>
                <!-- dropdown-menu -->
            </div>
            <!-- az-header-notification -->
            <div class="dropdown az-profile-menu">
                <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt="" /></a>
                <div class="dropdown-menu">
                    <div class="az-dropdown-header d-sm-none">
                        <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                    </div>
                    <div class="az-header-profile">
                        <div class="az-img-user">
                            <img src="../img/faces/face1.jpg" alt="" />
                        </div>
                        <!-- az-img-user -->
                        <h6>Aziana Pechon</h6>
                        <span>Premium Member</span>
                    </div>
                    <!-- az-header-profile -->

                    <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                    <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                    <a href="page-signin.html" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
                </div>
                <!-- dropdown-menu -->
            </div>
        </div>
        <!-- az-header-right -->
    </div>
    <!-- container -->
</div>