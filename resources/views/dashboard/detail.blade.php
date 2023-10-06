@extends('dashboard.layout.main')
    

@section('container')
    <div class="row">
        <h4>Form Detail data Karyawan</h4>
        <hr>

        <p>Nama : {{ $pegawai->nama }}</p>
    </div>

    <div class="row mt-5">
        <h5>Tabel History Pengambilan Cuti</h5>
        <hr>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Jenis Cuti</th>
                <th>Lamanya Cuti</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Status Cuti</th>
                <th>Aksi</th>
                {{-- <th>Surat Cuti</th> --}}
              </tr>
            </thead>
            <tbody>
              <?php 
                $no = 1
                ?>
            
              <tr>
                <td>{{ $no++ }}</td>
                <td>Cuti Tahunan</td>
                <td>2 Hari</td>
                <td>04 November</td>
                <td>05 November 2027</td>
                <td>
                  Di setujui Oleh Kabid
                </td>
                <td>
                    <a href="">Edit | </a><a href="">Hapus | </a><a href="">Print</a></td>
              </tr>
             
            
            </tbody>
            
          </table>
    </div>
    
@endsection

