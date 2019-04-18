<div class="container">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Produk
                </div>
                <div class="card-body">
                    <form action="<?php base_url('Produk/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Produk</label>
                            <select class="form-control" id="jenis" name="jenis">
                                <option value="Pants">Pants</option>
                                <option value="Shirts">Shirts</option>
                                <option value="T-Shirt">T-Shirt</option>
                                <option value="Jackets">Jackets</option>
                                <option value="Vests">Vests</option>
                                <option value="Accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                            <small class="form-text text-danger"><?= form_error('jumlah') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga">
                            <small class="form-text text-danger"><?= form_error('harga') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="img">Picture</label><br>
                            <input type="file" name="userfile[]" multiple="multiple" size="20">
                            <small class="invalid-feedback"><?= form_error('img') ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 