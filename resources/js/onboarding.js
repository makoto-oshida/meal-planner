const counters = document.querySelectorAll("[data-counter]");
const familyTotal = document.getElementById("total");
const adult = document.querySelector('[name="adult"]');
const child = document.querySelector('[name="child"]');
// 合計
const updateTotal = () => {
    familyTotal.textContent = Number(adult.value) + Number(child.value);
};

// カウンター
counters.forEach((counter) => {
    const btnMinus = counter.querySelector('[data-action="minus"]');
    const btnPlus = counter.querySelector('[data-action="plus"]');
    const valueElement = counter.querySelector("[data-value]");
    const input = counter.querySelector("[data-input]");
    // 初期値
    let count = Number(input.value);
    // 画面用と送信用のカウント更新
    const updateCount = () => {
        valueElement.textContent = count;
        input.value = count;
        updateTotal();
    };
    // 増える
    btnPlus.addEventListener("click", () => {
        count++;
        updateCount();
    });
    // 減る
    btnMinus.addEventListener("click", () => {
        if (count > 0) {
            count--;
            updateCount();
        }
    });
});
// 初期値の合計
updateTotal();
