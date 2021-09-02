

<div id="comments" class="comments-area">

    <h2 class="comments-title">
    {{Helper::count_comments()}} thoughts on<span>{{$article->name}}</span>	</h2>


<ol class="comment-list">

<li id="comment-413" class="comment even thread-even depth-1">

    @foreach($comments as $comment)
<article id="div-comment-413" class="comment-body clear">
                <div class="comment-author vcard">
        <img alt="" src="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=60&amp;d=mm&amp;r=g"
         srcset="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=120&amp;d=mm&amp;r=g 2x"
         class="avatar avatar-60 photo" height="60" width="60" loading="lazy">
    	</div><!-- .comment-author -->


    <div class="comment-content">
        <footer class="comment-meta">
            <div>
                <cite class="fn"><a href="#" rel="external nofollow ugc" class="url">{{$comment->name}}</a></cite>					</div>
            <div class="comment-meta-details">
                <span class="comment-meta-time"><a href="https://www.themepush.com/demo-moschino/embed-audio/#comment-413">
                    <time datetime="2021-07-30T11:04:50+00:00">{{!empty($comment->created_at) ? $comment->created_at->diffForHumans() : ''}}</time></a></span>

                       <span class="reply"><a rel="nofollow" class="comment-reply-link"
                        href="#" data-commentid="{{$comment->id}}"
                         data-postid="{{$article->id}}" data-belowelement="div-comment-413"
                         data-respondelement="respond" data-replyto="Reply to ayoub"
                                              aria-label="Reply to ayoub">Reply</a></span>
                                            	</div>


        </footer><!-- .comment-meta -->
                        {{-- <p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p> --}}
                        <p>"{{$comment->comment}}"</p>

    </div><!-- .comment-content -->


    @foreach(Helper::getChildComments($comment->id) as $child_comments)
<div  style="padding:0px 170px;" >
    <div class="comment-author-vcard">
        <img alt="" src="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=60&amp;d=mm&amp;r=g"
         srcset="https://secure.gravatar.com/avatar/8d7f8f96834d152aa4f1ab35a7e8ebd4?s=120&amp;d=mm&amp;r=g 2x"
         class="avatar avatar-60 photo" height="60" width="60" loading="lazy">
    	</div><!-- .comment-author -->


    <div class="comment-content">
        <footer class="comment-meta">
            <div>
                <cite class="fn"><a href="http://webpenter.com" rel="external nofollow ugc" class="url">{{$child_comments->name}}</a></cite>					</div>
            <div class="comment-meta-details">
                <span class="comment-meta-time"><a href="https://www.themepush.com/demo-moschino/embed-audio/#comment-413">
                    <time datetime="2021-07-30T11:04:50+00:00">
                        {{-- {{!empty($child_comments->created_at) ? $child_comments->created_at->diffForHumans() : ''}} --}}
                    </time></a></span>

                       <span class="reply"><a rel="nofollow" class="comment-reply-link"
                        href="#" data-commentid="{{$child_comments->id}}"
                         data-postid="{{$article->id}}" data-belowelement="div-comment-413"
                         data-respondelement="respond" data-replyto="Reply to ayoub"
                                              aria-label="Reply to ayoub">Reply</a></span>
                                            	</div>


        </footer><!-- .comment-meta -->
                        {{-- <p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p> --}}
                        <p>"{{$child_comments->comment}}"</p>

    </div><!-- chiold .comment-content -->
</div>
    @endforeach
</article><!-- .comment-body -->
@endforeach



</li><!-- #comment-## -->
</ol><!-- .comment-list -->

<div id="respond" class="comment-respond">

    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo-moschino/embed-audio/#respond" style="display:none;">Cancel reply</a></small></h3>



<form  action="{{route('store-comments')}}" method="post" id="commentform" class="comment-form" novalidate="">
    @csrf
    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>

     Required fields are marked <span class="required">*</span></p>

     <p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment_box" value=""
         name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
     <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label>
         <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label>
    <input id="email" name="email" type="email"  value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
<p class="comment-form-url"><label for="url">Website</label>
     <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
    <input type="hidden" name="article_id" value="{{$article->id}}" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent"  value="0">
</p><noscript></noscript></form>	</div><!-- #respond -->

</div>

@section('footer_scripts')
<script>
$(document).ready(function(){
$(".comment-reply-link").click(function(e){
e.preventDefault();
$('#comment_parent').val($(this).data("commentid"));
$('html, body').animate({
        scrollTop: $("#comment_box").offset().top
    }, 1000);
});
});
</script>
@endsection





