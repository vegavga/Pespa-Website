import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.metrics import accuracy_score
from sklearn.naive_bayes import GaussianNB
from sklearn import metrics
from sklearn.model_selection import KFold, cross_validate
from sklearn.ensemble import BaggingClassifier
import pickle
from sklearn.metrics import confusion_matrix
from sklearn.metrics import precision_score


# In[22]:


data=pd.read_csv("dataseimbangbener.csv")
data


# In[23]:


import matplotlib.pyplot as plt
plt.hist(data['label'])


# In[24]:


minSangatPendek = min(data.sangat_pendek)
maxSangatPendek = max(data.sangat_pendek)
print('Min Sangat Pendek : ', minSangatPendek)
print('Max Sangat Pendek : ', maxSangatPendek)


# In[25]:


minPendek= min(data.pendek)
maxPendek = max(data.pendek)
print('Min Pendek : ', minPendek)
print('Max Pendek : ', maxPendek)


# In[26]:


x = data.iloc[:, : -1]
y = data.label #Target variable
x.head()


# In[27]:


data.drop(['TB/U','sangat_pendek','pendek'] ,axis=1, inplace=True)


# In[28]:


# data['SEX'].replace(1,0)
# data


# In[30]:


# x = data.values
# print(x)
# x = np.delete(x,2,axis=1)
x = data.iloc[:, :3]
y = data['label'].values
x


# In[31]:


x_train, x_test, y_train, y_test = train_test_split(x, y, test_size = 0.2, random_state=0)
x_test


# In[32]:


x_train


# In[33]:


#naive Bayes
clf = GaussianNB()
clf.fit(x_train, y_train)
NB = clf.fit(x_train, y_train)


# In[34]:


estimators = []
y_pred = clf.predict(x_test)
estimators.append(('Naive Bayes',clf))
round(accuracy_score(y_test,y_pred),3)*100


# In[243]:


# from sklearn.ensemble import RandomForestClassifier

# rf=RandomForestClassifier(n_estimators=10)
# rf.fit(x_train,y_train)
# rf.score(x_test,y_test)


# In[244]:


#Import scikit-learn metrics module for accuracy calculation
from sklearn import metrics
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
print("classification:",classification_report(y_test,y_pred))
print("confusion:",confusion_matrix(y_test,y_pred))
print("Accuracy:",metrics.accuracy_score(y_test, y_pred))
print("Precision:", metrics.precision_score(y_test, y_pred.ravel()))
print("Recall:", metrics.recall_score(y_test, y_pred.ravel()))


# In[231]:


# y_pred = clf.predict(x_test)
print('Nilai x_test (nilai sebenarnya)\n'+'-'*12)
print(pd.DataFrame(x_test))
print('Nilai prediksi\n'+'-'*12)
print(pd.DataFrame(y_pred))
print('Nilai y_test (nilai sebenarnya)\n'+'-'*12)
print(pd.DataFrame(y_test))


# In[79]:


ensemble2 = BaggingClassifier(base_estimator=clf, n_jobs=4, random_state=0)
ensemble2.fit(x_train,y_train)
ensemble2_pred = ensemble2.predict(x_test)
# MENAMPILKAN PREDIKSI KEDALAM DATA FRAME
hai2 = {
    'Y True' : y_test,
    'Naive Bayes' : y_pred,
    'Bagging NB' : ensemble2_pred
}
print("PREDIKSI ALGORITMA NAIVE BAYES DENGAN BAGGING")
pd.DataFrame(hai2).head(7)


# In[80]:


kfold = KFold(n_splits=5)
scores2 = ['accuracy', 'precision', 'recall']
hasil2 = cross_validate(ensemble2, x_test, y_test, cv=kfold, scoring=scores2, return_train_score=True)
hasil2_ = pd.DataFrame(hasil2)


# In[81]:


# print("HASIL BAGGING DENGAN NAIVE BAYES")

accuracy = hasil2_.test_accuracy.mean() 
precision = hasil2_.test_precision.mean() 
recall = hasil2_.test_recall.mean()

print("Accuracy : %0.2f" % accuracy)
print("Precision : %0.2f " % precision)
print("Recall : %0.2f " % recall)

print("confusion:",confusion_matrix(y_test,y_pred))


# In[82]:


clf.predict([[1,34,84.3]])


# In[83]:


# from sklearn.model_selection import cross_val_score

# scores = cross_val_score(nb, X_train, y_train, cv = 10, scoring='accuracy')

# print('Cross-validation scores:{}'.format(scores))


# In[84]:


clf.score(x_test, y_test)


# In[85]:


type(x_test)


# In[86]:


pickle.dump(NB, open('nb.pkl','wb'))

