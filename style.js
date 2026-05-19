console.log("style.jsは正しく読み込まれました！");

const contactForm = document.getElementById('contact-form');

if (contactForm) {
    console.log("フォームを発見しました。イベントを登録します：", contactForm);

    contactForm.addEventListener('submit', (event) => {
        console.log("送信イベントを検知しました。チェックを開始します。");

        
        const name = document.getElementById('name').value;
        const companyName = document.getElementById('companyName').value;
        const email = document.getElementById('email').value;
        const age = document.getElementById('age').value;
        const message = document.getElementById('message').value;

        if (name === '' || companyName === '' || email === '' || age === '' || message === '') {
            
            event.preventDefault(); 
            console.log("未入力項目があるため、送信をブロックしました。");
            alert("必須項目が未入力です。入力内容をご確認ください。");
        } else {
            console.log("全項目入力済み。送信を許可します。");
        }
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