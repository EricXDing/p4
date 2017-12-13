<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>Personal Network Manager</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/ckeditor/ckeditor.js"></script>

	<!-- Note: the CSS file is in "public/css/style.css" -->
		@yield('title', 'Project 4')
    @stack('head')

<body>
	<div id="sidebar">
    <ul>
			<li><a href="read">PLEASE READ</a></li>
			<li><a href="/">Send Message</a></li>
      <li><a href="add">Add People</a></li>
    </ul>
  </div>

	<section>
		<div id = 'main'>
			<h1>Personal Network Manager</h1>
			<div id = 'body'>
			@yield('content')
			</div>
		</div>
	</section>
		<footer>
		</footer>
	    @stack('body')
</body>
</html>
