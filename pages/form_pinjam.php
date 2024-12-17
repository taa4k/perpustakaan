<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">PINJAM</h1>
</div>
<hr>
<!-- content-->
    <div class="row justify-content-start">
        <div class="col-lg-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Masukkan Data Peminjaman Buku</h1>
                    </div>
                    <form class="user">
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control form-control-user" id="nik" placeholder="Masukkan NIK..">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control form-control-user" id="nama" placeholder="Masukkan Nama..">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pinjam">Tanggal Pinjam</label>
                            <input type="date" class="form-control form-control-user" id="tanggal_pinjam">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="buku">Buku 1</label>
                            <div class="d-flex">
                                <input type="text" class="form-control form-control-user" id="kode_buku" placeholder="Kode Buku 1..">
                                <input type="text" class="form-control form-control-user ml-2" id="judul_buku" placeholder="Judul Buku 1..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="buku">Buku 2</label>
                            <div class="d-flex">
                                <input type="text" class="form-control form-control-user" id="kode_buku" placeholder="Kode Buku 2..">
                                <input type="text" class="form-control form-control-user ml-2" id="judul_buku" placeholder="Judul Buku 2..">
                            </div>
                        </div>
                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-user">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
