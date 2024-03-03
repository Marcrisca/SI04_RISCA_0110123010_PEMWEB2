<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];  
$ns2 = ['id' => 1, 'nim' => '01121', 'uts' => 90, 'uas' => 84, 'tugas' => 98];  
$ns3 = ['id' => 1, 'nim' => '01130', 'uts' => 60, 'uas' => 74, 'tugas' => 58];  
$ns4 = ['id' => 1, 'nim' => '01134', 'uts' => 70, 'uas' => 64, 'tugas' => 78];  
$ar_nilai = [$ns1, $ns2, $ns3, $ns4];
$nomor = 1; 
?>

<h3>Daftar Nilai Siswa</h3>
<table border="1" width="100%">
    <thead>
        <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Nilai Akhir</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($ar_nilai as $ns) {
        echo "<tr>";
        echo'<td>'. $nomor . '</td>'; 
        echo'<td>'. $ns['nim'] . '</td>';
        echo'<td>'. $ns['uts'] . '</td>';
        echo'<td>'. $ns['uas'] . '</td>';
        echo'<td>'. $ns['tugas'] . '</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) /3;
        echo'<td>'. number_format($nilai_akhir, 2, ',', '.') . '</td>';
        echo "</tr>";
        $nomor++;
    }
    ?>
</tbody>
</table>
