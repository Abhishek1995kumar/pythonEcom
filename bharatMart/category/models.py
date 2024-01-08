from django.db import models

# Create your models here.

class Category(models.Model):
    catId=models.IntegerField(primary_key=True, blank=False, null=False)
    name=models.CharField(max_length=255)
    category=models.CharField(max_length=255)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    def __str__(self):
        # return "hello abhishek" # agar ye likhe to (Category object (3)) ki jagah par hello abhishek show hoga but hamko actual value show karni hai
        # isske liye hamko isska use karna hogga
        return self.name