<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Einstellungen</title>
        
        <link rel="shortcut icon" href="/web/favicon.ico">
        
        <link type="text/css" href="/web/css/style.css" rel="stylesheet">
        <link type="text/css" href="/web/css/settings.css" rel="stylesheet">
        <link type="text/css" href="/web/css/jquery-ui.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        <script src="/web/js/jquery-ui.min.js"></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="me.php">Home</a></li>
                    <li><a href="settings.php" class="selected">Einstellungen</a></li>
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
                <div onClick="window.location.href='/settings'" id="navigationTab" class="selected">
                    <i class="fa fa-cog fa-2x icon" aria-hidden="true"></i>
                    <h3>Allgemeine Einstellungen</h3>
                    <b>... verwalte Allgemeines</b>
                </div>
                <div onClick="window.location.href='/settings/mail'" id="navigationTab">
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
            <script>
                $(function() {
                    $( "#radioFR" ).buttonset();
                    $( "#radioOS" ).buttonset();
                    $( "#radioVE" ).buttonset();
                    $( "#radioTR" ).buttonset();
                });
            </script>
            <div class="grid_16">
                <div id="contentBox">
                    <form method="post">
                        @csrf
                        <div class="title">Allgemeine Einstellungen<i class="fa fa-cog fa-2x" style="float:right;font-size:30px" aria-hidden="true"></i></div>
                        <div class="png20">
                            <label for="mottoUpdate">Motto:</label>
                            <p class="desc">Dein Motto wird im Hotel unter deinem Avatar angezeigt.</p>
                            <input type="text" name="motto" value="{{session('motto')}}">
                            <br /><br />
                            <label>Freundschaftsanfragen</label>
                            <p class="desc">Dürfen andere Bobbas dir eine Freundschaftsanfrage schicken?</p>
                            <div id="radioFR" class="buttonSet">
                                <input type="radio"  id="radioFR1" {{ \App\UserSettings::where('user_id', session('id'))->get('block_friendrequests')->first()->block_friendrequests == '1' ? 'checked' : null }} value="1" name="AllowFriendRequests"><label for="radioFR1">Ja</label>
                                <input type="radio" id="radioFR3" {{ \App\UserSettings::where('user_id', session('id'))->get('block_friendrequests')->first()->block_friendrequests == '0' ? 'checked' : null }} value="0" name="AllowFriendRequests" ><label for="radioFR3">Nein</label>
                            </div>
                            <br />
                            <label>Tauschen</label>
                            <p class="desc">Dürfen andere Bobbasmit dir Tauschen?</p>
                            <div id="radioTR" class="buttonSet">
                                <input type="radio" id="radioTR1" name="TRADE" {{ \App\UserSettings::where('user_id', session('id'))->get('can_trade')->first()->can_trade == '1' ? 'checked' : null}} value="1"><label for="radioTR1" >Ja</label>
                                <input type="radio" id="radioTR3" name="TRADE" {{ \App\UserSettings::where('user_id', session('id'))->get('can_trade')->first()->can_trade == '0' ? 'checked' : null}} value="0"><label for="radioTR3" >Nein</label>
                            </div>
                            <br />
                        </div>
                        <div class="footerBottomBox">
                            <input type="submit" value="Speichern" name="submit">
                        </div>
                    </form>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
        <div id="footer-content">
            <div class="container_24">
                Copyright &copy; <?php echo date('Y'); ?> Bobba Hotel - All rights reserved.<br />
                Design by <b>Sonay</b> for <b>Luminia</b>
            </div>
        </div>
        @include('partials.footer')
         @if(Session::has('message'))
    <script>alertify.success('{{Session::get('message')}}');</script>
    @endif
   