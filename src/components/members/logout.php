<?php
    session_start();

    // 세션 삭제 : unset(세션변수);
    unset($_SESSION["idx"]);
    unset($_SESSION["uid"]);
    unset($_SESSION["uname"]);

    echo "
        <script type='text/javascript'>
            alert('로그아웃 되었습니다_logout ok.');
            location.href='../../views/jinjusung_main.php';
        </script>
    ";
?>
