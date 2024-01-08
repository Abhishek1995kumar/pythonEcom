from django.db import models

# Create your models here.

class UserDetails(models.Model):
    fname=models.CharField(max_length=20, blank=False, null=False)
    lname=models.CharField(max_length=20, blank=False, null=False)
    address=models.TextField(blank=False, null=False)
    mobile=models.IntegerField(blank=False, null=False)
    email=models.EmailField(max_length=50, blank=False, null=False)
    password=models.CharField(max_length=20, blank=False, null=False)

    class Meta:
        db_table='UserDetails'

    # __str__ func ka use ham iss liye karte hai kyoki jab admin me product ka actual
    # name show karna ho tab use karte hai __str__ method ka
    def __str__(self):
        return self.fname
    
    @staticmethod
    def get_user_data():
        return UserDetails.objects.all()