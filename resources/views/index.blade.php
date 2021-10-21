<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
<h1>お問い合わせ</h1>
  <p>{{$txt}}</p>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action="/" method="POST">
    <table>
      @csrf
      @error('name')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>お名前 ※</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      @error('role')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      <P>例）　山田　太朗
      @enderror
      <tr>
        <th>性別　※</th>
        <td>
          <input type="text" name="role">
        </td>
      </tr>
      @error('email')
      <tr>
        <th>Error</th>
        <td>{{$message}}</>
      </tr>
      @enderror
      <tr>
        <th>メールアドレス　※</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
      @error('age')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>郵便番号　※</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
      @error('registered_at')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>住所　※</th>
        <td>
          <input type="text" name="registered_at">
        </td>
      </tr>
      @error('building')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>建物名</th>
      　<td>
          <input type="text" name="building">
        </td>
      </tr>
      @error('comment')
      <tr>
        <th>Error</th>
        <td>{{$message}}</td>
      </tr>
      @enderror
      <tr>
        <th>ご意見　※</th>
        <td>
          <input type="text" name="comment">
        </td>
      </tr>
    </table>
    <input type="submit" value="確認">
  </form>
</body>
</html>