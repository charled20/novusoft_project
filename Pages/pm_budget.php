<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management - Budget</title>

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
                            <input type="text" class="form-control" id="requster_name" placeholder="BDGT-PSD-2022-7-0005">
                        </div>
                    </div>     
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Date Started</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="branch" placeholder="06/27/2022" disabled>
                        </div>
                    </div>  
                    <div class="form-group-sm row">
                            <label class="col col-form-label">Duration</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="department" placeholder="60 Days" disabled>
                        </div>
                    </div>   
                </div>
            </div>

        </div>
        
        <div class="mt-4">
            <div class="col-sm-12" id="data-table-bpmd">
                <?php include "sub_pages/pm_bdgt_tb_1.php";?>
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


</body>
</html>