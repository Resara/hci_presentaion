<?php
include 'header.php';
include '../db/dbConnection.php';
?>


<main class="app-content">
    <div class="app-title">
        <div>
<!--            <p><a class="btn btn-primary icon-btn" href="add-category"><i class="fa fa-plus"></i>View</a></p>-->
            <br>
            <h1><i class="fa fa-th-list"></i> Order List</h1>
            <!-- <p>Table to display analytical data effectively</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> Order Id</th>
                            <th> Customer Name</th>
                            <th>Date/Time</th>
                            <th>View</th>
                            <th>Accept</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <?php
                                $sql = "SELECT * FROM `user_order` where status=0";
                                $result = mysqli_query($connection,$sql);

                                while($dataRow=mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td >" . $dataRow['order_id'] . "</td>";
                                    echo "<td >" . $dataRow['user_name'] . "</td>";
                                    echo "<td >" . $dataRow['date'] . "</td>";


                                    echo "<td>
														<div class=\"form-button-action\">
															<a href='order-view.php?id=$dataRow[order_id]'>
																<button type=\"button\" data-toggle=\"tooltip\" 		title=\"View\" class=\"btn btn-link btn-primary btn-lg\" data-original-title=\"Edit Task\">
																	<i class=\"fa fa-eye\"></i>
																</button>
															</a>
															</div>
															</td>";
                                    echo "<td>
														<div class=\"form-button-action\">
															<a href='accept-order.php?id=$dataRow[order_id]'>
																<button type=\"button\" data-toggle=\"tooltip\" 		title=\"Accept\" class=\"btn btn-link btn-primary btn-lg\" data-original-title=\"Edit Task\">
																	<i class=\"fa fa-check\"></i>
																</button>
															</a>
															</div>
															</td>";
                            echo "</tr>";
                                    }
                                ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="js/plugins/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="js/plugins/sweetalert.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $('#sampleTable').DataTable();
</script>
<script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
    }
</script>