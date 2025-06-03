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

        function viewPayee_m(){
            $query = $this->db->query("SELECT payee_name FROM `tblpayee` WHERE payee_status='ACTIVE' ORDER BY payee_name ASC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function viewTrxntype_m(){
            $query = $this->db->query("SELECT paymentname FROM `tblpayment` WHERE paymentstatus='Active' ORDER BY paymentname ASC;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function updateData_m($re_id,$values){
            $this->db->where("re_id",$re_id);
            $this->db->update("tblreceivedentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>