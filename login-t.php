<?php

include("database-connc.php");
session_start();
if(isset($_SESSION["admin_id"]))
{
    header("location:index.php");
}

?>
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
            <li class="items"><a href="index.html">HOME</a></li>
            <li id="aboutt" class="items"><a href="#">ABOUT US</a></li>
            <li id="pop-up" class="items"><a href="#">CONTACT</a></li>
            <li class="btn1"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>
    <hr>
    <div class="body">
        <div class="login-form">
            <div class="text">LOGIN AS TEACHER</div>
            <form method="post" id="teacher_login_form">
                <div class="field">
                    <div class="fas fa-envelope">
                    </div>
                    <input type="text" name="teacher_name" id="teacher_name" placeholder="Email or Phone">
                </div>
                <div class="field">
                    <div class="fas fa-lock">
                    </div>
                    <input type="password" name="teacher_pass" id="teacher_pass" placeholder="Password">
                </div>
                <div class="field">
                    <input type="submit" name="teacher_login" id="teacher_login" class="button" value="Login"/>
                </div>
                <div class="link">
                    Not a member?
                    <a href="signup.html">Signup now</a>
                </div>
            </form>

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
    $(document).ready(function(){
        $("#teacher_login_form").on("submit",function(event){
           event.preventDefault();
           $.ajax({
               url:"check_teacher_login.php",
               method:"POST",
               data:(this).serialize(),
               dataType:"json",
               beforesend:function(){
                   $("#teacher_lodin").val("validate...");
                   $("#teacher_login").attr("disabled","disabled");
               },
               success:function(data)
               {
                   if(data.success)
                   {
                       location.href="<?php echo $base_url;?>admin";
                   }
                   if(data.error)
                   {
                       $("#teacher_login").val("Login");
                       $("#teacher_login").attr("disabled",false);
                       if(data.error_teacher_name!="")
                       {
                           $("#error_teacher_name").text(data.error_teacher_name);

                       }
                       else{
                           $("#error_teacher_name").text("");
                       }
                        if(data.error_teacher_pass!="")
                       {
                           $("#error_teacher_pass").text(data.error_teacher_pass);

                       }
                       else{
                           $("#error_teacher_pass").text("");
                       }
                   }
               }

               }

           });
        });
    });


    </script>
</body>

</html>