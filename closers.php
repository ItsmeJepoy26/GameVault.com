<?php
session_start();
include 'connection.php'; // Include your database connection file

// Fetch reviews
$reviews = $con->query("SELECT reviews.review, reviews.timestamp, users.username 
                        FROM reviews 
                        JOIN users ON reviews.user_id = users.id 
                        ORDER BY reviews.timestamp DESC");
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html> <html lang="en-US"> 
<!-- Mirrored from www.freetogame.com/closers by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 07:47:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head> <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"> <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"> <link rel="manifest" href="favicon/site.php"> <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464"> <meta name="msapplication-TileColor" content="#2b2e33"> <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="assets/css/bootstrap-min5.css">  <script src="assets/js/jquery-3.4.1.min.js"></script> <script src="assets/js/bootstrap-popper-bootbox.js"></script>  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> <meta http-equiv="Content-Language" content="en-us"> <link rel="alternate" type="application/rss+xml" title="RSS Feed for FreeToGame.com" href="rss/games">   <title>Closers Download and Reviews (2024)</title> <meta name="description" content="A free-to-play episodic anime beat-em-up developed by Naddic Games and published by En Masse Entertainment. "> <link rel="canonical" href="closers.php">  <meta property="og:title" content="Closers Download and Reviews (2024)"> <meta property="og:type" content="game"> <meta property="og:locale" content="en_US"> <meta property="og:url" content="https://www.freetogame.com/closers"> <meta property="og:image" content="https://www.freetogame.com/g/52/thumbnail.jpg"> <meta property="og:description" content="A free-to-play episodic anime beat-em-up developed by Naddic Games and published by En Masse Entertainment. "> <meta property="og:site_name" content="FreeToGame.com"> <meta property="fb:admins" content="109927137154968">  <meta name="twitter:card" content="summary_large_image"> <meta name="twitter:site" content="@FreeToGamecom"> <meta name="twitter:title" content="Closers Download and Reviews (2024)"> <meta name="twitter:description" content="A free-to-play episodic anime beat-em-up developed by Naddic Games and published by En Masse Entertainment. "> <meta name="twitter:image:src" content="https://www.freetogame.com/g/52/thumbnail.jpg"> <script type="application/ld+json">{"@context":"http://schema.org","@type":"VideoGame","@id":"https://www.freetogame.com/closers","mainEntityOfPage":true,"applicationCategory":"Game","name":"Closers","url":"https://www.freetogame.com/closers","playMode":"MultiPlayer","image":"/images/52/thumbnail.jpg","description":"Closers is a free-to-play episodic anime beat-’em-up developed by Naddic Games and published by En Masse Entertainment. It features five playable characters (4 classes), and a very anime storyline in which aliens are spilling through portals into New Seoul.<br />
<br />
Players can take on the role a combat genius, a leader, a martial artist, a young boy with support skills, or a grizzled veteran with a troubled past. These characters can be developed by upgrading skills and weapons as well as unlocking new powers.<br />
<br />
The game revolves around the usage of skills, featuring basic fighter game movement such as dash, jump, and dash-jump combos. Players will travel around new Seoul fighting the invading aliens and completing missions assigned by NPC. All PvE gameplay is instance based.<br />
<br />
Closers also offers a PvP mode similar to MOBA gameplay. It allows players to play as either a Dimensional (alien) or a Closer in an attempt to destroy the other team’s tower while defending their own.","keywords":"Closers","producer":"Naddic Games","publisher":"En Masse Entertainment","genre":["MMORPG"],"gamePlatform":["PC game","Windows"],"aggregateRating":{"@type":"AggregateRating","ratingValue":"3.8888888888889","ratingCount":"9"},"offers":{"@type":"Offer","price":"0","priceCurrency":"USD","availability":"http://schema.org/InStock"},"operatingSystem":["Windows"]}</script> <script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://www.freetogame.com"},{"@type":"ListItem","position":2,"name":"Free-To-Play Games","item":"https://www.freetogame.com/games"},{"@type":"ListItem","position":3,"name":"Closers"}]}</script>  <link href="assets/css/lity.css" rel="stylesheet"> <link rel="stylesheet" type="text/css" href="assets/css/profile.css">  <script async src="assets/js/video-hover.js"></script> <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
return _z},set:function(val){_z=val}})});</script> </head> <style>.img2{width:100%;height:auto;aspect-ratio:attr(width) / attr(height)}</style> <body>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> <div class="container"> <a href="index.php" class="navbar-brand mt-n2 mb-n2"><img src="assets/images/freetogame-logo.png" height="45" alt="FreeToGame"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarResponsive"> <ul class="navbar-nav mr-auto"> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown02"> <li><a class="dropdown-item" href="games/mmorpg.php">MMORPG</a></li> <li><a class="dropdown-item" href="games/shooter.php">Shooter</a></li> <li><a class="dropdown-item" href="games/moba.php">MOBA</a></li> <li><a class="dropdown-item" href="games/anime.php">Anime</a></li> <li><a class="dropdown-item" href="games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="games/social.php">Social</a></li> <li><a class="dropdown-item" href="games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="giveaways.php">Special Offers</a> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="api-doc.php">API</a> </li> <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h"></i> </a> <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> <h6 class="dropdown-header">GAMEVAULT</h6> </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a> </li> <nav class="navbar">
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
        </li> 
    </ul>
    </div> 
</div> 
</nav> 
</div> 
</div> 
</div>  <main> <div class="container py-4 video-page"> <div class="gameprofile_background" style="background-image: url(g/52/background.webp);"> <div class="gameprofile_gradient"></div> </div> <div class="row">  <div class="col-md-4"> <div class="sidebar control-box"> <div class="card shadow mb-3 rounded"> <img class="img2 card-img-top progressive replace" width="331" height="201" src="g/52/thumbnail.jpg" alt="Closers"> <video class="featuredvideo" loop preload="none" muted><source src="g/52/videoplayback.webm" type="video/webm"></source></video> </div> <div class="row"> <div class="col-3 col-lg-2 mr-2"> <span class="btn btn-dark2 mb-3">FREE</span> </div> <div class="col"> <a type="button" name="playnow" class="btn btn-ftg-blue btn-block" href="https://closers.enmasse.com/" rel="nofollow" target="_blank"><strong>PLAY NOW </strong><i class="fas fa-sign-out-alt"></i></a> </div> </div>  <div class="rate-section btn-group btn-block mb-3 text-center shadow-sm rounded"> 

<!-- Reaction Buttons -->
<a class="likeButton col-3 py-2 btn-dark2" onclick="updateCount('like')">
    <div class="text-success"><i class="far fa-smile fa-lg text-success"></i></div>
    <div class="count mb-n2 text-muted" id="likeCount">0</div>
    <span class="title small">LIKE</span>
</a>
<a class="neutralButton col-3 py-2 btn-dark2" onclick="updateCount('neutral')">
    <div class=""><i class="far fa-meh fa-lg text-secondary"></i></div>
    <div class="count mb-n2 text-muted" id="neutralCount">0</div>
    <span class="title small">MEH</span>
</a>
<a class="dislikeButton col-3 py-2 btn-dark2" onclick="updateCount('dislike')">
    <div class=""><i class="far fa-frown fa-lg text-danger"></i></div>
    <div class="count mb-n2 text-muted" id="dislikeCount">0</div>
    <span class="title small">DISLIKE</span>
</a>

<input type="hidden" id="gameId" value="81"> <!-- Replace 1 with the actual game ID -->

<script>
    var userReaction = null; // Track the user's current reaction

    function updateCount(reactionType) {
        var gameId = document.getElementById("gameId").value;

        // Check if the user is undoing their reaction
        var undoReaction = userReaction === reactionType;
        var currentReactionCount = parseInt(document.getElementById(reactionType + 'Count').textContent);
        var newCount;

        if (undoReaction) {
            newCount = currentReactionCount - 1;
            userReaction = null;
        } else {
            // If the user had a previous reaction, decrement its count
            if (userReaction) {
                var previousReactionCount = parseInt(document.getElementById(userReaction + 'Count').textContent);
                document.getElementById(userReaction + 'Count').textContent = previousReactionCount - 1;
            }
            newCount = currentReactionCount + 1;
            userReaction = reactionType;
        }

        // Update the count for the selected reaction
        document.getElementById(reactionType + 'Count').textContent = newCount;

        // Send the reaction update to the server
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_reaction.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                console.log('Reaction updated successfully');
            }
        };
        xhr.send("reactionType=" + reactionType + "&game_id=" + gameId + "&undo=" + undoReaction);
    }

    function loadCounts() {
        var gameId = document.getElementById("gameId").value;

        var xhr = new XMLHttpRequest();
        xhr.open("GET", "get_reaction_counts.php?game_id=" + gameId, true);
        xhr.onreadystatechange = function() {
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                var counts = JSON.parse(this.responseText);
                document.getElementById('likeCount').textContent = counts.like || 0;
                document.getElementById('neutralCount').textContent = counts.neutral || 0;
                document.getElementById('dislikeCount').textContent = counts.dislike || 0;
                userReaction = counts.userReaction || null; // Get user's reaction state
            }
        };
        xhr.send();
    }

    window.addEventListener('load', loadCounts);
</script>

    <div class="dropdown-menu shadow" aria-labelledby="btnGroupDrop1" x-placement="bottom-start"> <a class="dropdown-item" onclick="notSignedIn()"><i class="fas fa-gamepad pr-1"></i> Currently Playing</a> <a class="dropdown-item" onclick="notSignedIn()"><i class="fas fa-check pr-1"></i> Played</a> <a class="dropdown-item" onclick="notSignedIn()"><i class="fas fa-trophy pr-1"></i> Completed</a> <a class="dropdown-item" onclick="notSignedIn()"><i class="far fa-clock pr-1"></i> Play Later</a> </div> </div>  <span class="small text-muted ml-1"><i class="fas fa-user mr-2"></i>Requires 3rd-Party Account</span> </div> </div>   <div class="col-md-8">  <nav aria-label="breadcrumb"> <ul class="breadcrumb2 small mb-0"> <li class="breadcrumb-item2"><a class="nocolor" href="index.php">Home</a></li> <li class="breadcrumb-item2"><a class="nocolor" href="games.php">Free Games</a></li> <li class="breadcrumb-item2 text-muted" aria-current="page">Closers</li> </ul> </nav> <style>.breadcrumb2{list-style:none;padding:0}.breadcrumb-item2{display:inline-block}.breadcrumb-item2::after{content:">";margin-left:2px}.breadcrumb-item2:last-child::after{content:""}</style> <h1>Closers</h1>  <div class="row py-3"> <div class="col-md-7"> <div class="statRightHolder mb-2"> <ul class="statsLeft2"> <h4> <span class="blue"><i class="fas fa-crown mr-2"></i></span><span>Very Positive</span> </h4> <li> <span class="mr-2">12</span><span>Member Ratings</span> </li> </ul> <ul class="statsLeft2"> <li> <span class="yellow"><i class="far fa-user mr-2"></i> 170</span> Members have this game in their library!</li> </ul> <ul class="statsLeft"> <li> <span class="red"><i class="far fa-comment-alt mr-2"></i> 0</span> Reviews</li> </ul> <ul class="statsRight"> <li> <span><i class="fas fa-long-arrow-alt-down"></i> 9%</span><span class="ml-1">Popularity</span> </li> </ul> </div> </div>  <div class="col"> <div class="d-flex justify-content-center align-middle"> <div class="progress-pie-chart" data-percent="89">  <div class="ppc-progress"> <div class="ppc-progress-fill"></div> </div> <div class="ppc-percents"> <div class="pcc-percents-wrapper"> <span class="small">%</span> </div> </div> </div> </div> </div> </div>   <div id="submitReview" class="anchor mt-3"> <span class="float-right"><div class="rating"><h2 class="d-flex flex-row mr-2 h4">Feel free to share your reviews! </h2> </div></span> <h2 class="d-flex flex-row mr-2 h4">What do you think about Closers? </h2>  <!-- Updated input section for user's thoughts -->
<div class="input-group mb-3">
    <textarea id="userThoughts" class="md-textarea deep-dark form-control mt-0" rows="2" placeholder="Write a review for 4Story! Share your thoughts with our community."></textarea>
    <button id="postThoughtsBtn" class="btn btn-outline-dark">
        <span class="text ml-1"><i class="fas fa-paper-plane"></i></span>
    </button>
</div>

<h2 class="h3 font-weight-dark text-center text-lg-left mt-5 mb-0">User Reviews</h2>
<br>
<div id="userReviewsContainer"></div>
<input type="hidden" id="gameId" value="81"> <!-- Replace 1 with the actual game ID -->

<!-- Script for user's thoughts -->
<script>
    function loadUserThoughts() {
        var gameId = document.getElementById("gameId").value;
        fetch('get_reviews.php?game_id=' + gameId)
            .then(response => response.json())
            .then(data => {
                var reviewsContainer = document.getElementById("userReviewsContainer");
                reviewsContainer.innerHTML = "";
                data.forEach(review => {
                    var reviewContainer = document.createElement("div");
                    reviewContainer.classList.add("itemContainer");

                    var mediaDiv = document.createElement("div");
                    mediaDiv.classList.add("media");

                    var imgLink = document.createElement("a");
                    imgLink.href = "#";

                    var profileImg = document.createElement("img");
                    profileImg.src = "u/avatar/712/5eaab6763d8cc-large.jpg";
                    profileImg.classList.add("profile-image", "mr-3");

                    var mediaBody = document.createElement("div");
                    mediaBody.classList.add("media-body", "user", "m-1", "mb-3");

                    var cardDiv = document.createElement("div");
                    cardDiv.classList.add("card");

                    var cardBody = document.createElement("div");
                    cardBody.classList.add("deep-dark", "card-body");

                    var usernameLink = document.createElement("a");
                    usernameLink.href = "#";

                    var usernameSpan = document.createElement("span");
                    usernameSpan.classList.add("username");
                    usernameSpan.textContent = review.username;

                    var timestampSpan = document.createElement("span");
                    timestampSpan.classList.add("timestamp", "small", "text-muted");
                    timestampSpan.textContent = review.timestamp;

                    var hrElement = document.createElement("hr");

                    var reviewBody = document.createElement("div");
                    reviewBody.classList.add("body");
                    reviewBody.textContent = review.review;

                    usernameLink.appendChild(usernameSpan);
                    mediaDiv.appendChild(imgLink).appendChild(profileImg);
                    cardBody.appendChild(usernameLink);
                    cardBody.appendChild(timestampSpan);
                    cardBody.appendChild(hrElement);
                    cardBody.appendChild(reviewBody);
                    cardDiv.appendChild(cardBody);
                    mediaBody.appendChild(cardDiv);
                    reviewContainer.appendChild(mediaDiv).appendChild(mediaBody);
                    reviewsContainer.appendChild(reviewContainer);
                });
            })
            .catch(error => console.error('Error fetching reviews:', error));
    }

    function postThoughts() {
        var userThoughts = document.getElementById("userThoughts").value;
        var gameId = document.getElementById("gameId").value;

        if (userThoughts.trim() !== "") {
            fetch('post_review.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ review: userThoughts, game_id: gameId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    loadUserThoughts();
                    document.getElementById("userThoughts").value = "";
                } else {
                    console.error('Failed to post review:', data.message);
                }
            })
            .catch(error => console.error('Error posting review:', error));
        } else {
            console.error('Review is empty.');
        }
    }

    document.getElementById("postThoughtsBtn").addEventListener("click", postThoughts);
    window.addEventListener('load', loadUserThoughts);
</script>  <h2 class="mt-4 h3">About Closers</h2> <hr class="mt-2 mb-3"> <div id="summary"> <p class="collapse text-justify" id="collapseSummary"> Closers is a free-to-play episodic anime beat-’em-up developed by Naddic Games and published by En Masse Entertainment. It features five playable characters (4 classes), and a very anime storyline in which aliens are spilling through portals into New Seoul.<br> <br> Players can take on the role a combat genius, a leader, a martial artist, a young boy with support skills, or a grizzled veteran with a troubled past. These characters can be developed by upgrading skills and weapons as well as unlocking new powers.<br> <br> The game revolves around the usage of skills, featuring basic fighter game movement such as dash, jump, and dash-jump combos. Players will travel around new Seoul fighting the invading aliens and completing missions assigned by NPC. All PvE gameplay is instance based.<br> <br> Closers also offers a PvP mode similar to MOBA gameplay. It allows players to play as either a Dimensional (alien) or a Closer in an attempt to destroy the other team’s tower while defending their own. </p> <a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a> </div> <hr> <div class="text-muted disclosure"> <p>Disclosure: FreeToGame works closely with publishers and developers to offer a free and rewarding experience. In order to keep everything free to use we may sometimes earn a small commission from some partners. Find more info in our <a href="faq.php">FAQ</a> page. </p> <p> </p> </div>  <h2 class="mt-5 h3">Additional Information</h2> <div class="text-muted mt-n2"> <i class="fas fa-info-circle mr-2"></i>Please note this free-to-play game may or may not offer optional in-game purchases.</div> <hr class="mt-2 mb-3"> <div class="row mb-3"> <div class="col-6 col-md-4"> <span class="text-muted">Title<br></span> <p>Closers</p> </div> <div class="col-6 col-md-4"> <span class="text-muted">Developer<br></span> Naddic Games </div> <div class="col-6 col-md-4"> <span class="text-muted">Publisher<br></span> En Masse Entertainment </div> <div class="col-6 col-md-4"> <span class="text-muted">Release Date<br></span> December 19, 2017 </div> <div class="col-6 col-md-4"> <span class="text-muted">Genre<br></span> MMORPG </div> <div class="col-6 col-md-4"> <span class="text-muted">Platform<br></span> <i class="fab fa-windows mr-1"></i> Windows (Client) </div> </div>  <h2 class="h3 font-weight-dark text-center text-lg-left mt-5 mb-0">Closers Screenshots</h2> <hr class="mt-2 mb-3"> <div class="row text-center text-lg-left"> <div class="col-lg-3 col-md-4 col-6"> <a href="g/52/closers-1.jpg" data-lity class="d-block mb-3 h-100" alt="Closers Gameplay Screenshot 1"> <img class="thumb-gallery shadow-sm rounded" src="g/52/closers-1-small.jpg" alt="Closers Thumbnail 1"> </a> </div> <div class="col-lg-3 col-md-4 col-6"> <a href="g/52/closers-2.jpg" data-lity class="d-block mb-3 h-100" alt="Closers Gameplay Screenshot 2"> <img class="thumb-gallery shadow-sm rounded" src="g/52/closers-2-small.jpg" alt="Closers Thumbnail 2"> </a> </div> <div class="col-lg-3 col-md-4 col-6"> <a href="g/52/closers-3.jpg" data-lity class="d-block mb-3 h-100" alt="Closers Gameplay Screenshot 3"> <img class="thumb-gallery shadow-sm rounded" src="g/52/closers-3-small.jpg" alt="Closers Thumbnail 3"> </a> </div> <div class="col-lg-3 col-md-4 col-6"> <a href="g/52/closers-4.jpg" data-lity class="d-block mb-3 h-100" alt="Closers Gameplay Screenshot 4"> <img class="thumb-gallery shadow-sm rounded" src="g/52/closers-4-small.jpg" alt="Closers Thumbnail 4"> </a> </div> </div>  <h2 class="h3 font-weight-dark text-center text-lg-left mt-5 mb-0">Minimum System Requirements <span class="small text-muted">(Windows)</span> </h2> <hr class="mt-2 mb-3"> <div class="row"> <div class="col-sm-6"> <span class="text-muted">OS<br></span> <p>Windows XP</p> <span class="text-muted">Memory<br></span> <p>2 GB</p> <span class="text-muted">Storage<br></span> <p>5 GB</p> </div> <div class="col-sm-6"> <span class="text-muted">Processor<br></span> <p>Intel Dual Core 2.0 GHz</p> <span class="text-muted">Graphics<br></span> <p>Nvidia GeForce 7600 GT</p> <span class="text-muted">Additional Notes<br></span> <p>Specifications may change during development</p> </div> </div>  <hr> <div class="text-muted small">All material on this page is copyrighted by ©En Masse Entertainment and their respective licensors. All other trademarks are the property of their respective owners.</div>  <h2 class="h3 font-weight-dark text-center text-lg-left mt-5 mb-0">User Reviews</h2> <hr class="mt-2 mb-3"> <div class="reviews"> </div> <div class="row mt-2 align-items-center mb-5"> <div class="col text-muted justify-content-center">Play this game and post your review! </div> <div class="col-6"> <a class="btn btn-primary float-right" href="#submitReview" role="button">Submit Review</a> </div> </div>  <a href="like/closers.php" class="btn btn-outline-secondary btn-sm float-right">See All<i class="ml-1 fas fa-chevron-right"></i></a> <h2 class="h3">Games like Closers</h2> <hr class="mt-2 mb-3"> <div class="row text-center text-lg-left"> <div class="game-card col-md-4 col-md-4 mb-4 video-card" data-video-src="/g/316/videoplayback.webm"> <div class="card grow shadow"> <div class="image-wrappers"> <img class="img2 card-img-top" width="262" height="148" src="g/316/thumbnail.jpg" alt="Scions of Fate - A friendly free to play MMORPG with easy to pick up controls."> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3widget" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-1 px-1 mt-1 float-right">FREE</span> <a href="scions-of-fate.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mb-n1">Scions of Fate</h4></a> </div> </div> </div> <div class="game-card col-md-4 col-md-4 mb-4 video-card" data-video-src="/g/323/videoplayback.webm"> <div class="card grow shadow"> <div class="image-wrappers"> <img class="img2 card-img-top" width="262" height="148" src="g/323/thumbnail.jpg" alt="Flyff: Fly For Fun - A free-to-play anime MMORPG with charming visual aesthetic and an addictive gameplay."> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3widget" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-1 px-1 mt-1 float-right">FREE</span> <a href="flyff.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mb-n1">Flyff: Fly For Fun</h4></a> </div> </div> </div> <div class="game-card col-md-4 col-md-4 mb-4 video-card" data-video-src="/g/511/videoplayback.webm"> <div class="card grow shadow"> <div class="image-wrappers"> <img class="img2 card-img-top" width="262" height="148" src="g/511/thumbnail.jpg" alt="Phantasy Star Online 2 New Genesis - The legacy of Phantasy Star Online 2 continues a thousand years later!"> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3widget" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-1 px-1 mt-1 float-right">FREE</span> <a href="pso2-new-genesis.php" class="stretched-link no-underline"><h4 class="card-title text-truncate mb-n1">Phantasy Star Online 2 New Genesis</h4></a> </div> </div> </div> </div> </div> </div> </div> </div> </main> </body> 
<!-- Mirrored from www.freetogame.com/closers by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 07:47:14 GMT -->
</html><html> <script>$('.video-page').each(function(i,obj){let card=$(obj);let video=card.find('video')[0];let cardTop=card.find('.card-img-top');card.hover(function(){video.load();video.currentTime=15;video.play().catch(function(e){})},function(){video.pause()})});</script><script>$(function(){var $ppc=$('.progress-pie-chart'),percent=parseInt($ppc.data('percent')),deg=360*percent/100;if(percent>50){$ppc.addClass('gt-50')}
$('.ppc-progress-fill').css('transform','rotate('+deg+'deg)');$('.ppc-percents span').php(percent+'%')});</script> <script>var tx=document.getElementsByTagName('textarea');for(var i=0;i<tx.length;i++){tx[i].setAttribute('style','height:'+(tx[i].scrollHeight)+'px;overflow-y:hidden;');tx[i].addEventListener("input",OnInput,false)}
function OnInput(){this.style.height='auto';this.style.height=(this.scrollHeight)+'px'}</script>  <script src="assets/js/lity.js"></script><footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="about.php">About Us</a> </p> <p> <a href="api-doc.php">API</a> </p> <p> <a href="contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="faq.php">Help/FAQ</a> </p> <p> <a href="support.php">Support &amp; Bugs</a> </p> <p><a href="https://www.biblegateway.com/passage/?search=Proverbs+16%3A3&version=NIV" target="_blank"> Proverbs 16:3 </a></p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="privacy-policy.php">Privacy Policy</a> </p> <p> <a href="cookies-policy.php">Cookies Policy</a> </p> <p> <a href="terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/gamevaultwebsite/" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> </html>