<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: {{session('username') }}</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="web/css/style.css" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    </head>
    <body>
        @include('partials/header')
        <div class="container_24">
            <div class="grid_24">
                <ul id="sub-menu">
                    <li><a href="/me" class="selected">Home</a></li>
                    <li><a href="/settings">Einstellungen</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container_24">
            <div class="grid_24">
                <h2 class="title">Mein Charakter</h2>
                <div class="meContentBox">
                    <div class="avatar" style="background-image:url(//habbo.de/habbo-imaging/avatarimage?figure={{ \App\User::where('id', session('id'))->get('look')->first()->look}}&gesture=sml&direction=2&size=l);"></div>
                    <div class="userDetails">
                    <h2>{{ session('username') }}</h2>
                    <div class="motto">{{ session('motto') }}</div>
                        <div class="allGrayBox">
                            <div class="grayBox">
                                <div class="icon">
                                    <div class="diamonds"></div>
                                </div>
                            <div class="count diamonds">{{ \App\User::where('id', session('id'))->get('points')->first()->points }}</div>
                            </div>
                            <div class="grayBox">
                                <div class="icon">
                                    <div class="credits"></div>
                                </div>
                                <div class="count credits">{{ \App\User::where('id', session('id'))->get('credits')->first()->credits }}</div>
                            </div>
                            <div class="grayBox">
                                <div class="icon">
                                    <div class="duckets"></div>
                                </div>
                                <div class="count duckets">{{ \App\User::where('id', session('id'))->get('pixels')->first()->pixels }}</div>
                            </div>
                        </div>
                    </div>
                    <a href="" target="_blank" class="checkIn">Ab ins Hotel</a>
                </div>
            </div>
            <div style="clear:both"></div>
            <script type="text/javascript" src="web/js/newsslider.js"></script>
            <div class="grid_12">
                <h2 class="title">News</h2>
                <div id="newsSlides">
                        @foreach (\App\Http\Controllers\MeController::getNews() as $news)
                        <div class="newsSlide" style="background-image:url({{$news->image}});">
                        <div class="title">{{ $news->title }}</div>
                        <div class="desc">{{  $news->short }} </div>
                                <div class="darkBox">
                                    <a href="/community/news/{{$news->id}}" class="readMore" style="float:right;margin-right:10px;margin-top:10px">Weiterlesen</a>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
            <div class="grid_12">
                <h2 class="title">Hot-Campaigns</h2>
                <div id="contentBox">
                    <ul class="hotcampaigns">
                       @foreach (\App\Http\Controllers\MeController::getCampaigns() as $campaign)
                       <li>
                            <a href="#"><div class="hotcampaigns-image" style="background-image:url(https://habboo-a.akamaihd.net/web_images/habbo-web-articles/lpromo_ny2016.png);"></div></a>
                       <div class="hotcampaigns-title">{{ $campaign->title}}</div>
                            <p class="hotcampaigns-desc">
                                {{ substr($campaign->desc, 0, 40)}}
                            </p>
                        <a href="#" class="hotcampaigns-readMore">Mehr erfahren</a>
                        </li>
                       @endforeach
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_15">
                <div id="contentBox"style="height:230px;">
                    <div class="png20">
                        <img src="web/img/pakete.png" align="right" select="none">
                        <h3>Beta-Phase</h3>
                        Das Bobba Hotel befindet sich derzeit noch teilweise in der Beta-Phase.<br> Um diese erfolgreich abschließen<br>zu können, benötigen wir jederzeit deine Hilfe, die mit verschiedensten Loben/Gegenleistungen<br>ausgezahlt wird. Wir bitten dich darum, uns jeden technisch vorzuweisenden Fehler zu<br>überliefern, um diese beheben zu können.
                    </div>
                </div>
            </div>
            <div class="grid_9">
                <div id="contentBox">
                    <div class="png5">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbobba.biz&tabs&width=340&height=180&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=252029178316060" width="340" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.footer')