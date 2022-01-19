<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>My Web</title>
</head>
<body>

	<header>
		<a href="#" class="logo">Moon</a>

		<ul>
			<li>
				<a href="#" class="active">Home</a>
			</li>
			<li>
				<a href="fe-work.php">Work</a>
			</li>
			<li>
				<a href="login.php">Admin</a>
			</li>
			<li>
				<a href="contack.php">Contack</a>
			</li>
		</ul>
	</header>

	<section>
		<img src="images/stars.png" id="stars">
		<img src="images/moon.png" id="moon">
		<img src="images/mountains_behind.png" id="mountains_behind">
		<h2 id="text">Welcome</h2>
		<a href="#sec" id="btn">Explore</a>
		<img src="images/mountains_front.png" id="mountains_front">
	</section>

	<div class="sec" id="sec">
		<h2>parralax Scroling Effect</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et temporibus fugiat saepe, reprehenderit? Deleniti, vero, veritatis. Molestias, quasi, ad! Tenetur ex libero quod, corrupti, porro accusantium illo suscipit debitis maiores?. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate commodi obcaecati dignissimos, quidem asperiores laborum enim nostrum maiores minima quo ab vero reiciendis odit, debitis inventore, nisi blanditiis nesciunt rerum.

			<br><br>

			Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae debitis minima quaerat. Libero quasi, sunt possimus? Adipisci sint alias ipsum possimus molestias saepe, itaque repudiandae officiis! Voluptatum, necessitatibus nobis. Lorem ipsum, dolor, sit amet consectetur adipisicing elit. Neque numquam nisi laborum aut inventore excepturi totam cum corrupti sunt, iusto quae voluptatem impedit ut illo quam iure. Iure, praesentium dicta?

			<br><br>

			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius, repellat debitis corporis molestias ipsa porro dolore officiis? Velit reiciendis ab voluptatem voluptate totam, id reprehenderit minus dolor necessitatibus. Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Laboriosam inventore, dolores ratione asperiores dignissimos voluptatem dolorem voluptas accusamus expedita, eveniet minima placeat ad illo, a, sit magni explicabo. Deserunt, officia?

			<br><br>

			Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quia eius, repellat debitis corporis molestias ipsa porro dolore officiis? Velit reiciendis ab voluptatem voluptate totam, id reprehenderit minus dolor necessitatibus. Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Laboriosam inventore, dolores ratione asperiores dignissimos voluptatem dolorem voluptas accusamus expedita, eveniet minima placeat ad illo, a, sit magni explicabo. Deserunt, officia?
		</p>
	</div>

	<script>
		let stars = document.getElementById('stars');
		let moon = document.getElementById('moon');
		let mountains_behind = document.getElementById('mountains_behind');
		let text = document.getElementById('text');
		let btn = document.getElementById('btn');
		let mountains_front = document.getElementById('mountains_front');
		let header = document.querySelector('header');

		window.addEventListener('scroll', function() {
			let value = window.scrollY;
			stars.style.left = value * 0.25 + 'px';
			moon.style.top = value * 1.05 + 'px';
			mountains_behind.style.top = value * 0.5 + 'px';
			mountains_front.style.top = value * 0 + 'px';
			text.style.marginRight = value * 4 + 'px';
			text.style.marginTop = value * 1.3 + 'px';
			btn.style.marginTop = value * 1.3 + 'px';
			header.style.top = value * 0.5 + 'px';
		})
	</script>
	
</body>
</html>