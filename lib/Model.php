<?php

class Model {

    protected $table;
    protected $primaryKey = "id";

    public static function find($id) {
        $model = new static();
        $sql = "select * from ".$model->table." where ".$model->primaryKey." = :id";
        $params = ["id" => $id];
        $result = DB::query($sql, $params);
        foreach ($result as $key => $value) {
            $model->$key = $value;
        }

        return $model;
    }

}
