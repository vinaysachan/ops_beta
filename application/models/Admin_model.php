<?php

class Admin_model extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct(); 
    }

    public function checkUser($post, $where) {
        $query = $this->db->select(['id', 'name', 'img'])->get_where('operation_users', $where, 1, 0);
        if ($query) {
            return $query->result();
        } else {
            throw new Exception($this->db->error()['message']);
        }
    }

    public function do_admin_Login($post) {
        try 
        {
            $where = [
                'username' => $post['username'],
                'password' => $post['password'],
                'active' => FLAG_Y,
                'role' => ROLE_ADMIN
            ];
            if (!empty($u = $this->checkUser($post, $where))) {
                return $u;
            } else {
                return FALSE;
            }
        } 
        catch (Exception $e) 
        {
            $this->saveErrorLogs($e);
            return FALSE;
        }
    }

    public function saveErrorLogs($e) {
        $error = json_encode(
            [
                'error' => [
                    'msg' => $e->getMessage(), 
                    'line' => $e->getLine(), 
                    'file' => $e->getFile()
                ]
            ],
            JSON_UNESCAPED_SLASHES );
        $this->db->insert('logs_error_db', ['error' => $error]);
    }

}
