<?php
    class cheqentry_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }

        function viewCheqdata_m(){
            $query = $this->db->query("SELECT * FROM `tblcheckentry` ORDER BY ce_id DESC LIMIT 100;")->result_array();

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
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno' AND receivestatus='Process';")->result_array();

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

        function selectBank_m($accountno){
            $query = $this->db->query("SELECT * FROM `tblaccounts` WHERE accountno='$accountno' LIMIT 1")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function cheqnoExist_m($checkno){
            $query = $this->db->query("SELECT checkno FROM `tblcheckentry` WHERE checkno='$checkno'")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function vouchernoExist_m($checkvoucherno){
            $query = $this->db->query("SELECT checkvoucherno FROM `tblcheckentry` WHERE checkvoucherno='$checkvoucherno'")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function checkRemark_m($rfpno){
            $query = $this->db->query("SELECT rfpno,receiveremarks FROM `tblreceivedentry` WHERE rfpno='$rfpno' AND receiveremarks='Closed'")->result_array();

            if($query){
                return true; 
            }else{
                return false;
            }
        }

        function checkExistingstatus_m($checkno,$status){
            $query = $this->db->query("SELECT * FROM `tblcheckentry` WHERE checkno='$checkno' AND status='$status'")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function updateStatus_m($checkno,$values){
            $this->db->where("checkno",$checkno);
            $this->db->update("tblcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function searchCheqno_m($checkno){
            $query = $this->db->query("SELECT * FROM `tblcheckentry` WHERE checkno='$checkno'")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function revertStatus_m($checkno,$values){
            $this->db->where("checkno",$checkno);
            $this->db->update("tblcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function cashAdvance_m($rfpno){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno' AND payment='Cash Advance'")->result_array();

            if($query){
                return $query;
            }else{
                return false;
            }
        }

        function saveCheqprop_m($values){
            $this->db->insert("tblpropcheckentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function removeCheqstatus_m($checkno){
            $this->db->where("checkno",$checkno);
            $this->db->where("status !=",'On-hand');
            $this->db->delete("tblpropcheckentry");

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function getDifference_m($dummyamount,$checkamount,$rfpno){
            $query = $this->db->query("SELECT *,COALESCE(FORMAT(REPLACE('$dummyamount' - '$checkamount',',',''),2),'') AS difference FROM tblreceivedentry WHERE rfpno='$rfpno';")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function updateRequestamount_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblreceivedentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return false;
            }
        }

        function exceedRequest_m($rfpno,$checkamount){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno' AND amount >= '$checkamount';")->result_array();
        
            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function closeRequest_m($rfpno){
            $query = $this->db->query("SELECT * FROM `tblreceivedentry` WHERE rfpno='$rfpno' AND dummyamount='0.00'")->result_array();
            
            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }

        function remarkClose_m($rfpno,$values){
            $this->db->where("rfpno",$rfpno);
            $this->db->update("tblreceivedentry",$values);

            if($this->db->affected_rows()>0){
                return true;
            }else{
                return array();
            }
        }
    }
    
?>