<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?><!DOCTYPE html> <html lang="en-US"> 
<!-- Mirrored from www.freetogame.com/top/pc/battle-royale by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 07:47:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head> <link rel="apple-touch-icon" sizes="180x180" href="../../favicon/apple-touch-icon.png"> <link rel="icon" type="image/png" sizes="32x32" href="../../favicon/favicon-32x32.png"> <link rel="icon" type="image/png" sizes="16x16" href="../../favicon/favicon-16x16.png"> <link rel="manifest" href="../../favicon/site.php"> <link rel="mask-icon" href="../../favicon/safari-pinned-tab.svg" color="#646464"> <meta name="msapplication-TileColor" content="#2b2e33"> <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="../../assets/css/bootstrap-min5.css">  <script src="../../assets/js/jquery-3.4.1.min.js"></script> <script src="../../assets/js/bootstrap-popper-bootbox.js"></script>  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> <meta http-equiv="Content-Language" content="en-us"> <link rel="alternate" type="application/rss+xml" title="RSS Feed for FreeToGame.com" href="../../rss/games">  <title>Top 10 Free Battle Royale Games List for PC in March 2024!</title> <meta name="description" content="Download the top 10 free-to-play Battle Royale Games for PC!">  <meta property="og:title" content="Top 10 Free Battle Royale Games List for PC in March 2024!"> <meta property="og:locale" content="en_US"> <meta property="og:url" content="https://www.freetogame.com/top/pc/battle-royale"> <meta property="og:image" content="https://www.freetogame.com/assets/images/freetogame-card.jpg"> <meta property="og:description" content="Download the top 10 free-to-play Battle Royale Games for PC!"> <meta property="og:site_name" content="FreeToGame.com"> <meta property="fb:admins" content="109927137154968">  <meta name="twitter:card" content="summary_large_image"> <meta name="twitter:site" content="@FreeToGamecom"> <meta name="twitter:title" content="Top 10 Free Battle Royale Games List for PC in March 2024!"> <meta name="twitter:description" content="Download the top 10 free-to-play Battle Royale Games for PC!"> <meta name="twitter:image:src" content="https://www.freetogame.com/assets/images/freetogame-card.jpg">  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> <div class="container"> <a href="../../index.php" class="navbar-brand mt-n2 mb-n2"><img src="../../assets/images/freetogame-logo.png" height="45" alt="FreeToGame"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarResponsive"> <ul class="navbar-nav mr-auto"> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="../../games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown02"> <li><a class="dropdown-item" href="../../games/mmorpg.php">MMORPG</a></li> <li><a class="dropdown-item" href="../../games/shooter.php">Shooter</a></li> <li><a class="dropdown-item" href="../../games/moba.php">MOBA</a></li> <li><a class="dropdown-item" href="../../games/anime.php">Anime</a></li> <li><a class="dropdown-item" href="../../games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="../../games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="../../games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="../../games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="../../games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="../../games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="../../games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="../../games/social.php">Social</a></li> <li><a class="dropdown-item" href="../../games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="../../games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="../../browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="../../browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="../../browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="../../browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="../../browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="../../browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="../../browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="../../browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="../../browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="../../browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="../../browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="../../giveaways.php">Special Offers</a> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="../../api-doc.php">API</a> </li> <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h"></i> </a> <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> <h6 class="dropdown-header">GAMEVAULT</h6> </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="../../search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a>  </ul> </div> </div> </nav>  <script async src="../../assets/js/video-hover.js"></script> <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
return _z},set:function(val){_z=val}})});</script> </head> <body>  <main role="main"> <div class="main-cont py-4"> <div class="container"> <h1>Top 10 Free <u>Battle Royale</u> Games for <u>PC</u> in March 2024</h1> <div class="row pt-3"> <div class="col-auto col-sm-6"> <a class="button2" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-muted mr-1">More Top 10's:</span> Battle Royale<i class="ml-2 fas a2 fa-chevron-down"></i></a> <ul class="dropdown-menu scrollable-menu scrollbar-black shadow" role="menu"> <h6 class="dropdown-header">By genre:</h6> <a class="dropdown-item" type="button" href="mmo.php">Top MMO</a> <a class="dropdown-item" type="button" href="mmorpg.php">Top MMORPG</a> <a class="dropdown-item" type="button" href="shooter.php">Top Shooter</a> <a class="dropdown-item" type="button" href="strategy.php">Top Strategy</a> <a class="dropdown-item" type="button" href="moba.php">Top Moba</a> <a class="dropdown-item" type="button" href="card.php">Top Card Games</a> <a class="dropdown-item" type="button" href="racing.php">Top Racing</a> <a class="dropdown-item" type="button" href="sports.php">Top Sports</a> <a class="dropdown-item" type="button" href="social.php">Top Social</a> <a class="dropdown-item" type="button" href="fighting.php">Top Fighting</a> <h6 class="dropdown-header">By genre &amp; tags:</h6> <a class="dropdown-item" type="button" href="mmofps.php">Top MMOFPS</a> <a class="dropdown-item" type="button" href="action-rpg.php">Top Action RPG</a> <a class="dropdown-item" type="button" href="sandbox.php">Top Sandbox</a> <a class="dropdown-item" type="button" href="open-world.php">Top Open World</a> <a class="dropdown-item" type="button" href="survival.php">Top Survival</a> <a class="dropdown-item" type="button" href="battle-royale.php">Top Battle Royale</a> <a class="dropdown-item" type="button" href="mmotps.php">Top MMOTPS</a> <a class="dropdown-item" type="button" href="anime.php">Top Anime</a> <a class="dropdown-item" type="button" href="pvp.php">Top PvP</a> <a class="dropdown-item" type="button" href="pve.php">Top PvE</a> <a class="dropdown-item" type="button" href="pixel.php">Top Pixel</a> <a class="dropdown-item" type="button" href="mmorts.php">Top MMORTS</a> <a class="dropdown-item" type="button" href="fantasy.php">Top Fantasy</a> <a class="dropdown-item" type="button" href="sci-fi.php">Top Sci-Fi</a> <a class="dropdown-item" type="button" href="action.php">Top Action</a> <a class="dropdown-item" type="button" href="voxel.php">Top Voxel</a> <a class="dropdown-item" type="button" href="zombie.php">Top Zombie</a> <a class="dropdown-item" type="button" href="turn-based.php">Top Turn-Based</a> <a class="dropdown-item" type="button" href="first-person.php">Top First Person</a> <a class="dropdown-item" type="button" href="third-Person.php">Top Third Person</a> <a class="dropdown-item" type="button" href="top-down.php">Top Top-Down View</a> <a class="dropdown-item" type="button" href="3d.php">Top 3D Graphics</a> <a class="dropdown-item" type="button" href="2d.php">Top 2D Graphics</a> <a class="dropdown-item" type="button" href="military.php">Top Military</a> <a class="dropdown-item" type="button" href="tank.php">Top Tank</a> <a class="dropdown-item" type="button" href="space.php">Top Space</a> <a class="dropdown-item" type="button" href="sailing.php">Top Sailing</a> <a class="dropdown-item" type="button" href="side-scroller.php">Top Side Scroller</a> <a class="dropdown-item" type="button" href="superhero.php">Top Superhero</a> <a class="dropdown-item" type="button" href="permadeath.php">Top Permadeath</a> </ul> </div> <div class="col-auto col-sm-6"> <span class="mr-1 text-muted">Platform:</span> <a class="button2" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PC<i class="ml-2 fas a2 fa-chevron-down"></i></a> <div class="dropdown-menu shadow" aria-labelledby="dropdownMenu2"> <h6 class="dropdown-header">Select platform:</h6> <a class="dropdown-item" type="button" href="battle-royale.php"><i class="fab fa-windows mr-2"></i>Windows (PC)</a> <a class="dropdown-item" type="button" href="../browser/battle-royale.php"><i class="fas fa-window-maximize mr-2"></i>Browser</a> <a class="dropdown-item" type="button" href="../battle-royale.php">All Platforms</a> </div> </div> </div> <hr> <div class="mb-3 text-muted">Below, you can find our ongoing Top 10 Free Battle Royale Games in March 2024. Our ranking is based on our users preferences during this calendar month and all results are updated daily. You can also use the menu to explore even more Top 10's for your favorite platforms.</div>  <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/516/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>1</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 12%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/516/thumbnail.jpg" alt="PUBG: BATTLEGROUNDS"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../pubg.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">PUBG: BATTLEGROUNDS</h2></a> <div class="text-muted text-truncate">Get into the action in one of the longest running battle royale games PUBG Battlegrounds.</div> <span class=""><i class="fas fa-award mr-2"></i>PUBG: BATTLEGROUNDS is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/452/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>2</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 14%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/452/thumbnail.jpg" alt="Call Of Duty: Warzone"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../call-of-duty-warzone.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Call Of Duty: Warzone</h2></a> <div class="text-muted text-truncate">A standalone free-to-play battle royale and modes accessible via Call of Duty: Modern Warfare.</div> <span class=""><i class="fas fa-award mr-2"></i>Call Of Duty: Warzone is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/57/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>3</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 32%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/57/thumbnail.jpg" alt="Fortnite"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../fortnite-battle-royale.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Fortnite</h2></a> <div class="text-muted text-truncate">A free-to-play, standalone mode of Epic Game's Fortnite. </div> <span class=""><i class="fas fa-award mr-2"></i>Fortnite is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/523/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>4</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 16%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/523/thumbnail.jpg" alt="Fall Guys"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../fall-guys.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Fall Guys</h2></a> <div class="text-muted text-truncate">Play the most competitive massively multiplayer party royale game featuring beans ever for free on a variety of platforms. </div> <span class=""><i class="fas fa-award mr-2"></i>Fall Guys is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/576/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>5</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 31%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/576/thumbnail.jpg" alt="Battle Teams 2"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../battle-teams-2.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Battle Teams 2</h2></a> <div class="text-muted text-truncate">A multiplayer tactical shooter with an Eastern aesthetic.</div> <span class=""><i class="fas fa-award mr-2"></i>Battle Teams 2 is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/5/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>6</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 12%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/5/thumbnail.jpg" alt="Crossout"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../crossout.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Crossout</h2></a> <div class="text-muted text-truncate">A post-apocalyptic MMO vehicle combat game! </div> <span class=""><i class="fas fa-award mr-2"></i>Crossout is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/556/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>7</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 71%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/556/thumbnail.jpg" alt="Naraka: Bladepoint"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../naraka-bladepoint.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Naraka: Bladepoint</h2></a> <div class="text-muted text-truncate">A free-to-play melee focused battle royale.</div> <span class=""><i class="fas fa-award mr-2"></i>Naraka: Bladepoint is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/23/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>8</strong></div> <span class="text-success"><i class="fas fa-caret-up"></i> 6%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/23/thumbnail.jpg" alt="Apex Legends"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../apex-legends.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Apex Legends</h2></a> <div class="text-muted text-truncate">A free-to-play strategic battle royale game featuring 60-player matches and team-based play. </div> <span class=""><i class="fas fa-award mr-2"></i>Apex Legends is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/4/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>9</strong></div> <span class="text-danger"><i class="fas fa-caret-down"></i> 5%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/4/thumbnail.jpg" alt="CRSED: F.O.A.D."> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../crsed.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">CRSED: F.O.A.D.</h2></a> <div class="text-muted text-truncate">Take the battle royale genre and add mystical powers and you have CRSED: F.O.A.D. (Aka Cuisine Royale: Second Edition)</div> <span class=""><i class="fas fa-award mr-2"></i>CRSED: F.O.A.D. is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div> <div class="mb-3"> <div class="card grow mb-1 shadow h-md-250 game-card video-card" data-video-src="/g/207/videoplayback.webm"> <div class="p-2 d-flex flex-column"> <div class="row"> <div class="col-2 col-md-1 align-self-center text-muted text-center"> <div class="a2 display-6"><strong>10</strong></div> <span class="text-danger"><i class="fas fa-caret-down"></i> 37%</span> </div> <div class="col-10 col-md-3 align-self-center"> <div class="card"> <div class="image-wrapper"> <img class="card-img-top stretched-link" src="../../g/207/thumbnail.jpg" alt="Warface"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo" loop preload="none" muted></video> </div> </div> <div class="col-md-8 align-self-center justify-content-center position-static"> <a href="../../warface.php" class="stretched-link no-underline"><h2 class="card-title text-truncate mt-2 h3">Warface</h2></a> <div class="text-muted text-truncate">A free-to-play multiplayer online FPS from Crytek, makers of the Far Cry and Crysis series of games.</div> <span class=""><i class="fas fa-award mr-2"></i>Warface is currenty one of the most-played Battle Royale games in March 2024.</span> </div> </div> </div> </div> </div>  <div class="pt-4"> <a href="../../pc/battle-royale.php" class="btn btn-outline-secondary btn-sm float-right">Explore<i class="ml-1 fas fa-chevron-right"></i></a> <h3>More Battle Royale Games for PC </h3> <div class="mt-3 row"> <div class="game-card col-md-4 video-card" data-video-class="featuredvideo" data-video-src="/g/5/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="../../g/5/thumbnail.jpg" alt="Crossout"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="../../crossout.php" class="stretched-link no-underline"></a> </div> </div> <div class="game-card col-md-4 video-card" data-video-class="featuredvideo" data-video-src="/g/23/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="../../g/23/thumbnail.jpg" alt="Apex Legends"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="../../apex-legends.php" class="stretched-link no-underline"></a> </div> </div> <div class="game-card col-md-4 video-card" data-video-class="featuredvideo" data-video-src="/g/523/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img class="card-widget-top" width="356" height="201" src="../../g/523/thumbnail.jpg" alt="Fall Guys"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <span style="position: absolute; bottom: 8px; right: 16px;}" class="shadow badge badge-ftg py-2 px-2 float-right">FREE</span> <video class="featuredvideo" loop preload="none" muted></video> <a href="../../fall-guys.php" class="stretched-link no-underline"></a> </div> </div> </div> </div> </div> </div> </main> </body> <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="../../about.php">About Us</a> </p> <p> <a href="../../api-doc.php">API</a> </p> <p> <a href="../../contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="../../faq.php">Help/FAQ</a> </p> <p> <a href="../../support.php">Support &amp; Bugs</a> </p> <p> <a href="../../html-sitemap.php">Sitemap</a> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="../../privacy-policy.php">Privacy Policy</a> </p> <p> <a href="../../cookies-policy.php">Cookies Policy</a> </p> <p> <a href="../../terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="../../assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/gamevaultwebsite/" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="../../rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="../../cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="../../assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> 
<!-- Mirrored from www.freetogame.com/top/pc/battle-royale by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 07:47:49 GMT -->
</html>