<?php

class NewsModel extends Model{

    public function getNews($count){

        $sql = "SELECT * FROM contact_info ORDER BY date DESC LIMIT :count";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":count", $count, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $row['date'] = mb_substr($row['date'],0,10);
            $res[] = $row;
        }
        return $res;
    }

}