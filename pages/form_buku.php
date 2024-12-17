<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">BUKU INPUT</h1>
    </div>
    <hr>
    <!-- content-->
    <div class="row justify-content-start">
        <div class="col-lg-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Masukkan Data Buku</h1>
                    </div>
                    <form class="user" action="submit_form.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" class="form-control form-control-user" id="kode" name="kode"
                                        placeholder="Masukkan Kode..">
                                </div>
                                <div class="form-group">
                                    <label for="isbn">ISBN</label>
                                    <input type="text" class="form-control form-control-user" id="isbn" name="isbn"
                                        placeholder="Masukkan ISBN..">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="number" class="form-control form-control-user" id="tahun" name="tahun"
                                        placeholder="Masukkan Tahun..">
                                </div>
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis</label>
                                    <textarea class="form-control form-control-user" id="sinopsis" name="sinopsis"
                                        placeholder="Masukkan Sinopsis.."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul"
                                        placeholder="Masukkan Judul..">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="penulis">Penulis</label>
                                    <input type="text" class="form-control form-control-user" id="penulis"
                                        name="penulis" placeholder="Masukkan Penulis..">
                                </div>
                                <div class="form-group">
                                    <label for="cover">Cover</label>
                                    <input type="file" class="form-control form-control-user" id="cover" name="cover">
                                </div>
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select class="form-control form-control-user" id="kategori" name="kategori">
                                        <option value="">Pilih Kategori</option>
                                        <option value="kategori1">Kategori 1</option>
                                        <option value="kategori2">Kategori 2</option>
                                        <option value="kategori3">Kategori 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="penerbit">Penerbit</label>
                                    <select class="form-control form-control-user" id="penerbit" name="penerbit">
                                        <option value="">Pilih Penerbit</option>
                                        <option value="penerbit1">Penerbit 1</option>
                                        <option value="penerbit2">Penerbit 2</option>
                                        <option value="penerbit3">Penerbit 3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bahasa">Bahasa</label>
                                    <select class="form-control form-control-user" id="bahasa" name="bahasa">
                                        <option value="">Pilih Bahasa</option>
                                        <option value="bahasa1">Bahasa 1</option>
                                        <option value="bahasa2">Bahasa 2</option>
                                        <option value="bahasa3">Bahasa 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Tombol Submit -->
                        <div class="d-flex justify-content-end">
                            <a href="?page=table_buku" class="btn btn-primary btn-user">
                                SUBMIT
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</div>