<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>SideBar Menu</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/ckeditor/ckeditor.js"></script>

	<!-- Note: the CSS file is in "public/css/style.css" -->
		@yield('title', 'Project 3')
    @stack('head')

<body>

	<div id="sidebar">
    <ul>
      <li><a href="#"><b>NAVIGATION</b></a></li>
      <li><a href="/">Home</a></li>
      <li><a href="add">Add a Person</a></li>
      <li><a href="#">How This Works</a></li>
      <li><a href="#">Contact Us</a></li>
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
			<h1>Contract Compiler</h1>
		@yield('content')

	</div>



	</section>
	<footer>
	</footer>
    @stack('body')

</body>
</html>
