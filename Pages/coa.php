<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart of Accounts</title>

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
                            <label class="col col-form-label">G/L Account Details</label>
                    </div> 
                    <div class="row">
                            <input type="radio" class="ml-3 mr-3"> Title
                            <input type="radio" class="ml-4 mr-3"> Active Account
                    </div>
                    <div class="form-group-sm row">
                            <label class="col col-form-label">G/L Account</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="requster_name" placeholder="">
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="branch" placeholder="">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">External Code</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="">
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Currency</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="PHP">
                        </div>
                    </div>   


                    <div style="height: 40px;"></div>


                    <div class="row mb-2">
                            <input type="checkbox" class="ml-3 mr-3"> Confidential
                            <div style="margin-left: 30px;">Level<input type="text" class="ml-4 mr-3"></div>                             
                    </div>
                    <div class="row">
                            <label class="col-sm-1" for="">Balance</label>
                            <div style="margin-left: 20px;" class="row col-sm-10"><input type="text" style="margin-left: 55px;" class="col-sm-4 mr-2" placeholder="0.00"><input type="text" style="margin-left: 10px;" class="col-sm-4" placeholder="PHP"></div>  
                    </div>
                    <hr>
                    <h5>G/L Account Properties</h5>   
                    <div class="form-group-sm row mb-2">
                            <label class="col col-form-label">Account Type</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="branch" placeholder="Other">
                        </div>
                    </div>  
                    <div>
                        <input type="checkbox" class="mr-4"> Control Account
                        <input type="checkbox" class="mr-4"> Cash Account
                        <input type="checkbox" class="mr-4"> Indexed
                        <input type="checkbox" class="mr-4"> Block Manuel Posting
                    </div>

                    <div style="height: 20px;"></div>

                    <div>
                        <input type="checkbox" class="mr-4"> Cash Flow Relevant
                    </div>

                    <div style="height: 40px;"></div>

                    <h5>Relevant for Cost Accounting</h5>

                    <div style="margin-left: 20px;" class="row">
                        <div><input type="checkbox" class="mr-4"> Project</div>                        
                        <div style="margin-left: 68px;"><input type="text" class="mr-4"></div>
                    </div>

                    <hr>

                    <h5>Distribution Rule</h5>

                    <div style="margin-left: 20px;" class="row">
                    <div><input type="checkbox" class="mr-4"> Development</div>                        
                        <div style="margin-left: 40px;"><input type="text" class="mr-4"></div>
                    </div>

                    <div style="height: 40px;"></div>

                    <div class="col-sm-8 row d-flex justify-content-between">
                        <button class="btn btn-warning">Find</button>
                        <button class="btn btn-warning">Cancel</button>
                        <button class="btn btn-secondary" disabled>Account Details</button>
                    </div>

                </div>
            </div>

            <div class="col-sm-6">
                <iframe src="http://localhost/novusoft_proj/Pages/sub_pages/coa_iframe_tb_1.php" frameborder="1" style="height: 430px; width: 100%;"></iframe>
            </div>
        </div>
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