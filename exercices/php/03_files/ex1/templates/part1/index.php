<?php

define('CSV_SEPARATOR', ';');

function createUser($email, $password)
{
    return [
        'email' => $email,
        'password' => $password,
    ];
}

function extractUserFromPost($post)
{
    return createUser(
        $post['email'] ?? '',
        $post['password'] ?? ''
    );
}

function isValidUser($user)
{
    if ($user['email'] == '') {
        return false;
    }
    if ($user['password'] == '') {
        return false;
    }
    return true;
}

$message = '';
$postedUser = extractUserFromPost($_POST);

if (isValidUser($postedUser)) { // formulaire posté avec toutes les données
    
   // ajouter le code ici
    
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>New user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    
html,
body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

    </style>
</head>
<body class="text-center">

    <main class="form-signin w-100 m-auto">
    
      <form method="post" action="#">
      
        <?php if ($message) { ?>
          <p><?php echo $message; ?></p>
        <?php } ?>
        
        <div class="form-floating">
          <input
            type="email" 
            name="email" 
            value="<?php echo $postedUser['email']; ?>" 
            class="form-control" 
            id="email-id" 
            placeholder="name@example.com"
            >
          <label for="email-id">Email address</label>
        </div>
        <div class="form-floating">
          <input 
            type="password" 
            name="password" 
            value="<?php echo $postedUser['password']; ?>" 
            class="form-control" 
            id="password-id" 
            placeholder="Password"
            >
          <label for="password-id">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

      </form>
      
    </main>

<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
-->

</body>
</html>