<?php
session_start();
include_once '../../../src/middleware/auth.php';

$auth = new Auth();
$authResponse = $auth->handleRestrictedAccess(1);

if (isset($authResponse['redirect'])) {
    header("Location: " . $authResponse['redirect']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once '../../pages/admin/sidebar/sidebar.php'; ?>
    <h3>This is for admin only</h3>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="../../lib/js/my.js"></script>
</html>