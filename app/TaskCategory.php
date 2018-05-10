<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    protected $fillable = ['task_cate_name','task_cate_slug','task_cate_id','task_priority','task_deadline','task_status','task_done_at'];

}
