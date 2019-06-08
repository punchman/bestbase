<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Task extends Model
    {
        protected $guarded = ['id'];

        protected $primaryKey = 'id';        

        public function projects()
        {
            return $this->belongsTo('App\Project', 'project_id', 'id');
        }
    
        public function users()
        {
            return $this->belongsTo('App\User', 'user_id', 'id');
        }    
    
        // public $timestamps = false;        
    }