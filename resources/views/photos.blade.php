<html>
    <head>
        <meta charset="utf-8">
        <title>Bobba: {{session('username') }}</title>
        
        <link rel="shortcut icon" href="web/favicon.ico">
        
        <link type="text/css" href="web/css/style.css?{{time()}}" rel="stylesheet">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    </head>
    <body>
        @include('partials/header')
        <div class="clear"></div>
      
<div class="clear"></div>
<div class="container_24">
<div class="grid_24">
<h2 class="title">Fotos von Habbos</h2>
@foreach(\App\Http\Controllers\CommunityController::getPhotos(60) as $photo)
<div class="card image_id_1">
<div class="card-image">
<img src="{{ $photo->url }}"/>
<div class="card-image-box">
<span class="date">{{ date('d.m.Y', $photo->timestamp) }}</span>
<span class="like">Gefällt <span id="">0</span> <div class="like-hand"></div></span>
</div>
</div>
<div class="card-bottom">
<div class="card-creator">
<img src="http://habbo.com/habbo-imaging/avatarimage?figure={{ \App\User::where('id', $photo->user_id)->get('look')->first()->look }}&gesture=sml&size=b&head"/>
</div>
<span class="username">{{ \App\User::where('id', $photo->user_id)->get()->first()->username }}</span>


</div>
</div>
@endforeach
<div class="clear"></div>
</div>


@include('partials.footer')