<html>
<head>
	<title>Simple Search Engine</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
        <h2>Search Results For <?php echo $_GET['search_term']; ?> </h2>
        <?php if ($_GET['search_term'] == "JONAS"): ?>
            <p>1 entry found, congrats</p>
            <p>Go <a href="<?= url_to('SearchController::index') ?>">back</a> to the form</p>
        <?php else: ?>
            	 <p>Sorry, no matches found for your search term</p>
                 <p>Go <a href="<?= url_to('SearchController::index') ?>">back</a> to the form</p>
        <?php endif; ?>
       
</body>
</html>