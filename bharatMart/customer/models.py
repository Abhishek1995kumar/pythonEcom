from django.db import models
from users.models import User
from users.models import City, State, Country
# Create your models here.

class Customer(models.Model):
    cusId=models.IntegerField(primary_key=True, blank=False, null=False)
    username=models.OneToOneField(User, on_delete=models.CASCADE)
    name=models.CharField(max_length=255)
    contact=models.IntegerField()
    email=models.CharField(max_length=100)
    password=models.CharField(max_length=20)    
    photo=models.ImageField(max_length=255)
    gender=models.CharField(max_length=255)
    id_proof=models.CharField(max_length=255)
    phone=models.IntegerField()
    alternate_phone=models.IntegerField()
    fax=models.CharField(max_length=255)
    address=models.CharField(max_length=255)
    address2=models.CharField(max_length=255)
    addressproof=models.CharField(max_length=255)
    city=models.ForeignKey(City, on_delete=models.CASCADE, null=True)
    state=models.ForeignKey(State, on_delete=models.CASCADE, null=True)
    country=models.ForeignKey(Country, on_delete=models.CASCADE, null=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'Customer'

    def __str__(self):
        return self.name

