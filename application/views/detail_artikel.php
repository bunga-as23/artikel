<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="container-fluid">

            <?php foreach ($artikel as $ar) : ?>

                <div class="card-body">

                    <h4><?= $ar->judul ?></h4>
                    <small><?= $ar->nama_penulis ?></small> -
                    <small><?= $ar->tanggal ?></small>

                    <div class="col-md-5">
                        <img src="<?= base_url() . 'uploads/' . $ar->gambar ?>" class="card-img-top" width="100px">
                    </div>
                    <p><?= $ar->artikel ?></p>


                    <?= anchor('welcome', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    <?= anchor('komentar', '<div class="btn btn-sm btn-primary"><i class="fas fa-comment"></i></div>') ?>

                <?php endforeach; ?>


                </div>
        </div>
    </div>
</div>