@extends('dashboard.layout.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="container mt-3">
                <h3 class="mb-3">{{ $title }} {{ $sub_title }} </h3>
                <div class="row">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Pegawai</label>
                          <select class="form-select" name="pegawai">
                            <option> -- Pilih Karyawan --</option>
                            @foreach($pegawai as $p)
                                <option value="{{ $p->id }}"> {{ $p->nama }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="mb-3">
                            <label for="jeniscuti" class="form-label">Jenis Cuti</label>
                            <select class="form-select" name="jeniscuti">
                                <option> -- Pilih Cuti --</option>
                              @foreach($j_cuti as $j)
                                  <option value="{{ $j->id }}"> {{ $j->nama }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alasancuti">Alasan Cuti</label>
                            <label for="alasan" class="form-label">Alasan Melaksanakan Cuti</label>
                            <input type="text" name="alasan" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Saat Melaksanakan Cuti</label>
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="no" class="form-label">No Hp</label>
                            <input type="number" name="no" class="form-control">
                        </div> --}}

                        <div class="mb-3">
                            <label for="nama" class="form-label">Tanggal Mulai</label>
                            <input type="date" name="mulai" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Tanggal Akhir</label>
                            <input type="date" name="akhir" class="form-control">
                        </div>
                       
                    
                    
                  
                        <button type="submit" class="btn btn-primary mt-3">Buat Cuti</button>

                    </form>
                    
                </div>
            </div>
    </div>
  </div>
@endsection