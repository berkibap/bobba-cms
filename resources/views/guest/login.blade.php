<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: World Connected</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="web/css/frontpage.css" rel="stylesheet">
    </head>
    <body>
    	<div id="main">
            <div class="container_24">
                <div class="logo"></div>
                <div class="textsDetails">
                    <h3>World Connected</h3>
                    <p>Es sind gerade <b>1337</b> Bobbas online</p>
                </div>
                <div id="contentBox">
                    <div class="padding">
                        <div class="loginPosition">
                            <h2>Anmelden</h2>
                            <form action="" method="post">
                                @csrf
                                @if (Session::has('message'))
                                    <div class="alert alert-danger"><?= Session::get('message');?></div>
                                @endif
                                <label for="login-username">Benutzername:</label>
                                <input type="text" id="login-username" name="username">
                                <label for="login-password">Passwort:</label>
                                <input type="text" id="login-password" name="password" style="margin-bottom:5px">
                                <a href="" class="sub-link">Passwort vergessen?</a>

                                <input type="submit" value="Einloggen">
                            </form>
                        </div>
                    </div>
                    <div class="hotelview">
                        <div class="overlay">
                            <div class="bigAvatar" style="background-image:url(http://hubba.cc/hubba-imaging/avatarimage?figure=hd-190-1391.lg-3023-1429.fa-1201-63.sh-295-1408.ca-3187-96.hr-3278-39-40.ch-3030-1408.wa-3211-63-1408&gesture=sml&size=l&direction=4&head_direction=3&action=wav)">
                            </div>
                            <div class="avatarShadow"></div>
                            <div class="messages">
                                <h2>Willkommen im Bobba Hotel</h2>
                                <p>Bobba Hotel ist eine virtuelle Welt wo du deinen eigenen Charakter erstellen kannst, deine eigenen Räume erstellen kannst und neue sowie alte Freunde wieder finden kannst.</p>
                                <a href="register.php" class="registerButton">Jetzt kostenlos registrieren</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div id="threeBoxes">
                    <div class="infoImages" style="background-image:url(web/img/frontpage/credits.png)"></div>
                    <p style="margin-top:20px">Taler sind völlig kostenlos und können durch deine Aktivität verdient werden.</p>
                </div>
                <div id="threeBoxes">
                    <div class="infoImages" style="background-image:url(web/img/frontpage/create.png)"></div>
                    <p style="margin-top:12px">Erstelle deinen eigenen Raum und zusätzlich mit dem Bodenlayout-Editor bearbeiten.</p>
                </div>
                <div id="threeBoxes">
                    <div class="infoImages"  style="background-image:url(web/img/frontpage/community.png)"></div>
                    <p style="margin-top:12px">Bei den Events unserer Mitarbeiter kannst du immer wieder tolle Preise gewinnen!</p>
                </div>
                <div style="clear:both"></div>
                <div id="footer-content">
                    Copyright &copy; <?php echo date('Y'); ?> Bobba Hotel - All rights reserved.<br />
                    Design by <b>Sonay</b> for <b>Luminia</b>
                </div>
            </div>
        </div>
    </body>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="application/javascript" src="web/js/alertify.js"></script>
    <script type="application/javascript" src="web/js/alertify.min.js"></script>
    <script>alertify.success('FEHLER');</script>
</html>