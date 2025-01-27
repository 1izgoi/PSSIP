var radioButtons = document.getElementsByName("contact"); 
var selectedRadio = null;
    for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            selectedRadio = radioButtons[i].value;
            break;
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const emailInput = document.getElementById('email');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        const form = document.getElementById('actionForm');

        form.addEventListener('submit', function (event) {
            if (!emailPattern.test(emailInput.value)) {
                alert('Пожалуйста, введите правильный адрес электронной почты.');
                event.preventDefault(); // Останавливает отправку формы
            }
        });
    });


    document.getElementById("btn_send").addEventListener("click", function (event) {
        event.preventDefault(); // Предотвращаем автоматическую отправку формы
    
        // Получаем значения полей
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var repeatPassword = document.getElementById("repeatPassword").value;
        var selectedOption = document.getElementById("MySelect").value;
        var wishes = document.getElementById("wishes").value;
        var btn_send = document.querySelector("btn_send");
    
        // Регулярное выражение для проверки почты
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    
        // Проверяем, что все поля, помеченные как required, заполнены
        if (!name || !email || !password || !repeatPassword || !selectedOption || !wishes) {
            alert("Пожалуйста, заполните все обязательные поля.");
            return; // Не продолжаем, если не все поля заполнены
        }
    
        // Проверяем, что почта соответствует регулярному выражению
        if (!emailPattern.test(email)) {
            alert("Пожалуйста, введите правильный адрес электронной почты.");
            return; // Не продолжаем, если почта некорректна
        }
    
        // Сохраняем данные в cookie
        var data = {
            name: name,
            email: email,
            password: password,
            repeatPassword: repeatPassword,
            selectedOption: selectedOption,
            wishes: wishes
        };
    
        var json = JSON.stringify(data);
        document.cookie = "formData=" + json;
    
        console.log("Данные сохранены в cookie:", json);
    });
    


// Функция для загрузки значений полей из cookie и вывода их на экран
function loadFromCookie() {
    const cookies = document.cookie.split('; ');

    for (const cookie of cookies) {
        const [name, value] = cookie.split('=');
        if (value) {
            // Выводим значения на экран
            console.log(`${name}: ${value}`);
        }
    }
}

// Функция для очистки cookie
function clearCookie() {
    const cookies = document.cookie.split('; ');

    for (const cookie of cookies) {
        const [name, _] = cookie.split('=');
        // Устанавливаем срок действия cookie в прошлое, что делает их недействительными
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
    }
}

document.getElementById("btn_send").addEventListener("click", function (event) {
    event.preventDefault(); // Предотвращаем автоматическую отправку формы

    saveToCookie(); // Сохраняем данные в cookie
});
document.getElementById("btn_clear").addEventListener("click", clearCookie);

// Вызываем функцию для загрузки и отображения значений из cookie
loadFromCookie();

// Получаем значения полей
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var password = document.getElementById("password").value;
var repeatPassword = document.getElementById("repeatPassword").value;
var selectedOption = document.getElementById("MySelect").value;
var wishes = document.getElementById("wishes").value;
var btn_send = document.querySelector("btn_send");

btn_send.addEventListener("click", function () {
    if (sentCheckBox.checked) {
        var email = emailInput.value;
        var password = passwordInput.value;
        var selectedOption = selectElement.options[selectElement.selectedIndex].text;

        var selectedRadio = null;
        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedRadio = radioButtons[i].value;
                break;
            }
        }

        var message = "Email: " + email + "\nПароль: " + "*".repeat(password.length) + "\n" + selectedOption + " " + selectedRadio;
        alert(message);
    }
    else {
        alert("Проверьте заполнено ли всё!");
        return false;
    }
    });

