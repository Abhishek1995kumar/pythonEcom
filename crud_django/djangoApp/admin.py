from django.contrib import admin
from djangoApp.models import UserDetails
# Register your models here.


class AdminUserDetails(admin.ModelAdmin):
    list_display=['fname', 'lname', 'address', 'mobile', 'email']

admin.site.register(UserDetails, AdminUserDetails)
