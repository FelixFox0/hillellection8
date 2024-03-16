@extends('default')
@section('title'){{ $title }} @endsection
@section('content')
<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">

                        Hello, @{{ $testText }}.
                        <?= $testText ?>

                        <div class="blog-post">
{{--                            <img src="images/blog/blog-lg.jpg" alt="" class="img-fluid">--}}
                            <img src="{{ Vite::image('blog/blog-lg.jpg') }}"  class="img-fluid">
                            <div class="mt-4 mb-3 d-block d-sm-flex">
                                <div class="post-author mr-3">
                                    <i class="fa fa-user"></i>
                                    <span class="h6 text-uppercase">John mackel</span>
                                </div>

                                <div class="post-info">
                                    <i class="fa fa-calendar-check"></i>
                                    <span>19 jun 18</span>
                                </div>
                            </div>

                            <h4>Grow your site with latest startegy</h4>

                            <p class="mt-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aliquid
                                perspiciatis voluptate voluptatibus, dolorem laboriosam deleniti dolores reprehenderit nostrum
                                odit, fuga iusto perferendis quas suscipit corporis obcaecati maxime provident cumque!</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium totam rem aperiam eaque ipsa quae ab illo inventore veri.</p>

                            <blockquote class="quote">
                                <i class="fa fa-quote-left"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam nobis, molestias ipsam assumenda
                                debitis quibusdam mollitia laudantium facere neque quas optio sequi eligendi recusandae,
                                veritatis dicta asperiores ex fugiat quasi!
                            </blockquote>

                            <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                            <div class="mt-5 mb-3">
                                <h5 class="d-inline-block mr-3">Tags:</h5>
                                <ul class="list-inline d-inline-block">
                                    <li class="list-inline-item"><a href="#!">Agency</a>,</li>
                                    <li class="list-inline-item"><a href="#!">Marketing</a>,</li>
                                    <li class="list-inline-item"><a href="#!">Business</a></li>
                                </ul>
                            </div>
                            <div class="my-4">
                                <h5 class="d-inline-block mr-3">Share Now:</h5>
                                <ul class="list-inline d-inline-block">
                                    <li class="list-inline-item"><a href="#!"><i class="fab fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#!"><i class="fab fa-pinterest"></i></a></li>
                                    <li class="list-inline-item"><a href="#!"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="comments my-4">
                            <h3 class="mb-5">Comments :</h3>

                            @foreach ($tenders as $tender)
                                @if(!$tender->is_closet)
                                <div class="media d-block d-sm-flex mb-4">
{{--                                <img src="images/blog/2.jpg" alt="" class="img-fluid d-flex mr-4 rounded mb-3 mb-sm-0">--}}
                                    <img src="{{ Vite::image('blog/2.jpg') }}"  class="img-fluid d-flex mr-4 rounded mb-3 mb-sm-0">
                                    <div class="media-body">
                                        <h5>{{ $tender->road }}</h5>
                                        <span class="text-muted">{{ $tender->updated_at }}</span>
                                        <p class="mt-2">{{ $tender->text }}</p>

                                        <a href="/tender/{{ $tender->id }}" class="reply">Reply <i class="fa fa-reply"></i></a>
                                    </div>
                                </div>
                                @endif
                            @endforeach



                        </div>

                        <div class="mt-5 mb-3">
                            <h3 class="mt-5 mb-2">Leave a comment</h3>
                            <p class="mb-4">We don't spam at your inbox.</p>
                            <form action="#" class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <textarea cols="30" rows="6" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <a href="#!" class="btn btn-hero btn-circled">Send a message</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
