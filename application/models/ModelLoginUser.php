<?php

class ModelLoginUser extends CI_Model
{
    public function getData($email)
    {

        $query = $this->db->get_where('user', ['email' => $email])->row_array();
        return $query;
    }
}
