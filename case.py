from pydantic import BaseModel, Field

class CaseCreate(BaseModel):
    title: str = Field(min_length=3)
    description: str
    client_id: str
