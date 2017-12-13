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
    <div id="sidebar-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#sidebar-btn').click(function(){
        $('#sidebar').toggleClass('visible');
				$('#main').toggleClass('visible');
      });
    });
  </script>

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
