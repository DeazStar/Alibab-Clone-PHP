<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/signin.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
</head>

<body>
    <form action="../src/controller/logincontroller.php" method ="POST">
    <div id="logo">
        <a href="./index.html"><img src="https://s.alicdn.com/@img/tfs/TB1pDDmmF67gK0jSZPfXXahhFXa-2814-380.png"
                alt=""></a>
    </div>

    <div id="screen-banner">
        <div id="signinform">
            <label for="">Account:</label>
            <input type="email" name="email" placeholder="Email address or member ID" id="signin-mail" required>

            <div>
                <label for="">Password:</label>
                <a href="">Forgot Password?</a>
            </div>

            <input type="password" name="password" placeholder="Password" id="signin-password" required>

            <span>
                <input type="checkbox">
                <label for="">Stay signed in</label>
            </span>
            <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                }
            ?>
            <button type="submit" >Sign in</button>
            <div>
                <a href="">Mobile number sign in</a>
                <a href="./signup.php">Join Free</a>
            </div>

            <hr>

            <div id="login-link">
                <p>Sign in with:</p>
                <a href="">
                    <img src="
                    " alt="">
                </a>
                <a href="">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAyNCIgaGVpZ2h0PSIxMDI0IiB2aWV3Qm94PSIwIDAgMTAyNCAxMDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj48dGl0bGU+Z29vZ2xlPC90aXRsZT48ZGVmcz48cGF0aCBkPSJNLjM5OCAyMTMuMDg4QzU3LjUwOCA4Ny4zMzIgMTg0LjA3OCAwIDMzMS4yMyAwYzk4LjA1IDAgMTgwLjA1IDM1LjgwNSAyNDMuMzQyIDk1LjE0NmwtOTguNjE3IDk0Ljk4N2MtMjYuOTQ3LTI1Ljk5LTc0LjIxMi01Ni4wOTItMTQ0LjcyNC01Ni4wOTItMTAyLjYzNSAwLTE4OS42MTUgNzAuNDA3LTIxNi41NTggMTY2LjQ3NUwuMzk4IDIxMy4wODh6IiBpZD0iYSIvPjwvZGVmcz48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGZpbGw9IiNGN0Y4RkEiIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiIHJ4PSI3OCIvPjxwYXRoIGQ9Ik01MzEuMjMgNDYwLjU0MlY1ODUuMmgyMDYuMDJjLTguMzc3IDUzLjUyNS02Mi4yOTQgMTU2Ljc2LTIwNi4wMiAxNTYuNzYtMTI0LjAyIDAtMjI1LjE4LTEwMi44MDMtMjI1LjE4LTIyOS40NiAwLTEyNi42NTcgMTAxLjE2LTIyOS40NiAyMjUuMTgtMjI5LjQ2IDcwLjUxMyAwIDExNy43NzggMzAuMTAzIDE0NC43MjUgNTYuMDkzbDk4LjYxNy05NC45ODdDNzExLjI4IDE4NC44MDYgNjI5LjI4IDE0OSA1MzEuMjMyIDE0OSAzMzAuNDU0IDE0OSAxNjggMzExLjU3NSAxNjggNTEyLjVTMzMwLjQ1NSA4NzYgNTMxLjIzIDg3NkM3NDAuNzkzIDg3NiA4ODAgNzI4LjQ2NCA4ODAgNTIwLjg4M2MwLTIzLjg1NC0yLjU2NS00Mi4wMy01LjY3NS02MC4yMDRsLTM0My4wOTQtLjEzOHoiIGZpbGw9IiMyQ0E5NEYiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik03NzkuNTQ0IDc4MC45OEM4NDMuNDI0IDcxNy45MTMgODgwIDYyNy4yODcgODgwIDUyMC44ODNjMC0yMy44NTQtMi41NjUtNDIuMDMtNS42NzUtNjAuMjA0bC0zNDMuMDk0LS4xMzhWNTg1LjJoMjA2LjAyYy00Ljg3NSAzMS4xNTQtMjUuMTggNzkuMTQ4LTY5LjY0IDExMy44MjVsMTExLjkzNCA4MS45NTV6IiBmaWxsPSIjM0U4MkY3IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNMjExLjAxMyA2ODQuMzdDMTgzLjU2NSA2MzMuMjEgMTY4IDU3NC42OTQgMTY4IDUxMi41YzAtNTQuMDAyIDExLjczNS0xMDUuMjM0IDMyLjc5NS0xNTEuMjg0bDExNS42MzggODIuMzNjLTYuNzQ0IDIxLjc2Ny0xMC4zODMgNDQuOTMyLTEwLjM4MyA2OC45NTQgMCAzMS4zNyA2LjIwNiA2MS4yOCAxNy40MjggODguNTI0TDIxMS4wMTMgNjg0LjM3eiIgZmlsbD0iI0ZDQkQwMCIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHVzZSBmaWxsPSIjRUQ0MjJDIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHhsaW5rOmhyZWY9IiNhIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMDAgMTQ5KSIvPjwvZz48L3N2Zz4="
                        alt="">
                </a>
                <a href="">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAyNCIgaGVpZ2h0PSIxMDI0IiB2aWV3Qm94PSIwIDAgMTAyNCAxMDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjx0aXRsZT5MaW5rZUluPC90aXRsZT48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGZpbGw9IiMwMDY0QTMiIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiIHJ4PSI3OCIvPjxwYXRoIGQ9Ik0yMjcuMzI4IDM4OS44MjRoMTE0LjYyNHY0MzIuNEgyMjcuMzI4di00MzIuNHptNTcyLjggMjQuOGMyOC4zMiAyMy4zOTIgNDIuNDY0IDYyLjIyNCA0Mi40NjQgMTE2LjQxNnYyOTEuMTg0aC0xMTUuODRWNTU5LjIxNmMwLTIyLjc1Mi0zLjAyNC00MC4yMDgtOS4wNTYtNTIuMzUyLTExLjAwOC0yMi4yNC0zMi0zMy4zMjgtNjMuMDA4LTMzLjMyOC0zOC4wOCAwLTY0LjE5MiAxNi4yNzItNzguMzUyIDQ4LjgtNy4zNiAxNy4yLTExLjAwOCAzOS4xMzYtMTEuMDA4IDY1LjgyNHYyMzQuMDY0SDQ1Mi4yNzJWMzkwLjYwOGgxMDkuNDU2djYzLjA4OGMxNC40OTYtMjIuMjA4IDI4LjE5Mi0zOC4yMDggNDEuMDg4LTQ4IDIzLjE4NC0xNy40NTYgNTIuNTQ0LTI2LjE5MiA4OC4wOTYtMjYuMTkyIDQ0LjQ5Ni4wMTYgODAuODk2IDExLjY5NiAxMDkuMjE2IDM1LjEyek0zNTUuODcyIDI1Ny4yMTZjLS4wMDQgMzkuMzQ1LTMxLjkwMyA3MS4yMzYtNzEuMjQ4IDcxLjIzMi0zOS4zNDUtLjAwNC03MS4yMzYtMzEuOTAzLTcxLjIzMi03MS4yNDguMDA1LTM5LjM0NSAzMS45MDMtNzEuMjM2IDcxLjI0OC03MS4yMzIgMzkuMzQ1LjAwNCA3MS4yMzcgMzEuOTAzIDcxLjIzMiA3MS4yNDh6IiBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48L2c+PC9zdmc+"
                        alt="">
                </a>
                <a href="">
                    <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAyNCIgaGVpZ2h0PSIxMDI0IiB2aWV3Qm94PSIwIDAgMTAyNCAxMDI0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjx0aXRsZT5Ud2l0dGVyPC90aXRsZT48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxyZWN0IGZpbGw9IiMwNjlGRjUiIHdpZHRoPSIxMDI0IiBoZWlnaHQ9IjEwMjQiIHJ4PSI3OCIvPjxwYXRoIGQ9Ik04NjIuMDY0IDM0OS42YTI3MC4zNTIgMjcwLjM1MiAwIDAgMS03Ni45OTIgMjAuOTYgMTMzLjU4NCAxMzMuNTg0IDAgMCAwIDU4LjkxMi03My41NjggMjcwLjUyOCAyNzAuNTI4IDAgMCAxLTg1LjA3MiAzMi4yODggMTM0LjIwOCAxMzQuMjA4IDAgMCAwLTk3Ljc3Ni00Mi4wMTZjLTc0IDAtMTMzLjk2OCA1OS41Mi0xMzMuOTY4IDEzMi45NzYgMCAxMC4zNjggMS4xODQgMjAuNTkyIDMuNDg4IDMwLjMyYTM4MS41NTIgMzgxLjU1MiAwIDAgMS0yNzYuMTQ0LTEzOC45MTIgMTMxLjQyNCAxMzEuNDI0IDAgMCAwLTE4LjE2IDY2Ljc4NGMwIDQ2LjE2IDIzLjY2NCA4Ni44MTYgNTkuNiAxMTAuNjcyYTEzMy41ODQgMTMzLjU4NCAwIDAgMS02MC42NzItMTYuNjcybC0uMDE2IDEuNjhjMCA2NC40MzIgNDYuMjA4IDExOC4xNDQgMTA3LjQ3MiAxMzAuMzUyYTEzNS44NCAxMzUuODQgMCAwIDEtNjAuNTI4IDIuMjU2YzE3Ljc0NSA1NC4zMjUgNjguMDEgOTEuNDAzIDEyNS4xNTIgOTIuMzJhMjcwLjAzMiAyNzAuMDMyIDAgMCAxLTE2Ni4zNjggNTYuOTc2IDI3MC41OCAyNzAuNTggMCAwIDEtMzEuOTg0LTEuOTA0IDM4MS4yOTYgMzgxLjI5NiAwIDAgMCAyMDUuMzYgNTkuNzQ0YzI0Ni40MTYgMCAzODEuMTY4LTIwMi41NiAzODEuMTY4LTM3OC4yNzIgMC01Ljc2LS4xNDQtMTEuNTItLjM2OC0xNy4yYTI2OS42IDI2OS42IDAgMCAwIDY2Ljg5Ni02OC43ODQiIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0ibm9uemVybyIvPjwvZz48L3N2Zz4="
                        alt="">
                </a>
            </div>
        </div>
    </div>
    </form>
    <section id="footersection">

    </section>
</body>

</html>

<script type="module">
    import footer from "./components/footer.js";

    document.querySelector("#footersection").innerHTML = footer();
</script>