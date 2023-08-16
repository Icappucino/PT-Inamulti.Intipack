@extends('admin.index')
@section('Dashboard')

 <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card card-calendar">
                <div class="card-header text-center">
                    <h2>Kalender Hari Ini</h2>
                </div>
                <div class="card-body text-center">
                    <?php
                    $hari_ini = date("Y-m-d");
                    $nama_hari = date("l", strtotime($hari_ini));
                    $nama_bulan = date("F", strtotime($hari_ini));
                    $tanggal = date("j", strtotime($hari_ini));
                    $tahun = date("Y", strtotime($hari_ini));

                    $daftar_hari = array(
                        'Sunday' => 'Minggu',
                        'Monday' => 'Senin',
                        'Tuesday' => 'Selasa',
                        'Wednesday' => 'Rabu',
                        'Thursday' => 'Kamis',
                        'Friday' => 'Jumat',
                        'Saturday' => 'Sabtu'
                    );

                    $daftar_bulan = array(
                        'January' => 'Januari',
                        'February' => 'Februari',
                        'March' => 'Maret',
                        'April' => 'April',
                        'May' => 'Mei',
                        'June' => 'Juni',
                        'July' => 'Juli',
                        'August' => 'Agustus',
                        'September' => 'September',
                        'October' => 'Oktober',
                        'November' => 'November',
                        'December' => 'Desember'
                    );

                    echo "<p>Hari ini adalah " . $daftar_hari[$nama_hari] . ", " . $tanggal . " " . $daftar_bulan[$nama_bulan] . " " . $tahun . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
