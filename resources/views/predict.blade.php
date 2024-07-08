<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kira Tahmini</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 50px;
        }

        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kira Tahmini</h1>
        <form action="/predict-rent" method="POST">
            @csrf

            <label for="BHK">BHK (Number of Bedrooms, Hall, Kitchen):</label>
            <input type="text" id="BHK" name="BHK" required>

            <label for="Size">Size (Size of the Houses/Apartments/Flats in Square Feet):</label>
            <input type="text" id="Size" name="Size" required>

            <label for="Floor">Floor (Houses/Apartments/Flats situated in which Floor and Total Number of Floors):</label>
            <input type="text" id="Floor" name="Floor" required>

            <label for="AreaType">Area Type (Size of the Houses/Apartments/Flats calculated on either Super Area or Carpet Area or Build Area):</label>
            <select id="AreaType" name="AreaType" required>
                <option value="Super Area">Super Area</option>
                <option value="Carpet Area">Carpet Area</option>
                <option value="Build Area">Build Area</option>
            </select>

            <label for="AreaLocality">Area Locality (Locality of the Houses/Apartments/Flats like Salt Lake City):</label>
            <input type="text" id="AreaLocality" name="AreaLocality" required>

            <label for="City">City (City where the Houses/Apartments/Flats are Located):</label>
            <select id="City" name="City" required>
                <option value="Kolkata">Kolkata</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Delhi">Delhi</option>
                <option value="Chennai">Chennai</option>
                <option value="Hyderabad">Hyderabad</option>
            </select>

            <label for="FurnishingStatus">Furnishing Status (Furnishing Status of the Houses/Apartments/Flats):</label>
            <select id="FurnishingStatus" name="FurnishingStatus" required>
                <option value="Furnished">Furnished</option>
                <option value="Semi-Furnished">Semi-Furnished</option>
                <option value="Unfurnished">Unfurnished</option>
            </select>

            <label for="TenantPreferred">Tenant Preferred (Type of Tenant Preferred by the Owner or Agent):</label>
            <select id="TenantPreferred" name="TenantPreferred" required>
                <option value="Family">Family</option>
                <option value="Bachelors">Bachelors</option>
                <option value="Family/Bachelors">Family/Bachelors</option>
            </select>

            <label for="Bathroom">Bathroom (Number of Bathrooms):</label>
            <input type="text" id="Bathroom" name="Bathroom" required>

            <label for="PointOfContact">Point of Contact (Whom should you contact for more information regarding the Houses/Apartments/Flats):</label>
            <select id="PointOfContact" name="PointOfContact" required>
                <option value="Contact Owner">Contact Owner</option>
                <option value="Contact Agent">Contact Agent</option>
            </select>

            <button type="submit">Tahmin Et</button>
        </form>
    </div>
</body>
</html>
