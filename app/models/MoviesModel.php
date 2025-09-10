<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: MoviesModel
 * 
 * Automatically generated via CLI.
 */
class MoviesModel extends Model {
    protected $table = 'movies';
    protected $primary_key = 'id';
     protected $allowedFields = ['Title', 'Year_Watch', 'Month', 'Type'];

    public function __construct()
    {
        parent::__construct();
         
    }
     public function insert($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

  
    public function all($with_deleted = false)
    {
        return $this->db->table($this->table)->get_all();
    }
   
}