<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Einstellungen - E-Mail Adresse</title>
        
        <link rel="shortcut icon" href="/web/favicon.ico">
        
        <link type="text/css" href="/web/css/style.css" rel="stylesheet">
        <link type="text/css" href="/web/css/settings.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script src="/web/js/jquery-ui.min.js"></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="/me">Home</a></li>
                    <li><a href="/settings" class="selected">Einstellungen</a></li>
                </ul>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="container_24">
            <div class="grid_24">
                <div class="settingsAlert">
                    <i class="fa fa-exclamation-triangle fa-5x warning" aria-hidden="true"></i>
                    <p><b>Behalte private Informationen besser für dich!</b><br />Du weißt nie wer am anderen Ende vor dem Computer sitzt.<br/>Sollte dir etwas merkwürdig vorkommen, so melde es einem Mitarbeiter. Wir geben unser bestes damit du einen sicheren Aufenthalt im Hotel genießen kannst, zudem behandeln wir deine Daten natürlich vertrauenswürdig und geben sie nicht an dritte weiter.</p>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="grid_8">
                <div onClick="window.location.href='/settings'" id="navigationTab">
                    <i class="fa fa-cog fa-2x icon" aria-hidden="true"></i>
                    <h3>Allgemeine Einstellungen</h3>
                    <b>... verwalte Allgemeines</b>
                </div>
                <div onClick="window.location.href='/settings/mail'" id="navigationTab" class="selected">
                    <i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i>
                    <h3>E-Mail Adresse</h3>
                    <b>... ändere deine E-Mail</b>
                </div>
                <div onClick="window.location.href='/settings/password'" id="navigationTab">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h3>Passwort</h3>
                    <b>... ändere dein Passwort</b>
                </div>
            </div>
            <div class="grid_16">
                <div id="contentBox">
                    <div class="title">E-Mail Adresse ändern<i class="fa fa-unlock-alt fa-2x" style="float:right;font-size:30px" aria-hidden="true"></i></div>
                    <form method="post">
                        @csrf
                        <div class="png20">
                            <label for="oldMail">Alte E-Mail Adresse:</label>
                            <p class="desc">Bitte gebe deine alte E-Mail Adresse zur Identifizierung deines Accounts ein.</p>
                            <input type="text" id="oldMail" name="oldmail">
                            <br />
                            <br />
                            <div style="border:1px dashed rgba(255, 255, 255, .05);width:100%;"></div>
                            <br />
                            <label for="newMail">Neue E-Mail Adresse:</label>
                            <p class="desc">Bitte gebe deine neue E-Mail Adresse ein.</p>
                            <input type="text" id="newMail" name="newmail">
                            <br />
                            <br />
                            <label for="newMailRepeat">Neue E-Mail Adresse wiederholen:</label>
                            <p class="desc">Bitte gebe die neue E-Mail Adresse erneut ein, um Schreibfehler zu vermeiden.</p>
                            <input type="text" id="newMailRepeat" name="newmailRepeat">
                        </div>
                        <div class="footerBottomBox">
                            <input type="submit" value="Speichern" name="submit">
                        </div>
                    </form>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div> @include('partials.footer')
        @if(Session::has('message'))
        <script>alertify.success('{{Session::get('message')}}');</script>
        @endif
        @if(Session::has('error'))
        <script>alertify.error('{{Session::get('error')}}');</script>
        @endif
