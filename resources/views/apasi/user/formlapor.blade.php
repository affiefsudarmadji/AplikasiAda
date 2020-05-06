@extends('layouts.main')

@section('content')
<!-- Form Input Laporan -->
<div class="panel panel-white">
    <div class="panel-heading">
        <h6 class="panel-title">Form Input Pelaporan</h6>
    </div>

    <form class="form-basic" action="{{url('/form-laporan/save')}}" method="post">
        @csrf
        <fieldset class="step" id="validation-step1">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">1</span>
                Identitas Pelapor
                <small class="display-block">Data Diri Pelapor</small>
            </h6>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Pelaporan <span class="text-danger">*</span></label>
                        <select name="jenis_laporan" class="form-control">
                            <option value="1">Penerimaan Gratifikasi</option>
                            <option value="2">Penolakan Gratifikasi</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Pelaporan</label>
                        <input type="date" name="tanggal_pelaporan" class="form-control">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>NIK Pegawai</label>
                        <input type="text" name="nik" class="form-control" value="{{$data['nik']}}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>No. KTP <span class="text-danger">*</span></label>
                        <input type="text" name="no_ktp" class="form-control" placeholder="No KTP">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" value="{{$data['name']}}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <label>No. Telp/Kantor <span class="text-danger">*</span></label>
                    <input type="text" name="no_telpon" class="form-control" value={{$data['phone']}} readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Grade</label>
                        <input type="text" name="grade" class="form-control" value="{{$data['grade']}}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="{{$data['jabatan']}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Lahir <span class="text-danger">*</span></label>
                        <input type="text" name="tempat_lahir" class="form-control required" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="col-md-6">
                    <label>Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{$data['tgl_lahir']}}" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Unit Kerja</label>
                        <input type="text" name="unit_kerja" class="form-control" value="{{$data['unit_kerja']}}" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Kantor <span class="text-danger">*</span></label>
                        <textarea rows="2" cols="2" name="alamat_kantor" class="form-control required" placeholder="Alamat Kantor"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Rumah <span class="text-danger">*</span></label>
                        <textarea rows="2" cols="2" name="alamat_rumah" class="form-control required" placeholder="Alamat Rumah"></textarea>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Domisili</label>
                        <textarea rows="2" cols="2" name="alamat_domisili" class="form-control" placeholder="Isi Jika Berbeda dengan Alamat KTP"></textarea>
                    </div>
                </div>
                <div class="form-wizard-actions">
                    <button class="btn btn-info" id="validation-next" type="submit">Next</button>
                </div>
            </div>
        </fieldset>

        <fieldset class="step" id="validation-step2">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">2</span>
                Data Penerimaan Gratifikasi
                <small class="display-block">Kronologi Kejadian</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Penerimaan <span class="text-danger">*</span></label>
                        <select name="jenis_penerimaan" class="form-control">
                            <option value="1">Uang / Setara Uang</option>
                            <option value="2">Barang</option>
                            <option value="3">Makanan</option>
                            <option value="4">Akomodasi</option>
                            <option value="5">Rabat / Komisi</option>
                            <option value="6">Karangan Bunga</option>
                            <option value="7">Fasilitas Lainnya</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jenis Peristiwa <span class="text-danger">*</span></label>
                        <select name="jenis_peristiwa" class="form-control">
                            <option value="1">Tugas Kedinasan (Pelayanan)</option>
                            <option value="2">Tugas Kedinasan (Non Pelayanan)</option>
                            <option value="3">Seminar/Diklat/Workshop</option>
                            <option value="4">Mutasi/Promosi/Pisah Sambut/Ulang Tahun</option>
                            <option value="5">Pernikahan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Harga/Nilai Nominal/Taksiran <span class="text-danger">*</span></label>
                        <input type="text" name="nominal" class="form-control required" placeholder="Nominal Penerimaan">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Penerimaan <span class="text-danger">*</span></label>
                        <input type="date" name="tanggal_penerimaan" class="form-control required">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tempat Penerimaan <span class="text-danger">*</span></label>
                        <input type="text" name="tempat_penerimaan" class="form-control required" placeholder="Tempat Penerimaan">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kronologi Penerimaan <span class="text-danger">*</span></label>
                        <input type="text" name="kronologi" class="form-control required">
                    </div>
                </div>
            </div>
            <div class="form-wizard-actions">
                <button class="btn btn-default" id="validation-back" type="reset">Back</button>
                <button class="btn btn-info" id="validation-next" type="submit">Next</button>
            </div>
        </fieldset>

        <fieldset class="step" id="validation-step3">
            <h6 class="form-wizard-title text-semibold">
                <span class="form-wizard-count">3</span>
                Data Pemberi Gratifikasi
                <small class="display-block">Identitas Pemberi</small>
            </h6>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Pemberi Gratifikasi <span class="text-danger">*</span></label>
                        <input type="text" name="nama_pemberi" placeholder="Nama Pemberi" class="form-control required">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pekerjaan / Jabatan <span class="text-danger">*</span></label>
                        <input type="text" name="jabatan_pemberi" class="form-control required" placeholder="Jabatan Pemberi" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Hubungan Dengan Pemberi Gratifikasi <span class="text-danger">*</span></label>
                        <input type="text" name="hubungan_pemberi" class="form-control required" placeholder="Hubungan Dengan Pemberi" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alamat Pemberi Gratifikasi <span class="text-danger">*</span></label>
                        <textarea rows="2" cols="2" name="alamat_pemberi" class="form-control required" placeholder="Alamat Pemberi Gratifikasi"></textarea>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Alasan Pemberian <span class="text-danger">*</span></label>
                        <input type="text" name="alasan_pemberian" class="form-control required" placeholder="Alasan Pemberian Gratifikasi" >

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Dokumen yang dilampirkan <span class="text-danger">*</span></label>
                        <input type="file" name="lampiran_dokumen" class="file-styled">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Catatan Tambahan (Jika Diperlukan)</label>
                        <input type="text" name="catatan_tambahan" class="form-control" placeholder="Catatan Tambahan Apabila Diperlukan" >
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Unggah Gambar <span class="text-danger">*</span></label>
                        <input type="file" name="lampiran_foto" class="file-styled">
                    </div>
                </div>
            </div>
            <div class="form-wizard-actions">
                <button class="btn btn-default" id="validation-back" type="reset">Back</button>
                <button class="btn btn-info" type="submit">Submit</button>
            </div>
        </fieldset>
    </form>
</div>
<!-- /wizard with validation -->
@endsection
