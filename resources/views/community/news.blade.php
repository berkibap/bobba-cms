<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: News</title>
        
        <link rel="shortcut icon" href="/web/favicon.ico">
        
        <link type="text/css" href="/web/css/style.css" rel="stylesheet">
        <link type="text/css" href="/web/css/news.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="/community">Community</a></li>
                    <li><a href="/community/news" class="selected">News</a></li>
                    <li><a href="/community/staff">Mitarbeiter</a></li>
                    <li><a href="/community/premium">Premium</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <?php DB::update('update news set `reads` = `reads` +1  where id = ?', [$current->id]); ?>
        <div class="container_24">
            <div class="grid_7">
                <h2 class="title">News</h2>
                <ul class="news-archive">
                @foreach(\App\Http\Controllers\CommunityController::getNews() as $news) 
                <li><a href="/community/news/{{$news->id}}">{{$news->title }}</a></li>
                @endforeach

                </ul>
            </div>
            <div class="grid_17">
                <div id="contentBox">
                    <div class="title"><?= $current->title; ?><div style="float:right"><?= $current->date; ?></div></div>
                    <div class="png15">
                    <?= $current->long; ?>    
                    </div>
                    <div class="clear"></div>
                    <div class="footerBottomBox">
                        <div class="headAvatar" style="background-image:url(http://habbo.com/habbo-imaging/avatarimage?figure=<?= $user->look; ?>&headonly=1)"></div>
                        <span>Geschrieben von:</span>
                        <div class="newsAuthor"><?= $user->username; ?></div>
                        <div class="voting">
                            <span>
                                <i class="fa fa-eye fa-2x" style="margin-left: -35px "></i> <p style="margin-top:-22.5px;">Viewed by <b><?= $current->reads; ?></b> Bobba(s)</p>
                            </span>
                        </div>
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