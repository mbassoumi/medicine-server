<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sideEffects()
    {
        return $this->hasMany(SideEffects::class, 'medicine_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function uses()
    {
        return $this->hasMany(Uses::class, 'medicine_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function warnings()
    {
        return $this->hasMany(Warnings::class, 'medicine_id', 'id');
    }



}
