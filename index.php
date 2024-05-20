<html>
    <title>
        Login
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <?php
        if(isset($_GET['pesan'])){
            if ($_GET['pesan']=="gagal"){
                echo "<div>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>
        <center>
            <div class="kotak_login">
                <p class="tulisan_login">Silahkan Login</p>
                <form action="cek_login.php" method="post">
                    <label>Username</label>
                    <input type="text" class="form_login" name="username" placeholder="Username" required>
                    <br>
                    <label>Password</label>
                    <input type="password" class="form_login" name="password" placeholder="Password" required>
                    <br>
                    <input class="but" type="submit" class="tombol_login" value="Login">

                    <br/>
			<br/>
			<center>
				<a class="link" href="google.com">Back</a>
			</center>
                </form>
            </div>
    </center>
    </body>
    <style>
        body{
            font-family: sans-serif;
	background: rgba(218,211,218,0.45);
        }
        
        .but{
	background: whitesmoke;
	color: black;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
    
}

        
        .log {
            margin-bottom: 10px;
        }

        form{
            box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
        }
        .link{
            color: black;
	text-decoration: none;
	font-size: 10pt;
        }

        label{
            font-size: 11pt;
            font-family:'Lucida Sans' ;
        }
        </style>
</html>