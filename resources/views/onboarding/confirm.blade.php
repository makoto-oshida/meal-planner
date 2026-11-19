<div class="hidden" data-step data-view="3">
    <h1 class="mt-6 w-full text-center text-2xl font-bold">登録の内容を確認しましょう。</h1>
    <p class=" w-full text-center text-gray-500">以下の内容で登録します。<br>よろしいですか？</p>
    <ul>
        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/adult.svg') }}" alt="adultIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>父</h3>
                    <p class="text-gray-400 font-medium">大人：<span class="text-orange-400">多め量</span></p>
                    <p class="text-gray-400 font-medium">アレルギー：<span class="text-orange-400">なし</span></p>
                    <p class="text-gray-400 font-medium">嫌いな食べ物：<span class="text-orange-400">なし</span></p>
                </div>
            </div>
        </li>

        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/adult.svg') }}" alt="adultIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>母</h3>
                    <p class="text-gray-400 font-medium">大人：<span class="text-orange-400">普通</span></p>
                    <p class="text-gray-400 font-medium">アレルギー：<span class="text-orange-400">なし</span></p>
                    <p class="text-gray-400 font-medium">嫌いな食べ物：<span class="text-orange-400">ナス</span></p>
                </div>
            </div>
        </li>

        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/child.svg') }}" alt="childIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>長男</h3>
                    <p class="text-gray-400 font-medium">子ども：<span class="text-orange-400">少なめ</span></p>
                    <p class="text-gray-400 font-medium">アレルギー：<span class="text-orange-400">リンゴ</span></p>
                    <p class="text-gray-400 font-medium">嫌いな食べ物：<span class="text-orange-400">ピーマン</span></p>
                </div>
            </div>
        </li>
    </ul>
    <x-step-buttons class="mt-4" />
</div>
