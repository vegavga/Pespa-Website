import numpy as np
from flask import Flask, render_template, request
# from flask_mysqldb import MySQL
import pickle

# WEB 
web = Flask(__name__)
# # connect mysql
# web.config['MYSQL_HOST'] = 'localhost'
# web.config['MYSQL_USER'] = 'root'
# web.config['MYSQL_PASSWORD'] = ''
# web.config['MYSQL_DB'] = 'grafik'


modelknn = pickle.load(open('knn.pkl','rb'))
modelrf = pickle.load(open('rf.pkl','rb'))
modelnb = pickle.load(open('nb.pkl','rb'))


@web.route('/')
def index_fuc():
    return render_template('index.php')

@web.route('/knn')
def form_predictknn():
    return render_template('knn.php')

@web.route('/rf')
def form_predictrf():
    return render_template('rf.php')

@web.route('/nb')
def form_predictnb():
    return render_template('nb.php')

# KNN model
@web.route('/predictknn',methods=['POST'])
def predictknn():
    # features = [float(x) for x in request.form.values()]
    # final_features = [np.array(features)]
    if request.method == 'POST':
        data1 = request.form['SEX']
        data2 = request.form['UMUR']
        data3 = request.form['TB']
        final_features = np.array([[data1, data2, data3]])
        prediction = modelknn.predict(final_features)

        output = round(prediction[0], 2)

        if output == 0:
            return render_template('resultknn.php', prediction_text='Tidak Stunting')
        else:
            return render_template('resultknn.php', prediction_text='Stunting')

# Random forest model
@web.route('/predictrf',methods=['POST'])
def predictrf():
    # features = [float(x) for x in request.form.values()]
    # final_features = [np.array(features)]
    if request.method == 'POST':
        data1 = request.form['SEX']
        data2 = request.form['UMUR']
        data3 = request.form['TB']
        final_features = np.array([[data1, data2, data3]])
        predictionrf = modelrf.predict(final_features)

        output = round(predictionrf[0], 2)

        if output == 0:
            return render_template('resultrf.php', prediction_text='Tidak Stunting')
        else:
            return render_template('resultrf.php', prediction_text='Stunting')

# Navies Bayes model
@web.route('/predictnb',methods=['POST'])
def predictnb():
    # features = [float(x) for x in request.form.values()]
    # final_features = [np.array(features)]
    if request.method == 'POST':
        data1 = request.form['SEX']
        data2 = request.form['UMUR']
        data3 = request.form['TB']
        final_features = np.array([[data1, data2, data3]])
        predictionnb = modelnb.predict(final_features)

        output = round(predictionnb[0], 2)

        if output == 0:
            return render_template('resultnb.php', prediction_text='Tidak Stunting')
        else:
            return render_template('resultnb.php', prediction_text='Stunting')


if __name__ == '__main__':
    # web.run(host='0.0.0.0')
    web.run(debug=True)