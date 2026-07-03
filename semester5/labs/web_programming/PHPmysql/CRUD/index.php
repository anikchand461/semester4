<?php

session_start();

require "config.php";


// LOGOUT
if (isset($_GET["logout"]) && $_GET["logout"] === "true") {

    if (isset($_SESSION["user_id"])) {

        $user_id = $_SESSION["user_id"];

        $sql = "UPDATE users
                SET last_seen = NULL
                WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
    }

    session_unset();
    session_destroy();

    header("Location: index.php");
    exit();
}


$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = $_POST["password"];

    $sql = "SELECT id, username, password
            FROM users
            WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];

            header("Location: dashboard.php");
            exit();

        } else {

            $error = "Wrong password";

        }

    } else {

        $error = "User not found";

    }
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

    <title>Login</title>

    <link rel="stylesheet" href="style.css?v=20">

</head>


<body class="auth-body">


    <main class="auth-page">


        <div class="auth-card">


            <!-- LOGO -->

            <div class="auth-brand">
                <div class="auth-brand-icon">A</div>
                <div class="auth-brand-name">AnyoneHere</div>
            </div>


            <!-- TITLE -->

            <div class="auth-heading">

                <h1>Welcome back</h1>

                <p>
                    Sign in to continue to Messages
                </p>

            </div>



            <!-- ERROR -->

            <?php if ($error !== "") { ?>

                <div class="auth-error">

                    <?php
                    echo htmlspecialchars($error);
                    ?>

                </div>

            <?php } ?>



            <!-- FORM -->

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
                        placeholder="Enter your username"
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
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        required
                    >

                </div>



                <button
                    type="submit"
                    class="auth-button"
                >
                    Sign in
                </button>


            </form>



            <!-- REGISTER -->

            <div class="auth-footer">

                <span>
                    Don't have an account?
                </span>

                <a href="register.php">
                    Create account
                </a>

            </div>


        </div>


    </main>


</body>

</html>