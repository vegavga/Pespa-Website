import pandas as pd
from pandas import ExcelWriter
from pandas import ExcelFile

df = pd.read_csv('dataseimbangbener.csv')
df.drop(['TB/U','sangat_pendek','pendek'] ,axis=1, inplace = True)
import sklearn
# Import train_test_split function
from sklearn.model_selection import train_test_split

X=df.drop('label',axis=1)  # Features
y=df['label']  # Labels

# Split dataset into training set and test set
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.5,random_state=0) # 50% training and 30% test
from sklearn.ensemble import RandomForestClassifier

#Create a Gaussian Classifier
clf=RandomForestClassifier(n_estimators=10,random_state=0)

#Train the model using the training sets y_pred=clf.predict(X_test)
rf=clf.fit(X_train,y_train)
y_pred=clf.predict(X_test)
import pickle
pickle.dump(rf, open('rf.pkl','wb'))