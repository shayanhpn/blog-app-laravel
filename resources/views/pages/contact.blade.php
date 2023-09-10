<x-main-layout>
    <x-navbar-layout></x-navbar-layout>
    <!-- section main content -->
        <div class="container-xl">

            <div class="row">

                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-phone"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">شماره تماس</h3>
                            <p class="mb-0">09121234567</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-envelope-open"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">ایمیل</h3>
                            <p class="mb-0">hello@example.com</p>
                        </div>
                    </div>
                    <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                </div>

                <div class="col-md-4">
                    <!-- contact info item -->
                    <div class="contact-item bordered rounded d-flex align-items-center">
                        <span class="icon icon-map"></span>
                        <div class="details">
                            <h3 class="mb-0 mt-0">مکان</h3>
                            <p class="mb-0">ایران، تهران</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="spacer" data-height="50"></div>

            <!-- section header -->
            <div class="section-header">
                <h3 class="section-title">ارسال پیام</h3>
                <img src="images/wave.svg" class="wave" alt="wave"/>
            </div>

            <!-- Contact Form -->
            <form action="{{route('submit-contact')}}" id="contact-form" class="contact-form" method="POST">
                @csrf
                @method('POST')
                <div class="messages"></div>
                <div class="row">
                    <div class="column col-md-6">
                        <!-- Name input -->
                        <div class="form-group">
                            <input type="text" value="{{old('inputName')}}" class="form-control @error('inputName') is-invalid @enderror" id="InputName" name="inputName"
                                   placeholder="نام خود را بنویسید">
                            @error('inputName')<div class="help-block with-errors text-danger">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="column col-md-6">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="email" value="{{old('inputEmail')}}" class="form-control @error('inputEmail') is-invalid @enderror" id="InputEmail" name="inputEmail"
                                   placeholder="ایمیل خود را بنویسید">
                            @error('inputEmail')<div class="help-block with-errors text-danger">{{$message}}</div>@enderror
                        </div>
                    </div>

                    <div class="column col-md-12">
                        <!-- Email input -->
                        <div class="form-group">
                            <input type="text" value="{{old('inputSubject')}}" class="form-control @error('inputSubject') is-invalid @enderror" id="InputSubject" name="inputSubject"
                                   placeholder="موضوع خود را وارد بنویسید">
                            @error('inputSubject')<div class="help-block with-errors text-danger">{{$message}}</div>@enderror
                        </div>
                    </div>
                    <div class="column col-md-12">
                        <!-- Message textarea -->
                        <div class="form-group">
                            <textarea id="InputMessage"  class="form-control @error('inputMessage') is-invalid @enderror" rows="4" name="inputMessage"
                                      placeholder="متن پیام خود را بنویسید">{{old('inputMessage')}}</textarea>
                            @error('inputMessage')<div class="help-block with-errors text-danger">{{$message}}</div>@enderror
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

                <div class="d-flex flex-row justify-content-center">
                    <button type="submit" name="submit" id="submit" value="submit" class="btn btn-default">ارسال پیام</button><!-- Send Button -->
                </div>

            </form>
            <!-- Contact Form end -->
        </div>

    <!-- footer -->
    <x-footer-layout></x-footer-layout>


</x-main-layout>
