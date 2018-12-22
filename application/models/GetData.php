<?php

defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * GetData Model
 */
class GetData extends CI_Model {

    public $table = 'db_table_name';

    /**
     * Get all DB results
     */
    public function getAll() {

        $query = $this->db->get($this->table);
        return $query->result();

    }

    /**
     * Filtering by DB field if the field exists.
     */
    public function filter($filterby = '', $value = '') {

        if ($this->db->field_exists($filterby, $this->table)) {
            $this->db->where($filterby, $value);
            $query = $this->db->get($this->table);
            $result = $query->result();
        } else {
            $result =  'field not found';
        }

        return $result;

    }
}
