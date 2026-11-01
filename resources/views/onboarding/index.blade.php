<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/onboarding.js'])
  <title>Onboarding</title>
</head>
<body>
  @include('onboarding.welcome')
  @include('onboarding.members')
  @include('onboarding.dietary')
  @include('onboarding.confirm')
</body>
</html>