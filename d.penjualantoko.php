<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Penjualan Toko</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Highcharts Library -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Page Heading -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Data Penjualan Toko</h1>

                    <!-- Chart Container -->
                    <div id="chartContainer" style="width:100%; height:400px;"></div>

                    <script>
                        Highcharts.chart('chartContainer', {
                            chart: {
                                type: 'bar' // Set chart type to 'bar' for bar chart
                            },
                            title: {
                                text: 'Data CostRate dan Availability'
                            },
                            xAxis: {
                                categories: [
                                    'Tool Crib',
                                    'Sheet Metal Racks',
                                    'Paint Shop',
                                    'Paint Storage',
                                    'Metal Storage',
                                    'Miscellaneous Storage',
                                    'Finished Goods Storage',
                                    'Frame Forming',
                                    'Frame Welding',
                                    'Debur and Polish',
                                    'Paint',
                                    'Specialized Paint',
                                    'Subassembly',
                                    'Final Assembly'
                                ], // Toko sesuai tabel
                                title: {
                                    text: 'Nama Toko'
                                }
                            },
                            yAxis: {
                                min: 0,
                                title: {
                                    text: 'Nilai'
                                }
                            },
                            tooltip: {
                                shared: true
                            },
                            series: [
                                {
                                    name: 'CostRate',
                                    data: [
                                        0, 0, 0, 0, 0, 0, 0, 22.5, 0, 14.5, 15.75, 18, 12.25, 12.25
                                    ] // CostRate sesuai tabel
                                },
                                {
                                    name: 'Availability',
                                    data: [
                                        0, 0, 0, 0, 0, 0, 0, 96, 120, 120, 120, 80, 120, 120
                                    ] // Availability sesuai tabel
                                }
                            ]
                        });
                    </script>
                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dashboard Data Penjualan 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>

</body>

</html>