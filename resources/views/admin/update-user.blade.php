<x-admin-layout>
    <form action="{{route('admin.update-user-func',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="نام" value="{{$user->firstname}}" name="firstname">
                <input type="text" class="form-control my-4" placeholder="نام خانوادگی" value="{{$user->lastname}}" name="lastname">
                <input type="text" class="form-control" placeholder="ایمیل" value="{{$user->email}}" name="email">
                <div class="my-3 p-4 bg-white rounded">
                    <label for="formFile" class="badge bg-primary text-white form-label">بارگذاری آواتار</label>
                    <input class="form-control" type="file" id="formFile" name="avatar">
                </div>
                <div class="p-4 bg-white col-md-3 my-3 rounded">
                    <label for="formFile" class="badge bg-primary text-white form-label">تصویر آواتار</label>
                    <img src="{{url($user->avatar)}}" width="60px" alt="post-title"/>
                </div>
            </div>
            <div class="col-md-8">
                <textarea placeholder="توضیحات" class="form-control" cols="30" rows="10" name="author_desc">{{$user->author_desc}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-info my-3">بروزرسانی</button>
    </form>
</x-admin-layout>