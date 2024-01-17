<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 데이터베이스 연결 및 입력값 가져오기
    $uid = $_POST["uid"];
    $umail = $_POST["umail"];
    $pwd1 = $_POST["pwd1"];
    $pwd2 = $_POST["pwd2"];
    $mailing = $_POST["mailing"];

    // 여기에서 데이터베이스에 저장하는 로직을 작성합니다.
    // 예: MySQL 사용 시, INSERT 쿼리를 사용하여 데이터베이스에 저장합니다.

    // 이후 사용자에게 알맞은 화면을 보여주거나 리다이렉트할 수 있습니다.
}
?>