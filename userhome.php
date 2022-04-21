<?php
session_start();
    include("connection.php");
    include("function.php");

    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userhome.css">
    <title>Adopt Me</title>
</head>

<body>
    <!-- <div class="coverphoto">
        <div class="changingphotos">
            <h1>Let us find a PET of your type</h1>
            <h2>Share about your preferences</h2>
            <a href="#">here</a>
        </div>
    </div> -->

    <div id="container">
    
        <div id="sidebar">
            <div class="togglebtn">
                <button class="threebar" onclick="togglemenu()">
                <span></span>
                <span></span>
                <span></span></button>
                
                <div class="card-holder">
                    <div class="animal-card"><img id="cat1" src="/adoptme/photos/cat.jpg">
                        <label for="cat1"><b>Micky</b></label>
                    </div>
                    <div class="animal-card"><img id="cat1" src="/adoptme/photos/dog1.JPG">
                        <label for="cat1"><b>Mini</b></label>
                    </div>
                    <div class="animal-card"><img id="cat1" src="/adoptme/photos/cat.JPG">
                        <label for="cat1"><b>Mishu</b></label>
                    </div>
                    <div class="animal-card"><img id="cat1" src="/adoptme/photos/dog2.jpg">
                        <label for="cat1"><b>Joya</b></label>
                    </div>
                    <div class="animal-card"><img id="cat1" src="/adoptme/photos/dog3.JPG">
                        <label for="cat1"><b>Chibi</b></label>
                    </div>
                </div>
            </div>
            <ul>
                <div class="adoptbtn">
                    <a href="/PetList/dogcat.html"><button id="btn">Adopt</button></a><br>
                    <div class="dropdown">
                        <a href="/adoptme/Adopt Button/Adoptdog.html">Dog</a>
                        <a href="/adoptme/Adopt Button/Adoptcat.html">Cat</a>
                        <a href="/adoptme/Adopt Button/Adoptothers.html">Others</a>
                    </div>
                </div>
            
                <button id="btn" class="dropdown-btn">Learn</button>
                <div id="btn1">
                    
                    <div class="dogcare">
                        <a href="#">Dog Care</a><br>
                        <div id="btn3" class="dogcaredrop">
                        <a href=" ">Dog Breeds</a>
                        <a href=" ">Adopting A Dog</a>
                        <a href=" ">Healthy Feeding</a>
                        <a href=" ">Handling Dog Habits</a>
                        <a href=" ">Dog Training</a>
                        <a href=" ">Dog Problem</a>
                        <a href=" ">Dog Grooming</a>
                    </div>
                    </div>
                    <div class="petadoption">
                        <a href="#">Pet Adoption</a><br>
                     <div id = "btn2" class="drophover">
                        <a href="/adoptme/Learn/Petadoption.html">About Pet Adoption</a>
                        <a href="/adoptme/Learn/adoptionprocess.html">Adoption Process</a>
                        <a href="/adoptme/Learn/responsiblepetownership.html">Responsible Pet Ownership</a>
                        <a href="/adoptme/Learn/rescuedogs.html">Rescue Dogs</a>
                    </div>
                    </div>
                    <div class="catcare">
                        <a href="#">Cat Care</a><br>
                        <div id="btn4" class="catcaredrop">
                            <a href=" ">Cat Breeds</a>
                            <a href=" ">Adopting A Cat</a>
                            <a href=" ">Healthy Feeding</a>
                            <a href=" ">Cat Training</a>
                            <a href=" ">Cat Problem</a>
                            <a href=" ">Cat Grooming</a>
                        </div>
                        </div>
                    <a href="#">Other Pet Care</a><br>
                    <a href="#">Basic Pet Treatment</a><br>
                </div>

                <button id="btn">Shelter</button>
            </ul>
        </div>
        <a href="post.php"><button style="margin-top:8px;background-color:rgba(104, 26, 91, 0.842);border:none;text-decoration: none;color: white;font-size: 20px;cursor: pointer;margin-left:50%;"> Create a Post</button></a>
        <a href="login.php"><button class="signin"> SIGN IN</button></a>
    </div>


    <!-- sidebar ko js -->
    <script type="text/javascript">
        function togglemenu() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing 
        its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

    </script>
</body>

</html>