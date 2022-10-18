<?php

function getRandId($tableName, $idName)
{
    $db      = \Config\Database::connect();
    $builder = $db->table($tableName);
    $builder->select($idName);

    $data = [];
    foreach ($builder->get()->getResultArray() as $id_user) {
        $data[] = $id_user[$idName];
    }

    $k = array_rand($data);
    return $data[$k];
}
