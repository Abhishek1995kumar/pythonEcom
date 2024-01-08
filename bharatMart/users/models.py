from django.db import models
# Create your models here.

class Country(models.Model):
    cid=models.IntegerField(primary_key=True, blank=False, null=False)
    country_name=models.CharField(max_length=255)

    class Meta:
        db_table='Country'

    def __str__(self):
        return self.country_name
    
    @staticmethod
    def get_country_data():
        return Country.objects.all()
    

class State(models.Model):
    state_name=models.CharField(max_length=255)
    cid=models.IntegerField()

    class Meta:
        db_table='State'

    def __str__(self):
        return self.state_name
    
    @staticmethod
    def get_state_data():
        return State.objects.all()
    

class City(models.Model):
    ct_id=models.IntegerField(primary_key=True, blank=False, null=False)
    city_name=models.CharField(max_length=255)
    stid=models.IntegerField()
    cid=models.IntegerField()

    class Meta:
        db_table='City'

    def __str__(self):
        return self.city_name
    
    @staticmethod
    def get_city_data():
        return City.objects.all()


class User(models.Model):
    uId = models.IntegerField(primary_key=True, blank=False, null=False, unique=True)
    name=models.CharField(max_length=255)
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
    email=models.CharField(max_length=100)
    password=models.CharField(max_length=20)
    gst_no=models.IntegerField()
    zip=models.IntegerField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table='User'
    
    def __str__(self):
        return self.name
    
    @staticmethod
    def get_person_data():
        return User.objects.all()