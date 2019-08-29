<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Einstellungen - E-Mail Adresse</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
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
                <div onClick="window.location.href='/settings/mail'" id="navigationTab">
                    <i class="fa fa-unlock-alt fa-2x" aria-hidden="true"></i>
                    <h3>E-Mail Adresse</h3>
                    <b>... ändere deine E-Mail</b>
                </div>
                <div onClick="window.location.href='/settings/password'" id="navigationTab" class="selected">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h3>Passwort</h3>
                    <b>... ändere dein Passwort</b>
                </div>
            </div>
            <div class="grid_16">
                <div id="contentBox">
                    <div class="title">Passwort ändern<i class="fa fa-envelope fa-2x" style="float:right;font-size:30px" aria-hidden="true"></i></div>
                        <form method="post">
                            @csrf
                            <div class="png20">
                                <label for="oldPassword">Dein altes Passwort:</label>
                                <p class="desc">Dies benötigen wir, um sicher zu stellen, dass du der Besitzer des Accounts bist.</p>
                                <input type="text" id="oldPassword" name="oldpassword">
                                <br />
                                <br />
                                <div style="border:1px dashed rgba(255, 255, 255, .05);width:100%;"></div>
                                <br />
                                <label for="newPassword">Dein neues Passwort:</label>
                                <p class="desc">Dein neues Passwort sollte wenn möglich mehr als 6 Zeichen beinhalten!.</p>
                                <input type="text" id="newPassword" name="newpassword">
                                <br />
                                <br />
                                <label for="newPasswordRepeat">Neues Passwort wiederholen:</label>
                                <p class="desc">Um die Richtigkeit des neuen Passworts zu überprüfen.</p>
                                <input type="text" id="newPasswordRepeat" name="newpasswordRepeat">
                            </div>
                            <div class="footerBottomBox">
                                <input type="submit" value="Speichern" name="submit">
                            </div>
                        </form>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        @include('partials.footer')
        @if(Session::has('success'))
        <script>alertify.success('{{Session::get('success')}}');</script>
        @endif
        @if(Session::has('error'))
        <script>alertify.error('{{Session::get('error')}}');</script>
        @endif
    