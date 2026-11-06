<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/onboarding.js'])
    <title>Onboarding</title>
</head>

<body>
    <main class="mx-auto min-h-screen w-full max-w-md px-4">
        {{-- stepper --}}
        <div class="flex items-center justify-between mt-4" data-stepper>
            @for ($step = 1; $step <= 4; $step++)
            {{-- 1～4までのstepの要素 --}}
                <div class="flex items-center justify-center h-8 w-8 rounded-full border"
                    data-step-indicator="{{ $step }}">
                    {{ $step }}
                </div>

                @if ($step < 4)
                {{-- １～４までの間のバーの要素 --}}
                    <div class="h-1 w-16 bg-gray-300" data-step-connector="{{ $step }}"></div>
                @endif
            @endfor
            {{-- ステップタイトル --}}
        </div>
        <div class="flex justify-between mt-2 text-gray-500">
            <div>ようこそ</div>
            <div>家族メンバー</div>
            <div>食事の設定</div>
            <div>確認</div>
        </div>

        @include('onboarding.welcome')
        @include('onboarding.members')
        @include('onboarding.dietary')
        @include('onboarding.confirm')
    </main>
</body>

</html>
