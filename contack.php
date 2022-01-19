<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	
	<title>My Web</title>
</head>
<body>

	<header>
		<a href="#" class="logo">Moon</a>

		<ul>
			<li>
				<a href="fe.php" class="active">Home</a>
			</li>
			<li>
				<a href="fe-work.php">Work</a>
			</li>
			<li>
				<a href="login.php">Admin</a>
			</li>
			<li>
				<a href="#">Contack</a>
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

		<!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Addres</h3>
            <p>Kalijaga, Aikmel, Kabupaten Lombok Timur, Nusa Tenggara Bar. 83653</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              
              
              <a href="https://www.instagram.com/amdspyna_/?hl=en" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p>Whitemustang672@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>085-955-262-346</p>
          </div>
        </div>
      </div>

      <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form> -->

    </div>
  </section>
  <!-- End Contact Section -->
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