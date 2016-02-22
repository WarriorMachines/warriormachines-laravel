<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Warrior Machines</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" type="text/css">
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-73347217-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>

@include('partials.nav')

<div class="jumbotron jumbotron-fluid m-t-3">
    <div class="container">
        <h1 class="display-3">Warrior Machines</h1>
        <p class="lead">An automotive enthusiast community dedicated to the warriors who serve us.</p>
        <div class="row">
            <div class="col-sm-5 col-md-4 col-lg-3">
                <a href="./forums/ucp.php?mode=register" class="btn btn-primary btn-lg" role="button"><i class="fa fa-smile-o"></i> Join the club</a>
            </div>
            <div class="col-sm-7 col-md-8 col-lg-9 p-t-1">
                @if (!empty($latest_user->user_colour))
                    ...<a href="./forums/memberlist.php?mode=viewprofile&amp;u={{ $latest_user->user_id }}" class="font-weight-bold"
                          style="color:#{{ $latest_user->user_colour }}">{{ $latest_user->username }}</a> just joined so it can't be <span
                            style="text-decoration: underline">that</span> bad
                @else
                    ...<a href="./forums/memberlist.php?mode=viewprofile&amp;u={{ $latest_user->user_id }}">{{ $latest_user->username }}</a> just joined so it can't be <span
                            style="text-decoration: underline">that</span> bad
                @endif
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.jumbotron -->

@include('partials.recent_topics')

<div class="container-fluid">
    <div class="container m-b-1">
        <h1>Forums</h1>
        <div class="row text-xs-center m-b-1">
            @foreach ($main_forums as $forum)
                <div class="col-sm-4">
                    <div class="fa-border m-t-1">
                        <a href="./forums/viewforum.php?f={{ $forum->forum_id }}" class="link-black">
                            <div><i class="fa fa-5x fa-folder-open"></i></div>
                            <div>{{ $forum->forum_name }}</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid bg-primary p-t-1 p-b-2">
    <div class="container text-xs-center">
        <h1>Our mission</h1>
        <p class="lead">To create a welcoming community for all who support our Veterans and First Responders though peer-engagement with a focus on the automotive and power sport
            industries.
        </p>
    </div>
</div><!-- /.container-fluid -->

<div class="container m-y-2">

    <div class="row">
        <div class="col-sm-7">
            <img src="http://i66.tinypic.com/1zh0dug.jpg" class="img-fluid img-rounded">
        </div>
        <div class="col-sm-5">
            <p class="font-weight-bold text-uppercase text-muted p-b-2">Honoring our heroes</p>
            <h4>Home of the free, because of the brave.</h4>
            <p class="font-weight-normal text-muted p-b-3">To our men and women in uniform...past present and future- God bless you...and thank you.</p>
            <div class="row">
                <div class="col-sm-6">
                    <div class="font-weight-bold">We salute you</div>
                    <div class="text-muted">For the freedoms that we all enjoy... Our thanks go to the young men and women serving in all branches of the military. <a
                                href="/">Learn more</a>.
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="font-weight-bold">Never forgotten</div>
                    <div class="text-muted">To be a veteran one must know and determine one's price for freedom. <a href="/">Learn
                            more</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<div class="container-fluid bg-inverse p-y-3">
    <div class="container">

        <div class="row">
            <div class="col-sm-7">
                <p class="font-weight-bold text-uppercase text-muted p-b-2">Thank a fire fighter</p>
                <h4>Firefighters save more than homes. They save hearts, memories, and dreams.</h4>
                <p class="font-weight-normal text-muted p-b-3">Readiness, dedication, and service.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="font-weight-bold">Heroes</div>
                        <div class="text-muted">Greater love has no one than this, that one lay down his life for his friends. <a href="/">Learn
                                more</a>.
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="font-weight-bold">Courage</div>
                        <div class="text-muted">For your strength and courage in so many ways, for saving lives every day. Our community salutes you. <a href="/">Learn
                                more</a>.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <img src="http://www.dragbike.com/photogallerys/03gotham_nyc/Gotham009.jpg" class="img-fluid img-circle">
            </div>
        </div>

    </div><!-- /.container -->
</div><!-- /.container-fluid -->

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <img src="http://www.nleomf.org/assets/images/hbb/hbb-logo-2.png" class="img-fluid center-block">
        </div>
    </div>
</div><!-- /.container -->

<div class="container-fluid bg-primary p-y-2">
    <div class="container">
        <div class="text-xs-center">Today, in the United States, more than 900,000 law enforcement officers put their lives on the line for the safety and protection of others.
            They serve with valor and distinction – and with great success.
            Federal statistics show that violent and property crime rates in the United States are at historic lows, thanks in large measure to the dedicated service of the men and
            women of law enforcement.
        </div>
    </div>
</div><!-- /.container-fluid -->

@include('partials.recent_images')

<div class="container-fluid bg-inverse p-t-1 p-b-3">
    <div class="container m-b-3 p-b-3">
        <div class="row">
            <div class="col-sm-6">
                <div>
                    <small>Copyright &copy; {{ date('Y') }} WarriorMachines.com. All rights reserved. Yes, all of them.</small>
                </div>
                <div>
                    <small class="text-muted">Built with <i class="fa fa-heart"></i> by <a href="forums/memberlist.php?mode=viewprofile&u=2" class="link-white">AustinMaddox</a></small>
                </div>
            </div>

            <div class="col-sm-6 text-xs-right">
                <a href="https://www.facebook.com/WarriorMachinesOnline/" class="link-white" target="_blank"><i class="fa fa-3x fa-facebook-square"></i></a>
                &nbsp;
                <a href="https://www.instagram.com/warriormachines/" class="link-white" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
                &nbsp;
                <i class="fa fa-3x fa-twitter-square"></i>
                &nbsp;
                <i class="fa fa-3x fa-youtube-square"></i>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.container-fluid -->

<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
