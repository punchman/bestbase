<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Project extends Model
    {
        protected $guarded = ['id'];

        protected $primaryKey = 'id';

        public function companies()
        {
            return $this->belongsTo('App\Company', 'company_id', 'id');
        }

        public function tasks()
        {
            return $this->hasMany('App\Task', 'project_id', 'id');
        }

        public function project_details()
        {
            return $this->hasMany('App\ProjectDetail', 'project_id', 'id');
        }

        protected $fillable = ['project_name', 'company_id', 'date_from', 'date_to', 'description', 'amount', 'status'];

        // public $timestamps = false;

    }