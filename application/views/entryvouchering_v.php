    <style>
        @media screen{
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        }
    </style>
    <div class="card" style="background-color: transparent; border-color: transparent; zoom: 50%; margin: .5em;">
        <form id="frmInputs">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td colspan="7" height="30pt" style="text-align: center; font-size: 30pt;">Receiving data.</td>
                    </tr>
                    <tr>
                        <th>RFP No.</th>
                        <th>Payee</th>
                        <th>Transaction type</th>
                        <th>Available amount</th>
                        <th>Division</th>
                        <th>Request remark</th>
                        <th>Received date</th>
                    </tr>
                    <tr>
                        <td class="input-group" style="border-color: transparent;">
                            <input type="text" name="txtnmRfpno" class="form-control form-control-lg" id="inputnmRfpno">
                            <button id="btnRfpnodata" class="btn btn-warning" style="height: 61px; border-radius: 0px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                            </button>
                            <div id="divGetrfdata" hidden></div>
                        </td>
                        <td><input type="text" name="txtnmPayee" class="form-control form-control-lg" readonly id="inputnmPayee"></td>
                        <td><input type="text" name="txtnmTransactiontype" class="form-control form-control-lg" readonly id="inputnmTransactiontype"></td>
                        <td><input type="text" name="txtnmAvailableamount" class="form-control form-control-lg" readonly id="inputnmAvailableamount"></td>
                        <td><input type="text" name="txtnmDivision" class="form-control form-control-lg" readonly id="inputnmDivision"></td>
                        <td><input type="text" name="txtnmRequeststatus" id="inputnmRequeststatus" hidden><input type="text" name="txtnmRequestremark" class="form-control form-control-lg" readonly id="inputnmRequestremark"></td>
                        <td><input type="date" name="txtnmReceivedate" class="form-control form-control-lg" readonly id="inputnmRequestdate"></td>
                    </tr>
                    <tr>
                        <td colspan="7" height="50pt" style="border-left-color: transparent; border-right-color: transparent;"></td>
                    </tr>
                    <tr>
                        <td colspan="7" height="30pt;" style="text-align: center; font-size: 30pt;">Check details.</td>
                    </tr>
                    <tr>
                        <th>Accountno</th>
                        <th>Check date</th>
                        <th>Check No.</th>
                        <th>Voucherdate</th>
                        <th>Voucher No.</th>
                        <th>Amount</th>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td>
                            <select name="txtnmAccountno" id="inputnmAccountno" class="form-control form-control-lg">
                                <option value="1301-0327-29">1301-0327-29</option>
                            </select>
                            <div id="divBankname" hidden></div>
                        </td>
                        <td><input type="date" name="txtnmCheckdate" class="form-control form-control-lg" id="inputnmCheckdate"><div id="divCheckdate" hidden></div></td>
                        <td>
                            <div class="input-group">
                                <input type="text" name="txtnmCheckno" class="form-control form-control-lg" id="inputnmCheckno"><button id="btnSearch" class="btn btn-warning" style="height: 61px; border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg></button>
                            </div>
                        </td>
                        <td><input type="date" name="txtnmVoucherdate" class="form-control form-control-lg" id="inputnmVoucherdate"></td>
                        <td><input type="text" name="txtnmVoucherno" class="form-control form-control-lg" id="inputnmVoucherno"></td>
                        <td><input type="text" name="txtnmAmount" class="form-control form-control-lg" id="inputnmAmount"></td>
                        <td>
                            <input type="text" name="txtnmDescription" class="form-control form-control-lg" id="inputnmDescription">
                            <div hidden>
                                <input type="text" name="txtnmNOV" value="0.00">
                                <input type="text" name="txtnmTax" value="0.00">
                                <input type="text" name="txtnmTaxamount" value="0.00">
                                <input type="text" name="txtnmStatus" value="On-hand">
                                <input type="text" name="txtnmDate" value="0000-00-00">
                                <input type="text" name="txtnmCount" value="1">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="card" style="zoom: 90%; border-radius: 0px; margin-top: 1em; overflow-y: scroll; height: 710px; scrollbar-width: thin; scrollbar-color: #8c8c8c #454443; border-color: #8c8c8c;">
            <table style="width: 100%;" class="table table-hover table-striped table-dark" id="tblCheqdata">
                <thead style="position: sticky; top:0; text-align: center;">
                    <tr>
                        <td style="background-color: #8c8c8c; width: 10%;">Check No.</td>
                        <td style="background-color: #8c8c8c; width: 20%;">Payee</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Check Date</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Voucher No.</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Voucher Date</td>
                        <td style="background-color: #8c8c8c; wdith: 10%;">Amount</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Description</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Status</td>
                        <td style="background-color: #8c8c8c; width: 10%;">Action</td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="row" style="margin-top: 1em;">
            <div class="col-md-10"></div>
            <div class="col-md-2 d-grid">
                <button class="btn btn-dark" style="height: 80pt;" id="btnSave">Save.</button>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal" id="openUpdatemodal" hidden></button>

    <!-- Modal -->
    <div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="background-color: #8c8c8c;">
                <div class="modal-header" style="border-bottom-color: transparent;">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Status.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btnClosemodal"></button>
                </div>
                <div class="modal-body">
                    <form id="frmChequpdate">
                        <label for="inputnmUpdatecheckno">Cheq No.</label>
                        <input type="text" name="txtnmUpdatecheckno" class="form-control" id="inputnmUpdatecheckno">
                        <label for="inputnmUpdatepayee">Payee</label>
                        <input type="text" name="txtnmUpdatepayee" class="form-control" id="inputnmUpdatepayee">
                        <label for="inputnmUpdatecheckdate">Cheq date</label>
                        <input type="date" name="txtnmUpdatecheckdate" class="form-control" id="inputnmUpdatecheckdate">
                        <label for="inputnmUpdateamount">Cheq amount</label>
                        <input type="text" name="txtnmUpdateamount" class="form-control" id="inputnmUpdateamount">
                        <label for="inputnmUpdatedescription">Cheq description</label>
                        <textarea name="txtnmUpdatedescription" class="form-control" id="inputnmUpdatedescription" style="height: 70pt;"></textarea>
                        <label for="inputnmUpdatestatus">Cheq Status</label>
                        <select name="txtnmUpdatestatus" class="form-control" id="inputnmUpdatestatus">
                            <option value="RELEASED">Released</option>
                            <option value="CLEARED">Cleared</option>
                            <option value="CANCELLED">Cancelled</option>
                        </select>
                        <label for="inputnmUpdatedate">Date</label>
                        <input type="date" name="txtnmUpdatedate" class="form-control" id="inputnmUpdatedate">
                    </form>
                </div>
                <div class="modal-footer" style="border-top-color: transparent;">
                    <button type="button" class="btn btn-dark" id="btnUpdate">Update.</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">    
        $(document).ready(function(){
            viewCheqdata_v();
            listAccount_v();
            function viewCheqdata_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/viewCheqdata_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td>${x['checkno']}</td>
                                        <td>${x['payee']}</td>
                                        <td>${x['checkdate']}</td>
                                        <td>${x['checkvoucherno']}</td>
                                        <td>${x['voucherdate']}</td>
                                        <td>${x['amount']}</td>
                                        <td>${x['checkdescription']}</td>
                                        <td>${x['status']}</td>
                                        <td style="text-align: center;">
                                            <button data-cheqno="${x['checkno']}" data-payee="${x['payee']}" data-cheqdate="${x['checkdate']}" data-amount="${x['amount']}" data-checkdescription="${x['checkdescription']}" data-cheqstatus="${x['status']}" class="btn btn-secondary" id="btnEdit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                                            </button>
                                            <button class="btn btn-primary" id="btnPrint">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16"><path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/><path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/></svg>
                                            </button>
                                            <button data-rfpno="${x['rfpno']}" class="btn btn-danger" id="btnRevert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/></svg>
                                            </button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#tblCheqdata tbody").html(tbody);
                        }
                    }
                })
            }

            $("#btnSearch").click(function(e){
                e.preventDefault();
                var inputnmCheckno = $("#inputnmCheckno").val();

                if(inputnmCheckno==("")>0){
                    viewCheqdata_v();
                }else{
                    searchCheqno_v();
                }
                
            })

            function searchCheqno_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/searchCheqno_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                        var tbody = '';

                            response.data.forEach(function(x){
                                tbody += `
                                    <tr>
                                        <td>${x['checkno']}</td>
                                        <td>${x['payee']}</td>
                                        <td>${x['checkdate']}</td>
                                        <td>${x['checkvoucherno']}</td>
                                        <td>${x['voucherdate']}</td>
                                        <td>${x['amount']}</td>
                                        <td>${x['checkdescription']}</td>
                                        <td>${x['status']}</td>
                                        <td style="text-align: center;">
                                            <button data-cheqno="${x['checkno']}" data-payee="${x['payee']}" data-cheqdate="${x['checkdate']}" data-amount="${x['amount']}" data-checkdescription="${x['checkdescription']}" data-cheqstatus="${x['status']}" class="btn btn-secondary" id="btnEdit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                                            </button>
                                            <button class="btn btn-primary" id="btnPrint">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16"><path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1"/><path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/></svg>
                                            </button>
                                            <button data-rfpno="${x['rfpno']}" class="btn btn-danger" id="btnRevert">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/></svg>
                                            </button>
                                        </td>
                                    </tr>
                                `;
                            })
                            $("#inputnmCheckno").val("").focus();
                            $("#tblCheqdata tbody").html(tbody);
                        }else{
                            alert("No Records found.");
                        }
                    }
                })
            }

            function listAccount_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/listAccount_c',
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var option = '';
                            response.data.forEach(function(x){
                                option += `
                                <option value="${x['accountno']}">${x['accountno']}</option>`;
                            })
                            $("#inputnmAccountno").html(option);
                        }
                    }
                })
            }

            $('#inputnmCheckno,#inputnmVoucherno').keypress(function(e){    
        
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

            $("#btnRfpnodata").click(function(e){
                e.preventDefault();
                getRequest_v();
            })

            function getRequest_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/getRequest_c',
                    data:$("#inputnmRfpno").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var div = '';

                            response.data.forEach(function(x){
                                div += `
                                    <button id="btnGetrequestdata" data-payee="${x['payee']}" data-payment="${x['payment']}" data-division="${x['division']}" data-availableamount="${x['dummyamount']}" data-receivestatus="${x['receivestatus']}" data-receiveremark="${x['receiveremarks']}" data-datareceived="${x['datareceived']}" data-description="${x['description']}"</button>
                                `;
                            })
                            $("#divGetrfdata").html(div);
                            $("#btnGetrequestdata").click();
                        }else{
                            alert("No records found.");
                        }
                    }
                })
            }

            $(document).on("click","#btnGetrequestdata",function(e){
                e.preventDefault();
                $("#inputnmPayee").val($(this).attr("data-payee"));
                $("#inputnmTransactiontype").val($(this).attr("data-payment"));
                $("#inputnmAvailableamount,#inputnmAmount").val($(this).attr("data-availableamount"));
                $("#inputnmDivision").val($(this).attr("data-division"));
                $("#inputnmRequestremark").val($(this).attr("data-receiveremark"));
                $("#inputnmRequestdate").val($(this).attr("data-datareceived"));
                $("#inputnmDescription").val($(this).attr("data-description"));
                $("#inputnmCheckdate").focus();
            })

            $("#btnSave").click(function(e){
                e.preventDefault();
                checkRemark_v();
            })

            function checkRemark_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/checkRemark_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            alert("Request remark is closed.");
                        }else{
                            emptyField();
                        }
                    }
                })
            }

            function emptyField(){
                var inputnmCheckdate = $("#inputnmCheckdate").val();
                var inputnmCheckno = $("#inputnmCheckno").val();
                var inputnmVoucherdate = $("#inputnmVoucherdate").val();
                var inputnmVoucherno = $("#inputnmVoucherno").val();
                var inputnmAmount = $("#inputnmAmount").val();

                if(inputnmCheckdate==("")>0){
                    $(".toast-body").text("Select check date.");
                    $("#btnToast").click();
                }else if(inputnmCheckno==("")>0){
                    $(".toast-body").text("Input check number.");
                    $("#btnToast").click();
                }else if(inputnmVoucherdate==("")>0){
                    $(".toast-body").text("Select voucher date.");
                    $("#btnToast").click();
                }else if(inputnmVoucherno==("")>0){
                    $(".toast-body").text("Input voucher number.");
                    $("#btnToast").click();
                }else if(inputnmAmount==("")>0){
                    $(".toast-body").text("Input an amount.");
                    $("#btnToast").click();
                }else{
                    showStaled_v();
                }
            }

            function showStaled_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/showStaled_c',
                    data:$("#inputnmCheckdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var div = '';

                            response.data.forEach(function(x){
                                div += `
                                    <input type="date" name="txtnmDatestaled" value="${x['dateStaled']}" id="inputnmDatestaled">
                                `;
                            })
                            $("#divCheckdate").html(div);
                            selectBank_v();
                        }
                    }
                })
            }

            function selectBank_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/selectBank_c',
                    data:$("#inputnmAccountno").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            var div = '';

                            response.data.forEach(function(x){
                                div += `
                                    <input type="text" name="txtnmBankname" value="${x['bankname']}" id="inputnmBankname">
                                `;
                            })
                            $("#divBankname").html(div);
                            cheqnoExist_v();
                        }
                    }
                }) 
            }

            function cheqnoExist_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/cheqnoExist_c',
                    data:$("#inputnmCheckno").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Check number exist.");
                            $("#btnToast").click();
                        }else{
                            vouchernoExist_v();
                        }
                    }
                })
            }

            function vouchernoExist_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/vouchernoExist_c',
                    data:$("#inputnmVoucherno").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Voucher number exist.");
                            $("#btnToast").click();
                        }else{
                            saveCheq_v();
                        }
                    }
                })
            }

            function saveCheq_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/saveCheq_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Saved.");
                            $("#btnToast").click();
                            location.reload();
                        }
                    }
                })
            }

            $(document).on("click","#btnEdit",function(e){
                e.preventDefault();
                $("#inputnmUpdatecheckno").val($(this).attr("data-cheqno"));
                $("#inputnmUpdatepayee").val($(this).attr("data-payee"));
                $("#inputnmUpdatecheckdate").val($(this).attr("data-cheqdate"));
                $("#inputnmUpdateamount").val($(this).attr("data-amount"));
                $("#inputnmUpdatedescription").val($(this).attr("data-checkdescription"));
                $("#openUpdatemodal").click();
            })

            $("#btnUpdate").click(function(e){
                e.preventDefault();
                emptyDate();
            })

            function emptyDate(){
                var inputnmUpdatedate = $("#inputnmUpdatedate").val();

                if(inputnmUpdatedate==("")>0){
                    $(".toast-body").text("Pick a date.");
                    $("#btnToast").click();
                    $("#inputnmUpdatedate").focus();
                }else{
                    checkExistingstatus_v();
                }
            }

            function checkExistingstatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/checkExistingstatus_c',
                    data:$("#frmChequpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Check Number exist.");
                            $("#btnToast").click();
                        }else{
                            updateStatus_v();
                        }
                    }
                })
            }

            function updateStatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/updateStatus_c',
                    data:$("#frmChequpdate").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $("#btnClosemodal").click();
                            viewCheqdata_v();
                            $(".toast-body").text("Updated.");
                            $("#btnToast").click();
                        }
                    }
                })
            }

            $(document).on("click","#btnRevert",function(e){
                e.preventDefault();
                $("#inputnmRequeststatus").val("Open");
                $("#inputnmRfpno").val($(this).attr("data-rfpno"));
                requestStatus_v();
            })

            function requestStatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/requestStatus_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                           revertStatus_v();
                        }
                    }
                })
            }

            function revertStatus_v(){
                $.ajax({
                    type:'ajax',
                    method:'POST',
                    url:'entryvouchering/revertStatus_c',
                    data:$("#frmInputs").serialize(),
                    dataType:'json',
                    success:function(response){
                        if(response.success){
                            $(".toast-body").text("Action completed.");
                            $("#btnToast").click();
                        }
                    }
                })
            }
        })
    </script>
