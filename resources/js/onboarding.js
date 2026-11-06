// 画面切り替えの要素
const steps = document.querySelectorAll("[data-step]");
const nextBtns = document.querySelectorAll("[data-next-btn]");
const prevBtns = document.querySelectorAll("[data-prev-btn]");
// stepperの要素
const indicators = document.querySelectorAll("[data-step-indicator]");
const connectors = document.querySelectorAll("[data-step-connector]");

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

// stepperの色付け
function addColor() {
    // 4つのうち１つを色付け
    indicators.forEach((indicator) => {
        const currentIndicador = Number(indicator.dataset.stepIndicator);
        // 現在のviewに合わせて色を付ける
        if (currentIndicador < currentStep) {
            indicator.classList.add("bg-green-500", "text-white");
        } else {
            indicator.classList.remove("bg-green-500", "text-white");
        }
    });
    // 3つのうち一つを色付け
    connectors.forEach((connector) => {
        const currentConnector = Number(connector.dataset.stepConnector);
        // 現在のviewに合わせて色を付ける
        if ( currentConnector < currentStep) {
            connector.classList.add("bg-green-500", "text-white");
        } else{
            connector.classList.remove("bg-green-500", "text-white");
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
        addColor();
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
        addColor();
    });
});
showView();
addColor();
