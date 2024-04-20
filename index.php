<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="./signup.css">
</head>
<body>
    <form action="index.php" method="POST" onsubmit="return validateForm()">
        <div id="container"></div>
        <div id="outerbox">
            <div id="innerbox">
                <div class="leftinnerbox">
                    <p class="para1">Looks like you're new here!</p>
                    <p class="para2">Sign up with your mobile number to get started</p>
                    <div style="display: flex;flex-direction: column;align-items: center;justify-content: center;margin-top: 30px;width: 75%;">
                        <img src="https://static-assets-web.flixcart.com/fk-p-linchpin-web/fk-cp-zion/img/login_img_c4a81e.png" alt="hero_signup">
                    </div>
                </div>
                <div class="rightinnerbox">
                    <div style="display: flex;justify-content: center;margin-top: 20px;">
                        <input id="phone" name="phone" class="mobile" type="number" placeholder="Enter Mobile Number" />
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: 20px">
                        <input id="naam" name="name" class="name" type="text" placeholder="Enter your Name" />
                    </div>
                    <div style="display: flex;justify-content: center;margin-top: 20px;">
                        <input id="pass" name="password" class="password" type="password" placeholder="Enter Password" />
                    </div>
                    <div style="margin-top: 20px;">
                        <p class="textm">By continuing, you agree to Flipkart's
                            <span style="color: blue;"> Terms of Use</span>
                            and <span style="color: blue;">Privacy Policy.</span>
                        </p>
                    </div>
                    <div style="margin-top: 10px;display: flex;justify-content: center;">
                        <button class="continue" style="cursor: pointer; border: none;background-color: #FB641B;color: white;font-size: 20px;width: 90%;padding: 9px;border-radius: 5px; " type="submit">CONTINUE</button>
                    </div>
                    <div style="margin-top: 10px;display: flex;justify-content: center;">
                        <button style="cursor: pointer; border: none;background-color: whitesmoke;color: #2874F0;;font-size: 20px;width: 90%;padding: 9px;border-radius: 5px">Existing User? Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script>
        $(function() {
            $("#container").load("./Navbar.html");
        });

        function validateForm() {
            let mobile = document.getElementById("phone").value;
            let username = document.getElementById("naam").value;
            let password = document.getElementById("pass").value;

            if (mobile.length === 0) {
                alert("Enter mobile number");
                return false;
            } else if (mobile.length !== 10) {
                alert("Mobile number should have 10 digits");
                return false;
            } else if (username.length === 0) {
                alert("Enter your name");
                return false;
            } else if (password.length === 0) {
                alert("Enter a password");
                return false;
            }

            return true;
        }
    </script>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users_data";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $phone = $_POST['phone'];
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (mobile_no, name, password) VALUES ('$phone', '$name', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful');</script>";
            echo "<script>window.location.href = 'welcome.php';</script>";
        } else {
            echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        }

        $conn->close();
    }
    ?>
</body>
</html>
