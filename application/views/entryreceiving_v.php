    <div class="row" style="margin: .3em; cursor:default;">
        <div class="col-md-4">
            <div class="card" style="background-color: #e8fae1; border-radius: 0px; border-color: transparent; zoom: 90%; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="card-body">
                    <h3>Entry</h3>
                    <form id="frmInputs">
                        <label for="inputnmRfpno">RFP No.</label>
                        <input type="text" id="inputnmRfpno" name="txtnmRfpno" class="form-control">
                        <label for="inputnmPayee" style="line-height: 5%;">Payee</label>
                        <input type="text" id="inputnmPayee" name="txtnmRfpno" class="form-control">
                        <label for="inputnmDivision">Division</label>
                        <select name="txtnmDivision" id="inputnmDivision" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmReceivedate">Received Date</label>
                        <input type="date" id="inputnmReceivedate" name="txtnmReceivedate" class="form-control">
                        <label for="inputnmTrxntype">Transaction Type</label>
                        <select name="txtnmTrxntype" id="inputnmTrxntype" class="form-control">
                            <option></option>
                        </select>
                        <label for="inputnmAmount" style="line-height: 5%;">Amount</label>
                        <input type="text" id="inputnmAmount" name="txtnmAmount" class="form-control">
                        <label for="inputnmDescription">Description</label>
                        <textarea name="txtnmDescription" id="inputnmDescription" class="form-control" style="height: 60px;"></textarea>
                    </form>
                    <div class="d-grid">
                        <button id="btnInsert" class="btn btn-success" style="border-radius: 0px;">Save Data</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card" style="background-color: #faf8d9; border-color: transparent; border-radius: 0px; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8"><h3>Repository</h3></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <form id="frmSearch">
                                    <input type="text" name="txtnmSearch" id="inputnmSearch" class="form-control form-control-sm" autocomplete="off" placeholder="Search">
                                    <button class="btn btn-warning btn-sm" style="height: 28.7pt;" id="btnSearch">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset; border-radius: 0px; overflow-y: scroll; height: 590px; scrollbar-width: thin; scrollbar-color: #fadba2 #c9a377; border-color: transparent;">
                        <table class="table table-hover table-striped" style="width: 100%; zoom: 80%; background-color: transparent;" id="tblReceived">
                            <thead style="height: 2em; position: sticky; top: 0;">
                                <tr style="text-align: center; text-transform: uppercase; font-size: 10pt; letter-spacing: 2px;">
                                    <th style="width: 10%; background-color: #fadba2;">Rfp no.</th>
                                    <th style="width: 20%; background-color: #fadba2;">Payee</th>
                                    <th style="width: 15%; background-color: #fadba2;">Amount</th>
                                    <th style="width: 25%; background-color: #fadba2;">Description</th>
                                    <th style="width: 20%; background-color: #fadba2;">Action</th>
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

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header" style="border-bottom: transparent;">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Update</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer" style="border-top: transparent;">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
            <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
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
                                            <button id="btnEdit" class="btn btn-primary btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg> Edit</button>
                                            <button class="btn btn-dark btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16"><path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/></svg> Revert</button>
                                            <button class="btn btn-success btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16"><path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/></svg> Process</button>
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
                                        <td style="font-weight: bolder;">${x['rfpno']}</td>
                                        <td style="text-transform: uppercase;">${x['payee']}</td>
                                        <td style="text-align: right; font-weight: bolder;">${x['amount']}</td>
                                        <td>${x['description']}</td>
                                        <td style="zoom: 70%; text-align: center;">
                                            <button id="btnEdit" class="btn btn-primary btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg> Edit</button>
                                            <button class="btn btn-dark btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16"><path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/></svg> Revert</button>
                                            <button class="btn btn-success btn-sm" style="border-radius: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-check-fill" viewBox="0 0 16 16"><path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 1.59 2.498C8 14 8 13 8 12.5a4.5 4.5 0 0 1 5.026-4.47zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/><path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/></svg> Process</button>
                                        </td>
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
        })
    </script>