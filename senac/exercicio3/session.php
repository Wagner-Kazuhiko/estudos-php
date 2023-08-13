<?php
session_start();

if (!array_key_exists('ultimo_login', $_SESSION)) {
    $_SESSION['ultimo_login'] = date('H:i:s d/m/Y');
}

if (!array_key_exists('reqs', $_SESSION)) {
    $_SESSION['reqs'] = 1;
} else {
    $_SESSION['reqs']++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sessão PHP</title>
</head>
<body>
    <h1>
        A sua sessão foi iniciada em <?php echo $_SESSION['ultimo_login']; ?> e você já fez <?php echo $_SESSION['reqs']; ?> requisições.
    </h1>
</body>
</html>
