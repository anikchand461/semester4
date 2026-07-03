<?php

require "config.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashed_password = password_hash(
        $password,
        PASSWORD_DEFAULT
    );

    $sql = "INSERT INTO users (username, password)
            VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ss",
        $username,
        $hashed_password
    );

    $stmt->execute();

    $message = "User registered successfully";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Register</title>

    <link rel="stylesheet" href="style.css?v=22">

</head>


<body class="auth-body">


    <main class="auth-page">


        <div class="auth-card">


            <div class="auth-brand">
                <div class="auth-brand-icon">A</div>
                <div class="auth-brand-name">AnyoneHere</div>
            </div>


            <div class="auth-heading">

                <h1>Create account</h1>

                <p>
                    Join Messages and start chatting
                </p>

            </div>


            <?php if ($message !== "") { ?>

                <div class="auth-success">

                    <?php
                    echo htmlspecialchars($message);
                    ?>

                </div>

            <?php } ?>


            <form
                method="POST"
                class="auth-form"
            >


                <div class="auth-field">

                    <label for="username">
                        Username
                    </label>

                    <input
                        id="username"
                        type="text"
                        name="username"
                        placeholder="Choose a username"
                        autocomplete="username"
                        required
                    >

                </div>


                <div class="auth-field">

                    <label for="password">
                        Password
                    </label>

                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Create a password"
                        autocomplete="new-password"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="auth-button"
                >
                    Create account
                </button>


            </form>


            <div class="auth-footer">

                <span>
                    Already have an account?
                </span>

                <a href="index.php">
                    Sign in
                </a>

            </div>


        </div>


    </main>


</body>

</html>