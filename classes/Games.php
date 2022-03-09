<?php
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');
?>

 <?php

    class Games
    {
        public function __construct()
        {
            $this->db = new Database();  
            $this->fm = new Format();
        }
        public function AddGames($gamesName)
        {
            $gamesName = $this->fm->validation($gamesName);

            $gamesName = mysqli_real_escape_string($this->db->link, $gamesName);

            if (empty($gamesName)) {
                $msg = "<span class = 'error text-center'>Filed Must Not Be Empty </span>";
                return $msg;
            } else {
                $query = "INSERT INTO tbl_games (gamesName) VALUES ('$gamesName')";
                $insert_game =  $this->db->insert($query);
                if ($insert_game) {
                    $msg = "<span class = 'success'>Games Insert Successfully ! </span>";
                    return $msg;
                } else {
                    $msg = "<span class = 'error'>Games Insert Fail ! </span>";
                    return $msg;
                }
            }
        }

        public function getAllGame()
        {
            $query = "SELECT *FROM tbl_games ORDER BY gameid DESC";
            $result = $this->db->select($query);
            return $result;
        }

        public function getGameById($id)
        {
            $query = "SELECT *FROM tbl_games WHERE gameid = '$id'";
            $result = $this->db->select($query);
            return $result;
        }

        public function UpdateGame($gamesName, $id)
        {
            $gamesName = $this->fm->validation($gamesName);
            $gamesName = mysqli_real_escape_string($this->db->link, $gamesName);
            $id = mysqli_escape_string($this->db->link, $id);
            if (empty($gamesName)) {
                $msg = "<span class = 'error text-center'>Filed Must Not Be Empty </span>";
                return $msg;
            } else {
                $query = "UPDATE tbl_games
           SET 
           gamesName = '$gamesName'
           WHERE gameid = '$id'";

                $update_row = $this->db->update($query);
                if ($update_row) {
                    $msg = "<span class = 'success'>Games Update Successfully ! </span>";
                    return $msg;
                }
            }
        }
        public function delGameById($id)
        {
            $query = "DELETE FROM tbl_games WHERE gameid = '$id'";
            $delgame = $this->db->delete($query);
            if($delgame){
                $msg = "<span class = 'success'>Games Delete Successfully ! </span>";
                return $msg;
            }else{
                $msg = "<span class = 'error'>Something is Worng! </span>";
                return $msg;
            }
        }
    }
