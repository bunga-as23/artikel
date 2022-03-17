<section class="site-section py-lg">
    <div class="container">

        <div class="row blog-entries element-animate">

            <div class="col-md-12 col-lg-8 main-content">
                <!-- Isi Artikel -->
                <?php foreach ($artikel as $ar) : ?>
                    <img src="<?= base_url() . 'uploads/' . $ar->gambar ?>" alt="Image" class="img-fluid mb-5">
                    <div class="post-meta">
                        <span class="author mr-2"><?= $ar->nama_penulis ?></span>&bullet;
                        <span class="mr-2"><?= $ar->tanggal ?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h1 class="mb-4"><?= $ar->judul ?></h1>
                    <a class="category mb-5" href="#"><?= $ar->kategori ?></a>

                    <div class="post-content-body">
                        <p><?= $ar->artikel ?></p>
                    </div>


                    <div class="pt-5">
                        <p>Categories: <a href="#"><?= $ar->kategori ?></a></p>
                    </div>

                    <?= anchor('welcome', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>
                    <?= anchor('komentar', '<div class="btn btn-sm btn-primary"><i class="fas fa-comment"></i></div>') ?>
                <?php endforeach; ?>


                <div class="pt-5">
                    <h3 class="mb-5">6 Comments</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard">
                                <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard">
                                <img src="<?= base_url() ?>assets/images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>Jean Doe</h3>
                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                <p><a href="#" class="reply rounded">Reply</a></p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->

                </div>

            </div>

            <!-- END main-content -->

            <!-- Bagian Pencarian -->
            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box search-form-wrap">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon fa fa-search"></span>
                            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <!-- END sidebar-box -->

                <!-- Bagian Profil Bungabarin -->
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="<?= base_url('assets/images/person_1.jpg'); ?>" alt="Image Placeholder" class="img-fluid">
                        <div class="bio-body">
                            <h2>Bungabarin</h2>
                            <p>Situs berita terpercaya di kabupaten jember dan sekitarnya</p>
                            <p><a href="#" class="btn btn-primary btn-sm rounded">Follow Kami</a></p>
                            <p class="social">
                                <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- END sidebar-box -->

                <!-- Bagian Artikel Terbaru -->
                <div class="sidebar-box">
                    <h3 class="heading">Artikel Terbaru</h3>
                    <div class="post-entry-sidebar">
                        <ul>
                            <?php foreach ($artikel_terbaru as $at) : ?>
                                <li>
                                    <a href="<?= base_url('dashboard/detail/' . $at->id) ?>">
                                        <img src="<?= base_url() . 'uploads/' . $at->gambar; ?>" alt="Image placeholder" class="mr-4">
                                        <div class="text">
                                            <h4><?= $at->judul ?></h4>
                                            <div class="post-meta">
                                                <span class="mr-2"><?= $at->tanggal ?> </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Bagian Kategori -->
                <div class="sidebar-box">
                    <h3 class="heading">Kategori</h3>
                    <ul class="categories">
                        <?php $menu = $this->db->get('kategori')->result();
                        foreach ($menu as $m) {
                        ?>
                            <li><a href="<?= base_url("$m->link"); ?>"><?= $m->kategori ?> <span>(1)</span></a></li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- END sidebar -->

        </div>
    </div>
</section>