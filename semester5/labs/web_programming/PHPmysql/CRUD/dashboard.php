<?php

session_start();

require "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}


// Current logged-in user
$current_user_id = $_SESSION["user_id"];


// Get active users
$sql = "SELECT id, username
        FROM users
        WHERE last_seen >= NOW() - INTERVAL 10 SECOND
        AND id != ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param(
    "i",
    $current_user_id
);

$stmt->execute();

$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Messages</title>

    <link rel="stylesheet" href="style.css">

</head>


<body class="dashboard-body">

    <div class="dashboard-page">


        <!-- HEADER -->

        <header class="dashboard-header">

            <div class="dashboard-heading">

                <h1>Messages</h1>

                <p>
                    Welcome back,
                    <strong>
                        <?php
                        echo htmlspecialchars(
                            $_SESSION["username"]
                        );
                        ?>
                    </strong>
                </p>

            </div>


            <a
                href="index.php?logout=true"
                class="logout-button"
            >
                Logout
            </a>

        </header>



        <!-- MAIN CONTENT -->

        <main class="dashboard-content">


            <div class="users-title">

                <h2>Active now</h2>

                <span class="active-count">

                    <?php
                    echo $result->num_rows;
                    ?>

                    online

                </span>

            </div>



            <!-- USERS -->

            <div class="users-list">

                <?php if ($result->num_rows > 0) { ?>


                    <?php while ($user = $result->fetch_assoc()) { ?>


                        <a
                            href="chat.php?user_id=<?php echo $user["id"]; ?>"
                            class="user-card"
                        >


                            <!-- AVATAR -->

                            <div class="user-avatar">

                                <?php

                                echo strtoupper(
                                    substr(
                                        $user["username"],
                                        0,
                                        1
                                    )
                                );

                                ?>

                                <span class="online-dot"></span>

                            </div>



                            <!-- USER DETAILS -->

                            <div class="user-details">

                                <strong>

                                    <?php

                                    echo htmlspecialchars(
                                        $user["username"]
                                    );

                                    ?>

                                </strong>


                                <span>
                                    Online now
                                </span>

                            </div>



                            <!-- ARROW -->

                            <div class="user-arrow">
                                ›
                            </div>


                        </a>


                    <?php } ?>


                <?php } else { ?>


                    <div class="no-users">

                        <div class="no-users-icon">
                            ◌
                        </div>

                        <h3>No one is online</h3>

                        <p>
                            Active users will appear here.
                        </p>

                    </div>


                <?php } ?>

            </div>


        </main>


    </div>


    <script src="script.js?v=12"></script>

</body>

</html>