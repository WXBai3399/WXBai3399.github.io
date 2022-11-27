<?php
$link = @mysqli_connect(
    localhost, // 主机名或IP
    root, // 用户名
    root, // 密码
    projectms  // 数据库名
);
if ($link) {
    echo "连接成功";
} else {
    $err = mysqli_connect_errno();
    $err = iconv('GBK', 'UTF-8', $err);
    exit('连接失败');
};
mysqli_set_charset($link, 'utf8');
?>