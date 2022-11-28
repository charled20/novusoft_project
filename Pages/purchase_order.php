<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order</title>

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
                            <label class="col col-form-label">Project Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="project_code" placeholder="BDGT-PSD-2022-00005" disabled>
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" placeholder="EquiParco Construction Company" disabled>
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Contact Person</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="contact_person" placeholder="Manny Pacquiao">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Vendor Ref No.</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="vendor_ref_no" placeholder="">
                        </div>
                    </div>   
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group-sm row col">
                        <label class="col col-form-label">No. </label>
                        <div class="container col-sm-8 row">
                            <input type="text" class="col-sm-6 form-control" id="requester" placeholder="Primary" disabled>
                            <input type="text" class="col-sm-6 form-control" id="requester" placeholder="2" disabled>
                        </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Status </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="status" placeholder="Open">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Posting Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="posting_date" placeholder="09/09/2022">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Valid Until</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="valid_until" placeholder="10/30/2022">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Document Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="document_date" placeholder="09/09/2022">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Required Date</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="required_date" placeholder="10/19/2022"> 
                    </div>
                </div> 
            </div>
        </div>
        
        <div class="mt-4">
            <div class="">
                <form action="" method="POST">
                    <div class="mx-auto col-sm-9 d-flex justify-content-around text-center">
                        <button type="button" class="btn btn-light border active col-sm-3 py-2 order">ITEM</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 order">BUDGET</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 order">PROJECT SUMMARY</button>
                        <button type="button" class="btn btn-light border col-sm-3 py-2 order">ACCOUNTING</button>
                    </div>
                </form>                
            </div>

            <div class="col-sm-12" id="data-table-order">
                <?php include "sub_pages/po_tb_1.php";?>
            </div>
        </div>

        <div class="col-sm-12 row d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-7">
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Buyer</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="buyer" placeholder="Juan dela Cruz">
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Owner</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="owner" placeholder="Crisostomo Ibarra">
                        </div>
                    </div> 
                    <hr>
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Remarks</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control py-5" id="owner">
                        </div>
                    </div>   
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Total Before Discount </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tot_before_disc" placeholder="27,800.00" disabled>
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Discount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="discount" placeholder="">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Freight</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="freight" placeholder="" disabled>
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Tax</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tax" placeholder="3,336.00" disabled>
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Total Payment Due</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="tot_pymnt_due" placeholder="31,136.00"> 
                    </div>
                </div> 
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
                        <button type="button" class="btn btn-secondary p-3" disabled>Copy From</button>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-warning p-3">Copy To</button>
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
            $('.order').click(function() {
                textval = $(this).text();
                //alert(textval);
                if(textval=="ITEM"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pq_tb_1.php",
                            data: {textval : textval },
                            success: function(data){
                                //console.log(data);
                                $('.order').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-order").empty();
                                $("#data-table-order").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="BUDGET"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pq_tb_2.php",
                            data: {textval : textval },
                            success: function(data){
                                console.log(data);
                                $('.order').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-order").empty();
                                $("#data-table-order").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PROJECT SUMMARY"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pq_tb_3.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.order').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-order").empty();
                                $("#data-table-order").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="ACCOUNTING"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pq_tb_4.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.order').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-order").empty();
                                $("#data-table-order").append(data);
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