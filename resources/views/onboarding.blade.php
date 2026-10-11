<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/onboarding.js'])
    <title>onboarding</title>
</head>

<body>
    <form action="" method="post">
        @csrf
        <fieldset class="family-structure">
            <legend>家族構成を教えてください</legend>

            <div class="adult-row" data-counter>
                <span>大人</span>
                <button type="button" class="counter-btn" data-action="minus">-</button>
                <span data-value>2</span>
                <button type="button" class="counter-btn" data-action="plus">+</button>
                <input type="hidden" name="adult" value="2" data-input>
            </div>
            <div class="child-row" data-counter>
                <span>子ども</span>
                <button type="button" class="counter-btn" data-action="minus">-</button>
                <span data-value>0</span>
                <button type="button" class="counter-btn" data-action="plus">+</button>
                <input type="hidden" name="child" value="0" data-input>
            </div>
            <div class="total-row">
                <p>合計：<output id="total"></output></p>
            </div>

        </fieldset>

        <fieldset class="allergy-select">
            <legend>アレルギーを選択してください<small> (複数選択可) </small></legend>
            <div class="allergies">
                <label for="egg">
                    <input type="checkbox" name="allergies[]" id="egg" value="egg">
                    <span>たまご</span>
                </label>
                <label for="milk">
                    <input type="checkbox" name="allergies[]" id="milk" value="milk">
                    <span>乳</span>
                </label>

                <label for="wheat">
                    <input type="checkbox" name="allergies[]" id="wheat" value="wheat">
                    <span>小麦</span>
                </label>

                <label for="buckwheat">
                    <input type="checkbox" name="allergies[]" id="buckwheat" value="buckwheat">
                    <span>そば</span>
                </label>

                <label for="peanut">
                    <input type="checkbox" name="allergies[]" id="peanut" value="peanut">
                    <span>落花生</span>
                </label>

                <label for="shrimp">
                    <input type="checkbox" name="allergies[]" id="shrimp" value="shrimp">
                    <span>えび</span>
                </label>

                <label for="crab">
                    <input type="checkbox" name="allergies[]" id="crab" value="crab">
                    <span>かに</span>
                </label>

                <label for="walnut">
                    <input type="checkbox" name="allergies[]" id="walnut" value="walnut">
                    <span>くるみ</span>
                </label>

                <label for="other">
                    <input type="checkbox" name="allergies[]" id="other" value="other">
                    <span>その他(入力)</span>
                    <input type="text" name="other_allergy" id="other_allergy" hidden disabled>
                </label>

            </div>

        </fieldset>

        <fieldset class="not-like-food">
            <legend>苦手な食べ物を記入してください<small> (任意) </small></legend>
        </fieldset>
        <button type="submit">次へ</button>
    </form>
</body>

</html>
