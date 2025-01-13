<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Event - TelU Esports</title>
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#table-event').DataTable();
        });
    </script>
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

        .event {
            margin-left: 5%;
            margin-right: 5%;
            text-align: center;
            margin-bottom: 50px;
        }

        .event-page {
            margin-top: 50px;
        }

        .event-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
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
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <section class="event">
      <div class="container">
        <p class="event-page">Home > <a style="color:#00917A;">Events</a></p> 
        <h1 class="event-title">EVENTS</h1>
        <table class="table text-light mb-5" id="table-event">
            <thead>
                <tr>
                <th scope="col" style="font-weight: bold;">ID</th>
                <th scope="col" style="font-weight: bold;">DIVISION NAME</th>
                <th scope="col" style="font-weight: bold;">EVENT NAME</th>
                <th scope="col" style="font-weight: bold;">DESCRIPTION</th>
                <th scope="col" style="font-weight: bold;">IMAGE</th>
                <th scope="col" style="font-weight: bold;">DATE START</th>
                <th scope="col" style="font-weight: bold;">DATE END</th>
                <th scope="col" style="font-weight: bold;">CREATE AT</th>
                <th scope="col" style="font-weight: bold;">UPDATE AT</th>
                <th scope="col" style="font-weight: bold;">EDIT</th>
                <th scope="col" style="font-weight: bold;">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($event_data as $ed) {
                        echo'
                        <tr>
                            <th scope="row">'.$ed['id'].'</th>
                            <td>'.$ed['division_name'].'</td>
                            <td>'.$ed['event_name'].'</td>
                            <td>'.$ed['event_description'].'</td>
                            <td>'.$ed['event_image'].'</td>
                            <td>'.$ed['event_date_start'].'</td>
                            <td>'.$ed['event_date_end'].'</td>
                            <td>'.$ed['create_at'].'</td>
                            <td>'.$ed['update_at'].'</td>
                            <td><button data-bs-toggle="modal" data-bs-target="#editModal'.$ed['id'].'" class="btn btn-warning"><i class="fa-solid fa-edit"></i></button></td>
                            <td><button data-bs-toggle="modal" data-bs-target="#deleteModal'.$ed['id'].'" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        ';
                    }
                ?>

            </tbody>
        </table>
      </div>
    </section>
    <?php $this->load->view('footer'); ?>
  </body>
</html>