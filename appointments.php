<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Appointments</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body id="page-top">
    <div id="wrapper">

        <?php include 'sidebar.php'; ?>

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php include 'header.php'; ?>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Appointments</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold" style="display:flex; justify-content:space-between;">Appointments Info
                                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Add Appointment
                                </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fullname">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" placeholder="Full Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="9876543210" maxlength="10" >
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputDoc">Doctor</label>
                                            <select id="inputDoclist" class="form-control">
                                                <option selected>Dr. Rama</option>
                                                <option selected>Dr. Smit</option>
                                                <option selected>Dr. B.K.Patil</option>
                                                <option selected>Dr. Abcd</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="datetime"> Appointment Date and time</label>
                                            <input type="datetime-local" class="form-control" id="datetime" name="datetime">
                                        </div>



                                    </div>
                                    <button type="submit" class="btn btn-primary">Create Appointment</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>P.Id</th>
                                            <th>Name</th>
                                            <th>Phone No.</th>
                                            <th>Age</th>
                                            <th>Doctor</th>
                                            <th>Appointment Date</th>
                                            <th>Previous Appointment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>102</td>
                                            <td>Airi Satou</td>
                                            <td>9876543210</td>
                                            <td>35</td>
                                            <td>Dr. Smit</td>
                                            <td>11/2/2008</td>
                                            <td>1/2/2008</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>

                                            <td><strong>P.Id</strong></td>
                                            <td><strong>Name</strong></td>
                                            <td><strong>Phone No.</strong></td>
                                            <td><strong>Age</strong></td>
                                            <td><strong>Doctor</strong></td>
                                            <td><strong>Appointment Date</strong></td>
                                            <td><strong>Previous Appointment</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <?php include 'footer.php'; ?>

            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>