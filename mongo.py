from pymongo import MongoClient

client = MongoClient("mongodb://mongo:27017")
db = client["legal_db"]
case_collection = db["cases"]
