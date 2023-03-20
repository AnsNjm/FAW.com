<?php
include "link1.php";
?>
<title>Se Connecter</title>
<?php
include "header2.php";
?>


    <!-- LOGIN-->
    <center><div class="login">
    <h1  class="label" style="width: auto; font-family: 'Roboto Mono', monospace; padding-top: 10px; padding-bottom: 10px">Se Connecter</h1>
    <form action="includes/login.inc.php" method="POST">
        <table class="table_login" >
            <tr>
    <td><label class="label" for="Email">Email: </label></td>
    <td><input type="email" name="email" required="required" ></td>
            </tr>
            <tr>
    <td><label style="display: inline;" class="label" for="Password">Mot de passe: </label></td>
    <td><input type="password" name="password" required="required" ></td>
    </tr>
        </table>
    <button type="submit" name="submit" id="seconnecter">Se Connecter</button>
    <hr style="margin-top: 30px;width: 550px;">
    <h4 class="center" style="color: #fcb400; text-decoration: underline; margin-bottom: 15px;">Vous n'avez pas un compte?</h4>
    <div style="margin-bottom: 30px;"><a style="color: rgb(233, 220, 41);" class="center" href="typeinscription.php"><span id="inscrivez">Inscrivez-vous !</span> </a></div>
    </div></center>
</form>



    <!-- CONTACT-->
    <footer>
        <br>
       <div class="footer">
        <h3 style="text-decoration: underline; margin-left: 40px;">Contactez-nous</h3>
        <ul type="circle">
            <li class="footer"><span class="material-symbols-outlined">
                alternate_email
                </span> 0612345678</li>
            <li class="footer"><a style="color:  #516286;" href="mail@exemple.com"><span class="sub" ><span class=" material-symbols-outlined">
                call 
                </span> exemple@gmail.com</span> </a></li>
        </ul>
       </div>
    </footer>
</body>
</html>