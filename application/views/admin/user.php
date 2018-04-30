<style media="screen">
  td{
    text-align: center;
  }
  th{
    text-align: center;
  }
</style>
<div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Data User</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link"></a></li>
                                    <li><a class="close-link">
                                    </a></li>
                                    <a href="#" class="btn btn-success">
                                      Tambah
                                    </a>
                                    <a href="<?php echo base_url();?>admin/downloadkeluar"  class="btn btn-dark">Download Excel</a>
                                    <li><a class="close-link"></a></li>                                          </ul>
                                    <div class="clearfix"></div>
                                </div>


                                <div class="x_content">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table">
                                        <thead>
                                            <tr class="headings">

                                                <th>No </th>
                                                <th>Nama </th>
                                                <th>Nama Pengguna</th>
                                                <th>Level</th>
                                                <th class=" no-link last"><span class="nobr">Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
<?php
$row=$this->db->get('user');
if ($row->num_rows()>0) {
  $no=0;
  foreach ($row->result() as $user) {
    $no++;
    echo '  <tr>
        <td>'.$no.'</td>
        <td>'.$user->username.'</td>
        <td>'.$user->nama_usr.'</td>
        <td>'.$user->level.'</td>
        <td>
    <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
    <a href="" onclick="return confirm("anda yakin akan menghapus data ini");" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

        </td>
    </tr>';
  }
}else{
  echo '<td colspan="5" style="text-align:center;">Data Masih Kosong !!</td>';
}

 ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <!-- Datatables -->
        <script src="<?php echo base_url();?>assets/js/datatables/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/datatables/tools/js/dataTables.tableTools.js"></script>
