<?php

class ReuzenradModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getReuzenraden()
    {
        $sql = 'SELECT Id
                       ,Naam
                       ,Hoogte,
                       Land,
                       Kosten,
                       AantalPassagiers
                FROM Reuzenrad ORDER BY Id ASC;';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}
