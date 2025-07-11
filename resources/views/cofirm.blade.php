<form method="POST" action="{{ route('send') }}" class="confirm__ar">
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <dt class="confirm__tag">会社名</dt>
      <dd>{{ $inputs['company'] }}</dd>
      <input type="hidden" name="company" value="{{ $inputs['company'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">氏名</dt>
      <dd>{{ $inputs['name'] }}</dd>
      <input type="hidden" name="name" value="{{ $inputs['name'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">電話番号</dt>
      <dd>{{ $inputs['tel'] }}</dd>
      <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">メールアドレス</dt>
      <dd>{{ $inputs['email'] }}</dd>
      <input type="hidden" name="email" value="{{ $inputs['email'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">生年月日</dt>
      <dd>{{ $inputs['birth_date'] }}</dd>
      <input type="hidden" name="birth_date" value="{{ $inputs['birth_date'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">性別</dt>
      <dd>{{ $inputs['gender'] }}</dd>
      <input type="hidden" name="gender" value="{{ $inputs['gender'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">職業</dt>
      <dd>{{ $inputs['gender'] }}</dd>
      <input type="hidden" name="occupation" value="{{ $inputs['occupation'] }}">
    </dl>
    <dl>
      <dt class="confirm__tag">お問い合わせ内容</dt>
      <dd>
        {!! nl2br(e($inputs['content'])) !!}
        <input type="hidden" name="content" value="{{ $inputs['content'] }}">
      </dd>
    </dl>
    <div class="confirm_bk">
      <a href="{{ route('index') }}" class="back_btn"><span class="f-bold">戻る</span></a>
      <input onclick="submit();" type="button" value="この内容で送信する" class="confirm_btn">
    </div>
  </form>