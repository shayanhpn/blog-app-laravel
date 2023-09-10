<x-admin-layout>
    <div class="d-flex flex-row justify-content-center">
        <div class="col-md-3">
            <form action="" method="POST">
                @csrf
                @method('POST')
                <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="عنوان دسته" name="title">
                <textarea type="text" rows="6" class="form-control @error('description') is-invalid @enderror my-3 fixed-size" placeholder="توضیحات دسته" name="description"></textarea>
                <button type="submit" class="btn btn-primary">اضافه کردن</button>
            </form>
        </div>
        <div class="vr mx-4 my-4"></div>
        <div class="col-md-6">
            <table class="table table-bordered bg-white p-4">
                <thead>
                    <tr>
                        <th>شماره</th>
                        <th>عنوان</th>
                        <th>توضیحات</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count() === 0)
                        <tr>
                            <td colspan="7">دسته ای برای نمایش وجود ندارد</td>
                        </tr>
                    @endif
                    @foreach ($categories as $cat )
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->title}}</td>
                        <td>{{$cat->description}}</td>
                        <td><a  href="{{route('admin.view-category',$cat->id)}}" data-toggle="tooltip" data-placement="top" title="مشاهده"><i class="fas fa-eye text-primary mr-5"></i></a>
                            <a  href="{{route('admin.show-update-category',$cat->id)}}" data-toggle="tooltip" data-placement="top" title="ویرایش"><i class="fas fa-pencil-alt text-success mx-2 mr-5"></i></a>
                            <a  href="{{route('admin.show-delete-category',$cat->id)}}" data-toggle="tooltip" data-placement="top" title="حذف"><i class="fas fa-window-close text-danger mr-5"></i></a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>