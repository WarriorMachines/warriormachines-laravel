<div class="row">
    <div class="col-sm-12">
        <h1>Forums</h1>
        <div class="row text-xs-center m-b-1">
            @foreach ($main_forums as $forum)
                <div class="col-sm-3">
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
