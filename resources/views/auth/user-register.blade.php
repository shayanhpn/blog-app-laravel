<x-main-layout>
<body class="bg-light">

<div class="container p-4 top-line">
    <div class="d-flex flex-row justify-content-center">
        <h1>{{optional($settings)->logo}}</h1>
    </div>
    <div class="d-flex flex-row justify-content-center mt-2">
    <div class="col-md-4 bg-white  p-4 rounded shadow-sm">
        <form action="" method="POST">
            @csrf
            @method('POST')
            <input type="text" value="{{old('firstname')}}" class="form-control @error('firstname') is-invalid @enderror" placeholder="نام" name="firstname">
            @error('firstname') <p class="text-danger m-1">{{$message}}</p> @enderror
            <input type="text" value="{{old('lastname')}}" class="form-control @error('lastname') is-invalid @enderror my-2" placeholder="نام خانوادگی" name="lastname">
            @error('lastname') <p class="text-danger m-1">{{$message}}</p> @enderror
            <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email">
            @error('email') <p class="text-danger m-1">{{$message}}</p> @enderror
            <input type="password" class="form-control my-2 @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password">
            @error('password') <p class="text-danger m-1">{{$message}}</p> @enderror
            <input type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation">
            <input type="text" class="form-control mt-2 @error('captcha') is-invalid @enderror" placeholder="کد امنیتی" name="captcha">
            @error('captcha') <p class="text-danger m-1">{{$message}}</p> @enderror
            <div class="row my-2">
                    <div>
                        <img src="{{captcha_src()}}" id="captcha-image" alt="">
                        <a type="button" class="btn btn-sm btn-default text-white" id="reload-captcha"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary my-2 p-3">ثبت نام</button></div>
        </form>
        <p>اگر حساب کاربری دارید <a href="{{route('login')}}">وارد</a> شوید </p>
    </div>
</div>
</body>
</x-main-layout>