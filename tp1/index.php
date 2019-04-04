<?php require 'traitement.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TP 1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container shadow">
            <div class="row">
                <form method="post" action="" enctype="multipart/form-data">
                    <a href="http://p10/tp1/" class="btn btn-primary">RELOAD</a>
                    <fieldset>
                        <legend class="legend">Formulaire</legend>
                        <table>
                            <tr>
                                <td>
                                    <label for="lastname">Nom <?php echo  isset($_POST['submit'])?  $stateMsgLastname : '' ; ?></label>
                                    <input type="text" name="lastname" value="<?php echo isset($_POST['submit'])?  $resultMsgLastname : '' ; ?>"/>
                                </td>
                                <td>
                                    <label for="firstname">Prénom <?php echo  isset($_POST['submit'])?  $stateMsgFirstname : '' ; ?></label>
                                    <input type="text" name="firstname" value="<?php echo isset($_POST['submit'])?  $resultMsgFirstname : '' ; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="dateOfBirth">Date de naissance <?php echo  isset($_POST['submit'])?  $stateMsgDateOfBirth : '' ; ?></label>
                                    <input type="text" name="dateOfBirth" value="<?php echo isset($_POST['submit'])?  $resultMsgDateOfBirth : '' ; ?>"/>
                                </td>
                                <td>
                                    <label for="countryOfBirth">Pays de naissance <?php echo  isset($_POST['submit'])?  $stateMsgCountryOfBirth : '' ; ?></label>
                                    <input type="text" name="countryOfBirth"  value="<?php echo isset($_POST['submit'])?  $resultMsgCountryOfBirth : '' ; ?>"/>
                                </td>
                            </tr>
                            <td>
                                <label for="nationality">Nationalité <?php echo  isset($_POST['submit'])?  $stateMsgNationality : '' ; ?></label>
                                <input type="text" name="nationality" value="<?php echo isset($_POST['submit'])?  $resultMsgNationality : '' ; ?>"/>
                            </td>
                            <tr>
                                <td>
                                    <label for="adress">Adresse <?php echo  isset($_POST['submit'])?  $stateMsgAdress : '' ; ?></label>
                                    <input type="text" name="adress" value="<?php echo isset($_POST['submit'])?  $resultMsgAdress : '' ; ?>"/>
                                </td>
                            </tr>
                            <td>
                                <label for="email">Email <?php echo  isset($_POST['submit'])?  $stateMsgEmail : '' ; ?></label>
                                <input type="text" name="email" value="<?php echo isset($_POST['submit'])?  $resultMsgEmail : '' ; ?>"/>
                            </td>
                            <td>
                                <label for="phone">Téléphone <?php echo  isset($_POST['submit'])?  $stateMsgPhone : '' ; ?></label>
                                <input type="text" name="phone" value="<?php echo isset($_POST['submit'])?  $resultMsgPhone : '' ; ?>"/>
                            </td>
                        </table>
                        <label for="qualifications">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) <?php echo  isset($_POST['submit'])?  $stateMsgQualifications : '' ; ?></label>
                        <textarea cols="60" rows="4" name="qualifications"><?php echo isset($_POST['submit'])?  $resultMsgQualifications : '' ; ?></textarea>
                        <table>
                            <tr>
                                <td>                               
                                    <label for="poleEmploiNumber">Numéro Pole emploi <?php echo  isset($_POST['submit'])?  $stateMsgPoleEmploiNumber : '' ; ?></label>
                                    <input type="text" name="poleEmploiNumber" value="<?php echo isset($_POST['submit'])?  $resultMsgPoleEmploiNumber : '' ; ?>"/>
                                </td>
                                <td>                               
                                    <label for="badgeNumber">Numéro badge <?php echo  isset($_POST['submit'])?  $stateMsgBadgeNumber : '' ; ?></label>
                                    <input type="text" name="badgeNumber" value="<?php echo isset($_POST['submit'])?  $resultMsgBadgeNumber : '' ; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>                               
                                    <label for="codecAdemyLink">Liens codecademy <?php echo  isset($_POST['submit'])?  $stateMsgCodecAdemyLink : '' ; ?></label>
                                    <input type="text" name="codecAdemyLink" value="<?php echo isset($_POST['submit'])?  $resultMsgCodecAdemyLink : '' ; ?>"/>
                                </td>
                            <tr>
                        </table>
                        <label for="hereos">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi? <?php echo  isset($_POST['submit'])?  $stateMsgHereos : '' ; ?></label>
                        <textarea cols="60" rows="4" name="hereos"><?php echo isset($_POST['submit'])?  $resultMsgHereos : '' ; ?></textarea>
                        <label for="hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) <?php echo  isset($_POST['submit'])?  $stateMsgHacks : '' ; ?></label>
                        <textarea cols="70" rows="5" name="hacks"><?php echo isset($_POST['submit'])?  $resultMsgHacks : '' ; ?></textarea>
                        <label for="experiences">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? <?php echo  isset($_POST['submit'])?  $stateMsgExperiences : '' ; ?></label>
                        <textarea cols="80" rows="6" name="experiences"><?php echo isset($_POST['submit'])?  $resultMsgExperiences : '' ; ?></textarea>
                    </fieldset>
                    <input class="submit" type="submit" name="submit"/>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>