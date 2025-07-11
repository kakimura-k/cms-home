@extends('layouts.base')
@section('content')
<form method="POST" action="{{ route('contact.send') }}">
  @csrf
  <br><br>&emsp;
  <label>会社名</label>
  {{ $inputs['company'] }}
  <input name="company" value="{{ $inputs['company'] }}" type="hidden">
  <br><br>&emsp;
  <label>氏名</label>
  {{ $inputs['name'] }}
  <input name="name" value="{{ $inputs['name'] }}" type="hidden">
  <br><br>&emsp;
  <label>電話番号</label>
  {{ $inputs['tel'] }}
  <input name="tel" value="{{ $inputs['tel'] }}" type="hidden">
  <br><br>&emsp;
  <label>メールアドレス</label>
  {{ $inputs['email'] }}
  <input name="email" value="{{ $inputs['email'] }}" type="hidden">
  <br><br>&emsp;
  <label>生年月日</label>
  {{ $inputs['birth_date'] }}
  <input name="birth_date" value="{{ $inputs['birth_date'] }}" type="hidden">
  <br><br>&emsp;
  <label>性別</label>
  {{ $inputs['gender'] }}
  <input name="gender" value="{{ $inputs['gender'] }}" type="hidden">
  <br><br>&emsp;
  <label>職業</label>
  {{ $inputs['occupation'] }}
  <input name="occupation" value="{{ $inputs['occupation'] }}" type="hidden">
  <br><br>&emsp;
  <label>お問い合わせ内容</label>
  {!! nl2br(e($inputs['body'])) !!}
  <input name="body" value="{{ $inputs['body'] }}" type="hidden">
  <br><br><br>&emsp;
  <button type="submit" name="action" value="back">入力内容修正</button>
  &emsp;
  <button type="submit" name="action" value="submit">送信する</button>
</form>
@endsection