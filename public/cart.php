<?php
    session_start();
    require_once "../src/core/Database.php";
    $db = new Database();
    $sql = "SELECT c.quantity , p.product_id, p.product_name, p.price, p.product_img_url_1
          FROM cart c
          INNER JOIN product p ON c.product_id = p.product_id
          WHERE c.user_id = :user_id ";
    $params = [':user_id' => $_SESSION['id']];
    $rows = $db->read($sql , $params);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://kit.fontawesome.com/db1e80451c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/shoppingcart.css">
    <link rel="stylesheet" href="./assets/script/footer.css">
</head>

<body>
    <div id="header">
        <div>
            <a href="./index.html"><img src="https://s.alicdn.com/@img/tfs/TB1pDDmmF67gK0jSZPfXXahhFXa-2814-380.png"
                    alt=""></a>
        </div>
        <p>
            Shopping Cart
        </p>
    </div>

    <div id="items">
        <?php
        foreach($rows as $row){
        ?>
        <div id="left">
            <?php
                $path = $row['product_img_url_1'];
                $uploadsIndex = strpos($path, 'uploads');
                $relativePath = substr($path, $uploadsIndex);
            ?>
            <div id="left_id">
            <img src="<?php echo $relativePath; ?>" alt="Product Image" width="30px">
            <p>
                <?php
                    echo $row["product_name"];
                ?>
                <br>
                <br>
                <br>
                Price(each) = 
                <?php
                    echo $row['price'];
                ?>
                <br>
                <br>
                Total price = 
                <?php
                    echo $row['quantity'] *$row['price'];
                ?>
            </p>
            </div>
            <?php $r = $row['product_id']?>
            <a href='<?php echo "./order.php?product_id=$r" ?>'>
    <button>Submit Order</button>
</a>

        </div>
        <?php } ?>
        
    </div>

    <section id="footersection">

    </section>
</body>

</html>

<script type="module">
    import footer from "./components/footer.js";

    document.querySelector("#footersection").innerHTML = footer();
</script>

<script src="./script/shoppingcart.js"></script>

<script>
    let token = JSON.parse(localStorage.getItem("Authorization"));


    async function submitorder() {
        let response = await fetch(`https://alibaba-backend.herokuapp.com/users/${token}`);
        user = await response.json();

        if (user) {
            alert("Your order has been submitted, you will receive a call from the dealer soon.");
            localStorage.setItem("alibabacart", JSON.stringify([]));
            window.location.href = "./index.html";
        }
        else {
            alert("You are not signed in");
            window.location.href = "./signin.html";
        }
    }
</script>