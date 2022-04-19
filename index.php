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
    <title>index</title>
</head>
<body>
    <!-- <a href="logout.php">logout</a> -->
    <div id="container">
        <div id="sidebar" onclick="togglemenu()">
            <div class="togglebtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li id="btn" class="dropdown"> <a href="">Learn</a>
                    <ul class="submenu" style="top: 20px;">
                        <li><a href="">dog food</a></li>
                        <li><a href="">dog training</a></li>
                        <li><a href="">dog disease</a></li>
                    </ul>
                </li>
                <li id="btn"> <a href="">Shelter</a> </li>
                <li id="btn" class="dropdown"> <a href="">Adopt</a>
                   <ul class="submenu">
                       <li><a href="">dog</a></li>
                       <li><a href="">cat</a></li>
                   </ul>
                </li>
            </ul>
        </div>
        <p style="font-style: italic;font-family: fantasy; margin: 2px 150px;">Adopt Me </p>
        
        <button style="float: right;  background-color:rgba(104, 26, 91, 0.842);"><a style="color:white;text-decoration:none"href="login.php">login</a></button>
    </div>

    <!-- sidebar ko js -->
    <script type="text/javascript">
        function togglemenu(){
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>

    <style>
        #dads{
            ssjssggsgs=
        }
        body{
         margin: 0;
         padding: 0;
        }
        #sidebar{
            border-right: 2px black solid;
            position: fixed;
            width: auto;
            height: 100%;
            left: -12%;
            top: 5px;
    
        }
        #btn{
           text-decoration: none;
           font-size: 20px;
           margin-bottom: 10px;
           padding: 10px;
           border: none;
           text-align: center;
           background-color: #360a69;
           width: auto;
           cursor: pointer;
           /* margin-right: 35px;
           margin-left: 20px; */
           margin: 20px;
           display: flex;
           transition:.5s ease;
           border-radius: 5px;
           box-shadow: 2px 2px 10px rgba(0,0,0,.50);
        }
        #btn a{
            color: white;
            text-decoration: none;
            }
        ul ul {
            position: relative;
            left: 90px;
            width: 50px;
    
            }
        ul ul li{
               background-color: #360a69;
               justify-content: center;
               margin-bottom: 20px;
               display: flex;
               border-radius: 5px;
               box-shadow: 2px 2px 10px rgba(0,0,0,.50);
               width: 250%;
            }
        .submenu{
            display: none;
            }
        .dropdown:hover .submenu{
            display: initial;
        }

        ul li:hover{
            background: #5f0fbb;
            border-radius: 0 30px;

        }
        #btn:hover{
            background: #5f0fbb;
            border-radius: 0 30px;
        }
        /* side bar closing 3 line   */
        .togglebtn{
            position: absolute;
            left: 115%;
            top: 12px;
        }
        .togglebtn span{
            background-color: black;
            display: block;
            color: black;
            width: 30px;
            height: 5px;
            margin: 3px;
        
        }
        #sidebar.active{
            left: 0;
        }
    </style>
</body>
</html>