@extends('layouts.template')

@section('css_link')
{{ asset('css/about.css') }}
@endsection

@section('main')

<!-- about us section -->
<section class="about-us section-about container-about" id="about-us">
    <div class="about-us-container grid">
      <img
        src="assets/img/about/about.png"
        alt="View from outside"
        class="about_img"
      />
      <div class="about_content">
        <h1 class="section_title about_title">
          Tentang <br />Second<span class="logo_name">Chance</span>
        </h1>
        <p class="about-us-description">
          Apakah Anda memiliki lemari penuh dengan pakaian yang sudah tidak
          muat atau hanya beberapa item yang sudah tidak Anda gunakan lagi?
          <b>Second<span class="logo_name">Chance</span> </b>
          menyediakan cara yang nyaman dan berdampak untuk merapikan ruang
          Anda sambil mendukung masa depan yang lebih berkelanjutan. Dengan
          menghubungkan pendonor dan penerima donasi. Bertujuan untuk
          mengurangi limbah dan mempromosikan ekonomi sirkular di mana
          setiap pakaian mendapatkan kesempatan kedua untuk dicintai dan
          dikenakan.
        </p>
      </div>
    </div>
  </section>
  <!-- visi & misi section -->
  <section class="goals section-about" id="goals">
    <h2 class="section_title-center goals_title container-about">Visi & Misi</h2>
    <div class="goals_container container-about grid">
      <div class="goals_group">
        <div class="goals_item">
          <header class="goals_header">
            <i class="ri-add-line goals_icon"></i>
            <h3 class="goals_item-title">
              Visi Second<span class="logo_name">Chance</span>
            </h3>
          </header>
          <div class="goals_content">
            <p class="goals_description">
              Menjadi platform terdepan yang mendukung keberlanjutan dengan
              memberikan kesempatan kedua bagi pakaian bekas, serta
              membangun komunitas yang peduli terhadap lingkungan dan
              kesejahteraan bersama.
            </p>
          </div>
        </div>
      </div>
      <div class="goals_group">
        <div class="goals_item">
          <header class="goals_header">
            <i class="ri-add-line goals_icon"></i>
            <h3 class="goals_item-title">
              Misi Second<span class="logo_name">Chance</span>
            </h3>
          </header>
          <div class="goals_content">
            <p class="goals_description">
              1. Mengurangi limbah tekstil dengan memfasilitasi donasi
              pakaian bekas yang masih layak pakai.
              <br />
              2. Menghubungkan individu yang ingin mendonasikan pakaian
              dengan mereka yang membutuhkan, menciptakan jaringan dukungan
              yang saling menguntungkan.<br />
              3. Menyediakan platform yang mudah digunakan untuk
              mendonasikan, sehingga setiap orang dapat berkontribusi dalam
              menciptakan masa depan yang lebih berkelanjutan. <br />
              4. Meningkatkan kesadaran tentang dampak lingkungan dari
              limbah tekstil dan pentingnya praktik daur ulang dalam
              fashion.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Team section -->
  <section class="our-team section-about container-about">
    <h2 class="section_title-center team_title">Kenali Tim Kami</h2>
    <p class="our-team-description">
      Grup 1 MojadiApps x MSIB <br />
      Kampus Merdeka Batch 6
    </p>
    <div class="team_container grid">
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/selviana.png"
              alt="Selviana image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Selviana</h3>
          <span class="card_job">Leader</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/selviana.png"
                alt="Selviana image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Selviana Dwi Aprianti</h3>
            <div class="info_univ">Universitas Dian Nuswantoro</div>
            <div class="info_major">Teknik Informatika</div>
          </div>
          <div class="info_social">
            <a
              href="www.linkedin.com/in/selvianadwiaprianti"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a
              href=" https://www.instagram.com/selvianada_/"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/ega.png"
              alt="Ega image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Ega</h3>
          <span class="card_job">Front-End Developer</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/ega.png"
                alt="Ega image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Ega Indah Permatasari</h3>
            <div class="info_univ">Universitas Trunojoyo</div>
            <div class="info_major">Sistem Informasi</div>
          </div>
          <div class="info_social">
            <a href=" https://www.linkedin.com/in/egaaips" target="_blank">
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a href="https://www.instagram.com/egaaips" target="_blank">
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/gading.png"
              alt="gading image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Gading</h3>
          <span class="card_job">Front-End Developer</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/gading.png"
                alt="gading image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Gading Putri Diniarti</h3>
            <div class="info_univ">UPN Veteran Jatim</div>
            <div class="info_major">Sistem Informasi</div>
          </div>
          <div class="info_social">
            <a
              href="https://www.linkedin.com/in/gading-putri-diniarti-54a431238/"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a
              href="https://www.instagram.com/gadingdnr_?igsh=dGp5ZmptbWkxN2tv"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/indah.png"
              alt="indah image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Indah</h3>
          <span class="card_job">Front-End Developer</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/indah.png"
                alt="indah image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Rhohmah Indah Mekar Sari</h3>
            <div class="info_univ">UPN Veteran Jatim</div>
            <div class="info_major">Sistem Informasi</div>
          </div>
          <div class="info_social">
            <a
              href="https://www.linkedin.com/in/rhohmah-indah-721733280/"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a
              href="https://www.instagram.com/hwangndah_?igsh=N21iNDIxMTkweXE0&utm_source=qr"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/ade.png"
              alt="ade image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Ade</h3>
          <span class="card_job">Back-End Developer</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/ade.png"
                alt="ade image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Ade Setiawan</h3>
            <div class="info_univ">
              Universitas Sangga Buana YPKP Bandung
            </div>
            <div class="info_major">Akutansi</div>
          </div>
          <div class="info_social">
            <a
              href="https://www.linkedin.com/in/ade-setiawan-02957a2a4"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a
              href="https://www.instagram.com/ade_setiawanz?igsh=MTBmZnh4aXo3dXZqMg=="
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card_border">
          <div class="card_profile">
            <img
              src="assets/img/about/fathur.png"
              alt="fathur image"
              class="card_img"
            />
          </div>
        </div>
        <div class="card_data">
          <h3 class="card_name">Fhatur</h3>
          <span class="card_job">Back-End Developer</span>
        </div>
        <div class="info">
          <div class="info_icon">
            <i class="ri-information-line"></i>
          </div>
          <div class="info_border">
            <div class="info_profile">
              <img
                src="assets/img/about/fathur.png"
                alt="fhatur image"
                class="info_img"
              />
            </div>
          </div>
          <div class="info_data">
            <h3 class="info_name">Muhammad Fhatur</h3>
            <div class="info_univ">Universitas Muslim Indonesia</div>
            <div class="info_major">Teknik Informatika</div>
          </div>
          <div class="info_social">
            <a
              href=" https://www.linkedin.com/in/muh-fhatur-7b71b82b9?trk=contact-info"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-linkedin-box-line"></i>
              </span>
            </a>
            <a
              href="https://www.instagram.com/fhturrr._?igsh=ZDh3NGNid2MzNnQ1"
              target="_blank"
            >
              <span class="info_social-icon">
                <i class="ri-instagram-fill"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="card"></div>
    </div>
  </section>

@endsection