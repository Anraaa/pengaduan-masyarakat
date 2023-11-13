<?php 
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pengaduan dan Tanggapan.xls");

?>

<center>
    <h3>LAPORAN PENGADUAN DAN TANGGAPAN <br> UKK REKAYASA PERANGKAT LUNAK</h3>
</center>

<table class="table table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>TANGGAL</th>
                      <th>NIK</th>
                      <th>JUDUL LAPORAN</th>
                      <th>ISI LAPORAN</th>
                      <th>TANGGAPAN</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include '../config/koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT tanggapan.*, pengaduan.* FROM tanggapan INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan");
                    while ($data = mysqli_fetch_array($query)) { ?>
                      
                    <tr>
                      <td><?php echo $no++?></td>
                      <td><?php echo $data['tgl_tanggapan']?></td>
                      <td><?php echo $data['nik']?></td>
                      <td><?php echo $data['judul_laporan']?></td>
                      <td><?php echo $data['isi_laporan']?></td>
                      <td><?php echo $data['tanggapan']?></td>
                      <td><?php echo $data['status']?></td>
                                
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>