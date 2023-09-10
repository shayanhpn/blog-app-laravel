<x-admin-layout>
    <div class="col-md-4">
        <form action="" class="p-4" method="POST">
            @csrf
            @method('POST')
            <label for="">نام</label>
            <input type="text" class="form-control @error('firstname') is-invalid @enderror" placeholder="نام" name="firstname">
            @error('firstname') <p class="text-danger m-1">{{$message}}</p> @enderror
            <br>
            <label for="">نام خانوادگی</label>
            <input type="text" class="form-control @error('lastname') is-invalid @enderror my-2" placeholder="نام خانوادگی" name="lastname">
            @error('lastname') <p class="text-danger m-1">{{$message}}</p> @enderror
            <br>
            <label for="">ایمیل</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ایمیل" name="email">
            @error('email') <p class="text-danger m-1">{{$message}}</p> @enderror
            <br>
            <label for="">رمز عبور</label>
            <input type="password" class="form-control my-2 @error('password') is-invalid @enderror" placeholder="رمز عبور" name="password">
            @error('password') <p class="text-danger m-1">{{$message}}</p> @enderror
            <br>
            <label for="">تکرار رمز عبور</label>
            <input type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation">
            <br>
            <input type="text" class="form-control mt-2 @error('captcha') is-invalid @enderror" placeholder="کد امنیتی" name="captcha">
            @error('captcha') <p class="text-danger m-1">{{$message}}</p> @enderror
            <div class="row my-2">
                    <div>
                        <img src="{{captcha_src()}}" id="captcha-image" alt="">
                        <a type="button" class="btn btn-sm btn-default text-white" id="reload-captcha"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                    </div>
            </div>
            <div><button type="submit" class="btn btn-primary my-2 p-3">ثبت نام</button></div>
        </form>
    </div>
</x-admin-layout>