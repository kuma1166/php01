// 現在の日付をブラウザに表示
const currentDate = new Date();

const year  = currentDate.getFullYear();
const month = currentDate.getMonth() + 1;
const day   = currentDate.getDate();
const hour  = currentDate.getHours();
const min   = currentDate.getMinutes();
const sec   = currentDate.getSeconds();

//data.textに送信する日時データ
const time =`${year}年${month}月${day}日${hour}時${min}分${sec}秒`;

console.log(time);
const tokei = document.getElementById("time");
tokei.value = time;

//ブラウザ表示の日時データ
const today = `${year}年${month}月${day}日${hour}時${min}分${sec}秒`;

console.log(today);
const dateElement = document.getElementById("today");
dateElement.textContent = today;
