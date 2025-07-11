@extends('layouts.base')

@section('content')
<div class="wrapper">
    <div class="side-bar container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <nav class="header__nav nav" id="js-nav">
                        <ul class="nav__items nav-items">
                            <li class="nav-items__item"><a href="">HOME</a></li>
                            <li class="nav-items__item"><a href="">会員登録</a></li>
                        </ul>
                    </nav>
                    <button class="header__hamburger hamburger" id="js-hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- <main>
                        <div class="main">
                            メインコンテンツエリア
                        </div>
                    </main>
                    <footer class="footer">
                        <div>
                            フッターエリア
                        </div>
                    </footer>
                    <div class="card-header">{{ __('HOME') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('HOME') }}
                        </div>
                        @endif

                        {{ __('会員登録') }}
                    </div> -->
                    <!-- <div class="l-header">
                        <a href="">TOP</a>
                    </div>
                    <div class="l-header">
                        <a href="">HOME</a>
                    </div>
                    <div class="l-header">
                        <a href="">会員登録</a>
                    </div>
                    <div class="l-header">
                        <a href="">会員一覧</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="main-container container">
        <TOP<dr>
        {{ __('HOME') }}
        会員一覧
                 {{ __('会員登録') }}
                    </div>
                    <div class="l-header">
                        <a href="">TOP</a>
                    </div>
                    <div class="l-header">
                        <a href="">HOME</a>
                    </div>
                    <div class="l-header">
                        <a href="">会員登録</a>
                    </div>
                    <div class="l-header">
                        <a href="">会員一覧</a>
    </div> -->
</div>

,<script>
    const ham = $('#js-hamburger');
    const nav = $('#js-nav');
    ham.on('click', function() {
        ham.toggleClass('active');
        nav.toggleClass('active');
    });
</script>
@endsection