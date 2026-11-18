<section class="hidden" data-step data-view="2">
    <h1 class="mt-6 w-full text-center text-2xl font-bold">ご家族のメンバーを登録しましょう</h1>
    <p class="mt-4 w-full text-center text-gray-500">献立の提案や買い物リストの計画に使います。<br>まずは、一人ずつ登録してください。</p>
    <ul>
        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/adult.svg') }}" alt="adultIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>父</h3>
                    <p class="text-gray-300 font-medium">大人</p>
                </div>
                <div class="ml-auto px-4 py-2">
                    <flux:button variant="outline" class="!bg-gray-100" href="{{ route('onboarding.member-edit') }}">編集</flux:button>
                </div>
            </div>
        </li>

        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/adult.svg') }}" alt="adultIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>母</h3>
                    <p class="text-gray-300 font-medium">大人</p>
                </div>
                <div class="ml-auto px-4 py-2">
                    <flux:button variant="outline" class="!bg-gray-100" href="{{ route('onboarding.member-edit') }}">編集</flux:button>
                </div>
            </div>
        </li>

        <li>
            <div class="flex items-center gap-3 border rounded-sm py-2 mt-2">
                <img src="{{ asset('images/child.svg') }}" alt="childIcon" class="w-8 h-8 ml-4">
                <div>
                    <h3>長男</h3>
                    <p class="text-gray-300 font-medium">子ども</p>
                </div>
                <div class="ml-auto px-4 py-2">
                    <flux:button variant="outline" class="!bg-gray-100" href="{{ route('onboarding.member-edit') }}">編集</flux:button>
                </div>
            </div>
        </li>
    </ul>
    <flux:button variant="primary" color="green" class="w-full mb-4 mt-4" type="button" href="{{ route('onboarding.member-create') }}">+ 家族メンバー追加</flux:button>
    <x-step-buttons />
</section>
