<?php include 'header.php'; ?>
<?php include '../db/dbConnection.php';

$select = "SELECT MAX(sub_cat_id ) AS max_id FROM sub_category_tbl";
$result = mysqli_query($connection, $select);
$dataRow = mysqli_fetch_array($result);
$dataRow = ++$dataRow['max_id'];


?>

<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> ADD SUB CATEGORY</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <form action="add-subcategoryPro.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="control-label">SUB ID</label>
                            <input class="form-control" type="text" name="txt_sid" readonly="" required=""
                                   value="<?php echo $dataRow; ?>">
                        </div>
                        <?php

                        //get category data

                        ?>
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select required class="form-control" name="txt_id" id="slt_category " onchange="save()">
                            <option selected>Select Main Category</option>
                                <?php
                                $Mselect = "SELECT * FROM category_tbl";
                                $Mresult = mysqli_query($connection, $Mselect);
                                while ($MdataRow = mysqli_fetch_array($Mresult)){
                                echo "<option value='$MdataRow[category_id]' > $MdataRow[category_name]</option>";
//                                echo
                                }?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label"> SUB Category Name</label>
                            <input class="form-control" type="text" name="txt_Scategory" required="">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> Satus</label>
                            <input class="form-control" type="text" name="txt_status" required="">
                        </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i
                                class="fa fa-fw fa-lg fa-check-circle"></i>Upload
                    </button>&nbsp;&nbsp;&nbsp;<a
                            class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </div>
        </div>
        </form>

    </div>
</main>

<?php include 'footer.php'; ?>
<script type="text/javascript" src="js/plugins/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        editor = CKEDITOR.replace('editor1');
        editor.addCommand("mySimpleCommand", {
            exec: function (edt) {
                data = edt.getData();
                edt.setData(data +
                    "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
                );
            }
        });
        editor.ui.addButton('SuperButton', {
            label: "Add Table",
            command: 'mySimpleCommand',
            toolbar: 'insert',
            icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
        });


    });
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        editor1 = CKEDITOR.replace('editor2');
        editor1.addCommand("mySimpleCommand", {
            exec: function (edt) {
                data = edt.getData();
                edt.setData(data +
                    "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
                );
            }
        });
        editor1.ui.addButton('SuperButton', {
            label: "Add Table",
            command: 'mySimpleCommand',
            toolbar: 'insert',
            icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
        });


    });

    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        editor1 = CKEDITOR.replace('editor3');
        editor1.addCommand("mySimpleCommand", {
            exec: function (edt) {
                data = edt.getData();
                edt.setData(data +
                    "<table align='center' border='2' cellpadding='2' cellspacing='2' style='width:100%'> <thead> <tr> <th scope='col'>SIZE</th>  <th scope='col'>PRODUCT CODE</th>   <th scope='col'>PRODUCT PRICE | LKR</th> </tr> </thead> <tbody> <tr> <td style=text-align:center><strong>S</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td> </tr>  <tr> <td style=text-align:center><strong>M</strong></td>  <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td>  </tr> <tr> <td style=text-align:center><strong>L</strong></td> <td style=text-align:center>&nbsp;</td> <td style=text-align:center>&nbsp;</td></tr><tr><td style=text-align:center><strong>XL</strong></td> <td style=text-align:center>&nbsp;</td><td style=text-align:center>&nbsp;</td></tr></tbody> </table><p>&nbsp;</p>"
                );
            }
        });
        editor1.ui.addButton('SuperButton', {
            label: "Add Table",
            command: 'mySimpleCommand',
            toolbar: 'insert',
            icon: 'https://avatars1.githubusercontent.com/u/5500999?v=2&s=16'
        });


    });

</script>
<script type="text/javascript">
    $('#demoSelect').select2();
</script>