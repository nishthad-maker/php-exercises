<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Embedding</title>
<meta name="description" content="Embedding">
<meta name="author" content="Nishtha Dubey">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:..." rel="stylesheet">

<style>
body{
    margin:0;
    font-family: Arial;
    background:url("https://png.pngtree.com/thumb_back/fh260/background/20240919/pngtree-a-background-of-orange-blue-and-yellow-gradients-with-gritty-appearance-image_16233934.jpg");
    background-size:cover;
    background-attachment:fixed;
    text-align:center;
}
</style>
</head>
<body>
	<h1>Embedding YouTube Videos</h1>
	<iframe width="376" height="669" src="https://www.youtube.com/embed/ReQdX04S00w" title="Is Computer Science Right for You?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	<h2>Embedding Google Maps</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380511.58481647534!2d-88.06152458188959!3d41.83375099061588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sca!4v1771608563568!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/marking-rubric/turn-work-in.inc.php"; ?>

</body>
</html>



