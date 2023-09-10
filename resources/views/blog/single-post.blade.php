<x-main-layout>
<x-navbar-layout></x-navbar-layout>
    <!-- header -->
    <!-- section main content -->
        <div class="container-xl">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <!-- <nav aria-label="breadcrumb">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="#">الهام بخش</a></li>
                            <li class="breadcrumb-item active" aria-current="page">3 راه آسان برای سریعتر کردن آیفون</li>
                        </ol>
                    </nav> -->
                    <!-- post single -->
                    <div class="post post-single">
                        <!-- post header -->
                        <div class="post-header">
                            <h1 class="title mt-0 mb-3 text-center">{{$post->title}}</h1>
                            <ul class="meta list-inline mb-0 text-center">
                                <li class="list-inline-item"><a href="#"><img src="{{asset($post->user->avatar)}}" width="20px"
                                                                              class="author" alt="نویسنده"/>{{$post->user->firstname}} {{$post->user->lastname}}</a></li>
                                <li class="list-inline-item"><a href="#">پرطرفدار</a></li>
                                <li class="list-inline-item">{{$post->created_at->format('Y/m/d H:i')}}</li>
                            </ul>
                            <hr>
                            <div class="text-center"><img src="{{asset($post->indexImage)}}" width="500px" alt=""></div>
                        </div>
                        {!! $post->content !!}
                    </div>

                    <div class="spacer mt-4" data-height="50"></div>

                    <div class="about-author padding-30">
                        <div class="thumb">
                            <img src="{{asset($post->user->avatar)}}" alt=""/>
                        </div>
                        <div class="details">
                            <h4 class="name"><p>{{$post->user->firstname}} {{$post->user->lastname}}</p></h4>
                            <p>{{$post->user->author_desc}}</p>
                        </div>
                    </div>

                    <div class="spacer" data-height="50"></div>
                    <hr>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">دیدگاه ها ({{$countstatus}})</h3>
                        <img src="{{asset('images/wave.svg')}}" class="wave" alt="wave"/>
                    </div>
                    <!-- post comments -->
                    <div class="comments bordered padding-30 rounded">

                        <ul class="comments">
                            <!-- comment item -->
                            @if($commentsCount == 0)
                            دیدگاهی وجود ندارد
                            @endif
                            @foreach($post->comments as $comment)
                            @if($comment->status == false)
                            دیدگاهی وجود ندارد
                            @else
                            <li class="comment rounded">
                                <div class="thumb">
                                    
                                </div>
                                <div class="details">
                                    <h4 class="name"><a href="#">{{$comment->name}}</a></h4>
                                    <span class="date">01 خرداد 1401 - 14:45</span>
                                    <p>{{$comment->content}}</p>
                                </div>
                            </li>
                            @endif
                            @endforeach
                            <!-- comment item -->
                            <!-- comment item -->
                        </ul>
                    </div>

                    <div class="spacer" data-height="50"></div>

                    <!-- section header -->
                    <div class="section-header">
                        <h3 class="section-title">ارسال دیدگاه</h3>
                        <img src="{{asset('images/wave.svg')}}" class="wave" alt="wave"/>
                    </div>
                    <!-- comment form -->
                    <div class="comment-form rounded bordered padding-30">

                        <form id="comment-form" class="comment-form" action="{{route('create-comment',$post->slug)}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="messages"></div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="row">
                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"
                                               placeholder="نام خود را بنویسید">
                                               @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"" name="email"
                                               placeholder="ایمیل خود را وارد کنید">
                                               @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <div class="column col-md-12">
                                    <!-- Comment textarea -->
                                    <div class="form-group">
                                        <textarea name="content" class="form-control @error('content') is-invalid @enderror"" rows="4"
                                                  placeholder="متن نظر خود را بنویسید ..."></textarea>
                                                  @error('content') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                </div>
                                <div class="d-flex flex-row">
                                    <div class="col-md-4">
                                        <img src="{{captcha_src()}}" id="captcha-image" alt="">
                                        <a type="button" class="btn btn-sm btn-default text-white" id="reload-captcha"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3 my-3">
                                    <input type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="کد امنیتی">
                                    @error('captcha')<div class="help-block with-errors text-danger">{{$message}}</div>@enderror
                                </div>
                            </div>
                            
                            <button type="submit" name="submit" id="submit" value="submit" class="btn btn-default">
                                ارسال پیام
                            </button><!-- Submit Button -->

                        </form>
                    </div>
                </div>

                <div class="col-lg-4">

                    <!-- sidebar -->


                </div>

            </div>

        </div>
    </section>

    <!-- footer -->
<x-footer-layout></x-footer-layout>

<!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>
    <!-- content -->
    <div class="search-content">
        <div class="text-center">
            <h3 class="mb-4 mt-0">ESC را فشار دهید تا بسته شود</h3>
        </div>
        <!-- form -->
        <form class="d-flex search-form">
            <input class="form-control me-2" type="search" placeholder="جستجو کنید و اینتر را فشار دهید ..."
                   aria-label="Search">
            <button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
        </form>
    </div>
</div>

<!-- canvas menu -->
<div class="canvas-menu d-flex align-items-end flex-column">
    <!-- close button -->
    <button type="button" class="btn-close" aria-label="Close"></button>

    <!-- logo -->
    <div class="logo">
        <img src="images/logo.svg" alt="Katen"/>
    </div>

    <!-- menu -->
    <nav>
        <ul class="vertical-menu">
            <li class="active">
                <a href="index.html">صفحه اصلی</a>
                <ul class="submenu">
                    <li><a href="index.html">صفحه اصلی 1</a></li>
                    <li><a href="index-2.html">صفحه اصلی 2</a></li>
                    <li><a href="index-3.html">صفحه اصلی 3</a></li>
                    <li><a href="index-4.html">صفحه اصلی 4</a></li>
                    <li><a href="index-5.html">صفحه اصلی 5</a></li>
                </ul>
            </li>

            <li>
                <a href="#">صفحات</a>
                <ul class="submenu">
                    <li><a href="category.html">دسته بندی</a></li>
                    <li><a href="blog-single.html">جزییات وبلاگ 1</a></li>
                    <li><a href="blog-single-2.html">جزییات وبلاگ 2</a></li>
                </ul>
            </li>
            <li><a href="contact.html">تماس با ما</a></li>
            <li><a href="about.html">درباره ما</a></li>
        </ul>
    </nav>

    <!-- social icons -->
    <ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
    </ul>
</div>


</x-main-layout>