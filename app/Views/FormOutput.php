<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>
        <h2>Thank You <?php echo $_GET['firstname']; ?> </h2>

        <p>You have been registered as
            <?php echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
        </p>
        <p>Go <a href="<?= url_to('FormController::index') ?>">back</a> to the form</p>

</body> 
</html>