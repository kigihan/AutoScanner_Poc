<?
$a = htmlentities($_GET['a']);
$b = $_GET['b'];
$c = $_GET['c'];
$d = htmlentities($b);

echo ($a); // safe
echo (htmlentities($b)); // safe
echo ($c); // XSS vulnerability
echo ($d); // safe
echo (htmlentities($_GET['id']); // safe
?>

<?
echo($_GET['name']); // XSS 1
echo($_POST['name']); // XSS 2
echo($_REQUEST['name']); // XSS 3
?>
