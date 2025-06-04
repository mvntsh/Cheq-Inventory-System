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

        function updateCheqdata_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateCheqdataprop_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblpropcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateNoncheqdata_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblnoncheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateNoncheqdataprop_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblpropnoncheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateRemark_m($re_id,$values){
            $this->db->where("re_id",$re_id);
            $this->db->update("tblreceivedentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeCheqdata_m($rfpno){
            $this->db->where("rfpno",$rfpno);
            $this->db->delete("tblcheckentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeCheqdataprop_m($rfpno){
            $this->db->where("rfpno",$rfpno);
            $this->db->delete("tblpropcheckentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeNoncheqdata_m($rfpno){
            $this->db->where("rfpno",$rfpno);
            $this->db->delete("tblnoncheckentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeNoncheqdataprop_m($rfpno){
            $this->db->where("rfpno",$rfpno);
            $this->db->delete("tblpropnoncheckentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function updateStatus_m($re_id,$values){
            $this->db->where("re_id",$re_id);
            $this->db->update("tblreceivedentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeRequest_m($re_id){
            $this->db->where("re_id",$re_id);
            $this->db->delete("tblreceivedentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }
    }
?>