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
	<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-us">
    <title>Game Search</title>
    <link rel="stylesheet" href="assets/css/bootstrap-min5.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap-popper-bootbox.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.php">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#646464">
    <meta name="msapplication-TileColor" content="#2b2e33">
    <meta name="theme-color" content="#ffffff">

	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm" id="mainNav">
        <div class="container">
            <a href="index.php" class="navbar-brand mt-n2 mb-n2">
                <img src="assets/images/freetogame-logo.png" height="45" alt="GameVault"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="games.php" id="dropdown02" data-toggle="dropdown"
                            aria-expanded="false">Free Games</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            




										<li>
											<a class="dropdown-item" href="games/mmorpg.php">MMORPG</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/shooter.php">Shooter</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/moba.php">MOBA</a>
										</li> 
										<li><a class="dropdown-item" href="games/anime.php">Anime</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/battle-royale.php">Battle Royale</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/strategy.php">Strategy</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/fantasy.php">Fantasy</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/sci-fi.php">Sci-Fi</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/card.php">Card Games</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/racing.php">Racing</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/fighting.php">Fighting</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/social.php">Social</a>
										</li> 
										<li>
											<a class="dropdown-item" href="games/sports.php">Sports</a>
										</li> 
										<div class="dropdown-divider">
											
										</div> 
										<a class="dropdown-item a2" href="games.php">Free-To-Play Games</a> 
									</ul> 
								</li> 
								<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                            aria-expanded="false">Browser Games</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li>
                                <a class="dropdown-item" href="browser/mmorpg.php">Browser MMORPG</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="browser/shooter.php">Browser Shooter</a>
                            </li>
										<li>
											<a class="dropdown-item" href="browser/anime.php">Browser Anime</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/strategy.php">Browser Strategy</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/fantasy.php">Browser Fantasy</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/sci-fi.php">Browser Sci-Fi</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/racing.php">Browser Racing</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/social.php">Browser Social</a>
										</li> 
										<li>
											<a class="dropdown-item" href="browser/sports.php">Browser Sports</a>
										</li> 
										<div class="dropdown-divider">
											
										</div> 
										<a class="dropdown-item a2" href="browser.php">Browser Games</a> 
									</ul> 
								</li> 
								<li class="nav-item"> 
									<a class="nav-link js-scroll-trigger" href="giveaways.php">Special Offers</a> 
								</li> 
								<li class="nav-item"> 
									<a class="nav-link js-scroll-trigger" href="api-doc.php">API</a> 
								</li> 
								<li class="nav-item dropdown"> 
									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
										<i class="fas fa-ellipsis-h"></i> 
									</a> 
									<div class="dropdown-menu shadow" aria-labelledby="navbarDropdown"> 
										<h6 class="dropdown-header">Explore our other sites</h6> 
										<a target="_blank" class="dropdown-item" href="https://www.gamerpower.com/">GamerPower</a> 
										<a target="_blank" class="dropdown-item" href="https://www.mmobomb.com/">MMOBomb</a> 
									</div> 
								</li> 
							</ul> 
							<ul class="navbar-nav ml-auto mr-4"> 
								<li class="nav-item"> 
									<a class="nav-link js-scroll-trigger" data-toggle="tooltip" data-placement="bottom" title="Search Games" href="search.php">
										<i class="fas fa-search">
											
										</i>
										
										<span class="ml-1 d-lg-none"> Search</span>
									</a> 
								</li>

								<li class="nav-item"> 
								</li> 
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
</div>
								</li> 
							</ul> 
						</div> 
					</div> 
				</nav>  
				<script async src="assets/js/video-hover.js">
					
				</script> 
				
				<main role="main">
        <div class="main-cont py-5">
    <div class="container">
        <h1><i class="fas fa-search mr-2"></i>Find Games</h1>
        <hr>
        <div class="textboxContainer col-lg-5">
            <input id="searchInput" type="text" class="searchInput form-control form-control-lg deep-dark"
                placeholder="Search for games" autocomplete="off">
        </div>
        <div class="mt-4 results row">
    <!-- Placeholder for empty search -->
    <div id="placeholder" class="col-12 text-center">
        <!-- Replace the paragraph with an image tag for a GIF -->
        <img id="gif" src="assets/images/Fighting.gif" alt="GIF">
    </div>
</div>

<script>
    // Array of GIF sources
    var gifs = [
        { src: "assets/images/Fighting.gif", duration: 20000 }, // 5 seconds
        { src: "assets/images/Fighting2.gif", duration: 10000 }, // 3 seconds
        { src: "assets/images/Fighting3.gif", duration: 10000 } // 4 seconds
    ];

    // Get the GIF element
    var gifElement = document.getElementById('gif');

    // Index to keep track of current GIF
    var currentIndex = 0;

    // Function to change GIF
    function changeGIF() {
        // Change src attribute to next GIF
        gifElement.src = gifs[currentIndex].src;
        // Increment index
        currentIndex = (currentIndex + 1) % gifs.length;
        // Start a timer for the next GIF
        setTimeout(changeGIF, gifs[currentIndex].duration);
    }

    // Start the GIF rotation
    changeGIF();
</script>


            </div>
            <!-- Results will be displayed here -->
        </div>
        <div class="pb-1 pt-5">
            <!-- Additional content can be placed here -->
        </div>
    </div>
</div>
    </main>

    <script>
        // List of games
        const games = [
            { name: "4Story", link: "4story.php" },
	        { name: "5Street", link: "5street.php" },
	        { name: "8BitMMO", link: "8bitmmo.php" },
	        { name: "9Dragons", link: "9dragons.php" },
	        { name: "Aberoth", link: "aberoth.php" },
	        
	        { name: "Ace Online", link: "ace-online.php" },
	        { name: "AdventureQuest 3D", link: "adventurequest-3d.php" },
	        { name: 'AdventureQuest Worlds', link: 'adventurequest-worlds.php' },
			{ name: 'Aero Tales Online', link: 'aero-tales-online.php' },
			{ name: 'Age of Conan', link: 'age-of-conan.php' },
			{ name: 'Age of Wushu', link: 'age-of-wushu.php' },
			{ name: 'AIKA Online', link: 'aika-online.php' },
			{ name: 'Aion', link: 'aion.php' },
			{ name: 'AirMech', link: 'airmech.php' },
			{ name: 'Albion Online', link: 'albion-online.php' },
			{ name: 'Alien Swarm: Reactive Drop', link: 'alien-swarm-reactive-drop.php' },
			{ name: 'Allods Online', link: 'allods-online.php' },
			{ name: 'America\'s Army', link: 'americas-army.php' },
			{ name: 'Anarchy Online', link: 'anarchy-online.php' },
			{ name: 'Angels Online', link: 'angels-online.php' },
			{ name: 'APB', link: 'apb.php' },
			{ name: 'Apex Legends', link: 'apex-legends.php' },
			
			{ name: 'ArcheAge', link: 'archeage.php' },
			{ name: 'ArcheBlade', link: 'archeblade.php' },
			{ name: 'Argo', link: 'argo.php' },
			{ name: 'Armor Valor', link: 'armor-valor.php' },
			{ name: 'Armored Warfare', link: 'armored-warfare.php' },
			{ name: 'Artifact', link: 'artifact.php' },
			{ name: 'Asda Global', link: 'asda-global.php' },
			{ name: 'Astellia Royal', link: 'astellia-royal.php' },
			{ name: 'Astral Heroes', link: 'astral-heroes.php' },
			{ name: 'Astro Empires', link: 'astro-empires.php' },
			{ name: 'Atlantica Online', link: 'atlantica-online.php' },
			{ name: 'Atom Universe', link: 'atom-universe.php' },
			{ name: 'Audition Online', link: 'audition-online.php' },
			{ name: 'Aura Kingdom', link: 'aura-kingdom.php' },
			{ name: 'AVA', link: 'ava.php' },
			{ name: 'Awesomenauts', link: 'awesomenauts.php' },
            { name: 'Banner Saga Factions', link: 'banner-saga-factions.php' },
			{ name: 'Battle Arena: Heroes Adventure', link: 'battle-arena-heroes-adventure.php' },
			{ name: 'Battle Teams 2', link: 'battle-teams-2.php' },
			{ name: 'BattleBreakers', link: 'battlebreakers.php' },
			{ name: 'Battlerite Royale', link: 'battlerite-royale.php' },
			{ name: 'Battlerite', link: 'battlerite.php' },
			{ name: 'Big Farm', link: 'big-farm.php' },
			{ name: 'Black Squad', link: 'black-squad.php' },
			{ name: 'BlackShot', link: 'blackshot.php' },
			{ name: 'Blade & Soul', link: 'blade-and-soul.php' },
			{ name: 'Blankos', link: 'blankos.php' },
			{ name: 'Bleach Online', link: 'bleach-online.php' },
			{ name: 'Bless Online', link: 'bless-online.php' },
			{ name: 'Block N Load', link: 'block-n-load.php' },
			{ name: 'Blockade 3D', link: 'blockade-3d.php' },
			{ name: 'Blood of Steel', link: 'blood-of-steel.php' },
			{ name: 'Bloodline Champions', link: 'bloodline-champions.php' },
			{ name: 'Bombergrounds: Battle Royale', link: 'bombergrounds-battle-royale.php' },
			{ name: 'Bombtag', link: 'bombtag.php' },
			{ name: 'Brawlhalla', link: 'brawlhalla.php' },
			{ name: 'Brink', link: 'brink.php' },
			
			{ name: 'C9', link: 'c9.php' },
			{ name: 'Cabal Online', link: 'cabal-online.php' },
			{ name: 'Cabals: Card Blitz', link: 'cabals-card-blitz.php' },
			{ name: 'Call of Duty: Warzone', link: 'call-of-duty-warzone.php' },
			{ name: 'Callers Bane', link: 'callers-bane.php' },
			{ name: 'Card Hunter', link: 'card-hunter.php' },
			{ name: 'Catan Universe', link: 'catan-universe.php' },
			{ name: 'Champions of Regnum', link: 'champions-of-regnum.php' },
			{ name: 'Champions of Titan', link: 'champions-of-titan.php' },
			{ name: 'Champions Online', link: 'champions-online.php' },
			{ name: 'ChimeraLand', link: 'chimeraland.php' },
			{ name: 'Chroma: Bloom and Blight', link: 'chroma-bloom-and-blight.php' },
			{ name: 'Chronicles of Eidola', link: 'chronicles-of-eidola.php' },
			{ name: 'Clash of Avatars', link: 'clash-of-avatars.php' },
			{ name: 'Closers', link: 'closers.php' },
			{ name: 'Codename CURE', link: 'codename-cure.php' },
			{ name: 'Combat Arms', link: 'combat-arms.php' },
			{ name: 'Conquerors Blade', link: 'conquerors-blade.php' },
			{ name: 'Contact', link: 'contact.php' },
			{ name: 'Cookies Policy', link: 'cookies-policy.php' },
			{ name: 'Cosmos Invictus', link: 'cosmos-invictus.php' },
			{ name: 'Counter-Strike: Global Offensive', link: 'counter-strike-global-offensive.php' },
			{ name: 'Counter-Strike Nexon: Zombies', link: 'counter-strike-nexon.php' },
			{ name: 'Creativerse', link: 'creativerse.php' },
			{ name: 'CrossFire', link: 'crossfire.php' },
			{ name: 'Crossout', link: 'crossout.php' },
			{ name: 'CRSED: F.O.A.D.', link: 'crsed.php' },
			{ name: 'Crucible', link: 'crucible.php' },
			{ name: 'Crusaders of Light', link: 'crusaders-of-light.php' },
			{ name: 'Crystal Clash', link: 'crystal-clash.php' },
			{ name: 'Crystal Saga', link: 'crystal-saga.php' },
			{ name: 'Cubic Castles', link: 'cubic-castles.php' },
			{ name: 'Dark Knight', link: 'dark-knight.php' },
			{ name: 'DarkOrbit', link: 'darkorbit.php' },
			{ name: 'Darwin Project', link: 'darwin-project.php' },
			{ name: 'Dauntless', link: 'dauntless.php' },
			{ name: 'DC Universe Online', link: 'dcuo.php' },
			{ name: 'DEAD CIDE CLUB', link: 'dead-cide-club.php' },
			{ name: 'Dead Maze', link: 'dead-maze.php' },
			{ name: 'DeathVerse: Let It Die', link: 'deathverse-let-it-die.php' },
			{ name: 'Deceit 2', link: 'deceit-2.php' },
			{ name: 'Deceit', link: 'deceit.php' },
			{ name: 'Defiance 2050', link: 'defiance-2050.php' },
			{ name: 'Destiny 2', link: 'destiny-2.php' },
			{ name: 'Destiny’s Divide', link: 'destinys-divide.php' },
			{ name: 'Diablo Immortal', link: 'diablo-immortal.php' },
			{ name: 'Digimon Masters Online', link: 'digimon-masters-online.php' },
			{ name: 'Dino Storm', link: 'dino-storm.php' },
			{ name: 'Dirty Bomb', link: 'dirty-bomb.php' },
			{ name: 'Divine Souls', link: 'divine-souls.php' },
			{ name: 'Dofus', link: 'dofus.php' },
			{ name: 'Dogs of War Online', link: 'dogs-war-online.php' },
			{ name: 'DOMO', link: 'domo.php' },
			{ name: 'Dota 2', link: 'dota-2.php' },
			{ name: 'Dota Underlords', link: 'dota-underlords.php' },
			{ name: 'Double Action', link: 'double-action.php' },
			{ name: 'Dragon Awaken', link: 'dragon-awaken.php' },
			{ name: 'Dragon Blood', link: 'dragon-blood.php' },
			{ name: 'Dragon Evo', link: 'dragon-evo.php' },
			{ name: 'Dragon Nest', link: 'dragon-nest.php' },
			{ name: 'Dragon Saga', link: 'dragon-saga.php' },
			{ name: 'Drakensang Online', link: 'drakensang-online.php' },
			{ name: 'Dreadnought', link: 'dreadnought.php' },
			{ name: 'Drifters: Loot the Galaxy', link: 'drifters-loot-the-galaxy.php' },
			{ name: 'Dungeon Defenders 2', link: 'dungeon-defenders-2.php' },
			{ name: 'Dungeon Fighter Online', link: 'dungeon-fighter-online.php' },
			{ name: 'Dungeons & Dragons Online', link: 'dungeons-dragons-online.php' },
			{ name: 'Eden Eternal', link: 'eden-eternal.php' },
			{ name: 'Elder Scrolls Legends', link: 'elder-scrolls-legends.php' },
			{ name: 'Eldevin', link: 'eldevin.php' },
			{ name: 'Elsword', link: 'elsword.php' },
			{ name: 'Elvenar', link: 'elvenar.php' },
			{ name: 'EmpireWW3', link: 'empireww3.php' },
			{ name: 'Enlisted', link: 'enlisted.php' },
			{ name: 'Entropia Universe', link: 'entropia-universe.php' },
			{ name: 'EOS', link: 'eos.php' },
			{ name: 'Epic Card Battle', link: 'epic-card-battle.php' },
			{ name: 'Eternal Fury', link: 'eternal-fury.php' },
			{ name: 'Eternal Return', link: 'eternal-return.php' },
			{ name: 'Eternal', link: 'eternal.php' },
			{ name: 'Ethyrial: Echoes of Yore', link: 'ethyrial-echoes-of-yore.php' },
			{ name: 'EverQuest 2', link: 'everquest-2.php' },
			{ name: 'EverQuest', link: 'everquest.php' },
			{ name: 'Fall Guys', link: 'fall-guys.php' },
			{ name: 'Fallout Shelter', link: 'fallout-shelter.php' },
			{ name: 'Fangs', link: 'fangs.php' },
			{ name: 'Fantasy Tales Online', link: 'fantasy-tales-online.php' },
			
			{ name: 'Felspire', link: 'felspire.php' },
			{ name: 'Feral', link: 'feral.php' },
			{ name: 'Fiesta Online', link: 'fiesta-online.php' },
			{ name: 'Filter', link: 'filter.php' },
			{ name: 'Firestone Idle RPG', link: 'firestone-idle-rpg.php' },
			{ name: 'Fishing Planet', link: 'fishing-planet.php' },
			{ name: 'Fistful of Frags', link: 'fistful-of-frags.php' },
			{ name: 'Florensia', link: 'florensia.php' },
			{ name: 'Flyff Universe', link: 'flyff-universe.php' },
			{ name: 'Flyff', link: 'flyff.php' },
			{ name: 'Forge of Empires', link: 'forge-of-empires.php' },
			{ name: 'Forgot Password', link: 'forgot-password.php' },
			{ name: 'Forsaken World', link: 'forsaken-world.php' },
			{ name: 'Fortnite Battle Royale', link: 'fortnite-battle-royale.php' },
			{ name: 'Forza Motorsport 6: Apex', link: 'forza-motorsport-6-apex.php' },
			{ name: 'Freestyle2: Street Basketball', link: 'freestyle2-street-basketball.php' },
			{ name: 'Futbol Legends', link: 'futbol-legends.php' },
			{ name: 'Galahad 3093', link: 'galahad-3093.php' },
			{ name: 'Game of Thrones: Winter is Coming', link: 'game-of-thrones-winter-is-coming.php' },
			
			{ name: 'Gear Up', link: 'gear-up.php' },
			{ name: 'Genshin Impact', link: 'genshin-impact.php' },
			{ name: 'GetAmped 2', link: 'getamped-2.php' },
			{ name: 'Giveaways', link: 'giveaways.php' },
			{ name: 'Global Adventures', link: 'global-adventures.php' },
			{ name: 'Gods Origin', link: 'gods-origin.php' },
			{ name: 'Goodgame Empire', link: 'goodgame-empire.php' },
			{ name: 'Goose Goose Duck', link: 'goose-goose-duck.php' },
			{ name: 'Gotham City Impostors', link: 'gotham-city-impostors.php' },
			{ name: 'GPRO', link: 'gpro.php' },
			{ name: 'Granado Espada', link: 'granado-espada.php' },
			{ name: 'Grand Fantasia', link: 'grand-fantasia.php' },
			{ name: 'Grepolis', link: 'grepolis.php' },
			{ name: 'Grimoire: Manastorm', link: 'grimoire-manastorm.php' },
			{ name: 'Guild Wars 2', link: 'guild-wars-2.php' },
			{ name: 'Gundam Evolution', link: 'gundam-evolution.php' },
			{ name: 'Guns and Robots', link: 'guns-and-robots.php' },
			{ name: 'GunZ 2', link: 'gunz-2.php' },
			{ name: 'Gwent', link: 'gwent.php' },
			{ name: 'Habbo', link: 'habbo.php' },
			{ name: 'Halo Infinite', link: 'halo-infinite.php' },
			{ name: 'Hawked', link: 'hawked.php' },
			{ name: 'Hearthstone: Heroes of Warcraft', link: 'hearthstone-heroes-warcraft.php' },
			{ name: 'Heavy Metal Machines', link: 'heavy-metal-machines.php' },
			{ name: 'Heroes & Generals', link: 'heroes-and-generals.php' },
			{ name: 'Heroes of Newerth', link: 'heroes-of-newerth.php' },
			{ name: 'Heroes of the Storm', link: 'heroes-of-the-storm.php' },
			{ name: 'Heroes Showdown', link: 'heroes-showdown.php' },
			{ name: 'Hex', link: 'hex.php' },
			{ name: 'Holodrive', link: 'holodrive.php' },
			
			{ name: 'Hunter x Hunter Online', link: 'hunter-x-hunter-online.php' },
			{ name: 'Hyper Scape', link: 'hyper-scape.php' },
			{ name: 'Ikariam', link: 'ikariam.php' },
			{ name: 'Immortal Empire', link: 'immortal-empire.php' },
			{ name: 'Imperia Online', link: 'imperia-online.php' },
			{ name: 'Index', link: 'index.php' },
			{ name: 'Inferna', link: 'inferna.php' },
			{ name: 'Infestation: New Z', link: 'infestation-new-z.php' },
			{ name: 'Infinite Borders', link: 'infinite-borders.php' },
			{ name: 'Infinity Wars', link: 'infinity-wars.php' },
			{ name: 'Insidia', link: 'insidia.php' },
			{ name: 'Ironsight', link: 'ironsight.php' },
			{ name: 'Jade Goddess', link: 'jade-goddess.php' },
			{ name: 'Jected Rivals', link: 'jected-rivals.php' },
			{ name: 'Kakale Online', link: 'kakale-online.php' },
			{ name: 'Kalonline', link: 'kalonline.php' },
			{ name: 'Kards', link: 'kards.php' },
			{ name: 'KartRider: Drift', link: 'kartrider-drift.php' },
			{ name: 'Kingdom Wars', link: 'kingdom-wars.php' },
			{ name: 'Kritika', link: 'kritika.php' },
			{ name: 'Krosmaga', link: 'krosmaga.php' },
			{ name: 'Kurtzpel', link: 'kurtzpel.php' },
			{ name: 'La Tale', link: 'la-tale.php' },
			{ name: 'League Angels 2', link: 'league-angels-2.php' },
			{ name: 'League of Angels 3', link: 'league-of-angels-3.php' },
			{ name: 'League of Angels: Heavens Fury', link: 'league-of-angels-heavens-fury.php' },
			{ name: 'League of Angels', link: 'league-of-angels.php' },
			{ name: 'League of Legends', link: 'league-of-legends.php' },
			{ name: 'Legends of Aria', link: 'legends-of-aria.php' },
			{ name: 'Legends of Honor', link: 'legends-of-honor.php' },
			{ name: 'Line of Sight', link: 'line-of-sight.php' },
			{ name: 'Lineage 2', link: 'lineage-2.php' },
			{ name: 'Lords Road', link: 'lords-road.php' },
			{ name: 'Lost Ark', link: 'lost-ark.php' },
			{ name: 'Lost Light', link: 'lost-light.php' },
			{ name: 'Lord of the Rings Online', link: 'lotro.php' },
			{ name: 'Lucent Heart', link: 'lucent-heart.php' },
			{ name: 'Luckcatchers', link: 'luckcatchers.php' },
			{ name: 'Luna Online', link: 'luna-online.php' },
			{ name: 'Mabinogi', link: 'mabinogi.php' },
			{ name: 'Mad World', link: 'mad-world.php' },
			{ name: 'Magic Legends', link: 'magic-legends.php' },
			{ name: 'Magic: Spellslingers', link: 'magic-spellslingers.php' },
			{ name: 'MapleStory 2', link: 'maplestory-2.php' },
			{ name: 'MapleStory', link: 'maplestory.php' },
			{ name: 'Marvel Snap', link: 'marvel-snap.php' },
			{ name: 'MAT', link: 'mat.php' },
			{ name: 'MechWarrior Online', link: 'mechwarrior-online.php' },
			{ name: 'Metal War Online', link: 'metal-war-online.php' },
			{ name: 'Metin2', link: 'metin2.php' },
			{ name: 'MicroVolts', link: 'microvolts.php' },
			{ name: 'Might & Magic Heroes Online', link: 'might-magic-heroes-online.php' },
			{ name: 'Minion Masters', link: 'minion-masters.php' },
			{ name: 'Mirage Online Classic', link: 'mirage-online-classic.php' },
			{ name: 'Mortal Online', link: 'mortal-online.php' },
			{ name: 'MTG Arena', link: 'mtg-arena.php' },
			{ name: 'MU Legend', link: 'mu-legend.php' },
			{ name: 'MU Online', link: 'mu-online.php' },
			{ name: 'Multiversus', link: 'multiversus.php' },
			{ name: 'My Soul', link: 'my-soul.php' },
			{ name: 'Mythgard', link: 'mythgard.php' },
			{ name: 'Naraka: Bladepoint', link: 'naraka-bladepoint.php' },
			{ name: 'Naruto Online', link: 'naruto-online.php' },
			{ name: 'Neverwinter', link: 'neverwinter.php' },
			{ name: 'No More Room in Hell', link: 'no-more-room-in-hell.php' },
			{ name: "Noah's Heart", link: 'noahs-heart.php' },
			{ name: 'Nords: Heroes of the North', link: 'nords-heroes-north.php' },
			{ name: 'Omega Strikers', link: 'omega-strikers.php' },
			{ name: 'Omega Zodiac', link: 'omega-zodiac.php' },
			{ name: 'One Piece Online 2', link: 'one-piece-online-2.php' },
			{ name: 'One Piece Online', link: 'one-piece-online.php' },
			{ name: 'One Punch Man: The Strongest', link: 'one-punch-man-world.php' },
			{ name: 'One Tower', link: 'one-tower.php' },
			{ name: 'Otherland', link: 'otherland.php' },
			{ name: 'Overwatch 2', link: 'overwatch-2.php' },
			{ name: 'Paladins', link: 'paladins.php' },
			{ name: 'Palia', link: 'palia.php' },
			{ name: 'Panzar', link: 'panzar.php' },
			{ name: 'Path of Exile', link: 'path-of-exile.php' },
			
			{ name: 'Pirate 101', link: 'pirate-101.php' },
			{ name: 'Pirates: Tides of Fortune', link: 'pirates-tides-fortune.php' },
			{ name: 'Pixel Worlds', link: 'pixel-worlds.php' },
			{ name: 'Planetside 2', link: 'planetside-2.php' },
			{ name: 'Pocket Starships', link: 'pocket-starships.php' },
			{ name: 'Pox Nora', link: 'pox-nora.php' },
			{ name: 'Prime World', link: 'prime-world.php' },
			{ name: 'Primordials: Battle of Gods', link: 'primordials-battle-of-gods.php' },
			{ name: 'Priston Tale', link: 'priston-tale.php' },
			{ name: 'Privacy Policy', link: 'privacy-policy.php' },
			{ name: 'PSO2 New Genesis', link: 'pso2-new-genesis.php' },
			{ name: 'PSO2', link: 'pso2.php' },
			{ name: 'PUBG', link: 'pubg.php' },
			{ name: 'PWI', link: 'pwi.php' },
			{ name: 'Quake Champions', link: 'quake-champions.php' },
			{ name: 'Ragnarok Online 2', link: 'ragnarok-online-2.php' },
			{ name: 'Ragnarok Online', link: 'ragnarok-online.php' },
			{ name: 'Rail Nation', link: 'rail-nation.php' },
			{ name: 'Rappelz', link: 'rappelz.php' },
			{ name: 'Ravendawn', link: 'ravendawn.php' },
			{ name: 'Realm of the Mad God', link: 'realm-mad-god.php' },
			{ name: 'Realm Royale', link: 'realm-royale.php' },
			{ name: 'Red Stone Online', link: 'red-stone-online.php' },
			{ name: 'Register', link: 'register.php' },
			{ name: 'Revelation Online', link: 'revelation-online.php' },
			{ name: 'RF Online', link: 'rf-online.php' },
			{ name: 'Riders of Icarus', link: 'riders-of-icarus.php' },
			{ name: 'Riding Club Championships', link: 'riding-club-championships.php' },
			{ name: 'Rift', link: 'rift.php' },
			{ name: 'Ring of Elysium', link: 'ring-of-elysium.php' },
			{ name: 'Roblox', link: 'roblox.php' },
			{ name: 'Robocraft', link: 'robocraft.php' },
			{ name: 'Rocket League', link: 'rocket-league.php' },
			{ name: 'Rogue Company', link: 'rogue-company.php' },
			{ name: 'Rohan: Blood Feud', link: 'rohan-blood-feud.php' },
			{ name: 'Roller Champions', link: 'roller-champions.php' },
			{ name: 'Royal Quest', link: 'royal-quest.php' },
			{ name: 'RPG MO', link: 'rpg-mo.php' },
			{ name: 'Rumble Fighter', link: 'rumble-fighter.php' },
			{ name: 'Rumbleverse', link: 'rumbleverse.php' },
			{ name: 'Runes of Magic', link: 'runes-of-magic.php' },
			{ name: 'RuneScape', link: 'runescape.php' },
			{ name: 'Runeterra', link: 'runeterra.php' },
			{ name: 'Ryzom', link: 'ryzom.php' },
			{ name: 'S4 League', link: 's4-league.php' },
			{ name: 'Saga', link: 'saga.php' },
			{ name: 'Salem', link: 'salem.php' },
			{ name: 'SAOS Legend', link: 'saos-legend.php' },
			{ name: 'Scions of Fate', link: 'scions-of-fate.php' },
			{ name: 'Seal Online', link: 'seal-online.php' },
			{ name: 'Search', link: 'search.php' },
			{ name: 'Second Life', link: 'second-life.php' },
			{ name: 'Secret World Legends', link: 'secret-world-legends.php' },
			{ name: 'Shadow Arena', link: 'shadow-arena.php' },
			{ name: 'Shadowverse', link: 'shadowverse.php' },
			{ name: 'Shaiya', link: 'shaiya.php' },
			{ name: 'Sherwood Extreme', link: 'sherwood-extreme.php' },
			{ name: 'Shop Titans', link: 'shop-titans.php' },
			{ name: 'Shot Online', link: 'shot-online.php' },
			{ name: 'Siegelord', link: 'siegelord.php' },
			{ name: 'Skydome', link: 'skydome.php' },
			{ name: 'Skyforge', link: 'skyforge.php' },
			{ name: 'Slapshot: Rebound', link: 'slapshot-rebound.php' },
			{ name: 'Smash Legends', link: 'smash-legends.php' },
			{ name: 'Smite', link: 'smite.php' },
			{ name: 'Snow', link: 'snow.php' },
			{ name: 'Soldiers Inc.', link: 'soldiers-inc.php' },
			{ name: 'Soulworker', link: 'soulworker.php' },
			{ name: 'Space Punks', link: 'space-punks.php' },
			{ name: 'Spacelords', link: 'spacelords.php' },
			{ name: 'Sparta: War of Empires', link: 'sparta-war-empires.php' },
			{ name: 'Spellbreak', link: 'spellbreak.php' },
			{ name: 'Spellsworn', link: 'spellsworn.php' },
			{ name: 'Spellweaver', link: 'spellweaver.php' },
			{ name: 'Sphere 3', link: 'sphere-3.php' },
			{ name: 'Spiral Knights', link: 'spiral-knights.php' },
			{ name: 'Splitgate: Arena Warfare', link: 'splitgate-arena-warfare.php' },
			{ name: 'Star Conflict', link: 'star-conflict.php' },
			{ name: 'Star Crusade', link: 'star-crusade.php' },
			{ name: 'Star Trek: Alien Domain', link: 'star-trek-alien-domain.php' },
			{ name: 'Star Trek Online', link: 'star-trek-online.php' },
			{ name: 'Starbreak', link: 'starbreak.php' },
			{ name: 'Starcolony', link: 'starcolony.php' },
			{ name: 'Stay Out', link: 'stay-out.php' },
			{ name: 'Steel Legions', link: 'steel-legions.php' },
			{ name: 'Stein.world', link: 'steinworld.php' },
			{ name: 'Stormfall: Age of War', link: 'stormfall-age-war.php' },
			{ name: 'Stronghold Kingdoms', link: 'stronghold-kingdoms.php' },
			{ name: 'Summoners War: Chronicles', link: 'summoners-war-chronicles.php' },
			{ name: 'Super Mecha Champions', link: 'super-mecha-champions.php' },
			{ name: 'Super Squad', link: 'super-squad.php' },
			{ name: 'Survarium', link: 'survarium.php' },
			{ name: 'Survivor Legacy', link: 'survivor-legacy.php' },
			{ name: 'Swords of Legends Online', link: 'swords-of-legends-online.php' },
			{ name: 'Star Wars: The Old Republic', link: 'swtor.php' },
			{ name: 'Synced: Off-Planet', link: 'synced.php' },
			{ name: 'Totally Accurate Battlegrounds', link: 'tabg.php' },
			{ name: 'Tale of Toast', link: 'tale-of-toast.php' },
			{ name: 'Tales of Yore', link: 'tales-of-yore.php' },
			{ name: 'Team Fortress 2', link: 'team-fortress-2.php' },
			{ name: 'Teeworlds', link: 'teeworlds.php' },
			{ name: 'Temperia', link: 'temperia.php' },
			{ name: 'Temtem Showdown', link: 'temtem-showdown.php' },
			{ name: 'TERA', link: 'tera.php' },
			{ name: 'Terms of Use', link: 'terms-of-use.php' },
			{ name: 'The Finals', link: 'the-finals.php' },
			{ name: 'The Settlers Online', link: 'the-settlers-online.php' },
			{ name: 'The Third Age', link: 'the-third-age.php' },
			{ name: 'The Ultimatest Battle', link: 'the-ultimatest-battle.php' },
			{ name: 'theHunter', link: 'thehunter.php' },
			{ name: 'Therian Saga', link: 'therian-saga.php' },
			{ name: 'Tibia', link: 'tibia.php' },
			{ name: 'Titan Revenge', link: 'titan-revenge.php' },
			{ name: 'Top', link: 'top.php' },
			{ name: 'Tower of Fantasy', link: 'tower-of-fantasy.php' },
			{ name: 'Town of Salem 2', link: 'town-of-salem-2.php' },
			{ name: 'Transformice', link: 'transformice.php' },
			{ name: 'Travian', link: 'travian.php' },
			{ name: 'Tree of Savior', link: 'tree-of-savior.php' },
			{ name: 'Tribal Wars 2', link: 'tribal-wars-2.php' },
			{ name: 'Trove', link: 'trove.php' },
			{ name: 'Twelve Sky 2', link: 'twelve-sky-2.php' },
			{ name: 'Twin Saga', link: 'twin-saga.php' },
			{ name: 'UFO Online: Invasion', link: 'ufo-online-invasion.php' },
			{ name: 'Ultimate Pirates', link: 'ultimate-pirates.php' },
			{ name: 'Uncharted Waters Online', link: 'uncharted-waters-online.php' },
			{ name: 'Undawn', link: 'undawn.php' },
			{ name: 'Unfortunate Spacemen', link: 'unfortunate-spacemen.php' },
			{ name: 'Unturned', link: 'unturned.php' },
			{ name: 'Urban Rivals', link: 'urban-rivals.php' },
			{ name: 'Vainglory', link: 'vainglory.php' },
			{ name: 'Valorant', link: 'valorant.php' },
			{ name: 'Vampire Empire', link: 'vampire-empire.php' },
			{ name: 'Vega Conflict', link: 'vega-conflict.php' },
			{ name: 'Veiled Experts', link: 'veiled-experts.php' },
			{ name: 'Vikings: War of Clans', link: 'vikings-war-of-clans.php' },
			{ name: 'Villagers and Heroes', link: 'villagers-and-heroes.php' },
			{ name: 'Vindictus', link: 'vindictus.php' },
			{ name: 'Voyage Century Online', link: 'voyage-century-online.php' },
			{ name: 'Wakfu', link: 'wakfu.php' },
			{ name: 'War Thunder', link: 'war-thunder.php' },
			{ name: 'Warface', link: 'warface.php' },
			{ name: 'Warframe', link: 'warframe.php' },
			{ name: 'Warhammer 40,000: Warpforge', link: 'warhammer-40000-warpforge.php' },
			{ name: 'Warhaven', link: 'warhaven.php' },
			{ name: 'Warlander', link: 'warlander.php' },
			{ name: 'Warmode', link: 'warmode.php' },
			{ name: 'Wartune', link: 'wartune.php' },
			{ name: 'Waven', link: 'waven.php' },
			{ name: 'Weapons of Mythology', link: 'weapons-of-mythology.php' },
			{ name: 'Wild Terra Online', link: 'wild-terra-online.php' },
			{ name: 'Will to Live', link: 'will-to-live.php' },
			{ name: 'Wizard101', link: 'wizard101.php' },
			{ name: 'Wolfteam', link: 'wolfteam.php' },
			{ name: 'World Boss', link: 'world-boss.php' },
			{ name: 'World of Runes', link: 'world-of-runes.php' },
			{ name: 'World of Tanks', link: 'world-of-tanks.php' },
			{ name: 'World of Warplanes', link: 'world-of-warplanes.php' },
			{ name: 'World of Warships', link: 'world-of-warships.php' },
			{ name: 'World War 3', link: 'world-war-3.php' },
			{ name: 'War Thunder 3', link: 'wt3.php' },
			{ name: 'Z1 Battle Royale', link: 'z1-battle-royale.php' },
			{ name: 'Zula', link: 'zula.php' }
       ];

// Get the input element
    var searchInput = document.getElementById('searchInput');

    // Get the placeholder element
    var placeholder = document.getElementById('placeholder');

    // Add event listener for input change
    searchInput.addEventListener('input', function () {
    var userInput = searchInput.value.trim().toLowerCase();
    var matchingGames = games.filter(function (game) {
        // Check if the game name starts with the user input
        return game.name.toLowerCase().startsWith(userInput);
    });

    var resultsContainer = document.querySelector('.results');
    if (matchingGames.length > 0) {
        // If there are matching games, hide the placeholder and display the results
        placeholder.style.display = 'none';
        resultsContainer.innerHTML = matchingGames.map(function (game) {
            // Ensure that game.description is defined before using it
            var description = game.description ? '<p class="card-text">' + game.description + '</p>' : '';
            return '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">' +
                '<div class="card h-100"><div class="card-body"><h4 class="card-title">' + game.name +
                '</h4>' + description +
                '<a href="' + game.link + '" class="btn btn-primary">Play Now</a></div></div></div>';
        }).join('');
    } else {
        // If there are no matching games, display the placeholder
        placeholder.style.display = userInput.length === 0 ? 'block' : 'none';
        resultsContainer.innerHTML = '';
    }
});


</script>

			<h4 class="">You May Like</h4> 
			</div> 
			<div class="row"> 
				<div class="game-card video-card col-md-4" data-video-src="/g/14/videoplayback.webm"> 
					<div class="card mb-4 grow shadow"> 
						<div class="image-wrapper"> 
							<img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/14/thumbnail.jpg" alt="Star Trek Online - A free-to-play, 3D, Sci-Fi MMORPG based on the popular Star Trek series."> <div class="loader-wrapper"> 
								<div class="spinner-grow ftg-blue" role="status"> 
									<span class="sr-only">Loading...</span> 
									</div> 
									</div> 
									</div> 
									<video class="featuredvideo3" loop preload="none" muted></video> 
									<div class="card-body"> 
										<span class="badge badge-ftg py-2 px-2 float-right">FREE</span> 
										<a href="star-trek-online.php" class="stretched-link no-underline">
											<h4 class="card-title text-truncate">Star Trek Online</h4>
											</a> 
											<div class="d-flex justify-content-between align-items-center"> 
												</div> 
												</div> 
												</div> 
												</div> 
												<div class="game-card video-card col-md-4" data-video-src="/g/340/videoplayback.webm"> 
													<div class="card mb-4 grow shadow"> 
														<div class="image-wrapper"> 
															<img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/340/thumbnail.jpg" alt="Game Of Thrones Winter Is Coming - A free-to-play browser-based RTS based on the George R.R. Martin novels and popular HBO series."> 
															<div class="loader-wrapper"> 
																<div class="spinner-grow ftg-blue" role="status"> 
																	<span class="sr-only">Loading...</span> 
																	</div> 
																	</div> 
																	</div> 
																	<video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="game-of-thrones-winter-is-coming.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Game Of Thrones Winter Is Coming</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="game-card video-card col-md-4" data-video-src="/g/454/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/454/thumbnail.jpg" alt="Magic: The Gathering Arena - A free-to-play digital recreation of Wizards of the Coast" s popular collectible card game.> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="mtg-arena.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Magic: The Gathering Arena</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> </div>  <div class="pb-1 pt-4"> <h4 class="">Most Played Today</h4> </div> <div class="row"> <div class="game-card video-card col-md-4" data-video-src="/g/365/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/365/thumbnail.jpg" alt="Naruto Online - "> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="naruto-online.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Naruto Online</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="game-card video-card col-md-4" data-video-src="/g/516/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/516/thumbnail.jpg" alt="PUBG: BATTLEGROUNDS - "> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="pubg.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">PUBG: BATTLEGROUNDS</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> <div class="game-card video-card col-md-4" data-video-src="/g/475/videoplayback.webm"> <div class="card mb-4 grow shadow"> <div class="image-wrapper"> <img style=" img { width: 100%; height: auto; aspect-ratio: attr(width) / attr(height); }" class="card-img-top" width="356" height="201" src="g/475/thumbnail.jpg" alt="Genshin Impact - "> <div class="loader-wrapper"> <div class="spinner-grow ftg-blue" role="status"> <span class="sr-only">Loading...</span> </div> </div> </div> <video class="featuredvideo3" loop preload="none" muted></video> <div class="card-body"> <span class="badge badge-ftg py-2 px-2 float-right">FREE</span> <a href="genshin-impact.php" class="stretched-link no-underline"><h4 class="card-title text-truncate">Genshin Impact</h4></a> <div class="d-flex justify-content-between align-items-center"> </div> </div> </div> </div> </div> </div> </div> </main> <script>$(function(){var timer;$(".searchInput").keyup(function(){clearTimeout(timer);timer=setTimeout(function(){var val=$(".searchInput").val();if(val!=""){$.post("ajax/getSearchResults",{term:val},function(data){$(".results").php(data)})}
	else{$(".results").php("")}},500)})})</script> <footer class="page-footer font-small deep-dark pt-3">  <div class="container text-center text-md-left">  <div class="row text-center text-md-left mt-3 pb-3">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="about.php">About Us</a> </p> <p> <a href="api-doc.php">API</a> </p> <p> <a href="contact.php">Contact Us</a> </p> <p> </p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> <p> <a href="faq.php">Help/FAQ</a> </p> <p> <a href="support.php">Support &amp; Bugs</a> </p> <p><a href="https://www.biblegateway.com/passage/?search=Proverbs+16%3A3&version=NIV" target="_blank"> Proverbs 16:3 </a></p> </div>  <hr class="w-100 clearfix d-md-none">  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3"> <p> <a href="privacy-policy.php">Privacy Policy</a> </p> <p> <a href="cookies-policy.php">Cookies Policy</a> </p> <p> <a href="terms-of-use.php">Terms of Use</a> </p> </div>   <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3"> <img style="width: 109px;" src="assets/images/logo-footer.png" alt="FreeToGame"> </div>  </div>  <hr>  <div class="row d-flex align-items-center">  <div class="col-md-7 col-lg-8">  <p class="text-center text-md-left small">© 2024 PIT IT223 - Web Systems and Technology, all rights reserved. All trademarks are property of their respective owners.</p> </div>   <div class="col-md-5 col-lg-4 ml-lg-0">  <div class="text-center text-md-right"> <ul class="list-unstyled list-inline"> <li class="list-inline-item"> <a href="https://www.facebook.com/gamevaultwebsite/" aria-label="Facebook" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-facebook-f"></i> </a> </li> <li class="list-inline-item"> <a href="https://www.instagram.com/itsgamevault/?hl=en" aria-label="Twitter" rel="”noopener”" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fab fa-twitter"></i> </a> </li> <li class="list-inline-item"> <a rel="nofollow" type=" application/rss+xml" aria-label="RSS" href="rss/games" target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1"> <i class="fas fa-rss"></i> </a> </li> </ul> </div> </div>  </div>  </div>  </footer>  <meta> <script type="text/javascript">(function(){var _z=console;Object.defineProperty(window,"console",{get:function(){if(_z._commandLineAPI){throw"Sorry, Can't execute scripts!"}
	return _z},set:function(val){_z=val}})});</script> </head> 

	<body> 
		<div id="cookie-popup" class="hidden"> 
			<span>We use cookies to make your browsing experience better. 
				<button id="cookie-accept" class="mx-2 btn btn-outline-secondary btn-sm">Accept</button> 
				<a href="cookies-policy.php" class="btn btn-outline-secondary btn-sm">Learn More</a>
				</span>
				<button id="cookie-close" class="btn btn-sm float-right">X</button> 
				</div> 
				<style>#cookie-popup{position:fixed;bottom:0;width:100%;background-color:#1c1e22;padding:10px;z-index:999;text-align:center}#cookie-popup.hidden{display:none}</style> 
				<script async>if(document.cookie.indexOf("cookie-consent=accepted")===-1){const timezoneOffset=new Date().getTimezoneOffset();if(timezoneOffset<=0&&timezoneOffset>=-180){document.getElementById('cookie-popup').classList.remove('hidden');function setCookieAndHidePopup(){document.cookie='cookie-consent=accepted; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/';document.getElementById('cookie-popup').classList.add('hidden')}
	document.getElementById('cookie-accept').addEventListener('click',setCookieAndHidePopup);document.getElementById('cookie-close').addEventListener('click',setCookieAndHidePopup)}}</script> 
	<script async type="text/javascript">$("[data-toggle='tooltip']").tooltip();</script> 
	<script async type="text/javascript">function notSignedIn(){alert("You must be signed in to perform this action")}</script>  
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7K8TZTQV4J"></script> 
	<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}
	gtag('js',new Date());gtag('config','G-7K8TZTQV4J');</script>  
	<link rel="stylesheet" href="assets/css/style-min3.css" media="print" onload="this.media='all'"> <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" media="print" onload="this.media='all'"> 


</body> 

	</html>