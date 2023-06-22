<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address</title>
    <link rel="stylesheet" href="./assets/css/order.css">
</head>
<body>
    <div id="header">
        <div>
            <a href="./index.php"><img src="https://s.alicdn.com/@img/tfs/TB1pDDmmF67gK0jSZPfXXahhFXa-2814-380.png"
                    alt=""></a>
        </div>
        <p>
            Address
        </p>
    </div>



    <form method= "POST" action = "../src/controller/ordercontroller.php">
        <div id="city">
            <p>Country</p>
            <select name="country" id="country" >
              <option value="India">India</option >
              <option value="Australia">Australia</option>
              <option value="Philippines">Philippines</option>
              <option value="Slovenia">Slovenia</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="China">China</option>
              <option value="">Iran</option>
              <option value="">France</option>
              <option value="">Vietnam</option>
              <option value="">Portugal</option>
              <option value="">Sweden</option>
            </select>
        </div>
        <div id="cnt">
            <p>Adree Line 1</p>
            <input type="text" name="address1" placeholder="Street Addresss, PO box etx" required id="address">
        </div>
        
        <div id="cnt">
            <p> Address Line 2</p>
            <input type="text" name="address2" placeholder="Appartment suite, unit etc">
        </div>
        <div id="cnt">
            <p> State /Province</p>
            <input type="text" name="province" placeholder="Please select a State/ Province/ Region" required id="state">
        </div>
        <div id="cnt">
            <p>City</p>
            <input type="text" name="city" placeholder="Plese enter a city" id="city" >
        </div>

         <div id="cnt">
            <p>Zip Code </p>
            <input type="text" name="zip_code" maxlength="6" placeholder="Please enter a ZIP/Postal Code" required id="zip"> 
        </div>
        <div id="cnt">
            <p> Contact Name</p>
            <input type="text" name="contact-name" placeholder="Please eneter a Contact Name" required id="name">
        </div>
        <div class="pid">
            <input type="number" hidden name="product_id" value="<?php echo $_GET['product_id']; ?>">
        </div>
        <div id="cnt">
            <p>Phone Number </p>
            <input type="tel" name="phone_number" placeholder="Please enter a Contact Number" id="itn2" id="phone">
        </div>
        <div id="btn">
        <input type="submit" value="Submit" id="btn1">
        <input type="button" value="Cancel" id="btn2">
    </div>
    </form>
    <div id="line"></div>
    <footer>
        <div id="container">
            <div id="row-1">
                <a href="#">AliExpress| </a>
                <a href="#">1688.com |</a>
                <a href="#">Tamil Taobao World |</a>
                <a href="#">Alipay |</a>
                <a href="#">Lazada</a>
            </div>
            <div id="row-1">
                <p>Browse Alphabetically:</p>
                <a href="#">Onetouch |</a>
                <a href="#"> Showroom |</a>
                <a href="#">Country Search |</a>
                <a href="#">Suppliers |</a>
                <a href="#"> Affiliate</a>
            </div>
            <div id="row-1">
                <p>Product Listing Policy -</p>
                <a href="#">Intellectual Property Protection - </a>
                <a href="#"> Privacy Policy - </a>
                <a href="#">Terms of Use - </a>
                <a href="#">User Information Legal Enquiry Guide</a>
            </div>
            <div id="row-1">
               <img src="https://s.alicdn.com/@img/tfs/TB1VtZtebH1gK0jSZFwXXc7aXXa-65-70.gif" alt="logo" id="logo">
                <span>© 1999-2021 Alibaba.com. </span>
                <span> All rights reserved.</span>
              <img src="https://s.alicdn.com/@img/tfs/TB1QhYprKT2gK0jSZFvXXXnFXXa-20-20.png" alt="logo" id="logo">
               <span>浙公网安备 33010002000092号 浙B2-20120091-4</span>
            </div>
        </div>
    </footer>

</body>
</html>