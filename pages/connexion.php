
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color:rgb(208, 17, 17); */
            background-image: url('assets/img/ap.jpg'); 
            background-size:cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .login-container input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        @media (max-width: 400px) {
            .login-container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Connexion</h2>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required>
        <br>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <br><br>
        <input type="submit" name="connexion"><br><br>
        <a href="http://localhost/Php2/locVoiture/pages/inscription.php"> S'inscrire</a>
    </form>
</div>

</body>
</html>
