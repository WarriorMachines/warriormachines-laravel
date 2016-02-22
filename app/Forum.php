<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
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
    protected $table = 'phpbb_forums';

    protected $primaryKey = 'forum_id';

    /**
     * Get the topics for the forum.
     */
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
