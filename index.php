<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body>
    <nav>
        <ul>
            <li class="logo">
                <img width="150px" height="100px" src="./logof.jpeg" alt="logo">
            </li>
            <li id ="aboutt" class="items"><a href="#">ABOUT US</a></li>
            <li id="pop-up" class="items"><a href="#">CONTACT</a></li>
            <li class="btn1"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <hr>
    <div class="body">
        <div class="text1">
            <h2>NEW TO CHECK BOX?</h2>
            <br>
            <div class="btn2">
                <span id="ask1">SIGN UP</span>
            </div>
            <br>
            <h2>ALREADY A MEMBER?</h2>
            <br>
            <div class="btn2">
                <span id="ask2">SIGN IN</span>
            </div>
        </div>
    </div>
    <div class="modal">
        <div class="modal-cont">
            <div class="close">+</div>
            <div class="about-us">
                <h4>REACH OUT TO US WITH YOUR QUERIES!</h4>
            </div>
            <form action="">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="phone-NO">
                <input type="text" placeholder="E-mail ID">
                <input type="text" placeholder="your message!">
                <a href="" class="button">SUBMIT</a>
            </form>
        </div>
    </div>
    <div class="about">
        <div class="about-cont">
            <div class="close1">+</div>
            <div class="about-us">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis ullam sed modi asperiores nemo in
                    consequuntur accusamus voluptatem odio amet quia eveniet necessitatibus, dolorum tenetur officia
                    deleniti totam veniam consequatur saepe atque quos perspiciatis. Architecto reiciendis optio modi
                    excepturi ratione?</p>
                <br>
                <br>
                <h5>by this you agree to out terms and conditions</h5>
                <a href="./signup.html">SIGN UP</a>
            </div>
        </div>
    </div>
    <div class="askt">
        
        <div class="askt-cont">
            <div class="close2">+</div>
            <div class="btn2" onclick="myFunc()"><span>TEACHER</span></div>
            <br>
            <br>
            <div class="btn2" onclick="myFunc2()"><span>STUDENT</span></div>
        </div>
    </div>
    <div class="askt2">
    
        <div class="askt2-cont">
            <div class="close3">+</div>
            <div class="btn2" onclick="myFunc3()"><span>TEACHER</span></div>
            <br>
            <br>
            <div class="btn2" onclick="myFunc4()"><span>STUDENT</span></div>
        </div>
    </div>
        <script>
            $(document).ready(function () {
                $('.btn1').click(function () {
                    $('.items').toggleClass("show");
                    $('ul li').toggleClass("hide");
                });
            });
        </script>
        <script>
            document.getElementById("pop-up").addEventListener("click", function () {
                document.querySelector(".modal").style.display = "flex";
            });
            document.querySelector(".close").addEventListener("click", function () {
                document.querySelector(".modal").style.display = "none";

            });
        </script>
        <script>
            document.getElementById("aboutt").addEventListener("click", function () {
                document.querySelector(".about").style.display = "flex";
            });
            document.querySelector(".close1").addEventListener("click", function () {
                document.querySelector(".about").style.display = "none";

            });
        </script>

        <script>
            document.getElementById("ask1").addEventListener("click", function () {
                document.querySelector(".askt").style.display = "flex";
            });

            function myFunc() {
                window.location = "signup-t.html";
            }
            function myFunc2() {
                window.location = "signup-stud.html";
            }
            document.querySelector(".close2").addEventListener("click", function () {
                document.querySelector(".askt").style.display = "none";

            });
        </script>
        
        
        <script>
            document.getElementById("ask2").addEventListener("click", function () {
                document.querySelector(".askt2").style.display = "flex";
            });
            
            function myFunc3() {
                window.location = "login-t.php";
            }
            function myFunc4() {
                window.location = "login-stud.html";
            }
            document.querySelector(".close3").addEventListener("click", function () {
                document.querySelector(".askt2").style.display = "none";

            });
        </script>
    
</body>

</html>