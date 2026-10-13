<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/onboarding.js'])
    <title>onboarding</title>
</head>

<body class="bg-white">
    <main class="w-full max-w-xl mx-auto px-4 py-4">
        <form action="" method="post">
            @csrf
            <fieldset class="family-structure">
                <legend class="mb-2">家族構成を教えてください</legend>
                <div class ="border border-gray-300 rounded-lg p-4">
                    <div class="adult-row " data-counter>
                        <div class="flex gap-2">
                            <img src="{{ asset('images/adult.svg') }}">
                            <span>大人</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="button" class="counter-btn" data-action="minus">-</button>
                            <span data-value>2</span>
                            <button type="button" class="counter-btn" data-action="plus">+</button>
                            <input type="hidden" name="adult" value="2" data-input>
                        </div>
                    </div>

                    <div class="child-row" data-counter>
                        <div class="flex gap-2">
                            <img src = "{{ asset('images/child.svg') }}">
                            <span>子ども</span>
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="button" class="counter-btn" data-action="minus">-</button>
                            <span data-value>0</span>
                            <button type="button" class="counter-btn" data-action="plus">+</button>
                            <input type="hidden" name="child" value="0" data-input>
                        </div>
                    </div>
                    <div class="total-row text-right">
                        <p>合計：<output id="total"></output></p>
                    </div>
                </div>
            </fieldset>

            <fieldset class="allergy-select mt-6">
                <legend class ="mb-2">アレルギーを選択してください<small> (複数選択可) </small></legend>
                <div class="allergies flex flex-wrap gap-3 rounded-lg border border-gray-300 p-4">
                    <label for="egg" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="egg" value="egg" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>たまご</span>
                    </label>
                    <label for="milk" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="milk" value="milk" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>乳製品</span>
                    </label>

                    <label for="wheat" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="wheat" value="wheat" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>小麦</span>
                    </label>

                    <label for="buckwheat" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="buckwheat" value="buckwheat" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>そば</span>
                    </label>

                    <label for="peanut" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="peanut" value="peanut" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>落花生</span>
                    </label>

                    <label for="shrimp" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="shrimp" value="shrimp" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>えび</span>
                    </label>

                    <label for="crab" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="crab" value="crab" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>かに</span>
                    </label>

                    <label for="walnut" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="walnut" value="walnut" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>くるみ</span>
                    </label>

                    <label for="other" class="allergies-item">
                        <input type="checkbox" name="allergies[]" id="other" value="other" class="sr-only">
                        <span class="check-icon">✓</span>
                        <span>その他(入力)</span>
                    </label>
                    <input type="text" name="other_allergy" id="other_allergy" hidden disabled
                        class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm">
                </div>

            </fieldset>

            <fieldset class="not-like-food mt-6">
                <legend class="mb-2">苦手な食べ物を記入してください<small> (任意) </small></legend>
                <textarea name="not_like" id="notLike" rows="3" placeholder="例:ピーマン、ナス"
                    class="w-full rounded-lg border border-gray-300 p-4"></textarea>
            </fieldset>
            <button type="submit" class="form-btn">次へ</button>
        </form>
    </main>
</body>


</html>
