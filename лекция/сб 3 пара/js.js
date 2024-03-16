const bodyElement = document.body;
const formElement = bodyElement.querySelector('.loginUp');
const openForm = bodyElement.querySelector('.openForm');
const sentReg = bodyElement.querySelector('.sentReg');

openForm.addEventListener("click",function(e){
    console.log('1');
    formElement.classList.toggle('active');
});

mail.onblur = function() { 
    if (!mail.value.includes('@')) {
      mail.classList.add('invalid');
      error.innerHTML = 'Пожалуйста, введите правильный email.'
    }
  };
  
  mail.onfocus = function() {
    if (this.classList.contains('invalid')) {
      this.classList.remove('invalid');
      error.innerHTML = "";
    }
  };

    // Получаем ссылки на элементы
    var sentCheckBox = document.getElementById("sentCheckBox");
    var sentButton = document.querySelector(".sentReg");
    var emailInput = document.getElementById("mail");
    var passwordInput = document.getElementById("password");

    // Добавляем обработчик события при клике на кнопку
    sentButton.addEventListener("click", function () {
        // Проверяем, отмечен ли чекбокс
        if (sentCheckBox.checked) {
            // Получаем значения из инпутов
            var email = emailInput.value;
            var password = passwordInput.value;

            // Выводим значения в диалоговое окно
            alert("Email: " + email + "\nПароль: " + "*".repeat(password.length));
        }
        else {
            alert("Вы должны согласиться с условиями перед отправкой.");
            return false; // Отменяем отправку формы
        }
        });

   