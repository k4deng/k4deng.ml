<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	 <!-- Global site tag (gtag.js) - Google Analytics -->
	 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175836514-1"></script>
	 <script>
	   window.dataLayer = window.dataLayer || [];
	   function gtag(){dataLayer.push(arguments);}
	   gtag('js', new Date());
 
	   gtag('config', 'UA-175836514-1');
	 </script>

	<meta http-equiv="X-UA-Compatible" content="IE-9"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>FloridaBois: Web Guide</title>
	<link rel="icon" type="image/png" href="/assets/favicon/favicon.ico"/>
	<link href='https://fonts.googleapis.com/css?family=Fira+Sans:400,700' rel='stylesheet' type='text/css'>
	<style type="text/css" media="screen">
		/* Default Style */
		body {
			font-family: Verdana, Arial, sans-serif;
			font-size: 12px;
			color: #595441;
			background:#E3F3FF;
			margin-top:0px;
			margin-bottom:30px;
		}
		p {
			padding-left: 10px;
		}
		code {
			background:#eaeaef;
			padding:0 2px;
		}
		tt {
			background:#ffc;
			padding:0 2px;
		}
		pre tt {
			display:block;
		}
		blockquote {
			margin: 10px 20px 0px 20px;
			padding: 10px;
			border: 1px solid #8d8d8d;
			background-color: #f5f5f5;
		}
		li {
			margin-top: 20px;
		}
		ul li ul li {
			margin-top: 10px;
		}
		a, a:active, a:link, a:visited {
			color: #7ba7e4;
			text-decoration: none;
		}
		a:hover {
			color: #5577a5;
			text-decoration: underline;
		}
		div.sshot {
		}
		div.sshot p {
			zcolor:#5577a5;
			zfont-size:90%;
		}
		div.sshot img {
			margin-bottom:1em;
			border:1px solid #2A85B3;
			padding:10px;
			border-radius:10px;
		}
		#fade {
			position:absolute; background: #E3F3FF; width:100%; height:230px; top:0px; left:0px; z-index:-1;
			background: -webkit-gradient(linear, left top, left bottom, from(rgba(227, 243, 255, 1)), to(rgba(227, 243, 255, 0)));
			background: -moz-linear-gradient(top,  rgba(227, 243, 255, 1),  rgba(227, 243, 255, 0.1)); /* for firefox 3.6+ */
		}
		/* Place Holder Style */
		#Container {
			width: 850px;
			margin-left: auto;
			margin-right: auto;
			z-index:1337;
		}
		#Content {
		    background: none repeat scroll 0 0 white;
		    border: 3px solid #2A85B3;
			-moz-border-radius:20px;
			-webkit-border-radius:20px;
		    border-radius: 20px;
			margin-top:-13px;
		    min-height: 150px;
		    padding: 5px 20px 10px;
		    text-align: left;
			z-index:2;
		}
		/* Title Style */
		h1{margin:0px}
		#Container h1 a {
			display:block;
			font-family: 'Fira Sans', Verdana, Arial;
			font-size: 32px;
			font-weight: 700;
			color: #2A85B3;
			margin-top:0px;
			margin-bottom: 0px;
			background:transparent url() right 5px no-repeat;
            background-size: 15%;
            padding-top:15px;
			height:90px;
			padding-left:250px;
			text-align:left;
		}
		h1 a:hover{text-decoration:none}
		h1 a:hover span {
			color: #88C0EB;
			text-decoration:underline;
		}
		h2 {
			font-family: 'Fira Sans', Verdana, Arial;
			font-size: 22px;
			font-weight: 700;
			color: #5b87b4;
			margin-top:50px;
		}
		h2.first{margin-top:10px}
		h2:before {
			content: '\00BB  ';
			color:#BFE0FE;
		}
		h3 {
			font-family: 'Fira Sans', Verdana, Arial;
			font-size: 18px;
			font-weight: bold;
			color: #73a4d6;
			margin-top:2em;
		}
		h3:before {
			content: '\203A  ';
			color:#BFE0FE;
		}
		/* Tabs */
		ul#Tabs {
			font-family: Verdana, Arial;
			font-size: 13px;
			font-weight: 400;
			list-style-type: none;
			padding-bottom: 28px;
			border-bottom: 1px solid #2A85B3;
			margin:0 30px 12px 30px;
			z-index: 1;
		}
		#Tabs li.Tab {
			float: right;
			height: 23px;
			background-color: #deedfb;
			margin: 3px 0px 0px 5px;
			border: 2px solid #2A85B3;
			-webkit-border-top-left-radius: 10px;
			-webkit-border-top-right-radius: 10px;
			-moz-border-radius-topleft: 10px;
			-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		#Tabs li.Tab a {
			float: left;
			display: block;
			color: #666666;
			text-decoration: none;
			padding: 3px 5px;
		}
		#Tabs li.Tab a:hover {
			background-color: #bfe0fe;
			-webkit-border-top-left-radius: 10px;
			-webkit-border-top-right-radius: 10px;
			-moz-border-radius-topleft: 10px;
			-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		/* Selected Tab */
		#Tabs li.SelectedTab {
			float: right;
			height: 24px;
			background-color: #fff;
			margin: 0px 0px 0px 5px;
			border-top: 2px solid #2A85B3;
			border-right: 2px solid #2A85B3;
			border-left: 2px solid #2A85B3;
			border-bottom: 6px solid #fff;
			-webkit-border-top-left-radius: 10px;
			-webkit-border-top-right-radius: 10px;
			-moz-border-radius-topleft: 10px;
			-moz-border-radius-topright: 10px;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		#Tabs li.SelectedTab a {
			float: left;
			display: block;
			color: #666666;
			text-decoration: none;
			padding: 5px;
			cursor: default;
		}
		/* Copyright */
		#Copyright {
			text-align:center;
			margin-top:20px;
		}
		#Copyright p {
			padding:10px;
			background:white;
			margin:0 auto;
			width:750px;
			border:1px solid #2A85B3;
			-webkit-border-radius: 10px;
			-webkit-border-bottom-right-radius: 25px;
			-webkit-border-bottom-left-radius: 25px;
			-moz-border-radius: 10px;
			-moz-border-radius-bottomright: 30px;
			-moz-border-radius-bottomleft: 30px;
			border-radius: 10px;
			border-bottom-right-radius: 30px;
			border-bottom-left-radius: 30px;
		}
		
		iframe {
			border: 0;
		}
		
		.commandquicklinks ul {
			list-style-type: none;
			padding: 16px;
		}
		.commandquicklinks ul li {
			display: inline;
			border-right: 2px solid #2A85B3;
			padding-right: 8px;
			padding-left: 8px;
		}
		.commandquicklinks ul li:last-child {
			border-right: none;
		}
		
		
	</style>
	<!--[if IE]> <style>#fade{display:none}</style> <![endif]-->
</head>
<body>
<div id="fb-root"></div>
<div id="Container">

	<!-- Title -->
	<header role="banner">
	<h1><a href="">FloridaBois: Web Guide</a></h1>
	</header>

	<main role="main">
	<!-- Tabs -->
	<ul id="Tabs">
		<li id="DynmapTab" class="Tab"><a href="#Dynmap" onclick="toggle(this);">Dynmap</a></li>
		<li id="CommandsTab" class="Tab"><a href="#Commands" onclick="toggle(this);">Commands</a></li>
		<li id="StorageRequestTab" class="Tab"><a href="#StorageRequest" onclick="toggle(this);">Storage Request</a></li>
		<li id="PlansTab" class="Tab"><a href="#Plans" onclick="toggle(this);">Plans</a></li>
		<li id="PlotTypesTab" class="Tab"><a href="#PlotTypes" onclick="toggle(this);">Plot Types</a></li>
		<li id="PlacesTab" class="Tab"><a href="#Places" onclick="toggle(this);">Places</a></li>
		<li id="FAQTab" class="Tab"><a href="#FAQ" onclick="toggle(this);">FAQ</a></li>
		<li id="RulesTab" class="Tab"><a href="#Rules" onclick="toggle(this);">Rules</a></li>
		<li id="AboutTab" class="SelectedTab"><a href="#About" onclick="toggle(this);">About</a></li>
	</ul>

	<!-- Content -->
	<div id="Content">

		<!-- About -->
		<div id="AboutDiv">
			<h2 class='first'>About FloridaBois</h2>

			<h3 id="infos">Quick Infos</h3>
				
				<ul>
					<li>Founded on <b>July 21, 2020</b>
					<li>Currently has <b>2</b> members
					<li>Has <b>0</b> major attractions / sights
				</ul>

			<h3 id="toknow">What to know</h3>
			
				<p>If you want to join us, feel free! Ask around on Minecraft or DM k4deng on discord.</p>
				<p>We are not currently a nation. It is too expensive for us to pay for but we will continue to talk as if we were a nation.</p>
				
			<h3 id="taxes">Taxes</h3>
			
				<p>FloridaBois has relativley low taxes in general. If you feel they are too high/low, please contact an official.</p>
				<p>You can view taxes by doing <code>/res tax</code>.</p>
				<ul>
					<li>Daily resident taxes are <b>.1%</b> of your total balance. (You will not be taxed more than $100 a day)
					<li>Plot taxes are <b>$2</b> a day. If you have 4 plots, you will be charged $8 a day.
					<li>Price for <code>/t spawn FloridaBois</code> is <b>$100</b>. (Doesn't apply to town residents, nation members and nation-allies.)
				</ul>
		</div>
		
		<!-- Rules -->
		<div id="RulesDiv" style="display: none;">

			<h2 class='first'>Jail Policy</h2>
			
				<p>Failure to follow these rules may result in a Jail period. Final decisions are made by k4deng and input is taken from the opposing party.</p>
				<p>No Jail period is longer than 72 Hours.</p>
				<p> </p>
			
			<h2 class='first'>Rules</h2>	
			<h3 id="bekind">Treat other residents fairly.</h3>
			
				<p>Do not steal from them. Do not engage in scamming, and do not ridicule or make them feel miserable.</p>
				
			<h3 id="themedbases">Do not build theme unfriendly bases.</h3>
			
				<p>Flying builds are allowed as long as they look good and are appropriate.</p>
				<p>Buildings should be built with a surbuban-esk, or modern look.</p>
				
				<p>We ask that you put some creativity into your builds besides just making a cobblestone box.</p>
			
			<h3 id="altaccounts">Do not use alternite accounts for bad purposes.</h3>
			
				<p>Do not use alternite accounts to increase mob spawns in your area, spy on other players and steal items or evade punishment.</p>
				
			<h3 id="lagmakers">Anything seen to cause lag is not allowed.</h3>
			
				<p>This may also involve redstone machines. This may involve using flowing water to create mob grinders, auto-farms, afk-farms, or any other form of automation that is either unfair, or harmful to server performance.
				<p>We ask that if you have a mob farm on your property that you keep your mob count to under 30.</p>
				
			<h3 id="nogrief">Do not grief the surroundings by building ugly structures.</h3>
			
				<p>You may use dirt pillars to help you build, but only if you will clean them up immediately afterwards.</p>
				<p>You may also not build offensive structures.</p>
			
			<h3 id="traps">Do not create traps that a player cannot escape from.</h3>
			
				<p>Unless they willingly entered and/or as long as they could see that trap.</p>
				
		</div>
		
		<!-- FAQ -->
		<div id="FAQDiv" style="display: none;">
			<h2 class='first'>FAQ</h2>

			<h3 id="requirement">Requirements</h3>
			<ol>
				<li>Must live in the <strong>USA</strong></li>
				<li>Speak <strong>English</strong> as a primary language</li>
				<li>Agree to our <strong>Rules</strong></li>
			</ol>

			<h3 id="recommendation">Recommendations</h3>
			<ul>
				<li>We recommend that you play on Bedrock Edition as most of our playerbase is on Bedrock</li>
			</ul>

			<h3 id="limitations">Limitations</h3>
			<ul>
				<li>You are <strong>not</strong> able to build whatever you want, where ever you want. You may buy a plot to do that.</li>
			</ul>

		</div>
		
		<!-- Places -->
		<div id="PlacesDiv" style="display: none;">
			<h2 class='first'>Places (and what to do in them)</h2>
			
			<h3 id="jail">Jail</h3>
            
				<p>In our nation, we have a jail. You may be jailed for a few reasons.</p>
				<p>Our maximum Jail period is no longer than 72 Hours IRL.</p>
			
			<h3 id="storge">Storage</h3>
            
				<p>In our storage areas, you cannot directly remove items from the system.
				<br />You must file a request ticket by going to the "Storage Request" tab.
				<p>You will typically receive your items(s) in 0 to 24 hours.</p>
				<p>If k4deng is online, please ask him BEFORE placing a order. He can get your item for you.</p>
				
			<h3 id="smelting">Smelting</h3>
			
				<p>Our smelting area is in a mall shop. In the area, there are a bunch of blast furnaces, smokers, and normal furnaces.</p>
				<p>You can do whatever in the smelting building; there are no automatic systems available.</p>

			<h3 id="farming">Farming</h3>
			
				<p>We have farming plots where you can remove & plant crops at your will.</p>
				<p>We ask that if you remove crops, to replant the correct crop type. Also, please do not kill the bees! They are helping our crops grow faster.</p>
				<p>Other farms (automatic farms) are collected and moved to storage.</p>
				
		</div>

		<!-- Plot Types -->
		<div id="PlotTypesDiv" style="display: none;">
			<h2 class='first'>Plot Types (and how to use them)</h2>
			<h3 id="defualt">Defualt</h3>
			
				<p>Defualt plot types are the plots you can buy in the resident area.</p>
				<p>You can buy a plot by typing <code>/plot claim</code> in chat.</p>
				<p>You might want to change plot permissions so, here are the commands!</p>
					<pre><tt>
/plot set perm {on/off}
  Turns on/off all perms for everyone

/plot set perm {resident/ally/outsider} {on/off}
  Changes all perms for a certian player relationship type

/plot set perm {build/destroy/switch/itemuse} {on/off}
  Changes a certian perm for all players
  
/plot set perm {resident/ally/outsider} {build/destroy/switch/itemuse} {on/off}
  Changes a certian perm for a certian player relationship type
  
/plot set perm reset
  Resets to defualts
					</tt></pre>
				<p>You can view defualts by typing <code>/resident</code> (<code>/res</code>) in chat.</p>
				<p>Want to rename your plot? Do <code>/plot set name {plotname}</code>.<p>
				<p>In your plot, you may do whatever you want besides make a building higher then the tallest building in Florida.</p>

			<h3 id="wildernessplots">Wilderness Plots</h3>
			
				<p>Down in the south, there are "Wilderness plots." On these plots, you can mine, farm trees, and basically do whatever you want besides remove natrual terrian objects. <b>(We do not have any plots there right now. They are owned by no one. We will claim them eventually and when we do this will take effect.)</b></p>

			<h3 id="arenaplots">Arena Plots</h3>
			
				<p>There are Arena plots where PVP and Friendly Fire are ON. We might make one in Florida soon.</p>
			
		</div>

		<!-- Plans -->
		<div id="PlansDiv" style="display:none">
			
			<h2 class='first'>Florida Plans</h2>
			
				<p>Comming Soon</p>
				
				<!--<p>Plans are made by k4deng. If you want something to be added, please ask k4deng and a meeting may be held to forumlate a updated plan.</p>

				<img src="/assets/images/FloridaPlans.png" width=800 ></img>-->
					
		</div>

		<!-- Storage Requests -->
		<div id="StorageRequestDiv" style="display:none">
			
			<iframe width="800" height="800" src="https://app.purechat.com/w/6mfif"></iframe>

		</div>

		<!-- Commands -->
		<div id="CommandsDiv" style="display:none">
			
			<h2 class='first'>Command List</h2>
				
				<div class="commandquicklinks">
					<ul>
						<li><a href="#towny">/towny</a></li>
						<li><a href="#plot">/plot</a></li>
						<li><a href="#resident">/resident</a></li>
						<li><a href="#town">/town</a></li>
						<li><a href="#nation">/nation</a></li>
						<li><a href="#chat-commands">Chat Commands</a></li>
					</ul>
				</div>

					<p>This list breaks each command down by word. Eg: <code>/resident set perm {on/off}</code>.</p>
					<p>For resident commands, the add command would auto-match online players, while add+ requires exact spelling to choose offline players.</p>
					<p>Just about every subcommand has it's own help menu. Use <code>/resident set</code>, or a similar cutoff, to show all the options for that command ingame. You can also use <code>/resident set ?</code>, you will probably need to use that in the case where a subcommand actually has a function by itself. Example: <code>/town claim</code>, and <code>/town claim ?</code> would show all it's subcommands.</p>
					<p>The { } brackets are used to show variables, or what you need to fill in. The elipse ".." (or shortened elipse) is used to show that you can specify multiple things at once (like inviting 10 residents at once).</p>
					<p>The {bleh/blah/bluh} is used to show that the input can be multiple words.</p>
					<p>An empty bullet represents that the subcommand itself does something and will not show a help menu.</p>
					<p><b>Some commands you cannot execute; they are for mayors and admins! (Webmaster Note: I copied the code for the command list from <a href="https://github.com/TownyAdvanced/Towny/wiki/Towny-Commands">here</a>. Last updated August 29, 2020.)</b></p>

				<h3 id="towny" >/towny</h3>
				<ul>
					<li>/towny
						<ul>
							<li>
								<ul>
									<li>Shows basic towny commands.</li>
								</ul>
							</li>
							<li>? - Shows more towny commands.</li>
							<li>map - Shows the towny map.</li>
							<li>prices - Shows taxes/costs associated with running a town.</li>
							<li>time - Shows time until next new-day (tax/upkeep collection.)</li>
							<li>top
								<ul>
									<li>residents {all/town/nation} - Shows top residents.</li>
									<li>land {all/resident/town} - Shows top land owners.</li>
								</ul>
							</li>
							<li>tree - Shows lots of stuff.</li>
							<li>universe - Shows full towny stats, resident/town/nation/world counts as well as townblocks claimed.</li>
							<li>v - Shows towny version.</li>
							<li>war
								<ul>
									<li>stats</li>
									<li>scores</li>
									<li>hud</li>
									<li>participants {page #}</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				
				<h3 id="plot" >/plot</h3>
				<ul>
					<li>/plot
						<ul>
							<li>
								<ul>
									<li>Shows the /plot commands.</li>
								</ul>
							</li>
							<li>
								<p>claim - Resident command to personally claims a plot that are for sale.</p>
								<ul>
									<li>auto - Resident command to personally claim an area of plots that are for sale, around the player typing the command.</li>
								</ul>
							</li>
							<li>
								<p>unclaim - Resident command to unclaim personally owned plots.</p>
								<ul>
									<li>circle/rect - Resident command to unclaim personally owned plots in a circle or rectangle shape.
										<ul>
											<li>{# (radius around current position)} - Radius of the area to unclaim.</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<p>{forsale/fs} - Set a plot for sale.</p>
								<ul>
									<li>circle/rect - Set a shape.
										<ul>
											<li>{# (radius around current position)} - Radius of the area to set forsale.</li>
										</ul>
									</li>
									<li>$$ - Cost of plot.
										<ul>
											<li>circle/rect - Set a shape.
												<ul>
													<li>{# (radius around current position)} - Radius of the area to set forsale.</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<p>{notforsale/nfs} - Set a plot to not be for sale.</p>
								<ul>
									<li>circle/rect - Set a shape.
										<ul>
											<li>{# (radius around current position)} - Radius of the area to set notforsale.</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<p>evict - Used to remove a plot from a plot owner, usually by the mayor or assistant.</p>
							</li>
							<li>
								<p>perm - Shows the perm line of the plot in which the player stands.</p>
							</li>
							<li>
								<p>perm hud - Toggles on/off the plot perm hud scoreboard which shows the perm line of the plot in which the player stands along with more useful plot info.</p>
							</li>
							<li>
									<p>set</p>
								<ul>
									<li>reset - Sets a shop/embassy/arena/wilds plot back to a normal plot.</li>
									<li>shop - Sets a plot to a shop plot.</li>
									<li>embassy - Sets a plot to an embassy plot.</li>
									<li>arena - Sets a plot to an arena plot.</li>
									<li>wilds - Sets a plot to a wilds plot.</li>
									<li>inn - Set a plot to an inn plot.</li>
									<li>jail - Set a plot to an jail plot.</li>
									<li>farm - Set a plot to a farm plot.</li>
									<li>bank - Set a plot to a bank plot.</li>
									<li>outpost - Set a plot to an outpost plot, costs the same as /t claim outpost.</li>
									<li>name - allows a mayor or plot-owner to rename plots they own, overwriting the ~Unowned message. Personal-plots display both the plot's given name and the name of the plot-owner.</li>
									<li>perm
										<ul>
											<li>{on/off} - Edits the perm line of the single plot in which the player is standing. <a href="https://github.com/TownyAdvanced/Towny/wiki/How-Towny-Works#towny-plot-perms">See here for details.</a>
											</li>
											<li>{resident/ally/outsider} {on/off}</li>
											<li>{build/destroy/switch/itemuse} {on/off}</li>
											<li>{resident/ally/outsider} {build/destroy/switch/itemuse} {on/off}</li>
											<li>reset - Resets the plot in which you stand to the default perm line of the /town or /resident screen (depending on if the plot is owned personally or by the town.)</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<p>toggle</p>
								<ul>
									<li>fire - Turn on/off firespread in the plot in which you stand.</li>
									<li>pvp - Turn on/off pvp in the plot in which you stand.</li>
									<li>explosion - Turn on/off explosions in the plot in which you stand.</li>
									<li>mob - Turn on/off hostile mobspawning in the plot in which you stand.</li>
								</ul>
							</li>
							<li>
								<p>clear - Command to remove list of block id's from a plot, used by a mayor on town-owned land, or by a plot-owner on their personal plots.</p>
							</li>
							<li>
								<p>group</p>
								<ul>
									<li>add|new|create {groupname} - Creates a plot group where a player is standing, also adds plots to an existing group.</li>
									<li>remove - Removes the plot stood in from its plot group.</li>
									<li>rename {newname} - Renames a plot group.</li>
									<li>set {plottype} - Sets the group to a specified plot type. Not able to be used for Jail plots.</li>
									<li>set perm ... - Used to set the perm line of the group you are standing in. See above section for /plot set perm for remainder of commands.</li>
									<li>toggle ... - Used to toggle plot settings. See above section for /plot set toggle for remainder of commands.</li>
									<li>forsale|fs {price} - Set the group for sale at the set price.</li>
									<li>notforsale|nfs - Set the group not for sale.</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				
				<h3 id="resident">/resident</h3>
				<ul>
					<li>/resident
						<ul>
							<li>
								<ul>
									<li>Shows a player their resident screen.</li>
								</ul>
							</li>
							<li>? - Shows /res commands available.</li>
							<li>{resident} - Shows a player another player's resident screen.</li>
							<li>friend
								<ul>
									<li>add {resident} .. {resident} - Resident adds online player to their friends list.</li>
									<li>add+ {resident} .. {resident} - Resident adds offline player to their friends list.</li>
									<li>remove {resident} .. {resident} - Resident removes online player from their friends list.</li>
									<li>remove+ {resident} .. {resident} - Resident removes offline player from their friends list.</li>
									<li>clearlist - Removes all friends from a resident's friend list.</li>
									<li>list - Returns a list of your friends.</li>
								</ul>
							</li>
							<li>list - Lists residents in towny's data folder who are online.</li>
							<li>jail paybail - Allows a player to pay to get out of jail. Funds go to the town which owns the Jail.</li>
							<li>spawn - If deny_bed_use: true and player has a current bed spawn, command will teleport player to their bed.</li>
							<li>toggle
								<ul>
									<li>map - Turns on map which refreshes when moving across plot borders.</li>
									<li>townclaim - Turns on mode where /town claim is automatically used when moving across plot borders.</li>
									<li>plotborder - Turns on smokey plot-border view. Border shows when players cross to different townblocks.</li>
									<li>constantplotborder - Turns on smokey plot-border view. Border doesn't disappear.</li>
									<li>spy - Admins can turn on chat-channel spying.</li>
									<li>ignoreplots - Turns on/off plot notifications in town.</li>
									<li>reset - This turns off all modes that are active.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>set
						<ul>
							<li>perm
								<ul>
									<li>{on/off} - Edits the perm line on the resident screen. <a href="https://github.com/TownyAdvanced/Towny/wiki/How-Towny-Works#towny-plot-perms">See here for details.</a>
									</li>
									<li>{friend/ally/outsider} {on/off}</li>
									<li>{build/destroy/switch/itemuse} {on/off}</li>
									<li>{friend/ally/outsider} {build/destroy/switch/itemuse} {on/off}</li>
									<li>reset - This takes the perm line seen in the /resident screen and applies it to all plots personally owned by the player typing it.</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>tax - Shows taxes a player pays.</li>
				</ul>
				
				<h3 id="town">/town</h3>
				<ul>
					<li>/town
						<ul>
							<li>
								<ul>
									<li>Shows a player their town's town screen.</li>
								</ul>
							</li>
							<li>
								<p>? - Shows /town commands available.</p>
							</li>
							<li>
								<p>{town} - Shows a player another town's town screen.</p>
							</li>
							<li>
								<p>here - Shows you the town screen of the town in which you stand.</p>
							</li>
							<li>
								<p>leave - Leaves a town.</p>
							</li>
							<li>
								<p>list</p>
								<ul>
									<li>by name {page #} - order alpabetically.</li>
									<li>by resident {page #} - order by town with most residents.</li>
									<li>by balance {page #} - order by town with the highest nation bank balance.</li>
									<li>by townblocks {page #} - order towns by how many townblocks they have claimed.</li>
									<li>by online {page #} - order by how many players are online at that moment.</li>
									<li>by open {page #} - lists only open towns, in order of most residents to least residents.</li>
								</ul>
							</li>
							<li>
								<p>online - Shows players in your town which are online.</p>
							</li>
							<li>
								<p>plots {townname} - Shows a helpful list of plots and their types/revenue which are owned by the town.</p>
							</li>
							<li>
								<p>new {townname} - Creates a new town.</p>
							</li>
							<li>
								<p>add {resident} .. {resident} - Mayor command to add residents to your town.</p>
							</li>
							<li>
								<p>kick {resident} .. {resident} - Mayor command to remove residents from your town.</p>
							</li>
							<li>
								<p>spawn - Teleports you to your town's spawn.</p>
							</li>
							<li>
								<p>spawn {town} - Teleports you to another town's spawn.</p>
							</li>
							<li>
								<p>claim - Mayor command to claim the townblock in which you stand for your town.</p>
								<ul>
									<li>outpost &lt;#|{name}|{name:#} - Claims an outpost for your town. {name} uses the plot name. {name:#} is used when a plot name begins with a number.</li>
									<li>{# (radius around current position)} - Claims an area of townblocks around you for your town.</li>
									<li>auto - Claims as many townblocks around you as is possible given money in townbank and available townblocks.</li>
								</ul>
							</li>
							<li>
								<p>unclaim - Mayor command to unclaim the townblock in which you stand.</p>
								<ul>
									<li>all - Mayor command to unclaim all townblocks.</li>
									<li>{# (radius around current position)} - Command to unclaim an area of townblocks around you.</li>
									<li>outpost - Used to unclaim glitched outposts on MySQL Towny servers pre-0.92.0.0</li>
								</ul>
							</li>
							<li>
								<p>withdraw {$} - Removes money from town bank.</p>
							</li>
							<li>
								<p>deposit {$} - Adds money from player to the town bank.</p>
							</li>
							<li>
								<p>buy</p>
								<ul>
									<li>bonus {amount} - Buys available bonus townblocks.</li>
								</ul>
							</li>
							<li>
								<p>delete {town name} - Admin/Mayor command to delete a town from towny's data folder's files.</p>
							</li>
							<li>
								<p>outlawlist {town} - Displays a list of outlaws for a town.</p>
							</li>
							<li>
								<p>outlaw {add/remove} {name} - Adds or removes an outlaw from a town's outlaw list</p>
							</li>
							<li>
								<p>outpost</p>
								<ul>
									<li>{# (where # equals the corresponding outpost's number)} - Teleports to an outpost.</li>
									<li>{list} - lists your town's outposts.</li>
								</ul>
							</li>
							<li>
								<p>ranklist - Displays residents and their ranks.</p>
							</li>
							<li>
								<p>rank {add|remove} {playername} {rankname} - Grants or removes a rank to a resident of the town.</p>
							</li>
							<li>
								<p>reslist {townname} - See a FULL list of all residents in a town.</p>
							</li>
							<li>
								<p>say {msg} - Broadcast a message to online town members.</p>
							</li>
							<li>
								<p>set</p>
								<ul>
									<li>board {message} - Sets message seen by residents upon logging in.</li>
									<li>mayor {resident} - Mayor command to give mayor status to another resident.</li>
									<li>homeblock - Sets the homeblock and spawn of your town.</li>
									<li>spawn - Sets the town spawn, must be done inside the homeblock.</li>
									<li>spawncost - Set the cost of spawning to a public town. Doesn't affect town residents, nation members and nation-allies.</li>
									<li>name {name} - Change your town's name.</li>
									<li>outpost - Resets the outpost's spawn point to the player location. Must be used in an existing outpost plot.</li>
									<li>jail - Resets a jail plot's spawn to current position within a jail plot.</li>
									<li>perm
										<ul>
											<li>{on/off} - Edits the perm line on the town screen. <a href="https://github.com/TownyAdvanced/Towny/wiki/How-Towny-Works#towny-plot-perms">See here for details.</a>
											</li>
											<li>{resident/ally/outsider} {on/off}</li>
											<li>{build/destroy/switch/itemuse} {on/off}</li>
											<li>{resident/ally/outsider} {build/destroy/switch/itemuse} {on/off}</li>
											<li>reset - This takes the perm line seen in the /town screen and applies it to all plots owned by the town.</li>
										</ul>
									</li>
									<li>tag {upto4character} - Sets the town's tag, which is sometimes used on that chat line.
										<ul>
											<li>clear - Clears the tag set for the town.</li>
										</ul>
									</li>
									<li>taxes {$} - Sets taxes collected from each resident daily. Also sets percentage if taxpercent is toggled on.</li>
									<li>taxpercentcap {$} - The maximum amount that can be taken when taxpercent is enabled.</li>
									<li>plottax {$} - Set taxes collected from each resident daily, per plot that they own.</li>
									<li>plotprice {$} - Sets default cost of plot for the town.</li>
									<li>shopprice {$} - Sets default cost of a shopplot for the town.</li>
									<li>shoptax {$} - Set taxes collected from each resident daily, per shopplot that they own.</li>
									<li>embassyprice {$} - Sets default cost of a embassy plot for the town.</li>
									<li>embassytax {$} - Set taxes collected from each resident daily, per embassy plot that they own.</li>
									<li>title {name} {titlegoeshere} - Mayor command to add a Title to a member of the town.</li>
									<li>surname {name} {surnamegoeshere} - Mayor command to add a Suffix to a member of the town.</li>
								</ul>
							</li>
							<li>
								<p>toggle</p>
								<ul>
									<li>explosion - Turn on/off explosions in town.</li>
									<li>fire - Turn on/off firespread in town.</li>
									<li>mobs - Turn on/off hostile mobspawning in town.</li>
									<li>public - Turn on/off public /town spawning and the co-ordinates of the town's homeblock in the /town screen.</li>
									<li>pvp - Turn on/off pvp in town.</li>
									<li>taxpercent - Turn on/off taxing by percent/flatrate.</li>
									<li>open - Turn on/off public joining to your town.</li>
									<li>jail {number} {residentname} - Sends a resident of your town to the jail spawn number specified. Same command unjails a player.</li>
									<li>jail {number} {residentname} {days} - Sends a resident of your town to the jail spawn number specified, for the number of Towny days specified.</li>
								</ul>
							</li>
							<li>
								<p>join {townname} - Command to join a town that doesn't require invites.</p>
							</li>
						</ul>
					</li>
				</ul>
				
				<h3 id="nation">/nation</h2>
				<ul>
					<li>/nation
						<ul>
							<li>
								<ul>
									<li>Shows a player their nation's nation screen.</li>
								</ul>
							</li>
							<li>? - Shows /nation commands.</li>
							<li>list
								<ul>
									<li>by name {page #} - order alpabetically.</li>
									<li>by resident {page #} - order by nation with most residents across all towns.</li>
									<li>by balance {page #} - order by nation with the highest nation bank balance.</li>
									<li>by towns {page #} - order by nation with the most towns.</li>
									<li>by townblocks {page #} - order nations by how many townblocks their towns have collectively claimed.</li>
									<li>by online {page #} - order by how many players are online at that moment.</li>
								</ul>
							</li>
							<li>online - Shows players in your nation which are online.</li>
							<li>{nation} - Shows a player the /nation screen of another nation.</li>
							<li>leave - Mayor command to leave the nation they are a part of.</li>
							<li>withdraw {$} - King command to remove money from the nation bank.</li>
							<li>deposit {$} - King command to add money to the nation bank.</li>
							<li>deposit {$} {townname} - King command to add money to the bank of a town who is in the nation.</li>
							<li>new
								<ul>
									<li>{nationname} - Mayor command to create a nation.</li>
								</ul>
							</li>
							<li>rank - Command to set assistant/custom ranks in the nation.</li>
							<li>add {town} .. {town} - Invites/Adds a town to your nation.</li>
							<li>kick {town} .. {town} - Removes a town from your nation.</li>
							<li>delete {nation} - Deletes your nation.</li>
							<li>ally
								<ul>
									<li>add {nation} .. {nation} - Add a nation to your nation's ally list.</li>
									<li>remove {nation} .. {nation} - Removes a nation from your nation's ally list.</li>
								</ul>
							</li>
							<li>enemy
								<ul>
									<li>add {nation} .. {nation} - Add a nation to your nation's enemy list.</li>
									<li>remove {nation} .. {nation} - Removes a nation from your nation's enemy list.</li>
								</ul>
							</li>
							<li>rank {add|remove} {playername} {rankname} - Grants or removes a rank to a resident of the nation.</li>
							<li>say {msg} - Broadcast a message to online nation members.</li>
							<li>set
								<ul>
									<li>king {resident} - King command to change the king of the nation.</li>
									<li>capital {town} - Sets the capitol and king of the nation.</li>
									<li>board {message} - Sets message seen by residents upon logging in.</li>
									<li>taxes {$} - Sets nationtax applied to the towns within the nation.</li>
									<li>name {name} - Sets the nation's name.</li>
									<li>spawn - Sets the nation spawn point.</li>
									<li>spawncost - Sets the cost of public spawns to that nation's spawn point. No effect on members of the nation or nation-allies</li>
									<li>title {name} {titlegoeshere} - King command to add a Title to a member of the nation.</li>
									<li>surname {name} {surnamegoeshere} - King command to add a Suffix to a member of the nation.</li>
									<li>tag {upto4character} - Sets the nation's tag, which is sometimes used on that chat line.
										<ul>
											<li>clear - Clears the tag set for the nation.</li>
										</ul>
									</li>
									<li>mapcolor {color} - Sets the colour seen on the dynmap-towny webpage.</li>
								</ul>
							</li>
							<li>toggle
								<ul>
									<li>neutral - Sets whether your nation will pay daily to be neutral during towny war.</li>
									<li>open - Sets the nation to be open, so that any town can join without an invite.</li>
								</ul>
							</li>
							<li>join {nation}
								<ul>
									<li>Used by a town mayor to join an open nation.</li>
								</ul>
							</li>
							<li>merge {nationname}
								<ul>
									<li>Requests the given nation to merge into your nation.</li>
									<li>Can only be used by the nation king, and requires the king of the other nation to be online to accept the merger.</li>
									<li>The soon-to-be-ex-king will receive a confirmation message asking if they will accept the dissolution of their nation.</li>
									<li>If accepted the towns of the nation transfer to the remaining nation. The nation's bank money is also transferred.</li>
								</ul>
							</li>
							<li>townlist (nation)
								<ul>
									<li>(nation) is optional, to show townlist of a nation you aren't a part of.</li>
									<li>lists all towns in a nation.</li>
								</ul>
							</li>
							<li>allylist (nation)
								<ul>
									<li>(nation) is optional, to show allylist of a nation you aren't a part of.</li>
									<li>lists all allies of a nation.</li>
								</ul>
							</li>
							<li>enemylist (nation)
								<ul>
									<li>(nation) is optional, to show enemylist of a nation you aren't a part of.</li>
									<li>lists all enemies of a nation.</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
				
				<h3 id="chat-commands">Chat Commands</h3>
				<ul>
					<li>/townchat, /tc
						<ul>
							<li>Put in from of text to speak with members of your town only, or without text afterwards to enter the channel.</li>
						</ul>
					</li>
					<li>/nationchat, /nc
						<ul>
							<li>Put in from of text to speak with members of your nation only, or without text afterwards to enter the channel.</li>
						</ul>
					</li>
					<li>/global, /g
						<ul>
							<li>Put in from of text to speak in globalchat, or without text afterwards to enter the channel.</li>
						</ul>
					</li>
					<li>/res set mode reset
						<ul>
							<li>Reset chat mode to default chat.</li>
						</ul>
					</li>
					<li>/a - admin chat.</li>
					<li>/m - moderator chat.</li>
				</ul>
				<ul>
					<li>/channel leave|join {channel} - Channel leaving and joining.</li>
					<li>/ch list - list what channels a player is currently listening to. Courtesy of Yaiyan.</li>
					<li>/leave {channel} - Leaves a channel.</li>
					<li>/join {channel} - Joins a channel.</li>
					<li>/chmute {channel} {player} - Mutes a player in a channel.</li>
					<li>/mutelist {channel} - Displays mute list for a channel.</li>
					<li>/chunmute {channel} {player} - Unmutes a player in a channel.</li>
				</ul>
		</div>
		
		<!-- Dynmap -->
		<div id="DynmapDiv" style="display: none;">

			<iframe width="800" height="500" src="https://play.earthvision.tk:1337/?worldname=earth&mapname=flat&zoom=2&x=-9848&y=64&z=-3408"></iframe>
			
		</div>
		
	</div> <!-- content -->
	</main>
</div> <!-- container -->

<div id="fade"></div>

	<script type="text/javascript">
	/* <![CDATA[*/
	// Dynamically get tabs
	function getTabs() {
		var d = document.getElementById('Tabs');
		var matches = d.innerHTML.match(/<li.* id="(.+?)Tab"/g);
		var tabs = []
		for (i in matches) {
		  tabs[i]= matches[i].replace(/<li.* id="/,'').replace('Tab"', '');
		}
		tabs = tabs.reverse();
		return (tabs)
	}
	// Scroll to ?anchor
	// window.location.hash

	// Toggle tab display
	function toggle(el) {
		var hashes = el.toString().replace(/^.*?#/, '').split('#');
		var target = hashes[0];
		var anchor = hashes[1];
		// If tab doesn't exist, exit
		if( tabs.indexOf( target ) == -1 )
			return;
		for (var tab in tabs) {
			// reinit tabs
			document.getElementById(tabs[tab]+'Tab').className = 'Tab';
			// reinit divs
			document.getElementById(tabs[tab]+'Div').style.display= 'none';
		}
		// highlight & display target
		document.getElementById(target+'Div').style.display = 'block';
		document.getElementById(target+'Tab').className = 'SelectedTab';
		randbg();
		try { el.blur(); } catch(err) {}
		// Try scrolling to anchor
		try {
			window.scroll(0,findPos(document.getElementById(anchor)));
		} catch(err) { window.location.hash = target; }
	}
	// Get tab list
	var tabs = getTabs();
	// On page load/refresh display required tab
	if (location.hash) {
		toggle(location.hash);
	}
	// Background fancyness
	function randbg(){
		var rndbg = [ 'bg_ants.png', 'bg_circles.png', 'bg_cross.png', 'bg_diag.png', 'bg_fuzzy.png', 'bg_fuzzy_bits.png', 'bg_yourls.png', 'bg_fuzzy_bits.png', 'bg_life.png', 'bg_boobs.png' ];
		var bg = rndbg[ Math.floor( Math.random() * rndbg.length ) ];
		document.body.style.background='#E3F3FF url(http://s.k4deng.ml/user/plugins/random-bg/img/'+bg+')';
	};
	randbg();
	//Finds y value of given object
	function findPos(obj) {
		var curtop = 0;
		if (obj.offsetParent) {
			do {
				curtop += obj.offsetTop;
			} while (obj = obj.offsetParent);
		curtop = curtop - 30;
		return [curtop];
		}
	}
	/* ]]> */
	</script>
<!-- LiveChat -->

</body>
</html>
