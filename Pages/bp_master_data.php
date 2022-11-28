<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Partner</title>

    <link href="../novusoft_proj/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../novusoft_proj/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        html {
            font-size: 10px;
        } 
        .form-group {
            margin-bottom: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row col-sm-12 d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-7">
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Code</label>
                        <div class="container col-sm-8 row">
                            <input type="text" class="col-sm-3 form-control" id="requester" placeholder="Manual" disabled>
                            <input type="text" class="col-sm-4 form-control" id="requester" placeholder="420303" disabled>
                            <input type="text" class="col-sm-5 form-control" id="requester" placeholder="Customer">
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="requster_name" placeholder="EquiParco Construction Company">
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Nickname</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="branch" placeholder="EquiParco Construction Company">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Group</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="Customers">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Currency</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="Philippine Peso">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">PST Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="" disabled>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group-sm row col">
                        <label class="col col-form-label"></label>
                        <div class="container col-sm-8 row">
                            <input type="text" class="col-sm-6 form-control" id="requester" placeholder="Local Currency" >
                        </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Account Balance</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="status" placeholder="0.00">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Deliveries</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="posting_date" placeholder="300">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Orders</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="valid_until" placeholder="7,545">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Opportunities</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="document_date" placeholder="" disabled>
                    </div>
                </div> 
            </div>
        </div>
        
        <div class="mt-4">
            <div class="">
                <form action="" method="POST">
                    <div class="mx-auto col-sm-9 d-flex justify-content-around text-center">
                        <button type="button" class="btn btn-light border active col-sm-3 py-2 bpmd">GENERAL</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 bpmd">PAYMENT TERMS</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 bpmd">PAYMENT RUN</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 bpmd">ACCOUNTING</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 bpmd">REMARKS</button>
                    </div>
                </form>                
            </div>

            <div class="col-sm-12" id="data-table-bpmd">
                <?php include "sub_pages/bp_md_tb_1.php";?>
            </div>
        </div>


        <div class="my-5"></div>

        <div class="col-sm-12 row d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-7">    
                    <div class="form-group-sm row">
                            <button type="button" class="btn btn-warning p-3">OK</button>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-warning p-3">Cancel</button>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group-sm row d-flex justify-content-end">
                    <div class="col-sm-6">
                        <button type="button" style="width: 100px;" class="btn btn-warning p-3">You Can Also</button>
                    </div>
                </div> 
            </div>
        </div>

        <div class="my-5"></div>

    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../novusoft_proj/vendor/jquery/jquery.min.js"></script>
    <script src="../novusoft_proj/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../novusoft_proj/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../novusoft_proj/js/sb-admin-2.min.js"></script>

    <!--Custom Script-->
    <script>
        $(function() {
            $('.bpmd').click(function() {
                textval = $(this).text();
                //alert(textval);
                if(textval=="GENERAL"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_1.php",
                            data: {textval : textval },
                            success: function(data){
                                //console.log(data);
                                $('.bpmd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-bpmd").empty();
                                $("#data-table-bpmd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PAYMENT TERMS"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_2.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.bpmd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-bpmd").empty();
                                $("#data-table-bpmd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PAYMENT RUN"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_3.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.bpmd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-bpmd").empty();
                                $("#data-table-bpmd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="ACCOUNTING"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_4.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.bpmd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-bpmd").empty();
                                $("#data-table-bpmd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="REMARKS"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/bp_md_tb_5.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.bpmd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-bpmd").empty();
                                $("#data-table-bpmd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else{
                    
                }

                
            });
        });
    </script>

</body>
</html>