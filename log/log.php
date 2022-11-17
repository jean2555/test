<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Inscription</div>
    <div class="content">
      <form action="database.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom</span>
            <input type="text"  name="name" placeholder="nom" autocomplete="on">
          </div>
          <div class="input-box">
            <span class="details">Prenom</span>
            <input type="text" name="firstname" placeholder="Prenom" autocomplete="on">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" autocomplete="on">
          </div>
          <div class="input-box">
            <span class="details">Numéro</span>
            <input type="text"  name="number" placeholder="numéro"  >
          </div>
        
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="text" placeholder="Mot de passe" name="pass" >
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1"  value="Homme">
          <input type="radio" name="gender" id="dot-2" value="Femme">
          <input type="radio" name="gender" id="dot-3" value="privé">
          <span class="gender-title">Genre</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Homme</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Femme</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Confidentiel</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Enregistrer" name="enregistrer">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
