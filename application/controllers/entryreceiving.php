<?php
    class entryreceiving extends CI_Controller{
        
        function __construct(){
            parent::__construct();
            //Database here.
            $this->load->model("receiving_m");
        }

        function index(){
            $data["Title"] = "Receiving Entry";

            $this->load->view("common/aheader",$data);
            $this->load->view("common/bcss");
            $this->load->view("entryreceiving_v");
            $this->load->view("common/cfooter");
        }

        function viewReceived_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewReceived_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function getRfpdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmSearch");

            $data["data"] = $this->receiving_m->getRfpdata_m($rfpno);

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewPayee_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewPayee_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewTrxntype_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewTrxntype_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateData_c(){
            $data["success"] = false;

            $re_id = $this->input->post("txtnmReceivingid");
            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee"),
                "payment" => $this->input->post("txtnmUpdatetrxntype"),
                "amount" => $this->input->post("txtnmUpdateamount"),
                "description" => $this->input->post("txtnmUpdatedescription")
            );

            $response = $this->receiving_m->updateData_m($re_id,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateCheqdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee")
            );

            $response = $this->receiving_m->updateCheqdata_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateCheqdataprop_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee")
            );

            $response = $this->receiving_m->updateCheqdataprop_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateNoncheqdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee")
            );

            $response = $this->receiving_m->updateNoncheqdata_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateNoncheqdataprop_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $values = array(
                "payee" => $this->input->post("txtnmUpdatepayee")
            );

            $response = $this->receiving_m->updateNoncheqdataprop_m($rfpno,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateRemark_c(){
            $data["success"] = false;

            $re_id = $this->input->post("txtnmReceivingid");
            $values = array(
                "receiveremarks" => $this->input->post("txtnmUpdatereceiveremark")
            );

            $response = $this->receiving_m->updateRemark_m($re_id,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeCheqdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $response = $this->receiving_m->removeCheqdata_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeCheqdataprop_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $response = $this->receiving_m->removeCheqdataprop_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeNoncheqdata_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $response = $this->receiving_m->removeNoncheqdata_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeNoncheqdataprop_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmUpdaterfpno");

            $response = $this->receiving_m->removeNoncheqdataprop_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function updateStatus_c(){
            $data["success"] = false;

            $re_id = $this->input->post("txtnmReceivingid");

            $values = array(
                "receivestatus" => $this->input->post("txtnmUpdatereceivestatus")
            );

            $response = $this->receiving_m->updateStatus_m($re_id,$values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function removeRequest_c(){
            $data["success"] = false;

            $re_id = $this->input->post("txtnmReceivingid");

            $response = $this->receiving_m->removeRequest_m($re_id);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function insertData_c(){
            $data["success"] = false;

            $values = array(
                "rfpno" => $this->input->post("txtnmRfpno"),
                "payee" => $this->input->post("txtnmPayee"),
                "division" => $this->input->post("txtnmDivision"),
                "datareceived" => $this->input->post("txtnmReceivedate"),
                "payment" => $this->input->post("txtnmTrxntype"),
                "amount" => $this->input->post("txtnmAmount"),
                "description" => $this->input->post("txtnmDescription"),
                "receivestatus" => $this->input->post("txtnmUpdatereceivestatus"),
                "receiveremarks" => $this->input->post("txtnmUpdatereceiveremark"),
                "dummyamount" => $this->input->post("txtnmAmount")
            );

            $response = $this->receiving_m->insertData_m($values);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function viewDivision_c(){
            $data["success"] = false;

            $data["data"] = $this->receiving_m->viewDivision_m();

            if(count($data["data"])>0){
                $data["success"] = true;
            }
            echo json_encode($data);
        }

        function existingRequest_c(){
            $data["success"] = false;

            $rfpno = $this->input->post("txtnmRfpno");

            $response = $this->receiving_m->existingRequest_m($rfpno);

            if($response){
                $data["success"] = true;
            }
            echo json_encode($data);
        }
    }
?>