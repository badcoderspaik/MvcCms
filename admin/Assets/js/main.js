// Основной js-файл админ-панели

  var form_notification = new APP.Widget.Notification.CheckForm({//Объект уведомления проверки формы
      color: "yellow",//цвет текста уведомления
      fontSize: "larger",//размер шрифта уведомления
      boxShadow: "-5px 5px 10px gray",//тень
      duration: 1000,//время проказа уведомления
      borderRadius: "5px",//радиус скругления углов уведомления
      left: "10px",
      top: "10px"
    }),

    add_content_form = $("#add_content_form"),//jquery объект формы (desktop вариант) добавления контента из файла add_content_form.html
    btn_send = $('.btn-primary'),//кнопка отправки формы
    //Объект загрузчика контента на сервер
    form_data_loader = new APP.FormDataLoader({
      url: "../admin/modules/add_content_form.php",//url, куда следует отправить данные формы
      form_element: $("#add_content_form"),// jquery объект формы
      success: function (content) {//функция, которая выполнится в результате удачного ответа сервера
        form_notification.content(content);
        form_notification.hide();
      },
      beforeSend: function () {//функция, которая выполнится перед отправкой данных на сервер
        form_notification.show("Обработка данных...");
      }
    });

  form_notification.append();//добавление уведомления в DOM

  btn_send.on('click', function () {
    console.log('hello');
    form_data_loader.query();
  });

