<?php
    class receiving_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function viewReceived_m(){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` ORDER BY re_id DESC LIMIT 50;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function getRfpdata_m($rfpno){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno';")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
?>