// console.log('Hello world');
// $.get('http://localhost/AppCalculator:80/web/site/test',
//     function (data) {
//         console.log('data');
//         $('#result-box').html(data);
//     }
// ).fail((data) => console.log(data));
// $(document).ready(function() {
//     var $form = $('#form_id');
//     $form.on('submit', function(e) {
//        return $form.yiiActiveForm('submitForm');
//     }); 
 
//     $('#submit_button').on('click', function() { 
//        $form.submit();
//     });
//  });
// $('form').submit(function() {
//     // для читаемости кода
//     var $form = $(this);

//     // чистим ошибки
//     $form.find('.error').remove();

//     // проверяем поле с именем пользователя
//     if ($form.find('select[name=FormDataProps[tonnage]]').val() === '') {
//         // добавляем текст ошибки
//         $form.find('select[name=FormDataProps[months]]')
//           .before('<div class="error">Введите имя</div>');
//         // прерываем дальнейшую обработку
//         return false;
//     }

//     // всё хорошо – отправляем запрос на сервер
//     $.post(
//         $form.attr('action'), // ссылка куда отправляем данные
//         $form.serialize()     // данные формы
//     );

//     // отключаем действие по умолчанию
//     return false;
// });

// $("form").submit(function(){
//     // для читаемости кода
//     var $form = $(this);
//     // вы же понимаете, о чём я тут толкую?
//     // это ведь одна из ипостасей AJAX-запроса 
//     $.post(
//         $form.attr("action"), // ссылка куда отправляем данные
//         $form.serialize()     // данные формы
//     );
//     // отключаем действие по умолчанию
//     return false;
// });

// jQuery(function ($) {
//     jQuery('#feedback-form').yiiActiveForm(
//         [
//             {
//                 "id":"feedbackform-name",
//                 "name":"name",
//                 "container":".field-feedbackform-name",
//                 "input":"#feedbackform-name",
//                 "validate":function (attribute, value, messages, deferred, $form) {
//                     yii.validation.required(
//                         value,
//                         messages,
//                         {"message":"Необходимо заполнить «Ваше имя»."}
//                     );
//                 }
//             },
//             {
//                 "id":"feedbackform-email",
//                 "name":"email",
//                 "container":".field-feedbackform-email",
//                 "input":"#feedbackform-email",
//                 "validate":function (attribute, value, messages, deferred, $form) {
//                     yii.validation.required(
//                         value,
//                         messages,
//                         {"message":"Необходимо заполнить «Ваш email»."}
//                     );
//                 }
//             }
//         ],
//         []
//     );
// });
jQuery(document).ready(function($) {
    $(".comment-form").submit(function(event) {
         event.preventDefault(); // stopping submitting
         var data = $(this).serializeArray();
         var url = $(this).attr('action');
         $.ajax({
             url: "http://localhost/AppCalculator/web/",
             type: 'post',
           
             data: data
         })
         .done(function(response) {
             if (response.data.success == true) {
                 alert("Wow you commented");
             }
         })
         .fail(function() {
             console.log("error");
         });
     
     });
 });