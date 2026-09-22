@extends("layouts.app")
{{-- extendsကိုသုံးပြီး layouts.appကိုခေါ်သုံးတယ် layouts appထဲမှာ containerရှိတယ် --}}

@section("content") {{-- sectionကိုသုံးပြီး layout appထဲမှာထည့်ပြရမယ့် contentကိုပေးတယ်--}}
    <div class="container" style="max-width: 800px">
        <div class="card mb-2 border-primary"> {{-- show content with card --}}
            <div class="card-body">
                <h4>{{ $article->title }}</h4> {{-- output  article title--}}
                <div class="text-muted"> {{-- to be light text color --}}
                    {{ $article->created_at->diffforHumans() }}{{-- show with hours --}}
                </div>
                <p>
                    {{ $article->body }} {{-- output article body --}}
                </p>
                <a href="{{ url("/articles/delete/$article->id") }}" {{-- Routeသုံး --}}
                    class="btn btn-sm btn-outline-danger">
                    Delete
                </a>
            </div>
        </div>
    </div>
@endsection

{{-- Controllerကပေးတဲ့ dataကို bladeနဲ့ယူတယ် --}}
{{-- bladeက php tapအဖွင့်အပိတ်တွေအစား @foreachသုံးတယ် outputထုတ်ရင် {{  }} --}}