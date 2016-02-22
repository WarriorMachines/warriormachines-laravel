<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'phpbb';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'phpbb_topics';

    protected $primaryKey = 'topic_id';

    /**
     * Get the forum that owns the topic.
     */
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    /**
     * Scope a query to only include recent topics.
     *
     * @param $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRecent($query)
    {
        return $query
            ->take(7)
            ->orderBy('topic_time', 'desc');
    }

    /**
     * Get the topic_time as a DateTime string.
     *
     * @param  string  $value
     * @return string
     */
    public function getTopicTimeAttribute($value)
    {
        return Carbon::createFromTimestamp($value)->diffForHumans();
    }
}
