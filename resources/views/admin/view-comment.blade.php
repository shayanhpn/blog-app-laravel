<x-admin-layout>
    <div class="col-md-4">
        <label for="">نام</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$comment->name}}" disabled>
        <br>
        <label for="">ایمیل</label>
        <input type="email" name="" id="" class="form-control bg-white" value="{{$comment->email}}" disabled>
        <br>
        <label for="">عنوان نوشته</label>
        <input type="text" name="" id="" class="form-control bg-white" value="{{$comment->post->title}}" disabled>
        <br>
        <label for="">متن مورد نظر</label>
        <textarea class="form-control" name="" id="" cols="30" rows="10" disabled>{{$comment->content}}</textarea>
    </div>
</x-admin-layout>