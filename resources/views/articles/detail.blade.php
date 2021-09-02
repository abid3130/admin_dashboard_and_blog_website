@extends('layouts.Master')
@section("title", $article->title)

@section("content")
<div id="content" class="site-content">
    <div id="primary" class="content-area column two-thirds single-portfolio">
        <main id="main" class="site-main">
            @if(!empty($article))

        <article lass="portfolio hentry">
        <header class="entry-header">
        <div class="entry-thumbnail">
            <a href="{{route('article-detail', ['article'=>$article->slug])}}">
            <img  src="{{ asset($article->image) }}"/>
        </div>
         <h2 class="entry-title">
            <a href="portfolio-item.html" rel="bookmark">{{ $article->name }} </a></h2>
            <a href="portfolio-item.html" rel="bookmark">{{$article->description }} </a></h2>

        </header>
        <div class="entry-content">
            <p>
                Beautiful young woman in a green dress with curly long hair.
            </p>
            <p>
                There was no possibility of taking a walk that day. We had been wandering, indeed, in the leafless shrubbery an hour in the morning.
            </p>
            <blockquote>
                <p>
                    I was glad of it: I never liked long walks, especially on chilly afternoons: dreadful to me was the coming home in the raw twilight, with nipped fingers and toes, and a heart saddened by the chidings of Bessie, the nurse, and humbled by the consciousness of my physical inferiority to Eliza, John, and Georgiana Reed.
                </p>
            </blockquote>
            <p>
                The said Eliza, John, and Georgiana were now clustered round their mama in the drawing-room: she lay reclined on a sofa by the fireside, and with her darlings about her (for the time neither quarrelling nor crying) looked perfectly happy.
            </p>
        </div>
        </article>
        @endif


        <nav class="navigation post-navigation" role="navigation">
            <h1 class="screen-reader-text">Post avigation</h1>
            <div class="nav-links">
@if(isset($previous_article->slug))
            <div class="nav-previous">
            <a  href="{{route('article-detail', ['article'=>$previous_article->slug])}}" rel="prev"> <span class="meta-nav">←</span>{{$previous_article->name}}</a>
            </div>
@else
←no more  article

@endif
@if(isset($next_article->slug))
            <div class="nav-next">
                <a href="{{route('article-detail', ['article'=>$next_article->slug])}}" rel="next"> <span class="meta-nav">→</span>{{$next_article->name}}</a>
            </div>

            @else
            → no more article
   @endif
  </div>


            @include('admin_lte.partials.commentbox')
        </nav>
        <!-- .navigation -->

        </main>
        <!-- #main -->
    </div>

    <div id="secondary" class="column third">
              <div class="widget-area">
                <h4 class="widget-title">Request similar project</h4>
                <form class="wpcf7" method="post" action="{{route('project.request')}}" id="contactform">
                    @csrf
                    <div class="form">
                            <aside class="widget">
                              <p><input type="text" name="name" placeholder="Name *"></p>
                              <p><input type="text" name="email" placeholder="E-mail Address *"></p>
                              <p><textarea name="comment" rows="3" placeholder="Message *"></textarea></p>
                              <p><input type="hidden" name="article_id" value="{{$article->id}}" placeholder="Name *"></p>
                            <input type="submit" id="submit" class="clearfix btn" value="Send">
                        </div>
                    </form>
                    <div class="done">
                        Your message has been sent. Thank you!
                    </div>
                </aside>
            </div>
        </div>
    </div
     @endsection






