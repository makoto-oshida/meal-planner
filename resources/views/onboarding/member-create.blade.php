<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'], ['resources/js/onboarding.js'])
    <title>Member-Create</title>
</head>

<body>
    <main class="mx-auto min-h-screen w-full max-w-md px-4">
        <h1 class="onboarding-title">家族メンバーの登録</h1>
        <p class="onboarding-description">家族のメンバーの詳細を登録しましょう</p>

        <form action="" method="POST" class="mt-6 space-y-6">
            @csrf

            {{-- 名前入力 --}}
            <div>
                <label for="name" class="mb-2 block font-medium">名前</label>
                <input type="text" name="name" placeholder="例：父、母、長男"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
            </div>

            {{-- 大人子供の区分 --}}
            <fieldset>
                <legend class="mb-2 font-medium">区分</legend>
                <div class="grid grid-cols-2 gap-2">
                    <label class="radio-option"><input type="radio" name="age_group" value="adult">大人</label>
                    <label class="radio-option"><input type="radio" name="age_group" value="child">子供</label>
                </div>
            </fieldset>

            {{-- 食べる量 --}}
            <fieldset>
                <legend class="mb-2 font-medium">食べる量</legend>
                <div class="grid grid-cols-3 gap-2">
                    <label class="radio-option"><input type="radio" name="portion_size">多め</label>
                    <label class="radio-option"><input type="radio" name="portion_size">普通</label>
                    <label class="radio-option"><input type="radio" name="portion_size">少なめ</label>
                </div>
            </fieldset>

            {{-- アレルギーをforeachで配列の中から取り出して表示する --}}
            @php
                $allergeies = [
                    'egg' => '卵',
                    'milk' => '乳',
                    'wheat' => '小麦',
                    'buckwheat' => 'そば',
                    'peanut' => '落花生',
                    'shrimp' => 'えび',
                    'crab' => 'かに',
                    'walnut' => 'くるみ',
                    'cashew' => 'カシューナッツ',
                ];
            @endphp
            {{-- アレルギー --}}
            <fieldset>
                <legend class="mb-2 font-medium">アレルギー</legend>
                <div class="flex flex-wrap gap-2">
                    @foreach ($allergeies as $allergeyKey => $allergeyValue)
                        <label class="allergy-option cursor-pointer rounded-lg border px-4 py-2">
                            <input type="checkbox" name="allergies[]" value="{{ $allergeyKey }}"
                                class="sr-only">{{ $allergeyValue }}
                        </label>
                    @endforeach
                </div>
            </fieldset>

            {{-- その他のアレルギー --}}
            <div>
                <label for="" class="mb-2 block font-medium">その他のアレルギー</label>
                <input type="text" name="allergy_other" placeholder="例：りんご、バナナ"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
            </div>

            {{-- 苦手な食べ物 --}}
            <div>
                <label for="" class="mb-2 block font-medium">苦手な食べ物</label>
                <input type="text" name="not_like_foods" placeholder="例：ピーマン、なす"
                    class="w-full rounded-lg border border-gray-300 px-4 py-3">
            </div>

            {{-- 送信ボタン --}}
            <flux:button type="submit" variant="primary" color="green" class="w-full mt-4">
                登録する
            </flux:button>
            <flux:button type="button" variant="outline" color="gray" class="w-full mb-4 "
                href="{{ route('onboarding.index',['step' => 2]) }}">
                戻る
            </flux:button>
        </form>
    </main>
</body>

</html>
