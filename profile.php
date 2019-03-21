<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');
?>

<html>

<head>
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css" />

</head>


<body>



    <div align="center">
        <div style=" border: solid 1px #006D9C; " align="left">
            <?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
            <div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b>
                    <?php echo $_SESSION['name']; ?></b></div>
            <div style="margin: 15px">
                Welcome
                <?php echo $_SESSION['name']; ?> <br>
                <a href="update.php">Update</a> <br>
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>



    <h1> Sunt Tatiana Moraru</h1>


    <ul>
        <li><a class="active">Menu</a></li>
        <li><a href="studii.php">Studii</a></li>
        <li><a href="proiecte.php">Proiecte</a></li>
        <li><a href="descriere.php">Descriere</a></li>
        <li><a href="contacte.php">Contacte</a></li>
    </ul>


    <div style="margin-left:25%;padding:1px 16px;height:1000px;">

        <h2>Am dori sa te cunoastem mai bine</h2>
        <p>Care sunt scopurile tale?</p>
        <p>Ce planuri ai pe viitor?</p>
        <p>Unde iti faci studiile?</p>
        <p>Ce te-a determinat sa aplici la acest internship?</p>

    </div>

</body>

</html>
