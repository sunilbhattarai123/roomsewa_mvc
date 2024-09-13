import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from flask import Flask,request , jsonify
from flask_mysqldb import MySQL


app = Flask(__name__)

app.config['MYSQL_HOST'] = "localhost"
app.config['MYSQL_USER'] = "root"
app.config['MYSQL_PASSWORD'] = ""
app.config['MYSQL_DB'] = "roomsewa"

mysql = MySQL(app)

def getVectorizer():
   return TfidfVectorizer(stop_words='english')

def getAllPropertiesX(user_id):
    cursor =  mysql.connection.cursor()
    cursor.execute(f"SELECT zone , city ,district,property_type,description,id from properties where user_id !='{user_id}' and state= 'active' and is_available = 1 ")
    properties = cursor.fetchall()
    cursor.close()
    # print(properties)
    return properties

def getUserPreferenceY(user_id):
   
    cursor =  mysql.connection.cursor()
    cursor.execute(f"SELECT p.zone,p.city,p.district,p.description,p.property_type From property_views v join properties p on v.post_id = p.id where v.user_id='{user_id}'")
    properties = cursor.fetchall()
    cursor.close()
    # print(properties)
    return properties
    



def calculateYVectors(vectorizer,propertyData):

    df = pd.DataFrame(propertyData)
    
    df['text'] = df[0] + ' ' + df[1] + ' ' + df[2]+ df[3] + ' ' + df[4]

    tfidf_vector =  vectorizer.transform(df['text'])

    good_view = pd.DataFrame(tfidf_vector.toarray(),columns=vectorizer.get_feature_names_out())
    print(good_view)
    return tfidf_vector



def calculateXVectors(vectorizer,properties):

    df = pd.DataFrame(properties)


    df['text'] = df[0] + ' ' + df[1] + ' ' + df[2]+ df[3] + ' ' + df[4]


    tfidf_vector =  vectorizer.fit_transform(df['text'])

    better_view = pd.DataFrame(tfidf_vector.toarray(),columns=vectorizer.get_feature_names_out() )
    print(better_view)
    
    return tfidf_vector

def calculateCosineSimilarity(x_vector,y_vector):
    similarity = cosine_similarity(x_vector,y_vector)


    np_smilarity = np.array(similarity)

    eachRowSimilarity = np.sum(np_smilarity,axis=1)

    print(eachRowSimilarity)
    return eachRowSimilarity

@app.route('/show/similar',methods=["GET"])
def similar():

    user_id = request.args.get('user_id')
    if not user_id:
        return "please provide user id"
    
    vectorizer = getVectorizer()

    propertiesX = getAllPropertiesX(user_id)

    userDataY = getUserPreferenceY(user_id)

    if(len(userDataY)==0):
        ids = []
        for i in range (len (propertiesX)):
            ids.append(propertiesX[i][5])
        return jsonify(ids)

    x_vector = calculateXVectors(vectorizer,propertiesX)
    y_vector = calculateYVectors(vectorizer,userDataY)

    similarities = calculateCosineSimilarity(x_vector,y_vector)

    
    rowSimilarityWithData = list(zip(propertiesX,similarities))

    sortedSimilarityProperty = sorted(rowSimilarityWithData,key=lambda x: x[1], reverse=True)
    sorted_property , sorted_scores = zip(*sortedSimilarityProperty)


    ids = []
    for i in range(len(sorted_property)):
        ids.append(sorted_property[i][5])

    return jsonify(ids)












app.run(port = 5000)


