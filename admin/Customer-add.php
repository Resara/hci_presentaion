<?php include 'header.php'; ?>

<main class="app-content">
    <div class="app-title">
        <div>
            <p><a class="btn btn-primary icon-btn" href="add-new-customer"><i class="fa fa-plus"></i>Add New Customer </a></p>
            <br>
            <h1><i class="fa fa-th-list"></i> Customer</h1>
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
                                <th>Id</th>
                                <th>Name</th>
                                <th>Added Date/Time</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $sql = 'SELECT * FROM category_tbl';
                            // $result = mysqli_query($connection, $sql);
                            // while ($dataRow = mysqli_fetch_assoc($result)) {
                            //     echo '<tr>';
                            //     echo '<td >'.$dataRow['category_id'].'</td>';
                            //     echo '<td >'.$dataRow['category_name'].'</td>';
                            //     echo '<td >'.$dataRow['added_date'].'</td>';
                            //     echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\"href='delete-category?id=$dataRow[category_id]'>Delete</a></td>";
                            //     echo "<td><a href='edit-category?id=$dataRow[category_id]'>Edit</a></td>";
                            //     echo '</tr>';
                            // }
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