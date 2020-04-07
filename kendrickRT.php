<html>
<body>
<link rel="stylesheet" href="style.css">
<div class="sidebar">
	<a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a>
	<a href="about.php"><i class="fa fa-fw fa-home"></i>About Us</a>
	<a href="contact.php"><i class="fa fa-fw fa-home"></i>Contact Us</a>
	<a href="rottenteachers.php"><i class="fa fa-fw fa-home"></i>Rotten Teachers</a>
</div>
<div class="main">
	<h1> Rotten Teachers: </h1>
	<h3> Kendrick School </h3>
	<div class="row">
        <form action="." method="POST">
            <input type="text" name="teacher" placeholder="Which teacher are you writing about?" class="form-control" rows="1" required minlength="6" maxlength="20" width=100px></textarea><br>
            <input type="text" name="content" placeholder="Write whatever the fuck you want about them here..." class="form-control" rows="3" required minlength="6" maxlength="180"></textarea><br>
            <input type="submit" class="btn btn-success" value="Post anonymous review">
        </form>
    </div>
	<?php
	?>

<h4>Latest Comments:</h4>
{% for comment in comments %}
	<div class="row">
		{{ comment.content }}
		<br>
		<small font-size="x-small"> - {{ comment.teacher }}</small>
	</div>
<br>
</div>
</div>
</body>
