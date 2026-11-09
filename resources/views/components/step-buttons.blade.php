{{-- オンボーディングステップ画面切り替え操作ボタン --}}
<div {{ $attributes->class(['flex justify-between']) }}>
    <flux:button variant="outline" class="!bg-gray-100" data-prev-btn>戻る</flux:button>
    <flux:button variant="primary" color="green" data-next-btn>次へ</flux:button>
</div>
