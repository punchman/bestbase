<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class ProjectDetail extends Model
    {

        protected $guarded = ['id'];

        protected $primaryKey = 'id';
        
        public function projects()
        {
            return $this->belongsTo('App\Project', 'project_id', 'id');
        }

        // public $timestamps = false;        

        protected $table = 'project_details';
    }