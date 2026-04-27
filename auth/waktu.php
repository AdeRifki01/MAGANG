<?php
function getWaktu() {
    date_default_timezone_set('Asia/Jakarta');

    $hari = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];

    $bulan = [
        'Jan' => 'Januari',
        'Feb' => 'Februari',
        'Mar' => 'Maret',
        'Apr' => 'April',
        'May' => 'Mei',
        'Jun' => 'Juni',
        'Jul' => 'Juli',
        'Aug' => 'Agustus',
        'Sep' => 'September',
        'Oct' => 'Oktober',
        'Nov' => 'November',
        'Dec' => 'Desember'
    ];

    $hari_ini = $hari[date('l')];
    $bulan_ini = $bulan[date('M')];

    $waktu = "$hari_ini, " . date('d') . " $bulan_ini " . date('Y') . " | " . date('H:i');

    return $waktu;
}
?>