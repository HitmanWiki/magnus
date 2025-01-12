<!-- BEGIN Theme Setting -->
<div id="theme-setting">
<a href="#"><i class="fa fa-gears fa fa-2x"></i></a>
<ul>
<li>
<span>Skin</span>
<ul class="colors" data-target="body" data-prefix="skin-">
<li class="active"><a class="blue" href="#"></a></li>
<li><a class="red" href="#"></a></li>
<li><a class="green" href="#"></a></li>
<li><a class="orange" href="#"></a></li>
<li><a class="yellow" href="#"></a></li>
<li><a class="pink" href="#"></a></li>
<li><a class="magenta" href="#"></a></li>
<li><a class="gray" href="#"></a></li>
<li><a class="black" href="#"></a></li>
</ul>
</li>
<li>
<span>Navbar</span>
<ul class="colors" data-target="#navbar" data-prefix="navbar-">
<li class="active"><a class="blue" href="#"></a></li>
<li><a class="red" href="#"></a></li>
<li><a class="green" href="#"></a></li>
<li><a class="orange" href="#"></a></li>
<li><a class="yellow" href="#"></a></li>
<li><a class="pink" href="#"></a></li>
<li><a class="magenta" href="#"></a></li>
<li><a class="gray" href="#"></a></li>
<li><a class="black" href="#"></a></li>
</ul>
</li>
<li>
<span>Sidebar</span>
<ul class="colors" data-target="#main-container" data-prefix="sidebar-">
<li class="active"><a class="blue" href="#"></a></li>
<li><a class="red" href="#"></a></li>
<li><a class="green" href="#"></a></li>
<li><a class="orange" href="#"></a></li>
<li><a class="yellow" href="#"></a></li>
<li><a class="pink" href="#"></a></li>
<li><a class="magenta" href="#"></a></li>
<li><a class="gray" href="#"></a></li>
<li><a class="black" href="#"></a></li>
</ul>
</li>
<li>
<span></span>
<a data-target="navbar" href="#"><i class="fa fa-square-o"></i> Fixed Navbar</a>
<a class="hidden-inline-xs" data-target="sidebar" href="#"><i class="fa fa-square-o"></i> Fixed Sidebar</a>
</li>
</ul>
</div>
<!-- END Theme Setting -->

<!-- BEGIN Navbar -->
<div id="navbar" class="navbar">
<button type="button" class="navbar-toggle navbar-btn collapsed" data-toggle="collapse" data-target="#sidebar">
<span class="fa fa-bars"></span>
</button>
<a class="navbar-brand" href="#">
<small>
Magnus Immigration
</small>
</a>

<!-- BEGIN Navbar Buttons -->
<ul class="nav flaty-nav pull-right">
<!-- BEGIN Button Tasks -->



<!-- BEGIN Button User -->
<li class="user-profile">
<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
<span class="hhh" id="user_info">
<?php echo $_SESSION['python_admin_login']; ?>
</span>
<i class="fa fa-caret-down"></i>
</a>

<!-- BEGIN User Dropdown -->
<ul class="dropdown-menu dropdown-navbar" id="user_menu">
<li class="nav-header">
<i class="fa fa-clock-o"></i>
</li>

<li class="divider visible-xs"></li>

<li class="visible-xs">
<a href="#">
<i class="fa fa-tasks"></i>
Tasks
<span class="badge badge-warning">4</span>
</a>
</li>
<li class="visible-xs">
<a href="#">
<i class="fa fa-bell"></i>
Notifications
<span class="badge badge-important">8</span>
</a>
</li>
<li class="visible-xs">
<a href="#">
<i class="fa fa-envelope"></i>
Messages
<span class="badge badge-success">5</span>
</a>
</li>

<li class="divider"></li>

<li>
<a href="logout.php">
<i class="fa fa-off"></i>
Logout
</a>
</li>
</ul>
<!-- BEGIN User Dropdown -->
</li>
<!-- END Button User -->
</ul>
<!-- END Navbar Buttons -->
</div>
<!-- END Navbar -->

<!-- BEGIN Container -->
<div class="container" id="main-container">
<!-- BEGIN Sidebar -->
<div id="sidebar" class="navbar-collapse collapse">
<!-- BEGIN Navlist -->
<ul class="nav nav-list">
<!-- BEGIN Search Form -->
<!-- END Search Form -->
<li class="active">
<a href="index.php">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
</a>
</li>


<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>Blog</span>
<b class="arrow fa fa-angle-right"></b>
</a>
<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="index.php?id=add_category">Add Blog Category</a></li>
<!--<li><a href="index.php?id=add_tags">Add Blog Tags</a></li>
-->
<li><a href="index.php?id=add_blog">Add Blog</a></li>
<li><a href="index.php?id=view_blog">View Blog</a></li>
</ul>
<!-- END Submenu -->
</li>




<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>Slider Images</span>
<b class="arrow fa fa-angle-right"></b>
</a>
<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="index.php?id=add_slider">Add Slider</a></li>
<li><a href="index.php?id=view_slider">View Slider</a></li>
</ul>
<!-- END Submenu -->
</li>



<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>Immigration Details</span>
<b class="arrow fa fa-angle-right"></b>
</a>
<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="index.php?id=add_country">Add Country</a></li>
<li><a href="index.php?id=add_immigrationdata">Add Country Data</a></li>
<li><a href="index.php?id=view_immigrationdata">View Data</a></li>
</ul>
<!-- END Submenu -->
</li>




<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>Add Services</span>
<b class="arrow fa fa-angle-right"></b>
</a>
<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="index.php?id=add_service">Add Service</a></li>
</ul>
<!-- END Submenu -->
</li>






<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>More Options</span>
<b class="arrow fa fa-angle-right"></b>
</a>
<!-- BEGIN Submenu -->
<ul class="submenu">
<li><a href="index.php?id=add_company_infor">Company Information</a></li>
<li><a href="index.php?id=add_testimonials">Add testimonials</a></li>
<li><a href="index.php?id=add_stories">Success Stories</a></li>

</ul>
<!-- END Submenu -->
</li>


</ul>
<!-- END Navlist -->