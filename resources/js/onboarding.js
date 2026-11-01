const steps = document.querySelectorAll("[data-step]");
const nextBtns = document.querySelectorAll("[data-next-btn]");
const prevBtns = document.querySelectorAll("[data-prev-btn]");

// 現在のview番号
let currentStep = 1;
// 画面切り替え
function showView() {
    steps.forEach((step) => {
        const currentView = Number(step.dataset.view);
        // 4つのstepのうち取り出した1つのstepを表示する
        // それ以外は非表示
        if (currentView === currentStep) {
            step.classList.remove("hidden");
        } else {
            step.classList.add("hidden");
        }
    });
}

// 次へボタンclick
nextBtns.forEach((nextBtn) => {
    nextBtn.addEventListener("click", () => {
        // view番号にプラス１
        // 条件は４以下
        if (currentStep < 4) {
            currentStep++;
        }
        showView();
    });
});

// 戻るボタンclick
prevBtns.forEach((prevBtn) => {
    prevBtn.addEventListener("click", () => {
        // view番号にマイナス１
        // 条件は１以上
        if (currentStep > 1) {
            currentStep--;
        }
        showView();
    });
});
showView();
