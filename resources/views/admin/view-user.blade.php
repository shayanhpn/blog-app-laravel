<x-admin-layout>
    <div class="col-md-4">
        <label for="">شناسه</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$user->id}}" disabled>
        <br>
        <label for="">نام</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$user->firstname}}" disabled>
        <br>
        <label for="">نام خانوادگی</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$user->lastname}}" disabled>
        <br>
        <label for="">ایمیل</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$user->email}}" disabled>
    </div>
</x-admin-layout>