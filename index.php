<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>BestFlix - The Best Picture Nominees on Netflix</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="academy awards, oscars, best picture, netflix, award, movies, films" >
	<meta name="description" content="Find the Best Picture Nominees from any year since the inception of the Academy Awards and add them to your Netflix Queue. Never miss a great movie again!" >
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />
	
	<!-- Scripts -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">		
		$(document).ready(function() { //Start up our Featured Project Carosuel
			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 600
			});
		});
	</script>  

	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>
<body>
<body>
	<div id="wrapper" class="container_12 clearfix">

		<!-- Text Logo -->
		<h1 id="logo" class="grid_4">Best<span style="color: red;">Flix</span></h1>
		
		<!-- Navigation Menu -->
		<ul id="navigation" class="grid_8">
			<li><a href="mailto:david@davidstump.net"><span class="meta">Get in touch</span><br />Contact Us</a></li>
			<li><a href="/" class="current"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>
		
		<div class="hr grid_12">&nbsp;</div>
		<div class="clear"></div>
		
					<h2 class="grid_12 caption clearfix">Best Picture Nominees From:
		<form name="pickyear" action="https://empty-earth-7486.herokuapp.com" method="GET" style="display: inline">
		<select name="year" onChange="document.forms['pickyear'].submit()">
		<?php
			for ($i = 2011; $i > 1926; $i--) {
				$selected = "";
				if (isset($_GET['year']) && $_GET['year'] == $i) {
					$selected = "selected=selected";
				}
				echo "<option value='" . $i . "' " . $selected . ">" . $i . "</option>";
			}
		?>
		</select>
		</form>
		</h2>
		
		<!-- Featured Image Slider -->
		<div id="films" class="clearfix grid_12">
			<ul>
			<?php
			    /* The following is a sample code snippet. Please note that the API key and
			      shared secret are bogus and will not work.
			      
			      I'm using OAuthSimple as the library to perform the signatures. It
			      currently is available for PHP and Javascript, but I'd REALLY appreciate
			      it if folks could help flesh out versions for Python, .net, and other
			      languages.
			    */
				
			    include ('library/oauth/OAuthSimple.php');
			        
			    /* Remember, these are bogus. Swap them for the API key and Shared Secret
			      you got when you registered your Application at
			      http://developer.netflix.com
			    */
			    $apiKey = 'ugzaqgu56xxaupgtmbsbknep';
			    $sharedSecret = 'czaqTdmUu4';
			    
			    // Some sample argument values
			
			    /* You can pass in arguments to OAuthSimple either as a string of URL
			      characters or an array. (See the documentation for OAuthSimple for
			      details. There's nothing magical going on here, just simple key=>value
			      pairs. */
				  
				$films = array("Wings" => "1927","The Racket" => "1927","Seventh Heaven" => "1927","The Broadway Melody" => "1928","Alibi" => "1928","The Hollywood Revue of 1929" => "1928","In Old Arizona" => "1928","The Patriot" => "1928","All Quiet on the Western Front" => "1929","The Big House" => "1929","Disraeli" => "1929","The Divorcee" => "1929","The Love Parade" => "1929","Cimarron" => "1930","East Lynne" => "1930","The Front Page" => "1930","Skippy" => "1930","Trader Horn" => "1930","Grand Hotel" => "1931","Arrowsmith" => "1931","Bad Girl" => "1931","The Champ" => "1931","Five Star Final" => "1931","One Hour with You" => "1931","Shanghai Express" => "1931","The Smiling Lieutenant" => "1931","Cavalcade" => "1932","42nd Street" => "1932","I Am a Fugitive from a Chain Gang" => "1932","Lady for a Day" => "1932","The Private Life of Henry VIII" => "1932","She Done Him Wrong" => "1932","Smilin' Through" => "1932","State Fair" => "1932","It Happened One Night" => "1934","Cleopatra" => "1934","Flirtation Walk" => "1934","The Gay Divorcee" => "1934","Here Comes the Navy" => "1934","Imitation of Life" => "1934","One Night of Love" => "1934","The Thin Man" => "1934","Viva Villa!" => "1934","The White Parade" => "1934","Mutiny on the Bounty" => "1935","Alice Adams" => "1935","Broadway Melody of 1936" => "1935","David Copperfield" => "1935","The Lives of a Bengal Lancer" => "1935","A Midsummer Night's Dream" => "1935","Les Misérables" => "1935","Naughty Marietta" => "1935","Ruggles of Red Gap" => "1935","Top Hat" => "1935","The Great Ziegfeld" => "1936","Anthony Adverse" => "1936","Dodsworth" => "1936","Libeled Lady" => "1936","Mr. Deeds Goes to Town" => "1936","Romeo and Juliet" => "1936","San Francisco" => "1936","The Story of Louis Pasteur" => "1936","A Tale of Two Cities" => "1936","Three Smart Girls" => "1936","The Life of Emile Zola" => "1937","The Awful Truth" => "1937","Captains Courageous" => "1937","Dead End" => "1937","The Good Earth" => "1937","In Old Chicago" => "1937","Lost Horizon" => "1937","One Hundred Men and a Girl" => "1937","Stage Door" => "1937","A Star Is Born" => "1937","You Can't Take It With You" => "1938","The Adventures of Robin Hood" => "1938","Alexander's Ragtime Band" => "1938","Boys Town" => "1938","The Citadel" => "1938","Four Daughters" => "1938","Grand Illusion" => "1938","Jezebel" => "1938","Pygmalion" => "1938","Test Pilot" => "1938","Gone with the Wind" => "1939","Dark Victory" => "1939","Goodbye, Mr. Chips" => "1939","Love Affair" => "1939","Mr. Smith Goes to Washington" => "1939","Ninotchka" => "1939","Of Mice and Men" => "1939","Stagecoach" => "1939","The Wizard of Oz" => "1939","Wuthering Heights" => "1939","Rebecca" => "1940","All This, and Heaven Too" => "1940","Foreign Correspondent" => "1940","The Grapes of Wrath" => "1940","The Great Dictator" => "1940","Kitty Foyle" => "1940","The Letter" => "1940","The Long Voyage Home" => "1940","Our Town" => "1940","The Philadelphia Story" => "1940","How Green Was My Valley" => "1941","Blossoms in the Dust" => "1941","Citizen Kane" => "1941","Here Comes Mr. Jordan" => "1941","Hold Back the Dawn" => "1941","The Little Foxes" => "1941","The Maltese Falcon" => "1941","One Foot in Heaven" => "1941","Sergeant York" => "1941","Suspicion" => "1941","Mrs. Miniver" => "1942","49th Parallel" => "1942","Kings Row" => "1942","The Magnificent Ambersons" => "1942","The Pied Piper" => "1942","The Pride of the Yankees" => "1942","Random Harvest" => "1942","The Talk of the Town" => "1942","Wake Island" => "1942","Yankee Doodle Dandy" => "1942","Casablanca" => "1943","For Whom the Bell Tolls" => "1943","Heaven Can Wait" => "1943","The Human Comedy" => "1943","In Which We Serve" => "1943","Madame Curie" => "1943","The More the Merrier" => "1943","The Ox-Bow Incident" => "1943","The Song of Bernadette" => "1943","Watch on the Rhine" => "1943","Going My Way" => "1944","Double Indemnity" => "1944","Gaslight" => "1944","Since You Went Away" => "1944","Wilson" => "1944","The Lost Weekend" => "1945","Anchors Aweigh" => "1945","The Bells of St. Mary's" => "1945","Mildred Pierce" => "1945","Spellbound" => "1945","The Best Years of Our Lives" => "1946","Henry V" => "1946","It's a Wonderful Life" => "1946","The Razor's Edge" => "1946","The Yearling" => "1946","Gentleman's Agreement" => "1947","The Bishop's Wife" => "1947","Crossfire" => "1947","Great Expectations" => "1947","Miracle on 34th Street" => "1947","Hamlet" => "1948","Johnny Belinda" => "1948","The Red Shoes" => "1948","The Snake Pit" => "1948","The Treasure of the Sierra Madre" => "1948","All the King's Men" => "1949","Battleground" => "1949","The Heiress" => "1949","A Letter to Three Wives" => "1949","Twelve O'Clock High" => "1949","All About Eve" => "1950","Born Yesterday" => "1950","Father of the Bride" => "1950","King Solomon's Mines" => "1950","Sunset Boulevard" => "1950","An American in Paris" => "1951","Decision Before Dawn" => "1951","A Place in the Sun" => "1951","Quo Vadis" => "1951","A Streetcar Named Desire" => "1951","The Greatest Show on Earth" => "1952","High Noon" => "1952","Ivanhoe" => "1952","Moulin Rouge" => "1952","The Quiet Man" => "1952","From Here to Eternity" => "1953","Julius Caesar" => "1953","The Robe" => "1953","Roman Holiday" => "1953","Shane" => "1953","On the Waterfront" => "1954","The Caine Mutiny" => "1954","The Country Girl" => "1954","Seven Brides for Seven Brothers" => "1954","Three Coins in the Fountain" => "1954","Marty" => "1955","Love Is a Many-Splendored Thing" => "1955","Mister Roberts" => "1955","Picnic" => "1955","The Rose Tattoo" => "1955","Around the World in 80 Days" => "1956","Friendly Persuasion" => "1956","Giant" => "1956","The King and I" => "1956","The Ten Commandments" => "1956","The Bridge on the River Kwai" => "1957","Peyton Place" => "1957","Sayonara" => "1957","12 Angry Men" => "1957","Witness for the Prosecution" => "1957","Gigi" => "1958","Auntie Mame" => "1958","Cat on a Hot Tin Roof" => "1958","The Defiant Ones" => "1958","Separate Tables" => "1958","Ben-Hur" => "1959","Anatomy of a Murder" => "1959","The Diary of Anne Frank" => "1959","The Nun's Story" => "1959","Room at the Top" => "1959","The Apartment" => "1960","The Alamo" => "1960","Elmer Gantry" => "1960","Sons and Lovers" => "1960","The Sundowners" => "1960","West Side Story" => "1961","Fanny" => "1961","The Guns of Navarone" => "1961","The Hustler" => "1961","Judgment at Nuremberg" => "1961","Lawrence of Arabia" => "1962","The Longest Day" => "1962","The Music Man" => "1962","Mutiny on the Bounty" => "1962","To Kill a Mockingbird" => "1962","Tom Jones" => "1963","America, America" => "1963","Cleopatra" => "1963","How the West Was Won" => "1963","Lilies of the Field" => "1963","My Fair Lady" => "1964","Becket" => "1964","Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb" => "1964","Mary Poppins" => "1964","Zorba the Greek" => "1964","The Sound of Music" => "1965","Darling" => "1965","Doctor Zhivago" => "1965","Ship of Fools" => "1965","A Thousand Clowns" => "1965","A Man for All Seasons" => "1966","Alfie" => "1966","The Russians Are Coming, the Russians Are Coming" => "1966","The Sand Pebbles" => "1966","Who's Afraid of Virginia Woolf?" => "1966","In the Heat of the Night" => "1967","Bonnie and Clyde" => "1967","Doctor Dolittle" => "1967","The Graduate" => "1967","Guess Who's Coming to Dinner" => "1967","Oliver!" => "1968","Funny Girl" => "1968","The Lion in Winter" => "1968","Rachel, Rachel" => "1968","Romeo and Juliet" => "1968","Midnight Cowboy" => "1969","Anne of the Thousand Days" => "1969","Butch Cassidy and the Sundance Kid" => "1969","Hello, Dolly!" => "1969","Patton" => "1970","Airport" => "1970","Five Easy Pieces" => "1970","Love Story" => "1970","MASH" => "1970","The French Connection" => "1971","A Clockwork Orange" => "1971","Fiddler on the Roof" => "1971","The Last Picture Show" => "1971","Nicholas and Alexandra" => "1971","The Godfather" => "1972","Cabaret" => "1972","Deliverance" => "1972","Sounder" => "1972","The Sting" => "1973","American Graffiti" => "1973","The Exorcist" => "1973","A Touch of Class" => "1973","The Godfather Part II" => "1974","Chinatown" => "1974","The Conversation" => "1974","Lenny" => "1974","The Towering Inferno" => "1974","One Flew Over the Cuckoo's Nest" => "1975","Barry Lyndon" => "1975","Dog Day Afternoon" => "1975","Jaws" => "1975","Nashville" => "1975","Rocky" => "1976","All the President's Men" => "1976","Bound for Glory" => "1976","Network" => "1976","Taxi Driver" => "1976","Annie Hall" => "1977","The Goodbye Girl" => "1977","Julia" => "1977","Star Wars" => "1977","The Turning Point" => "1977","The Deer Hunter" => "1978","Coming Home" => "1978","Heaven Can Wait" => "1978","Midnight Express" => "1978","An Unmarried Woman" => "1978","Kramer vs. Kramer" => "1979","All That Jazz" => "1979","Apocalypse Now" => "1979","Breaking Away" => "1979","Norma Rae" => "1979","Ordinary People" => "1980","Coal Miner's Daughter" => "1980","The Elephant Man" => "1980","Raging Bull" => "1980","Tess" => "1980","Chariots of Fire" => "1981","Atlantic City" => "1981","On Golden Pond" => "1981","Raiders of the Lost Ark" => "1981","Reds" => "1981","Gandhi" => "1982","E.T. the Extra-Terrestrial" => "1982","Missing" => "1982","Tootsie" => "1982","The Verdict" => "1982","Terms of Endearment" => "1983","The Big Chill" => "1983","The Dresser" => "1983","The Right Stuff" => "1983","Tender Mercies" => "1983","Amadeus" => "1984","The Killing Fields" => "1984","A Passage to India" => "1984","Places in the Heart" => "1984","A Soldier's Story" => "1984","Out of Africa" => "1985","The Color Purple" => "1985","Kiss of the Spider Woman" => "1985","Prizzi's Honor" => "1985","Witness" => "1985","Platoon" => "1986","Children of a Lesser God" => "1986","Hannah and Her Sisters" => "1986","The Mission" => "1986","A Room with a View" => "1986","The Last Emperor" => "1987","Broadcast News" => "1987","Fatal Attraction" => "1987","Hope and Glory" => "1987","Moonstruck" => "1987","Rain Man" => "1988","The Accidental Tourist" => "1988","Dangerous Liaisons" => "1988","Mississippi Burning" => "1988","Working Girl" => "1988","Driving Miss Daisy" => "1989","Born on the Fourth of July" => "1989","Dead Poets Society" => "1989","Field of Dreams" => "1989","My Left Foot" => "1989","Dances with Wolves" => "1990","Awakenings" => "1990","Ghost" => "1990","The Godfather Part III" => "1990","Goodfellas" => "1990","The Silence of the Lambs" => "1991","Beauty and the Beast" => "1991","Bugsy" => "1991","JFK" => "1991","The Prince of Tides" => "1991","Unforgiven" => "1992","The Crying Game" => "1992","A Few Good Men" => "1992","Howards End" => "1992","Scent of a Woman" => "1992","Schindler's List" => "1993","The Fugitive" => "1993","In the Name of the Father" => "1993","The Piano" => "1993","The Remains of the Day" => "1993","Forrest Gump" => "1994","Four Weddings and a Funeral" => "1994","Pulp Fiction" => "1994","Quiz Show" => "1994","The Shawshank Redemption" => "1994","Braveheart" => "1995","Apollo 13" => "1995","Babe" => "1995","Sense and Sensibility" => "1995","The English Patient" => "1996","Fargo" => "1996","Jerry Maguire" => "1996","Secrets & Lies" => "1996","Shine" => "1996","Titanic" => "1997","As Good as It Gets" => "1997","The Full Monty" => "1997","Good Will Hunting" => "1997","L.A. Confidential" => "1997","Shakespeare in Love" => "1998","Elizabeth" => "1998","Saving Private Ryan" => "1998","The Thin Red Line" => "1998","American Beauty" => "1999","The Cider House Rules" => "1999","The Green Mile" => "1999","The Insider" => "1999","The Sixth Sense" => "1999","Gladiator" => "2000","Chocolat" => "2000","Erin Brockovich" => "2000","Traffic" => "2000","A Beautiful Mind" => "2001","Gosford Park" => "2001","In the Bedroom" => "2001","The Lord of the Rings: The Fellowship of the Ring" => "2001","Moulin Rouge!" => "2001","Chicago" => "2002","Gangs of New York" => "2002","The Hours" => "2002","The Lord of the Rings: The Two Towers" => "2002","The Pianist" => "2002","The Lord of the Rings: The Return of the King" => "2003","Lost in Translation" => "2003","Master and Commander: The Far Side of the World" => "2003","Mystic River" => "2003","Seabiscuit" => "2003","Million Dollar Baby" => "2004","The Aviator" => "2004","Finding Neverland" => "2004","Ray" => "2004","Sideways" => "2004","Crash" => "2005","Brokeback Mountain" => "2005","Capote" => "2005","Good Night, and Good Luck" => "2005","Munich" => "2005","The Departed" => "2006","Letters from Iwo Jima" => "2006","The Queen" => "2006","Babel" => "2006","Little Miss Sunshine" => "2006","No Country for Old Men" => "2007","Atonement" => "2007","Juno" => "2007","Michael Clayton" => "2007","There Will Be Blood" => "2007","Slumdog Millionaire" => "2008","The Curious Case of Benjamin Button" => "2008","Frost/Nixon" => "2008","Milk" => "2008","The Reader" => "2008","The Hurt Locker" => "2009","Avatar" => "2009","The Blind Side" => "2009","District 9" => "2009","An Education" => "2009","Inglourious Basterds" => "2009","Precious" => "2009","A Serious Man" => "2009","Up" => "2009","Up in the Air" => "2009","The King's Speech" => "2010","Black Swan" => "2010","The Fighter" => "2010","Inception" => "2010","The Kids Are All Right" => "2010","127 Hours" => "2010","The Social Network" => "2010","Toy Story 3" => "2010","True Grit" => "2010","Winter's Bone" => "2010","The Artist" => "2011","The Descendants" => "2011","Extremely Loud and Incredibly Close" => "2011","The Help" => "2011","Hugo" => "2011","Midnight in Paris" => "2011","Moneyball" => "2011","The Tree of Life" => "2011","War Horse" => "2011");
				
				foreach ($films as $film => $year) {
					$filteryear = 2011;
					if (isset($_GET['year'])) {
						$filteryear = $_GET['year'];
					}
			
					if ($filteryear == $year) {
						$arguments = Array(
							term=> $film,
							expand=>'formats,synopsis',
							max_results=> '1',
							output=>'json'
						);
			
						// this is the URL path (note the lack of arguments.)
						$path = "http://api.netflix.com/catalog/titles";
			
						// Create the Signature object.
						$oauth = new OAuthSimple();
						$signed = $oauth->sign(Array(path=>$path,
										parameters=>$arguments,
										signatures=> Array('consumer_key'=>$apiKey,
															'shared_secret'=>$sharedSecret
															/* If you wanted to do queue functions
															  or other things that require access
															  tokens and secrets, you'd include them
															  here as:
															'access_token'=>$accessToken,
															'access_secret'=>$tokenSecret
															*/
															)));
			
						// Now go fetch the data.
						$curl = curl_init();
						curl_setopt($curl,CURLOPT_URL,$signed['signed_url']);
						curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
						$buffer = curl_exec($curl);
						if (curl_errno($curl))
						{
							die ("An error occurred:".curl_error());
						}
						$result = json_decode($buffer);
			?>
			<?php //print print_r($result); ?>
			<?php
					if ($result->catalog_titles->catalog_title->link > "") {
							foreach ($result->catalog_titles->catalog_title->link as $link) {
								if ($link->title == 'web page') {
									echo "<li><a href='" . $link->href . "' target='_blank'>";
								}
							}
							echo "<img src='" . $result->catalog_titles->catalog_title->box_art->large . "' alt='box_art' style='margin: 15px; float: left;' />";
							echo "</a></li>";
						}
					}
				}
			?>
			</ul>
			</div>
			<div class="hr grid_12 clearfix" style="margin-top: 15px;">&nbsp;</div>
		
		
		<!-- Footer -->
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="http://davidstump.net">David Stump</a></span>
			<a class="float right" href="#">top</a>
		</p>
		
	</div><!--end wrapper-->
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28709173-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
</body>
</html>