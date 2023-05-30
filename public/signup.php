<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="./assets/css/footer.css">
    <style>
        #image {
            display: flex;
            width: 210px;
            margin: 40px 30px;
        }

        #container {
            width: 100%;
            display: grid;
            grid-template-columns: 45% 55%;
            height: auto;
            margin-right: auto;
            margin-left: auto;
        }

        #left {
            display: grid;
            grid-template-rows: repeat(11, 1fr);
        }

        #left p {
            font-size: 14px;
            padding-right: 20px;
        }

        #left>div {
            text-align: end;
            font-family: sans-serif;
        }

        #right {
            display: grid;
            grid-template-rows: repeat(11, 1fr);
            width: 55%;
            gap: 0px;
        }

        #right>div {
            font-family: sans-serif;
        }

        #right input,
        #right label {
            font-size: 14px;
        }

        .inputs {
            height: 35px;
            width: 300px;
            margin-top: 5px;
            border: 1px solid lightgray;
            text-align: center;
        }

        .name {
            height: 35px;
            width: 144px;
            margin-top: 5px;
            border: 1px solid lightgray;
        }

        .input {
            margin-top: 18px;
            border: 1px solid lightgray;
            display: flex;
            position: absolute;
        }

        .trade {
            margin-top: 18px;
            border: 1px solid lightgray;
        }

        #trades {
            margin-top: 15px;
        }

        #reg {
            height: 42px;
            width: 150px;
            background-color: orangered;
            border-style: none;
            color: floralwhite;
            font-family: sans-serif;
            margin-top: 18px;
            font-size: 14px;
        }

        #flax 
        {
            display: flex;
        }
        #agree {
            font-size: 14px;
            display: inline;
        }

        #agree input {
            margin-top: 15px;
        }
        #reg{
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="all">
        <div id="image">
            <a href="./index.html"> <img width="100%"
                    src="https://s.alicdn.com/@img/tfs/TB1pDDmmF67gK0jSZPfXXahhFXa-2814-380.png"></a>
        </div>
        <div id="container">
            <div id="left">
                <div>
                    <p>Country/Region:</p>
                </div>
                <div>
                    <p>Please select trade role:</p>
                </div>
                <div>
                    <p>Email Address:</p>
                </div>
                <div>
                    <p>Login Password:</p>
                </div>
                <div>
                    <p>Confirm Password:</p>
                </div>
                <div>
                    <p>Company Name:</p>
                </div>
                <div>
                    <p>Full Name:</p>
                </div>
                <div>
                    <p>Tel:</p>
                </div>
                <div>
                    <p>Verification:</p>
                </div>
                <div>
                    <p></p>
                </div>
                <div>
                    <p></p>
                </div>
            </div>
            <form id="right" onsubmit="return validateInputs()" action = "../src/controller/signupcontroller.php" method = "POST" >
                <div>
                    <input type="text" class="inputs" required name="country"  placeholder="Ethiopia" id="country">
                </div>
                <div>
                    <input type="radio" value="Buyer" required name="tradeRole">
                    <label for="">Buyer</label>
                    <input type="radio" value="Seller" name="tradeRole">
                    <label for="">Seller</label>
                    <input type="radio" value="Both" name="tradeRole">
                    <label for="">Both</label>
                </div>
                <div>
                    <input type="email" id="mail" name="email" required placeholder="Please set the email as the login name" class="inputs">
                </div>
                <div>
                    <input type="password" required id="pass" class="inputs" name="password" placeholder="Please set the login password">
                </div>
                <div>
                    <input type="password" id="confirmPass" name="confirm-password" class="inputs"
                        placeholder="Please set the login password again">
                </div>
                <div>
                    <input type="text" class="inputs" name="companyName" required id="company" placeholder="Must be a legally registered company">
                </div>
                <div>
                    <input type="text" id="fname" class="name" name="firstName" placeholder="Please enter your first name">
                    <input type="text" class="name" id="lname" name="lastName" placeholder="Please enter your last name">
                </div>
                <div>
                    <input class="inputs" id="phone" type="number" name="phoneNumber" placeholder="Phone number">
                </div>
                <div>
                    <input type="checkbox" name="verification" class="input" value = "checked">
                    <p id="flax" style="margin-left: 27px;">Please click here to verify</p>
                </div>
                <div>
                    <input type="checkbox"  name  ="agree" value = "checked " required>
                    <p id="agree">While creating a website account: I agree to abide by the
                        Alibaba.com
                        Membership Agreement- Willing to receive emails
                        from Alibaba.com members and services</p>
                </div>
                <div>
                    <input type="submit" id="reg" value="Agree and Register">
                </div>
                <div>
                    <?php
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </div>
            </form>
        </div>

        <section id="footersection">

        </section>
</body>

</html>
<script src=""></script>
<script type="module">

    import footer from "./components/footer.js";
    document.querySelector("#footersection").innerHTML = footer();
</script>
