<?php require 'traitement.php' ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>TP 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    </head>
    <body>
        <div class="container shadow">
            <div class="row">
                <form method="post" action="" enctype="multipart/form-data">
                    <a href="http://p10/tp2/" class="btn btn-primary">RELOAD</a>
                    <fieldset>
                        <legend class="legend">Formulaire</legend>
                        <table>
                            <tr>
                            <label for="selectedCivility">Civilité <?php echo isset($_POST['submit'])? $stateMsgCivility : ''; ?></label>
                                <td>
                                    <select name="selectedCivility">
                                        <option selected disabled hidden>Sélectionner</option>
                                        <option value="Homme" <?php echo (isset($_POST['submit']) && isset($_POST['selectedCivility']) && $_POST['selectedCivility'] == 'Homme')? 'selected' :''; ?>>Homme</option>
                                        <option value="Femme"<?php echo (isset($_POST['submit']) && isset($_POST['selectedCivility']) && $_POST['selectedCivility'] == 'Femme')? 'selected' :''; ?>>Femme</option>
                                    </select>
                                </td>   
                            </tr>
                            <tr>
                                <td>
                                    <label for="lastname">Nom <?php echo isset($_POST['submit']) ? $stateMsgLastname : ''; ?></label>
                                    <input type="text" name="lastname" value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['lastname']): ''; ?>"/>
                                </td>
                                <td>
                                    <label for="firstname">Prénom <?php echo isset($_POST['submit']) ? $stateMsgFirstname : ''; ?></label>
                                    <input type="text" name="firstname" value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['firstname']): ''; ?>"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="age">Age <?php echo isset($_POST['submit']) ? $stateMsgAge : ''; ?></label>
                                    <input type="text" name="age" value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['age']): ''; ?>"/>
                                </td>
                                <td>
                                    <label for="business">Société <?php echo isset($_POST['submit']) ? $stateMsgBusiness : ''; ?></label>
                                    <input type="text" name="business"  value="<?php echo isset($_POST['submit']) ? htmlspecialchars($_POST['business']) : ''; ?>"/>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <input class="submit" type="submit" name="submit"/>
                </form>
            </div>
            <p><?php echo isset($_POST['submit']) ? $validFormMsg : ''; ?></p>  
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>