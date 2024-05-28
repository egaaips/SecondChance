@extends('layouts.template')

@section('main')
<div class="blog-header">
    {{-- <h2>Artikel Terbaru</h2> --}}
    <p>Home / Blog</p>
    <h4>Blog</h4>
</div>
<div id="blog-container">
    <!-- Blog Section -->
    <section id="article-list">
        {{-- <h2>Latest News</h2> --}}
        <div class="blog-container">
            <div class="card-blog">
                <article>
                    <div class="post-img">
                        <img src="https://via.placeholder.com/400x220" alt="Post Image">
                    </div>
                    <div class="post-description">
                        <div class="post-date">May 18, 2024</div>
                        <h3 class="post-title">Blog Post Title</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="readmore">Read more</a>
                    </div>
                </article>
            </div>
            <div class="card-blog">
                <article>
                    <div class="post-img">
                        <img src="https://via.placeholder.com/400x220" alt="Post Image">
                    </div>
                    <div class="post-description">
                        <div class="post-date">May 18, 2024</div>
                        <h3 class="post-title">Blog Post Title</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="readmore">Read more</a>
                    </div>
                </article>
            </div>
            <div class="card-blog">
                <article>
                    <div class="post-img">
                        <img src="https://via.placeholder.com/400x220" alt="Post Image">
                    </div>
                    <div class="post-description">
                        <div class="post-date">May 18, 2024</div>
                        <h3 class="post-title">Blog Post Title</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="readmore">Read more</a>
                    </div>
                </article>
            </div>
            <div class="card-blog">
                <article>
                    <div class="post-img">
                        <img src="https://via.placeholder.com/400x220" alt="Post Image">
                    </div>
                    <div class="post-description">
                        <div class="post-date">May 18, 2024</div>
                        <h3 class="post-title">Blog Post Title</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="readmore">Read more</a>
                    </div>
                </article>
            </div>
            <div class="card-blog">
                <article>
                    <div class="post-img">
                        <img src="https://via.placeholder.com/400x220" alt="Post Image">
                    </div>
                    <div class="post-description">
                        <div class="post-date">May 18, 2024</div>
                        <h3 class="post-title">Blog Post Title</h3>
                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="readmore">Read more</a>
                    </div>
                </article>
            </div>
            <!-- Repeat card-blog div for more posts -->
        </div>
        
        <!-- Pagination -->
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">&raquo;</a>
        </div>
    </section>
    
    <!-- Sidebar Section -->
    <aside class="sidebar">
        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit">Search</button>
        </div>
        
        <!-- Recent Posts -->
        <div class="recent-posts">
            <h3>Recent Posts</h3>
            <ul>
                <li>
                    <a href="#">
                        <img src="https://via.placeholder.com/80x80" alt="Recent Post Image">
                        <span>Post Title 1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://via.placeholder.com/80x80" alt="Recent Post Image">
                        <span>Post Title 2</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://via.placeholder.com/80x80" alt="Recent Post Image">
                        <span>Post Title 3</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="https://via.placeholder.com/80x80" alt="Recent Post Image">
                        <span>Post Title 4</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</div>
@endsection