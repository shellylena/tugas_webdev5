<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Actor</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
    <style type="text/css">

        .content {

            background-color: white;
            min-height: 500px;
            overflow: auto;
            margin-top: 20px;
        }
        .footer{
            text-align: center;
            background-color: #ccc;
            min-height: 50px;
        }
        .jumbotron{
            width: 100%;
            height: 100%;
            padding: 100px;
            box-sizing: border-box;
            text-align: center;
            color: white;
            background-color: #aaa;
            background-image: url("./img/7.jpg");
            background-size: cover;
            position: relative;
            font-family: 'Ranga', cursive;

        }
        .overlay{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.4;
        }
        .jumbotron h2,
        .jumbotron p{
            position: relative;
        }
        .thumbnail img{
            width: 1000px;
            height: 300px;
        }
        .navbar{
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">

            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">FILM</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
        <div class="overlay"></div>
        <h2>Welcome to my homepage</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor necessitatibus quae voluptate explicabo architecto fugiat asperiores illo quibusdam qui mollitia, porro fugit. Illum sapiente modi, ut harum aliquam accusamus unde.</p>
</div>
<div class="content">
        <table class="table table-bordered" >
            <thead>
            <tr class="active">
                <div class="thead">
                    <th> Name </th>
                    <th> Place and Date Birth  </th>
                    <th> Awards </th>
                    <th> Film </th>
                    <th> Photo </th>
                </div>
            </tr>
            </thead>
            <tbody>
            <?php include 'list_artis.php';
            foreach($kumpulan_artis as $artis){
                echo "<tr class='active'>";
                echo "<td>". $artis["nama"]. "</td>";
                echo "<td>". $artis["lahir"]. "</td>";
                echo "<td>". $artis["penghargaan"]. "</td>";
                echo "<td>". $artis["film"]. "</td>";
                echo "<td>". $artis["foto"]. "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

        <div class="footer">
            <p>Copyright 2018 Shelly Marshallena</p>
        </div>
    </div>
</body>
</html>