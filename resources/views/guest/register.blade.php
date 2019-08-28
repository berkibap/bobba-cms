<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Werde jetzt Teil der Community!</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="web/css/register.css" rel="stylesheet">
    </head>
    <body>
    	<div id="main">
            <div class="container_24">
                <a href="" class="logo"></a>
                <div class="textsDetails">
                    <h3>Erstelle deinen eigenen Charakter</h3>
                    <p>Werde <b>jetzt</b> Teil der Community!</p>
                </div>
                <div style="clear:both;margin-bottom:100px"></div>
                <div class="grid_24">
                    <div id="contentBox">
                        @if(Session::has('message'))
                        <div class="alert alert-danger"><?= Session::get('message');?></div>
                        @endif
                        <form method="post">
                            @csrf
                            <div id="boxOne">
                                <label for="username">Benutzername:</label>
                                <input type="text" name="registerUsername" id="username">
                                <p class="details">Sei kreativ, dein Benutzername lässt sich im Nachhinein nicht mehr ändern!</p>
                                <label for="mail">E-Mail Adresse:</label>
                                <input type="text" name="registerMail" id="mail">
                                <p class="details">Deine E-Mail ist wichtig, falls du dein Passwort vergisst!</p>
                                <label for="birthday">Geburtstag:</label>
                                <select for="day" name="registerBirthday" id="birthday" class="birth_day">
                                    <option value="">Tag</option>
                                    <?php for($i = 1; $i <= 31; $i++){ ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <select for="months" name="registerBirthmonth" class="birth_month">
                                    <option value="">Monat</option>
                                    <option value="01">Januar</option>
                                    <option value="02">Februar</option>
                                    <option value="03">März</option>
                                    <option value="04">April</option>
                                    <option value="05">Mai</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Dezember</option>
                                </select>
                                <select for="year" name="registerBirthyear" class="birth_year">
                                    <option value="">Jahr</option>
                                    <?php for($i = date('Y') - 13; $i > 1960; $i--) { ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                                <div class="clear"></div>
                                <a href="" class="cancelButton">Abbrechen</a>
                            </div>
                            <div id="boxTwo">
                                <label for="password">Passwort:</label>
                                <input type="text" name="registerPassword" id="password">
                                <p class="details">Dein Passwort ist der Schlüssel zu deinem Account, behalte es für Dich!</p>
                                <label for="passwordRepeat">Passwort wiederholen:</label>
                                <input type="text" name="registerPasswordRepeat" id="passwordRepeat">
                                <p class="details">Wiederhole dein Passwort um Rechtschreibfehler zu vermeiden!</p>
                                <input type="checkbox" name="agb" id="agb">
                                <label for="agb" class="agb">Ich akzeptiere die <a href="" target="_blank">Nutzungsbedingungen</a></label>
                                <input type="submit" class="registerButton" value="Fertig">
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="application/javascript" src="web/js/alertify.js"></script>
    <script type="application/javascript" src="web/js/alertify.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</html>