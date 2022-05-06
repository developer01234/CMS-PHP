<?php

namespace Admin\Model\User;

use Engine\Model;

class UserRepository extends Model {

    public function getUsers() {
        $sql = $this->queryBuilder->select()
                ->from('user')
                ->orderBy('id', 'DESC')
                ->sql();
        
        print_r($sql);

        return $this->db->query($sql);
    }

}
