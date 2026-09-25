@extends("layouts.app")
{{-- extendsကိုသုံးပြီး layouts.appကိုခေါ်သုံးတယ် layouts appထဲမှာ containerရှိတယ် --}}

@section("content") {{-- sectionကိုသုံးပြီး layout appထဲမှာထည့်ပြရမယ့် contentကိုပေးတယ်--}}
    <div class="container" style="max-width: 800px">
        <form action="{{ url("/articles/create") }}" method="post">
            @csrf {{-- laravelမှာ formသုံးရင်csrfထည့်ပေးရတယ် buttonမနှိပ်ပဲrequestအတု လုပ်မှာစိုးလို့ --}}
            <input type="text" name="title" placeholder="Title"
            class="form-control mb-2">
            <textarea name="body" placeholder="Body" class="form-control mb-2"></textarea>
            <select name="category_id" class="form-select mb-2">
                <option value="1">News</option>
                <option value="2">Tech</option>
            </select>

            <button class="btn btn-primary">Add Article</button>
        </form>
    </div>
@endsection