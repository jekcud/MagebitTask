<?php
ob_start();
include 'includes/autoloader.php';
$email = new Email();
$providers = new Providers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The List of E-mail addresses</title>
    <link rel="stylesheet" href="styles/listStyle.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
    </script>
    <script src="scripts/sorttable.js"></script>
    <script src="scripts/searchByKeyWord.js"></script>
</head>
<body>
<form action="list.php" method="get">
    Please enter keyword
    <input type="text" placeholder="Search.." name="inputSearch" id="search">
    <br><br>
    Please select email provider:
    <div id="buttons">
        <ul>
            <?php
            // get list of radio buttons with providers
            $providerList = $providers->getProviders();
            foreach ($providerList as $provider){?>
            <li>
                <label for="<?php echo $provider; ?>">
                    <input id="<?php echo $provider; ?>" type="radio" name="provider" value="<?php echo $provider; ?>">
                    <?php echo $provider;
            }?>
                </label>
            </li>
        </ul>
    </div>
    <br>
    <button type="submit" name="search">Search</button>
    <br><br>
    <?php
    // the table
    include 'table.php';
    //delete rows
    $email->deleteEmail($_GET['delete']);
    if(isset($_GET['delete'])){
    header("Location: list.php");
    }
    ?>
  </form>
</body>
</html>
