<?php

class Post extends Eloquent {

    protected $fillable = [
        'user_id',
        'title',
        'md_content',
        'html_content',
        'private'
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function tags()
    {
        return $this->belongsToMany('Tag', 'post_tags');
    }

}