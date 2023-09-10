<x-admin-layout>
<div class="d-flex flex-row justify-content-center">
<div class="col-md-6">
    <form action="{{route('admin.status-func',$comment->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label class="badge bg-secondary my-4">وضعیت نظر ثبت شده</label>
    <select name="status" class="form-select">
            <option value="0" {{$comment->status == false ? 'selected' : ''}}>تایید نشده</option>
            <option value="1" {{$comment->status == true ? 'selected' : ''}}>تایید شده</option>
        </select>
        <div class="d-flex flex-row justify-content-center">
            <button type="submit" class="btn btn-primary my-4">ایجاد تغییر</button>
        </div>
    </form>
</div>
</div>
</x-admin-layout>
