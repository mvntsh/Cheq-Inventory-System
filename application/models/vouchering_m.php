<?php
    class vouchering_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function viewCheqdata_m(){
            $query = $this->db->query("SELECT * FROM `tblcheckentry` ORDER BY checkno DESC LIMIT 100;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function listAccount_m(){
            $query = $this->db->query("SELECT * FROM `tblaccounts` GROUP BY accountno ORDER BY account_id ASC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function getRequest_m($rfpno){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno';")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function saveCheq_m($values){
            $this->db->insert("tblcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function showStaled_m($checkdate){
            $query = $this->db->query("SELECT DATE_ADD('$checkdate', INTERVAL 6 MONTH) as dateStaled")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }
    
?>