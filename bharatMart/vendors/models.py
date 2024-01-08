from django.db import models
from users.models import Country, City, State
from users.models import User

# Create your models here.

class Vendor(models.Model):
    venId=models.IntegerField(primary_key=True, blank=False, null=False)
    uId=models.ForeignKey(User, on_delete=models.CASCADE)
    name=models.CharField(max_length=255)
    mname=models.CharField(max_length=255)
    lname=models.CharField(max_length=255)
    photo=models.ImageField(max_length=255)
    gender=models.CharField(max_length=255)
    phone=models.IntegerField()
    fax=models.CharField(max_length=255)
    areaandstreet=models.CharField(max_length=255)
    landmark=models.CharField(max_length=255)
    addressproof=models.CharField(max_length=255)
    address=models.CharField(max_length=255)
    city = models.ForeignKey(City, on_delete=models.CASCADE, null=True)
    state = models.ForeignKey(State, on_delete=models.CASCADE, null=True)
    country = models.ForeignKey(Country, on_delete=models.CASCADE, null=True)
    zip=models.IntegerField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table="Vendor"
    
    def __str__(self):
        return self.name
    
    @staticmethod
    def get_person_data():
        return Vendor.objects.all()
