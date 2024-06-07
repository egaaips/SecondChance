@extends('layouts.template')

@section('title')
    | Informasi
@endsection

@section('main')
<section id="information" class="information">

    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h2>Informasi</h2>
            <p>Informasi dan Update Seputar Donasi di SecondChance</p>
            <div class="filter-row">
                <a href="{{ url('/blog/informasi') }}" class="filter-label all"><p>Semua</p></a>

                @php
                    $labels = $information->pluck('label')->unique();
                @endphp

                @foreach ($labels as $label)                    
                    <a href="{{ route('info.showByLabel', $label) }}" class="filter-label"><p>{{ $label }}</p></a>
                @endforeach
            </div>
        </header>

        <div class="row">

            @foreach ($information as $info)
                <div class="col-lg-4">
                    <div class="post-box">
                        <div class="post-img"><img src="{{ Storage::url($info->image) }}" class="img-fluid"
                                alt=""></div>
                        <span class="post-date">{{ $info->created_at->format('d F Y') }}<span
                                class="label">{{ $info->label }}</span></span>

                        <h3 class="post-title">{{ $info->title }}</h3>
                        <a href="{{ route('info.show', $info->id) }}" class="readmore stretched-link mt-auto"><span>Read
                                More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- ======= Pagination ======= -->
        <div class="info-pagination">
            <ul class="justify-content-center">
                @if ($information->onFirstPage())
                    <li class="disabled"><a>&laquo;</a></li>
                @else
                    <li><a href="{{ $information->previousPageUrl() }}">&laquo;</a></li>
                @endif

                @foreach ($information->getUrlRange(1, $information->lastPage()) as $page => $url)
                    <li class="{{ $page == $information->currentPage() ? 'active' : '' }}">
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                @if ($information->hasMorePages())
                    <li><a href="{{ $information->nextPageUrl() }}">&raquo;</a></li>
                @else
                    <li class="disabled"><a>&raquo;</a></li>
                @endif
            </ul>
        </div>


    </div>

</section><!-- End Recent Blog Posts Section -->
@endsection