<?php
require_once __DIR__ . '/../app/config.php';
require_once __DIR__ . '/../app/db.php';

session_start();

if (!empty($_SESSION['admin_user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    $stmt = db()->prepare("
        SELECT
            id,
            name,
            email,
            password_hash,
            role
        FROM admin_users
        WHERE email = ?
        AND is_active = 1
        LIMIT 1
    ");

    $stmt->bind_param("s", $email);
    $stmt->execute();

    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password_hash'])) {

        $_SESSION['admin_user_id'] = $user['id'];
        $_SESSION['admin_name'] = $user['name'];
        $_SESSION['admin_role'] = $user['role'];

        header('Location: dashboard.php');
        exit;
    }

    $error = 'Invalid email or password.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Admin Login | Colosse Baptist Church</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../assets/css/admin.css?v=3">
</head>
<body class="admin-login-body">

<div class="admin-login-card">

    <div class="login-brand">
        <img
            src="https://www.colossebaptistchurch.com/uploads/2/4/5/7/24574640/logo-2.jpeg"
            alt="Colosse Baptist Church"
        >

        <div>
            <strong>Colosse Baptist Church</strong>
            <span>Administration Portal</span>
        </div>
    </div>

    <h1>Welcome back.</h1>

    <p>
        Sign in to manage sermons, ministries,
        bulletins, forms, and website content.
    </p>

    <?php if ($error): ?>
        <div class="admin-error">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <form method="post">

        <label>Email Address</label>

        <input
            type="email"
            name="email"
            required
            autocomplete="email"
        >

        <label>Password</label>

        <input
            type="password"
            name="password"
            required
            autocomplete="current-password"
        >

        <button type="submit">
            Sign In
        </button>

    </form>

</div>

</body>
</html>