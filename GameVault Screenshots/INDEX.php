<?php
session_start();

    include("connection.php");
    include("functions.php");

    
?>


<!DOCTYPE html> 
<html lang="en-US"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> 
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"> 
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"> 
    <link rel="manifest" href="favicon/site.php"> 
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464"> 
    <meta name="msapplication-TileColor" content="#2b2e33">
    <meta name="theme-color" content="#ffffff">  
     <link rel="stylesheet" href="assets/css/bootstrap-min5.css">  
     <script src="assets/js/jquery-3.4.1.min.js"></script> 
     <script src="assets/js/bootstrap-popper-bootbox.js"></script>  
     <meta charset="UTF-8"> 
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> 
     <meta http-equiv="Content-Language" content="en-us"> 
     <link rel="alternate" type="application/rss+xml" title="RSS Feed for FreeToGame.com" href="rss/games">   

     <title>Download Free Multiplayer Online Games (2024)</title> 

        <meta name="description" content="FreeToGame provides access to the best free-to-play multiplayer games and MMO Games while rewarding gamers with free premium in-game loot and exclusive perks. Download your favorite games at GameVault!"> 
        <meta name="keywords" content="free-to-play, free to game, free to play, free mmo, free mmorpg, free games"> 
        <meta name="author" content="Digiwalls Media"> 
            <link rel="canonical" href="index.php">  
            <meta property="og:title" content="Download Free Games &amp; MMO Games - FreeToGame.com"> 
            <meta property="og:type" content="website"> 
            <meta property="og:locale" content="en_US"> 
            <meta property="og:url" content="https://www.freetogame.com"> 
            <meta property="og:image" content="https://www.freetogame.com/assets/images/freetogame-card.jpg"> 
            <meta property="og:description" content="FreeToGame provides access to the best free-to-play games and MMO Games while rewarding gamers with free premium in-game loot and special offers."> 
            <meta property="og:site_name" content="FreeToGame.com"> 
            <meta property="fb:admins" content="109927137154968">
            <meta name="twitter:card" content="summary_large_image"> 
            <meta name="twitter:site" content="@FreeToGamecom"> 
            <meta name="twitter:title" content="Download Free Games &amp; MMO Games - FreeToGame.com"> 
            <meta name="twitter:description" content="FreeToGame provides access to the best free-to-play games and MMO Games while rewarding gamers with free premium in-game loot, special offers and exclusive perks."> 
            <meta name="twitter:image:src" content="https://www.freetogame.com/assets/images/freetogame-card.jpg">  

                <script async src="assets/js/video-hover.js"></script> 
                <script type="application/ld+json">[{"@context":"http://schema.org","@type":"Organization","url":"https://www.freetogame.com","name":"FreeToGame","logo":"https://www.freetogame.com/favicon/android-chrome-512x512.png","email":"contactusgamevault@gmail.com","sameAs":["https://www.facebook.com/gamevaultwebsite/","https://www.instagram.com/itsgamevault/?hl=en"],"contactPoint":[{"@type":"ContactPoint","contactType":"customer service","url":"https://www.freetogame.com/contact","email":"contactusgamevault@gmail.com"}]}]</script> 
                <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https://www.freetogame.com","name":"Home"}}]}</script> 
                <meta> 
                <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}return _z},set:function(val){_z=val}})});</script> 
            </head> 

        <style>img{width:100%;height:auto;aspect-ratio:attr(width) / attr(height)}.image-wrapper{position:relative}.card-img-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-widget-top{width:100%;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.featuredvideo{object-fit:cover;position:absolute;width:100%;height:100%;padding-right:0;padding-left:0;left:0;top:0}.loader-wrapper{position:absolute;top:0;left:0;display:flex;align-items:center;justify-content:center;width:100%;height:100%;background:rgba(0, 47, 255, .247);display:none}@media (min-width:576px){.featuredvideo3{object-fit:cover;position:absolute;width:100%;height:289px;padding-right:0px;padding-left:0px;left:0;top:0}}@media (min-width:768px){.featuredvideo3{position:absolute;object-fit:cover;width:216.667px;height:122.283px;padding-right:0px;padding-left:0px;left:0;top:0}}@media (min-width:992px){.featuredvideo3{position:absolute;object-fit:cover;width:296.667px;height:169.433px;padding-right:0px;padding-left:0px;left:0;top:0}}@media (min-width:1200px){.featuredvideo3{position:absolute;object-fit:cover;width:357.667px;height:202.03px;padding-right:0px;padding-left:0px;left:0;top:0}}</style> 

    <body> <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> 
        <div class="container"> 
            <a href="index.php" class="navbar-brand mt-n2 mb-n2">
                <img src="assets/images/freetogame-logo.png" height="45" alt="FreeToGame"></a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 

                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav mr-auto"> 
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> 
                            <ul class="dropdown-menu" aria-labelledby="dropdown02"> 
                                <li>
                                    <a class="dropdown-item" href="games/mmorpg.php">MMORPG</a></li> 
                                    <li>
                                        <a class="dropdown-item" href="games/shooter.php">Shooter</a></li> 
                                        <li>
                                            <a class="dropdown-item" href="games/moba.php">MOBA</a></li> 
                                            <li>
                                                <a class="dropdown-item" href="games/anime.php">Anime</a></li> 
                                                <li>
                                                    <a class="dropdown-item" href="games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="games/social.php">Social</a></li> <li><a class="dropdown-item" href="games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="giveaways.php">Special Offers</a> </li> 

                                                    <li class="nav-item"> 
                                                        <a class="nav-link js-scroll-trigger" href="api-doc.php">API</a> </li> 
                                                          </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> 

                                                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a> </li> 

                                                        



<!-- Logout button -->
    <li class="nav-item">
        <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Logout" href="#" onclick="confirmLogout()">
            <i class="fas fa-sign-out-alt"></i><span class="ml-1 d-lg-none"> Logout</span>
        </a>
    </li>

    <!-- JavaScript to handle logout -->
    <script>
        function confirmLogout() {
            var confirmLogout = confirm("Are you sure you want to logout?");
            if (confirmLogout) {
                logout();
            }
        }

        function logout() {
            fetch('logout.php', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Display a message before logging out
                    alert("Logging out...");
                    // Clear sessionStorage and set a flag in localStorage to notify other tabs
                    sessionStorage.clear();
                    localStorage.setItem('logout-event', 'logout' + Math.random());
                    // Redirect to login page
                    window.location.href = 'login.php';
                } else {
                    console.error('Logout failed');
                }
            })
            .catch(error => console.error('Error logging out:', error));
        }

        // Listen for changes in localStorage to handle logout in other tabs
        window.addEventListener('storage', function(event) {
            if (event.key === 'logout-event') {
                // Clear sessionStorage and redirect to the login page
                sessionStorage.clear();
                window.location.href = 'login.php';
            }
        });
    </script>




<nav class="navbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <span class="nav-link">
                <?php
                if (isset($_SESSION['username'])) {
                    echo "GREETINGS! " . strtoupper(htmlspecialchars($_SESSION['username']));
                } else {
                    echo "GREETINGS! Guest";
                }
                ?>
            </span>
    
             <li class="nav-item">
                  <a class="btn btn-outline-ftg col-md-11 mt-1 d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="profile.php">Edit Profile</a>
            </li>
                </ul> 
            </div> 
        </div> 
    </nav>  






<main> 
    <div id="content-wrap">  
        <section class="jumbotron text-center"> 
            <div class="container mb-n2"> 
                <h1 class="jumbotron-heading">Discover the best <span class="ftg-blue">free-to-play</span> games!</h1> <p class="lead text-muted">Download your favorite games at GameVault!</p> <p> <a class="btn btn-outline-secondary btn-md ml-0" href="games.php" role="button">Browse Games</a> 
                </p> 
            </div> 
            </section> 
                <div class="content py-5"> 
                    <div class="container">     
                    <h2>Personalized Recommendations</h2> 
                    <p class="a2"><i class="fas fa-question-circle mr-1">
                        
                    </i>Log In to view your personalized recommendations! Discover games you'll love.</p> 
                    <div class="row mb-4"> 
                        <div class="game-card video-card col-md-4" data-video-src="/g/8/videoplayback.webm"> 
                            <div class="card mb-4 grow shadow"> 
                                <div class="image-wrapper"> 
                                    <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/8/thumbnail.jpg" alt="Trove - A free to play Sandbox massively multiplayer online role-playing game! "> 
                                    <div class="loader-wrapper"> 
                                        <div class="spinner-grow ftg-blue" role="status"> 
                                            <span class="sr-only">Loading...</span> 
                                        </div> 
                                    </div> 
                                </div> 
                                <video class="featuredvideo3" loop preload="none" muted>
                                    
                                </video> 
                                
                                <div class="card-body"> 
                                    <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> 
                                    <a href="trove.php" class="stretched-link no-underline">
                                        <h4 class="card-title text-truncate">Trove</h4>
                                    </a> 
                                    <div class="d-flex justify-content-between align-items-center"> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="game-card video-card col-md-4" data-video-src="/g/475/videoplayback.webm"> 
                            <div class="card mb-4 grow shadow"> 
                                <div class="image-wrapper"> 
                                    <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/475/thumbnail.jpg" alt="Genshin Impact - If you’ve been looking for a game to scratch that open-world action RPG itch, one with perhaps a bit of Asian flair, then you’re going to want to check out miHoYo’s Genshin Impact."> 
                                    <div class="loader-wrapper"> 
                                        <div class="spinner-grow ftg-blue" role="status"> 
                                            <span class="sr-only">Loading...</span> 
                                        </div> 
                                    </div> 
                                </div> 
                                <video class="featuredvideo3" loop preload="none" muted>
                                    
                                </video> 
                                <div class="card-body"> 
                                    <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> 
                                    <a href="genshin-impact.php" class="stretched-link no-underline">
                                        <h4 class="card-title text-truncate">Genshin Impact</h4>
                                    </a> 
                                    <div class="d-flex justify-content-between align-items-center"> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="game-card video-card col-md-4" data-video-src="/g/4/videoplayback.webm"> 
                            <div class="card mb-4 grow shadow"> 
                                <div class="image-wrapper"> 
                                    <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/4/thumbnail.jpg" alt="CRSED: F.O.A.D. - Take the battle royale genre and add mystical powers and you have CRSED: F.O.A.D. (Aka Cuisine Royale: Second Edition)"> 
                                    <div class="loader-wrapper"> 
                                        <div class="spinner-grow ftg-blue" role="status"> 
                                            <span class="sr-only">Loading...</span> 
                                        </div> 
                                    </div> 
                                </div> 
                                <video class="featuredvideo3" loop preload="none" muted></video> 
                                <div class="card-body"> 
                                    <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> 
                                    <a href="crsed.php" class="stretched-link no-underline">
                                        <h4 class="card-title text-truncate">CRSED: F.O.A.D.</h4>
                                    </a> 
                                    <div class="d-flex justify-content-between align-items-center"> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>   
                    <div class="row mb-4"> 
                        <div class="col-md-8"> 
                            <h2 class="h3">Recently Added</h2> 
                            <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/577/videoplayback.webm"> 
                                <div class="card-body"> 
                                    <div class="row"> 
                                        <div class="col-3 align-self-center mt-n2"> 
                                            <div class="card"> 
                                                <div class="image-wrapper"> 
                                                    <img class="card-img-top" src="g/577/thumbnail.jpg" alt="Deceit 2"> 
                                                    <div class="loader-wrapper"> 
                                                        <div class="spinner-grow ftg-blue" role="status"> 
                                                            <span class="sr-only">Loading...</span> 
                                                        </div> 
                                                    </div> 
                                                </div> 
                                                <video class="featuredvideo" loop preload="none" muted>
                                                    
                                                </video> 
                                            </div> 
                                        </div> 
                                        <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> 
                                            <a href="deceit-2.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Deceit 2</h4></a> <div class="text-truncate text-muted mb-1">A social deduction game from World Makers.</div> <span class="badge badge-secondary text-dark mr-2">Action</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/576/videoplayback.webm"> <div class="card-body"> <div class="row"> <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/576/thumbnail.jpg" alt="Battle Teams 2"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="battle-teams-2.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Battle Teams 2</h4></a> <div class="text-truncate text-muted mb-1">A multiplayer tactical shooter with an Eastern aesthetic.</div> <span class="badge badge-secondary text-dark mr-2">Shooter</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/575/videoplayback.webm"> <div class="card-body"> <div class="row"> <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/575/thumbnail.jpg" alt="One Punch Man: World"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="one-punch-man-world.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">One Punch Man: World</h4></a> <div class="text-truncate text-muted mb-1">A free-to-play multiplayer 3D action game from Crunchyroll Games.</div> <span class="badge badge-secondary text-dark mr-2">Action Game</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/574/videoplayback.webm"> <div class="card-body"> <div class="row"> <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/574/thumbnail.jpg" alt="Mad World"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="mad-world.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Mad World</h4></a> <div class="text-truncate text-muted mb-1">A free-to-play Browser MMORPG from Jandisoft with a unique theme and art style.</div> <span class="badge badge-secondary text-dark mr-2">MMORPG</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/573/videoplayback.mp4"> <div class="card-body"> <div class="row"> <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/573/thumbnail.jpg" alt="Titan Revenge"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="titan-revenge.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Titan Revenge</h4></a> <div class="text-truncate text-muted mb-1">A 3D Norse-themed browser MMORPG developed and published by Game Hollywood Games</div> <span class="badge badge-secondary text-dark mr-2">MMORPG</span><span class="badge text-dark badge-secondary mr-2">Fantasy</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fas fa-window-maximize"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/572/videoplayback.webm"> <div class="card-body"> <div class="row"> 

    <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/572/thumbnail.jpg" alt="Ravendawn"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="ravendawn.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Ravendawn</h4></a> <div class="text-truncate text-muted mb-1">A 2D top-down MMORPG featuring homesteading and building mechanics.</div> <span class="badge badge-secondary text-dark mr-2">MMORPG</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <div class="game-card card grow mb-3 shadow h-md-250 video-card" data-video-src="/g/571/videoplayback.webm"> <div class="card-body"> <div class="row"> <div class="col-3 align-self-center mt-n2"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top" src="g/571/thumbnail.jpg" alt="Infinite Borders"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-7 col-sm-6 col-lg-7 align-self-center justify-content-center position-static"> <a href="infinite-borders.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mt-n2 mb-1">Infinite Borders</h4></a> <div class="text-truncate text-muted mb-1">A free-to-play strategy game from NetEase set during China’s Three Kingdoms period.</div> <span class="badge badge-secondary text-dark mr-2">Strategy</span> </div> <div class="col-1 align-self-center text-center text-muted justify-content-center d-none d-sm-block"> <h5><i class="fab fa-windows"></i></h5> </div> <div class="col-1 justify-content-center text-center align-self-center"> <span class="badge badge-ftg py-2 px-2 mb-2">FREE</span> </div> </div> </div> </div> <span class="text-center"><a class="btn btn-outline-secondary py-2 pt-1 float-right" href="games.php">More Games <i class="fas fa-angle-right"></i></a></span> </div> <div class="col-md-4"> <h2 class="h3">Most Played Today</h2> <div class="game-card video-card" data-video-class="featuredvideo" data-video-src="/g/365/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="g/365/thumbnail.jpg" alt="Naruto Online"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="naruto-online.php" class="stretched-link no-underline"></a> </div> </div> <div class="game-card video-card" data-video-class="featuredvideo" data-video-src="/g/516/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="g/516/thumbnail.jpg" alt="PUBG: BATTLEGROUNDS"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="pubg.php" class="stretched-link no-underline"></a> </div> </div> <div class="game-card video-card" data-video-class="featuredvideo" data-video-src="/g/475/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="g/475/thumbnail.jpg" alt="Genshin Impact"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="genshin-impact.php" class="stretched-link no-underline"></a> </div> </div> <div class="game-card video-card" data-video-class="featuredvideo" data-video-src="/g/466/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="g/466/thumbnail.jpg" alt="Valorant"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="valorant.php" class="stretched-link no-underline"></a> </div> </div> </div> </div>   <h2 class="h3">Community Recommendations</h2> <div class="row mb-5"> <div class="col-md-6"> <div class="deep-dark pt-1 pb-1 pl-1 mb-3"> <div class="row pl-3 pr-3 align-items-center"> <div class="game-card col-md-6 mt-4"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-img-top" src="g/475/thumbnail.jpg" alt="Genshin Impact"> </div> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="genshin-impact.php" class="stretched-link no-underline"> <h4 class="card-title text-truncate">Genshin Impact</h4> </a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="col-md-6 mt-3"> <div class="truncate4 mb-2 text"> <i class="fas fa-quote-left pr-2"></i> I like this game, finally found my dream game. Not like the others games i know, and now i'm at AR 59 so anyone if wanna be my online friends, feel free t add me !! here's my UID 815925618, oh btw i'm on Asia server. Bye-bye !! </div> <img class="img-profile rounded-circle" src="assets/images/avatars/default/default-small.png"><span class="text-muted pl-2 text-truncate">By mara_haychooo</span> </div> </div> </div> </div> <div class="col-md-6"> <div class="deep-dark pt-1 pb-1 pl-1 mb-3"> <div class="row pl-3 pr-3 align-items-center"> <div class="game-card col-md-6 mt-4"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-img-top" src="g/466/thumbnail.jpg" alt="Valorant"> </div> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="valorant.php" class="stretched-link no-underline"> <h4 class="card-title text-truncate">Valorant</h4> </a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="col-md-6 mt-3"> <div class="truncate4 mb-2 text"> <i class="fas fa-quote-left pr-2"></i> Competitive FPS that works great. Its different modes, fast and effective gameplay, and enjoyable graphics. </div> <img class="img-profile rounded-circle" src="u/avatar/55112/62974fdd32e3a-small.png"><span class="text-muted pl-2 text-truncate">By Axel0689</span> </div> </div> </div> </div> </div>   <section class="mb-5 text-center text-lg-left dark-grey-text shadow bg-about">  <div class="row align-items-center">  <div class="col-md-5 mb-4 mb-md-0 py-4 pl-md-5 text-center">  <div class="view overlay z-depth-1-half text-center"> <img src="assets/images/ftg-img.jpg" class="img-fluid" alt=""> <a href="#"> <div class="mask rgba-white-light"></div> </a> </div> </div>   <div class="col-md-7 mb-4 mb-md-0 px-5 pb-3"> <h2 class="mt-4 h3">More Fun and More Rewarding!</h2> <p class="text-muted text">We are GameVault, a new gaming platform that brings all the best Free-to-Play Multiplayer Games and MMO Games into one place while rewarding gamers with free premium loot and exlusive perks. Plus maintain your own games library, track what you've played and search for what to play next!</p><a class="btn btn-outline-secondary btn-md ml-0" href="about.php" role="button">Learn More</a> </div>  </div>  </section>  </div> </div> </div> </main> <style>.card-body{padding-bottom:12px}.bg-about{background-color:#23262b !important;border:1px solid rgba(28, 28, 28, 0.6)}</style>  <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="about.php">About Us</a> </p> <p> <a href="api-doc.php">API</a> </p> <p> <a href="contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="faq.php">Help/FAQ</a> </p> <p> <a href="support.php">Support &amp; Bugs</a> </p> 

        <p><a href="https://www.biblegateway.com/passage/?search=Proverbs+16%3A3&version=NIV" target="_blank"> Proverbs 16:3 </a></p> 

        </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="privacy-policy.php">Privacy Policy</a> </p> <p> <a href="cookies-policy.php">Cookies Policy</a> </p> <p> <a href="terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/JeffersonBDelfin26?mibextid=ZbWKwL" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> </body> 

</html>