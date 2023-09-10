<x-main-layout>
    <x-navbar-layout>
    </x-navbar-layout>

    <section class="hero-carousel">
    <div class="row post-carousel-featured post-carousel">
        <!-- post -->
        @foreach ($sliderPosts as $post )
        <div class="post featured-post-md">
            <div class="details clearfix">
                <a  class="category-badge">{{$post->category}}</a>
                <h4 class="post-title"><a href="{{route('view-post-pub',$post->slug)}}">{{$post->title}}</a></h4>
                <ul class="meta list-inline mb-0">
                    <li class="list-inline-item">{{$post->user->firstname}} {{$post->user->lastname}}</li>
                    <li class="list-inline-item">{{$post->created_at->format('Y/m/d')}}</li>
                </ul>
            </div>
            <a href="{{route('view-post-pub',$post->slug)}}">
                <div class="thumb rounded">
                    <div class="inner data-bg-image" data-bg-image="{{$post->indexImage}}"></div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>

<!-- section main content -->
<section class="main-content">
    <div class="container-xl">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="row gy-4">
                    @foreach ($posts as $post )
                    <div class="col-sm-6">
                        <!-- post -->
                        <div class="post post-grid rounded bordered">
                            <div class="thumb top-rounded">
                                <a class="category-badge position-absolute">{{$post->category}}</a>
                                <span class="post-format">
                                        <i class="icon-picture"></i>
                                    </span>
                                <a href="{{route('view-post-pub',$post->slug)}}">
                                    <div class="inner">
                                        @if($post->indexImage === null)
        
                                        @else
                                        <img src="{{$post->indexImage}}" alt="post-title"/>
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <div class="details">
                                <ul class="meta list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><img class="rounded" width="30px" src="{{asset($post->user->avatar)}}"
                                                                                  class="author" alt="author"/> || {{$post->user->firstname}} {{$post->user->lastname}}</a>
                                    </li>
                                    <li class="list-inline-item">{{$post->created_at->format('Y/m/d')}}</li>
                                </ul>
                                <h5 class="post-title mb-3 mt-3"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h5>
                                <p class="excerpt mb-0">{{ strip_tags(Str::limit($post->content,180,'...')) }}</p>
                            </div>
                            <div class="post-bottom clearfix d-flex align-items-center">
                                <div>
                                    <a href="{{route('view-post-pub',$post->slug)}}">بیشتر</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
                <nav class="d-flex flex-row justify-content-center">
                    {{$posts->links()}}
                </nav>



            </div>

            <div class="col-lg-4">

                <!-- sidebar -->
                <div class="sidebar">
                    <!-- widget about -->
                    <div class="widget rounded">
                        <div class="widget-about data-bg-image text-center" data-bg-image="images/map-bg.png">
                            <h3>{{optional($settings)->logo}}</h3>
                            <p class="mb-4">{{optional($settings)->about}}</p>
                        </div>
                    </div>

                    <!-- widget newsletter -->
                    <div class="widget rounded">
                        <div class="widget-header text-center">
                            <h3 class="widget-title">خبرنامه</h3>
                            <img src="images/wave.svg" class="wave" alt="wave"/>
                        </div>
                        <div class="widget-content">
                            <span class="newsletter-headline text-center mb-3">به مشترکین ما بپیوندید!</span>
                            <form id="myForm" action="{{route('submit-form')}}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="mb-2">
                                    <input class="form-control w-100 text-center @error('email') is-invalid @enderror"
                                           placeholder="ایمیل خود را بنویسید ..." type="email" name="email">
                                           @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                                <button class="btn btn-default btn-full" type="submit">ثبت نام</button>
                            </form>
                            <div id="result"></div>
                            <span class="newsletter-privacy text-center mt-3">با ثبت نام، با <a href="#">سیاست حفظ حریم خصوصی ما</a> موافقت می کنید</span>
                        </div>
                    </div>

                    <!-- widget post carousel -->

                    <!-- widget advertisement -->
                    <div class="widget no-container rounded text-md-center">
                        <span class="ads-title">- تبلیغات -</span>
                        <a href="#" class="widget-ads">
                            <img class="rounded" src="{{asset('/post_images/7.jpg')}}" alt="Advertisement"/>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>



<!-- footer -->
<x-footer-layout></x-footer-layout>

</div><!-- end site wrapper -->


</body>

</x-main-layout>

