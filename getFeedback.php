<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Good Music Website Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<div>
			<div>
				<ul>
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
				</ul>
				<a href="index.html" id="logo"><img src="images/logo.png" alt="Image"></a>
				<ul>
					<li>
						<a href="blog.html">Blog</a>
					</li>
					<li class="current">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div>
			<ul>
				<li>
					<a href="index.html"><span>Featured</span></a>
				</li>
				<li>
					<a href="topseller.html"><span>Top Seller</span></a>
				</li>
				<li>
					<a href="newrelease.html"><span>New Releases</span></a>
				</li>
			</ul>
		</div>
	</div>
    <div id="body">

        <?php
	    $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];
	
	    echo(.$firstname. '<p> </p>' .$firstname.'<p>, we greatly appreciate your kind words.</p>');
	
        ?>
    </div>
	<div id="footer">
		<div>
			<div>
				<a href="https://twitter.com/" target="_blank" id="twitter">Twitter</a>
				<a href="http://facebook.com/" target="_blank" id="facebook">Facebook</a>
				<a href="http://googleplus.com/" target="_blank" id="googleplus">Google&#43;</a>
			</div>
			<p>
				&copy; Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
</body>
</html>