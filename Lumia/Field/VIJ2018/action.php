<html>
<body>
<?php
if($_POST['uname']==="sasya" && $_POST['psw']==="@mrslab" ){
        $homepage = file_get_contents('Data/index.php');
        echo $homepage;}
else
{ 
echo 'Access Denied.';
echo 'For password contact: dipankar.agrilengg@gmail.com.';
}
?>
</body>
</html>
