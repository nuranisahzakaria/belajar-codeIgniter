    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Daftar Mahasiswa (CI Sederhana)</h3>

                <ul class="list-group">
                    <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?php echo $mhs ['nama']; ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
