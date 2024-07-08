from flask import Flask, request, jsonify
import joblib
import numpy as np
import pandas as pd

app = Flask(__name__)

# Modeli yükle
model = joblib.load('house_rent_model.pkl')



def preprocess_data(data):
    BHK = int(data['BHK'])
    Size = float(data['Size'])
    Floor = int(data['Floor'])
    AreaType = data['AreaType']
    AreaLocality = data['AreaLocality']
    City = data['City']
    FurnishingStatus = data['FurnishingStatus']
    TenantPreferred = data['TenantPreferred']
    Bathroom = int(data['Bathroom'])
    PointOfContact = data['PointOfContact']

    # Veriyi DataFrame'e dönüştür
    df = pd.DataFrame([[BHK, Size, Floor, Bathroom, AreaType, AreaLocality, City, FurnishingStatus, TenantPreferred, PointOfContact]],
                    columns=['bhk', 'size', 'floor', 'bathroom', 'area_type', 'area_locality', 'city', 'furnishing_status' ,'tenant_preferred', 'PointOfContact'])

    # One-hot encoding
    df = pd.get_dummies(df, columns=['area_type', 'area_locality', 'city', 'furnishing_status', 'tenant_preferred','PointOfContact'])

    return df

@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json(force=True)
    
    # Girdi verilerini işleyin
    input_data = preprocess_data(data)
    
    # NumPy array formatına dönüştürün
    input_data = input_data.values.astype(np.float64)  # Tüm verileri sayısal değere dönüştür
    
    # Tahmini yapın
    prediction = model.predict(input_data)[0]
    
    # JSON olarak döndürün
    return jsonify({'rent_prediction': prediction})

if __name__ == '__main__':
    app.run(debug=True)
