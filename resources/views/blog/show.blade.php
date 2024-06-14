@extends('layouts.template')

@section('title')
    | Blog
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/blog/artikel') }}">Artikel</a></li>
                <li>Detail</a></li>
            </ol>
            @if ($blog)
            <h3>{{ $blog->title }}</h3>
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
                  <img src="{{ Storage::url($blog->image) }}" alt="" class="img-fluid">
                </div>
  
                <h3 class="entry-title">
                  {{ $blog->title }}
                </h3>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $blog->author }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2020-01-01">{{ $blog->created_at->format('d F Y') }}</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    {!! $blog->content !!}
                  </p>  
                </div>
  
                <div class="entry-footer">
                  <i class="bi bi-folder"></i>
                  <ul class="cats">
                    <li><a href="{{ route('blog.showByCategory', ['category' => $blog->category]) }}">{{ $blog->category }}</a></li>
                  </ul>
                </div>
  
              </article><!-- End blog entry -->
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Cari</h3>
                <div class="sidebar-item search-form">
                  <form action="">
                    <input type="text">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->
  
                <h3 class="sidebar-title">Kategori</h3>
                <div class="sidebar-item categories">
                  <ul>
                        @php
                        // Mendapatkan kategori unik dari beritas
                        $categories = $blog->pluck('category')->unique();
                        @endphp

                        @foreach ($categories as $category)
                        <!-- Menghitung jumlah berita dalam setiap kategori -->
                        @php
                            $count = $blog->where('category', $category)->count();
                        @endphp

                        <li><a href="{{ route('blog.showByCategory', ['category' => $category]) }}">{{ $category }} <span>({{ $count }})</span></a></li>
                        @endforeach
                  </ul>
                </div><!-- End sidebar categories-->
  
                <h3 class="sidebar-title">Postingan Terbaru</h3>
                <div class="sidebar-item recent-posts">
                    @foreach ($recentPosts as $recentPost)
                        <div class="post-item clearfix">
                        <img src="{{ Storage::url($recentPost->image) }}" alt="">
                        <h4><a href="{{ route('blog.show', $recentPost->id) }}">{{ $recentPost->title }}</a></h4>
                        <time datetime="2020-01-01">{{ $recentPost->created_at->format('d M Y') }}</time>
                        </div>
                    @endforeach
  
                </div><!-- End sidebar recent posts-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Single Section -->
@endsection