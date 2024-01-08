from django.db import models
from category.models import Category
from vendors.models import Vendor

# Create your models here.

class Product(models.Model):
    pId=models.IntegerField(primary_key=True, blank=False, null=False)
    category=models.ForeignKey(Category, on_delete=models.CASCADE)
    vid=models.ForeignKey(Vendor, on_delete=models.CASCADE, null=True)
    vName=models.ForeignKey(Vendor, on_delete=models.CASCADE, null=True)
    productName=models.CharField(max_length=255)
    owner=models.CharField(max_length=255)
    entry_by=models.CharField(max_length=255)
    title=models.CharField(max_length=255)
    premiumtype=models.CharField(max_length=255)
    sizes=models.CharField(max_length=255)
    tags=models.CharField(max_length=255)
    brandname=models.CharField(max_length=255)
    manufracturer=models.TextField(max_length=255)
    warrentytype=models.CharField(max_length=255)
    weight=models.IntegerField()
    packweight=models.IntegerField()
    packwidth=models.IntegerField()
    height=models.IntegerField()
    packheight=models.IntegerField()
    modelno=models.IntegerField()
    countryoforigin=models.CharField(max_length=100)
    image=models.ImageField(upload_to='media/products/')
    price=models.IntegerField()
    previous_price=models.IntegerField()
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)


    # yaha par upload_to ka mtlb hai kaha par hamko image save karna hai location kya hoga 

    class Meta:
        db_table = 'Product'

    def __str__(self):
        return self.productName

    @staticmethod
    def get_products():
        return Product.objects.all()

