@extends('app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
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
                                style="text-decoration: underline">that</span>
                        bad
                    @else
                        ...<a href="./forums/memberlist.php?mode=viewprofile&amp;u={{ $latest_user->user_id }}">{{ $latest_user->username }}</a> just joined so it can't be
                        <span
                                style="text-decoration: underline">that</span> bad
                    @endif
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9">
                @include('partials.recent_topics')

                @include('partials.forums')

                @include('partials.recent_images')
            </main>
            <aside class="col-sm-3">
                @include('partials.overall_aside')
            </aside>
        </div>
    </div><!-- /.container-fluid -->

@endsection