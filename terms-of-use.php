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
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head> <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png"> <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png"> <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"> <link rel="manifest" href="favicon/site.php"> <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464"> <meta name="msapplication-TileColor" content="#2b2e33"> <meta name="theme-color" content="#ffffff">  <link rel="stylesheet" href="assets/css/bootstrap-min5.css">  <script src="assets/js/jquery-3.4.1.min.js"></script> <script src="assets/js/bootstrap-popper-bootbox.js"></script>  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="Content-type" content="text/html;charset=UTF-8"> <meta http-equiv="Content-Language" content="en-us"> <link rel="alternate" type="application/rss+xml" title="RSS Feed for GameVault.com" href="rss/games">  <title>Terms of Use</title>  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav"> <div class="container"> <a href="index.php" class="navbar-brand mt-n2 mb-n2"><img src="assets/images/freetogame-logo.png" height="45" alt="GameVault"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> <div class="collapse navbar-collapse" id="navbarResponsive"> <ul class="navbar-nav mr-auto"> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="games.php" id="dropdown02" data-toggle="dropdown" aria-expanded="false">Free Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown02"> <li><a class="dropdown-item" href="games/mmorpg.php">MMORPG</a></li> <li><a class="dropdown-item" href="games/shooter.php">Shooter</a></li> <li><a class="dropdown-item" href="games/moba.php">MOBA</a></li> <li><a class="dropdown-item" href="games/anime.php">Anime</a></li> <li><a class="dropdown-item" href="games/battle-royale.php">Battle Royale</a></li> <li><a class="dropdown-item" href="games/strategy.php">Strategy</a></li> <li><a class="dropdown-item" href="games/fantasy.php">Fantasy</a></li> <li><a class="dropdown-item" href="games/sci-fi.php">Sci-Fi</a></li> <li><a class="dropdown-item" href="games/card.php">Card Games</a></li> <li><a class="dropdown-item" href="games/racing.php">Racing</a></li> <li><a class="dropdown-item" href="games/fighting.php">Fighting</a></li> <li><a class="dropdown-item" href="games/social.php">Social</a></li> <li><a class="dropdown-item" href="games/sports.php">Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="games.php">Free-To-Play Games</a> </ul> </li> <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="browser.php" id="dropdown03" data-toggle="dropdown" aria-expanded="false">Browser Games</a> <ul class="dropdown-menu" aria-labelledby="dropdown03"> <li><a class="dropdown-item" href="browser/mmorpg.php">Browser MMORPG</a></li> <li><a class="dropdown-item" href="browser/shooter.php">Browser Shooter</a></li> <li><a class="dropdown-item" href="browser/anime.php">Browser Anime</a></li> <li><a class="dropdown-item" href="browser/strategy.php">Browser Strategy</a></li> <li><a class="dropdown-item" href="browser/fantasy.php">Browser Fantasy</a></li> <li><a class="dropdown-item" href="browser/sci-fi.php">Browser Sci-Fi</a></li> <li><a class="dropdown-item" href="browser/racing.php">Browser Racing</a></li> <li><a class="dropdown-item" href="browser/social.php">Browser Social</a></li> <li><a class="dropdown-item" href="browser/sports.php">Browser Sports</a></li> <div class="dropdown-divider"></div> <a class="dropdown-item a2" href="browser.php">Browser Games</a> </ul> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="giveaways.php">Special Offers</a> </li> <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="api-doc.php">API</a> </li> <li class="nav-item dropdown"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-ellipsis-h"></i> </a> <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> <h6 class="dropdown-header">GAMEVAULT</h6> </div> </li> </ul> <ul class="navbar-nav ml-auto mr-4"> <li class="nav-item"> <a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="search.php"><i class="fas fa-search"></i><span class="ml-1 d-lg-none"> Search</span></a> </li> <nav class="navbar">
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
</div> <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
return _z},set:function(val){_z=val}})});</script> </head>  <body> <main> <div id="content-wrap" class="container text my-1 z-depth-1 py-5"> 

    <h2>Terms of Use</h2>
    <p><strong>Version:</strong> 1.1</p>
    <p>The GameVault.com website located at <a href="https://www.GameVault.com">https://www.GameVault.com</a> is a copyrighted work belonging to Digiwalls Media. Certain features of the Site may be subject to additional guidelines, terms, or rules, which will be posted on the Site in connection with such features.</p>
    <p>All such additional terms, guidelines, and rules are incorporated by reference into these Terms.</p>
    <p>These Terms of Use describe the legally binding terms and conditions that oversee your use of the Site. BY LOGGING INTO THE SITE, YOU ARE COMPLYING WITH THESE TERMS and you represent that you have the authority and capacity to enter into these Terms. YOU SHOULD BE AT LEAST 18 YEARS OF AGE TO ACCESS THE SITE. IF YOU DISAGREE WITH ALL OF THE PROVISIONS OF THESE TERMS, DO NOT LOG INTO AND/OR USE THE SITE.</p>
    <p>These terms require the use of arbitration Section 10.2 on an individual basis to resolve disputes and also limit the remedies available to you in the event of a dispute.</p>

 <h2>Access to the Site</h2>
    <p><strong>Subject to these Terms.</strong> GameVault grants you a non-transferable, non-exclusive, revocable, limited license to access the Site solely for your own personal, noncommercial use.</p>
    <p><strong>Certain Restrictions.</strong> The rights approved to you in these Terms are subject to the following restrictions: (a) you shall not sell, rent, lease, transfer, assign, distribute, host, or otherwise commercially exploit the Site; (b) you shall not change, make derivative works of, disassemble, reverse compile or reverse engineer any part of the Site; (c) you shall not access the Site in order to build a similar or competitive website; and (d) except as expressly stated herein, no part of the Site may be copied, reproduced, distributed, republished, downloaded, displayed, posted or transmitted in any form or by any means unless otherwise indicated, any future release, update, or other addition to functionality of the Site shall be subject to these Terms. All copyright and other proprietary notices on the Site must be retained on all copies thereof.</p>
    <p>GameVault reserves the right to change, suspend, or cease the Site with or without notice to you. You agree that GameVault will not be held liable to you or any third-party for any change, interruption, or termination of the Site or any part.</p>
    <p>You agree that GameVault will have no obligation to provide you with any support in connection with the Site.</p>
    <p>Excluding any User Content that you may provide, you acknowledge that all the intellectual property rights, including copyrights, patents, trademarks, and trade secrets, in the Site and its content are owned by GameVault or GameVault's partners. These Terms and access to the Site do not grant you any rights, title, or interest in or to any intellectual property rights, except for the limited access rights expressed in Section 2.1. GameVault and its suppliers reserve all rights not granted in these Terms.</p>

     <h2>User Content</h2> <p><strong>User Content.</strong> "User Content" means any and all information and content that a user submits to the Site. You are exclusively responsible for your User Content. You bear all risks associated with use of your User Content. You hereby certify that your User Content does not violate our Acceptable Use Policy. You may not represent or imply to others that your User Content is in any way provided, sponsored or endorsed by GameVault. Because you alone are responsible for your User Content, you may expose yourself to liability. GameVault is not obliged to backup any User Content that you post; also, your User Content may be deleted at any time without prior notice to you. You are solely responsible for making your own backup copies of your User Content if you desire.</p> <p>You hereby grant to GameVault an irreversible, nonexclusive, royalty-free and fully paid, worldwide license to reproduce, distribute, publicly display and perform, prepare derivative works of, incorporate into other works, and otherwise use and exploit your User Content, and to grant sublicenses of the foregoing rights, solely for the purposes of including your User Content in the Site. You hereby irreversibly waive any claims and assertions of moral rights or attribution with respect to your User Content.</p> <p><strong>Acceptable Use Policy.</strong> The following terms constitute our "Acceptable Use Policy": You agree not to use the Site to collect, upload, transmit, display, or distribute any User Content (i) that violates any third-party right or any intellectual property or proprietary right; (ii) that is unlawful, harassing, abusive, tortious, threatening, harmful, invasive of another’s privacy, vulgar, defamatory, false, intentionally misleading, trade libelous, pornographic, obscene, patently offensive, promotes racism, bigotry, hatred, or physical harm of any kind against any group or individual; (iii) that is harmful to minors in any way; or (iv) that is in violation of any law, regulation, or obligations or restrictions imposed by any third party.</p> <p>In addition, you agree not to: (i) upload, transmit, or distribute to or through the Site any software intended to damage or alter a computer system or data; (ii) send through the Site unsolicited or unauthorized advertising, promotional materials, junk mail, spam, chain letters, pyramid schemes, or any other form of duplicative or unsolicited messages; (iii) use the Site to harvest, collect, gather or assemble information or data regarding other users without their consent; (iv) interfere with, disrupt, or create an undue burden on servers or networks connected to the Site, or violate the regulations, policies or procedures of such networks; (v) attempt to gain unauthorized access to the Site, whether through password mining or any other means; (vi) harass or interfere with any other user’s use and enjoyment of the Site; or (vi) use software or automated agents or scripts to produce multiple accounts on the Site, or to generate automated searches, requests, or queries to the Site.</p> <p>We reserve the right to review any User Content, and to investigate and/or take appropriate action against you in our sole discretion if you violate the Acceptable Use Policy or any other provision of these Terms or otherwise create liability for us or any other person. Such action may include removing or modifying your User Content, terminating your Account in accordance with Section 8, and/or reporting you to law enforcement authorities.</p> <p>If you provide GameVault with any feedback or suggestions regarding the Site, you hereby assign to GameVault all rights in such Feedback and agree that GameVault shall have the right to use and fully exploit such Feedback and related information in any manner it believes appropriate. GameVault will treat any Feedback you provide to GameVault as non-confidential and non-proprietary.</p> <p>You agree to indemnify and hold GameVault and its officers, employees, and agents harmless, including costs and attorneys’ fees, from any claim or demand made by any third-party due to or arising out of (a) your use of the Site, (b) your violation of these Terms, (c) your violation of applicable laws or regulations or (d) your User Content. GameVault reserves the right to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate with our defense of these claims. You agree not to settle any matter without the prior written consent of GameVault. GameVault will use reasonable efforts to notify you of any such claim, action or proceeding upon becoming aware of it.</p> <p>Each Site user is solely responsible for any and all of its own User Content. Because we do not control User Content, you acknowledge and agree that we are not responsible for any User Content, whether provided by you or by others. You agree that GameVault will not be responsible for any loss or damage incurred as the result of any such interactions. If there is a dispute between you and any Site user, we are under no obligation to become involved.</p> <p>We reserve the right to suspend or terminate any member’s account if, in our reasonable view, the member appears to be in breach of any provision of this Agreement. </p> <h2>Third-Party Websites, Games, Digital Goods, Links &amp; Ads</h2> <p>The Site may contain links to third-party websites, games and services, and/or display advertisements for third-parties. Such Third-Party Links, Games &amp; Ads are not under the control of GameVault, and GameVault is not responsible for any Third-Party Links, Games &amp; Ads. GameVault provides access to these Third-Party Websites, Links, Games &amp; Ads only as a convenience to you, and does not review, approve, monitor, endorse, warrant, or make any representations with respect to Third-Party Links, Games &amp; Ads. You use all Third-Party Links, Games &amp; Ads at your own risk, and should apply a suitable level of caution and discretion in doing so. When you play games or click on any of the Third-Party Links &amp; Ads, the applicable third party’s terms and policies apply, including the third party’s privacy and data gathering practices.</p> <p>Games, publishers and Third-Party Websites may offer services, digital goods and purchases including in-game purchases, GameVault is not a party to any transactions from other websites, and is not the seller or supplier of, and does not endorse, any of the goods or services that are featured on the Website. We therefore do not have any of the legal obligations that apply to the sellers of those goods or services. This means that we have no control over or responsibility for: the quality, safety, or legality of the goods or services.</p> <p>You hereby release and forever discharge the GameVault and our officers, employees, agents, successors, and assigns from, and hereby waive and relinquish, each and every past, present and future dispute, claim, controversy, demand, right, obligation, liability, action and cause of action of every kind and nature, that has arisen or arises directly or indirectly out of, or that relates directly or indirectly to, the Site. If you are a California resident, you hereby waive California civil code section 1542 in connection with the foregoing, which states: "a general release does not extend to claims which the creditor does not know or suspect to exist in his or her favor at the time of executing the release, which if known by him or her must have materially affected his or her settlement with the debtor."</p> <p><strong>Cookies and Web Beacons.</strong> Like any other website, GameVault.com uses ‘cookies’, please find more information about how we use cookies <a href="cookies-policy.php">here</a>.</p> 

    <h2>Disclaimer</h2>
<p><strong>School:</strong> University of Science and Technology of Southern Philippines</p>
<p><strong>Course/year/section:</strong> BSIT 2A</p>
<p><strong>Subject:</strong> IT 223 - Web Systems and Technologies</p>
<p><strong>For educational purposes only. Not for commercial use.</strong></p>
<p>The content provided on this site is for academic and learning purposes within the context of the mentioned school, course, and subject. It is not intended for commercial use or distribution.</p>
<p>The information presented on the site is based on academic research, classroom discussions, and assignments. While efforts have been made to ensure accuracy, we cannot guarantee completeness or timeliness.</p>
<p>Created by:</p>
<ul>
    <li>Jefferson Delfin</li>
    <li>Eliezer Coquilla</li>
    <li>Boniffer Balibagon</li>
</ul>
<p>By accessing and using this site, you agree to use the content responsibly and ethically, respecting intellectual property rights and academic integrity standards.</p>
<p>This website may contain links to external websites or resources. GAMEVAULT does not endorse or assume responsibility for any third-party content linked from this site.</p>


      <h2>Copyright Policy.</h2> <p>GameVault respects the intellectual property of others and asks that users of our Site do the same. In connection with our Site, we have adopted and implemented a policy respecting copyright law that provides for the removal of any infringing materials and for the termination of users of our online Site who are repeated infringers of intellectual property rights, including copyrights. If you believe that one of our users is, through the use of our Site, unlawfully infringing the copyright(s) in a work, and wish to have the allegedly infringing material removed, the following information in the form of a written notification (pursuant to 17 U.S.C. § 512(c)) must be provided to our designated Copyright Agent:</p> <ul> <li>your physical or electronic signature;</li> <li>identification of the copyrighted work(s) that you claim to have been infringed;</li> <li>identification of the material on our services that you claim is infringing and that you request us to remove;</li> <li>sufficient information to permit us to locate such material;</li> <li>your address, telephone number, and e-mail address;</li> <li>a statement that you have a good faith belief that use of the objectionable material is not authorized by the copyright owner, its agent, or under the law; and</li> <li>a statement that the information in the notification is accurate, and under penalty of perjury, that you are either the owner of the copyright that has allegedly been infringed or that you are authorized to act on behalf of the copyright owner.</li> </ul> <p>Please note that, pursuant to 17 U.S.C. § 512(f), any misrepresentation of material fact in a written notification automatically subjects the complaining party to liability for any damages, costs and attorney’s fees incurred by us in connection with the written notification and allegation of copyright infringement.</p> <h2>Your Privacy</h2> <p>We respect your privacy and the use and protection of your Personal Information. All information we collect on the Services is subject to our Privacy Policy and by using the Services, you consent to all actions taken by us with respect to your information in compliance with the Privacy Policy, which is available at: <a href="privacy-policy.php">Privacy Policy</a>.</p> <p><strong>Copyright/Trademark Information.</strong> Copyright ©. All rights reserved. All trademarks, logos and service marks displayed on the Site are our property or the property of other third-parties. You are not permitted to use these Marks without our prior written consent or the consent of such third party which may own the Marks.</p>

       <h2>Contact Information</h2> <p>Email: contactusgamevault.com</p> </div> </main> </body>  <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="about.php">About Us</a> </p> <p> <a href="api-doc.php">API</a> </p> <p> <a href="contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="faq.php">Help/FAQ</a> </p> <p> <a href="support.php">Support &amp; Bugs</a> </p> <p><a href="https://www.biblegateway.com/passage/?search=Proverbs+16%3A3&version=NIV" target="_blank"> Proverbs 16:3 </a></p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="privacy-policy.php">Privacy Policy</a> </p> <p> <a href="cookies-policy.php">Cookies Policy</a> </p> <p> <a href="terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="assets/images/logo-footer.png" alt="GameVault"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/JeffersonBDelfin26?mibextid=ZbWKwL" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <div id="cookie-popup" class="hidden"> <span>We use cookies to make your browsing experience better. <button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> <a href="cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a></span><button id="cookie-close" class="btn btn-sm float-right">X</button> </div> <style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> <script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> <script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> <script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  <link rel="stylesheet" href="assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> 
<!-- Mirrored from www.freetogame.com/terms-of-use by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2024 07:30:39 GMT -->
</html>