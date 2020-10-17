<?php
include 'header.php';
include '../db/dbConnection.php';
?>


<main class="app-content">
    <div class="app-title">
        <div>
            <p><a class="btn btn-primary icon-btn" href="add-subcategory.php"><i class="fa fa-plus"></i>Add New </a></p>
            <br>
            <h1><i class="fa fa-th-list"></i> SUB Category</h1>
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
                            <th>SUBId</th>
                            <th>CATId</th>
                            <th>SUBName</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql="SELECT * FROM sub_category_tbl";
                        $result = mysqli_query($connection,$sql);
                        while($dataRow=mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td >".$dataRow['sub_cat_id']."</td>";
                            echo "<td >".$dataRow['cat_id']."</td>";
                            echo "<td >".$dataRow['subcat_name']."</td>";
                            echo "<td >".$dataRow['status']."</td>";
                            echo "<td><a onClick=\"javascript: return confirm('Please confirm deletion');\"href='delete-subcategory.php?id=$dataRow[sub_cat_id]'>Delete</a></td>";
                            echo "<td><a href='edit-subcategory?id=$dataRow[sub_cat_id]'>Edit</a></td>";
                            echo "</tr>";
                        }?>
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