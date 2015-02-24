<!DOCTYPE html>

<head>
	<title>SProfile Page</title>
</head>  

<style>
/* Default color for links inside the tabbed box */ 
.ui-widget-content a, .ui-widget-content a:hover, .ui-widget-content a:visited, .ui-widget-content a:active {
color: #2954d1 !important; 
text-decoration: underline !important; 
}

/* Default styling for selected tab titles */ 
.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited {
color: #212121 !important;
text-decoration: none !important;
cursor: text !important;
}

/* Default styling for unselected tab titles */ 
.ui-state-default a:hover, .ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited {
color: #555555 !important;
text-decoration: none !important;
cursor: text !important;
}
</style>
<!-- jQuery -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
jQuery(function() {
jQuery( "#tabs" ).tabs();
});
</script>

<div id="tabs">
<ul>
<!--This section introduces the tabs and titles them-->
<li><a href="index.php?">IndexPage Tab</a></li>
<li><a href="welcome.php">WelcomePage Tab</a></li>
<li><a href="profilePage.php?">ProfilePage Tab</a></li>
</ul>

<!--This section creates the content within each tab-->
<div id="tabs-1">
Insert content for first tab here.
<a href="index.php?">indexPage</a>
</div>
<div id="tabs-2">
Insert content for second tab here.
<a href="welcome.php?">welcomePage</a>
</div>
<div id="tabs-3">
Insert content for third tab here.
<a href="profilePage.php?">profilePage</a>
</div>

</div>


    <body>
        You are now on the Profile Page <br>
        your name and password should have been Posted to this page <br>  <br>
        your name is  <?php echo  $_SESSION['name'] ;?> <br> 
        your password is  <?php echo  $_SESSION['password'] ;?> <br> 
        
        <?php
        echo  $_SESSION['name'] ;
        echo  $_SESSION['password'] ; ?> <br>
        
    </body>

</html>