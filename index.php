<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>


<?php
include "koneksi.php";
// Koneksi ke database
$sqlt = mysqli_query($koneksi, "select * from capu");
$no=1;
?>

				<table id="table_id"  class="table hover multiple-select-row data-table-export nowrap">
					<thead>
          <tr>
 	          <th colspan="6"><button type="button" class="btn  btn-info" data-toggle="modal" data-target="#modal-success">
                Tambah Data</button></th><br><br>
        </tr>
						<tr>
							<th>No</th>
							<th>Nama </th>
							<th>jk</th>
							<th>alamat</th>
							<th>nope</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<?php
       
            while($dat = mysqli_fetch_array($sqlt)){

                ?>
                <tr>

                <td><?= $no++ ?></td>
                <td><?= $dat['nama']; ?></td>
                <td><?= $dat['jk']; ?></td>
                <td><?=  $dat['alamat']; ?></td>
                <td><?=  $dat['nope']; ?></td>


					<td>
						 <form action="hapus.php?id=<?= $dat['id']; ?>" method='post'>
             <a href="index.php?page=edit_admin&id=<?= $dat['id']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
						 <button type="submit" name="hapus_admin" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
							
							</form>
		            </td>
</tr>
<?php } ?>
					</table>
				</div>
			</div>
		</table>