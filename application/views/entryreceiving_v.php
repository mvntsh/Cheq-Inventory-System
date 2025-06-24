    <div class="row" style="margin: .3em; cursor:default; zoom: 85%;">
        <div class="col-md-4">
            <div class="card" style="background-color: #454443; border-radius: 0px; border-color: transparent; zoom: 90%; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="card-body">
                    <h3>Entry</h3>
                    <form id="frmInputs">
                        <label for="inputnmRfpno">RFP No.</label>
                        <input type="text" id="inputnmRfpno" name="txtnmRfpno" class="form-control">
                        <label for="inputnmPayee" style="line-height: 5%;">Payee</label>
                        <select type="text" id="inputnmPayee" name="txtnmPayee" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmDivision">Division</label>
                        <select name="txtnmDivision" id="inputnmDivision" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmReceivedate">Received Date</label>
                        <input type="date" id="inputnmReceivedate" name="txtnmReceivedate" class="form-control">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputnmTrxntype">Transaction Type</label>
                                <select name="txtnmTrxntype" id="inputnmTrxntype" class="form-control" style="font-size: 9pt; height: 36pt;">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputnmCarrfno" style="line-height: 5%;">CARRF No.</label>
                                <input type="text" id="inputnmCarrfno" name="txtnmCarrfno" class="form-control">
                            </div>
                        </div>
                        <label for="inputnmAmount" style="line-height: 5%;">Amount</label>
                        <input type="text" id="inputnmAmount" name="txtnmAmount" class="form-control">
                        <label for="inputnmDescription">Description</label>
                        <textarea name="txtnmDescription" id="inputnmDescription" class="form-control" style="height: 60px;"></textarea>
                        <input type="text" name="txtnmReceivestatus" id="inputnmReceivestatus" value="Unprocess" hidden>
                    </form>
                    <div class="d-grid">
                        <button id="btnInsert" class="btn btn-dark" style="border-radius: 0px;">Save Data</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="background-color: #454443; border-color: #454443; border-radius: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8"><h3>Repository</h3></div>
                        <div class="col-md-4">
                            <form id="frmSearch">
                                <div class="input-group">
                                    <input type="text" name="txtnmSearch" id="inputnmSearch" class="form-control form-control-sm" autocomplete="off" placeholder="Search">
                                    <button class="btn btn-warning btn-sm" style="height: 28.7pt;" id="btnSearch">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; border-radius: 0px; overflow-y: scroll; height: 590px; scrollbar-width: thin; scrollbar-color: #8c8c8c #454443; border-color: #8c8c8c;">
                        <table class="table table-hover table-striped table-dark" style="width: 100%; zoom: 90%; background-color: #454443;" id="tblReceived">
                            <thead style="height: 2em; position: sticky; top: 0;">
                                <tr style="text-align: center; text-transform: uppercase; font-size: 10pt; letter-spacing: 2px;">
                                    <th style="width: 10%; background-color: #8c8c8c;">Rfp no.</th>
                                    <th style="width: 20%; background-color: #8c8c8c;">Payee</th>
                                    <th style="width: 15%; background-color: #8c8c8c;">Amount</th>
                                    <th style="width: 25%; background-color: #8c8c8c;">Description</th>
                                    <th style="width: 20%; background-color: #8c8c8c;">Action</th>
                                </tr>
                            </thead>
                            <tbody style="font-size: 8pt;"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button hidden type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="openModal">
        Trigger modal
    </button>

    <!-- updateModal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" style="background-color: #454443;">
            <div class="modal-content" style="background-color: #454443; border-color: transparent;">
                <div class="modal-header" style="border-bottom: transparent;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update RFP No. <span style="color: #baae09;" id="spanRfpno"></span></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClosemodal"></button>
                </div>
                <div class="modal-body">
                    <form id="frmUpdate">
                        <input type="text" id="inputnmReceivingid" name="txtnmReceivingid" hidden>
                        <input type="text" id="inputnmUpdaterfpno" name="txtnmUpdaterfpno" hidden>
                        <input type="text" id="inputnmUpdatereceiveremark" name="txtnmUpdatereceiveremark" value="Open" hidden>
                        <input type="text" id="inputnmUpdatereceivestatus" name="txtnmUpdatereceivestatus" value="Process" hidden>
                        <label for="inputnmUpdatepayee">Payee</label>
                        <select name="txtnmUpdatepayee" id="inputnmUpdatepayee" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmUpdatetrxntype">Transaction Type</label>
                        <select name="txtnmUpdatetrxntype" id="inputnmUpdatetrxntype" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmUpdateamount">Amount</label>
                        <input type="text" name="txtnmUpdateamount" id="inputnmUpdateamount" class="form-control">
                        <label for="inputnmUpdatedescription">Description</label>
                        <textarea name="txtnmUpdatedescription" id="inputnmUpdatedescription" style="height: 100pt;" class="form-control"></textarea>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: transparent;">
                    <button type="button" class="btn btn-danger" id="btnRemove">Delete</button>
                    <button type="button" class="btn btn-primary" id="btnUpdate">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            viewPayee_v();
            viewTrxntype_v();
            viewDivision_v();
            function viewPayee_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/viewPayee_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var option = '';

                            response.data.forEach(function(x){
                                option += `<option value="${x['payee_name']}">${x['payee_name']}</option>`;
                            })
                            $("#inputnmUpdatepayee,#inputnmPayee").html(option);
                        }
                    }
                })
            }

            function viewTrxntype_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/viewTrxntype_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var option = '';

                            response.data.forEach(function(x){
                                option += `<option value="${x['paymentname']}">${x['paymentname']}</option>`;
                            })
                            $("#inputnmUpdatetrxntype,#inputnmTrxntype").html(option);
                        }
                    }
                })
            }

            function viewDivision_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/viewDivision_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var option = '';

                            response.data.forEach(function(x){
                                option += `<option value="${x['division_name']}">${x['division_name']}</option>`;
                            })
                            $("#inputnmDivision").html(option);
                        }
                    }
                })
            }

            $('#inputnmRfpno').keypress(function(e){    
    
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9]/g))
                return false;                        

            });

            $('#inputnmAmount').keypress(function(e){    
        
                var charCode = (e.which) ? e.which : event.keyCode    
                if (String.fromCharCode(charCode).match(/[^0-9,.]/g))
                return false;                        

            });

            $('#inputnmAmount').keyup(function(event) {

                $(this).val(function(index, value) {
                    value = value.replace(/,/g,'');
                    return numberWithCommas(value);
                });
            });

            function numberWithCommas(x){
                var parts = x.toString().split(".");
                parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                return parts.join(".");
            }

            $('#inputnmAmount').keypress(function(event) {
                if(event.which == 46
                && $(this).val().indexOf('.') != -1) {
                    event.preventDefault();
                } // prevent if already decimal point
                
                if(event.which != 46 && (event.which < 48 || event.which > 57)) {
                    event.preventDefault();
                } // prevent if not number/dot
            });
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            viewReceived_v();
            function viewReceived_v(){
                 $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/viewReceived_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td style="font-weight: bolder;">${x['rfpno']}</td>
                                        <td style="text-transform: uppercase;">${x['payee']}</td>
                                        <td style="text-align: right; font-weight: bolder;">${x['amount']}</td>
                                        <td>${x['description']}</td>
                                        <td style="zoom: 70%; text-align: center;">
                                            <button data-reid="${x['re_id']}" data-rfpno="${x['rfpno']}" data-payee="${x['payee']}" data-payment="${x['payment']}" data-amount="${x['amount']}" data-description="${x['description']}" id="btnEdit" class="btn btn-primary btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg> Edit</button>
                                            <button data-reid="${x['re_id']}" data-rfpno="${x['rfpno']}" data-amount="${x['amount']}" id="btnRevert" class="btn btn-dark btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16"><path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/></svg> Revert</button>
                                            <button data-reid="${x['re_id']}" data-rfpno="${x['rfpno']}" id="btnProcess" class="btn btn-success btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16"><path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/></svg> Process</button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblReceived tbody").html(tbody);
                        }
                    }
                })
            }

            $(document).on("click","#btnEdit",function(e){
                e.preventDefault();
                $("#spanRfpno").text($(this).attr("data-rfpno"));
                $("#inputnmUpdaterfpno").val($(this).attr("data-rfpno"));
                $("#inputnmReceivingid").val($(this).attr("data-reid"));
                $("#inputnmUpdatepayee").val($(this).attr("data-payee"));
                $("#inputnmUpdatetrxntype").val($(this).attr("data-payment"));
                $("#inputnmUpdateamount").val($(this).attr("data-amount"));
                $("#inputnmUpdatedescription").val($(this).attr("data-description"));
                $("#openModal").click();
            })

            $(document).on("click","#btnSearch",function(e){
                e.preventDefault();
                var inputnmSearch = $("#inputnmSearch").val();
                
                if(inputnmSearch==("")>0){
                    $(".toast-body").text("Input empty field to complete action.");
                    $("#btnToast").click();
                    viewReceived_v();
                }else{
                    getRfpdata_v();
                }
                
            })

            function getRfpdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/getRfpdata_c',
                    data:$("#inputnmSearch").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <tr>
                                        <td style="font-weight: bolder;">${x['rfpno']}</td>
                                        <td style="text-transform: uppercase;">${x['payee']}</td>
                                        <td style="text-align: right; font-weight: bolder;">${x['amount']}</td>
                                        <td>${x['description']}</td>
                                        <td style="zoom: 70%; text-align: center;">
                                            <button data-reid="${x['re_id']}" data-rfpno="${x['rfpno']}" data-payee="${x['payee']}" data-payment="${x['payment']}" data-amount="${x['amount']}" data-description="${x['description']}" id="btnEdit" class="btn btn-primary btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg> Edit</button>
                                            <button data-reid="${x['re_id']}" data-rfpno="${x['rfpno']}" data-amount="${x['amount']}" id="btnRevert" class="btn btn-dark btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16"><path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/></svg> Revert</button>
                                            <button data-reid="${x['re_id']}" id="btnProcess" class="btn btn-success btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16"><path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/></svg> Process</button>
                                        </td>
                                    </tr>
                                    </tr>
                                `;
                            })
                            $("#tblReceived tbody").html(tbody);
                        }else{
                            $(".toast-body").text("No Records found.");
                            $("#btnToast").click();
                            viewReceived_v();
                        }
                    }
                })
            }

            $("#btnUpdate").click(function(e){
                e.preventDefault();
                updateData_v();
            })

            function updateData_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateData_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Updated.");
                            $("#btnToast").click();
                            viewReceived_v();
                            $("#inputnmSearch").val("").focus();
                        }
                    }
                })
            }

            function updateCheqdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateCheqdata_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            updateCheqdataprop_v();
                        }else{

                        }
                    }
                })
            }

            function updateCheqdataprop_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateCheqdataprop_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){

                        }else{
                            updateNoncheqdata_v();
                        }
                    }
                })
            }

            function updateNoncheqdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateNoncheqdata_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            updateNoncheqdataprop_v();
                        }else{

                        }
                    }
                })
            }

            function updateNoncheqdataprop_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateNoncheqdataprop_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){

                        }else{

                        }
                    }
                })
            }

            $(document).on("click","#btnRevert",function(e){
                e.preventDefault();
                $("#inputnmUpdaterfpno").val($(this).attr("data-rfpno"));
                $("#inputnmReceivingid").val($(this).attr("data-reid"));
                $("#inputnmUpdateamount").val($(this).attr("data-amount"));
                updateRemark_v();
            })

            function updateRemark_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateRemark_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Updated.");
                            $("#btnToast").click();
                            viewReceived_v();
                        }else{
                            $(".toast-body").text("Cannot revert, there is no transaction recorded.");
                            $("#btnToast").click();
                            viewReceived_v();
                        }
                    }
                })
            }

            function removeCheqdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/removeCheqdata_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            removeCheqdataprop_v();
                        }else{

                        }
                    }
                })
            }

            function removeCheqdataprop_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/removeCheqdataprop_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            
                        }else{
                            removeNoncheqdata_v();
                        }
                    }
                })
            }

            function removeNoncheqdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/removeNoncheqdata_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            removeNoncheqdataprop_v();
                        }else{
                            
                        }
                    }
                })
            }

            function removeNoncheqdataprop_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/removeNoncheqdataprop_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            
                        }else{
                            
                        }
                    }
                })
            }

            $(document).on("click","#btnProcess",function(e){
                e.preventDefault();
                $("#inputnmReceivingid").val($(this).attr("data-reid"));
                updateStatus_v();
            })

            function updateStatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/updateStatus_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Processed.");
                            $("#btnToast").click();
                            viewReceived_v();
                            $("#inputnmSearch").val("").focus();
                        }else{
                            $(".toast-body").text("Request already processed.");
                            $("#btnToast").click();
                            viewReceived_v();
                            $("#inputnmSearch").val("").focus();
                        }
                    }
                })
            }

            $("#btnRemove").click(function(e){
                e.preventDefault();
                removeRequest_v();
            })

            function removeRequest_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/removeRequest_c',
                    data:$("#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Successfully deleted the request.");
                            $("#btnToast").click();
                            viewReceived_v();
                            $("#btnClosemodal").click();
                            removeCheqdata_v();
                        }else{

                        }
                    }
                })
            }

            $("#btnInsert").click(function(e){
                e.preventDefault();
                verifyTransactiontype_c();
            })

            function verifyTransactiontype_c(){
                var inputnmTrxntype = $("#inputnmTrxntype").val();

                if(inputnmTrxntype=="Cash Advance"){
                    requiredCARRF();
                }else{
                    $("#inputnmCarrfno").val("N/A");
                    emptyField();
                }
            }

            function requiredCARRF(){
                var inputnmCarrfno = $("#inputnmCarrfno").val();

                if(inputnmCarrfno==("")>0){
                    $(".toast-body").text("Please input CARRF No.");
                    $("#btnToast").click();
                }else{
                    emptyField();
                }
            }

            function emptyField(){
                var inputnmRfpno = $("#inputnmRfpno").val();
                var inputnmReceivedate = $("#inputnmReceivedate").val();
                var inputnmAmount = $("#inputnmAmount").val();
                var inputnmDescription = $("#inputnmDescription").val();

                if(inputnmRfpno==("")>0){
                    $(".toast-body").text("Please input RFP No.");
                    $("#btnToast").click();
                }else if(inputnmReceivedate==("")>0){
                    $(".toast-body").text("Please pick a date.");
                    $("#btnToast").click();
                }else if(inputnmAmount==("")>0){
                    $(".toast-body").text("Please entry an amount.");
                    $("#btnToast").click();
                }else if(inputnmDescription==("")>0){
                    $(".toast-body").text("Please input description.");
                    $("#btnToast").click();
                }else{
                    existingRequest_v();
                }
            }

            function existingRequest_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/existingRequest_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Request number is already exist.");
                            $("#btnToast").click();
                        }else{
                            insertData_v();
                        }
                    }
                })
            }

            function insertData_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryreceiving/insertData_c',
                    data:$("#frmInputs,#frmUpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Saved.");
                            $("#btnToast").click();
                            $("#inputnmRfpno,#inputnmReceivedate,#inputnmAmount,#inputnmDescription,#inputnmCarrfno").val("");
                            $("#btnClosemodal").click();
                            viewReceived_v();
                            $("#inputnmRfpno").focus();
                        }
                    }
                })
            }
        })
    </script>