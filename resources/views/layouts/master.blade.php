<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/animations.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
    <header class="header">
        <div id="menu-toggle">Menu <span style="font-size: 12px;">&#9660;</span></div>
        <div class="spacer"></div>
    </header>
    <div style="width: 100%; height: 40px;"></div>

    <div id="wrapper">
    <div id="hidden-menu" class="main-nav transition">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">My Work</a></li>
          <li><a href="#">Contact</a></li>
        </ul>

        <div style="color: #fff; font-size: 14px; margin-top: 10px;">
        Filtering Options:<br />
        <input type="text" style="margin-top: 4px; border: 1px solid white; border-radius: 6px; width: 70%;" placeholder="Search.." /><br />

        <div style="width: 100%; padding-left: 36%; margin: 0 auto; text-align: left; margin-top: 10px;">
        <input type="checkbox"  /> Personal<br />
        <input type="checkbox"  /> Tutorials<br />
        <input type="checkbox"  /> Announcements<br />
        </div>
        <br />
        </div>
    </div>
    </div>

    <div class="filter">
    </div>
    <div class="main-content">
    	@yield('content')
    </div>

    <script src="/js/menu.js"></script>
</body>
</html>