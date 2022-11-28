<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Master Data</title>

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
                            <label class="col col-form-label">Item No</label>
                        <div class="container col-sm-8 row">
                            <input type="text" class="col-sm-6 form-control" id="item_no_1" placeholder="Manual" disabled>
                            <input type="text" class="col-sm-6 form-control" id="item_no_2" placeholder="ACC-0046" disabled>
                        </div>
                    </div>
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Description</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="item_desc" placeholder="Hard Hat Yellow"    >
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Foreign Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="foreign_name" placeholder="">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Item Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="item_type" placeholder="Items">
                        </div>
                    </div> 
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Item Group</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="item_group" placeholder="Field 101 Workers">
                        </div>
                    </div>   
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Price List</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="item_list" placeholder="Base Price" disabled>
                        </div>
                    </div> 
                </div>
            </div>

            <div class="col-sm-4">
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="py-1 ml-2 form-check-label" for="flexCheckDefault">
                                        Inventory System
                                    </label>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="py-1 ml-2 form-check-label" for="flexCheckDefault">
                                        Sales System
                                    </label>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="py-1 ml-2 form-check-label" for="flexCheckDefault">
                                        Purchase Item
                                    </label>
                            </div>
                        </div>

                <div class="form-group-sm row col">
                        <label class="col col-form-label">Bar Code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bar_code" placeholder="">
                    </div>
                </div> 
                <div class="form-group-sm row col">
                        <label class="col col-form-label">Unit Price</label>
                            <div class="container col-sm-8 row">
                                <input type="text" class="col-sm-6 form-control" id="prim_currency" placeholder="Currency">
                                <input type="text" class="col-sm-6 form-control" id="amount" placeholder="999.00">
                            </div>
                </div> 
            </div>
        </div>
        
        <div class="mt-4">
            <div class="">
                <form action="" method="POST">
                    <div class="col-sm-12 d-flex justify-content-around text-center">
                        <button type="button" class="btn btn-light border active col-sm-1 imd" style="font-size: 8px;">GENERAL</button>
                        <button type="button" class="btn btn-light border col-sm-2 imd" style="font-size: 8px;">PURCHASING DATA</button>
                        <button type="button" class="btn btn-light border col-sm-1 imd" style="font-size: 8px;">SALES DATA</button>
                        <button type="button" class="btn btn-light border col-sm-2 imd" style="font-size: 8px;">INVENTORY DATA</button>
                        <button type="button" class="btn btn-light border col-sm-1 imd" style="font-size: 8px;">PLANNING DATA</button>
                        <button type="button" class="btn btn-light border col-sm-2 imd" style="font-size: 8px;">PRODUCTION DATA</button>
                        <button type="button" class="btn btn-light border col-sm-1 imd" style="font-size: 8px;">PROPERTIES</button>
                        <button type="button" class="btn btn-light border col-sm-1 imd" style="font-size: 8px;">REMARKS</button>
                        <button type="button" class="btn btn-light border col-sm-1 imd" style="font-size: 8px;">ATTACHMENTS</button>
                    </div>
                </form>                
            </div>

            <div class="col-sm-12" id="data-table-imd">
                <?php include "sub_pages/item_md_tb_1.php";?>
            </div>
        </div>

    

        <div class="my-5"></div>

        <div class="col-sm-12 row d-flex justify-content-start">
                            <button type="button" style="width: 80px;" class="ml-2 btn btn-warning p-3">OK</button>
                            <button type="button" style="width: 80px;" class="ml-4 btn btn-warning p-3">Cancel</button>
        </div>

        <div id="wh-btn" class="col-sm-12 row d-flex justify-content-end">
                        <!--SET WH Button appears here-->     
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
            $('.imd').click(function() {
                textval = $(this).text();
                //alert(textval);
                if(textval=="GENERAL"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_1.php",
                            data: {textval : textval },
                            success: function(data){
                                //console.log(data);
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PURCHASING DATA"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_2.php",
                            data: {textval : textval },
                            success: function(data){
                                console.log(data);
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="SALES DATA"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_3.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="INVENTORY DATA"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_4.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#data-table-imd").append(data);
                                $("#wh-btn").empty();
                                $("#wh-btn").append('<button type="button" style="width: 100px;" class="ml-1 btn btn-primary p-2">Set Default WH</button>');
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PLANNING DATA"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_5.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PRODUCTION DATA"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_6.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PROPERTIES"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_7.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="REMARKS"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_8.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="ATTACHMENTS"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/item_md_tb_9.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.imd').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table-imd").empty();
                                $("#wh-btn").empty();
                                $("#data-table-imd").append(data);
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