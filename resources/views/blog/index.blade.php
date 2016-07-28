@extends('layouts.app')

@section('title', 'News &amp; Events - Himakomsi UGM')

@section('content')

      <section>
  				<div class="container">

            @if (Session::has('message'))
                <div class="style-msg successmsg">
                    <div class="sb-msg"><i class="icon-thumbs-up"></i>{{ Session::get('message') }}</div>
                </div>
            @endif

  					<div class="row">
  						<div class="masonry masonry-blog">
  							<div class="masonry__container masonry--animate masonry--active">

                  @foreach($blog as $key)
  								<div class="col-sm-12 masonry__item">
  									<a href="{{ url('blog') }}/{{ $key->id }}">
  										<div class="card card--horizontal card-6">
  											<div class="card__image col-sm-7 col-md-8">
  												<div class="background-image-holder">
  													<img alt="Pic" src="uploads/blog/{{ $key->image }}">
  												</div>
  											</div>
  											<div class="card__body col-sm-5 col-md-4 boxed boxed--lg bg--white">
                          @if($key->tag == 1)
  												  <h6>Event</h6>
                          @else
                            <h6>News</h6>
                          @endif
  												<div class="card__title">
  													<h4>{{ $key->title }}</h4>
  												</div>
  												<p>
                            {!! substr($key->content, 0, 100) !!}
  												</p>
                          @if(strlen($key->content) > 100)
                            Baca Selengkapnya
                          @endif
  												<hr>
  												<div class="card__lower">
  													<span>by</span>
  													<span class="h6">{{ DB::table('users')->where('id', $key->user_id)->value('name') }}</span>
  												</div>
  											</div>
  										</div>
  									</a>
  								</div>
                  @endforeach

  							</div>
  						</div>
  					</div>
  				</div>
  			</section>

@endsection
