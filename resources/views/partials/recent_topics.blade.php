<div class="container m-b-1">
    <h1>Recent Topics</h1>
    <table class="table table-striped table-sm">
        <tbody>
        @foreach ($recent_topics as $topic)
            <tr>
                <td>
                    <a href="./forums/viewtopic.php?f={{ $topic->forum_id }}&t={{ $topic->topic_id }}">{{ $topic->topic_title }}</a>
                </td>
                <td>
                    @if (!empty($topic->topic_first_poster_colour))
                        <a href="./forums/memberlist.php?mode=viewprofile&amp;u={{ $topic->topic_poster }}" class="font-weight-bold"
                           style="color:#{{ $topic->topic_first_poster_colour }}">{{ $topic->topic_first_poster_name }}</a>
                    @else
                        <a href="./forums/memberlist.php?mode=viewprofile&amp;u={{ $topic->topic_poster }}">{{ $topic->topic_first_poster_name }}</a>
                    @endif
                </td>
                <td>
                    {{ $topic->topic_time }}
                </td>
                <td>
                    in <a href="./forums/viewforum.php?f={{ $topic->forum_id }}">{{ $topic->forum->forum_name }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div><!-- /.container -->
