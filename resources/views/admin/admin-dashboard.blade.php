<x-admin-layout>
    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">
            <!--begin::امار Widget 5-->
            <a href="{{route('admin.users')}}" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="fas fa-users text-white fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">کاربران</div>
                    <div class="fw-semibold text-white">{{$allUsers->count()}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::امار Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::امار Widget 5-->
            <a href="{{route('admin.view-posts')}}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="fas fa-pen-alt text-white fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">نوشته ها</div>
                    <div class="fw-semibold text-white">{{$allPosts->count()}}</div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::امار Widget 5-->
        </div>
        <div class="col-xl-4">
            <!--begin::امار Widget 5-->
            <a href="{{route('admin.all-contacts')}}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="fas fa-plug text-white fs-2x ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <div class="text-white fw-bold fs-2 mb-2 mt-5">فرم های تماس</div>
                    <div class="fw-semibold text-white">{{$contacts->count()}}</div>
                </div>

                <!--end::Body-->
            </a>
            <!--end::امار Widget 5-->
        </div>
        <table class="table table-bordered table-hover p-4 bg-white rounded shadow-sm">
            <thead>
                <tr>
                    <th>آیدی</th>
                    <th>عنوان</th>
                    <th>دسته بندی</th>
                    <th>تاریخ ایجاد پست</th>
                    <th >عملیات</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category}}</td>
                    <td>{{$post->created_at}}</td>
                    <td class="text-center"><a data-toggle="tooltip" data-placement="top" title="مشاهده"  href="{{route('view-post-pub',$post->slug)}}"><i class="fas fa-eye text-primary mr-5"></i></a>
                        <a data-toggle="tooltip" data-placement="top" title="ویرایش"  href="{{route('admin.update-post',$post->slug)}}"><i class="fas fa-pencil-alt text-success mx-2 mr-5"></i></a>
                        <a data-toggle="tooltip" data-placement="top" title="حذف"  href="{{route('admin.delete-post',$post->slug)}}"><i class="fas fa-window-close text-danger mr-5"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-admin-layout>
