<?php

namespace DraperStudio\Likeable\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Counter.
 */
class Counter extends Model
{
    /**
     * @var string
     */
    protected $table = 'likes_counter';

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * @return mixed
     */
    public function likeable()
    {
        return $this->morphTo();
    }
}
