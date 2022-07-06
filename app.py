import datetime
from flask import Flask, jsonify, render_template, url_for, request, redirect, flash, request
from flask_login import LoginManager, login_user, login_required
from UserLogin import UserLogin
from flask_sqlalchemy import SQLAlchemy
import os
import sys
import settings


app = Flask(__name__)
app.secret_key = 'secret'
login_manager = LoginManager(app)

# app.config['SECRET_KEY'] = 'secret'
# app.config['SQLALCHEMY_DATABASE_URI'] = f'mysql+pymysql://{settings.USER}:{settings.PASSWORD}@{settings.HOST}:{settings.PORT}/{settings.DB_NAME}?charset=utf8mb4'
# app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

# db = SQLAlchemy(app)
# app_root = os.path.dirname(os.path.abspath(__file__))

# DB Model USER for auth
# class User(db.Model):
#     id = db.Column(db.Integer, primary_key=True)
#     login = db.Column(db.String(300), nullable=False)
#     password = db.Column(db.String(300), nullable=False)


# @login_manager.user_loader
# def load_user(user_id):
#     return UserLogin().fromDataBase(user_id, User)


# @app.route('/auth', methods=['POST', 'GET'])
# def auth():
#     """Auth user"""
#     if request.method == "POST":
#         user_data = User.query.filter_by(login=request.form['login']).first()
#         if user_data.password == request.form['password'] and user_data.login == request.form['login']:
#             user_login = UserLogin().create(user_data)
#             login_user(user_login)

#             return redirect(url_for('main'))
#         # flash('Ошибка')
#     return render_template('auth.html')


@app.route('/', methods=['POST', 'GET'])
def index():
    """Main"""

    # data = DB().get_all_goods()
    # ids = [i[0] for i in data]
    # print(data)
    # if request.method == "POST":

    #     id_ = request.form['id']
    #     title = request.form['title']
    #     manufacturer = request.form['manufacturer']
    #     # save img
    #     if request.files['img'].content_type != 'application/octet-stream':
    #         img = request.files['img'].filename
    #         destination = '/'.join([settings.IMG_PATH, img])
    #         request.files['img'].save(destination)
    #     else:
    #         img = None

    #     information = request.form['information']
    #     price = request.form['price']
    #     leave_condition = request.form['leave_condition']

    #     if id_ not in ids:
    #         DB().add_goods({'id': id_, 'title': title, 'manufacturer': manufacturer, 'img': img,
    #                         'information': information, 'price': price, 'leave_condition': leave_condition})
    #     else:
    #         DB().update_goods(
    #             {'id': id_, 'title': title, 'manufacturer': manufacturer, 'img': img,
    #                         'information': information, 'price': price, 'leave_condition': leave_condition})

    #     return redirect(url_for('products'))

    # Возвращает html Товары страницы
    return render_template('index.html')


if __name__ == "__main__":
    # Запуск
    app.config['SESSION_TYPE'] = 'filesystem'
    app.run(debug=True)