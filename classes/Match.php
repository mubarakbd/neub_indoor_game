<?php
include_once($filepath . '/../lib/Database.php');
include_once($filepath . '/../helpers/Format.php');
?>


<?php


class MatchCreat
{
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }

    public function MatchStart($data)
    {
        $TeamA = mysqli_real_escape_string($this->db->link, $data['TeamA']);
        $TeamB = mysqli_real_escape_string($this->db->link, $data['TeamB']);
        $gameid = mysqli_real_escape_string($this->db->link, $data['gamesName']);
        $venus = mysqli_real_escape_string($this->db->link, $data['venus']);
        $event_dt = mysqli_real_escape_string($this->db->link, $data['event_dt']);

        if ($TeamA == "" || $TeamB == "" || $gameid == "" || $venus == "" || $event_dt == "") {
            $msg = "<span class='error'>Fields must not be empty!</span>";
            return $msg;
        } else {
            $query = "INSERT INTO tbl_match(TeamA,TeamB,gameid, event_dt, venus) VALUES('$TeamA','$TeamB','$gameid', '$event_dt','$venus')";
            $insert_match =  $this->db->insert($query);
            if ($insert_match) {
                $msg = "<span class = 'success'>Match Insert Successfully ! </span>";
                return $msg;
            } else {
                $msg = "<span class = 'error'>Match Insert Fail ! </span>";
                return $msg;
            }
        }
    }

    public function getAllMatch()
    {

        $query = "SELECT tbl_match.*,tbl_games.gamesName FROM tbl_match
        INNER JOIN tbl_games ON tbl_match.gameid = tbl_games.gameid ORDER BY tbl_match.matchid DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function UpdateMatch($event_dt, $id)
    {
        $event_dt = $this->fm->validation($event_dt);
        $event_dt = mysqli_real_escape_string($this->db->link, $event_dt);
        $id = mysqli_escape_string($this->db->link, $id);
        if (empty($event_dt)) {
            $msg = "<span class = 'error text-center'>Filed Must Not Be Empty </span>";
            return $msg;
        } else {
            $query = "UPDATE tbl_match
       SET 
       event_dt = '$event_dt'
       WHERE matchid = '$id'";

            $update_row = $this->db->update($query);
            if ($update_row) {
                $msg = "<span class = 'success'>Match Update Successfully ! </span>";
                return $msg;
            }
        }
    }

    public function getMatchById($id)
    {
        $query = "SELECT *FROM tbl_match WHERE matchid = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function delMatch($id){
        $query = "DELETE FROM tbl_match WHERE matchid = '$id'";
        $delmatc = $this->db->delete($query);
        if($delmatc){
            $msg = "<span class = 'success'>Games Delete Successfully ! </span>";
            return $msg;
        }else{
            $msg = "<span class = 'error'>Something is Worng! </span>";
            return $msg;
        }
    }
}
