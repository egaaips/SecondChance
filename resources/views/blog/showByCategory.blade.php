@extends('layouts.template')

@section('title')
    | Blog
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/blog/artikel') }}">Artikel</a></li>
                <li>Kategori</li>
            </ol>
            @php
                $categories = $blogs->pluck('category')->unique();
            @endphp

            <h3>{{ implode(', ', $categories->toArray()) }}</h3>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <!-- ======= Blog Entry List ======= -->
                    @foreach ($blogs as $blog)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ Storage::url($blog->image) }}" alt="" class="img-fluid">
                            </div>
                            <h3 class="entry-title">
                                <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a>
                            </h3>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $blog->author }}
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time
                                            datetime="2020-01-01">{{ $blog->created_at->format('d F Y') }}</time></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! \Illuminate\Support\Str::limit(strip_tags($blog->content), 200) !!}
                                </p>
                                <div class="more-btn">
                                    <a href="{{ route('blog.show', $blog->id) }}">Read More</a>
                                </div>
                            </div>

                        </article>
                    @endforeach
                    <!-- ======= End Blog Entry List ======= -->

                    <!-- ======= Pagination ======= -->
                    <div class="blog-pagination">
                        <ul class="justify-content-center">
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><a>&laquo;</a></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}">&laquo;</a></li>
                            @endif

                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                <li class="{{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}">&raquo;</a></li>
                            @else
                                <li class="disabled"><a>&raquo;</a></li>
                            @endif
                        </ul>
                    </div>


                </div>
                <!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Cari</h3>
                        <div class="sidebar-item search-form">
                            <form action="{{ route('blog.blog') }}">
                                <input type="text" name="query">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search form -->

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

                                    <li><a href="{{ route('blog.showByCategory', $category) }}">{{ $category }}
                                            <span>({{ $count }})</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End sidebar categories -->

                        <h3 class="sidebar-title">Postingan Terbaru</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($recentPosts as $recentPost)
                                <div class="post-item clearfix">
                                    <img src="{{ Storage::url($recentPost->image) }}" alt="">
                                    <h4><a href="{{ route('blog.show', $recentPost->id) }}">{{ $recentPost->title }}</a>
                                    </h4>
                                    <time datetime="2020-01-01">{{ $recentPost->created_at->format('d M Y') }}</time>
                                </div>
                            @endforeach
                        </div><!-- End sidebar recent posts-->

                    </div><!-- End sidebar -->


                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
