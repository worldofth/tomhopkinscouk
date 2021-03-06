<?php
	$agent = $_SERVER['HTTP_USER_AGENT'];
	$isIE = stripos($agent,"MSIE") !== false || stripos($agent,"Trident") !== false;
	$isSafari = stripos($agent, "Safari") !== false && stripos($agent, "Chrome") === false;
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
	============================== -->
	<meta charset="utf-8">
	<title>Tom Hopkins</title>

	<!-- Useful Metas
	============================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=EDGE,chrome=1">
	<meta name="description" content="">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">

	<!-- css
	============================== -->
	<link rel="stylesheet" href="resources/css/main.css">
</head>
<body<?php if($isIE || $isSafari) echo ' class="IE"'; ?>>
	<header class="l-page l-center c-header c-section--light c-section--grid c-section--border">
		<div class="c-decoration">
			<svg class="c-decoration__circles" viewport="0 0 100 100">
				<circle cx="50%" cy="50%" r="45%" fill="none"/>
				<circle cx="50%" cy="50%" r="47%" fill="none"/>
			</svg>
			<svg class="c-decoration__lines" viewport="0 0 100 100">
				<line x1="-10%" y1="0" x2="90%" y2="100%" />
				<line x1="5%" y1="5%" x2="100%" y2="100%" />
				<line x1="0" y1="-10%" x2="100%" y2="90%" />
			</svg>
			<svg class="c-decoration__circles c-decoration__circles--bottom" viewport="0 0 100 100">
				<circle cx="50%" cy="50%" r="45%" fill="none"/>
				<circle cx="50%" cy="50%" r="47%" fill="none"/>
			</svg>
			<svg class="c-decoration__lines c-decoration__lines--bottom" viewport="0 0 100 100">
				<line x1="-10%" y1="0" x2="90%" y2="100%" />
				<line x1="-5%" y1="-5%" x2="95%" y2="95%" />
				<line x1="0" y1="-10%" x2="100%" y2="90%" />
			</svg>
		</div>
		<h1 class="c-header__title o-title">TomH</h1>
		<nav class="c-header__nav">
			<a href="#about" class="o-btn o-btn--fixed-width">
				<div class="o-btn__background"></div>
				<div class="o-btn__hover-background"></div>
				<span class="o-btn__text">about</span>
			</a>
			<a href="#projects" class="o-btn o-btn--fixed-width">
				<div class="o-btn__background"></div>
				<div class="o-btn__hover-background"></div>
				<span class="o-btn__text">projects</span>
			</a>
			<a href="https://github.com/worldofth" target="_blank" class="o-btn o-btn--fixed-width o-btn--right">
				<div class="o-btn__background"></div>
				<div class="o-btn__hover-background"></div>
				<span class="o-btn__text">github</span>
			</a>
			<a href="https://www.linkedin.com/in/tom-hopkins-36283595/" target="_blank" class="o-btn o-btn--fixed-width o-btn--right">
				<div class="o-btn__background"></div>
				<div class="o-btn__hover-background"></div>
				<span class="o-btn__text">linkedin</span>
			</a>
		</nav>
	</header>

	<main>
		<section class="c-about c-section--med c-section--stripe-light c-section--vertical-border" id="about">
			<div class="c-decoration">
				<svg class="c-decoration__circles" viewport="0 0 100 100">
					<circle cx="50%" cy="50%" r="45%" fill="none"/>
					<circle cx="50%" cy="50%" r="47%" fill="none"/>
				</svg>
				<svg class="c-decoration__lines" viewport="0 0 100 100">
					<line x1="-10%" y1="0" x2="90%" y2="100%" />
					<line x1="5%" y1="5%" x2="100%" y2="100%" />
					<line x1="0" y1="-10%" x2="100%" y2="90%" />
				</svg>
				<svg class="c-decoration__circles c-decoration__circles--bottom" viewport="0 0 100 100">
					<circle cx="50%" cy="50%" r="45%" fill="none"/>
					<circle cx="50%" cy="50%" r="47%" fill="none"/>
				</svg>
				<svg class="c-decoration__lines c-decoration__lines--bottom" viewport="0 0 100 100">
					<line x1="-10%" y1="0" x2="90%" y2="100%" />
					<line x1="-5%" y1="-5%" x2="95%" y2="95%" />
					<line x1="0" y1="-10%" x2="100%" y2="90%" />
				</svg>
			</div>
			<h1 class="c-about__title o-title o-title--vertical">About</h1>
			<div class="c-about__content">
				<p>Highly skilled, conscientious and precise, quality focused Web Developer with high quality front end web development skills. BSc in Computer Science and 3 years’ commercial experience. Particularly skilled at working with clients to develop digital marketing strategies through web technologies and creating the best solution for them to build, analyse and push forward their business. Using appropriate development technologies and strategies for example open CMSs (Concrete5 or Wordpress), bespoke html, CSS and JavaScript to create responsive, performant SEO friendly websites to promote high rankings in search engine results pages.</p>
			</div>
		</section>

		<section class="c-projects c-section--grid c-section--border" id="projects">
			<h1 class="c-projects__title o-title o-title--small">projects</h1>
			<div class="l-project-grid">
				<div class="c-media-item">
					<header class="c-media-item__head">
						<div class="c-media-item__title">Tom Hopkins Website</div>
					</header>
					<main class="c-media-item__body">
						<div class="c-media-item__image-wrap">
							<div class="c-media-item__image">
								<img src="resources/images/tomhopkinswebsite.png" alt="Tom Hopkins Website">
							</div>
						</div>
						<div class="c-media-item__content">
							<div class="c-media-item__description">
								This website&#39;s design is based designs from animation from my Project 2 - Animation project, Nier: Automata UI, Elementalist Lux skin introduction. It allow me to play around with many techniques I rarely use like background textures, rotated text and decoration to draw the eye.
							</div>
							<div class="c-media-item__links">
								<a href="https://github.com/worldofth/tomhopkinscouk" target="_blank" class="o-btn ">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Github Project</span>
								</a>
							</div>
						</div>
					</main>
				</div>

				<div class="c-media-item">
					<header class="c-media-item__head">
						<div class="c-media-item__title">Project 2 - Animation</div>
					</header>
					<main class="c-media-item__body">
						<div class="c-media-item__image-wrap">
							<div class="c-media-item__image">
								<img src="resources/images/project-2.png" alt="Project 2 - Animation">
							</div>
						</div>
						<div class="c-media-item__content">
							<div class="c-media-item__description">
								A look into complex animation using just css and playing around with the basic tooling available from chrome dev tools to create the animation.
							</div>
							<div class="c-media-item__links">
								<a href="https://github.com/worldofth/daily-projects/tree/master/project-2" target="_blank" class="o-btn ">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Github Project</span>
								</a>
								<a href="/project-2.html" target="_blank" class="o-btn o-btn--right">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Demo</span>
								</a>
							</div>
						</div>
					</main>
				</div>

				<div class="c-media-item">
					<header class="c-media-item__head">
						<div class="c-media-item__title">Project 3 - Wireframe Layout</div>
					</header>
					<main class="c-media-item__body">
						<div class="c-media-item__image-wrap">
							<div class="c-media-item__image">
								<img src="resources/images/project-3.png" alt="Project 3 - Wireframe Layout">
							</div>
						</div>
						<div class="c-media-item__content">
							<div class="c-media-item__description">
								Playing around with the concepts of ITCSS, BEMIT and looking at the new layout techniques available from using both flexbox and grid. The design is based off a wireframe found on dribble.
							</div>
							<div class="c-media-item__links">
								<a href="https://github.com/worldofth/daily-projects/tree/master/project-3" target="_blank" class="o-btn ">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Github Project</span>
								</a>
								<a href="/project-3.html" target="_blank" class="o-btn o-btn--right">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Demo</span>
								</a>
							</div>
						</div>
					</main>
				</div>

				<div class="c-media-item">
					<header class="c-media-item__head">
						<div class="c-media-item__title">Project 4 - Functional JS</div>
					</header>
					<main class="c-media-item__body">
						<div class="c-media-item__image-wrap">
							<div class="c-media-item__image">
								<img src="resources/images/project-4.png" alt="Project 4 - Functional JS">
							</div>
						</div>
						<div class="c-media-item__content">
							<div class="c-media-item__description">
								Playing around with functional programming using functors, using the latest version of folktale, ramda and bacon js. I created a simple youtube video search app.
							</div>
							<div class="c-media-item__links">
								<a href="https://github.com/worldofth/daily-projects/tree/master/project-4" target="_blank" class="o-btn ">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Github Project</span>
								</a>
								<a href="/project-4.html" target="_blank" class="o-btn o-btn--right">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Demo</span>
								</a>
							</div>
						</div>
					</main>
				</div>

				<div class="c-media-item">
					<header class="c-media-item__head">
						<div class="c-media-item__title">Servon Design</div>
					</header>
					<main class="c-media-item__body">
						<div class="c-media-item__image-wrap">
							<div class="c-media-item__image">
								<img src="resources/images/servondesign.png" alt="Servon Design">
							</div>
						</div>
						<div class="c-media-item__content">
							<div class="c-media-item__description">
								Servon Designs latest website, I focussed on creating a performant bespoke website with the flexibility to do what we want. All css and js is hand written with some small libaries like jumpjs used as a base for parts of the functionality.
							</div>
							<div class="c-media-item__links">
								<a href="https://www.servondesign.co.uk/" target="_blank" class="o-btn ">
									<div class="o-btn__background"></div>
									<div class="o-btn__hover-background"></div>
									<span class="o-btn__text">Website</span>
								</a>
							</div>
						</div>
					</main>
				</div>
			</div>
		</section>
	</main>

	<footer class="c-links c-section--dark c-section--left-stripe-light" id="links">
		<h1 class="c-links__title o-title o-title--small o-title--vertical o-title--light">Links</h1>
		<nav class="c-links__list">
			<ul>
				<li>
					<a href="https://github.com/worldofth" target="_blank">Github</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/tom-hopkins-36283595/" target="_blank">LinkedIn</a>
				</li>
				<li>
					<a href="email:tom@tom-hopkins.co.uk">tom@tom-hopkins.co.uk</a>
				</li>
			</ul>
		</nav>
	</footer>
</body>
</html>
