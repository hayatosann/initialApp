@extends('layouts.base')
@section('title','共通レイアウトの基本')
@section('main')<!a.簡単な値を渡す>
@component('components.alert',['type'=>'success'])
@slot('alert_title')
はじめてのコンポーネント
@endslot
<!-- <!c.その他のコンテンツを渡す> -->
コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
@endcomponent
@endsection



