<?php
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');

?>


<?php

class Player
{
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function PlayerInformation($data)
    {
        $team_name = mysqli_escape_string($this->db->link, $data['team_name']);
        $select_games = mysqli_escape_string($this->db->link, $data['select']);
        $player_one = mysqli_escape_string($this->db->link, $data['player_one']);
        $player_two = mysqli_escape_string($this->db->link, $data['player_two']);
        $player_three = mysqli_escape_string($this->db->link, $data['player_three']);
        $player_four = mysqli_escape_string($this->db->link, $data['player_four']);
        $player_five = mysqli_escape_string($this->db->link, $data['player_five']);
        $player_six = mysqli_escape_string($this->db->link, $data['player_six']);
        $player_seven = mysqli_escape_string($this->db->link, $data['player_seven']);
        $player_eight = mysqli_escape_string($this->db->link, $data['player_eight']);
        if (
            $team_name == "" || $select_games == "" ||  $player_one == "" ||  $player_two == "" || $player_three == "" || $player_four == "" || $player_five == "" ||
            $player_five == "" || $player_six == "" || $player_seven == "" || $player_eight == ""
        ) {
            $msg = "<span class ='error'>Fileds Must Not Be Empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO tbl_players(team_name,select_games, player_one,player_two,player_three,player_four,player_five,player_six,player_seven,player_eight)
            VALUES('$team_name', '$select_games','$player_one','$player_two','$player_three','$player_four','$player_five','$player_six','$player_seven','$player_eight')";

            $insert_rows = $this->db->insert($query);
            if ($insert_rows) {
                $msg = "<span class = 'success'>Team Information SuccessFully Done ! </span>";
                return $msg;
            } else {
                $msg = "<span class = 'error'>Something is Wrong ! </span>";
                return $msg;
            }
        }
    }

    public function getAllPlayer()
    {
        $query = "SELECT * FROM tbl_players ORDER by player_id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function delPlayer($id)
    {
        $query = "DELETE FROM tbl_players WHERE player_id = '$id'";
        $delplayer = $this->db->delete($query);
        if ($delplayer) {
            $msg = "<span class = 'success'>Games Delete Successfully ! </span>";
            return $msg;
        } else {
            $msg = "<span class = 'error'>Something is Worng! </span>";
            return $msg;
        }
    }
      
     public function UpdatePlayerInfo($data,$id){
        $team_name = mysqli_escape_string($this->db->link, $data['team_name']);
        $player_one = mysqli_escape_string($this->db->link, $data['player_one']);
        $player_two = mysqli_escape_string($this->db->link, $data['player_two']);
        $player_three = mysqli_escape_string($this->db->link, $data['player_three']);
        $player_four = mysqli_escape_string($this->db->link, $data['player_four']);
        $player_five = mysqli_escape_string($this->db->link, $data['player_five']);
        $player_six = mysqli_escape_string($this->db->link, $data['player_six']);
        $player_seven = mysqli_escape_string($this->db->link, $data['player_seven']);
        $player_eight = mysqli_escape_string($this->db->link, $data['player_eight']);

        $query = "UPDATE tbl_players 
         SET
          team_name = '$team_name',
          player_one = '$player_one',
          player_two = '$player_two',
          player_three = '$player_three',
          player_four = '$player_four',
          player_five = '$player_five',
          player_six = '$player_six',
          player_seven = '$player_seven',
          player_eight = '$player_eight'
          WHERE  player_id ='$id' " ;
           $update_player = $this->db->update($query);
           if ($update_player) {
               $msg = "<span class = 'success'>Team  Information Update Successfully ! </span>";
               return $msg;
           }
     }
      
     
    public function getPlayerId($id)
    {
        $query = "SELECT *FROM tbl_players WHERE player_id = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
}
