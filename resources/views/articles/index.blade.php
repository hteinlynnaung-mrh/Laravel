@extends("layouts.app")
{{-- extendsကိုသုံးပြီး layouts.appကိုခေါ်သုံးတယ် layouts appထဲမှာ containerရှိတယ် --}}

@section("content") {{-- sectionကိုသုံးပြီး layout appထဲမှာထည့်ပြရမယ့် contentကိုပေးတယ်--}}
    <div class="container" style="max-width: 800px">
        {{ $articles->links() }} {{-- show the article page link --}}
        
        @foreach($articles as $article) {{-- output article using foreach loop --}}
            <div class="card mb-2"> {{-- show content with card --}}
                <div class="card-body">
                    <h4>{{ $article->title }}</h4> {{-- output  article title--}}
                    <div class="text-muted"> {{-- to be light text color --}}
                        {{ $article->created_at->diffforHumans() }}{{-- show with hours --}}
                    </div>
                    <p>
                        {{ $article->body }} {{-- output article body --}}
                    </p>
                    <a href="{{ url("/articles/detail/$article->id") }}">{{-- Routeသုံး --}}
                        View Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- Controllerကပေးတဲ့ dataကို bladeနဲ့ယူတယ် --}}
{{-- bladeက php tapအဖွင့်အပိတ်တွေအစား @foreachသုံးတယ် outputထုတ်ရင် {{  }} --}}