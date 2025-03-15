'use strict';
//オプション・メニューのチェックボックスの制限機能
const checkboxes = document.querySelectorAll('.priority-checkbox[type="checkbox"]');
const maxChecked = 1;
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('change', () => {
    const checkedCount = Array.from(checkboxes).filter(cb => cb.checked).length;
    if (checkedCount > maxChecked) {
      checkbox.checked = false;
      alert(`最大${maxChecked}つまで選択できます`);
    }
  });
});