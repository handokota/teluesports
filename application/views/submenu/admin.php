<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>TelU Esports</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            /* font-family: Poppins !important; */
            font-weight: normal;
            font-size: 16px;
        }

        body {
            font-family: Poppins !important;
            /* background-color: #000000; */
            background: linear-gradient(180.96deg, #000000 0.82%, #00917A 129.1%);
            color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #ffffff;
        }

        li {
            list-style: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* padding: 20px 50px; */
            color: #ffffff;
            font-family: Poppins !important;
            margin-top: 20px;
            margin-left: 5%;
            margin-right: 5%;
        }

        .nav-links a {
            text-decoration: none;
        }

        .nav-links a:active {
            color: #00917A;
        }

        .navbar-brand {
            position: relative;
            width: 50px;
        }

        .menu {
            display: flex;
            gap: 1em;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #00917A;
            transition: 0.5s;
        }

        .active {
            color: #00917A;
        }

        .menu li {
            padding: 10px;
            text-align: center;
            width: 120px;
            /* background-color: #00917A;
            border-radius: 5px; */
        }

        .menu button {
            text-align: center;
            /* padding: 14px; */
            cursor: pointer;
            border: none;
            padding: 10px;
        }

        .contact {
            color: #ffffff;
            background-color: #00917A;
            border-radius: 5px;
            width: 120px;
            font-size: 16px;
            font-family: Poppins;
            cursor: pointer;
        }

        .contact img {
            width: 50%;
        }

        .btn-close:hover {
            background-color: #ff0000;
        }

        .divisions {
            margin-left: 5%;
            margin-right: 5%;
            text-align: center;
            margin-bottom: 50px;
        }

        .divisions-page {
            margin-top: 50px;
        }

        .divisions-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .divisions-content {
            font-size: 18px;
            margin-bottom: 0px;
        }

        footer {
            background-color: #000000;
            color: #ffffff;
            font-family: Poppins !important;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 5%;
            padding-right: 5%;
        }

        .footer-logo {
            font-size: 18px;
            color: #00917A;
            font-weight: bold;
        }

        .footer-logo img {
            /* margin-top: 50px; */
            width: 72px;
        }

        .footer-content {
            color: #ffffff;
            font-size: 16px;
            /* margin-top: 50px; */
        }

        .copyright {
            text-align: center;
            color: #808080;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #00917A;
            border: none;
            width: 120px;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .btn-primary:hover {
            transition: 0.5s;
            background-color: #006655;
        }

        .modal .modal-body input.form-control {
            background-color: #1A1D20;
            color: #ffffff;
            border-color: #00917A;
            font-size: 16px;
            border-radius: 6px;
        }
        
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <section class="divisions-form text-center">
    <div class="container">
        <p class="divisions-page text-center">Home > <a style="color:#00917A;">Divisions</a></p>
        <h1 class="divisions-title text-center">DIVISIONS</h1>
        <p class="divisions-content text-center mb-5">Tel-U Esports memiliki 3 divisi terbesar saat ini yaitu PUBG Mobile, Valorant, dan Mobile Legends.</p>
        <!-- Button trigger modal -->
        <?php 
            if(isset($gagal)) {
                echo '<p class="divisions-content text-center mb-5">'.$gagal.'</p>';
            }
        ?>
        <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#createModal" style="width:auto;">
        Create Division
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content bg-dark">
                <form action="<?php echo base_url("Admin_ctrl/inputData"); ?> " method="POST" enctype="multipart/form-data"> <!--id="form-division"-->
                    <div class="modal-header" style="border: none;">
                        <h5 class="modal-title" id="createModalLabel">Create Division Tel-U Esports</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Division Name</label>
                            <input type="text" class="form-control"name="division_name" id="division_name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Achievement</label>
                            <input type="text" class="form-control" name="division_achievement" id="division_achievement">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Requirement</label>
                            <input type="text" class="form-control" name="division_requirement" id="division_requirement">
                        </div>
                        <div class="">
                            <label for="exampleFormControlInput1" class="form-label">Image</label>
                            <input type="file" class="form-control" name="division_image" id="division_image" accept="image/png">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center" style="border: none;">
                        <!-- <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a> -->
                        <button type="submit" class="btn btn-primary" style="width:auto;">Save</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <table class="table text-light mb-5" id="table-division">
        <thead>
            <tr>
            <th scope="col" style="font-weight: bold;">ID</th>
            <th scope="col" style="font-weight: bold;">NAME</th>
            <th scope="col" style="font-weight: bold;">ACHIEVEMENT</th>
            <th scope="col" style="font-weight: bold;">REQUIREMENT</th>
            <th scope="col" style="font-weight: bold;">IMAGE</th>
            <th scope="col" style="font-weight: bold;">UPDATE AT</th>
            <th scope="col" style="font-weight: bold;">EDIT</th>
            <th scope="col" style="font-weight: bold;">DELETE</th>
            </tr>
        </thead>
        <tbody id="table-body-division">
        </tbody>
        </table>
    </div>
 
    </section>
    <?php $this->load->view('footer'); ?>
    <div id="modal_group">
    </div>

  <script type="text/javascript">
        //Post ajax
        // $('#form-division').submit(function( event ) {
        //     event.preventDefault();
        //     $.ajax({
        //         url: 'Admin_ctrl/inputData',
        //         type: 'post',
        //         headers: {
        //             "Content-Type": "multipart/form-data"
        //         },
        //         data: $('#form-division').serialize(),
        //         dataType: 'json',
        //         success: function( _response ){
        //             //...
        //         },
        //         error: function( _response ){
        //             // Handle error
        //         }
        //     });

        //     //Empty input after submit
        //     $("#division_name").val('');
        //     $("#division_achievement").val('');
        //     $("#division_requirement").val('');
        //     $("#division_image").val('');

        //     //location.reload();
        // });
        
        //Get data ajax
        $(document).ready(function() {
            clear();
        });
        
        function clear() {
            setTimeout(function() {
                update();
                clear();
            }, 1000); //Every 1500 milliseconds
        }
        
        function update(){
            $.ajax({
                url: '<?php echo base_url("/Admin_ctrl/getAllDivision") ?>',
                type: 'get',
                dataType: 'json',
                success: function(response){
                    var len = 0;
                    $('#table-body-division').empty();

                    if(response != null){
                        len = response.length;
                    }
                    
                    if(len > 0){
                        for(var i=0; i<len; i++){
                            //Attribute
                            var id = response[i].id;
                            var division = response[i].division_name;
                            var achievement = response[i].division_achievement;
                            var requirement = response[i].division_requirement;
                            var image = response[i].division_image;
                            var update = response[i].division_update_at;

                            var tr_str = 
                            "<tr> "+
                            "<th scope='row'>"+id+"</th> "+
                                "<td>"+division+"</td> "+
                                "<td>"+achievement+"</td> "+
                                "<td>"+requirement+"</td> "+
                                "<td>"+image+"</td> "+
                                "<td>"+update+"</td> "+
                                "<td><button data-bs-toggle='modal' data-bs-target='#editModal"+id+"' class='btn btn-warning'><i class='fa-solid fa-edit'></i></button></td> "+
                                "<td><button data-bs-toggle='modal' data-bs-target='#deleteModal"+id+"' class='btn btn-danger'><i class='fa-solid fa-trash'></i></button></td> "+
                            "</tr> ";
                            $("#table-body-division").append(tr_str);

                            var modal = 
                                '<div class="modal fade" id="deleteModal'+id+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">' +

                                    '<div class="modal-dialog text-center"> '+
                                        '<div class="modal-content bg-dark rounded"> '+
                                        '<div class="modal-header"> '+
                                            '<h5 class="modal-title" id="exampleModalLabel">Delete '+division+'?</h5> '+
                                            '<button type="button" class="btn btn-close btn-outline-success" data-bs-dismiss="modal" aria-label="Close"></button> '+
                                            
                                        '</div> '+
                                        '<div class="modal-body"> '+
                                            '<a class="btn btn-danger" href="<?php echo base_url("/Admin_ctrl/delete/") ?>'+id+'">Yes, delete</a> '+
                                        '</div> '+
                                        '</div> '+
                                    '</div> '+
                                '</div> '+
                                '<div class="modal fade" id="editModal'+id+'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">' +

                                    '<div class="modal-dialog text-center"> '+
                                        '<div class="modal-content bg-dark rounded"> '+
                                        '<div class="modal-header" style="border: none;"> '+
                                            '<h5 class="modal-title" id="exampleModalLabel">Edit '+division+'?</h5> '+
                                            '<button type="button" class="btn btn-close btn-outline-success" data-bs-dismiss="modal" aria-label="Close"></button> '+
                                            
                                        '</div> '+
                                        '<div class="modal-body text-start"> '+
                                            '<form action="<?php echo base_url("Admin_ctrl/editData/"); ?>' + id + '" method="POST" enctype="multipart/form-data"> <!--id="form-division"--> '+
                                                    '<div class="mb-3"> '+
                                                        '<label for="exampleFormControlInput1" class="form-label">Division Name</label> '+
                                                        '<input type="text" class="form-control"name="division_name" value="'+ division +'" id="division_name"> '+
                                                    '</div> '+
                                                    '<div class="mb-3"> '+
                                                        '<label for="exampleFormControlInput1" class="form-label">Achievement</label> '+
                                                        '<input type="text" class="form-control" name="division_achievement" value="'+ achievement +'" id="division_achievement"> '+
                                                    '</div> '+
                                                    '<div class="mb-3"> '+
                                                        '<label for="exampleFormControlInput1" class="form-label">Requirement</label> '+
                                                        '<input type="text" class="form-control" name="division_requirement" value="'+ requirement +'" id="division_requirement"> '+
                                                    '</div> '+
                                                    '<div class="mb-3"> '+
                                                        '<label for="exampleFormControlInput1" class="form-label">Image</label> '+
                                                        '<img src="<?php echo base_url('assets/uploads/divisions/'); ?>'+ image +'" class="card-img-top mb-3" alt="..." style="border-top-left-radius: 20px; border-top-right-radius: 20px; border-bottom-left-radius: 20px; border-bottom-right-radius: 20px; box-shadow: 0 5px 10px rgba(0,0,0,.2)"> '+
                                                        '<input type="file" class="form-control" name="division_image" id="division_image" accept="image/png"> '+
                                                    '</div> '+
                                                    '<div class="text-center"> '+
                                                        '<button type="submit" class="btn btn-primary" style="width:auto;">Save</button> '+
                                                    '</div> '+
                                            '</form> '+
                                        '</div> '+
                                        '</div> '+
                                    '</div> '+
                                '</div>' ;
                                $("#modal_group").append(modal);
                        }
                    }else{
                        var tr_str = 
                            "<h5>Empty Data</h5>";
                        $("#table-body-division").append(tr_str);
                    }
                }
            });
        }
    </script>
      </body>
</html>