<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Community</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="/web/css/style.css" rel="stylesheet">
        <link type="text/css" href="/web/css/community.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="/community">Community</a></li>
                    <li><a href="/community/news">News</a></li>
                    <li><a href="/community/staff">Mitarbeiter</a></li>
                    <li><a href="/community/premium" class="selected">Premium</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
<div class="container_24">
    <div class="grid_24">
        <div id="contentBox" class="premiumbox">
            <div class="title">Premium</div>
			<img src="http://54.36.216.188/web/img/premium_header_image.png">
            <div class="png15">
                <h3>Werde Premium Habbo!</h3>
                <p>Du bist auf der Suche nach einer ultimativen Erweiterung für deinen Habbo? Eine Premium Mitgliedschaft kostet 115 Diamanten, welche du durch Aktivitat verdienst.</p>

                <div class="grid_8">
                    <div class="contentBoxSmall">
                        <div class="png15">
                            <div class="titlesmall">Warum sollte ich Premium Mitglied werden?</div>
                            <p>Eine lebenslangliche Mitgliedschaft versüßt dir den Aufenhalt im Habbo Hotel. Zudem besizt du Vorteile gegenüber anderen Nutzern.</p>
                            <ul>
                                <li>randvoller Premium Katalog</li>
                                <li>keine kostenpflichtige Bindung</li>
                                <li>500 Taler & 2500 Duckets zum Kauf</li>
                                <li>neue Kommandos wie :faceless, :push, :pull, :fastwalk, :moonwalk, :mimic und mehr</li>
                            </ul>
                        </div>
                    </div>
                </div>
<style>
input[type=submit] {
    background: #27ae60;
    padding: 10px 20px;
    border: none;
    outline: none;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    color: #fff;
    font: 400 14px 'Roboto', sans-serif;
    box-shadow: 0 2px 1px rgba(0, 0, 0, .1);
    cursor: pointer;
    transition: background .3s;
    position: relative;
}
</style>
                <div class="grid_15">
                    <div class="contentBoxSmall">
                        <div class="png15">
                            <div class="titlesmall">Habbo Premium!</div>
                            <p>Lass dir besondere Vorteile gegenuber anderen Habbos nicht entgehen und werde ein Habbo Premium Mitglied!</p>
                            <p>Um zu bezahlen musst du mindestens 115 Diamanten besitzen.</p>
                            <p><b>Dein Status:</b> <span style="color: {{\App\User::where('id', session('id'))->get('rank')->first()->rank >= 2 ? '#27a850' : '#ea0011'}};">Du bist {{\App\User::where('id', session('id'))->get('rank')->first()->rank >= 2 ? '' : 'kein'}} Premium-Mitglied</span></p>
                            <p><b>Du bist im Besitz von <span style="color: #37C9EA;">0</span> Diamanten.</b></p>

                            <form action="" method="post">
                                @csrf
                                <p class="align-right"><input type="submit" value="Kaufen" name="buy_premium"></p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div style="clear:both"></div>
</div>@include('partials.footer')
    @if(Session::has('message'))
    <script>alertify.success('You\'ve bought premium successfully!');</script>
    @elseif(Session::has('error'))
    <script>alertify.error('Insufficent Diamonds!');</script>
    @endif