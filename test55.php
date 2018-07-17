<?php
$yourname= check_input($_POST['yourname'], "Enter your name");
$email= check_input($_POST['email']);
$likeit= check_input($_POST['likeit']);
$comments= check_input($_POST['comments'], "Write your comments");
?>
<html>
<body>
Your name is: <?php echo $yourname; ?><br />
Your e-mail: <?php echo $email; ?><br />
<br />
Do you like this website? <?php echo $likeit; ?><br />
<br />
Comments:<br />
<?php echo $comments; ?>
</body>
</html>

<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        die($problem);
    }
    return $data;
}
?>
