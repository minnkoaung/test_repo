<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['task_name','task_info','task_cate_id','task_priority','task_deadline','task_status','task_done_at'];

    public function task_categories(){
    	return $this->hasMany('App\TaskCategory');
    }
}
