<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Settings</title>

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
        <div class="mt-4">
            <div class="">
                <form action="" method="POST">
                    <div class="mx-auto col-sm-9 d-flex justify-content-around text-center">
                        <button type="button" class="btn btn-light border active col-sm-1 py-2 header">BP</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">BUDGET</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">SERVICES</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">DISPLAY</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">FONT/BG</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">PATH</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">STOCK</button>
                        <button type="button" class="btn btn-light border col-sm-2 py-2 header">RESOURCES</button>
                        <button type="button" class="btn btn-light border col-sm-2 py-2 header">CASH FLOW</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">COCKPIT</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">COST ACCTNG</button>
                        <button type="button" class="btn btn-light border col-sm-1 py-2 header">PRICING</button>
                        <button type="button" class="btn btn-light border col-sm-2 py-2 header">HIDE FUNCTIONS</button>
                    </div>
                </form>                
            </div>

            <div class="col-sm-12" id="data-table">
                <?php include "sub_pages/admin_gen_settings_tb_1.php";?>
            </div>
        </div>

        <div class="my-5"></div>

        <div class="col-sm-12 row d-flex justify-content-between">
            <div class="col-sm-6">
                <div class="col-sm-7">    
                    <div class="form-group-sm row">
                            <button type="button" class="btn btn-warning p-3">Add</button>
                        <div class="col-sm-8">
                            <button type="button" class="btn btn-warning p-3">Cancel</button>
                        </div>
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
            $('.header').click(function() {
                textval = $(this).text();
                //alert(textval);
                if(textval=="ITEM"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pr_tb_1.php",
                            data: {textval : textval },
                            success: function(data){
                                //console.log(data);
                                $('.header').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table").empty();
                                $("#data-table").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="BUDGET"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pr_tb_2.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.header').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table").empty();
                                $("#data-table").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="PROJECT SUMMARY"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pr_tb_3.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.header').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table").empty();
                                $("#data-table").append(data);
                            },
                            error: function(data){
                            alert('Error!');
                            }
                        });
                }
                else if(textval=="ACCOUNTING"){
                    $.ajax({
                            type: 'POST',
                            url: "Pages/sub_pages/pr_tb_4.php",
                            data: {textval : textval },
                            success: function(data){
                                $('.header').removeClass('active');
                                $(this).addClass('active');
                                $("#data-table").empty();
                                $("#data-table").append(data);
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