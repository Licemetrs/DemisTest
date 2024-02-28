<?php

class MainModel extends Model{

    public function getNews($count){

        $sql = "SELECT * FROM contact_info ORDER BY date DESC LIMIT :count";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":count", $count, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $row['date'] = mb_substr($row['date'],0,10);
            $temp = explode(".",$row['text']);
            $row['text'] = $temp[0];
            $res[] = $row;
        }
        return $res;
    }

    public function getRangeNews($offset, $count){

        $sql = "SELECT * FROM contact_info ORDER BY date DESC LIMIT :offset, :count";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);    
        $stmt->bindValue(":count", $count, PDO::PARAM_INT);
        $stmt->execute();
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $row['date'] = mb_substr($row['date'],0,10);
            $temp = explode(".",$row['text']);
            $row['text'] = $temp[0];
            $res[] = $row;
        }
        return $res;
    }

}