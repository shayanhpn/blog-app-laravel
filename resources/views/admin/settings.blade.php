<x-admin-layout>
<form action="{{route('admin.update-setting')}}" method="POST">
    @csrf
    @method('PUT')
    <section>
        <h1 class="badge bg-secondary">لوگوی وبسایت</h1>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="لوگو" name="logo" value="{{optional($settings)->logo}}">
        </div>
    </section>
    <hr>
    <section>
        <h1 class="badge bg-secondary">درباره وبسایت</h1>
        <div class="col-md-4">
        <textarea name="about" class="form-control" cols="30" rows="10" placeholder="درباره وبسایت...">{{optional($settings)->about}}</textarea>
        </div>
    </section>
    <hr>
    <div class="d-flex flex-row justify-content-center">
        <button class="btn btn-primary">بروزرسانی</button>
    </div>
</form>
</x-admin-layout>