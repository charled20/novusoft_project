<div class="col-sm-12">
<table class="table table-bordered">
    <td>
    <div class="my-4"></div>

        <div class="row col-sm-12 d-flex justify-content-between">
            <div class="ml-4 row">
                <button class="btn btn-light py-1" id="acct_gen" active>General</button>
                <button class="btn btn-light py-1" id="acct_tax">Tax</button>
            </div>            
            <table class="table table-bordered">
                <td style="height: 100px;">
                    <div class="col-sm-6">
                        <div id="acct_body" class="col-sm-12"> 
                            <div class="form-group-sm row">
                                <label class="col col-form-label">Consolidating BP</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="requster_name" placeholder="" >
                                </div>
                            </div>  
                            <div class="row">
                                    <div class="my-auto">
                                        <input type="checkbox" class="ml-3 mr-3">Payment Consolidation
                                    </div>
                                    <div class="my-auto">
                                        <input type="checkbox" class="ml-3 mr-3">Delivery Consolidation
                                    </div>
                            </div>
                            <div class="form-group-sm row">
                                <label class="col col-form-label">Accounts Receivable</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="requster_name" placeholder="" >
                                </div>
                            </div>
                            <div class="form-group-sm row">
                                <label class="col col-form-label">Payment Advances</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="requster_name" placeholder="" >
                                </div>
                            </div>  
                            <div style="height:20px;"></div>
                            <div class="form-group-sm row">
                                <label class="col col-form-label">Planning Group</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="requster_name" placeholder="" >
                                </div>
                            </div> 
                            <div class="row">
                                    <div class="my-auto">
                                        <input type="checkbox" class="ml-3 mr-3">Affiliate
                                    </div>
                            </div>
                            <div style="height:20px;"></div>
                        </div>
                    </div>
                </td>
            </table>
        </div>

        <div style="height:40px;"></div>
    </td>
</table>
</div>


<script>
        $(function() {
            $('#acct_gen').click(function() {
                textval = "GENERAL";
                        $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_4_1.php",
                            data: {textval : textval },
                            success: function(data){
                                $('#acct_tax').removeClass('active');
                                $(this).addClass('active');
                                $("#acct_body").empty();
                                $("#acct_body").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
            });
        });

        $(function() {
            $('#acct_tax').click(function() {
                textval = "TAX";
                         $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_4_2.php",
                            data: {textval : textval },
                            success: function(data){
                                $('#acct_gen').removeClass('active');
                                $(this).addClass('active');
                                $("#acct_body").empty();
                                $("#acct_body").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
            });
        });
    </script>