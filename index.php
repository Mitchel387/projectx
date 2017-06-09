<?php include("assets/php/includes.php"); ?>
<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <?php $smarty->display('view/head.tpl'); ?>
    <title>Krantenwijk</title>
</head>
<body>
<div class="container">
    <?php $smarty->display('view/nav.tpl')  // navbar ?>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $smarty->display('view/settings.tpl');  //settings fieldset
        if (isset($_POST['submit'])) {
            inputWeken();   //weken input
            $smarty->display('view/resultTable.tpl');   //table met som
            $smarty->display('view/naarDatabase.tpl');  //database fieldset
        }
        ?>
    </form>
</div>
<script src="assets/js/functions.js" type="text/javascript"></script>
<script src="assets/js/after.js" type="text/javascript"></script>

<?php
if (isset($_POST['send2db'])) {
    if (isset($_POST['total'])) {
        if ($_POST['total'] > 0) {
            insert(); //  * feature: parameters for insert function
        } else {
            noInput();
        }
    }
}
?>

</body>
</html>

