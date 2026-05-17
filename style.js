const nullCheck = document.getElementById('submit');
const contactForm = document.getElementById('contact-form');

console.log("送信ボタンが押されました！");

if (nullCheck && contactForm) {
    contactForm.addEventListener('submit', (event) => {
    
    // try {
        const name = document.getElementById('name').value;
        const companyName = document.getElementById('companyName').value;
        const email = document.getElementById('email').value;
        const age = document.getElementById('age').value;
        const message = document.getElementById('message').value;

        console.log("全項目の取得に成功: ", name, companyName, email, age, message);

        if (name === '' || companyName === '' || email === '' || age === '' || message === '') {
            event.preventDefault();
            alert("未入力の項目があります。すべて入力してください。");
        } 
        // } catch (e) {
           // console.error("エラー発生:", e.message);
        // }
    });
}

let colorIndex = 0

function changeColor() {
    const colors = ['blue', 'red', 'yellow', 'gray'];
    const footer = document.querySelector('footer');

    if (footer) {
        footer.style.backgroundColor = colors[colorIndex];
        colorIndex++;

        if (colorIndex >= colors.length) {
            colorIndex = 0;
        }
    }
}