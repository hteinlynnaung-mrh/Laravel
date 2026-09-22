@extends("layouts.app")

@section("content")
    <div class="container" style="max-width: 800px">
        @foreach($articles as $article)
            <div class="card mb-2">
                <div class="card-body">
                    <h4>{{ $article->title }}</h4>
                    <div class="text-muted">
                        {{ $article->created_at->diffforHumans() }}
                    </div>
                    <div>
                        {{ $article->body }}
                    </div>
                    <a href="{{ url("/articles/detail/$article->id") }}">
                        View Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{-- Controllerကပေးတဲ့ dataကို bladeနဲ့ယူတယ် --}}
{{-- bladeက php tapအဖွင့်အပိတ်တွေအစား @foreachသုံးတယ် outputထုတ်ရင် {{  }} --}}