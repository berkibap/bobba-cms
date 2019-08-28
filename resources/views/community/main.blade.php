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
                    <li><a href="/community" class="selected">Community</a></li>
                    <li><a href="/community/news">News</a></li>
                    <li><a href="/community/staff">Mitarbeiter</a></li>
                    <li><a href="/community/premium">Premium</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_24">
            <script type="text/javascript" src="web/js/newsslider.js"></script>
            <div class="grid_12">
                <div id="newsSlides">
                    @foreach(\App\Http\Controllers\CommunityController::getNews() as $news)
                    <div class="newsSlide" style="background-image:url({{$news->image}});">
                        <div class="title">{{$news->title}}</div>
                        <div class="desc">{{$news->short}}</div>
                        <div class="darkBox">
                            <a href="" class="readMore" style="float:right;margin-right:10px;margin-top:10px">Weiterlesen</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="grid_12">
                <div id="contentBox" style="height:240px">
                    <div class="title small">Beliebte Räume</div>
                    <ul id="hot-rooms">
                       @foreach(\App\Http\Controllers\CommunityController::getRandomRooms() as $room) 
                       @php
                            if($room->users == 0) {
                                $icon = 'room_icon_1';
                            }
                           elseif($room->users_max == $room->users) {
                                $icon = 'room_icon_5';
                           } elseif($room->users_max - $room->users > 5) {
                                $icon = 'room_icon_4';
                           }
                           elseif($room->users_max - $room->users >  10) {
                                $icon = 'room_icon_4';
                           }
                           elseif($room->users_max - $room->users > 15) {
                                $icon = 'room_icon_3';
                           }
                           elseif($room->users_max - $room->users > 20) {
                                $icon = 'room_icon_2';
                           } else {
                               $icon = 'room_icon_1';
                           }
                           
                       @endphp
                       <li>
                        <div class="image {{$icon}}"></div>
                        <div class="details">
                            <div class="room-title">{{$room->name}}</div>
                            <div class="room-desc">{{substr($room->desc, 0, 39) }}</div>
                            <div class="likeCount">{{$room->score}}</div>
                            <a onClick="" class="like"></a>
                        </div>
                    </li>
                       @endforeach
                    </ul>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="grid_7">
                <div id="contentBox" style="height:260px">
                    <div class="title small">Facebook</div>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbobba.biz&tabs&width=270&height=260&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=252029178316060" width="270" height="260" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
            <div class="grid_10">
                <div id="contentBox" style="height:260px">
                    <div class="title small">Bobba des Monats</div>
                    <div class="png20">
                        <div class="bdm">
                            <h2><b>Hört, hört...</b></h2>
                            <p>Der neue Bobba des Monats ist <b>{{ \App\Http\Controllers\CommunityController::getUotw()->username }}</b>!<br />Einen Monat lang wird dieser Bobba auf<br />dieser Seite angezeigt.<br /><br />Wir bedanken uns für deine treue!</p>
                            <div class="plate">
                                <div class="plateAvatar" style="background-image:url(http://habbo.com/habbo-imaging/avatarimage?figure={{ \App\Http\Controllers\CommunityController::getUotw()->look }}&gesture=sml&size=b&direction=4&head_direction=3)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid_7">
                <div id="contentBox" style="height:260px">
                    <div class="title small">Bobba Updates</div>
                    <ul class="hotelUpdates">
                       @foreach(\App\Http\Controllers\CommunityController::getUpdates() as $update) 
                       <li>
                        {{$update->text}}
                    </li>
                    
                       @endforeach
                       
                    </ul>
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