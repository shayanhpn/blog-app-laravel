<x-admin-layout>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <input type="text" value="{{old('post_title')}}" class="form-control my-3 @error('post_title') is-invalid @enderror" placeholder="عنوان" name="post_title">
            @error('post_title') <p class="text-danger">{{$message}}</p> @enderror
            <x-ckeditor></x-ckeditor>
            <div class="col-md-3 mt-4 p-4 bg-white rounded">
                <label class="badge bg-primary text-white form-label">انتخاب دسته نوشته</label>
                <select name="post_category" class="form-select">
                    @if($cats->count() == null)
                        <option value="">هیچ دسته ای وجود ندارد</option>
                    @endif
                @foreach($cats as $cat)
                    <option  value="{{$cat->title}}">{{$cat->title}}</option>
                @endforeach
            </select>
            </div>
            <div class="my-3 col-md-3 p-4 bg-white rounded">
                <label for="formFile" class="badge bg-primary text-white form-label">بارگذاری تصویر</label>
                <input class="form-control mb-2 @error('post_image') is-invalid @enderror"  type="file" id="formFile" name="post_image">
                @error('post_image') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <button type="submit" class="btn btn-primary">ارسال نوشته</button>
        </form>

    </body>
</x-admin-layout>
