# -*- coding: utf-8 -*-
"""KNN_TA 2.ipynb



# Algoritma KNN
"""

"""**Import Library**

---
import library yang akan digunakan




"""

from sklearn.model_selection import train_test_split
from sklearn.preprocessing import StandardScaler
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import confusion_matrix
from sklearn.metrics import f1_score
from sklearn.metrics import accuracy_score
import sklearn.metrics as metrics
from sklearn.metrics import classification_report
from sklearn.model_selection import KFold, cross_validate
from sklearn.model_selection import cross_val_score
import numpy as np
import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

"""**Import Dataset**

---
Data yang telah didapat setelah dilakukan rekap data secara manual  akan dilakukan pembersihan data serta penambahan fitur yang digunakan.
"""

df=pd.read_csv('dataseimbangbener.csv')
df

"""**Data Cleaning**

---

membersihkan data, pada proses ini meningkatkan kualitas data yang juga berpengaruh terhadap produktivitas kerja secara keseluruhan.
"""

df.drop(["sangat_pendek","pendek","TB/U"],axis=1,inplace=True)
df

#pisahkan data feature dan target
X = df.iloc [:, : -1]    #sekumpulan feature untuk training dataset
y = df.iloc [:,-1: ].values.ravel()             #sekumpulan nilai target untuk training set

# X.head()
X.values

y

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state=0)

# #feature scaling
# scaler = StandardScaler()
# scaler.fit(X_train)

# X_train = scaler.transform(X_train)
# X_test = scaler.transform(X_test)

X_train.shape  #data training 80%

X_test.shape #data test 20%

# y_train.shape

# y_test.shape

# model learning data dengan dengan knn
from sklearn.neighbors import KNeighborsClassifier
classifier = KNeighborsClassifier(n_neighbors=3) # k=3
classifier.fit(X_train, y_train)

"""Predict

---


"""

#hasil prediksi

y_pred = classifier.predict(X_test) # yang diprediski dari data test
print("classification:")
print(classification_report(y_test,y_pred))
print("confusion:")
print(confusion_matrix(y_test,y_pred))
print("Accuracy:", accuracy_score(y_test, y_pred))
print("Precision:", metrics.precision_score(y_test, y_pred))
print("Recall:", metrics.recall_score(y_test, y_pred))

cols = {
    'Y True' : y_test,
    'predic' : y_pred,
    
}
print("Prediksi yang dihasilkan")
pd.DataFrame(cols)

# y_pred

# classifier.predict([[1,56,100.5]])

# ypredk = classifier.predict([[1, 55, 97.0]])
# ypredk

"""Pengukuran peformance

"""

kfold = KFold(n_splits=10)
scores = ['accuracy', 'precision', 'recall']
results = cross_validate(classifier, X_test, y_test, cv=kfold, scoring=scores, return_train_score=True)
results_data = pd.DataFrame(results)
results_data

print("Preformance Model KNN")

accuracy = results_data.test_accuracy.mean() 
precision = results_data.test_precision.mean() 
recall = results_data.test_recall.mean() 

print("Accuracy : %0.2f" % accuracy)
print("Precision : %0.2f " % precision)
print("Recall : %0.2f " % recall)

import pickle
pickle.dump(classifier, open('knn.pkl','wb'))

