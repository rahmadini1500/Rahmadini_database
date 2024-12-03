<?php
session_start();

// Hardcode valid credentials
$valid_user = "dini";
$valid_pass = "123";

// Inisialisasi variabel error
$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? ""; // Gunakan null coalescing untuk mencegah undefined variable
    $password = $_POST['password'] ?? "";

    // Validasi username dan password
    if ($username === $valid_user && $password === $valid_pass) {
        $_SESSION['username'] = $username; // Simpan sesi
        header("Location: dashboard.php"); // Redirect ke halaman dashboard
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Bendi Car</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eb6f6f; /* Krem */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #cc0368;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }
        h1 {
            color: #4682B4; /* Biru gelap */
            margin-bottom: 20px;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
        }
        label {
            font-size: 16px;
            color: #003366; 
            flex: 1;
            text-align: left;
        }
        input[type="text"], input[type="password"] {
            flex: 2;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color:  #eb6f6f;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #FAEBD7;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login PT Bendi Car</h1>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>



