from db.mongo import case_collection

class CaseService:
    def create_case(self, data: dict):
        result = case_collection.insert_one(data)

        return {
            "id": str(result.inserted_id),
            **data
        }
