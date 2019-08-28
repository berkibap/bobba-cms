<div id="header-content">
        <div class="container_24">
            <div class="grid_24">
                <div class="logo">
                    <div class="onlineCount"><span>1337</span> Bobba(s) online</div>
                </div>
                <a href="/hotel" target="_blank" class="checkIn">Einchecken</a>
            </div>
        </div>
    </div>
    <div id="header-menu">
        <div class="container_24">
            <div class="grid_24">
                <ul class="user-menu">
                    <li>
                        <a href="/me">
                        <div class="avatar-look" style="background-image:url(http://avatars.habboon.pw/avatarimage.php?figure={{ \App\User::where('id', session('id'))->get('look')->first()->look}}&gesture=sml&direction=2)"></div>
                        <span>{{ session('username') }}</span>
                        </a>
                    </li>
                </ul>
                <ul class="header-menu">
                    <li><a href="/community"><i class="fa fa-users icon" aria-hidden="true"></i>Community</a></li>
                    <li><a href="/photos"><i class="fa fa-photo icon" aria-hidden="true"></i>Photos</a></li>
                    @if(\App\User::where('id', session('id'))->get('rank')->first()->rank >= 3)<li><a href=""><i class="fa fa-cogs icon" aria-hidden="true"></i>ACP</a></li>@endif
                </ul>
            </div>
        </div>
    </div>