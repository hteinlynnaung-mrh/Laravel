@extends("layouts.app")
{{-- extendsကိုသုံးပြီး layouts.appကိုခေါ်သုံးတယ် layouts appထဲမှာ containerရှိတယ် --}}

@section("content") {{-- sectionကိုသုံးပြီး layout appထဲမှာထည့်ပြရမယ့် contentကိုပေးတယ်--}}
    <div class="container" style="max-width: 800px">

        @if(session("info")) {{-- larvelကdataပို့တဲ့အခါ အဲ့ဒီdataကို urlမှာမထည့်ပဲ sessionထဲထည့်လို့ sessionထဲမှာသွားစစ်တယ်  --}}
            <div class="alert alert-info">
                {{ session("info") }} 
            </div>
        @endif
        
        <div class="card mb-2 border-primary"> {{-- show content with card --}}
            <div class="card-body">
                <h4>{{ $article->title }}</h4> {{-- output  article title--}}
                <div class="text-muted"> {{-- to be light text color --}}
                    <b>Category: </b> {{ $article->category->name }},
                    {{ $article->created_at->diffforHumans() }}{{-- show with hours --}}
                </div>
                <p>
                    {{ $article->body }} {{-- output article body --}}
                </p>
                @auth
                    <a href="{{ url("/articles/delete/$article->id") }}" {{-- Routeသုံး --}}
                        class="btn btn-sm btn-outline-danger">
                        Delete 
                        {{-- delete linkကိုနှိပ်လိုက်ရင် Routeကိုရောက်သွားမယ် Routeကနေ Controllerကိုပို့လိုက်တယ် Controllerကdelete functionအလုပ်လုပ်ပြီး tableထဲကdataကို ဖျက်လိုက်တယ် ဖျက်ပြီးရင် articles indexကိုပြန်လာတယ် --}}
                    </a>
                @endauth
            </div>
        </div>

        <ul class="list-group mt-4">
            <li class="list-group-item active">
                Comments ({{ count($article->comments) }})
            </li>
            @foreach ($article->comments as $comment)
                <li class="list-group-item">
                    @auth
                        <a href="{{ url("/comments/delete/$comment->id") }}"
                        class="btn-close float-end"></a>
                    @endauth

                    <b class="text-success">{{ $comment->user->name }}</b> -
                    {{ $comment->content }}
                </li>
            @endforeach
        </ul>
        @auth
            <form action="{{ url("/comments/create") }}" method="post">
                @csrf
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <textarea name="content" class="form-control my-2"></textarea>
                <button class="btn btn-secondary">Add Comment</button>
            </form>
        @endauth
    </div>
@endsection

{{-- Controllerကပေးတဲ့ dataကို bladeနဲ့ယူတယ် --}}
{{-- bladeက php tapအဖွင့်အပိတ်တွေအစား @foreachသုံးတယ် outputထုတ်ရင် {{  }} --}}