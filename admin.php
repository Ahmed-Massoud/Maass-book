<?php
// Check if the username and password are provided in the URL
if (isset($_GET['username']) && isset($_GET['password'])) {
    // Retrieve username and password from the URL
    $username = $_GET['username'];
    $password = $_GET['password'];

    // Sanitize input data (you should implement more robust validation)
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Connect to the database
    $hostname = 'sql307.infinityfree.com';
$username = 'epiz_34061379';
$password = 'AXks3SYdV5W0XG';
$database = 'epiz_34061379_tset';

$conn = mysqli_connect($hostname, $username, $password, $database);
    // $conn = mysqli_connect("localhost", "root", "", "Mass-book");

    // Check if the username and password match the admin credentials in the database
    $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if a row is returned (credentials are correct)
    if (mysqli_num_rows($result) > 0) {

    } else {
        die("<h1>Invalid credentials</h1>");
    }

    // Close the database connection
    mysqli_close($conn);
} else {

    die("<h1>Username and password are required</h1>");
}

?>


<head>
    <title>Mass.Books | Upload Book</title>
    <link rel="styleSheet" href="main/main.css">
    <link rel="icon" href="main/logo.png" />
    <link rel="styleSheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root {
            --First-color: #00000033;
            --Second-color: #525CEB;
            --third-color: #363b91;
        }

        html,
        body {
            height: 100vh;
        }

        .container {
            height: 100%;
            width: 100%;
        }

        .main {
            overflow: hidden;
        }

        .colorDiv {
            color: #fff;
            position: fixed;
            width: 40px;
            height: 40px;
            top: 20px;
            left: 0px;
            background: #333;
            z-index: 1000;
            border-radius: 0px 10px 10px 0px;
        }

        .colorDiv input {
            display: none;
        }

        .colorDiv label {
            margin: 10px;
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #363b91;
        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }

        .user-box {
            position: relative;
            width: 60%;
            margin: 0px auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;

        }

        #button {
            width: 80%;
            height: 40px;
            margin: 20px auto;
            display: block;
            color: #fff;
            background-color: var(--third-color);
            font-size: 1em;
            font-weight: bold;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
            margin-bottom: 60px;
        }

        #button:hover {
            background: #363b91;
        }

        .login {
            bottom: 90%;
            height: 90%;
            background: #eee;
            border-radius: 60% / 10%;
            transition: .4s ease-in-out;
            position: fixed;
            bottom: calc(-90% + 53px);
            left: 0px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            width: 100%;
        }

        #chk:checked~.login {
            bottom: 0px;
        }

        #chk:checked~.login label {
            transform: scale(1);
        }

        #chk:checked~.signup .sig {
            transform: scale(.6);
            margin-top: 10px;
        }

        .user-box label {
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .user-box input {
            padding: 10px 0px;
            padding-right: 17px;
            width: 100%;
            box-sizing: border-box;
            font-size: 16px;
            color: #fff;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .user-box input:focus~label,
        .user-box input:valid~label {
            top: -10px;
            left: 0;
            font-size: 12px;
            font-weight: bold;
        }

        label[for="chk"] {
            font-size: 1.3em;
            justify-content: center;
            display: flex;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        .sig {
            color: #fff;
            margin: 10px;
        }

        .log {
            margin: 10px;
        }

        .login label,
        .login input {
            color: var(--third-color);
        }

        .login input {
            border-color: var(--third-color);
        }

        .grid {
            display: grid;
            grid-template-columns: auto auto;
            height: 100%;
            gap:30px;
        }
        @media screen and (max-width:600px){
            .grid {
            grid-template-columns: auto;
        }
        }
    </style>

</head>

<body>
    <script type="text/javascript" src="main/emailjs.js"></script>
    <script src="main/main.js"></script>
    <script src="main/loader.js"></script>
    <div id="container">




        <div class="main" id="main">



            <input type="checkbox" id="chk">
            <form class="signup">
                <label for="chk" class="sig">Upload Book</label>
                <div class="grid">

                    <div class="user-box">
                        <input type="text" id="username" required autocomplete="off">

                        <label id="usernameLabel">Name</label>

                    </div>
                    <div class="user-box">
                        <input type="text" id="email" required autocomplete="off">
                        <label id="emailLabel">language</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="password" required autocomplete="off">
                        <label id="passwordLabel">discription</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="email" required autocomplete="off">
                        <label id="emailLabel">language</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="password" required autocomplete="off">
                        <label id="passwordLabel">discription</label>
                    </div>
                    <div class="user-box">
                        <input type="text" id="password" required autocomplete="off">
                        <label id="passwordLabel">discription</label>
                    </div>
                </div>

                <input type="submit" id="button">

            </div>

            <div class="login">

                <label for="chk" class="log">Edit Book</label>



                <div class="user-box">

                    <input type="text" id="username2" required>

                    <label>Username</label>

                </div>

                <div class="user-box">

                    <input type="text" id="password2" required>

                    <label>Password</label>

                </div>
                <button onclick="login()" id="button2">Login</button>

            </div>

        </div>
        <script src="main/sweetalert.js"></script>
        <script>
            loader = document.querySelector(".loader");

            window.addEventListener("load", function () {
                loader.style.display = "none";
            });    
        </script>
</body>
<script>
    let dataPro = [];
    if (localStorage.User != null) {
        dataPro = JSON.parse(localStorage.User);
    } else {

        let admin = {
            Username: "admin",
            Email: "ahmed14massoud2021@gmail.com",
            Password: "admin142021",
        };
        dataPro.push(admin);
        localStorage.setItem("User", JSON.stringify(dataPro))
    }




    function totxt(e) {
        e = e.value.trim();
        return e;
    }




    function validation(input, inputName, re, label) {

        function Rfalse() {
            input.style = "border-bottom:1px solid red;background-image: linear-gradient(0deg, rgba(255,0,0,.3) 0%, rgba(0,0,0,0) 30%);";

        }

        function Rtrue() {
            input.style = "border-bottom:1px solid green;background-image: linear-gradient(0deg, rgba(0,255,0,.3) 0%, rgba(0,0,0,0) 30%);";
        }

        function content() {
            swal("Noticeable", `The ${inputName} must Contains only letters and numbers for easy memorization`, "error");
        }

        function number(less, more) {
            if (totxt(input).length < less || totxt(input).length > more) {
                swal("Noticeable", `the ${inputName} Not less than ${less} and not more than ${more}.`, "error");

            } else {
                content()
            }
        }

        function empty() {
            swal("Noticeable", `You should not leave the  ${inputName} field blank .`, "error");

        }

        function incorrect() {
            swal("Noticeable", `The ${inputName} is in correct.`, "error");
        }

        if (re.test(totxt(input))) {



            if (inputName == "username") {

                for (let i = 0; i < dataPro.length; i++) {

                    if (dataPro[i].Username == totxt(username)) {


                        swal("Noticeable", "The account has been created, please choose another", "error");


                        Rfalse();
                        return false;


                    } else {

                        if (dataPro.length - i == 1) {

                            Rtrue();
                            return true;


                        }
                    }
                }


            } else {

                Rtrue();
                return true;
            }


        } else {


            if (totxt(input) == "") {
                empty();
            } else {




                if (inputName == "username") {
                    number(5, 15)
                } else if (inputName == "password") {
                    number(7, 14)
                } else {
                    if (inputName == "email") {
                        incorrect()
                    } else {
                        content()
                    }

                }




            }

            Rfalse();
            return false
        }
    }




    function check() {




        let usernameRe = /^[A-Za-z0-9]{5,15}$/;
        let emailRe = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        let passwordRe = /^[A-Za-z0-9]{7,14}$/;
        let username = document.getElementById("username");
        let email = document.getElementById("email");
        let password = document.getElementById("password");
        let button = document.getElementById("button");
        let usernameLabel = document.getElementById("usernameLabel");
        let emailLabel = document.getElementById("emailLabel");
        let passwordLabel = document.getElementById("passwordLabel");




        let passwordCorrect = validation(password, "password", passwordRe);
        let emailCorrect = validation(email, "email", emailRe);
        let usernameCorrect = validation(username, "username", usernameRe);
        console.log(usernameCorrect);
        console.log(emailCorrect);
        console.log(passwordCorrect);
        console.log("###########");

        if (usernameCorrect == true && emailCorrect == true && passwordCorrect == true) {
            let newUser = {
                Username: totxt(username),
                Email: totxt(email),
                Password: totxt(password),
            };
            dataPro.push(newUser);
            localStorage.setItem("User", JSON.stringify(dataPro))


            username.value = "";
            email.value = "";
            password.value = "";

            username.style = "border-bottom:1px solid #fff;background-image: rgba(0,0,0,0);";

            email.style = "border-bottom:1px solid #fff;background-image: rgba(0,0,0,0);";

            password.style = "border-bottom:1px solid #fff;background-image: rgba(0,0,0,0);";



            swal("Account creation succeeded", "The account has been created, please login", "success");

            let chk = document.getElementById("chk");
            chk.checked = true;
            console.log("added")


        }



    }





    function login() {
        let username = document.getElementById("username2");

        let password = document.getElementById("password2");
        let button = document.getElementById("button2");


        for (let i = 0; i < dataPro.length; i++) {
            if (dataPro[i].Username == totxt(username)) {
                if (dataPro[i].Password == totxt(password)) {
                    swal("Login succeeded", "", "success");
                } else {
                    swal("Incorrect Passowrd", "Please check your passowrd", "error");
                    break;
                }
            } else {
                if (dataPro.length - i == 1) {
                    swal("Login failed", "We can't find your username", "error");
                }
            }
        }
    }

</script>