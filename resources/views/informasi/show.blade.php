@extends('layouts.template')

@section('title')
    | Informasi
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/blog/informasi') }}">Informasi</a></li>
                <li>Detail</a></li>
            </ol>
            @if ($informations)
            <h3>{{ $informations->title }}</h3>
            @else
            <p>Judul Berita tidak ditemukan.</p>
            @endif
        </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Blog Single Section ======= -->
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
  
              <article class="entry entry-single">
  
                <div class="entry-img">
                  <img src="{{ Storage::url($informations->image) }}" alt="" class="img-fluid">
                </div>
  
                <h3 class="entry-title">
                  {{ $informations->title }}
                </h3>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-folder"></i>{{ $informations->label }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">{{ $informations->created_at->format('d F Y') }}</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    {!! $informations->content !!}
                  </p>  
                </div>
  
              </article><!-- End blog entry -->
  
            </div><!-- End blog entries list -->
  
            
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Single Section -->
@endsection