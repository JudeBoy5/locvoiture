<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Validator</title>
	<!-- <link rel="stylesheet" href="../assets/css/style.css">re -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap');

:root {
    --color-primary: #3498DB;
    --color-error: #e74c3c;
    --color-success: #2ecc71;
    --color-background: #F3F4F6;
    --color-text: #333;
    --color-fun: #FF6F61;
    --color-hover: #FF856D;
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    /* background-color: var(--color-background); */
    background-image: url('../assets/img/ap.jpg'); 
    background-size:cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 10px;
    /* filter:blur(1px); */
}

.container {
    /* background-color: #fff; */
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 800px;
    padding: 20px;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: var(--color-background);
    font-size: 30px;
    font-weight: bold;
}

.form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    flex-direction: row;
}

.form-section {
    flex: 1 1 calc(50% - 10px);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-control {
    position: relative;
}

.form-control label {
    color: var(--color-text);
    display: block;
    margin-bottom: 5px;
    font-size: 16px;
    font-weight: bold;

}

.form-control input {
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 100%;
    padding: 10px;
    font-size: 16px;
    transition: border-color 0.3s;
}

.form-control input:focus {
    border-color: var(--color-primary);
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

.form-control.success input {
    border-color: var(--color-success);
}

.form-control.error input {
    border-color: var(--color-error);
}

.form-control small {
    color: var(--color-error);
    visibility: hidden;
    font-size: 12px;
    margin-top: 5px;
}

.form-control.error small {
    visibility: visible;
}

button {
    cursor: pointer;
    background-color: var(--color-background);
    border: none;
    border-radius: 4px;
    color: black;
    font-size: 18px;
    padding: 12px;
    margin: 20px 0;
    transition: background-color 0.3s;
    width: 100%;
}

button:hover {
    background-color: var(--color-primary);
}

.link {
    text-align: center;
    /* margin-top: 10px; */
    font-size: 20px;
}

.link a {
    text-align: center;
    color: var(--color-primary);
    text-decoration: none;
    font-weight: bold;
}

.link a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .form {
        flex-direction: column;
    }

    .form-section {
        flex: 1 1 100%;
    }

    .container {
        padding: 15px;
    }

    button {
        font-size: 14px;
        padding: 10px;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 18px;
    }

    .form-control label {
        font-size: 12px;
    }

    .form-control input {
        font-size: 14px;
    }
}



	
    </style>
 
</head>
<body>
	<div class="container">
		<form id="form" class="form" action="http://localhost/Php2/locVoiture/" method="POST">
			<h2>Inscription</h2>
			<div class="form-control">
				<label for="username">  Prenom </label>
				<input type="text" id="username" placeholder="Enter username" name="prenomclient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Nom </label>
				<input type="text" id="username" placeholder="Enter name" name="nomclient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Adresse </label>
				<input type="text" id="username" placeholder="Enter your adress" name="adresseclient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Tel </label>
				<input type="text" id="username" placeholder="Enter your phone number" name="telclient">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Email </label>
				<input type="email" id="username" placeholder="Enter email" name="emailclient">
				<small>Validation Error !</small>
			</div>
            <select class="form-select" aria-label="Default select example" name="genreclient">
                <option selected>Genre</option>
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
            <div class="form-control">
				<label for="username">  NIN </label>
				<input type="text" id="username" placeholder="Enter NIN" name="NIN">
				<small>Validation Error !</small>
			</div>
            <div class="form-control">
				<label for="username">  Login </label>
				<input type="text" id="username" placeholder="Enter login" name="login">
				<small>Validation Error !</small>
			</div>
			<div class="form-control">
				<label for="password">Mot de Passe</label>
				<input type="password" id="password" placeholder="Enter password" name="password">
				<small>Validation Error !</small>
			</div>
			<button type="submit" name="inscrire">S'Inscrire</button><br><br>
			<a href="http://localhost/Php2/locVoiture/"> Se connecter</a>
		</form>

	</div>

</body>
</html> 
