<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: Mitarbeiter</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="/web/css/style.css" rel="stylesheet">
        <link type="text/css" href="/web/css/staffs.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
        
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="/web/js/alertify.js"></script>
        <script src="/web/js/alertify.min.js"></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="/community">Community</a></li>
                    <li><a href="/community/news">News</a></li>
                    <li><a href="/community/staff" class="selected">Mitarbeiter</a></li>
                    <li><a href="/community/premium">Premium</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_24">
            <div class="grid_15">
                <h2 class="title">Management</h2>
                <div id="contentBox">
                    <div class="png20">
                        @foreach(\App\Http\Controllers\CommunityController::getStaff('7-5') as $staff) 
                        <div class="detailsBox">
                                <div class="staffBox bg_rank_5-7 <?= $staff->online == 1 ? 'online' : null; ?>">
                                    <div class="badge rank_<?=$staff->rank;?>"></div>
                                    <div class="avatar" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=<?=$staff->look; ?>&gesture=sml&size=b)"></div>
                                </div>
                                <div class="username"><?= $staff->username;?></div>
                                <div class="motto"><?= $staff->motto; ?></div>
                                <div class="work"><?= $staff->job; ?></div>
                            </div>
                        @endforeach
                        
                    </div>
                    <div class="clear"></div>
                </div>
                <h2 class="title">Moderation</h2>
                <div id="contentBox">
                    <div class="png20">
                            @foreach(\App\Http\Controllers\CommunityController::getStaff('4-4') as $staff) 
                            @if($staff->username)
                            <div class="detailsBox">
                                    <div class="staffBox bg_rank_3 <?= $staff->online == 1 ? 'online' : null; ?>">
                                        <div class="badge rank_<?=$staff->rank;?>"></div>
                                        <div class="avatar" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=<?=$staff->look; ?>&gesture=sml&size=b)"></div>
                                    </div>
                                    <div class="username"><?= $staff->username;?></div>
                                    <div class="motto"><?= $staff->motto; ?></div>
                                    <div class="work"><?= $staff->job; ?></div>
                                </div>
                                @else 
                                <div class="detailsBox">
                                        <p style="margin: 0 auto; color: white;">We don't have any staff in this position yet!</p>
                                    </div>
                                @endif
                            @endforeach
                            
                    </div>
                    <div class="clear"></div>
                </div>
                <h2 class="title">Helfer</h2>
                <div id="contentBox">
                    <div class="png20">
                            @foreach(\App\Http\Controllers\CommunityController::getStaff('3-3') as $staff) 
                            @if($staff->username)
                            <div class="detailsBox">
                                    <div class="staffBox bg_rank_3 <?= $staff->online == 1 ? 'online' : null; ?>">
                                        <div class="badge rank_<?=$staff->rank;?>"></div>
                                        <div class="avatar" style="background-image:url(https://www.habbo.de/habbo-imaging/avatarimage?figure=<?=$staff->look; ?>&gesture=sml&size=b)"></div>
                                    </div>
                                    <div class="username"><?= $staff->username;?></div>
                                    <div class="motto"><?= $staff->motto; ?></div>
                                    <div class="work"><?= $staff->job; ?></div>
                                </div>
                                @else 
                                <div class="detailsBox">
                                        <p style="margin: 0 auto; color: white;">We don't have any staff in this position yet!</p>
                                    </div>
                                @endif
                            @endforeach
                            
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_9">
                <div id="contentBox" class="infoBox">
                    <div class="title small">Information</div>
                    <div class="png15">
                        Die Bobbas die auf dieser Seite aufgelistet sind, zählen zum Team des Bobba Hotels.
                        <img src="/web/img/staffs/avatarimage.png" align="right">Sie sorgen dafür, dass der Alltag im Hotel reibungslos abläuft. Neben Auskunft und Hilfe, veranstalten einige von ihnen auch Events, damit auch die Langeweile verschwindet. Solltest du Fragen haben, so spreche einen dieser Bobbas im Client an!
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-content">
            <div class="container_24">
                Copyright &copy; <?php echo date('Y'); ?> Bobba Hotel - All rights reserved.<br />
                Design by <b>Sonay</b> for <b>Luminia</b>
            </div>
        </div>
    </body>
</html>