from django.urls import path, include
from .views.frontEnd import *
urlpatterns = [
    path('', home, name="home")
]