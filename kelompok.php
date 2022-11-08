<?php
include('header.php');
?>
<?php
include('side-menu.php');
?>


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-white rounded h-100 p-4">
                <h4 class="mb-4 text-dark">Data Kelompok Paswa 2022</h4>
                <p><a href="kelompok_add.php" class="btn btn-primary">Tambah</a></p>
                <div class="table-responsive">
                    <table class="table " id="datatable">
                        <thead>
                            <tr>

                                <td class="text-dark"> No.</td>
                                <td class="text-dark"> Nama Kelompok</td>
                                <td class="text-dark"> Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once("connection.php");
                            $no = 0;
                            $result = mysqli_query($mysqli, "SELECT * FROM tab_kelompok");
                            while ($row = mysqli_fetch_array($result)) {
                                $no++;
                                echo "<tr>";
                                echo "<td class='text-dark'>" . $no . "</td>";
                                echo "<td class='text-dark'>" . $row['nama_kelompok'] . "</td>";
                                echo "<td class='text-dark'> <a href=\"kelompok_edit.php?id=$row[id]\">Edit</a> | 
                        <a href=\"kelompok_pro_delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
<?php
include('footer.php');
?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        $('#datatable').dataTable({
            "pagingType": "full_numbers"
        });
    });
</script>