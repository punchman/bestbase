<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Task extends Model
    {
        protected $guarded = ['TaskID'];

        protected $primaryKey = 'TaskID';        

        public function projects()
        {
            return $this->belongsTo('App\Project', 'TaskID');
        }
    
        public function users()
        {
            // return $this->belongsTo('App\User', 'UserID');
            return $this->belongsTo('App\User', 'TaskID');
        }    
    
        public $timestamps = false;        
    }