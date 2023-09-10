<x-admin-layout>
    <div class="col-md-3">
        <input type="text" class="form-control" value="{{$category->title}}" placeholder="عنوان دسته" name="title" disabled>
        <textarea type="text" rows="6" class="form-control my-3 fixed-size" placeholder="توضیحات دسته" name="description" disabled>{{$category->description}}</textarea>
        <a href="{{ route('admin.create-category') }}" class="btn btn-warning">برگشت</a>
    </div>
    
</x-admin-layout>