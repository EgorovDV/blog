<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function author()
    {
    	return $this->hasOne(User::class);
    }

    public function posts()
    {
    	return $this->hasOne(Post::class);
    }

    public function allow()
    {
    	$this->status = 1;
    	$this->save();
    }

    public function disAllow()
    {
    	$this->status = 0;
    	$this->save();
    }

    public function toggleStatus()
    {
    	if($this->status = 0){
    		return $this->allow();
    	}

    	$this->disAllow();
    }

    public function remove()
    {
        $this->delete();
    }
}
