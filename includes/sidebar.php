
<head>
    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #555;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        li a {
            display: block;
            color: #FFF;
            padding: 16px 16px;
            text-decoration: none;

        }

        li a.active {
            background-color: #52ac8b;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #52ac8b;
            color: white;
        }
        li a.profile {
            padding: 32px 16px;
            background-color: #52ac8b;
            border-bottom: 1px solid black;
            color: white;
        }
    </style>
</head>
<body>
<ul>
    <li><a class="profile">Welcome, <?=$_SESSION['name']?></a></li>
    <li><a href="../adminlogin/home.php">Dashboard</a></li>
    <li><a href="../adressbook.php">Adressbook</a></li>
    <li><a href="../adminlogin/profile.php">Profile</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
</ul>



</body>