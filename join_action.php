<?php
$connect = mysqli_connect("localhost:3306","root","1234","hw") or die("fail");
$id=$_GET['id'];
$pw=$_GET['pw'];
$name=$_GET['name'];
$phone=$_GET['phone'];

// Insert a record
$query = "INSERT INTO users (id, pw, name, phone) values ('$id', '$pw', '$name', '$phone')";

$result = $connect->query($query);

if($result){?>
<script>
    alert('가입 되었습니다.');
    location.replace("login.php");
</script>
<?php   }
else{
    ?>              <script>

        alert("fail");
    </script>
<?php   }

mysqli_close($connect);
?>


