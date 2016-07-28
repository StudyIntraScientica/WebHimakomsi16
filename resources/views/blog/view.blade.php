@extends('layouts.app')

@section('title', $blog->title)

@section('content')

<section class="blog-post">
     <div class="blog-post__title bg--secondary">
         <div class="container">
             <div class="row">
                 <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                     <h1>{{ $blog->title }}</h1>
                     <div class="blog-post__author">
                         <span>
                             <em>by </em>
                         </span>
                         <span class="h6">{{ DB::table('users')->where('id', $blog->user_id)->value('name') }}</span>
                     </div>
                 </div>
             </div>
             <!--end of row-->
         </div>
         <!--end of container-->
     </div>
     <div class="container">
         <div class="row">
             <div class="col-sm-10 col-sm-offset-1 text-center">
                 <img class="blog-post__hero box-shadow" alt="pic" src="{{ url('uploads/blog/') }}/{{ $blog->image }}" />
             </div>
             <div class="col-sm-8 col-sm-offset-2">
                {!! $blog->content !!}
                 <hr>
             </div>
         </div>
         <!--end of row-->
         <div class="row">
             <div class="col-sm-12 text-center">
                 <div class="blog-post__share">
                     <h5>Share this article</h5>
                     <a class="btn btn--sm bg--facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url('blog') }}/{{ $blog->id }}">
                         <span class="btn__text">
                             <i class="socicon-facebook"></i> Share on Facebook
                         </span>
                     </a>
                     <a class="btn btn--sm bg--twitter" target="_blank" href="https://twitter.com/home?status={{ $blog->title }}%20{{ url('blog') }}/{{ $blog->id }}">
                         <span class="btn__text">
                             <i class="socicon-twitter"></i> Share on Twitter
                         </span>
                     </a>
                     <a class="btn btn--sm bg--googleplus" target="_blank" href="https://plus.google.com/share?url={{ url('blog') }}/{{ $blog->id }}">
                         <span class="btn__text">
                             <i class="socicon-googleplus"></i> Share on GooglePlus
                         </span>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 @endsection
