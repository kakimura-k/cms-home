@extends('layouts.base')
@section('content')

<form method="POST" action="{{ route('contact.confirm') }}">
    @csrf

    <div class="l-inner">

        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            会社名　　　　　　
        </label>
        <input
            name="company"
            value="{{ old('company') }}"
            type="text"
            placeholder="例）株式会社〇〇"
            class="syouhaikei">
        @if ($errors->has('company'))
        <p class="error-message">{{ $errors->first('company') }}</p>
        @endif
        <br><br>
        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            氏名　　　　　　　
        </label>
        <input
            name="name"
            value="{{ old('name') }}"
            type="text"
            placeholder="例）〇 〇　〇 〇"
            class="syouhaikei">
        @if ($errors->has('name'))
        <p class="error-message">{{ $errors->first('name') }}</p>
        @endif
        <br><br>
        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            電話番号　　　　　
        </label>
        <input
            name="tel"
            value="{{ old('tel') }}"
            type="text"
            placeholder="例）xxx-xxxx-xxxx"
            class="syouhaikei">
        @if ($errors->has('tel'))
        <p class="error-message">{{ $errors->first('tel') }}</p>
        @endif
        <br><br>
        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            メールアドレス　　
        </label>
        <input
            name="email"
            value="{{ old('email') }}"
            type="text"
            placeholder="例）sample@gmail.com"
            class="syouhaikei">
        @if ($errors->has('email'))
        <p class="error-message">{{ $errors->first('email') }}</p>
        @endif
        <br><br>
        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            生年月日　　　　　
        </label>
        <input type="date" id="birth_date" name="birth_date" class="syouhaikei">
        
        @if ($errors->has('birth_date'))
        <p class="error-message">{{ $errors->first('birth_date') }}</p>
        @endif
        <br>
        <label>
            <hr width="400">
            <br>
            <span class="required">必須</span>
            性別　　　　　　　
        </label>
        <input id="male" type="radio" name="gender" value="male"><label for="male">男性</label>
        <input id="female" type="radio" name="gender" value="female"><label for="female">女性</label>
        @if ($errors->has('gender'))
        <p class="error-message">{{ $errors->first('gender') }}</p>
        @endif
        <br><br>
        <label>
            <hr>
            <br>
            <span class="required">必須</span>
            職業　　　　　　　
        </label>
        <select name="occupation">
            <option value="syokugyou">職業を選択してください</option>
            <option value="se">SE</option>
            <option value="pg">PG</option>
        </select>
        @if ($errors->has('occupation'))
        <p class="error-message">{{ $errors->first('occupation') }}</p>
        @endif
        <br><br>
        <label>
            <hr>
            <br>
            <div class="test-flex">
                <div class="test-text-area-require">
                    <span class="required">必須</span>
                    お問い合わせ内容
                </div>
                <div class="test-text-area">
                    <textarea name="body" placeholder="例）こちらに内容を記載(右下をドラッグする事で記入領域が広がります)" class="syouhaikei">{{ old('body') }}</textarea>
                </div>
            </div>
        </label>
        @if ($errors->has('body'))
        <p class="error-message">{{ $errors->first('body') }}</p>
        @endif
        <br><br><br><br>
        <button type="submit" class="haikei">確認する</button>

    </div>

</form>
@endsection