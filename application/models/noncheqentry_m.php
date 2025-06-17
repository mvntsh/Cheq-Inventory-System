<?php
    class noncheqentry_m extends CI_Model{
        function __construct(){
            $this->load->database();
        }
        
        function viewNoncheq_m(){
            $query = $this->db->query("SELECT * FROM `tblnoncheckentry` ORDER BY voucherno DESC LIMIT 100;")->result_array();

            if(count($query)>0){
                return $query;
            }else{
                return array();
            }
        }
    }  
?>