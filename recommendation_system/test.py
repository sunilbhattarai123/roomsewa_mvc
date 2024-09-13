import pandas as pd
import numpy as np
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity



vectorizer = TfidfVectorizer(stop_words='english')
# vectorizer = TfidfVectorizer()

def calculateNewProfile(propertyData,weight):

    df = pd.DataFrame(propertyData)

    # df['text'] = df['title'] + ' ' + df['description']

    # df['weight'] = df['type'].map(weight)

    # print(df['weight'])

    tfidf_vector =  vectorizer.transform(df['data'])

    # weightted_tfidf =  tfidf_data.multiply(df['weight'].values[:,None])
    # print(weightted_tfidf)

    good_view = pd.DataFrame(tfidf_vector.toarray(),columns=vectorizer.get_feature_names_out())
    print(good_view)
    return tfidf_vector
    # user_profile_vector = np.mean(weightted_tfidf,axis=0)

    # print(user_profile_vector)

    # user_profile_array = np.asarray(user_profile_vector)

    return weightted_tfidf


#x is th no of documents from which to recommend the user
#   y is the no of documents which users has liked or interacted
# z= x-y


def calculateProfile(properties,weight):

    df = pd.DataFrame(properties)

    df['text'] = df['location'] + ' ' + df['property_type'] + ' ' + df['description']

    # df['weight'] = df['type'].map(weight)

    # print(df['weight'])

    tfidf_vector =  vectorizer.fit_transform(df['text'])

    # weightted_tfidf =  tfidf_data.multiply(df['weight'].values[:,None])

    better_view = pd.DataFrame(tfidf_vector.toarray(),columns=vectorizer.get_feature_names_out() )
    print(better_view)
    
    return tfidf_vector



    # user_profile_vector = np.mean(weightted_tfidf,axis=0)

    # # print(user_profile_vector)

    # user_profile_array = np.asarray(user_profile_vector)

    # return weightted_tfidf
type_weights = {
    'location':3,
    'property_type':2,
    'description':1,
}

propertyFromWhichToRecommend = [
    {'location':'butwal', 'description':'near to hospital line ','property_type':'room'},
    {'location':'butwal', 'description':'near to bhatbhateni ','property_type':'flat'},
    {'location':'kathmandu', 'description':'near to buspark ','property_type':'room'},
    {'location':'kathmandu', 'description':'milanchowk near to new plaza ','property_type':'flat'},

]

userPropertyInteracted = [
    {'data':'butwal'},
    {'data':'room butwal milanchowk near to hospital line'},
]


x_vector = calculateProfile(propertyFromWhichToRecommend,type_weights)
print("**************")
y_vector = calculateNewProfile(userPropertyInteracted,type_weights)
print("**************")

similarity = cosine_similarity(x_vector,y_vector)
print(similarity)



np_smilarity = np.array(similarity)

eachRowSimilarity = np.sum(np_smilarity,axis=1)
print('*******')
print(eachRowSimilarity)

rowSimilarityWithData = list(zip(propertyFromWhichToRecommend,eachRowSimilarity))

sortedSimilarityProperty = sorted(rowSimilarityWithData,key=lambda x: x[1], reverse=True)
sorted_property , sorted_scores = zip(*sortedSimilarityProperty)

pandaSorted = pd.DataFrame(sorted_property)

print(pandaSorted)

sorted = np.sort(eachRowSimilarity)[::-1]
print('*******')
print('*******')

print(sorted)



