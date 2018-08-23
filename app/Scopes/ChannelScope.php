<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class ChannelScope implements Scope
{
    ////protected $user;
    ////protected $column;
    ////
    ////public function __construct(User $user, $column = 'user_id')
    //public function __construct()
    //{
    //    dd('oasidjaosidjasoidj');
    //    //$this->user = $user;
    //    //$this->column = $column;
    //}

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('archived', false);
    }
}
