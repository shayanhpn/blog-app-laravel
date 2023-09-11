<x-main-layout>
    <body class="bg-light">

    <div class="container p-4 top-line">
        <div class="d-flex flex-row justify-content-center">
            <h1>{{optional($settings)->logo}}</h1>
        </div>
        <div class="d-flex flex-row justify-content-center mt-2">
            <div class="col-md-4 bg-white  p-4 rounded shadow-sm">
                <form action="{{route('login-func')}}" method="POST">
                    @csrf                    
                    <input type="email" value="{{old('loginemail')}}" class="form-control @error('loginemail') is-invalid @enderror" placeholder="ایمیل" name="loginemail">
                    @error('loginemail') <p class="text-danger m-1">{{$message}}</p> @enderror
                    <input type="password" class="form-control my-2 @error('loginpassword') is-invalid @enderror" placeholder="رمز عبور" name="loginpassword">
                    @error('loginpassword') <p class="text-danger m-1">{{$message}}</p> @enderror
                    <input type="text" class="form-control mt-2 @error('captcha') is-invalid @enderror" placeholder="کد امنیتی" name="captcha">
                    @error('captcha') <p class="text-danger m-1">{{$message}}</p> @enderror
                    <div class="row my-2">
                            <div>
                                <img src="{{captcha_src()}}" id="captcha-image" alt="">
                                <a type="button" class="btn btn-sm btn-default text-white" id="reload-captcha"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                            </div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary my-2 p-3">ورود</button></div>
                </form>
                <p>اگر حساب کاربری ندارید <a href="{{route('register')}}">ثبت نام</a> کنید </p>
            </div>
        </div>
    </div>
    </body>
</x-main-layout>
