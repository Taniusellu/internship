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
        <li><a class="index.php">Menu</a></li>
        <li><a href="studii.php">Studii</a></li>
        <li><a href="proiecte.php">Proiecte</a></li>
        <li><a href="descriere.php">Descriere</a></li>
        <li><a href="contacte.php">Contacte</a></li>
    </ul>
    <div style="margin-left:25%;padding:1px 16px;height:1000px;">
        <h2>Descrie succind ce studii ai reusit sa obtii>?</h2>
        <h3> Liceu- Liceul Teoretic Stefanesti</h3>
        <h3>Facultate - Informatica Aplicata</h3>

        <p>Am facut liceul in localitatea mea Stefanesti, rnul Floresti. Dupa care, am inceput studiile la Universitatea Tehnica din Moldova, fiind la moment studenta in anul II, la facultatea Informatica Aplicata.</p>
    </div>

</body>

</html>
