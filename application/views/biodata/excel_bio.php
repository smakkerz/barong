<?php
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=Data-Alumni_".date("m-Y").".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");

?><table border="1" width="100%">
            <thead>
                <tr>            
                    <th>KodePT</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Bekerja</th>
                    <th>Perusahaan</th>
                    <th>Jabatan</th>  
                    <th>Jeda</th>  
                    <th>Domisili</th>
                    <th>No Hp</th>  
                    <th>Tahun Lulus</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($biodata as $key) {
            ?><tr>
            <td>61017</td>
            <td><?= ucfirst($key->nim); ?></td>
            <td><?= ucfirst($key->nama); ?></td>
            <td><?= $key->jenis_kelamin; ?></td>
            <td><?php echo $key->strata." ".$key->jurusan; ?></td>
            <td><?= $key->bekerja; ?></td>
            <td align="center"><?= $key->perusahaan; ?></td>
            <td align="center"><?= $key->jabatan; ?></td>
            <td align="center"><?= $key->jeda; ?></td>
            <td><?= $key->domisili; ?></td>
            <td>'<?= $key->no_hp; ?></td>
            <td align="center"><?= $key->tahun_lulus; ?></td>
            </tr>
            <?php } ?>
            </tbody>
            </table>