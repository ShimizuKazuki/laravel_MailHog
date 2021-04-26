<html>
<head>
<meta charset='urf-8'>
</head>
<body>
Hello!!
@if (Auth::check())
    {{ \Auth::user()->name }}さん
    <a  href="/auth/logout">ログアウト</a>
@else
    ゲストさん<br />
    <a href="/auth/login">ログイン</a>
    <a href="/auth/register">会員登録</a>
@endif
</body>
</html>