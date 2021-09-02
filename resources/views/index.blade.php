
@extends('layouts.Master')
@section("title","home")
@section("content")
<div id="content" class="site-content">
    <div id="primary" class="content-area column full">
        <main id="main" class="site-main">

           <div class="grid portfoliogrid">
            @if(!empty($articles))
            @foreach($articles as $blog)
            <article class="hentry">
            <header class="entry-header">
            <div class="entry-thumbnail">
                 <a href="{{route('article-detail', ['article'=>$blog->slug])}}">
                <img  height="100" width="100"src="{{ asset($blog->image) }}" />
            </div>

            <h2 class="entry-title">
            <a href="portfolio-item.html" rel="bookmark">{{ $blog->name }} </a></h2>

                <a href="portfolio-item.html" rel="bookmark">{{$blog->description }} </a></h2>

            </header>
            </article>
            @endforeach
            @endif

        <!-- .grid -->
    </main>
    <!-- #main -->
</div>
<!-- #primary -->
</div>
<nav class="pagination">
{{ $articles->links() }}
</nav>
@endsection
