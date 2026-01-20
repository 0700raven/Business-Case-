from fastapi import APIRouter, HTTPException
from schemas.case import CaseCreate
from services.case_service import CaseService

router = APIRouter()
service = CaseService()

@router.post("/cases", status_code=201)
def create_case(payload: CaseCreate):
    try:
        return service.create_case(payload.dict())
    except Exception:
        raise HTTPException(
            status_code=500,
            detail="Error creating case"
        )
