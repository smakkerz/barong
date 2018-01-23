<?php

 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=kuesioner-ucac_".date("m-Y").".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
        /*
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=kuis-ucac.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");  */
?><table border="1" width="100%">
            <thead>
                <tr>            
                    <th>KodePT</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>No Handphone</th>
                    <th>E-mail</th>
                    <th>tahun Lulus</th>
                    <?php foreach ($kuis as $k) { ?>
                    <th>F<?php echo $k->pilihan; ?></th>
                    <?php } ?>
                    <th>F17-01</th>  <th>F17-02</th>
                    <th>F17-03</th>  <th>F17-04</th>
                    <th>F17-05</th>  <th>F17-06</th>
                    <th>F17-07</th>  <th>F17-08</th>
                    <th>F17-09</th>  <th>F17-10</th>
                    <th>F17-11</th>  <th>F17-12</th>
                    <th>F17-13</th>  <th>F17-14</th>
                    <th>F17-15</th>  <th>F17-16</th>
                    <th>F17-17</th>  <th>F17-18</th>
                    <th>F17-19</th>  <th>F17-20</th>
                    <th>F17-21</th>  <th>F17-22</th>
                    <th>F17-23</th>  <th>F17-24</th>
                    <th>F17-25</th>  <th>F17-26</th>
                    <th>F17-27</th>  <th>F17-28</th>
                    <th>F17-29</th>  <th>F17-30</th>
                    <th>F17-31</th>  <th>F17-32</th>
                    <th>F17-33</th>  <th>F17-34</th>
                    <th>F17-35</th>  <th>F17-36</th>
                    <th>F17-37</th>  <th>F17-38</th>
                    <th>F17-37A</th>  <th>F17-38A</th>
                    <th>F17-39</th>  <th>F17-40</th>
                    <th>F17-41</th>  <th>F17-42</th>
                    <th>F17-43</th>  <th>F17-44</th>
                    <th>F17-45</th>  <th>F17-46</th>
                    <th>F17-47</th>  <th>F17-48</th>
                    <th>F17-49</th>  <th>F17-50</th>
                    <th>F17-51</th>  <th>F17-52</th>
                    <th>F17-53</th>  <th>F17-54</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($respon as $key) {
            ?><tr>
            <td>61017</td>
            <td><?= ucfirst($key->nim); ?></td>
            <td><?= ucfirst($key->nama); ?></td>
            <td>'<?= $key->no_hp; ?></td>
            <td><?= $key->email; ?></td>
            <td align="center"><?= $key->tahun_lulus; ?></td>
            <td><?= $key->F31; ?></td><td><?= $key->F32; ?></td>
            <td><?= $key->F33; ?></td><td><?= $key->F41; ?></td>
            <td><?= $key->F42; ?></td><td><?= $key->F43; ?></td>
            <td><?= $key->F44; ?></td><td><?= $key->F45; ?></td>
            <td><?= $key->F46; ?></td><td><?= $key->F47; ?></td>
            <td><?= $key->F48; ?></td><td><?= $key->F49; ?></td>
            <td><?= $key->F51; ?></td><td><?= $key->F53; ?></td>
            <td><?= $key->F61; ?></td><td><?= $key->F7a1; ?></td>
            <td><?= $key->F71; ?></td><td><?= $key->F81; ?></td>
            <td><?= $key->F82; ?></td><td><?= $key->F91; ?></td><td><?= $key->F92; ?></td>
            <td><?= $key->F93; ?></td><td><?= $key->F94; ?></td>
            <td><?= $key->F95; ?></td><td><?= $key->F101; ?></td>
            <td><?= $key->F102; ?></td><td><?= $key->F103; ?></td>
            <td><?= $key->F104; ?></td><td><?= $key->F105; ?></td>
            <td><?= $key->F111; ?></td><td><?= $key->F112; ?></td><td><?= $key->F113; ?></td>
            <td><?= $key->F114; ?></td><td><?= $key->F115; ?></td>
            <td><?= $key->F121; ?></td><td><?= $key->F122; ?></td>
            <td><?= $key->F123; ?></td><td><?= $key->F124; ?></td>
            <td><?= $key->F125; ?></td><td><?= $key->F126; ?></td>
            <td><?= $key->F127; ?></td><td><?= $key->F128; ?></td>
            <td><?= $key->F129; ?></td><td><?= $key->F1210; ?></td>
            <td><?= $key->F1211; ?></td><td><?= $key->F1212; ?></td>
            <td><?= $key->F1213; ?></td><td><?= $key->F1214; ?></td>
            <td><?= $key->F1215; ?></td><td><?= $key->F1216; ?></td>
            <td><?= $key->F1217; ?></td><td><?= $key->F1218; ?></td>
            <td><?= $key->F1219; ?></td><td><?= $key->F1220; ?></td>
            <td><?= $key->F1221; ?></td><td><?= $key->F1222; ?></td>
            <td><?= $key->F1223; ?></td><td><?= $key->F1224; ?></td>
            <td><?= $key->F1225; ?></td><td><?= $key->F1226; ?></td>
            <td><?= $key->F1227; ?></td><td><?= $key->F1228; ?></td>
            <td><?= $key->F1229; ?></td><td><?= $key->F1230; ?></td>
            <td><?= $key->F1231; ?></td><td><?= $key->F1232; ?></td>
            <td><?= $key->F1233; ?></td><td><?= $key->F1234; ?></td>
            <td><?= $key->F1235; ?></td><td><?= $key->F1236; ?></td>
            <td><?= $key->F1237; ?></td><td><?= $key->F1238; ?></td>
            <td><?= $key->F1239; ?></td><td><?= $key->F1240; ?></td>
            <td><?= $key->F1241; ?></td><td><?= $key->F1242; ?></td>
            <td><?= $key->F1243; ?></td><td><?= $key->F1244; ?></td>
            <td><?= $key->F1245; ?></td><td><?= $key->F1246; ?></td>
            <td><?= $key->F1247; ?></td><td><?= $key->F1248; ?></td>
            <td><?= $key->F1249; ?></td><td><?= $key->F1250; ?></td>
            <td><?= $key->F1251; ?></td><td><?= $key->F1252; ?></td>
            <td><?= $key->F1253; ?></td><td><?= $key->F1254; ?></td>
            <td><?= $key->F1255; ?></td><td><?= $key->F1256; ?></td>
            <td><?= $key->F1257; ?></td><td><?= $key->F1258; ?></td>
            <td><?= $key->F1259; ?></td><td><?= $key->F1260; ?></td>
            <td><?= $key->F1261; ?></td><td><?= $key->F1262; ?></td>
            <td><?= $key->F1263; ?></td><td><?= $key->F1264; ?></td>
            <td><?= $key->F1265; ?></td><td><?= $key->F1266; ?></td>
            <td><?= $key->F1267; ?></td><td><?= $key->F1268; ?></td>
            <td><?= $key->F1269; ?></td><td><?= $key->F1270; ?></td>
            <td><?= $key->F1271; ?></td><td><?= $key->F1272; ?></td>
            <td><?= $key->F1273; ?></td><td><?= $key->F1274; ?></td>
            <td><?= $key->F1275; ?></td><td><?= $key->F1276; ?></td>
            <td><?= $key->F1277; ?></td><td><?= $key->F1278; ?></td>
            <td><?= $key->F1279; ?></td><td><?= $key->F1280; ?></td>
            <td><?= $key->F1281; ?></td><td><?= $key->F1282; ?></td>
            <td><?= $key->F1283; ?></td><td><?= $key->F1284; ?></td>
            <td><?= $key->F1285; ?></td><td><?= $key->F1286; ?></td>
            <td><?= $key->F1287; ?></td><td>Rp. <?= number_format($key->F131,0,',','.'); ?></td>
            <td>Rp. <?= number_format($key->F132,0,',','.'); ?></td>
            <td>Rp. <?= number_format($key->F133,0,',','.'); ?></td>
            <td><?= $key->F141; ?></td><td><?= $key->F142; ?></td>
            <td><?= $key->F143; ?></td><td><?= $key->F144; ?></td>
            <td><?= $key->F144; ?></td><td><?= $key->F151; ?></td>
            <td><?= $key->F152; ?></td><td><?= $key->F153; ?></td>
            <td><?= $key->F154; ?></td><td><?= $key->F161; ?></td>
            <td><?= $key->F162; ?></td><td><?= $key->F163; ?></td>
            <td><?= $key->F164; ?></td><td><?= $key->F165; ?></td>
            <td><?= $key->F166; ?></td><td><?= $key->F167; ?></td>
            <td><?= $key->F168; ?></td><td><?= $key->F169; ?></td>
            <td><?= $key->F1610; ?></td><td><?= $key->F1611; ?></td>
            <td><?= $key->F1612; ?></td><td><?= $key->F1613; ?></td>
            <td><?= $key->F171; ?></td><td><?= $key->F172; ?></td>
            <td><?= $key->F173; ?></td><td><?= $key->F174; ?></td>
            <td><?= $key->F175; ?></td><td><?= $key->F176; ?></td>
            <td><?= $key->F177; ?></td><td><?= $key->F178; ?></td>
            <td><?= $key->F179; ?></td><td><?= $key->F1710; ?></td>
            <td><?= $key->F1711; ?></td><td><?= $key->F1712; ?></td>
            <td><?= $key->F1713; ?></td><td><?= $key->F1714; ?></td>
            <td><?= $key->F1715; ?></td><td><?= $key->F1716; ?></td>
            <td><?= $key->F1717; ?></td><td><?= $key->F1718; ?></td>
            <td><?= $key->F1719; ?></td><td><?= $key->F1720; ?></td>
            <td><?= $key->F1721; ?></td><td><?= $key->F1722; ?></td>
            <td><?= $key->F1723; ?></td><td><?= $key->F1724; ?></td>
            <td><?= $key->F1725; ?></td><td><?= $key->F1726; ?></td>
            <td><?= $key->F1727; ?></td><td><?= $key->F1728; ?></td>\
            <td><?= $key->F1729; ?></td><td><?= $key->F1730; ?></td>
            <td><?= $key->F1731; ?></td><td><?= $key->F1732; ?></td>
            <td><?= $key->F1733; ?></td><td><?= $key->F1734; ?></td>
            <td><?= $key->F1735; ?></td><td><?= $key->F1736; ?></td>
            <td><?= $key->F1737; ?></td><td><?= $key->F1738; ?></td>
            <td><?= $key->F1737A; ?></td><td><?= $key->F1738A; ?></td>
            <td><?= $key->F1739; ?></td><td><?= $key->F1740; ?></td>
            <td><?= $key->F1741; ?></td><td><?= $key->F1742; ?></td>
            <td><?= $key->F1743; ?></td><td><?= $key->F1744; ?></td>
            <td><?= $key->F1745; ?></td><td><?= $key->F1746; ?></td>
            <td><?= $key->F1747; ?></td><td><?= $key->F1748; ?></td>
            <td><?= $key->F1749; ?></td><td><?= $key->F1750; ?></td>
            <td><?= $key->F1751; ?></td><td><?= $key->F1752; ?></td>
            <td><?= $key->F1753; ?></td><td><?= $key->F1754; ?></td>
            </tr>
            <?php } ?>
            </tbody>