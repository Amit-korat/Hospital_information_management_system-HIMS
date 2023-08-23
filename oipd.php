<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Patients</title>
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
                    <h3 class="text-dark mb-4">New Patients</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Add Patients</p>


                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fname">First Name</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mname">Middle name</label>
                                            <input type="text" class="form-control" id="mname" placeholder="Middle name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mname">Last name</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputDoc">Gender</label>
                                            <select id="inputDoclist" class="form-control">
                                                <option selected>Male</option>
                                                <option selected>Female</option>
                                                <option selected>Trans</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" id="phone" placeholder="9876543210">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob">
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
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputRoom">Room Number</label>
                                            <select id="inputRoomNo" class="form-control">
                                                <option selected>A-14</option>
                                                <option selected>A-2</option>
                                                <option selected>B-12</option>
                                                <option selected>C-2</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="inputSymptoms">Symptoms</label>
                                            <textarea rows="1" class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary" style="display: flex; justify-content:right;">Add Patient</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <?php include 'footer.php'; ?>

            </footer>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

</body>

</html>