@extends("layout")

@section("title", "Home")

@section("content")
    @include("components.introduction")
    @include("components.special-price")
    @include("components.save-purchase")
@endsection