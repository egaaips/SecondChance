@extends('layouts.template')

@section('title')
    | Donasi
@endsection

@section('main')
    <section id="donate">
        <h2>Syarat dan Ketentuan Donasi</h2>
        <div class="term-condition">
            <div class="card-tnc">
                    <img src="assets/img/donasi/12.png" alt="icon">
                <div class="desc">
                    <h4>Mengisi Form Donasi</h4>
                    <p>Wajib mengisi form terlebih dahulu terutama jika metode pengiriman yang dipilih adalah menggunakan kurir jika tidak maka paket tidak akan diterima.</p>
                </div>
            </div>
            <div class="card-tnc">
                    <img src="assets/img/donasi/15.png" alt="icon">
                <div class="desc">
                    <h4>Kondisi Barang</h4>
                    <p>Pastikan baju masih layak pakai, tidak kusam, berwarna kekuningan, kancing/ritsleting tidak copot, dan tidak sobek/bolong.</p>
                </div>
            </div>
            <div class="card-tnc">
                    <img src="assets/img/donasi/13.png" alt="icon">
                <div class="desc">
                    <h4>Bentuk Donasi</h4>
                    <p>Donasi harus berupa pakaian atau aksesoris berbahan dasar kain (bukan pakaian dalam atau atribut perusahaan/lembaga/partai).</p>
                </div>
            </div>
            <div class="card-tnc">
                    <img src="assets/img/donasi/14.png" alt="icon">
                <div class="desc">
                    <h4>Kebersihan</h4>
                    <p>Pastikan pakaian sudah dicuci terlebih dahulu dan dikirim dalam keadaan bersih sebelum Anda mendonasikannya kepada kami.</p>
                </div>
            </div>
            
        </div>

        <section id="benefit" class="benefit">
            <div class="benefit-wrapper">
        
                <header class="benefit-header">
                    <h2>Keuntungan Donasi</h2>
                </header>
        
                <div class="benefit-row">
                    <div class="benefit-col img-col">
                        <img src="assets/img/donasi/17.png" class="img-fluid" alt="Features Image">
                    </div>
        
                    <div class="benefit-col benefit-list">
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="200">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Menjaga Lingkungan</h3>
                            </div>
                        </div>
        
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="300">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Mendukung Program Sosial</h3>
                            </div>
                        </div>
        
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="400">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Meningkatkan Kesadaran</h3>
                            </div>
                        </div>
        
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="500">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Memperpanjang Umur Pakaian</h3>
                            </div>
                        </div>
        
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="600">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Membantu Mengurangi Polusi</h3>
                            </div>
                        </div>
        
                        <div class="benefit-item" data-aos="zoom-out" data-aos-delay="700">
                            <div class="benefit-box">
                                <i class="bi bi-check"></i>
                                <h3>Menambah Ruang di Lemari</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="form-donation" class="form-donation">
            <section id="donation-form" class="donation-form">
                <div class="form-wrapper">
                    <header class="formulir-header">
                        <h2>Formulir Pendaftaran Donasi</h2>
                    </header>
                    <form id="donationForm">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea id="address" name="address" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="phone">No HP</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="weight">Berat (dalam kg)</label>
                            <input type="number" id="weight" name="weight" min="1" required>
                        </div>
                        <div class="form-group">
                            <label for="shipping">Pilihan Pengiriman</label>
                            <select id="shipping" name="shipping" required>
                                <option value="drop_point">Diantar ke Drop Point</option>
                                <option value="courier">Dikirim Melalui Kurir</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </section><!-- End Donation Registration Form Section -->
                
            </div>
        </div>
    </section>
@endsection