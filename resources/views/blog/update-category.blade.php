<x-admin-layout>
    <form action="{{route('admin.update-category-function',$category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-3">
            <input type="text" class="form-control" value="{{$category->title}}" placeholder="عنوان دسته" name="title">
            <textarea type="text" rows="6" class="form-control my-3 fixed-size" placeholder="توضیحات دسته" name="description">{{$category->description}}</textarea>
            <button type="submit" class="btn btn-primary">بروزرسانی</button>
            <a href="{{ route('admin.create-category') }}" class="btn btn-warning">برگشت</a>
        </div>
    </form>
</x-admin-layout>