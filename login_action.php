<?php
session_start();

$connect = mysqli_connect("localhost:3306","root","1234","hw") or die("fail");
$id=$_GET['id'];
$pw=$_GET['pw'];

$query = "select * from users where id='$id'";
$result = $connect->query($query)or die(mysqli_error($connect));

//아이디가 있다면 비밀번호 검사
if(mysqli_num_rows($result)==1) {

    $row=mysqli_fetch_assoc($result);

    //비밀번호가 맞다면 세션 생성
    if($row['pw']==$pw){
        $_SESSION['id']=$id;

        if(isset($_SESSION['id'])){
echo"
            <script>
                alert('로그인 되었습니다.');
                location.replace('Funny.php');
            </script>
";
        }
        else{
            echo "session fail";
        }
    }

    else {
        echo"
        <script>
            alert('아이디 혹은 비밀번호가 잘못임.');
            history.back();
        </script>";

    }

}

else{        echo"
        <script>
            alert('아이디 혹은 비밀번호가 잘못.');
            history.back();
        </script>";
}
?>

